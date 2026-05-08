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

/* favoris/favoris.html.twig */
class __TwigTemplate_744c3e579c092e46b8acf417ca3d5c86 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris/favoris.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        yield "Mes favoris — AutoMarket";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        yield "<div class=\"max-w-7xl mx-auto px-6 py-10\">

    <div class=\"flex items-center gap-3 mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Mes favoris</h1>
        ";
        // line 9
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 9, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "            <span class=\"text-sm bg-secondary text-white font-bold px-3 py-1 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 10, $this->source); })())), "html", null, true);
            yield "</span>
        ";
        }
        // line 12
        yield "    </div>

    ";
        // line 14
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "        <div class=\"flex flex-col items-center justify-center py-28 text-center\">
            <div class=\"w-20 h-20 rounded-2xl bg-secondary/10 flex items-center justify-center mb-6\">
                <svg class=\"w-10 h-10 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                </svg>
            </div>
            <h2 class=\"text-xl font-bold text-primary font-['ManRope'] mb-2\">Aucun favori</h2>
            <p class=\"text-sm text-primary/50 max-w-xs mb-8\">
                Cliquez sur le cœur d'une annonce pour l'ajouter à vos favoris.
            </p>
            <a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\"
               class=\"inline-flex items-center gap-2 px-8 py-3 bg-secondary text-white font-bold rounded-xl hover:bg-secondary/90 active:scale-95 transition-all text-sm shadow-md shadow-secondary/20\">
                Parcourir les annonces
                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                </svg>
            </a>
        </div>
    ";
        } else {
            // line 34
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 36
                yield "            <div class=\"relative group\">
                <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\"
                   class=\"block bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col\">

                    <div class=\"aspect-[4/3] bg-gray-100 overflow-hidden shrink-0\">
                        ";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 42), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 42), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 42), "html", null, true);
                    yield "\"
                                 class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-300\">
                        ";
                } else {
                    // line 45
                    yield "                            <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                                <svg class=\"w-16 h-16\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                                </svg>
                            </div>
                        ";
                }
                // line 51
                yield "                    </div>

                    <div class=\"p-4 flex flex-col flex-1\">
                        <div class=\"flex items-start justify-between gap-2 mb-0.5\">
                            <h2 class=\"font-bold text-primary text-sm leading-tight\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 55), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 55), "html", null, true);
                yield "</h2>
                            ";
                // line 56
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type_nom", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                                <span class=\"shrink-0 text-[9px] bg-primary/10 text-primary px-1.5 py-0.5 rounded-full font-semibold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type_nom", [], "any", false, false, false, 57), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 59
                yield "                        </div>
                        <p class=\"text-xs text-tertiary mb-3 truncate\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "version_nom", [], "any", false, false, false, 60), "html", null, true);
                yield "</p>
                        <p class=\"text-xl font-bold text-secondary mb-3\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 61), 0, ",", " "), "html", null, true);
                yield " €</p>
                        <div class=\"flex flex-wrap gap-x-2 gap-y-1 text-xs text-tertiary mb-2\">
                            <span>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annee_circulation", [], "any", false, false, false, 63), "html", null, true);
                yield "</span>
                            <span>·</span>
                            <span>";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "kilometrage", [], "any", false, false, false, 65), 0, ",", " "), "html", null, true);
                yield " km</span>
                            ";
                // line 66
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "boite_vitesse", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>·</span><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "boite_vitesse", [], "any", false, false, false, 66), "html", null, true);
                    yield "</span>";
                }
                // line 67
                yield "                        </div>
                        ";
                // line 68
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                            <p class=\"text-xs text-tertiary mt-auto truncate\">📍 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 69), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 71
                yield "                    </div>
                </a>

                ";
                // line 75
                yield "                <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\"
                      class=\"absolute top-2 right-2\" onsubmit=\"event.stopPropagation()\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("favori"), "html", null, true);
                yield "\">
                    <button type=\"submit\"
                            title=\"Retirer des favoris\"
                            class=\"w-9 h-9 rounded-full bg-white shadow-md flex items-center justify-center hover:scale-110 transition-transform\">
                        <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                        </svg>
                    </button>
                </form>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "        </div>
    ";
        }
        // line 90
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
        return "favoris/favoris.html.twig";
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
        return array (  257 => 90,  253 => 88,  236 => 77,  230 => 75,  225 => 71,  219 => 69,  217 => 68,  214 => 67,  208 => 66,  204 => 65,  199 => 63,  194 => 61,  190 => 60,  187 => 59,  181 => 57,  179 => 56,  173 => 55,  167 => 51,  159 => 45,  148 => 42,  146 => 41,  139 => 37,  136 => 36,  132 => 35,  129 => 34,  117 => 25,  105 => 15,  103 => 14,  99 => 12,  93 => 10,  91 => 9,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block pageTitle %}Mes favoris — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-7xl mx-auto px-6 py-10\">

    <div class=\"flex items-center gap-3 mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Mes favoris</h1>
        {% if annonces is not empty %}
            <span class=\"text-sm bg-secondary text-white font-bold px-3 py-1 rounded-full\">{{ annonces|length }}</span>
        {% endif %}
    </div>

    {% if annonces is empty %}
        <div class=\"flex flex-col items-center justify-center py-28 text-center\">
            <div class=\"w-20 h-20 rounded-2xl bg-secondary/10 flex items-center justify-center mb-6\">
                <svg class=\"w-10 h-10 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                </svg>
            </div>
            <h2 class=\"text-xl font-bold text-primary font-['ManRope'] mb-2\">Aucun favori</h2>
            <p class=\"text-sm text-primary/50 max-w-xs mb-8\">
                Cliquez sur le cœur d'une annonce pour l'ajouter à vos favoris.
            </p>
            <a href=\"{{ path('annonces') }}\"
               class=\"inline-flex items-center gap-2 px-8 py-3 bg-secondary text-white font-bold rounded-xl hover:bg-secondary/90 active:scale-95 transition-all text-sm shadow-md shadow-secondary/20\">
                Parcourir les annonces
                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                </svg>
            </a>
        </div>
    {% else %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
            {% for a in annonces %}
            <div class=\"relative group\">
                <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\"
                   class=\"block bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col\">

                    <div class=\"aspect-[4/3] bg-gray-100 overflow-hidden shrink-0\">
                        {% if a.photo_principale %}
                            <img src=\"{{ a.photo_principale }}\" alt=\"{{ a.marque_nom }} {{ a.modele_nom }}\"
                                 class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-300\">
                        {% else %}
                            <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                                <svg class=\"w-16 h-16\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                                </svg>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"p-4 flex flex-col flex-1\">
                        <div class=\"flex items-start justify-between gap-2 mb-0.5\">
                            <h2 class=\"font-bold text-primary text-sm leading-tight\">{{ a.marque_nom }} {{ a.modele_nom }}</h2>
                            {% if a.type_nom %}
                                <span class=\"shrink-0 text-[9px] bg-primary/10 text-primary px-1.5 py-0.5 rounded-full font-semibold\">{{ a.type_nom }}</span>
                            {% endif %}
                        </div>
                        <p class=\"text-xs text-tertiary mb-3 truncate\">{{ a.version_nom }}</p>
                        <p class=\"text-xl font-bold text-secondary mb-3\">{{ a.prix|number_format(0, ',', ' ') }} €</p>
                        <div class=\"flex flex-wrap gap-x-2 gap-y-1 text-xs text-tertiary mb-2\">
                            <span>{{ a.annee_circulation }}</span>
                            <span>·</span>
                            <span>{{ a.kilometrage|number_format(0, ',', ' ') }} km</span>
                            {% if a.boite_vitesse %}<span>·</span><span>{{ a.boite_vitesse }}</span>{% endif %}
                        </div>
                        {% if a.localisation %}
                            <p class=\"text-xs text-tertiary mt-auto truncate\">📍 {{ a.localisation }}</p>
                        {% endif %}
                    </div>
                </a>

                {# Bouton cœur — toujours plein sur cette page #}
                <form method=\"post\" action=\"{{ path('favori_toggle', {id: a.id_annonce}) }}\"
                      class=\"absolute top-2 right-2\" onsubmit=\"event.stopPropagation()\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('favori') }}\">
                    <button type=\"submit\"
                            title=\"Retirer des favoris\"
                            class=\"w-9 h-9 rounded-full bg-white shadow-md flex items-center justify-center hover:scale-110 transition-transform\">
                        <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                        </svg>
                    </button>
                </form>
            </div>
            {% endfor %}
        </div>
    {% endif %}

</div>
{% endblock %}
", "favoris/favoris.html.twig", "D:\\br02\\we4a\\projet\\Projet_WE4A\\templates\\favoris\\favoris.html.twig");
    }
}
