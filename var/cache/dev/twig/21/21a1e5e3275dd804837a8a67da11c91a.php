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

/* admin/catalogue_versions.html.twig */
class __TwigTemplate_1319ecdae66d881a8a2dd6e9fbad6476 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue_versions.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 3, $this->source); })()), "generation_nom", [], "any", false, false, false, 3), "html", null, true);
        yield " — Catalogue Admin";
        
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
        yield "<div class=\"max-w-7xl mx-auto px-6 py-8\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 9
            yield "        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            yield "        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    <div class=\"flex items-center gap-2 text-xs text-tertiary mb-6\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\" class=\"hover:text-primary\">Catalogue</a>
        <span>›</span>
        <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_modeles", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 18, $this->source); })()), "id_marque", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"hover:text-primary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 18, $this->source); })()), "marque_nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
        <span>›</span>
        <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_generations", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 20, $this->source); })()), "id_modele", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" class=\"hover:text-primary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 20, $this->source); })()), "modele_nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</a>
        <span>›</span>
        <span class=\"text-primary font-medium\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 22, $this->source); })()), "generation_nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</span>
    </div>

    <div class=\"flex items-center justify-between mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 26, $this->source); })()), "generation_nom", [], "any", false, false, false, 26), "html", null, true);
        yield " — Versions</h1>
        <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_generations", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 27, $this->source); })()), "id_modele", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\" class=\"text-sm text-tertiary hover:text-primary\">← ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 27, $this->source); })()), "modele_nom", [], "any", false, false, false, 27), "html", null, true);
        yield "</a>
    </div>

    <div class=\"grid grid-cols-1 xl:grid-cols-5 gap-6\">

        ";
        // line 33
        yield "        <div class=\"xl:col-span-3 space-y-4\">
            <div class=\"bg-white rounded-xl shadow-sm px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 35, $this->source); })())), "html", null, true);
        yield " version";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 35, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</h2>
            </div>

            ";
        // line 38
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "            <div class=\"bg-white rounded-xl shadow-sm px-5 py-8 text-center text-tertiary text-sm\">Aucune version.</div>
            ";
        } else {
            // line 41
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 42
                yield "                <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
                    ";
                // line 44
                yield "                    <div class=\"flex items-center justify-between px-5 py-3 border-b border-gray-100\">
                        <h3 class=\"font-semibold text-primary text-sm\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nom", [], "any", false, false, false, 45), "html", null, true);
                yield "</h3>
                        <form action=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_version", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["v"], "id_version", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nom", [], "any", false, false, false, 47), "js"), "html", null, true);
                yield " ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors px-2 py-1 rounded hover:bg-red-50\">
                                ✕ Supprimer
                            </button>
                        </form>
                    </div>

                    <div class=\"p-5 grid grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-3 text-xs\">

                        ";
                // line 57
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "transmission", [], "any", false, false, false, 57) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "boite_vitesse", [], "any", false, false, false, 57)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_rapport", [], "any", false, false, false, 57))) {
                    // line 58
                    yield "                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Motorisation</p>
                            <div class=\"flex flex-wrap gap-3\">
                                ";
                    // line 61
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "transmission", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 62
                        yield "                                    <span><span class=\"text-tertiary\">Transmission :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "transmission", [], "any", false, false, false, 62), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 64
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "boite_vitesse", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 65
                        yield "                                    <span><span class=\"text-tertiary\">Boîte :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "boite_vitesse", [], "any", false, false, false, 65), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 67
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_rapport", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 68
                        yield "                                    <span><span class=\"text-tertiary\">Rapports :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_rapport", [], "any", false, false, false, 68), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 70
                    yield "                            </div>
                        </div>
                        ";
                }
                // line 73
                yield "
                        ";
                // line 75
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_places", [], "any", false, false, false, 75) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_portes", [], "any", false, false, false, 75)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "vitesse_max", [], "any", false, false, false, 75))) {
                    // line 76
                    yield "                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Carrosserie & performances</p>
                            <div class=\"flex flex-wrap gap-3\">
                                ";
                    // line 79
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_places", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 80
                        yield "                                    <span><span class=\"text-tertiary\">Places :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_places", [], "any", false, false, false, 80), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 82
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_portes", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 83
                        yield "                                    <span><span class=\"text-tertiary\">Portes :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_portes", [], "any", false, false, false, 83), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 85
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "vitesse_max", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 86
                        yield "                                    <span><span class=\"text-tertiary\">Vmax :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "vitesse_max", [], "any", false, false, false, 86), "html", null, true);
                        yield " km/h</span></span>
                                ";
                    }
                    // line 88
                    yield "                            </div>
                        </div>
                        ";
                }
                // line 91
                yield "
                        ";
                // line 93
                yield "                        ";
                if ((((((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consomation_mixte", [], "any", false, false, false, 93) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consommation_urbaine", [], "any", false, false, false, 93)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consommation_extra_urbaine", [], "any", false, false, false, 93)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "emission_CO2", [], "any", false, false, false, 93)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Norme_euro", [], "any", false, false, false, 93)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Crit_air", [], "any", false, false, false, 93))) {
                    // line 94
                    yield "                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Consommation & émissions</p>
                            <div class=\"flex flex-wrap gap-3\">
                                ";
                    // line 97
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consommation_urbaine", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 98
                        yield "                                    <span><span class=\"text-tertiary\">Urbain :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consommation_urbaine", [], "any", false, false, false, 98), "html", null, true);
                        yield " L/100</span></span>
                                ";
                    }
                    // line 100
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consommation_extra_urbaine", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 101
                        yield "                                    <span><span class=\"text-tertiary\">Extra-urbain :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consommation_extra_urbaine", [], "any", false, false, false, 101), "html", null, true);
                        yield " L/100</span></span>
                                ";
                    }
                    // line 103
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consomation_mixte", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 104
                        yield "                                    <span><span class=\"text-tertiary\">Mixte :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "consomation_mixte", [], "any", false, false, false, 104), "html", null, true);
                        yield " L/100</span></span>
                                ";
                    }
                    // line 106
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "emission_CO2", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 107
                        yield "                                    <span><span class=\"text-tertiary\">CO₂ :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "emission_CO2", [], "any", false, false, false, 107), "html", null, true);
                        yield " g/km</span></span>
                                ";
                    }
                    // line 109
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Norme_euro", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 110
                        yield "                                    <span><span class=\"text-tertiary\">Euro :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Norme_euro", [], "any", false, false, false, 110), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 112
                    yield "                                ";
                    if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Crit_air", [], "any", false, false, false, 112)) && (CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Crit_air", [], "any", false, false, false, 112) != ""))) {
                        // line 113
                        yield "                                    <span><span class=\"text-tertiary\">Crit'Air :</span>
                                        <span class=\"font-bold text-white px-1.5 py-0.5 rounded text-[10px]
                                            ";
                        // line 115
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Crit_air", [], "any", false, false, false, 115) == 0)) {
                            yield "bg-green-600
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 116
$context["v"], "Crit_air", [], "any", false, false, false, 116) == 1)) {
                            yield "bg-green-500
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 117
$context["v"], "Crit_air", [], "any", false, false, false, 117) == 2)) {
                            yield "bg-yellow-500
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 118
$context["v"], "Crit_air", [], "any", false, false, false, 118) == 3)) {
                            yield "bg-orange-500
                                            ";
                        } else {
                            // line 119
                            yield "bg-red-500";
                        }
                        yield "\">
                                            ";
                        // line 120
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "Crit_air", [], "any", false, false, false, 120), "html", null, true);
                        yield "
                                        </span>
                                    </span>
                                ";
                    }
                    // line 124
                    yield "                            </div>
                        </div>
                        ";
                }
                // line 127
                yield "
                        ";
                // line 129
                yield "                        ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "largeur_sans_retros", [], "any", false, false, false, 129) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "hauteur", [], "any", false, false, false, 129)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "empattement", [], "any", false, false, false, 129)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "poids_vide", [], "any", false, false, false, 129))) {
                    // line 130
                    yield "                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Dimensions & poids</p>
                            <div class=\"flex flex-wrap gap-3\">
                                ";
                    // line 133
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "largeur_sans_retros", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 134
                        yield "                                    <span><span class=\"text-tertiary\">Largeur :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "largeur_sans_retros", [], "any", false, false, false, 134), "html", null, true);
                        yield " mm</span></span>
                                ";
                    }
                    // line 136
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "hauteur", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 137
                        yield "                                    <span><span class=\"text-tertiary\">Hauteur :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "hauteur", [], "any", false, false, false, 137), "html", null, true);
                        yield " mm</span></span>
                                ";
                    }
                    // line 139
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "empattement", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 140
                        yield "                                    <span><span class=\"text-tertiary\">Empattement :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "empattement", [], "any", false, false, false, 140), "html", null, true);
                        yield " mm</span></span>
                                ";
                    }
                    // line 142
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "poids_vide", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 143
                        yield "                                    <span><span class=\"text-tertiary\">Poids :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "poids_vide", [], "any", false, false, false, 143), "html", null, true);
                        yield " kg</span></span>
                                ";
                    }
                    // line 145
                    yield "                            </div>
                        </div>
                        ";
                }
                // line 148
                yield "
                        ";
                // line 150
                yield "                        ";
                if (((((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "suspension_avant", [], "any", false, false, false, 150) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "suspension_arriere", [], "any", false, false, false, 150)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "freins_avant", [], "any", false, false, false, 150)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "freins_arriere", [], "any", false, false, false, 150)) || CoreExtension::getAttribute($this->env, $this->source, $context["v"], "diametre_braquage", [], "any", false, false, false, 150))) {
                    // line 151
                    yield "                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Châssis</p>
                            <div class=\"flex flex-wrap gap-3\">
                                ";
                    // line 154
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "suspension_avant", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 155
                        yield "                                    <span><span class=\"text-tertiary\">Susp. av. :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "suspension_avant", [], "any", false, false, false, 155), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 157
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "suspension_arriere", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 158
                        yield "                                    <span><span class=\"text-tertiary\">Susp. ar. :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "suspension_arriere", [], "any", false, false, false, 158), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 160
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "freins_avant", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 161
                        yield "                                    <span><span class=\"text-tertiary\">Freins av. :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "freins_avant", [], "any", false, false, false, 161), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 163
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "freins_arriere", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 164
                        yield "                                    <span><span class=\"text-tertiary\">Freins ar. :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "freins_arriere", [], "any", false, false, false, 164), "html", null, true);
                        yield "</span></span>
                                ";
                    }
                    // line 166
                    yield "                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["v"], "diametre_braquage", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 167
                        yield "                                    <span><span class=\"text-tertiary\">Braquage :</span> <span class=\"font-medium text-primary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "diametre_braquage", [], "any", false, false, false, 167), "html", null, true);
                        yield " m</span></span>
                                ";
                    }
                    // line 169
                    yield "                            </div>
                        </div>
                        ";
                }
                // line 172
                yield "
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "            ";
        }
        // line 177
        yield "        </div>

        ";
        // line 180
        yield "        <div class=\"xl:col-span-2\">
            <div class=\"bg-white rounded-xl shadow-sm p-5 sticky top-4\">
                <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une version</h2>
                <form action=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_version", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 183, $this->source); })()), "id_generation", [], "any", false, false, false, 183)]), "html", null, true);
        yield "\" method=\"post\" class=\"space-y-4\">

                    ";
        // line 186
        yield "                    <input type=\"text\" name=\"nom\" required placeholder=\"Nom * (ex : 1.5 TSI 150 S line)\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">

                    ";
        // line 190
        yield "                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Motorisation
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 space-y-2\">
                            <select name=\"transmission\"
                                    class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <option value=\"\">Transmission</option>
                                <option value=\"Traction avant\">Traction avant</option>
                                <option value=\"Propulsion\">Propulsion</option>
                                <option value=\"Intégrale\">Intégrale</option>
                            </select>
                            <select name=\"boite_vitesse\"
                                    class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <option value=\"\">Boîte de vitesse</option>
                                <option value=\"Manuelle\">Manuelle</option>
                                <option value=\"Automatique\">Automatique</option>
                                <option value=\"Robotisée\">Robotisée</option>
                                <option value=\"CVT\">CVT</option>
                            </select>
                            <input type=\"number\" name=\"nombre_rapport\" min=\"1\" max=\"12\" placeholder=\"Nombre de rapports\"
                                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    ";
        // line 217
        yield "                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Carrosserie & performances
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 grid grid-cols-2 gap-2\">
                            <input type=\"number\" name=\"nombre_places\" min=\"1\" max=\"9\" placeholder=\"Places\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"nombre_portes\" min=\"2\" max=\"5\" placeholder=\"Portes\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"vitesse_max\" min=\"50\" max=\"400\" placeholder=\"Vmax (km/h)\"
                                   class=\"col-span-2 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    ";
        // line 233
        yield "                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Consommation & émissions
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 space-y-2\">
                            <div class=\"grid grid-cols-3 gap-2\">
                                <input type=\"number\" name=\"consommation_urbaine\" step=\"0.1\" min=\"0\" placeholder=\"Urbain L/100\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"number\" name=\"consommation_extra\" step=\"0.1\" min=\"0\" placeholder=\"Extra-urb.\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"number\" name=\"consommation_mixte\" step=\"0.1\" min=\"0\" placeholder=\"Mixte\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            </div>
                            <input type=\"number\" name=\"emission_co2\" min=\"0\" max=\"500\" placeholder=\"Émissions CO₂ (g/km)\"
                                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <div class=\"grid grid-cols-2 gap-2\">
                                <select name=\"norme_euro\"
                                        class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                    <option value=\"\">Norme Euro</option>
                                    <option>Euro 4</option>
                                    <option>Euro 5</option>
                                    <option>Euro 6</option>
                                    <option>Euro 6d</option>
                                    <option>Euro 6d-TEMP</option>
                                </select>
                                <select name=\"crit_air\"
                                        class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                    <option value=\"\">Crit'Air</option>
                                    <option value=\"0\">0 (ZEV)</option>
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                </select>
                            </div>
                        </div>
                    </details>

                    ";
        // line 274
        yield "                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Dimensions & poids
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 grid grid-cols-2 gap-2\">
                            <input type=\"number\" name=\"largeur_sans_retros\" placeholder=\"Largeur (mm)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"hauteur\" placeholder=\"Hauteur (mm)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"empattement\" placeholder=\"Empattement (mm)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"poids_vide\" placeholder=\"Poids (kg)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    ";
        // line 292
        yield "                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Châssis & freinage
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 space-y-2\">
                            <div class=\"grid grid-cols-2 gap-2\">
                                <input type=\"text\" name=\"suspension_avant\" placeholder=\"Susp. avant\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"text\" name=\"suspension_arriere\" placeholder=\"Susp. arrière\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"text\" name=\"freins_avant\" placeholder=\"Freins avant\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"text\" name=\"freins_arriere\" placeholder=\"Freins arrière\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            </div>
                            <input type=\"number\" name=\"diametre_braquage\" step=\"0.1\" min=\"0\" placeholder=\"Diamètre de braquage (m)\"
                                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    <button type=\"submit\"
                            class=\"w-full px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                        Ajouter la version
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/catalogue_versions.html.twig";
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
        return array (  635 => 292,  616 => 274,  574 => 233,  557 => 217,  529 => 190,  524 => 186,  519 => 183,  514 => 180,  510 => 177,  507 => 176,  498 => 172,  493 => 169,  487 => 167,  484 => 166,  478 => 164,  475 => 163,  469 => 161,  466 => 160,  460 => 158,  457 => 157,  451 => 155,  449 => 154,  444 => 151,  441 => 150,  438 => 148,  433 => 145,  427 => 143,  424 => 142,  418 => 140,  415 => 139,  409 => 137,  406 => 136,  400 => 134,  398 => 133,  393 => 130,  390 => 129,  387 => 127,  382 => 124,  375 => 120,  370 => 119,  365 => 118,  361 => 117,  357 => 116,  353 => 115,  349 => 113,  346 => 112,  340 => 110,  337 => 109,  331 => 107,  328 => 106,  322 => 104,  319 => 103,  313 => 101,  310 => 100,  304 => 98,  302 => 97,  297 => 94,  294 => 93,  291 => 91,  286 => 88,  280 => 86,  277 => 85,  271 => 83,  268 => 82,  262 => 80,  260 => 79,  255 => 76,  252 => 75,  249 => 73,  244 => 70,  238 => 68,  235 => 67,  229 => 65,  226 => 64,  220 => 62,  218 => 61,  213 => 58,  210 => 57,  198 => 47,  194 => 46,  190 => 45,  187 => 44,  184 => 42,  179 => 41,  175 => 39,  173 => 38,  165 => 35,  161 => 33,  151 => 27,  147 => 26,  140 => 22,  133 => 20,  126 => 18,  121 => 16,  117 => 14,  108 => 12,  103 => 11,  94 => 9,  90 => 8,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}{{ generation.generation_nom }} — Catalogue Admin{% endblock %}

{% block main %}
<div class=\"max-w-7xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center gap-2 text-xs text-tertiary mb-6\">
        <a href=\"{{ path('admin_catalogue') }}\" class=\"hover:text-primary\">Catalogue</a>
        <span>›</span>
        <a href=\"{{ path('admin_catalogue_modeles', {id: generation.id_marque}) }}\" class=\"hover:text-primary\">{{ generation.marque_nom }}</a>
        <span>›</span>
        <a href=\"{{ path('admin_catalogue_generations', {id: generation.id_modele}) }}\" class=\"hover:text-primary\">{{ generation.modele_nom }}</a>
        <span>›</span>
        <span class=\"text-primary font-medium\">{{ generation.generation_nom }}</span>
    </div>

    <div class=\"flex items-center justify-between mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">{{ generation.generation_nom }} — Versions</h1>
        <a href=\"{{ path('admin_catalogue_generations', {id: generation.id_modele}) }}\" class=\"text-sm text-tertiary hover:text-primary\">← {{ generation.modele_nom }}</a>
    </div>

    <div class=\"grid grid-cols-1 xl:grid-cols-5 gap-6\">

        {# ── Liste des versions (cartes détaillées) ── #}
        <div class=\"xl:col-span-3 space-y-4\">
            <div class=\"bg-white rounded-xl shadow-sm px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">{{ versions|length }} version{{ versions|length != 1 ? 's' : '' }}</h2>
            </div>

            {% if versions is empty %}
            <div class=\"bg-white rounded-xl shadow-sm px-5 py-8 text-center text-tertiary text-sm\">Aucune version.</div>
            {% else %}
                {% for v in versions %}
                <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
                    {# En-tête version #}
                    <div class=\"flex items-center justify-between px-5 py-3 border-b border-gray-100\">
                        <h3 class=\"font-semibold text-primary text-sm\">{{ v.nom }}</h3>
                        <form action=\"{{ path('admin_supprimer_version', {id: v.id_version}) }}\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer {{ v.nom|e('js') }} ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors px-2 py-1 rounded hover:bg-red-50\">
                                ✕ Supprimer
                            </button>
                        </form>
                    </div>

                    <div class=\"p-5 grid grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-3 text-xs\">

                        {# Motorisation #}
                        {% if v.transmission or v.boite_vitesse or v.nombre_rapport %}
                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Motorisation</p>
                            <div class=\"flex flex-wrap gap-3\">
                                {% if v.transmission %}
                                    <span><span class=\"text-tertiary\">Transmission :</span> <span class=\"font-medium text-primary\">{{ v.transmission }}</span></span>
                                {% endif %}
                                {% if v.boite_vitesse %}
                                    <span><span class=\"text-tertiary\">Boîte :</span> <span class=\"font-medium text-primary\">{{ v.boite_vitesse }}</span></span>
                                {% endif %}
                                {% if v.nombre_rapport %}
                                    <span><span class=\"text-tertiary\">Rapports :</span> <span class=\"font-medium text-primary\">{{ v.nombre_rapport }}</span></span>
                                {% endif %}
                            </div>
                        </div>
                        {% endif %}

                        {# Carrosserie #}
                        {% if v.nombre_places or v.nombre_portes or v.vitesse_max %}
                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Carrosserie & performances</p>
                            <div class=\"flex flex-wrap gap-3\">
                                {% if v.nombre_places %}
                                    <span><span class=\"text-tertiary\">Places :</span> <span class=\"font-medium text-primary\">{{ v.nombre_places }}</span></span>
                                {% endif %}
                                {% if v.nombre_portes %}
                                    <span><span class=\"text-tertiary\">Portes :</span> <span class=\"font-medium text-primary\">{{ v.nombre_portes }}</span></span>
                                {% endif %}
                                {% if v.vitesse_max %}
                                    <span><span class=\"text-tertiary\">Vmax :</span> <span class=\"font-medium text-primary\">{{ v.vitesse_max }} km/h</span></span>
                                {% endif %}
                            </div>
                        </div>
                        {% endif %}

                        {# Consommation & émissions #}
                        {% if v.consomation_mixte or v.consommation_urbaine or v.consommation_extra_urbaine or v.emission_CO2 or v.Norme_euro or v.Crit_air %}
                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Consommation & émissions</p>
                            <div class=\"flex flex-wrap gap-3\">
                                {% if v.consommation_urbaine %}
                                    <span><span class=\"text-tertiary\">Urbain :</span> <span class=\"font-medium text-primary\">{{ v.consommation_urbaine }} L/100</span></span>
                                {% endif %}
                                {% if v.consommation_extra_urbaine %}
                                    <span><span class=\"text-tertiary\">Extra-urbain :</span> <span class=\"font-medium text-primary\">{{ v.consommation_extra_urbaine }} L/100</span></span>
                                {% endif %}
                                {% if v.consomation_mixte %}
                                    <span><span class=\"text-tertiary\">Mixte :</span> <span class=\"font-medium text-primary\">{{ v.consomation_mixte }} L/100</span></span>
                                {% endif %}
                                {% if v.emission_CO2 %}
                                    <span><span class=\"text-tertiary\">CO₂ :</span> <span class=\"font-medium text-primary\">{{ v.emission_CO2 }} g/km</span></span>
                                {% endif %}
                                {% if v.Norme_euro %}
                                    <span><span class=\"text-tertiary\">Euro :</span> <span class=\"font-medium text-primary\">{{ v.Norme_euro }}</span></span>
                                {% endif %}
                                {% if v.Crit_air is not null and v.Crit_air != '' %}
                                    <span><span class=\"text-tertiary\">Crit'Air :</span>
                                        <span class=\"font-bold text-white px-1.5 py-0.5 rounded text-[10px]
                                            {% if v.Crit_air == 0 %}bg-green-600
                                            {% elseif v.Crit_air == 1 %}bg-green-500
                                            {% elseif v.Crit_air == 2 %}bg-yellow-500
                                            {% elseif v.Crit_air == 3 %}bg-orange-500
                                            {% else %}bg-red-500{% endif %}\">
                                            {{ v.Crit_air }}
                                        </span>
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                        {% endif %}

                        {# Dimensions #}
                        {% if v.largeur_sans_retros or v.hauteur or v.empattement or v.poids_vide %}
                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Dimensions & poids</p>
                            <div class=\"flex flex-wrap gap-3\">
                                {% if v.largeur_sans_retros %}
                                    <span><span class=\"text-tertiary\">Largeur :</span> <span class=\"font-medium text-primary\">{{ v.largeur_sans_retros }} mm</span></span>
                                {% endif %}
                                {% if v.hauteur %}
                                    <span><span class=\"text-tertiary\">Hauteur :</span> <span class=\"font-medium text-primary\">{{ v.hauteur }} mm</span></span>
                                {% endif %}
                                {% if v.empattement %}
                                    <span><span class=\"text-tertiary\">Empattement :</span> <span class=\"font-medium text-primary\">{{ v.empattement }} mm</span></span>
                                {% endif %}
                                {% if v.poids_vide %}
                                    <span><span class=\"text-tertiary\">Poids :</span> <span class=\"font-medium text-primary\">{{ v.poids_vide }} kg</span></span>
                                {% endif %}
                            </div>
                        </div>
                        {% endif %}

                        {# Châssis #}
                        {% if v.suspension_avant or v.suspension_arriere or v.freins_avant or v.freins_arriere or v.diametre_braquage %}
                        <div class=\"col-span-full\">
                            <p class=\"text-[10px] font-bold text-tertiary uppercase tracking-widest mb-1.5\">Châssis</p>
                            <div class=\"flex flex-wrap gap-3\">
                                {% if v.suspension_avant %}
                                    <span><span class=\"text-tertiary\">Susp. av. :</span> <span class=\"font-medium text-primary\">{{ v.suspension_avant }}</span></span>
                                {% endif %}
                                {% if v.suspension_arriere %}
                                    <span><span class=\"text-tertiary\">Susp. ar. :</span> <span class=\"font-medium text-primary\">{{ v.suspension_arriere }}</span></span>
                                {% endif %}
                                {% if v.freins_avant %}
                                    <span><span class=\"text-tertiary\">Freins av. :</span> <span class=\"font-medium text-primary\">{{ v.freins_avant }}</span></span>
                                {% endif %}
                                {% if v.freins_arriere %}
                                    <span><span class=\"text-tertiary\">Freins ar. :</span> <span class=\"font-medium text-primary\">{{ v.freins_arriere }}</span></span>
                                {% endif %}
                                {% if v.diametre_braquage %}
                                    <span><span class=\"text-tertiary\">Braquage :</span> <span class=\"font-medium text-primary\">{{ v.diametre_braquage }} m</span></span>
                                {% endif %}
                            </div>
                        </div>
                        {% endif %}

                    </div>
                </div>
                {% endfor %}
            {% endif %}
        </div>

        {# ── Formulaire d'ajout ── #}
        <div class=\"xl:col-span-2\">
            <div class=\"bg-white rounded-xl shadow-sm p-5 sticky top-4\">
                <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une version</h2>
                <form action=\"{{ path('admin_ajouter_version', {id: generation.id_generation}) }}\" method=\"post\" class=\"space-y-4\">

                    {# Identité #}
                    <input type=\"text\" name=\"nom\" required placeholder=\"Nom * (ex : 1.5 TSI 150 S line)\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">

                    {# Motorisation #}
                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Motorisation
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 space-y-2\">
                            <select name=\"transmission\"
                                    class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <option value=\"\">Transmission</option>
                                <option value=\"Traction avant\">Traction avant</option>
                                <option value=\"Propulsion\">Propulsion</option>
                                <option value=\"Intégrale\">Intégrale</option>
                            </select>
                            <select name=\"boite_vitesse\"
                                    class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <option value=\"\">Boîte de vitesse</option>
                                <option value=\"Manuelle\">Manuelle</option>
                                <option value=\"Automatique\">Automatique</option>
                                <option value=\"Robotisée\">Robotisée</option>
                                <option value=\"CVT\">CVT</option>
                            </select>
                            <input type=\"number\" name=\"nombre_rapport\" min=\"1\" max=\"12\" placeholder=\"Nombre de rapports\"
                                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    {# Carrosserie & perfs #}
                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Carrosserie & performances
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 grid grid-cols-2 gap-2\">
                            <input type=\"number\" name=\"nombre_places\" min=\"1\" max=\"9\" placeholder=\"Places\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"nombre_portes\" min=\"2\" max=\"5\" placeholder=\"Portes\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"vitesse_max\" min=\"50\" max=\"400\" placeholder=\"Vmax (km/h)\"
                                   class=\"col-span-2 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    {# Consommation & émissions #}
                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Consommation & émissions
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 space-y-2\">
                            <div class=\"grid grid-cols-3 gap-2\">
                                <input type=\"number\" name=\"consommation_urbaine\" step=\"0.1\" min=\"0\" placeholder=\"Urbain L/100\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"number\" name=\"consommation_extra\" step=\"0.1\" min=\"0\" placeholder=\"Extra-urb.\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"number\" name=\"consommation_mixte\" step=\"0.1\" min=\"0\" placeholder=\"Mixte\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            </div>
                            <input type=\"number\" name=\"emission_co2\" min=\"0\" max=\"500\" placeholder=\"Émissions CO₂ (g/km)\"
                                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <div class=\"grid grid-cols-2 gap-2\">
                                <select name=\"norme_euro\"
                                        class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                    <option value=\"\">Norme Euro</option>
                                    <option>Euro 4</option>
                                    <option>Euro 5</option>
                                    <option>Euro 6</option>
                                    <option>Euro 6d</option>
                                    <option>Euro 6d-TEMP</option>
                                </select>
                                <select name=\"crit_air\"
                                        class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                    <option value=\"\">Crit'Air</option>
                                    <option value=\"0\">0 (ZEV)</option>
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                </select>
                            </div>
                        </div>
                    </details>

                    {# Dimensions #}
                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Dimensions & poids
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 grid grid-cols-2 gap-2\">
                            <input type=\"number\" name=\"largeur_sans_retros\" placeholder=\"Largeur (mm)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"hauteur\" placeholder=\"Hauteur (mm)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"empattement\" placeholder=\"Empattement (mm)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            <input type=\"number\" name=\"poids_vide\" placeholder=\"Poids (kg)\"
                                   class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    {# Châssis #}
                    <details class=\"group\">
                        <summary class=\"cursor-pointer text-xs font-semibold text-tertiary uppercase tracking-wide flex items-center justify-between select-none\">
                            Châssis & freinage
                            <span class=\"group-open:rotate-180 transition-transform text-base leading-none\">›</span>
                        </summary>
                        <div class=\"mt-2 space-y-2\">
                            <div class=\"grid grid-cols-2 gap-2\">
                                <input type=\"text\" name=\"suspension_avant\" placeholder=\"Susp. avant\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"text\" name=\"suspension_arriere\" placeholder=\"Susp. arrière\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"text\" name=\"freins_avant\" placeholder=\"Freins avant\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                                <input type=\"text\" name=\"freins_arriere\" placeholder=\"Freins arrière\"
                                       class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                            </div>
                            <input type=\"number\" name=\"diametre_braquage\" step=\"0.1\" min=\"0\" placeholder=\"Diamètre de braquage (m)\"
                                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        </div>
                    </details>

                    <button type=\"submit\"
                            class=\"w-full px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                        Ajouter la version
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
{% endblock %}
", "admin/catalogue_versions.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\catalogue_versions.html.twig");
    }
}
