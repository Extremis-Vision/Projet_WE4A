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

/* admin/catalogue_modeles.html.twig */
class __TwigTemplate_f655c0783fb2f2c13138093bfa26c32b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue_modeles.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
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
    <div class=\"flex items-center gap-2 text-xs text-tertiary mb-6\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\" class=\"hover:text-primary\">Catalogue</a>
        <span>›</span>
        <span class=\"text-primary font-medium\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
    </div>

    ";
        // line 22
        yield "    <div class=\"flex items-start justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        yield " — Modèles</h1>
            <div class=\"flex flex-wrap gap-3 mt-2\">
                ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 26, $this->source); })()), "pays", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 27, $this->source); })()), "pays", [], "any", false, false, false, 27), "html", null, true);
            yield "</span>
                ";
        }
        // line 29
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 29, $this->source); })()), "continent", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 30, $this->source); })()), "continent", [], "any", false, false, false, 30), "html", null, true);
            yield "</span>
                ";
        }
        // line 32
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 32, $this->source); })()), "date_creation", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">Fondée en ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 33, $this->source); })()), "date_creation", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
                ";
        }
        // line 35
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 35, $this->source); })()), "createur", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">par ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 36, $this->source); })()), "createur", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                ";
        }
        // line 38
        yield "            </div>
            ";
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                <p class=\"text-xs text-tertiary mt-2 max-w-lg\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
            ";
        }
        // line 42
        yield "        </div>
        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\" class=\"text-sm text-tertiary hover:text-primary shrink-0\">← Catalogue</a>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

        ";
        // line 49
        yield "        <div class=\"lg:col-span-2 bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 51, $this->source); })())), "html", null, true);
        yield " modèle";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 51, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</h2>
            </div>
            ";
        // line 53
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 53, $this->source); })()))) {
            // line 54
            yield "                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucun modèle.</p>
            ";
        } else {
            // line 56
            yield "            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Modèle</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Type</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Année</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Générations</th>
                        <th class=\"px-5 py-2\"></th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 68
                yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2\">
                            <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_generations", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_modele", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\"
                               class=\"font-medium text-primary hover:text-secondary transition-colors\">";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 71), "html", null, true);
                yield "</a>
                        </td>
                        <td class=\"px-5 py-2 text-xs text-tertiary\">";
                // line 73
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "type_nom", [], "any", true, true, false, 73) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["m"], "type_nom", [], "any", false, false, false, 73)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "type_nom", [], "any", false, false, false, 73), "html", null, true)) : ("—"));
                yield "</td>
                        <td class=\"px-5 py-2 text-xs text-tertiary\">";
                // line 74
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "annee_creation", [], "any", true, true, false, 74) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["m"], "annee_creation", [], "any", false, false, false, 74)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "annee_creation", [], "any", false, false, false, 74), "html", null, true)) : ("—"));
                yield "</td>
                        <td class=\"px-5 py-2 text-xs text-tertiary\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_generations", [], "any", false, false, false, 75), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_generations", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_modele", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\"
                                   class=\"text-xs text-secondary hover:underline\">Voir →</a>
                                ";
                // line 80
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_generations", [], "any", false, false, false, 80) == 0)) {
                    // line 81
                    yield "                                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_modele", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_modele", [], "any", false, false, false, 81)]), "html", null, true);
                    yield "\" method=\"post\"
                                      onsubmit=\"return confirm('Supprimer ";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 82), "js"), "html", null, true);
                    yield " ?')\">
                                    <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                                </form>
                                ";
                }
                // line 86
                yield "                            </div>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                </tbody>
            </table>
            ";
        }
        // line 93
        yield "        </div>

        ";
        // line 96
        yield "        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter un modèle</h2>
            <form action=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_modele", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 98, $this->source); })()), "id_marque", [], "any", false, false, false, 98)]), "html", null, true);
        yield "\" method=\"post\" class=\"space-y-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom du modèle *\"
                       class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">

                <div>
                    <label class=\"block text-xs text-tertiary mb-1\">Type de carrosserie *</label>
                    <select name=\"id_type\" required
                            class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        <option value=\"\">Choisir un type</option>
                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 108
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_type", [], "any", false, false, false, 108), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "nom", [], "any", false, false, false, 108), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                    </select>
                </div>

                <div>
                    <label class=\"block text-xs text-tertiary mb-1\">Année de création</label>
                    <input type=\"number\" name=\"annee_creation\" min=\"1880\" max=\"2030\" placeholder=\"ex : 1998\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                </div>

                <button type=\"submit\"
                        class=\"w-full px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                    Ajouter
                </button>
            </form>
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
        return "admin/catalogue_modeles.html.twig";
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
        return array (  327 => 110,  316 => 108,  312 => 107,  300 => 98,  296 => 96,  292 => 93,  287 => 90,  278 => 86,  271 => 82,  266 => 81,  264 => 80,  259 => 78,  253 => 75,  249 => 74,  245 => 73,  240 => 71,  236 => 70,  232 => 68,  228 => 67,  215 => 56,  211 => 54,  209 => 53,  202 => 51,  198 => 49,  190 => 43,  187 => 42,  181 => 40,  179 => 39,  176 => 38,  170 => 36,  167 => 35,  161 => 33,  158 => 32,  152 => 30,  149 => 29,  143 => 27,  141 => 26,  136 => 24,  132 => 22,  126 => 18,  121 => 16,  117 => 14,  108 => 12,  103 => 11,  94 => 9,  90 => 8,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}{{ marque.nom }} — Catalogue Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center gap-2 text-xs text-tertiary mb-6\">
        <a href=\"{{ path('admin_catalogue') }}\" class=\"hover:text-primary\">Catalogue</a>
        <span>›</span>
        <span class=\"text-primary font-medium\">{{ marque.nom }}</span>
    </div>

    {# Entête marque #}
    <div class=\"flex items-start justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">{{ marque.nom }} — Modèles</h1>
            <div class=\"flex flex-wrap gap-3 mt-2\">
                {% if marque.pays %}
                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">{{ marque.pays }}</span>
                {% endif %}
                {% if marque.continent %}
                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">{{ marque.continent }}</span>
                {% endif %}
                {% if marque.date_creation %}
                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">Fondée en {{ marque.date_creation }}</span>
                {% endif %}
                {% if marque.createur %}
                    <span class=\"text-xs text-tertiary bg-gray-100 px-2 py-0.5 rounded-full\">par {{ marque.createur }}</span>
                {% endif %}
            </div>
            {% if marque.description %}
                <p class=\"text-xs text-tertiary mt-2 max-w-lg\">{{ marque.description }}</p>
            {% endif %}
        </div>
        <a href=\"{{ path('admin_catalogue') }}\" class=\"text-sm text-tertiary hover:text-primary shrink-0\">← Catalogue</a>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

        {# Liste des modèles #}
        <div class=\"lg:col-span-2 bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">{{ modeles|length }} modèle{{ modeles|length != 1 ? 's' : '' }}</h2>
            </div>
            {% if modeles is empty %}
                <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucun modèle.</p>
            {% else %}
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Modèle</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Type</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Année</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Générations</th>
                        <th class=\"px-5 py-2\"></th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    {% for m in modeles %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2\">
                            <a href=\"{{ path('admin_catalogue_generations', {id: m.id_modele}) }}\"
                               class=\"font-medium text-primary hover:text-secondary transition-colors\">{{ m.nom }}</a>
                        </td>
                        <td class=\"px-5 py-2 text-xs text-tertiary\">{{ m.type_nom ?? '—' }}</td>
                        <td class=\"px-5 py-2 text-xs text-tertiary\">{{ m.annee_creation ?? '—' }}</td>
                        <td class=\"px-5 py-2 text-xs text-tertiary\">{{ m.nb_generations }}</td>
                        <td class=\"px-5 py-2 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"{{ path('admin_catalogue_generations', {id: m.id_modele}) }}\"
                                   class=\"text-xs text-secondary hover:underline\">Voir →</a>
                                {% if m.nb_generations == 0 %}
                                <form action=\"{{ path('admin_supprimer_modele', {id: m.id_modele}) }}\" method=\"post\"
                                      onsubmit=\"return confirm('Supprimer {{ m.nom|e('js') }} ?')\">
                                    <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                                </form>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>

        {# Ajouter un modèle #}
        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter un modèle</h2>
            <form action=\"{{ path('admin_ajouter_modele', {id: marque.id_marque}) }}\" method=\"post\" class=\"space-y-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom du modèle *\"
                       class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">

                <div>
                    <label class=\"block text-xs text-tertiary mb-1\">Type de carrosserie *</label>
                    <select name=\"id_type\" required
                            class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                        <option value=\"\">Choisir un type</option>
                        {% for t in types %}
                            <option value=\"{{ t.id_type }}\">{{ t.nom }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div>
                    <label class=\"block text-xs text-tertiary mb-1\">Année de création</label>
                    <input type=\"number\" name=\"annee_creation\" min=\"1880\" max=\"2030\" placeholder=\"ex : 1998\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                </div>

                <button type=\"submit\"
                        class=\"w-full px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                    Ajouter
                </button>
            </form>
        </div>

    </div>
</div>
{% endblock %}
", "admin/catalogue_modeles.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\catalogue_modeles.html.twig");
    }
}
