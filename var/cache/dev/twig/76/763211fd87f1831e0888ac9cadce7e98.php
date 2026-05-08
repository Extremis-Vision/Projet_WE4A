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
class __TwigTemplate_b19985cea1ddc3e2bf8a3b7537fd06bf extends Template
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

        yield "Annonces — AutoMarket Admin";
        
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
    <div class=\"flex items-center justify-between mb-6\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Annonces</h1>
            <p class=\"text-tertiary mt-1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 18, $this->source); })())), "html", null, true);
        yield " résultat";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 18, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</p>
        </div>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
        yield "\" class=\"text-sm text-tertiary hover:text-primary\">← Utilisateurs</a>
    </div>

    ";
        // line 24
        yield "    <form method=\"get\" class=\"bg-white rounded-xl shadow-sm p-4 mb-6 flex flex-wrap gap-3 items-end\">
        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1\">Statut</label>
            <select name=\"statut\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm text-primary focus:outline-none focus:ring-1 focus:ring-secondary\">
                <option value=\"\">Tous</option>
                <option value=\"active\" ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "statut", [], "any", false, false, false, 29) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                <option value=\"pause\"  ";
        // line 30
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), "statut", [], "any", false, false, false, 30) == "pause")) ? ("selected") : (""));
        yield ">En pause</option>
            </select>
        </div>
        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1\">Marque</label>
            <select name=\"marque_id\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm text-primary focus:outline-none focus:ring-1 focus:ring-secondary\">
                <option value=\"\">Toutes</option>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 38
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 38), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "marque_id", [], "any", false, false, false, 38) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 38))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            </select>
        </div>
        <div class=\"flex-1 min-w-40\">
            <label class=\"block text-xs font-semibold text-tertiary mb-1\">Recherche</label>
            <input type=\"text\" name=\"search\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 44, $this->source); })()), "search", [], "any", false, false, false, 44), "html", null, true);
        yield "\" placeholder=\"Marque, modèle, vendeur…\"
                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
        </div>
        <button type=\"submit\"
                class=\"px-4 py-2 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
            Filtrer
        </button>
        ";
        // line 51
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "marque_id", [], "any", false, false, false, 51)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "search", [], "any", false, false, false, 51))) {
            // line 52
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
            yield "\" class=\"px-4 py-2 border border-gray-200 text-tertiary text-sm rounded-lg hover:bg-gray-50\">
            Réinitialiser
        </a>
        ";
        }
        // line 56
        yield "    </form>

    ";
        // line 59
        yield "    <div class=\"space-y-3\">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 61
            yield "        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"flex gap-0\">

                ";
            // line 65
            yield "                <div class=\"flex-none w-36 h-28 bg-gray-100 overflow-hidden\">
                    ";
            // line 66
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 67), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 67), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 67), "html", null, true);
                yield "\"
                             class=\"w-full h-full object-cover\">
                    ";
            } else {
                // line 70
                yield "                        <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                            <svg class=\"w-8 h-8\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                            </svg>
                        </div>
                    ";
            }
            // line 76
            yield "                </div>

                ";
            // line 79
            yield "                <div class=\"flex-1 px-5 py-3 min-w-0\">
                    <div class=\"flex items-start justify-between gap-4\">
                        <div class=\"min-w-0\">
                            <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" target=\"_blank\"
                               class=\"font-bold text-primary hover:text-secondary transition-colors text-sm\">
                                ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 84), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 84), "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "version_nom", [], "any", false, false, false, 84), "html", null, true);
            yield "
                            </a>
                            <p class=\"text-xs text-tertiary mt-0.5\">
                                Vendeur : ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "vendeur_prenom", [], "any", false, false, false, 87), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "vendeur_nom", [], "any", false, false, false, 87), "html", null, true);
            yield "
                                ";
            // line 88
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "vendeur_phone", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "vendeur_phone", [], "any", false, false, false, 88), "html", null, true);
            }
            // line 89
            yield "                            </p>
                        </div>
                        <div class=\"flex items-center gap-2 flex-none\">
                            <p class=\"text-base font-bold text-secondary\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 92), 0, ",", " "), "html", null, true);
            yield " €</p>
                            ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "statut", [], "any", false, false, false, 93) == "active")) {
                // line 94
                yield "                                <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-green-100 text-green-700\">Active</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["a"], "statut", [], "any", false, false, false, 95) == "pause")) {
                // line 96
                yield "                                <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-orange-100 text-orange-700\">En pause</span>
                            ";
            }
            // line 98
            yield "                        </div>
                    </div>

                    <div class=\"flex flex-wrap gap-x-3 gap-y-0.5 text-xs text-tertiary mt-1\">
                        <span>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annee_circulation", [], "any", false, false, false, 102), "html", null, true);
            yield "</span>
                        <span>•</span>
                        <span>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "kilometrage", [], "any", false, false, false, 104), 0, ",", " "), "html", null, true);
            yield " km</span>
                        ";
            // line 105
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span>•</span><span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 105), "html", null, true);
                yield "</span>";
            }
            // line 106
            yield "                        <span>•</span>
                        <span>Publiée le ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_creation", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
            yield "</span>
                    </div>

                    ";
            // line 110
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "statut", [], "any", false, false, false, 110) == "pause") && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "commentaire_admin", [], "any", false, false, false, 110))) {
                // line 111
                yield "                    <p class=\"text-xs text-orange-600 mt-1 italic\">Commentaire : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "commentaire_admin", [], "any", false, false, false, 111), "html", null, true);
                yield "</p>
                    ";
            }
            // line 113
            yield "
                    ";
            // line 115
            yield "                    <div class=\"flex items-center gap-2 mt-2\">
                        ";
            // line 116
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "statut", [], "any", false, false, false, 116) == "active")) {
                // line 117
                yield "                            <button onclick=\"togglePauseForm(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 117), "html", null, true);
                yield ")\"
                                    class=\"px-3 py-1 border border-orange-300 text-orange-600 text-xs font-semibold rounded-lg hover:bg-orange-50 transition-all\">
                                Suspendre
                            </button>
                        ";
            } else {
                // line 122
                yield "                            <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reactiver_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 122)]), "html", null, true);
                yield "\" method=\"post\">
                                <button type=\"submit\"
                                        class=\"px-3 py-1 border border-green-300 text-green-600 text-xs font-semibold rounded-lg hover:bg-green-50 transition-all\">
                                    Réactiver
                                </button>
                            </form>
                        ";
            }
            // line 129
            yield "                        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer définitivement cette annonce ?')\">
                            <button type=\"submit\"
                                    class=\"px-3 py-1 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            ";
            // line 141
            yield "            <div id=\"pause-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 141), "html", null, true);
            yield "\" class=\"hidden border-t border-gray-100 px-5 py-3 bg-orange-50\">
                <form action=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pauser_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" method=\"post\" class=\"flex gap-3 items-end\">
                    <div class=\"flex-1\">
                        <label class=\"block text-xs font-semibold text-orange-700 mb-1\">
                            Raison de la suspension (visible par le vendeur)
                        </label>
                        <textarea name=\"commentaire_admin\" rows=\"2\" required
                                  placeholder=\"Ex : Photos non conformes, prix incohérent…\"
                                  class=\"w-full border border-orange-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-orange-400 bg-white\"></textarea>
                    </div>
                    <div class=\"flex gap-2\">
                        <button type=\"submit\"
                                class=\"px-4 py-2 bg-orange-500 text-white text-xs font-semibold rounded-lg hover:bg-orange-600 transition-all\">
                            Confirmer
                        </button>
                        <button type=\"button\" onclick=\"togglePauseForm(";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 156), "html", null, true);
            yield ")\"
                                class=\"px-4 py-2 border border-gray-200 text-tertiary text-xs rounded-lg hover:bg-gray-100 transition-all\">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 164
        if (!$context['_iterated']) {
            // line 165
            yield "        <div class=\"bg-white rounded-xl shadow-sm p-10 text-center text-tertiary text-sm\">Aucune annonce trouvée.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "    </div>

</div>

";
        // line 171
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        yield "<script>
function togglePauseForm(id) {
    const el = document.getElementById('pause-form-' + id);
    el.classList.toggle('hidden');
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
        return array (  444 => 172,  427 => 171,  421 => 167,  414 => 165,  412 => 164,  399 => 156,  382 => 142,  377 => 141,  362 => 129,  351 => 122,  342 => 117,  340 => 116,  337 => 115,  334 => 113,  328 => 111,  326 => 110,  320 => 107,  317 => 106,  311 => 105,  307 => 104,  302 => 102,  296 => 98,  292 => 96,  290 => 95,  287 => 94,  285 => 93,  281 => 92,  276 => 89,  271 => 88,  265 => 87,  255 => 84,  250 => 82,  245 => 79,  241 => 76,  233 => 70,  222 => 67,  220 => 66,  217 => 65,  212 => 61,  207 => 60,  204 => 59,  200 => 56,  192 => 52,  190 => 51,  180 => 44,  174 => 40,  161 => 38,  157 => 37,  147 => 30,  143 => 29,  136 => 24,  130 => 20,  123 => 18,  117 => 14,  108 => 12,  103 => 11,  94 => 9,  90 => 8,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Annonces — AutoMarket Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center justify-between mb-6\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Annonces</h1>
            <p class=\"text-tertiary mt-1\">{{ annonces|length }} résultat{{ annonces|length != 1 ? 's' : '' }}</p>
        </div>
        <a href=\"{{ path('admin_utilisateurs') }}\" class=\"text-sm text-tertiary hover:text-primary\">← Utilisateurs</a>
    </div>

    {# Filtres #}
    <form method=\"get\" class=\"bg-white rounded-xl shadow-sm p-4 mb-6 flex flex-wrap gap-3 items-end\">
        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1\">Statut</label>
            <select name=\"statut\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm text-primary focus:outline-none focus:ring-1 focus:ring-secondary\">
                <option value=\"\">Tous</option>
                <option value=\"active\" {{ filters.statut == 'active' ? 'selected' : '' }}>Actives</option>
                <option value=\"pause\"  {{ filters.statut == 'pause'  ? 'selected' : '' }}>En pause</option>
            </select>
        </div>
        <div>
            <label class=\"block text-xs font-semibold text-tertiary mb-1\">Marque</label>
            <select name=\"marque_id\" class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm text-primary focus:outline-none focus:ring-1 focus:ring-secondary\">
                <option value=\"\">Toutes</option>
                {% for m in marques %}
                <option value=\"{{ m.id_marque }}\" {{ filters.marque_id == m.id_marque ? 'selected' : '' }}>{{ m.nom }}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"flex-1 min-w-40\">
            <label class=\"block text-xs font-semibold text-tertiary mb-1\">Recherche</label>
            <input type=\"text\" name=\"search\" value=\"{{ filters.search }}\" placeholder=\"Marque, modèle, vendeur…\"
                   class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
        </div>
        <button type=\"submit\"
                class=\"px-4 py-2 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
            Filtrer
        </button>
        {% if filters.statut or filters.marque_id or filters.search %}
        <a href=\"{{ path('admin_annonces') }}\" class=\"px-4 py-2 border border-gray-200 text-tertiary text-sm rounded-lg hover:bg-gray-50\">
            Réinitialiser
        </a>
        {% endif %}
    </form>

    {# Liste #}
    <div class=\"space-y-3\">
        {% for a in annonces %}
        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"flex gap-0\">

                {# Photo #}
                <div class=\"flex-none w-36 h-28 bg-gray-100 overflow-hidden\">
                    {% if a.photo_principale %}
                        <img src=\"{{ a.photo_principale }}\" alt=\"{{ a.marque_nom }} {{ a.modele_nom }}\"
                             class=\"w-full h-full object-cover\">
                    {% else %}
                        <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                            <svg class=\"w-8 h-8\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                            </svg>
                        </div>
                    {% endif %}
                </div>

                {# Infos #}
                <div class=\"flex-1 px-5 py-3 min-w-0\">
                    <div class=\"flex items-start justify-between gap-4\">
                        <div class=\"min-w-0\">
                            <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\" target=\"_blank\"
                               class=\"font-bold text-primary hover:text-secondary transition-colors text-sm\">
                                {{ a.marque_nom }} {{ a.modele_nom }} — {{ a.version_nom }}
                            </a>
                            <p class=\"text-xs text-tertiary mt-0.5\">
                                Vendeur : {{ a.vendeur_prenom }} {{ a.vendeur_nom }}
                                {% if a.vendeur_phone %} · {{ a.vendeur_phone }}{% endif %}
                            </p>
                        </div>
                        <div class=\"flex items-center gap-2 flex-none\">
                            <p class=\"text-base font-bold text-secondary\">{{ a.prix|number_format(0, ',', ' ') }} €</p>
                            {% if a.statut == 'active' %}
                                <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-green-100 text-green-700\">Active</span>
                            {% elseif a.statut == 'pause' %}
                                <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-orange-100 text-orange-700\">En pause</span>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"flex flex-wrap gap-x-3 gap-y-0.5 text-xs text-tertiary mt-1\">
                        <span>{{ a.annee_circulation }}</span>
                        <span>•</span>
                        <span>{{ a.kilometrage|number_format(0, ',', ' ') }} km</span>
                        {% if a.localisation %}<span>•</span><span>{{ a.localisation }}</span>{% endif %}
                        <span>•</span>
                        <span>Publiée le {{ a.date_creation|date('d/m/Y') }}</span>
                    </div>

                    {% if a.statut == 'pause' and a.commentaire_admin %}
                    <p class=\"text-xs text-orange-600 mt-1 italic\">Commentaire : {{ a.commentaire_admin }}</p>
                    {% endif %}

                    {# Actions #}
                    <div class=\"flex items-center gap-2 mt-2\">
                        {% if a.statut == 'active' %}
                            <button onclick=\"togglePauseForm({{ a.id_annonce }})\"
                                    class=\"px-3 py-1 border border-orange-300 text-orange-600 text-xs font-semibold rounded-lg hover:bg-orange-50 transition-all\">
                                Suspendre
                            </button>
                        {% else %}
                            <form action=\"{{ path('admin_reactiver_annonce', {id: a.id_annonce}) }}\" method=\"post\">
                                <button type=\"submit\"
                                        class=\"px-3 py-1 border border-green-300 text-green-600 text-xs font-semibold rounded-lg hover:bg-green-50 transition-all\">
                                    Réactiver
                                </button>
                            </form>
                        {% endif %}
                        <form action=\"{{ path('admin_supprimer_annonce', {id: a.id_annonce}) }}\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer définitivement cette annonce ?')\">
                            <button type=\"submit\"
                                    class=\"px-3 py-1 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {# Formulaire de suspension (caché) #}
            <div id=\"pause-form-{{ a.id_annonce }}\" class=\"hidden border-t border-gray-100 px-5 py-3 bg-orange-50\">
                <form action=\"{{ path('admin_pauser_annonce', {id: a.id_annonce}) }}\" method=\"post\" class=\"flex gap-3 items-end\">
                    <div class=\"flex-1\">
                        <label class=\"block text-xs font-semibold text-orange-700 mb-1\">
                            Raison de la suspension (visible par le vendeur)
                        </label>
                        <textarea name=\"commentaire_admin\" rows=\"2\" required
                                  placeholder=\"Ex : Photos non conformes, prix incohérent…\"
                                  class=\"w-full border border-orange-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-orange-400 bg-white\"></textarea>
                    </div>
                    <div class=\"flex gap-2\">
                        <button type=\"submit\"
                                class=\"px-4 py-2 bg-orange-500 text-white text-xs font-semibold rounded-lg hover:bg-orange-600 transition-all\">
                            Confirmer
                        </button>
                        <button type=\"button\" onclick=\"togglePauseForm({{ a.id_annonce }})\"
                                class=\"px-4 py-2 border border-gray-200 text-tertiary text-xs rounded-lg hover:bg-gray-100 transition-all\">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
        {% else %}
        <div class=\"bg-white rounded-xl shadow-sm p-10 text-center text-tertiary text-sm\">Aucune annonce trouvée.</div>
        {% endfor %}
    </div>

</div>

{% block javascripts %}
<script>
function togglePauseForm(id) {
    const el = document.getElementById('pause-form-' + id);
    el.classList.toggle('hidden');
}
</script>
{% endblock %}
{% endblock %}
", "admin/annonces.html.twig", "D:\\br02\\we4a\\projet\\Projet_WE4A\\templates\\admin\\annonces.html.twig");
    }
}
