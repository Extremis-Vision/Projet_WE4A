<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* annonces.html.twig */
class __TwigTemplate_de7178faba93352e889b2dc4465f0a74 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        yield "Annonces — AutoMarket";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "<div class=\"px-6 py-8 max-w-7xl mx-auto\">

    <h1 class=\"text-3xl font-bold text-primary font-['ManRope'] mb-6\">Toutes les annonces</h1>

    ";
        // line 11
        yield "    <form id=\"filtres-form\" class=\"bg-white rounded-xl p-5 shadow-sm mb-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-4\">

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Marque</label>
            <select name=\"marque_id\" id=\"filter-marque\" class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none bg-white\">
                <option value=\"\">Toutes</option>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 18
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 18), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 18, $this->source); })()), "marque_id", [], "any", false, false, false, 18) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 18))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 18), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "            </select>
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Modèle</label>
            <select name=\"modele_id\" id=\"filter-modele\" class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none bg-white disabled:opacity-50\" ";
        // line 25
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "marque_id", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                <option value=\"\">Tous</option>
                ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "marque_id", [], "any", false, false, false, 27) && CoreExtension::getAttribute($this->env, $this->source, ($context["modelesParMarque"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "marque_id", [], "any", false, false, false, 27), [], "array", true, true, false, 27))) {
            // line 28
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modelesParMarque"]) || array_key_exists("modelesParMarque", $context) ? $context["modelesParMarque"] : (function () { throw new RuntimeError('Variable "modelesParMarque" does not exist.', 28, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()), "marque_id", [], "any", false, false, false, 28), [], "array", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["mo"]) {
                // line 29
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mo"], "id", [], "any", false, false, false, 29), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "modele_id", [], "any", false, false, false, 29) == CoreExtension::getAttribute($this->env, $this->source, $context["mo"], "id", [], "any", false, false, false, 29))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mo"], "nom", [], "any", false, false, false, 29), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                ";
        }
        // line 32
        yield "            </select>
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Prix min (€)</label>
            <input type=\"number\" name=\"prix_min\" min=\"0\" step=\"500\"
                   value=\"";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "prix_min", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "prix_min", [], "any", false, false, false, 38)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "prix_min", [], "any", false, false, false, 38), "html", null, true)) : (""));
        yield "\"
                   placeholder=\"0\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Prix max (€)</label>
            <input type=\"number\" name=\"prix_max\" min=\"0\" step=\"500\"
                   value=\"";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "prix_max", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "prix_max", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "prix_max", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\"
                   placeholder=\"100 000\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Km max</label>
            <input type=\"number\" name=\"km_max\" min=\"0\" step=\"5000\"
                   value=\"";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "km_max", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 54, $this->source); })()), "km_max", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 54, $this->source); })()), "km_max", [], "any", false, false, false, 54), "html", null, true)) : (""));
        yield "\"
                   placeholder=\"300 000\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Année min</label>
            <input type=\"number\" name=\"annee_min\" min=\"1990\" max=\"2025\"
                   value=\"";
        // line 62
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "annee_min", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 62, $this->source); })()), "annee_min", [], "any", false, false, false, 62)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 62, $this->source); })()), "annee_min", [], "any", false, false, false, 62), "html", null, true)) : (""));
        yield "\"
                   placeholder=\"2000\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Année max</label>
            <input type=\"number\" name=\"annee_max\" min=\"1990\" max=\"2025\"
                   value=\"";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "annee_max", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 70, $this->source); })()), "annee_max", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 70, $this->source); })()), "annee_max", [], "any", false, false, false, 70), "html", null, true)) : (""));
        yield "\"
                   placeholder=\"2025\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>
    </form>

    ";
        // line 77
        yield "    <p id=\"compteur\" class=\"text-tertiary text-sm mb-4\">
        <span id=\"nb-resultats\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 78, $this->source); })())), "html", null, true);
        yield "</span> annonce(s) trouvée(s)
    </p>

    ";
        // line 82
        yield "    <div id=\"liste-annonces\">
        ";
        // line 83
        yield from $this->load("annonce/_liste.html.twig", 83)->unwrap()->yield(CoreExtension::merge($context, ["annonces" => (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 83, $this->source); })())]));
        // line 84
        yield "    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        yield "<script>
const MODELES_PAR_MARQUE = ";
        // line 91
        yield json_encode((isset($context["modelesParMarque"]) || array_key_exists("modelesParMarque", $context) ? $context["modelesParMarque"] : (function () { throw new RuntimeError('Variable "modelesParMarque" does not exist.', 91, $this->source); })()));
        yield ";
(function () {
    var selMarque = document.getElementById('filter-marque');
    var selModele = document.getElementById('filter-modele');

    selMarque.addEventListener('change', function () {
        var mid = this.value;
        selModele.innerHTML = '<option value=\"\">Tous</option>';
        if (mid && MODELES_PAR_MARQUE[mid]) {
            MODELES_PAR_MARQUE[mid].forEach(function (mo) {
                var opt = document.createElement('option');
                opt.value = mo.id;
                opt.textContent = mo.nom;
                selModele.appendChild(opt);
            });
            selModele.disabled = false;
        } else {
            selModele.disabled = true;
        }
    });
})();
</script>
<script src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/annonces.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  282 => 113,  257 => 91,  254 => 90,  244 => 89,  233 => 84,  231 => 83,  228 => 82,  222 => 78,  219 => 77,  210 => 70,  199 => 62,  188 => 54,  177 => 46,  166 => 38,  158 => 32,  155 => 31,  140 => 29,  135 => 28,  133 => 27,  126 => 25,  119 => 20,  104 => 18,  100 => 17,  92 => 11,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Annonces — AutoMarket{% endblock %}

{% block main %}
<div class=\"px-6 py-8 max-w-7xl mx-auto\">

    <h1 class=\"text-3xl font-bold text-primary font-['ManRope'] mb-6\">Toutes les annonces</h1>

    {# Filtres #}
    <form id=\"filtres-form\" class=\"bg-white rounded-xl p-5 shadow-sm mb-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-4\">

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Marque</label>
            <select name=\"marque_id\" id=\"filter-marque\" class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none bg-white\">
                <option value=\"\">Toutes</option>
                {% for m in marques %}
                    <option value=\"{{ m.id_marque }}\" {% if filters.marque_id == m.id_marque %}selected{% endif %}>{{ m.nom }}</option>
                {% endfor %}
            </select>
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Modèle</label>
            <select name=\"modele_id\" id=\"filter-modele\" class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none bg-white disabled:opacity-50\" {% if not filters.marque_id %}disabled{% endif %}>
                <option value=\"\">Tous</option>
                {% if filters.marque_id and modelesParMarque[filters.marque_id] is defined %}
                    {% for mo in modelesParMarque[filters.marque_id] %}
                        <option value=\"{{ mo.id }}\" {% if filters.modele_id == mo.id %}selected{% endif %}>{{ mo.nom }}</option>
                    {% endfor %}
                {% endif %}
            </select>
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Prix min (€)</label>
            <input type=\"number\" name=\"prix_min\" min=\"0\" step=\"500\"
                   value=\"{{ filters.prix_min ?? '' }}\"
                   placeholder=\"0\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Prix max (€)</label>
            <input type=\"number\" name=\"prix_max\" min=\"0\" step=\"500\"
                   value=\"{{ filters.prix_max ?? '' }}\"
                   placeholder=\"100 000\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Km max</label>
            <input type=\"number\" name=\"km_max\" min=\"0\" step=\"5000\"
                   value=\"{{ filters.km_max ?? '' }}\"
                   placeholder=\"300 000\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Année min</label>
            <input type=\"number\" name=\"annee_min\" min=\"1990\" max=\"2025\"
                   value=\"{{ filters.annee_min ?? '' }}\"
                   placeholder=\"2000\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1 uppercase tracking-wide\">Année max</label>
            <input type=\"number\" name=\"annee_max\" min=\"1990\" max=\"2025\"
                   value=\"{{ filters.annee_max ?? '' }}\"
                   placeholder=\"2025\"
                   class=\"w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-secondary focus:outline-none\">
        </div>
    </form>

    {# Compteur #}
    <p id=\"compteur\" class=\"text-tertiary text-sm mb-4\">
        <span id=\"nb-resultats\">{{ annonces|length }}</span> annonce(s) trouvée(s)
    </p>

    {# Grille des annonces #}
    <div id=\"liste-annonces\">
        {% include 'annonce/_liste.html.twig' with {'annonces': annonces} %}
    </div>

</div>
{% endblock %}

{% block javascripts %}
<script>
const MODELES_PAR_MARQUE = {{ modelesParMarque|json_encode|raw }};
(function () {
    var selMarque = document.getElementById('filter-marque');
    var selModele = document.getElementById('filter-modele');

    selMarque.addEventListener('change', function () {
        var mid = this.value;
        selModele.innerHTML = '<option value=\"\">Tous</option>';
        if (mid && MODELES_PAR_MARQUE[mid]) {
            MODELES_PAR_MARQUE[mid].forEach(function (mo) {
                var opt = document.createElement('option');
                opt.value = mo.id;
                opt.textContent = mo.nom;
                selModele.appendChild(opt);
            });
            selModele.disabled = false;
        } else {
            selModele.disabled = true;
        }
    });
})();
</script>
<script src=\"{{ asset('js/annonces.js') }}\"></script>
{% endblock %}
", "annonces.html.twig", "C:\\projets\\Projet_WE4A\\templates\\annonces.html.twig");
    }
}
