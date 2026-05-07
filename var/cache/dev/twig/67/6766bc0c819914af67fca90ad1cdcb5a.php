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

/* admin/catalogue.html.twig */
class __TwigTemplate_0cad5db160482e0fa0142a544d864f7a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue.html.twig"));

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

        yield "Catalogue — AutoMarket Admin";
        
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
    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Catalogue — Marques</h1>
            <p class=\"text-tertiary mt-1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 18, $this->source); })())), "html", null, true);
        yield " marque";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 18, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</p>
        </div>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"text-sm text-tertiary hover:text-primary\">← Tableau de bord</a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

        ";
        // line 26
        yield "        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">Liste des marques</h2>
            </div>
            <ul class=\"divide-y divide-gray-50\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 32
            yield "                <li class=\"flex items-center justify-between px-5 py-3 hover:bg-gray-50\">
                    <div>
                        <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_modeles", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"
                           class=\"font-medium text-primary hover:text-secondary transition-colors text-sm\">
                            ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "
                        </a>
                        <span class=\"ml-2 text-xs text-tertiary\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_modeles", [], "any", false, false, false, 38), "html", null, true);
            yield " modèle";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_modeles", [], "any", false, false, false, 38) != 1)) ? ("s") : (""));
            yield "</span>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_modeles", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\"
                           class=\"text-xs text-secondary hover:underline\">Voir →</a>
                        ";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_modeles", [], "any", false, false, false, 43) == 0)) {
                // line 44
                yield "                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_marque", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 45), "html", null, true);
                yield " ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                        </form>
                        ";
            }
            // line 49
            yield "                    </div>
                </li>
                ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "                <li class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune marque.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            </ul>
        </div>

        ";
        // line 58
        yield "        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une marque</h2>
            <form action=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_marque");
        yield "\" method=\"post\" class=\"flex gap-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom de la marque\"
                       class=\"flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <button type=\"submit\"
                        class=\"px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
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
        return "admin/catalogue.html.twig";
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
        return array (  214 => 60,  210 => 58,  205 => 54,  198 => 52,  196 => 51,  190 => 49,  183 => 45,  178 => 44,  176 => 43,  171 => 41,  163 => 38,  158 => 36,  153 => 34,  149 => 32,  144 => 31,  137 => 26,  129 => 20,  122 => 18,  116 => 14,  107 => 12,  102 => 11,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Catalogue — AutoMarket Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Catalogue — Marques</h1>
            <p class=\"text-tertiary mt-1\">{{ marques|length }} marque{{ marques|length != 1 ? 's' : '' }}</p>
        </div>
        <a href=\"{{ path('admin_dashboard') }}\" class=\"text-sm text-tertiary hover:text-primary\">← Tableau de bord</a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

        {# Liste des marques #}
        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">Liste des marques</h2>
            </div>
            <ul class=\"divide-y divide-gray-50\">
                {% for m in marques %}
                <li class=\"flex items-center justify-between px-5 py-3 hover:bg-gray-50\">
                    <div>
                        <a href=\"{{ path('admin_catalogue_modeles', {id: m.id_marque}) }}\"
                           class=\"font-medium text-primary hover:text-secondary transition-colors text-sm\">
                            {{ m.nom }}
                        </a>
                        <span class=\"ml-2 text-xs text-tertiary\">{{ m.nb_modeles }} modèle{{ m.nb_modeles != 1 ? 's' : '' }}</span>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <a href=\"{{ path('admin_catalogue_modeles', {id: m.id_marque}) }}\"
                           class=\"text-xs text-secondary hover:underline\">Voir →</a>
                        {% if m.nb_modeles == 0 %}
                        <form action=\"{{ path('admin_supprimer_marque', {id: m.id_marque}) }}\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer {{ m.nom }} ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                        </form>
                        {% endif %}
                    </div>
                </li>
                {% else %}
                <li class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune marque.</li>
                {% endfor %}
            </ul>
        </div>

        {# Ajouter une marque #}
        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une marque</h2>
            <form action=\"{{ path('admin_ajouter_marque') }}\" method=\"post\" class=\"flex gap-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom de la marque\"
                       class=\"flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <button type=\"submit\"
                        class=\"px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                    Ajouter
                </button>
            </form>
        </div>

    </div>
</div>
{% endblock %}
", "admin/catalogue.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\catalogue.html.twig");
    }
}
