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

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

        ";
        // line 33
        yield "        <div class=\"lg:col-span-2 bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 35, $this->source); })())), "html", null, true);
        yield " version";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 35, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</h2>
            </div>
            ";
        // line 37
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 37, $this->source); })()))) {
            // line 38
            yield "            <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune version.</p>
            ";
        } else {
            // line 40
            yield "            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Version</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Transmission</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Boîte</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Places</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Portes</th>
                        <th class=\"px-5 py-2\"></th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 53
                yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nom", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">";
                // line 55
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "transmission", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["v"], "transmission", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "transmission", [], "any", false, false, false, 55), "html", null, true)) : ("—"));
                yield "</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">";
                // line 56
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "boite_vitesse", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["v"], "boite_vitesse", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "boite_vitesse", [], "any", false, false, false, 56), "html", null, true)) : ("—"));
                yield "</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">";
                // line 57
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_places", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_places", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_places", [], "any", false, false, false, 57), "html", null, true)) : ("—"));
                yield "</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">";
                // line 58
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_portes", [], "any", true, true, false, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_portes", [], "any", false, false, false, 58)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nombre_portes", [], "any", false, false, false, 58), "html", null, true)) : ("—"));
                yield "</td>
                        <td class=\"px-5 py-2 text-right\">
                            <form action=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_version", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["v"], "id_version", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" method=\"post\"
                                  onsubmit=\"return confirm('Supprimer ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "nom", [], "any", false, false, false, 61), "html", null, true);
                yield " ?')\">
                                <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                            </form>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "                </tbody>
            </table>
            ";
        }
        // line 70
        yield "        </div>

        ";
        // line 73
        yield "        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une version</h2>
            <form action=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_version", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["generation"]) || array_key_exists("generation", $context) ? $context["generation"] : (function () { throw new RuntimeError('Variable "generation" does not exist.', 75, $this->source); })()), "id_generation", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\" method=\"post\" class=\"space-y-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom (ex : 1.5 TSI 150 S line)\"
                       class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <select name=\"transmission\"
                        class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                    <option value=\"\">Transmission (optionnel)</option>
                    <option value=\"Traction avant\">Traction avant</option>
                    <option value=\"Propulsion\">Propulsion</option>
                    <option value=\"Intégrale\">Intégrale</option>
                </select>
                <select name=\"boite_vitesse\"
                        class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                    <option value=\"\">Boîte (optionnel)</option>
                    <option value=\"Manuelle\">Manuelle</option>
                    <option value=\"Automatique\">Automatique</option>
                </select>
                <div class=\"grid grid-cols-2 gap-2\">
                    <input type=\"number\" name=\"nombre_places\" min=\"1\" max=\"9\" placeholder=\"Places\"
                           class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                    <input type=\"number\" name=\"nombre_portes\" min=\"2\" max=\"5\" placeholder=\"Portes\"
                           class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
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
        return array (  249 => 75,  245 => 73,  241 => 70,  236 => 67,  224 => 61,  220 => 60,  215 => 58,  211 => 57,  207 => 56,  203 => 55,  199 => 54,  196 => 53,  192 => 52,  178 => 40,  174 => 38,  172 => 37,  165 => 35,  161 => 33,  151 => 27,  147 => 26,  140 => 22,  133 => 20,  126 => 18,  121 => 16,  117 => 14,  108 => 12,  103 => 11,  94 => 9,  90 => 8,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}{{ generation.generation_nom }} — Catalogue Admin{% endblock %}

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

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

        {# Liste des versions #}
        <div class=\"lg:col-span-2 bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">{{ versions|length }} version{{ versions|length != 1 ? 's' : '' }}</h2>
            </div>
            {% if versions is empty %}
            <p class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune version.</p>
            {% else %}
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Version</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Transmission</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Boîte</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Places</th>
                        <th class=\"px-5 py-2 text-left text-xs font-semibold text-tertiary\">Portes</th>
                        <th class=\"px-5 py-2\"></th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-50\">
                    {% for v in versions %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-5 py-2 font-medium text-primary\">{{ v.nom }}</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">{{ v.transmission ?? '—' }}</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">{{ v.boite_vitesse ?? '—' }}</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">{{ v.nombre_places ?? '—' }}</td>
                        <td class=\"px-5 py-2 text-tertiary text-xs\">{{ v.nombre_portes ?? '—' }}</td>
                        <td class=\"px-5 py-2 text-right\">
                            <form action=\"{{ path('admin_supprimer_version', {id: v.id_version}) }}\" method=\"post\"
                                  onsubmit=\"return confirm('Supprimer {{ v.nom }} ?')\">
                                <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                            </form>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>

        {# Ajouter une version #}
        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une version</h2>
            <form action=\"{{ path('admin_ajouter_version', {id: generation.id_generation}) }}\" method=\"post\" class=\"space-y-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom (ex : 1.5 TSI 150 S line)\"
                       class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <select name=\"transmission\"
                        class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                    <option value=\"\">Transmission (optionnel)</option>
                    <option value=\"Traction avant\">Traction avant</option>
                    <option value=\"Propulsion\">Propulsion</option>
                    <option value=\"Intégrale\">Intégrale</option>
                </select>
                <select name=\"boite_vitesse\"
                        class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                    <option value=\"\">Boîte (optionnel)</option>
                    <option value=\"Manuelle\">Manuelle</option>
                    <option value=\"Automatique\">Automatique</option>
                </select>
                <div class=\"grid grid-cols-2 gap-2\">
                    <input type=\"number\" name=\"nombre_places\" min=\"1\" max=\"9\" placeholder=\"Places\"
                           class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                    <input type=\"number\" name=\"nombre_portes\" min=\"2\" max=\"5\" placeholder=\"Portes\"
                           class=\"border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
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
", "admin/catalogue_versions.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\catalogue_versions.html.twig");
    }
}
