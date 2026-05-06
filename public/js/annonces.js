/* ===== AJAX Filtres (page liste des annonces) ===== */
(function () {
    const form = document.getElementById('filtres-form');
    if (!form) return;

    const container = document.getElementById('liste-annonces');
    const counter   = document.getElementById('nb-resultats');
    let debounceTimer = null;

    function applyFilters() {
        const params = new URLSearchParams(new FormData(form));
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

    const selMarque     = document.getElementById('sel-marque');
    const selModele     = document.getElementById('sel-modele');
    const selGeneration = document.getElementById('sel-generation');
    const selVersion    = document.getElementById('sel-version');

    if (!selMarque) return;

    function resetSelect(sel, placeholder) {
        sel.innerHTML = '<option value="">' + placeholder + '</option>';
        sel.disabled = true;
    }

    function populateSelect(sel, items, labelFn) {
        sel.innerHTML = '<option value="">Sélectionner</option>';
        items.forEach(function (item) {
            const opt = document.createElement('option');
            opt.value = item.id;
            opt.textContent = labelFn(item);
            sel.appendChild(opt);
        });
        sel.disabled = false;
    }

    // Peupler les marques
    CATALOG.forEach(function (m) {
        const opt = document.createElement('option');
        opt.value = m.id;
        opt.textContent = m.nom;
        selMarque.appendChild(opt);
    });

    selMarque.addEventListener('change', function () {
        resetSelect(selModele, 'Sélectionner un modèle');
        resetSelect(selGeneration, 'Sélectionner une génération');
        resetSelect(selVersion, 'Sélectionner une version');
        selVersion.name = '';

        const marque = CATALOG.find(function (m) { return m.id == selMarque.value; });
        if (!marque) return;

        populateSelect(selModele, marque.modeles, function (mo) { return mo.nom; });
    });

    selModele.addEventListener('change', function () {
        resetSelect(selGeneration, 'Sélectionner une génération');
        resetSelect(selVersion, 'Sélectionner une version');
        selVersion.name = '';

        const marque = CATALOG.find(function (m) { return m.id == selMarque.value; });
        if (!marque) return;
        const modele = marque.modeles.find(function (mo) { return mo.id == selModele.value; });
        if (!modele) return;

        populateSelect(selGeneration, modele.generations, function (g) {
            return g.nom || '(génération ' + g.id + ')';
        });
    });

    selGeneration.addEventListener('change', function () {
        resetSelect(selVersion, 'Sélectionner une version');
        selVersion.name = '';

        const marque = CATALOG.find(function (m) { return m.id == selMarque.value; });
        if (!marque) return;
        const modele = marque.modeles.find(function (mo) { return mo.id == selModele.value; });
        if (!modele) return;
        const gen = modele.generations.find(function (g) { return g.id == selGeneration.value; });
        if (!gen) return;

        populateSelect(selVersion, gen.versions, function (v) {
            let label = v.nom;
            if (v.bv) label += ' — ' + v.bv;
            return label;
        });
        selVersion.name = 'id_version';
    });

    // Pré-sélectionner si on modifie une annonce existante
    if (typeof SELECTED_VERSION !== 'undefined' && SELECTED_VERSION) {
        outer: for (const m of CATALOG) {
            for (const mo of m.modeles) {
                for (const g of mo.generations) {
                    for (const v of g.versions) {
                        if (v.id == SELECTED_VERSION) {
                            selMarque.value = m.id;
                            selMarque.dispatchEvent(new Event('change'));
                            setTimeout(function () {
                                selModele.value = mo.id;
                                selModele.dispatchEvent(new Event('change'));
                                setTimeout(function () {
                                    selGeneration.value = g.id;
                                    selGeneration.dispatchEvent(new Event('change'));
                                    setTimeout(function () {
                                        selVersion.value = v.id;
                                    }, 0);
                                }, 0);
                            }, 0);
                            break outer;
                        }
                    }
                }
            }
        }
    }
})();
