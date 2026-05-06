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

/* vendreMaVoiture.html.twig */
class __TwigTemplate_988e6e836067f1726715daa4aeeabf48 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendreMaVoiture.html.twig"));

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

        yield "Vendre ma voiture — AutoMarket";
        
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
        yield "<div class=\"max-w-4xl mx-auto px-6 py-16 text-center\">

    <h1 class=\"text-4xl font-bold text-primary font-['ManRope'] mb-4\">Vendez votre voiture sur AutoMarket</h1>
    <p class=\"text-tertiary text-lg mb-10 max-w-2xl mx-auto\">
        Publiez votre annonce en quelques minutes et touchez des acheteurs qualifiés.
        Gratuit, simple, et sans intermédiaire.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 text-left\">
        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <div class=\"text-secondary text-3xl font-bold mb-2\">01</div>
            <h3 class=\"font-bold text-primary mb-2\">Créez votre compte</h3>
            <p class=\"text-tertiary text-sm\">Inscrivez-vous en tant que vendeur pour accéder à votre espace de gestion d'annonces.</p>
        </div>
        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <div class=\"text-secondary text-3xl font-bold mb-2\">02</div>
            <h3 class=\"font-bold text-primary mb-2\">Renseignez votre véhicule</h3>
            <p class=\"text-tertiary text-sm\">Sélectionnez le modèle exact, précisez le kilométrage, l'état et le prix souhaité.</p>
        </div>
        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <div class=\"text-secondary text-3xl font-bold mb-2\">03</div>
            <h3 class=\"font-bold text-primary mb-2\">Publiez et recevez des contacts</h3>
            <p class=\"text-tertiary text-sm\">Votre annonce est visible immédiatement par des milliers d'acheteurs potentiels.</p>
        </div>
    </div>

    ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "        ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_nouvelle");
                yield "\"
               class=\"inline-block px-10 py-4 bg-secondary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all text-lg\">
                Publier mon annonce
            </a>
        ";
            }
            // line 39
            yield "    ";
        } else {
            // line 40
            yield "        <div class=\"flex flex-col sm:flex-row gap-4 justify-center\">
            <a href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            yield "\"
               class=\"px-10 py-4 bg-primary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all\">
                Créer un compte
            </a>
            <a href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\"
               class=\"px-10 py-4 border-2 border-primary text-primary font-bold rounded-xl hover:bg-primary hover:text-white transition-all\">
                Se connecter
            </a>
        </div>
    ";
        }
        // line 51
        yield "
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
        return "vendreMaVoiture.html.twig";
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
        return array (  149 => 51,  140 => 45,  133 => 41,  130 => 40,  127 => 39,  118 => 34,  115 => 33,  113 => 32,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Vendre ma voiture — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-4xl mx-auto px-6 py-16 text-center\">

    <h1 class=\"text-4xl font-bold text-primary font-['ManRope'] mb-4\">Vendez votre voiture sur AutoMarket</h1>
    <p class=\"text-tertiary text-lg mb-10 max-w-2xl mx-auto\">
        Publiez votre annonce en quelques minutes et touchez des acheteurs qualifiés.
        Gratuit, simple, et sans intermédiaire.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 text-left\">
        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <div class=\"text-secondary text-3xl font-bold mb-2\">01</div>
            <h3 class=\"font-bold text-primary mb-2\">Créez votre compte</h3>
            <p class=\"text-tertiary text-sm\">Inscrivez-vous en tant que vendeur pour accéder à votre espace de gestion d'annonces.</p>
        </div>
        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <div class=\"text-secondary text-3xl font-bold mb-2\">02</div>
            <h3 class=\"font-bold text-primary mb-2\">Renseignez votre véhicule</h3>
            <p class=\"text-tertiary text-sm\">Sélectionnez le modèle exact, précisez le kilométrage, l'état et le prix souhaité.</p>
        </div>
        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <div class=\"text-secondary text-3xl font-bold mb-2\">03</div>
            <h3 class=\"font-bold text-primary mb-2\">Publiez et recevez des contacts</h3>
            <p class=\"text-tertiary text-sm\">Votre annonce est visible immédiatement par des milliers d'acheteurs potentiels.</p>
        </div>
    </div>

    {% if app.user %}
        {% if is_granted('ROLE_USER') %}
            <a href=\"{{ path('annonce_nouvelle') }}\"
               class=\"inline-block px-10 py-4 bg-secondary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all text-lg\">
                Publier mon annonce
            </a>
        {% endif %}
    {% else %}
        <div class=\"flex flex-col sm:flex-row gap-4 justify-center\">
            <a href=\"{{ path('inscription') }}\"
               class=\"px-10 py-4 bg-primary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all\">
                Créer un compte
            </a>
            <a href=\"{{ path('connexion') }}\"
               class=\"px-10 py-4 border-2 border-primary text-primary font-bold rounded-xl hover:bg-primary hover:text-white transition-all\">
                Se connecter
            </a>
        </div>
    {% endif %}

</div>
{% endblock %}
", "vendreMaVoiture.html.twig", "C:\\projets\\Projet_WE4A\\templates\\vendreMaVoiture.html.twig");
    }
}
