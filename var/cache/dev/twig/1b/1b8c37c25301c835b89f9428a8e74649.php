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

/* annonce/mes_annonces.html.twig */
class __TwigTemplate_fc0e3b272d8a4aab0e52e5990d2d5bf6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/mes_annonces.html.twig"));

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

        yield "Mes annonces — AutoMarket";
        
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
        yield "
    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Mes annonces</h1>
            <p class=\"text-tertiary mt-1\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 15, $this->source); })())), "html", null, true);
        yield " annonce";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 15, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</p>
        </div>
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_nouvelle");
        yield "\"
           class=\"px-5 py-3 bg-secondary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all text-sm\">
            + Nouvelle annonce
        </a>
    </div>

    ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "        <div class=\"text-center py-24 bg-white rounded-xl shadow-sm\">
            <svg class=\"w-16 h-16 text-gray-200 mx-auto mb-4\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
            </svg>
            <p class=\"text-xl font-semibold text-primary mb-2\">Aucune annonce pour l'instant</p>
            <p class=\"text-tertiary text-sm mb-6\">Publiez votre première annonce et touchez des acheteurs qualifiés.</p>
            <a href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_nouvelle");
            yield "\"
               class=\"inline-block px-8 py-3 bg-secondary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all\">
                Publier une annonce
            </a>
        </div>
    ";
        } else {
            // line 36
            yield "        <div class=\"space-y-4\">
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 38
                yield "            <div class=\"bg-white rounded-xl shadow-sm overflow-hidden flex gap-0 hover:shadow-md transition-shadow\">

                ";
                // line 41
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\"
                   class=\"flex-none w-40 h-32 bg-gray-100 overflow-hidden\">
                    ";
                // line 43
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 44), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 44), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 44), "html", null, true);
                    yield "\"
                             class=\"w-full h-full object-cover hover:scale-105 transition-transform duration-300\">
                    ";
                } else {
                    // line 47
                    yield "                        <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                            <svg class=\"w-10 h-10\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                            </svg>
                        </div>
                    ";
                }
                // line 53
                yield "                </a>

                ";
                // line 56
                yield "                <div class=\"flex-1 px-5 py-4 min-w-0\">
                    <div class=\"flex items-start justify-between gap-4\">
                        <div class=\"min-w-0\">
                            <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\"
                               class=\"font-bold text-primary hover:text-secondary transition-colors\">
                                ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 61), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 61), "html", null, true);
                yield "
                            </a>
                            <p class=\"text-xs text-tertiary mt-0.5\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "version_nom", [], "any", false, false, false, 63), "html", null, true);
                yield "</p>
                        </div>
                        <p class=\"text-xl font-bold text-secondary flex-none\">
                            ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 66), 0, ",", " "), "html", null, true);
                yield " €
                        </p>
                    </div>

                    <div class=\"flex flex-wrap gap-x-3 gap-y-1 text-xs text-tertiary mt-2\">
                        <span>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annee_circulation", [], "any", false, false, false, 71), "html", null, true);
                yield "</span>
                        <span>•</span>
                        <span>";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "kilometrage", [], "any", false, false, false, 73), 0, ",", " "), "html", null, true);
                yield " km</span>
                        ";
                // line 74
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>•</span><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 74), "html", null, true);
                    yield "</span>";
                }
                // line 75
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>•</span><span>📍 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 75), "html", null, true);
                    yield "</span>";
                }
                // line 76
                yield "                    </div>

                    <div class=\"flex items-center justify-between mt-3\">
                        <span class=\"text-xs text-gray-400\">
                            Publiée le ";
                // line 80
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_publication", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_publication", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_creation", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true)));
                yield "
                        </span>
                        <div class=\"flex gap-2\">
                            <a href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 83)]), "html", null, true);
                yield "\"
                               class=\"px-3 py-1.5 border border-primary text-primary text-xs font-semibold rounded-lg hover:bg-primary hover:text-white transition-all\">
                                Modifier
                            </a>
                            <form action=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" method=\"post\">
                                <button type=\"submit\"
                                        class=\"px-3 py-1.5 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "        </div>
    ";
        }
        // line 101
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
        return "annonce/mes_annonces.html.twig";
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
        return array (  279 => 101,  275 => 99,  257 => 87,  250 => 83,  244 => 80,  238 => 76,  231 => 75,  225 => 74,  221 => 73,  216 => 71,  208 => 66,  202 => 63,  195 => 61,  190 => 59,  185 => 56,  181 => 53,  173 => 47,  162 => 44,  160 => 43,  154 => 41,  150 => 38,  146 => 37,  143 => 36,  134 => 30,  126 => 24,  124 => 23,  115 => 17,  108 => 15,  102 => 11,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Mes annonces — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Mes annonces</h1>
            <p class=\"text-tertiary mt-1\">{{ annonces|length }} annonce{{ annonces|length != 1 ? 's' : '' }}</p>
        </div>
        <a href=\"{{ path('annonce_nouvelle') }}\"
           class=\"px-5 py-3 bg-secondary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all text-sm\">
            + Nouvelle annonce
        </a>
    </div>

    {% if annonces is empty %}
        <div class=\"text-center py-24 bg-white rounded-xl shadow-sm\">
            <svg class=\"w-16 h-16 text-gray-200 mx-auto mb-4\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
            </svg>
            <p class=\"text-xl font-semibold text-primary mb-2\">Aucune annonce pour l'instant</p>
            <p class=\"text-tertiary text-sm mb-6\">Publiez votre première annonce et touchez des acheteurs qualifiés.</p>
            <a href=\"{{ path('annonce_nouvelle') }}\"
               class=\"inline-block px-8 py-3 bg-secondary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all\">
                Publier une annonce
            </a>
        </div>
    {% else %}
        <div class=\"space-y-4\">
            {% for a in annonces %}
            <div class=\"bg-white rounded-xl shadow-sm overflow-hidden flex gap-0 hover:shadow-md transition-shadow\">

                {# Miniature #}
                <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\"
                   class=\"flex-none w-40 h-32 bg-gray-100 overflow-hidden\">
                    {% if a.photo_principale %}
                        <img src=\"{{ a.photo_principale }}\" alt=\"{{ a.marque_nom }} {{ a.modele_nom }}\"
                             class=\"w-full h-full object-cover hover:scale-105 transition-transform duration-300\">
                    {% else %}
                        <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                            <svg class=\"w-10 h-10\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                            </svg>
                        </div>
                    {% endif %}
                </a>

                {# Infos #}
                <div class=\"flex-1 px-5 py-4 min-w-0\">
                    <div class=\"flex items-start justify-between gap-4\">
                        <div class=\"min-w-0\">
                            <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\"
                               class=\"font-bold text-primary hover:text-secondary transition-colors\">
                                {{ a.marque_nom }} {{ a.modele_nom }}
                            </a>
                            <p class=\"text-xs text-tertiary mt-0.5\">{{ a.version_nom }}</p>
                        </div>
                        <p class=\"text-xl font-bold text-secondary flex-none\">
                            {{ a.prix|number_format(0, ',', ' ') }} €
                        </p>
                    </div>

                    <div class=\"flex flex-wrap gap-x-3 gap-y-1 text-xs text-tertiary mt-2\">
                        <span>{{ a.annee_circulation }}</span>
                        <span>•</span>
                        <span>{{ a.kilometrage|number_format(0, ',', ' ') }} km</span>
                        {% if a.etat %}<span>•</span><span>{{ a.etat }}</span>{% endif %}
                        {% if a.localisation %}<span>•</span><span>📍 {{ a.localisation }}</span>{% endif %}
                    </div>

                    <div class=\"flex items-center justify-between mt-3\">
                        <span class=\"text-xs text-gray-400\">
                            Publiée le {{ a.date_publication ? a.date_publication|date('d/m/Y') : a.date_creation|date('d/m/Y') }}
                        </span>
                        <div class=\"flex gap-2\">
                            <a href=\"{{ path('annonce_modifier', {id: a.id_annonce}) }}\"
                               class=\"px-3 py-1.5 border border-primary text-primary text-xs font-semibold rounded-lg hover:bg-primary hover:text-white transition-all\">
                                Modifier
                            </a>
                            <form action=\"{{ path('annonce_supprimer', {id: a.id_annonce}) }}\" method=\"post\">
                                <button type=\"submit\"
                                        class=\"px-3 py-1.5 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            {% endfor %}
        </div>
    {% endif %}

</div>
{% endblock %}
", "annonce/mes_annonces.html.twig", "C:\\projets\\Projet_WE4A\\templates\\annonce\\mes_annonces.html.twig");
    }
}
