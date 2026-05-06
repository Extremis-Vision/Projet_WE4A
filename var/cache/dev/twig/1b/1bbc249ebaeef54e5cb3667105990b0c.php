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

/* connexion.html.twig */
class __TwigTemplate_214669954dbaa1bd87c9f3fd8ef2e92d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.html.twig"));

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

        yield "Connexion — AutoMarket";
        
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
        yield "<div class=\"min-h-[60vh] flex items-center justify-center py-12 px-4\">
    <div class=\"w-full max-w-md\">
        <h1 class=\"text-3xl font-bold text-primary mb-2 font-['ManRope']\">Connexion</h1>
        <p class=\"text-tertiary mb-8\">Accédez à votre espace AutoMarket</p>

        ";
        // line 11
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">
                ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 16
        yield "
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "            <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">
                ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
        <form action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        yield "\" method=\"post\" class=\"space-y-5\">
            <div>
                <label for=\"email\" class=\"block text-sm font-medium text-tertiary mb-1\">Adresse email</label>
                <input
                    type=\"email\" id=\"email\" name=\"email\"
                    value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\"
                    required autocomplete=\"email\"
                    class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\"
                >
            </div>

            <div>
                <label for=\"mdp\" class=\"block text-sm font-medium text-tertiary mb-1\">Mot de passe</label>
                <input
                    type=\"password\" id=\"mdp\" name=\"mdp\"
                    required autocomplete=\"current-password\"
                    class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\"
                >
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <button type=\"submit\"
                    class=\"w-full py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all\">
                Se connecter
            </button>
        </form>

        <p class=\"text-center text-tertiary mt-6 text-sm\">
            Pas encore de compte ?
            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        yield "\" class=\"text-secondary font-semibold hover:underline\">S'inscrire</a>
        </p>
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
        return "connexion.html.twig";
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
        return array (  164 => 53,  151 => 43,  133 => 28,  125 => 23,  122 => 22,  113 => 19,  110 => 18,  106 => 17,  103 => 16,  97 => 13,  94 => 12,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Connexion — AutoMarket{% endblock %}

{% block main %}
<div class=\"min-h-[60vh] flex items-center justify-center py-12 px-4\">
    <div class=\"w-full max-w-md\">
        <h1 class=\"text-3xl font-bold text-primary mb-2 font-['ManRope']\">Connexion</h1>
        <p class=\"text-tertiary mb-8\">Accédez à votre espace AutoMarket</p>

        {% if error %}
            <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        {% for message in app.flashes('success') %}
            <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">
                {{ message }}
            </div>
        {% endfor %}

        <form action=\"{{ path('connexion') }}\" method=\"post\" class=\"space-y-5\">
            <div>
                <label for=\"email\" class=\"block text-sm font-medium text-tertiary mb-1\">Adresse email</label>
                <input
                    type=\"email\" id=\"email\" name=\"email\"
                    value=\"{{ last_username }}\"
                    required autocomplete=\"email\"
                    class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\"
                >
            </div>

            <div>
                <label for=\"mdp\" class=\"block text-sm font-medium text-tertiary mb-1\">Mot de passe</label>
                <input
                    type=\"password\" id=\"mdp\" name=\"mdp\"
                    required autocomplete=\"current-password\"
                    class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\"
                >
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            <button type=\"submit\"
                    class=\"w-full py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all\">
                Se connecter
            </button>
        </form>

        <p class=\"text-center text-tertiary mt-6 text-sm\">
            Pas encore de compte ?
            <a href=\"{{ path('inscription') }}\" class=\"text-secondary font-semibold hover:underline\">S'inscrire</a>
        </p>
    </div>
</div>
{% endblock %}
", "connexion.html.twig", "C:\\projets\\Projet_WE4A\\templates\\connexion.html.twig");
    }
}
