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

/* admin/annonces.html.twig */
class __TwigTemplate_7d1acf227883603008d3abdca0e27100 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonces.html.twig"));

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

        yield "Annonces — Admin";
        
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
        yield "<div class=\"max-w-6xl mx-auto px-6 py-8\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 9
            yield "        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">";
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
            yield "        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Annonces</h1>
            <p class=\"text-tertiary mt-1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 18, $this->source); })())), "html", null, true);
        yield " annonce";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 18, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</p>
        </div>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"text-sm text-tertiary hover:text-primary transition-colors\">← Tableau de bord</a>
    </div>

    ";
        // line 24
        yield "    <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        yield "\"
          class=\"bg-white rounded-xl shadow-sm p-4 mb-6 flex flex-wrap gap-3 items-end\">

        <div class=\"flex-1 min-w-[180px]\">
            <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Recherche</label>
            <input type=\"text\" name=\"search\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "search", [], "any", false, false, false, 29), "html", null, true);
        yield "\"
                   placeholder=\"Marque, modèle, vendeur…\"
                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Statut</label>
            <select name=\"statut\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
                <option value=\"\">Tous</option>
                <option value=\"active\" ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "statut", [], "any", false, false, false, 38) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                <option value=\"pause\"  ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 39, $this->source); })()), "statut", [], "any", false, false, false, 39) == "pause")) ? ("selected") : (""));
        yield ">En pause</option>
            </select>
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Marque</label>
            <select name=\"marque_id\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
                <option value=\"\">Toutes</option>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 48
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 48), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 48, $this->source); })()), "marque_id", [], "any", false, false, false, 48) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 48))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "            </select>
        </div>

        <button type=\"submit\"
                class=\"px-5 py-2 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all active:scale-95\">
            Filtrer
        </button>
        ";
        // line 57
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "statut", [], "any", false, false, false, 57) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "marque_id", [], "any", false, false, false, 57)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "search", [], "any", false, false, false, 57))) {
            // line 58
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
            yield "\"
               class=\"px-5 py-2 border border-gray-200 text-gray-500 text-sm rounded-lg hover:bg-gray-50 transition-all\">
                Réinitialiser
            </a>
        ";
        }
        // line 63
        yield "
    </form>

    ";
        // line 67
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 67, $this->source); })()))) {
            // line 68
            yield "        <div class=\"text-center py-24 bg-white rounded-xl shadow-sm\">
            <p class=\"text-xl font-semibold text-primary mb-2\">Aucune annonce trouvée</p>
            <p class=\"text-tertiary text-sm\">Modifiez les filtres pour afficher des résultats.</p>
        </div>
    ";
        } else {
            // line 73
            yield "        <div class=\"space-y-4\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 75
                yield "            <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\" id=\"annonce-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 75), "html", null, true);
                yield "\">
                <div class=\"flex gap-0\">

                    ";
                // line 79
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 79)]), "html", null, true);
                yield "\" target=\"_blank\"
                       class=\"flex-none w-40 h-32 bg-gray-100 overflow-hidden\">
                        ";
                // line 81
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 82), "html", null, true);
                    yield "\" alt=\"\"
                                 class=\"w-full h-full object-cover hover:scale-105 transition-transform duration-300\">
                        ";
                } else {
                    // line 85
                    yield "                            <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                                <svg class=\"w-10 h-10\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                                </svg>
                            </div>
                        ";
                }
                // line 91
                yield "                    </a>

                    ";
                // line 94
                yield "                    <div class=\"flex-1 px-5 py-4 min-w-0\">
                        <div class=\"flex items-start justify-between gap-4\">
                            <div class=\"min-w-0\">
                                <div class=\"flex items-center gap-2 flex-wrap\">
                                    <a href=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 98)]), "html", null, true);
                yield "\" target=\"_blank\"
                                       class=\"font-bold text-primary hover:text-secondary transition-colors\">
                                        ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 100), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 100), "html", null, true);
                yield "
                                    </a>
                                    ";
                // line 102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "statut", [], "any", false, false, false, 102) == "active")) {
                    // line 103
                    yield "                                        <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-green-100 text-green-700\">Active</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 104
$context["a"], "statut", [], "any", false, false, false, 104) == "pause")) {
                    // line 105
                    yield "                                        <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-orange-100 text-orange-700\">En pause</span>
                                    ";
                }
                // line 107
                yield "                                </div>
                                <p class=\"text-xs text-tertiary mt-0.5\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "version_nom", [], "any", false, false, false, 108), "html", null, true);
                yield "</p>
                                <div class=\"flex flex-wrap gap-x-3 gap-y-1 text-xs text-tertiary mt-1\">
                                    <span>";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annee_circulation", [], "any", false, false, false, 110), "html", null, true);
                yield "</span>
                                    <span>•</span>
                                    <span>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "kilometrage", [], "any", false, false, false, 112), 0, ",", " "), "html", null, true);
                yield " km</span>
                                    ";
                // line 113
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>•</span><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 113), "html", null, true);
                    yield "</span>";
                }
                // line 114
                yield "                                </div>
                                <p class=\"text-xs text-gray-400 mt-1\">
                                    Vendeur : <span class=\"font-medium text-tertiary\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "vendeur_prenom", [], "any", false, false, false, 116), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "vendeur_nom", [], "any", false, false, false, 116), "html", null, true);
                yield "</span>
                                    — ";
                // line 117
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_publication", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_publication", [], "any", false, false, false, 117), "d/m/Y"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_creation", [], "any", false, false, false, 117), "d/m/Y"), "html", null, true)));
                yield "
                                </p>

                                ";
                // line 120
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "statut", [], "any", false, false, false, 120) == "pause") && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "commentaire_admin", [], "any", false, false, false, 120))) {
                    // line 121
                    yield "                                <div class=\"mt-2 p-2 bg-orange-50 border border-orange-100 rounded-lg text-xs text-orange-700\">
                                    <span class=\"font-semibold\">Commentaire :</span> ";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "commentaire_admin", [], "any", false, false, false, 122), "html", null, true);
                    yield "
                                </div>
                                ";
                }
                // line 125
                yield "                            </div>
                            <p class=\"text-xl font-bold text-secondary flex-none\">";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 126), 0, ",", " "), "html", null, true);
                yield " €</p>
                        </div>

                        <div class=\"flex items-center justify-between mt-3\">
                            <span></span>
                            <div class=\"flex gap-2\">
                                <a href=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\" target=\"_blank\"
                                   class=\"px-3 py-1.5 border border-gray-200 text-gray-500 text-xs font-semibold rounded-lg hover:bg-gray-50 transition-all\">
                                    Voir
                                </a>

                                ";
                // line 137
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "statut", [], "any", false, false, false, 137) == "active")) {
                    // line 138
                    yield "                                    <button type=\"button\"
                                            onclick=\"togglePauseForm(";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 139), "html", null, true);
                    yield ")\"
                                            class=\"px-3 py-1.5 border border-orange-200 text-orange-600 text-xs font-semibold rounded-lg hover:bg-orange-50 transition-all\">
                                        Mettre en pause
                                    </button>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 143
$context["a"], "statut", [], "any", false, false, false, 143) == "pause")) {
                    // line 144
                    yield "                                    <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reactiver_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 144)]), "html", null, true);
                    yield "\" method=\"post\">
                                        <button type=\"submit\"
                                                class=\"px-3 py-1.5 border border-green-200 text-green-600 text-xs font-semibold rounded-lg hover:bg-green-50 transition-all\">
                                            Réactiver
                                        </button>
                                    </form>
                                ";
                }
                // line 151
                yield "
                                <form action=\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 152)]), "html", null, true);
                yield "\" method=\"post\"
                                      onsubmit=\"return confirm('Supprimer définitivement cette annonce ?')\">
                                    <button type=\"submit\"
                                            class=\"px-3 py-1.5 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                ";
                // line 166
                yield "                <div id=\"pause-form-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 166), "html", null, true);
                yield "\" class=\"hidden border-t border-gray-100\">
                    <form action=\"";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pauser_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 167)]), "html", null, true);
                yield "\" method=\"post\"
                          class=\"px-5 py-4 bg-orange-50\">
                        <label class=\"block text-xs font-semibold text-orange-700 mb-2\">
                            Commentaire pour le vendeur
                            <span class=\"font-normal text-orange-500\">(expliquez ce qui doit être corrigé)</span>
                        </label>
                        <textarea name=\"commentaire_admin\" rows=\"3\" required
                                  placeholder=\"Ex : Les photos ne correspondent pas au véhicule. Merci de les remplacer.\"
                                  class=\"w-full border border-orange-200 rounded-lg px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-orange-300 resize-none\"></textarea>
                        <div class=\"flex gap-2 mt-2\">
                            <button type=\"submit\"
                                    class=\"px-4 py-1.5 bg-orange-600 text-white text-xs font-semibold rounded-lg hover:bg-orange-700 transition-all\">
                                Confirmer la mise en pause
                            </button>
                            <button type=\"button\"
                                    onclick=\"togglePauseForm(";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 182), "html", null, true);
                yield ")\"
                                    class=\"px-4 py-1.5 border border-gray-200 text-gray-500 text-xs rounded-lg hover:bg-gray-50 transition-all\">
                                Annuler
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "        </div>
    ";
        }
        // line 194
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 199
        yield "<script>
function togglePauseForm(id) {
    const form = document.getElementById('pause-form-' + id);
    form.classList.toggle('hidden');
    if (!form.classList.contains('hidden')) {
        form.querySelector('textarea').focus();
    }
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/annonces.html.twig";
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
        return array (  471 => 199,  461 => 198,  451 => 194,  447 => 192,  431 => 182,  413 => 167,  408 => 166,  392 => 152,  389 => 151,  378 => 144,  376 => 143,  369 => 139,  366 => 138,  364 => 137,  356 => 132,  347 => 126,  344 => 125,  338 => 122,  335 => 121,  333 => 120,  327 => 117,  321 => 116,  317 => 114,  311 => 113,  307 => 112,  302 => 110,  297 => 108,  294 => 107,  290 => 105,  288 => 104,  285 => 103,  283 => 102,  276 => 100,  271 => 98,  265 => 94,  261 => 91,  253 => 85,  246 => 82,  244 => 81,  238 => 79,  231 => 75,  227 => 74,  224 => 73,  217 => 68,  214 => 67,  209 => 63,  200 => 58,  198 => 57,  189 => 50,  176 => 48,  172 => 47,  161 => 39,  157 => 38,  145 => 29,  136 => 24,  130 => 20,  123 => 18,  117 => 14,  108 => 12,  103 => 11,  94 => 9,  90 => 8,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Annonces — Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Annonces</h1>
            <p class=\"text-tertiary mt-1\">{{ annonces|length }} annonce{{ annonces|length != 1 ? 's' : '' }}</p>
        </div>
        <a href=\"{{ path('admin_dashboard') }}\" class=\"text-sm text-tertiary hover:text-primary transition-colors\">← Tableau de bord</a>
    </div>

    {# Filtres #}
    <form method=\"get\" action=\"{{ path('admin_annonces') }}\"
          class=\"bg-white rounded-xl shadow-sm p-4 mb-6 flex flex-wrap gap-3 items-end\">

        <div class=\"flex-1 min-w-[180px]\">
            <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Recherche</label>
            <input type=\"text\" name=\"search\" value=\"{{ filters.search }}\"
                   placeholder=\"Marque, modèle, vendeur…\"
                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Statut</label>
            <select name=\"statut\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
                <option value=\"\">Tous</option>
                <option value=\"active\" {{ filters.statut == 'active' ? 'selected' : '' }}>Actives</option>
                <option value=\"pause\"  {{ filters.statut == 'pause'  ? 'selected' : '' }}>En pause</option>
            </select>
        </div>

        <div>
            <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Marque</label>
            <select name=\"marque_id\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
                <option value=\"\">Toutes</option>
                {% for m in marques %}
                    <option value=\"{{ m.id_marque }}\" {{ filters.marque_id == m.id_marque ? 'selected' : '' }}>{{ m.nom }}</option>
                {% endfor %}
            </select>
        </div>

        <button type=\"submit\"
                class=\"px-5 py-2 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all active:scale-95\">
            Filtrer
        </button>
        {% if filters.statut or filters.marque_id or filters.search %}
            <a href=\"{{ path('admin_annonces') }}\"
               class=\"px-5 py-2 border border-gray-200 text-gray-500 text-sm rounded-lg hover:bg-gray-50 transition-all\">
                Réinitialiser
            </a>
        {% endif %}

    </form>

    {# Liste #}
    {% if annonces is empty %}
        <div class=\"text-center py-24 bg-white rounded-xl shadow-sm\">
            <p class=\"text-xl font-semibold text-primary mb-2\">Aucune annonce trouvée</p>
            <p class=\"text-tertiary text-sm\">Modifiez les filtres pour afficher des résultats.</p>
        </div>
    {% else %}
        <div class=\"space-y-4\">
            {% for a in annonces %}
            <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\" id=\"annonce-{{ a.id_annonce }}\">
                <div class=\"flex gap-0\">

                    {# Photo #}
                    <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\" target=\"_blank\"
                       class=\"flex-none w-40 h-32 bg-gray-100 overflow-hidden\">
                        {% if a.photo_principale %}
                            <img src=\"{{ a.photo_principale }}\" alt=\"\"
                                 class=\"w-full h-full object-cover hover:scale-105 transition-transform duration-300\">
                        {% else %}
                            <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                                <svg class=\"w-10 h-10\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                                </svg>
                            </div>
                        {% endif %}
                    </a>

                    {# Infos #}
                    <div class=\"flex-1 px-5 py-4 min-w-0\">
                        <div class=\"flex items-start justify-between gap-4\">
                            <div class=\"min-w-0\">
                                <div class=\"flex items-center gap-2 flex-wrap\">
                                    <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\" target=\"_blank\"
                                       class=\"font-bold text-primary hover:text-secondary transition-colors\">
                                        {{ a.marque_nom }} {{ a.modele_nom }}
                                    </a>
                                    {% if a.statut == 'active' %}
                                        <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-green-100 text-green-700\">Active</span>
                                    {% elseif a.statut == 'pause' %}
                                        <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-orange-100 text-orange-700\">En pause</span>
                                    {% endif %}
                                </div>
                                <p class=\"text-xs text-tertiary mt-0.5\">{{ a.version_nom }}</p>
                                <div class=\"flex flex-wrap gap-x-3 gap-y-1 text-xs text-tertiary mt-1\">
                                    <span>{{ a.annee_circulation }}</span>
                                    <span>•</span>
                                    <span>{{ a.kilometrage|number_format(0, ',', ' ') }} km</span>
                                    {% if a.localisation %}<span>•</span><span>{{ a.localisation }}</span>{% endif %}
                                </div>
                                <p class=\"text-xs text-gray-400 mt-1\">
                                    Vendeur : <span class=\"font-medium text-tertiary\">{{ a.vendeur_prenom }} {{ a.vendeur_nom }}</span>
                                    — {{ a.date_publication ? a.date_publication|date('d/m/Y') : a.date_creation|date('d/m/Y') }}
                                </p>

                                {% if a.statut == 'pause' and a.commentaire_admin %}
                                <div class=\"mt-2 p-2 bg-orange-50 border border-orange-100 rounded-lg text-xs text-orange-700\">
                                    <span class=\"font-semibold\">Commentaire :</span> {{ a.commentaire_admin }}
                                </div>
                                {% endif %}
                            </div>
                            <p class=\"text-xl font-bold text-secondary flex-none\">{{ a.prix|number_format(0, ',', ' ') }} €</p>
                        </div>

                        <div class=\"flex items-center justify-between mt-3\">
                            <span></span>
                            <div class=\"flex gap-2\">
                                <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\" target=\"_blank\"
                                   class=\"px-3 py-1.5 border border-gray-200 text-gray-500 text-xs font-semibold rounded-lg hover:bg-gray-50 transition-all\">
                                    Voir
                                </a>

                                {% if a.statut == 'active' %}
                                    <button type=\"button\"
                                            onclick=\"togglePauseForm({{ a.id_annonce }})\"
                                            class=\"px-3 py-1.5 border border-orange-200 text-orange-600 text-xs font-semibold rounded-lg hover:bg-orange-50 transition-all\">
                                        Mettre en pause
                                    </button>
                                {% elseif a.statut == 'pause' %}
                                    <form action=\"{{ path('admin_reactiver_annonce', {id: a.id_annonce}) }}\" method=\"post\">
                                        <button type=\"submit\"
                                                class=\"px-3 py-1.5 border border-green-200 text-green-600 text-xs font-semibold rounded-lg hover:bg-green-50 transition-all\">
                                            Réactiver
                                        </button>
                                    </form>
                                {% endif %}

                                <form action=\"{{ path('admin_supprimer_annonce', {id: a.id_annonce}) }}\" method=\"post\"
                                      onsubmit=\"return confirm('Supprimer définitivement cette annonce ?')\">
                                    <button type=\"submit\"
                                            class=\"px-3 py-1.5 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                {# Formulaire de pause (masqué par défaut) #}
                <div id=\"pause-form-{{ a.id_annonce }}\" class=\"hidden border-t border-gray-100\">
                    <form action=\"{{ path('admin_pauser_annonce', {id: a.id_annonce}) }}\" method=\"post\"
                          class=\"px-5 py-4 bg-orange-50\">
                        <label class=\"block text-xs font-semibold text-orange-700 mb-2\">
                            Commentaire pour le vendeur
                            <span class=\"font-normal text-orange-500\">(expliquez ce qui doit être corrigé)</span>
                        </label>
                        <textarea name=\"commentaire_admin\" rows=\"3\" required
                                  placeholder=\"Ex : Les photos ne correspondent pas au véhicule. Merci de les remplacer.\"
                                  class=\"w-full border border-orange-200 rounded-lg px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-orange-300 resize-none\"></textarea>
                        <div class=\"flex gap-2 mt-2\">
                            <button type=\"submit\"
                                    class=\"px-4 py-1.5 bg-orange-600 text-white text-xs font-semibold rounded-lg hover:bg-orange-700 transition-all\">
                                Confirmer la mise en pause
                            </button>
                            <button type=\"button\"
                                    onclick=\"togglePauseForm({{ a.id_annonce }})\"
                                    class=\"px-4 py-1.5 border border-gray-200 text-gray-500 text-xs rounded-lg hover:bg-gray-50 transition-all\">
                                Annuler
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            {% endfor %}
        </div>
    {% endif %}

</div>
{% endblock %}

{% block javascripts %}
<script>
function togglePauseForm(id) {
    const form = document.getElementById('pause-form-' + id);
    form.classList.toggle('hidden');
    if (!form.classList.contains('hidden')) {
        form.querySelector('textarea').focus();
    }
}
</script>
{% endblock %}
", "admin/annonces.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\annonces.html.twig");
    }
}
