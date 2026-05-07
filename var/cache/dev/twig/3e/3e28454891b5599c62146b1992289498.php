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

/* annonce/_liste.html.twig */
class __TwigTemplate_4c8dce12849fd4afda84c719118fc5ec extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/_liste.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <div class=\"text-center py-20 text-tertiary\">
        <p class=\"text-xl font-semibold mb-2\">Aucune annonce trouvée</p>
        <p class=\"text-sm\">Essayez d'élargir vos critères de recherche.</p>
    </div>
";
        } else {
            // line 7
            yield "    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 9
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 9)]), "html", null, true);
                yield "\"
           class=\"bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col\">

            <div class=\"aspect-[4/3] bg-gray-100 overflow-hidden shrink-0\">
                ";
                // line 13
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 14), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 14), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 14), "html", null, true);
                    yield "\"
                         class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-300\">
                ";
                } else {
                    // line 17
                    yield "                    <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                        <svg class=\"w-16 h-16\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                        </svg>
                    </div>
                ";
                }
                // line 23
                yield "            </div>

            <div class=\"p-4 flex flex-col flex-1\">
                <div class=\"flex items-start justify-between gap-2 mb-0.5\">
                    <h2 class=\"font-bold text-primary text-sm leading-tight\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 27), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 27), "html", null, true);
                yield "</h2>
                    ";
                // line 28
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type_nom", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "                        <span class=\"shrink-0 text-[9px] bg-primary/10 text-primary px-1.5 py-0.5 rounded-full font-semibold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type_nom", [], "any", false, false, false, 29), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 31
                yield "                </div>
                <p class=\"text-xs text-tertiary mb-3 truncate\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "version_nom", [], "any", false, false, false, 32), "html", null, true);
                yield "</p>

                <p class=\"text-xl font-bold text-secondary mb-3\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 34), 0, ",", " "), "html", null, true);
                yield " €</p>

                ";
                // line 37
                yield "                <div class=\"flex flex-wrap gap-x-2 gap-y-1 text-xs text-tertiary mb-2\">
                    <span>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annee_circulation", [], "any", false, false, false, 38), "html", null, true);
                yield "</span>
                    <span>·</span>
                    <span>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "kilometrage", [], "any", false, false, false, 40), 0, ",", " "), "html", null, true);
                yield " km</span>
                    ";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "boite_vitesse", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "                        <span>·</span>
                        <span>";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "boite_vitesse", [], "any", false, false, false, 43), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 45
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "transmission", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 46
                    yield "                        <span>·</span>
                        <span>";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "transmission", [], "any", false, false, false, 47), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 49
                yield "                </div>

                ";
                // line 52
                yield "                <div class=\"flex flex-wrap gap-1 mt-auto\">
                    ";
                // line 53
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 54
                    yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 56
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nombre_places", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nombre_places", [], "any", false, false, false, 57), "html", null, true);
                    yield " places</span>
                    ";
                }
                // line 59
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "premiere_main", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                        <span class=\"text-[10px] bg-green-50 text-green-700 px-2 py-0.5 rounded-full font-semibold\">1ère main</span>
                    ";
                }
                // line 62
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "couleur", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "couleur", [], "any", false, false, false, 63), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 65
                yield "                </div>

                ";
                // line 67
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "                    <p class=\"text-xs text-tertiary mt-2 truncate\">📍 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 68), "html", null, true);
                    yield "</p>
                ";
                }
                // line 70
                yield "            </div>
        </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonce/_liste.html.twig";
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
        return array (  216 => 73,  208 => 70,  202 => 68,  200 => 67,  196 => 65,  190 => 63,  187 => 62,  183 => 60,  180 => 59,  174 => 57,  171 => 56,  165 => 54,  163 => 53,  160 => 52,  156 => 49,  151 => 47,  148 => 46,  145 => 45,  140 => 43,  137 => 42,  135 => 41,  131 => 40,  126 => 38,  123 => 37,  118 => 34,  113 => 32,  110 => 31,  104 => 29,  102 => 28,  96 => 27,  90 => 23,  82 => 17,  71 => 14,  69 => 13,  61 => 9,  57 => 8,  54 => 7,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if annonces is empty %}
    <div class=\"text-center py-20 text-tertiary\">
        <p class=\"text-xl font-semibold mb-2\">Aucune annonce trouvée</p>
        <p class=\"text-sm\">Essayez d'élargir vos critères de recherche.</p>
    </div>
{% else %}
    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        {% for a in annonces %}
        <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\"
           class=\"bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col\">

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

                {# Specs clés #}
                <div class=\"flex flex-wrap gap-x-2 gap-y-1 text-xs text-tertiary mb-2\">
                    <span>{{ a.annee_circulation }}</span>
                    <span>·</span>
                    <span>{{ a.kilometrage|number_format(0, ',', ' ') }} km</span>
                    {% if a.boite_vitesse %}
                        <span>·</span>
                        <span>{{ a.boite_vitesse }}</span>
                    {% endif %}
                    {% if a.transmission %}
                        <span>·</span>
                        <span>{{ a.transmission }}</span>
                    {% endif %}
                </div>

                {# Badges #}
                <div class=\"flex flex-wrap gap-1 mt-auto\">
                    {% if a.etat %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ a.etat }}</span>
                    {% endif %}
                    {% if a.nombre_places %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ a.nombre_places }} places</span>
                    {% endif %}
                    {% if a.premiere_main %}
                        <span class=\"text-[10px] bg-green-50 text-green-700 px-2 py-0.5 rounded-full font-semibold\">1ère main</span>
                    {% endif %}
                    {% if a.couleur %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ a.couleur }}</span>
                    {% endif %}
                </div>

                {% if a.localisation %}
                    <p class=\"text-xs text-tertiary mt-2 truncate\">📍 {{ a.localisation }}</p>
                {% endif %}
            </div>
        </a>
        {% endfor %}
    </div>
{% endif %}
", "annonce/_liste.html.twig", "C:\\projets\\Projet_WE4A\\templates\\annonce\\_liste.html.twig");
    }
}
