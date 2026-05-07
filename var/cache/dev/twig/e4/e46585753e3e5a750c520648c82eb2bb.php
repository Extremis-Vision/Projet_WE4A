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

        yield "Tableau de bord — Admin";
        
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
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Tableau de bord</h1>
        <p class=\"text-tertiary mt-1\">Vue d'ensemble de la plateforme</p>
    </div>

    <div class=\"grid grid-cols-2 lg:grid-cols-4 gap-5 mb-8\">

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">Utilisateurs</span>
                <div class=\"w-8 h-8 bg-blue-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-blue-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), "total_users", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
        yield "\" class=\"text-xs text-blue-500 hover:underline mt-1 inline-block\">Gérer →</a>
        </div>

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">Annonces actives</span>
                <div class=\"w-8 h-8 bg-green-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-green-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "active_annonces", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces", ["statut" => "active"]);
        yield "\" class=\"text-xs text-green-500 hover:underline mt-1 inline-block\">Voir →</a>
        </div>

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">En pause</span>
                <div class=\"w-8 h-8 bg-orange-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-orange-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "paused_annonces", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces", ["statut" => "pause"]);
        yield "\" class=\"text-xs text-orange-500 hover:underline mt-1 inline-block\">Voir →</a>
        </div>

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">Total annonces</span>
                <div class=\"w-8 h-8 bg-purple-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-purple-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 70, $this->source); })()), "total_annonces", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        yield "\" class=\"text-xs text-purple-500 hover:underline mt-1 inline-block\">Voir tout →</a>
        </div>

    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-5\">

        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
        yield "\"
           class=\"bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-primary hover:shadow-md transition-all group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center group-hover:bg-primary/10 transition-colors\">
                    <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                    </svg>
                </div>
                <div>
                    <p class=\"font-bold text-primary\">Utilisateurs</p>
                    <p class=\"text-sm text-gray-400 mt-0.5\">Consulter et supprimer des comptes</p>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        yield "\"
           class=\"bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-primary hover:shadow-md transition-all group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center group-hover:bg-primary/10 transition-colors\">
                    <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                    </svg>
                </div>
                <div>
                    <p class=\"font-bold text-primary\">Annonces</p>
                    <p class=\"text-sm text-gray-400 mt-0.5\">Supprimer, pauser, réactiver</p>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\"
           class=\"bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-primary hover:shadow-md transition-all group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center group-hover:bg-primary/10 transition-colors\">
                    <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\"/>
                    </svg>
                </div>
                <div>
                    <p class=\"font-bold text-primary\">Catalogue</p>
                    <p class=\"text-sm text-gray-400 mt-0.5\">Marques, modèles, générations, versions</p>
                </div>
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
        return array (  242 => 108,  224 => 93,  206 => 78,  196 => 71,  192 => 70,  177 => 58,  173 => 57,  158 => 45,  154 => 44,  139 => 32,  135 => 31,  116 => 14,  107 => 12,  102 => 11,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Tableau de bord — Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Tableau de bord</h1>
        <p class=\"text-tertiary mt-1\">Vue d'ensemble de la plateforme</p>
    </div>

    <div class=\"grid grid-cols-2 lg:grid-cols-4 gap-5 mb-8\">

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">Utilisateurs</span>
                <div class=\"w-8 h-8 bg-blue-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-blue-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">{{ stats.total_users }}</p>
            <a href=\"{{ path('admin_utilisateurs') }}\" class=\"text-xs text-blue-500 hover:underline mt-1 inline-block\">Gérer →</a>
        </div>

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">Annonces actives</span>
                <div class=\"w-8 h-8 bg-green-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-green-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">{{ stats.active_annonces }}</p>
            <a href=\"{{ path('admin_annonces', {statut: 'active'}) }}\" class=\"text-xs text-green-500 hover:underline mt-1 inline-block\">Voir →</a>
        </div>

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">En pause</span>
                <div class=\"w-8 h-8 bg-orange-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-orange-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">{{ stats.paused_annonces }}</p>
            <a href=\"{{ path('admin_annonces', {statut: 'pause'}) }}\" class=\"text-xs text-orange-500 hover:underline mt-1 inline-block\">Voir →</a>
        </div>

        <div class=\"bg-white rounded-xl p-5 shadow-sm border border-gray-100\">
            <div class=\"flex items-center justify-between mb-3\">
                <span class=\"text-xs font-semibold uppercase tracking-wider text-gray-400\">Total annonces</span>
                <div class=\"w-8 h-8 bg-purple-50 rounded-lg flex items-center justify-center\">
                    <svg class=\"w-4 h-4 text-purple-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                    </svg>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-primary\">{{ stats.total_annonces }}</p>
            <a href=\"{{ path('admin_annonces') }}\" class=\"text-xs text-purple-500 hover:underline mt-1 inline-block\">Voir tout →</a>
        </div>

    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-5\">

        <a href=\"{{ path('admin_utilisateurs') }}\"
           class=\"bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-primary hover:shadow-md transition-all group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center group-hover:bg-primary/10 transition-colors\">
                    <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                    </svg>
                </div>
                <div>
                    <p class=\"font-bold text-primary\">Utilisateurs</p>
                    <p class=\"text-sm text-gray-400 mt-0.5\">Consulter et supprimer des comptes</p>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_annonces') }}\"
           class=\"bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-primary hover:shadow-md transition-all group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center group-hover:bg-primary/10 transition-colors\">
                    <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                    </svg>
                </div>
                <div>
                    <p class=\"font-bold text-primary\">Annonces</p>
                    <p class=\"text-sm text-gray-400 mt-0.5\">Supprimer, pauser, réactiver</p>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_catalogue') }}\"
           class=\"bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-primary hover:shadow-md transition-all group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center group-hover:bg-primary/10 transition-colors\">
                    <svg class=\"w-6 h-6 text-primary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\"/>
                    </svg>
                </div>
                <div>
                    <p class=\"font-bold text-primary\">Catalogue</p>
                    <p class=\"text-sm text-gray-400 mt-0.5\">Marques, modèles, générations, versions</p>
                </div>
            </div>
        </a>

    </div>

</div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\dashboard.html.twig");
    }
}
