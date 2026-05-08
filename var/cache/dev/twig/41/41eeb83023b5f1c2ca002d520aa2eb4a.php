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

/* stats.html.twig */
class __TwigTemplate_f2548e54aca22fd3d124fb70f154e942 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stats.html.twig"));

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

        yield "Statistiques — AutoMarket";
        
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

    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Statistiques</h1>
        <p class=\"text-tertiary mt-1\">Vos performances & le marché actif</p>
    </div>

    ";
        // line 14
        yield "    <h2 class=\"text-lg font-bold text-primary font-['ManRope'] mb-4 flex items-center gap-2\">
        <span class=\"w-1 h-5 bg-secondary rounded-full inline-block\"></span>
        Mes ventes
    </h2>

    ";
        // line 20
        yield "    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-6\">
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-secondary\">";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statsEntreprise"] ?? null), "vendues", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 22, $this->source); })()), "vendues", [], "any", false, false, false, 22)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 22, $this->source); })()), "vendues", [], "any", false, false, false, 22), "html", null, true)) : (0));
        yield "</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Ventes conclues</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">";
        // line 26
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statsEntreprise"] ?? null), "actives", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 26, $this->source); })()), "actives", [], "any", false, false, false, 26)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 26, $this->source); })()), "actives", [], "any", false, false, false, 26), "html", null, true)) : (0));
        yield "</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Annonces actives</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 30, $this->source); })()), "taux_conversion", [], "any", false, false, false, 30) > 20)) {
            yield "text-green-600";
        } else {
            yield "text-primary";
        }
        yield "\">
                ";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statsEntreprise"] ?? null), "taux_conversion", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 31, $this->source); })()), "taux_conversion", [], "any", false, false, false, 31)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 31, $this->source); })()), "taux_conversion", [], "any", false, false, false, 31), "html", null, true)) : (0));
        yield " %
            </p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Taux de conversion</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-secondary\">";
        // line 36
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 36, $this->source); })()), "ca_total", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 36, $this->source); })()), "ca_total", [], "any", false, false, false, 36), 0, ",", " ") . " €"), "html", null, true)) : ("—"));
        yield "</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">CA total</p>
        </div>
    </div>

    ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 41, $this->source); })()), "prix_moyen_vente", [], "any", false, false, false, 41) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 41, $this->source); })()), "delai_moyen_jours", [], "any", false, false, false, 41))) {
            // line 42
            yield "    <div class=\"flex flex-wrap gap-4 mb-6\">
        ";
            // line 43
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 43, $this->source); })()), "prix_moyen_vente", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "        <div class=\"bg-white rounded-xl shadow-sm px-6 py-4 flex items-center gap-4 flex-1 min-w-[200px]\">
            <div class=\"text-2xl font-bold text-primary\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 45, $this->source); })()), "prix_moyen_vente", [], "any", false, false, false, 45), 0, ",", " "), "html", null, true);
                yield " €</div>
            <p class=\"text-xs text-tertiary\">Prix moyen de vente</p>
        </div>
        ";
            }
            // line 49
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 49, $this->source); })()), "delai_moyen_jours", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "        <div class=\"bg-secondary/5 border border-secondary/20 rounded-xl px-6 py-4 flex items-center gap-4 flex-1 min-w-[200px]\">
            <div class=\"text-2xl font-bold text-secondary\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsEntreprise"]) || array_key_exists("statsEntreprise", $context) ? $context["statsEntreprise"] : (function () { throw new RuntimeError('Variable "statsEntreprise" does not exist.', 51, $this->source); })()), "delai_moyen_jours", [], "any", false, false, false, 51), "html", null, true);
                yield " j</div>
            <p class=\"text-xs text-tertiary\">Délai moyen de vente</p>
        </div>
        ";
            }
            // line 55
            yield "    </div>
    ";
        }
        // line 57
        yield "
    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10\">

        ";
        // line 61
        yield "        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Volume de ventes — 12 derniers mois</h3>
            </div>
            ";
        // line 65
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["ventesParMois"]) || array_key_exists("ventesParMois", $context) ? $context["ventesParMois"] : (function () { throw new RuntimeError('Variable "ventesParMois" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune vente sur la période.</p>
            ";
        } else {
            // line 68
            yield "            <div class=\"p-5\">
                ";
            // line 69
            $context["maxV"] = max(Twig\Extension\CoreExtension::map($this->env, (isset($context["ventesParMois"]) || array_key_exists("ventesParMois", $context) ? $context["ventesParMois"] : (function () { throw new RuntimeError('Variable "ventesParMois" does not exist.', 69, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 69, $this->source); })()), "nb_ventes", [], "any", false, false, false, 69); }));
            // line 70
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ventesParMois"]) || array_key_exists("ventesParMois", $context) ? $context["ventesParMois"] : (function () { throw new RuntimeError('Variable "ventesParMois" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 71
                yield "                <div class=\"flex items-center gap-3 mb-2\">
                    <span class=\"text-xs text-tertiary w-16 shrink-0\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "mois_label", [], "any", false, false, false, 72), "html", null, true);
                yield "</span>
                    <div class=\"flex-1 bg-gray-100 rounded-full h-4 overflow-hidden\">
                        <div class=\"h-full bg-secondary rounded-full\"
                             style=\"width: ";
                // line 75
                yield ((((isset($context["maxV"]) || array_key_exists("maxV", $context) ? $context["maxV"] : (function () { throw new RuntimeError('Variable "maxV" does not exist.', 75, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb_ventes", [], "any", false, false, false, 75) / (isset($context["maxV"]) || array_key_exists("maxV", $context) ? $context["maxV"] : (function () { throw new RuntimeError('Variable "maxV" does not exist.', 75, $this->source); })())) * 100)) . "%"), "html", null, true)) : ("0%"));
                yield "\"></div>
                    </div>
                    <span class=\"text-xs font-semibold text-primary w-6 text-right shrink-0\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb_ventes", [], "any", false, false, false, 77), "html", null, true);
                yield "</span>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "            </div>
            ";
        }
        // line 82
        yield "        </div>

        ";
        // line 85
        yield "        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Mes modèles les plus vendus</h3>
            </div>
            ";
        // line 89
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["topVendus"]) || array_key_exists("topVendus", $context) ? $context["topVendus"] : (function () { throw new RuntimeError('Variable "topVendus" does not exist.', 89, $this->source); })()))) {
            // line 90
            yield "                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune vente enregistrée.</p>
            ";
        } else {
            // line 92
            yield "            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Modèle</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Ventes</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topVendus"]) || array_key_exists("topVendus", $context) ? $context["topVendus"] : (function () { throw new RuntimeError('Variable "topVendus" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 102
                yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "marque", [], "any", false, false, false, 103), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "modele", [], "any", false, false, false, 103), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-xs font-semibold text-secondary\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb_ventes", [], "any", false, false, false, 104), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-xs text-tertiary\">";
                // line 105
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prix_moyen", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prix_moyen", [], "any", false, false, false, 105), 0, ",", " ") . " €"), "html", null, true)) : ("—"));
                yield "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "                </tbody>
            </table>
            ";
        }
        // line 111
        yield "        </div>

    </div>

    <hr class=\"border-gray-200 mb-10\">

    ";
        // line 118
        yield "    <h2 class=\"text-lg font-bold text-primary font-['ManRope'] mb-4 flex items-center gap-2\">
        <span class=\"w-1 h-5 bg-primary/30 rounded-full inline-block\"></span>
        Marché actif
    </h2>

    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 125, $this->source); })()), "annonces_actives", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Annonces actives</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-secondary\">";
        // line 129
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 129, $this->source); })()), "prix_moyen", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 129, $this->source); })()), "prix_moyen", [], "any", false, false, false, 129), 0, ",", " ") . " €"), "html", null, true)) : ("—"));
        yield "</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Prix moyen</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">";
        // line 133
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 133, $this->source); })()), "km_moyen", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 133, $this->source); })()), "km_moyen", [], "any", false, false, false, 133), 0, ",", " ") . " km"), "html", null, true)) : ("—"));
        yield "</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Kilométrage moyen</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 137, $this->source); })()), "total_annonces", [], "any", false, false, false, 137), "html", null, true);
        yield "</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Total annonces</p>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Prix moyen par marque (top 10)</h3>
            </div>
            ";
        // line 148
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["parMarque"]) || array_key_exists("parMarque", $context) ? $context["parMarque"] : (function () { throw new RuntimeError('Variable "parMarque" does not exist.', 148, $this->source); })()))) {
            // line 149
            yield "                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            ";
        } else {
            // line 151
            yield "            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Marque</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parMarque"]) || array_key_exists("parMarque", $context) ? $context["parMarque"] : (function () { throw new RuntimeError('Variable "parMarque" does not exist.', 160, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 161
                yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "marque", [], "any", false, false, false, 162), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb", [], "any", false, false, false, 163), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-secondary font-semibold text-xs\">";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prix_moyen", [], "any", false, false, false, 164), 0, ",", " "), "html", null, true);
                yield " €</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            yield "                </tbody>
            </table>
            ";
        }
        // line 170
        yield "        </div>

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Modèles les plus annoncés (top 10)</h3>
            </div>
            ";
        // line 176
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["topModeles"]) || array_key_exists("topModeles", $context) ? $context["topModeles"] : (function () { throw new RuntimeError('Variable "topModeles" does not exist.', 176, $this->source); })()))) {
            // line 177
            yield "                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            ";
        } else {
            // line 179
            yield "            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Modèle</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topModeles"]) || array_key_exists("topModeles", $context) ? $context["topModeles"] : (function () { throw new RuntimeError('Variable "topModeles" does not exist.', 187, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 188
                yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "marque", [], "any", false, false, false, 189), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "modele", [], "any", false, false, false, 189), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb", [], "any", false, false, false, 190), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            yield "                </tbody>
            </table>
            ";
        }
        // line 196
        yield "        </div>

    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Répartition par carburant</h3>
            </div>
            ";
        // line 206
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["parCarburant"]) || array_key_exists("parCarburant", $context) ? $context["parCarburant"] : (function () { throw new RuntimeError('Variable "parCarburant" does not exist.', 206, $this->source); })()))) {
            // line 207
            yield "                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            ";
        } else {
            // line 209
            yield "            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Carburant</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parCarburant"]) || array_key_exists("parCarburant", $context) ? $context["parCarburant"] : (function () { throw new RuntimeError('Variable "parCarburant" does not exist.', 218, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 219
                yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "carburant", [], "any", false, false, false, 220), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb", [], "any", false, false, false, 221), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-secondary font-semibold text-xs\">";
                // line 222
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prix_moyen", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prix_moyen", [], "any", false, false, false, 222), 0, ",", " ") . " €"), "html", null, true)) : ("—"));
                yield "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            yield "                </tbody>
            </table>
            ";
        }
        // line 228
        yield "        </div>

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Annonces par année de mise en circulation</h3>
            </div>
            ";
        // line 234
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["parAnnee"]) || array_key_exists("parAnnee", $context) ? $context["parAnnee"] : (function () { throw new RuntimeError('Variable "parAnnee" does not exist.', 234, $this->source); })()))) {
            // line 235
            yield "                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            ";
        } else {
            // line 237
            yield "            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Année</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parAnnee"]) || array_key_exists("parAnnee", $context) ? $context["parAnnee"] : (function () { throw new RuntimeError('Variable "parAnnee" does not exist.', 246, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 247
                yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "annee", [], "any", false, false, false, 248), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">";
                // line 249
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb", [], "any", false, false, false, 249), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right text-secondary font-semibold text-xs\">";
                // line 250
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prix_moyen", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prix_moyen", [], "any", false, false, false, 250), 0, ",", " ") . " €"), "html", null, true)) : ("—"));
                yield "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            yield "                </tbody>
            </table>
            ";
        }
        // line 256
        yield "        </div>

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
        return "stats.html.twig";
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
        return array (  550 => 256,  545 => 253,  536 => 250,  532 => 249,  528 => 248,  525 => 247,  521 => 246,  510 => 237,  506 => 235,  504 => 234,  496 => 228,  491 => 225,  482 => 222,  478 => 221,  474 => 220,  471 => 219,  467 => 218,  456 => 209,  452 => 207,  450 => 206,  438 => 196,  433 => 193,  424 => 190,  418 => 189,  415 => 188,  411 => 187,  401 => 179,  397 => 177,  395 => 176,  387 => 170,  382 => 167,  373 => 164,  369 => 163,  365 => 162,  362 => 161,  358 => 160,  347 => 151,  343 => 149,  341 => 148,  327 => 137,  320 => 133,  313 => 129,  306 => 125,  297 => 118,  289 => 111,  284 => 108,  275 => 105,  271 => 104,  265 => 103,  262 => 102,  258 => 101,  247 => 92,  243 => 90,  241 => 89,  235 => 85,  231 => 82,  227 => 80,  218 => 77,  213 => 75,  207 => 72,  204 => 71,  199 => 70,  197 => 69,  194 => 68,  190 => 66,  188 => 65,  182 => 61,  177 => 57,  173 => 55,  166 => 51,  163 => 50,  160 => 49,  153 => 45,  150 => 44,  148 => 43,  145 => 42,  143 => 41,  135 => 36,  127 => 31,  119 => 30,  112 => 26,  105 => 22,  101 => 20,  94 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Statistiques — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Statistiques</h1>
        <p class=\"text-tertiary mt-1\">Vos performances & le marché actif</p>
    </div>

    {# ══ MES VENTES ══════════════════════════════════════════════════════════ #}
    <h2 class=\"text-lg font-bold text-primary font-['ManRope'] mb-4 flex items-center gap-2\">
        <span class=\"w-1 h-5 bg-secondary rounded-full inline-block\"></span>
        Mes ventes
    </h2>

    {# KPIs personnels #}
    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-6\">
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-secondary\">{{ statsEntreprise.vendues ?? 0 }}</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Ventes conclues</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">{{ statsEntreprise.actives ?? 0 }}</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Annonces actives</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold {% if statsEntreprise.taux_conversion > 20 %}text-green-600{% else %}text-primary{% endif %}\">
                {{ statsEntreprise.taux_conversion ?? 0 }} %
            </p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Taux de conversion</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-secondary\">{{ statsEntreprise.ca_total ? (statsEntreprise.ca_total|number_format(0, ',', ' ') ~ ' €') : '—' }}</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">CA total</p>
        </div>
    </div>

    {% if statsEntreprise.prix_moyen_vente or statsEntreprise.delai_moyen_jours %}
    <div class=\"flex flex-wrap gap-4 mb-6\">
        {% if statsEntreprise.prix_moyen_vente %}
        <div class=\"bg-white rounded-xl shadow-sm px-6 py-4 flex items-center gap-4 flex-1 min-w-[200px]\">
            <div class=\"text-2xl font-bold text-primary\">{{ statsEntreprise.prix_moyen_vente|number_format(0, ',', ' ') }} €</div>
            <p class=\"text-xs text-tertiary\">Prix moyen de vente</p>
        </div>
        {% endif %}
        {% if statsEntreprise.delai_moyen_jours %}
        <div class=\"bg-secondary/5 border border-secondary/20 rounded-xl px-6 py-4 flex items-center gap-4 flex-1 min-w-[200px]\">
            <div class=\"text-2xl font-bold text-secondary\">{{ statsEntreprise.delai_moyen_jours }} j</div>
            <p class=\"text-xs text-tertiary\">Délai moyen de vente</p>
        </div>
        {% endif %}
    </div>
    {% endif %}

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10\">

        {# Volume de ventes par mois #}
        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Volume de ventes — 12 derniers mois</h3>
            </div>
            {% if ventesParMois is empty %}
                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune vente sur la période.</p>
            {% else %}
            <div class=\"p-5\">
                {% set maxV = max(ventesParMois|map(r => r.nb_ventes)) %}
                {% for row in ventesParMois %}
                <div class=\"flex items-center gap-3 mb-2\">
                    <span class=\"text-xs text-tertiary w-16 shrink-0\">{{ row.mois_label }}</span>
                    <div class=\"flex-1 bg-gray-100 rounded-full h-4 overflow-hidden\">
                        <div class=\"h-full bg-secondary rounded-full\"
                             style=\"width: {{ maxV > 0 ? (row.nb_ventes / maxV * 100)|round ~ '%' : '0%' }}\"></div>
                    </div>
                    <span class=\"text-xs font-semibold text-primary w-6 text-right shrink-0\">{{ row.nb_ventes }}</span>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>

        {# Top modèles vendus #}
        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Mes modèles les plus vendus</h3>
            </div>
            {% if topVendus is empty %}
                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune vente enregistrée.</p>
            {% else %}
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Modèle</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Ventes</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    {% for row in topVendus %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">{{ row.marque }} {{ row.modele }}</td>
                        <td class=\"px-5 py-2 text-right text-xs font-semibold text-secondary\">{{ row.nb_ventes }}</td>
                        <td class=\"px-5 py-2 text-right text-xs text-tertiary\">{{ row.prix_moyen ? (row.prix_moyen|number_format(0, ',', ' ') ~ ' €') : '—' }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>

    </div>

    <hr class=\"border-gray-200 mb-10\">

    {# ══ MARCHÉ ACTIF ════════════════════════════════════════════════════════ #}
    <h2 class=\"text-lg font-bold text-primary font-['ManRope'] mb-4 flex items-center gap-2\">
        <span class=\"w-1 h-5 bg-primary/30 rounded-full inline-block\"></span>
        Marché actif
    </h2>

    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">{{ global.annonces_actives }}</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Annonces actives</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-secondary\">{{ global.prix_moyen ? (global.prix_moyen|number_format(0, ',', ' ') ~ ' €') : '—' }}</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Prix moyen</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">{{ global.km_moyen ? (global.km_moyen|number_format(0, ',', ' ') ~ ' km') : '—' }}</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Kilométrage moyen</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5 text-center\">
            <p class=\"text-3xl font-bold text-primary\">{{ global.total_annonces }}</p>
            <p class=\"text-xs text-tertiary mt-1 uppercase tracking-wide\">Total annonces</p>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Prix moyen par marque (top 10)</h3>
            </div>
            {% if parMarque is empty %}
                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            {% else %}
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Marque</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    {% for row in parMarque %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">{{ row.marque }}</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">{{ row.nb }}</td>
                        <td class=\"px-5 py-2 text-right text-secondary font-semibold text-xs\">{{ row.prix_moyen|number_format(0, ',', ' ') }} €</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Modèles les plus annoncés (top 10)</h3>
            </div>
            {% if topModeles is empty %}
                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            {% else %}
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Modèle</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    {% for row in topModeles %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">{{ row.marque }} {{ row.modele }}</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">{{ row.nb }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>

    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Répartition par carburant</h3>
            </div>
            {% if parCarburant is empty %}
                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            {% else %}
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Carburant</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    {% for row in parCarburant %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">{{ row.carburant }}</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">{{ row.nb }}</td>
                        <td class=\"px-5 py-2 text-right text-secondary font-semibold text-xs\">{{ row.prix_moyen ? (row.prix_moyen|number_format(0, ',', ' ') ~ ' €') : '—' }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h3 class=\"font-semibold text-primary text-sm\">Annonces par année de mise en circulation</h3>
            </div>
            {% if parAnnee is empty %}
                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune donnée.</p>
            {% else %}
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Année</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Annonces</th>
                        <th class=\"px-5 py-2 text-right text-xs font-semibold text-tertiary\">Prix moyen</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    {% for row in parAnnee %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">{{ row.annee }}</td>
                        <td class=\"px-5 py-2 text-right text-tertiary text-xs\">{{ row.nb }}</td>
                        <td class=\"px-5 py-2 text-right text-secondary font-semibold text-xs\">{{ row.prix_moyen ? (row.prix_moyen|number_format(0, ',', ' ') ~ ' €') : '—' }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>

    </div>

</div>
{% endblock %}
", "stats.html.twig", "D:\\br02\\we4a\\projet\\Projet_WE4A\\templates\\stats.html.twig");
    }
}
