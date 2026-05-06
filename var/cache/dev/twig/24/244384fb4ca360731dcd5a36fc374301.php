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

/* inscription.html.twig */
class __TwigTemplate_415b7ef544a9339668448656691c1d1e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription.html.twig"));

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

        yield "Inscription — AutoMarket";
        
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
    <div class=\"w-full max-w-lg\">
        <h1 class=\"text-3xl font-bold text-primary mb-2 font-['ManRope']\">Créer un compte</h1>
        <p class=\"text-tertiary mb-8\">Rejoignez la communauté AutoMarket</p>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "            <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
        <form id=\"form-inscription\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        yield "\" method=\"post\" class=\"space-y-5\" novalidate>
            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label for=\"prenom\" class=\"block text-sm font-medium text-tertiary mb-1\">Prénom *</label>
                    <input type=\"text\" id=\"prenom\" name=\"prenom\" required
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label for=\"nom\" class=\"block text-sm font-medium text-tertiary mb-1\">Nom *</label>
                    <input type=\"text\" id=\"nom\" name=\"nom\" required
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div>
                <label for=\"email\" class=\"block text-sm font-medium text-tertiary mb-1\">Adresse email *</label>
                <input type=\"email\" id=\"email\" name=\"email\" required autocomplete=\"email\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
            </div>

            <div>
                <label for=\"numero_phone\" class=\"block text-sm font-medium text-tertiary mb-1\">Téléphone (optionnel)</label>
                <input type=\"tel\" id=\"numero_phone\" name=\"numero_phone\" placeholder=\"06 12 34 56 78\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
            </div>

            <div>
                <label for=\"mdp\" class=\"block text-sm font-medium text-tertiary mb-1\">Mot de passe * (8 caractères minimum)</label>
                <input type=\"password\" id=\"mdp\" name=\"mdp\" required minlength=\"8\" autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
            </div>

            <div>
                <label for=\"mdp_confirm\" class=\"block text-sm font-medium text-tertiary mb-1\">Confirmer le mot de passe *</label>
                <input type=\"password\" id=\"mdp_confirm\" name=\"mdp_confirm\" required autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                <p id=\"mdp-error\" class=\"text-red-500 text-sm mt-1 hidden\">Les mots de passe ne correspondent pas.</p>
            </div>

            <button type=\"submit\"
                    class=\"w-full py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all\">
                Créer mon compte
            </button>
        </form>

        <p class=\"text-center text-tertiary mt-6 text-sm\">
            Déjà un compte ?
            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        yield "\" class=\"text-secondary font-semibold hover:underline\">Se connecter</a>
        </p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/validation.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "inscription.html.twig";
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
        return array (  182 => 69,  172 => 68,  159 => 62,  109 => 15,  106 => 14,  97 => 12,  93 => 11,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Inscription — AutoMarket{% endblock %}

{% block main %}
<div class=\"min-h-[60vh] flex items-center justify-center py-12 px-4\">
    <div class=\"w-full max-w-lg\">
        <h1 class=\"text-3xl font-bold text-primary mb-2 font-['ManRope']\">Créer un compte</h1>
        <p class=\"text-tertiary mb-8\">Rejoignez la communauté AutoMarket</p>

        {% for message in app.flashes('error') %}
            <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ message }}</div>
        {% endfor %}

        <form id=\"form-inscription\" action=\"{{ path('inscription') }}\" method=\"post\" class=\"space-y-5\" novalidate>
            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label for=\"prenom\" class=\"block text-sm font-medium text-tertiary mb-1\">Prénom *</label>
                    <input type=\"text\" id=\"prenom\" name=\"prenom\" required
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label for=\"nom\" class=\"block text-sm font-medium text-tertiary mb-1\">Nom *</label>
                    <input type=\"text\" id=\"nom\" name=\"nom\" required
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div>
                <label for=\"email\" class=\"block text-sm font-medium text-tertiary mb-1\">Adresse email *</label>
                <input type=\"email\" id=\"email\" name=\"email\" required autocomplete=\"email\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
            </div>

            <div>
                <label for=\"numero_phone\" class=\"block text-sm font-medium text-tertiary mb-1\">Téléphone (optionnel)</label>
                <input type=\"tel\" id=\"numero_phone\" name=\"numero_phone\" placeholder=\"06 12 34 56 78\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
            </div>

            <div>
                <label for=\"mdp\" class=\"block text-sm font-medium text-tertiary mb-1\">Mot de passe * (8 caractères minimum)</label>
                <input type=\"password\" id=\"mdp\" name=\"mdp\" required minlength=\"8\" autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
            </div>

            <div>
                <label for=\"mdp_confirm\" class=\"block text-sm font-medium text-tertiary mb-1\">Confirmer le mot de passe *</label>
                <input type=\"password\" id=\"mdp_confirm\" name=\"mdp_confirm\" required autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                <p id=\"mdp-error\" class=\"text-red-500 text-sm mt-1 hidden\">Les mots de passe ne correspondent pas.</p>
            </div>

            <button type=\"submit\"
                    class=\"w-full py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all\">
                Créer mon compte
            </button>
        </form>

        <p class=\"text-center text-tertiary mt-6 text-sm\">
            Déjà un compte ?
            <a href=\"{{ path('connexion') }}\" class=\"text-secondary font-semibold hover:underline\">Se connecter</a>
        </p>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/validation.js') }}\"></script>
{% endblock %}
", "inscription.html.twig", "C:\\projets\\Projet_WE4A\\templates\\inscription.html.twig");
    }
}
