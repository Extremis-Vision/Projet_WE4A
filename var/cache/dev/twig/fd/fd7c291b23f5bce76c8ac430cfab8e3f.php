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

/* user/profil.html.twig */
class __TwigTemplate_3669b31a410880a582d86e92e49cbf09 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

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

        yield "Profil de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "prenom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " — AutoMarket";
        
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
        yield "<div class=\"max-w-6xl mx-auto px-6 py-10\">

    ";
        // line 9
        yield "    <div class=\"bg-white rounded-2xl p-8 shadow-sm mb-10 border border-gray-100 flex flex-col md:flex-row gap-8 items-center\">
        <div class=\"w-32 h-32 bg-secondary/10 rounded-full flex items-center justify-center text-secondary text-5xl font-bold shrink-0\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "prenom", [], "any", false, false, false, 11), 0, 1), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), 0, 1), "html", null, true);
        yield "
        </div>
        <div class=\"flex-1 text-center md:text-left\">
            <h1 class=\"text-3xl font-bold text-primary mb-2\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
            <div class=\"flex flex-wrap justify-center md:justify-start items-center gap-4 text-sm text-tertiary\">
                <div class=\"flex items-center gap-1.5\">
                    <span class=\"text-amber-500 flex items-center\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            yield "                            <svg class=\"w-4 h-4 ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "rating", [], "any", false, false, false, 19) >= $context["i"])) {
                yield "fill-current";
            } else {
                yield "fill-gray-200";
            }
            yield "\" viewBox=\"0 0 20 20\"><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/></svg>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "                    </span>
                    <span class=\"font-bold text-primary\">";
        // line 22
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "rating", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "rating", [], "any", false, false, false, 22), 1), "html", null, true)) : ("N/A"));
        yield " / 5</span>
                </div>
                <span>•</span>
                <span>Membre depuis ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "date_inscription", [], "any", false, false, false, 25), "M Y"), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div class=\"shrink-0\">
            ";
        // line 30
        yield "            <button class=\"px-6 py-3 bg-primary text-white font-bold rounded-xl hover:bg-opacity-90 transition-all shadow-lg shadow-primary/20 opacity-50 cursor-not-allowed\">
                Contacter le vendeur
            </button>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-10\">
        
        ";
        // line 39
        yield "        <div class=\"lg:col-span-2\">
            <h2 class=\"text-xl font-bold text-primary mb-6 flex items-center gap-3\">
                Annonces actives
                <span class=\"bg-gray-100 text-tertiary text-xs px-2.5 py-1 rounded-full font-semibold\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 42, $this->source); })())), "html", null, true);
        yield "</span>
            </h2>

            <div id=\"liste-annonces\">
                ";
        // line 46
        yield from $this->load("annonce/_liste.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["annonces" => (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 46, $this->source); })())]));
        // line 47
        yield "            </div>
        </div>

        ";
        // line 51
        yield "        <div class=\"lg:col-span-1\">
            <h2 class=\"text-xl font-bold text-primary mb-6 flex items-center gap-3\">
                Derniers avis
                <span class=\"bg-gray-100 text-tertiary text-xs px-2.5 py-1 rounded-full font-semibold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 54, $this->source); })())), "html", null, true);
        yield "</span>
            </h2>

            ";
        // line 57
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 57, $this->source); })()))) {
            // line 58
            yield "                <div class=\"bg-white rounded-2xl p-8 border border-dashed border-gray-200 text-center text-tertiary\">
                    <p>Aucun avis pour le moment.</p>
                </div>
            ";
        } else {
            // line 62
            yield "                <div class=\"space-y-4\">
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 64
                yield "                        <div class=\"bg-white rounded-2xl p-5 shadow-sm border border-gray-50\">
                            <div class=\"flex justify-between items-start mb-3\">
                                <div>
                                    <p class=\"font-bold text-primary text-sm\">";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "prenom", [], "any", false, false, false, 67), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom", [], "any", false, false, false, 67), "html", null, true);
                yield "</p>
                                    <p class=\"text-[10px] text-tertiary\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date_avis", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
                yield "</p>
                                </div>
                                <div class=\"text-amber-500 flex items-center\">
                                    ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 72
                    yield "                                        <svg class=\"w-3 h-3 ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "note", [], "any", false, false, false, 72) >= $context["i"])) {
                        yield "fill-current";
                    } else {
                        yield "fill-gray-200";
                    }
                    yield "\" viewBox=\"0 0 20 20\"><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/></svg>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                yield "                                </div>
                            </div>
                            <p class=\"text-sm text-tertiary italic leading-relaxed\">\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "contenu", [], "any", false, false, false, 76), "html", null, true);
                yield "\"</p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                </div>
            ";
        }
        // line 81
        yield "        </div>
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
        return "user/profil.html.twig";
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
        return array (  252 => 81,  248 => 79,  239 => 76,  235 => 74,  222 => 72,  218 => 71,  212 => 68,  206 => 67,  201 => 64,  197 => 63,  194 => 62,  188 => 58,  186 => 57,  180 => 54,  175 => 51,  170 => 47,  168 => 46,  161 => 42,  156 => 39,  146 => 30,  139 => 25,  133 => 22,  130 => 21,  117 => 19,  113 => 18,  104 => 14,  97 => 11,  93 => 9,  89 => 6,  79 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Profil de {{ user.prenom }} {{ user.nom }} — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-10\">

    {# Header Profil #}
    <div class=\"bg-white rounded-2xl p-8 shadow-sm mb-10 border border-gray-100 flex flex-col md:flex-row gap-8 items-center\">
        <div class=\"w-32 h-32 bg-secondary/10 rounded-full flex items-center justify-center text-secondary text-5xl font-bold shrink-0\">
            {{ user.prenom|slice(0,1) }}{{ user.nom|slice(0,1) }}
        </div>
        <div class=\"flex-1 text-center md:text-left\">
            <h1 class=\"text-3xl font-bold text-primary mb-2\">{{ user.prenom }} {{ user.nom }}</h1>
            <div class=\"flex flex-wrap justify-center md:justify-start items-center gap-4 text-sm text-tertiary\">
                <div class=\"flex items-center gap-1.5\">
                    <span class=\"text-amber-500 flex items-center\">
                        {% for i in 1..5 %}
                            <svg class=\"w-4 h-4 {% if user.rating >= i %}fill-current{% else %}fill-gray-200{% endif %}\" viewBox=\"0 0 20 20\"><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/></svg>
                        {% endfor %}
                    </span>
                    <span class=\"font-bold text-primary\">{{ user.rating ? user.rating|number_format(1) : 'N/A' }} / 5</span>
                </div>
                <span>•</span>
                <span>Membre depuis {{ user.date_inscription|date('M Y') }}</span>
            </div>
        </div>
        <div class=\"shrink-0\">
            {# Le bouton de contact pourrait pointer vers un système de messagerie interne plus tard #}
            <button class=\"px-6 py-3 bg-primary text-white font-bold rounded-xl hover:bg-opacity-90 transition-all shadow-lg shadow-primary/20 opacity-50 cursor-not-allowed\">
                Contacter le vendeur
            </button>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-10\">
        
        {# Annonces du vendeur #}
        <div class=\"lg:col-span-2\">
            <h2 class=\"text-xl font-bold text-primary mb-6 flex items-center gap-3\">
                Annonces actives
                <span class=\"bg-gray-100 text-tertiary text-xs px-2.5 py-1 rounded-full font-semibold\">{{ annonces|length }}</span>
            </h2>

            <div id=\"liste-annonces\">
                {% include 'annonce/_liste.html.twig' with {'annonces': annonces} %}
            </div>
        </div>

        {# Avis #}
        <div class=\"lg:col-span-1\">
            <h2 class=\"text-xl font-bold text-primary mb-6 flex items-center gap-3\">
                Derniers avis
                <span class=\"bg-gray-100 text-tertiary text-xs px-2.5 py-1 rounded-full font-semibold\">{{ reviews|length }}</span>
            </h2>

            {% if reviews is empty %}
                <div class=\"bg-white rounded-2xl p-8 border border-dashed border-gray-200 text-center text-tertiary\">
                    <p>Aucun avis pour le moment.</p>
                </div>
            {% else %}
                <div class=\"space-y-4\">
                    {% for r in reviews %}
                        <div class=\"bg-white rounded-2xl p-5 shadow-sm border border-gray-50\">
                            <div class=\"flex justify-between items-start mb-3\">
                                <div>
                                    <p class=\"font-bold text-primary text-sm\">{{ r.prenom }} {{ r.nom }}</p>
                                    <p class=\"text-[10px] text-tertiary\">{{ r.date_avis|date('d/m/Y') }}</p>
                                </div>
                                <div class=\"text-amber-500 flex items-center\">
                                    {% for i in 1..5 %}
                                        <svg class=\"w-3 h-3 {% if r.note >= i %}fill-current{% else %}fill-gray-200{% endif %}\" viewBox=\"0 0 20 20\"><path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/></svg>
                                    {% endfor %}
                                </div>
                            </div>
                            <p class=\"text-sm text-tertiary italic leading-relaxed\">\"{{ r.contenu }}\"</p>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "user/profil.html.twig", "C:\\Users\\jean-\\PhpstormProjects\\WE4A_projet\\templates\\user\\profil.html.twig");
    }
}
