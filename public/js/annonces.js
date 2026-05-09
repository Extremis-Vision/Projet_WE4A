/* ===== AJAX Filtres (page liste des annonces) ===== */
(function () {
    const form = document.getElementById('filtres-form');
    if (!form) return;

    const container = document.getElementById('liste-annonces');
    const counter   = document.getElementById('nb-resultats');
    let debounceTimer = null;

    function applyFilters() {
        const params = new URLSearchParams(new FormData(form));
        
        // Ensure sort is included even if the select is outside the form DOM element
        const sortSelect = document.getElementById('sort-select');
        if (sortSelect && sortSelect.value) {
            params.set('sort', sortSelect.value);
        }

        // Remove empty values
        for (const [key, value] of [...params.entries()]) {
            if (!value) params.delete(key);
        }

        fetch('/annonces?' + params.toString(), {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(function (res) { return res.text(); })
        .then(function (html) {
            container.innerHTML = html;
            // Mettre à jour le compteur
            const cards = container.querySelectorAll('a[href]');
            if (counter) counter.textContent = cards.length;
        })
        .catch(function (err) { console.error('Erreur filtre AJAX:', err); });
    }

    // Déclencher sur chaque changement de filtre (avec debounce sur les inputs)
    form.querySelectorAll('select').forEach(function (el) {
        el.addEventListener('change', applyFilters);
    });

    const sortSelect = document.getElementById('sort-select');
    if (sortSelect) {
        sortSelect.addEventListener('change', applyFilters);
    }

    form.querySelectorAll('input[type="number"]').forEach(function (el) {
        el.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(applyFilters, 500);
        });
    });
})();


/* ===== Cascade dropdowns (formulaire création/modification) ===== */
(function () {
    if (typeof CATALOG === 'undefined') return;
    if (typeof TomSelect === 'undefined') return;

    var selMarque     = document.getElementById('sel-marque');
    var selModele     = document.getElementById('sel-modele');
    var selGeneration = document.getElementById('sel-generation');
    var selVersion    = document.getElementById('sel-version');

    if (!selMarque) return;

    // Remove Tailwind classes that conflict with TomSelect styling
    [selMarque, selModele, selGeneration, selVersion].forEach(function(el) {
        el.classList.remove('px-4','py-3','border','border-gray-200','rounded-lg','bg-white',
            'focus:outline-none','focus:ring-2','focus:ring-secondary','text-primary','text-sm',
            'disabled:opacity-50');
    });

    var tsMarque, tsModele, tsGeneration, tsVersion;

    /* --- helpers --- */
    function resetTS(ts, placeholder) {
        ts.clear(true);
        ts.clearOptions();
        ts.addOption({ value: '', text: placeholder });
        ts.refreshOptions(false);
        ts.disable();
    }

    function populateTS(ts, items, labelFn, placeholder) {
        ts.clear(true);
        ts.clearOptions();
        ts.addOption({ value: '', text: placeholder });
        items.forEach(function (item) {
            ts.addOption({ value: String(item.id), text: labelFn(item) });
        });
        ts.refreshOptions(false);
        ts.enable();
    }

    /* --- Cascade callbacks --- */
    function onMarqueChange(value) {
        resetTS(tsModele, 'Sélectionner un modèle');
        resetTS(tsGeneration, 'Sélectionner une génération');
        resetTS(tsVersion, 'Sélectionner une version');
        selVersion.name = '';

        var marque = CATALOG.find(function (m) { return m.id == value; });
        if (!marque) return;

        populateTS(tsModele, marque.modeles, function (mo) { return mo.nom; }, 'Sélectionner un modèle');
    }

    function onModeleChange(value) {
        resetTS(tsGeneration, 'Sélectionner une génération');
        resetTS(tsVersion, 'Sélectionner une version');
        selVersion.name = '';

        var marque = CATALOG.find(function (m) { return m.id == tsMarque.getValue(); });
        if (!marque) return;
        var modele = marque.modeles.find(function (mo) { return mo.id == value; });
        if (!modele) return;

        populateTS(tsGeneration, modele.generations, function (g) {
            return g.nom || '(génération ' + g.id + ')';
        }, 'Sélectionner une génération');
    }

    function onGenerationChange(value) {
        resetTS(tsVersion, 'Sélectionner une version');
        selVersion.name = '';

        var marque = CATALOG.find(function (m) { return m.id == tsMarque.getValue(); });
        if (!marque) return;
        var modele = marque.modeles.find(function (mo) { return mo.id == tsModele.getValue(); });
        if (!modele) return;
        var gen = modele.generations.find(function (g) { return g.id == value; });
        if (!gen) return;

        populateTS(tsVersion, gen.versions, function (v) {
            var label = v.nom;
            if (v.bv) label += ' — ' + v.bv;
            return label;
        }, 'Sélectionner une version');
        selVersion.name = 'id_version';
    }

    /* --- Build marque options on the native select FIRST --- */
    CATALOG.forEach(function (m) {
        var opt = document.createElement('option');
        opt.value = m.id;
        opt.textContent = m.nom;
        selMarque.appendChild(opt);
    });

    /* --- Initialize TomSelect instances WITH onChange --- */
    tsMarque = new TomSelect(selMarque, {
        create: false,
        placeholder: 'Sélectionner une marque',
        onChange: onMarqueChange
    });

    tsModele = new TomSelect(selModele, {
        create: false,
        placeholder: 'Sélectionner un modèle',
        onChange: onModeleChange
    });
    tsModele.disable();

    tsGeneration = new TomSelect(selGeneration, {
        create: false,
        placeholder: 'Sélectionner une génération',
        onChange: onGenerationChange
    });
    tsGeneration.disable();

    tsVersion = new TomSelect(selVersion, {
        create: false,
        placeholder: 'Sélectionner une version'
    });
    tsVersion.disable();

    /* --- Pre-select when editing an existing annonce --- */
    if (typeof SELECTED_VERSION !== 'undefined' && SELECTED_VERSION) {
        outer: for (var mi = 0; mi < CATALOG.length; mi++) {
            var m = CATALOG[mi];
            for (var moi = 0; moi < m.modeles.length; moi++) {
                var mo = m.modeles[moi];
                for (var gi = 0; gi < mo.generations.length; gi++) {
                    var g = mo.generations[gi];
                    for (var vi = 0; vi < g.versions.length; vi++) {
                        var v = g.versions[vi];
                        if (v.id == SELECTED_VERSION) {
                            // 1) Select marque (triggers onMarqueChange → populates modeles)
                            tsMarque.setValue(String(m.id));

                            // 2) After modeles populated, select modele
                            setTimeout((function(moId, gId, vId) {
                                return function() {
                                    tsModele.setValue(String(moId));
                                    // 3) After generations populated, select generation
                                    setTimeout(function() {
                                        tsGeneration.setValue(String(gId));
                                        // 4) After versions populated, select version
                                        setTimeout(function() {
                                            tsVersion.setValue(String(vId));
                                        }, 50);
                                    }, 50);
                                };
                            })(mo.id, g.id, v.id), 50);

                            break outer;
                        }
                    }
                }
            }
        }
    }
})();
