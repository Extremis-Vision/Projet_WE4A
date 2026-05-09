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
                yield "        <div class=\"relative group\">
            <a href=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 10)]), "html", null, true);
                yield "\"
               class=\"block bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col\">

                <div class=\"aspect-[4/3] bg-gray-100 overflow-hidden shrink-0\">
                    ";
                // line 14
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 15
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 15), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 15), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 15), "html", null, true);
                    yield "\"
                             class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-300\">
                    ";
                } else {
                    // line 18
                    yield "                        <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                            <svg class=\"w-16 h-16\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                            </svg>
                        </div>
                    ";
                }
                // line 24
                yield "                </div>

                <div class=\"p-4 flex flex-col flex-1\">
                    <div class=\"flex items-start justify-between gap-2 mb-0.5\">
                        <h2 class=\"font-bold text-primary text-sm leading-tight\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 28), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 28), "html", null, true);
                yield "</h2>
                        ";
                // line 29
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type_nom", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 30
                    yield "                            <span class=\"shrink-0 text-[9px] bg-primary/10 text-primary px-1.5 py-0.5 rounded-full font-semibold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type_nom", [], "any", false, false, false, 30), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 32
                yield "                    </div>
                    <p class=\"text-xs text-tertiary mb-3 truncate\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "version_nom", [], "any", false, false, false, 33), "html", null, true);
                yield "</p>

                    <p class=\"text-xl font-bold text-secondary mb-3\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 35), 0, ",", " "), "html", null, true);
                yield " €</p>

                    <div class=\"flex flex-wrap gap-x-2 gap-y-1 text-xs text-tertiary mb-2\">
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
                    yield "<span>·</span><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "boite_vitesse", [], "any", false, false, false, 41), "html", null, true);
                    yield "</span>";
                }
                // line 42
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "transmission", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>·</span><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "transmission", [], "any", false, false, false, 42), "html", null, true);
                    yield "</span>";
                }
                // line 43
                yield "                    </div>

                    <div class=\"flex flex-wrap gap-1 mt-auto\">
                        ";
                // line 46
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 46), "html", null, true);
                    yield "</span>";
                }
                // line 47
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nombre_places", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nombre_places", [], "any", false, false, false, 47), "html", null, true);
                    yield " places</span>";
                }
                // line 48
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "premiere_main", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"text-[10px] bg-green-50 text-green-700 px-2 py-0.5 rounded-full font-semibold\">1ère main</span>";
                }
                // line 49
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "couleur", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "couleur", [], "any", false, false, false, 49), "html", null, true);
                    yield "</span>";
                }
                // line 50
                yield "                    </div>

                    ";
                // line 52
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "                        <p class=\"text-xs text-tertiary mt-2 truncate\">📍 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 53), "html", null, true);
                    yield "</p>
                    ";
                }
                // line 55
                yield "                </div>
            </a>

            ";
                // line 59
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                ";
                    $context["is_favori"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 60), (((array_key_exists("favoris_ids", $context) &&  !(null === $context["favoris_ids"]))) ? ($context["favoris_ids"]) : ([])));
                    // line 61
                    yield "                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 61)]), "html", null, true);
                    yield "\"
                      class=\"absolute top-2 right-2\" onsubmit=\"event.stopPropagation()\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("favori"), "html", null, true);
                    yield "\">
                    <button type=\"submit\"
                            title=\"";
                    // line 65
                    yield (((($tmp = (isset($context["is_favori"]) || array_key_exists("is_favori", $context) ? $context["is_favori"] : (function () { throw new RuntimeError('Variable "is_favori" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Retirer des favoris") : ("Ajouter aux favoris"));
                    yield "\"
                            class=\"w-9 h-9 rounded-full bg-white/90 shadow-md flex items-center justify-center hover:scale-110 transition-transform\">
                        ";
                    // line 67
                    if ((($tmp = (isset($context["is_favori"]) || array_key_exists("is_favori", $context) ? $context["is_favori"] : (function () { throw new RuntimeError('Variable "is_favori" does not exist.', 67, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 68
                        yield "                            <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                            </svg>
                        ";
                    } else {
                        // line 72
                        yield "                            <svg class=\"w-5 h-5 text-gray-400 hover:text-red-400 transition-colors\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                            </svg>
                        ";
                    }
                    // line 76
                    yield "                    </button>
                </form>
            ";
                }
                // line 79
                yield "        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
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
        return array (  243 => 81,  236 => 79,  231 => 76,  225 => 72,  219 => 68,  217 => 67,  212 => 65,  207 => 63,  201 => 61,  198 => 60,  195 => 59,  190 => 55,  184 => 53,  182 => 52,  178 => 50,  171 => 49,  166 => 48,  159 => 47,  153 => 46,  148 => 43,  141 => 42,  135 => 41,  131 => 40,  126 => 38,  120 => 35,  115 => 33,  112 => 32,  106 => 30,  104 => 29,  98 => 28,  92 => 24,  84 => 18,  73 => 15,  71 => 14,  64 => 10,  61 => 9,  57 => 8,  54 => 7,  47 => 2,  45 => 1,);
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
                        {% if a.transmission %}<span>·</span><span>{{ a.transmission }}</span>{% endif %}
                    </div>

                    <div class=\"flex flex-wrap gap-1 mt-auto\">
                        {% if a.etat %}<span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ a.etat }}</span>{% endif %}
                        {% if a.nombre_places %}<span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ a.nombre_places }} places</span>{% endif %}
                        {% if a.premiere_main %}<span class=\"text-[10px] bg-green-50 text-green-700 px-2 py-0.5 rounded-full font-semibold\">1ère main</span>{% endif %}
                        {% if a.couleur %}<span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ a.couleur }}</span>{% endif %}
                    </div>

                    {% if a.localisation %}
                        <p class=\"text-xs text-tertiary mt-2 truncate\">📍 {{ a.localisation }}</p>
                    {% endif %}
                </div>
            </a>

            {# Bouton cœur #}
            {% if app.user %}
                {% set is_favori = a.id_annonce in (favoris_ids ?? []) %}
                <form method=\"post\" action=\"{{ path('favori_toggle', {id: a.id_annonce}) }}\"
                      class=\"absolute top-2 right-2\" onsubmit=\"event.stopPropagation()\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('favori') }}\">
                    <button type=\"submit\"
                            title=\"{{ is_favori ? 'Retirer des favoris' : 'Ajouter aux favoris' }}\"
                            class=\"w-9 h-9 rounded-full bg-white/90 shadow-md flex items-center justify-center hover:scale-110 transition-transform\">
                        {% if is_favori %}
                            <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                            </svg>
                        {% else %}
                            <svg class=\"w-5 h-5 text-gray-400 hover:text-red-400 transition-colors\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                            </svg>
                        {% endif %}
                    </button>
                </form>
            {% endif %}
        </div>
        {% endfor %}
    </div>
{% endif %}
", "annonce/_liste.html.twig", "C:\\Users\\jean-\\PhpstormProjects\\WE4A_projet\\templates\\annonce\\_liste.html.twig");
    }
}
