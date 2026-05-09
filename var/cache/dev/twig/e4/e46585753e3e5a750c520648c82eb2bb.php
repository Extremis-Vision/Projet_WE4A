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

/* admin/dashboard.html.twig */
class __TwigTemplate_2e436342ef94316e61c363abdc759f39 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Tableau de bord — AutoMarket Admin";
        
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
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Tableau de bord</h1>
        <p class=\"text-tertiary mt-1\">Bienvenue, ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "prenom", [], "any", false, false, false, 10), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
    </div>

    ";
        // line 14
        yield "    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">Utilisateurs</p>
            <p class=\"text-3xl font-bold text-primary\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 17, $this->source); })()), "total_users", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">Annonces actives</p>
            <p class=\"text-3xl font-bold text-green-600\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "active_annonces", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">En pause</p>
            <p class=\"text-3xl font-bold text-orange-500\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "paused_annonces", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">Total annonces</p>
            <p class=\"text-3xl font-bold text-primary\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), "total_annonces", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
        </div>
    </div>

    ";
        // line 34
        yield "    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
        yield "\"
           class=\"bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow flex items-center gap-4\">
            <div class=\"w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-none\">
                <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
            </div>
            <div>
                <p class=\"font-bold text-primary\">Utilisateurs</p>
                <p class=\"text-xs text-tertiary mt-0.5\">Gérer les comptes</p>
            </div>
        </a>

        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        yield "\"
           class=\"bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow flex items-center gap-4\">
            <div class=\"w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-none\">
                <svg class=\"w-6 h-6 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                </svg>
            </div>
            <div>
                <p class=\"font-bold text-primary\">Annonces</p>
                <p class=\"text-xs text-tertiary mt-0.5\">Modérer les annonces</p>
            </div>
        </a>

        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\"
           class=\"bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow flex items-center gap-4\">
            <div class=\"w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-none\">
                <svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\"/>
                </svg>
            </div>
            <div>
                <p class=\"font-bold text-primary\">Catalogue</p>
                <p class=\"text-xs text-tertiary mt-0.5\">Marques, modèles, versions</p>
            </div>
        </a>
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
        return "admin/dashboard.html.twig";
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
        return array (  167 => 61,  151 => 48,  135 => 35,  132 => 34,  125 => 29,  118 => 25,  111 => 21,  104 => 17,  99 => 14,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Tableau de bord — AutoMarket Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Tableau de bord</h1>
        <p class=\"text-tertiary mt-1\">Bienvenue, {{ app.user.prenom }} {{ app.user.nom }}</p>
    </div>

    {# Stats #}
    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">Utilisateurs</p>
            <p class=\"text-3xl font-bold text-primary\">{{ stats.total_users }}</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">Annonces actives</p>
            <p class=\"text-3xl font-bold text-green-600\">{{ stats.active_annonces }}</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">En pause</p>
            <p class=\"text-3xl font-bold text-orange-500\">{{ stats.paused_annonces }}</p>
        </div>
        <div class=\"bg-white rounded-xl shadow-sm p-5\">
            <p class=\"text-xs text-tertiary uppercase tracking-wide mb-1\">Total annonces</p>
            <p class=\"text-3xl font-bold text-primary\">{{ stats.total_annonces }}</p>
        </div>
    </div>

    {# Accès rapides #}
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
        <a href=\"{{ path('admin_utilisateurs') }}\"
           class=\"bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow flex items-center gap-4\">
            <div class=\"w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-none\">
                <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
            </div>
            <div>
                <p class=\"font-bold text-primary\">Utilisateurs</p>
                <p class=\"text-xs text-tertiary mt-0.5\">Gérer les comptes</p>
            </div>
        </a>

        <a href=\"{{ path('admin_annonces') }}\"
           class=\"bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow flex items-center gap-4\">
            <div class=\"w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-none\">
                <svg class=\"w-6 h-6 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                </svg>
            </div>
            <div>
                <p class=\"font-bold text-primary\">Annonces</p>
                <p class=\"text-xs text-tertiary mt-0.5\">Modérer les annonces</p>
            </div>
        </a>

        <a href=\"{{ path('admin_catalogue') }}\"
           class=\"bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow flex items-center gap-4\">
            <div class=\"w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-none\">
                <svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\"/>
                </svg>
            </div>
            <div>
                <p class=\"font-bold text-primary\">Catalogue</p>
                <p class=\"text-xs text-tertiary mt-0.5\">Marques, modèles, versions</p>
            </div>
        </a>
    </div>

</div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\dashboard.html.twig");
    }
}
