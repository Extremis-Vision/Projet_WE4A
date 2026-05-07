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

/* admin/catalogue_generations.html.twig */
class __TwigTemplate_bdca82e3bcc4f4c09dece6ec34ba6228 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue_generations.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " — Catalogue Admin";
        
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
            yield "        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">";
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
            yield "        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    <div class=\"flex items-center gap-2 text-xs text-tertiary mb-6\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\" class=\"hover:text-primary\">Catalogue</a>
        <span>›</span>
        <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_modeles", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 18, $this->source); })()), "id_marque", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"hover:text-primary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 18, $this->source); })()), "marque_nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
        <span>›</span>
        <span class=\"text-primary font-medium\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
    </div>

    <div class=\"flex items-center justify-between mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        yield " — Générations</h1>
        <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_modeles", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 25, $this->source); })()), "id_marque", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"text-sm text-tertiary hover:text-primary\">← ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 25, $this->source); })()), "marque_nom", [], "any", false, false, false, 25), "html", null, true);
        yield "</a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["generations"]) || array_key_exists("generations", $context) ? $context["generations"] : (function () { throw new RuntimeError('Variable "generations" does not exist.', 32, $this->source); })())), "html", null, true);
        yield " génération";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["generations"]) || array_key_exists("generations", $context) ? $context["generations"] : (function () { throw new RuntimeError('Variable "generations" does not exist.', 32, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</h2>
            </div>
            <ul class=\"divide-y divide-gray-50\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["generations"]) || array_key_exists("generations", $context) ? $context["generations"] : (function () { throw new RuntimeError('Variable "generations" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 36
            yield "                <li class=\"flex items-center justify-between px-5 py-3 hover:bg-gray-50\">
                    <div>
                        <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_versions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id_generation", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\"
                           class=\"font-medium text-primary hover:text-secondary transition-colors text-sm\">
                            ";
            // line 40
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nom", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 40)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 40), "html", null, true)) : ("Sans nom"));
            yield "
                        </a>
                        ";
            // line 42
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "date_sortie", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                        <span class=\"ml-2 text-xs text-tertiary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "date_sortie", [], "any", false, false, false, 43), "Y"), "html", null, true);
                yield "</span>
                        ";
            }
            // line 45
            yield "                        <span class=\"ml-2 text-xs text-tertiary\">· ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nb_versions", [], "any", false, false, false, 45), "html", null, true);
            yield " version";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nb_versions", [], "any", false, false, false, 45) != 1)) ? ("s") : (""));
            yield "</span>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_versions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id_generation", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\"
                           class=\"text-xs text-secondary hover:underline\">Voir →</a>
                        ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nb_versions", [], "any", false, false, false, 50) == 0)) {
                // line 51
                yield "                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_generation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id_generation", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer cette génération ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                        </form>
                        ";
            }
            // line 56
            yield "                    </div>
                </li>
                ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "                <li class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune génération.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "            </ul>
        </div>

        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une génération</h2>
            <form action=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_generation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new RuntimeError('Variable "modele" does not exist.', 66, $this->source); })()), "id_modele", [], "any", false, false, false, 66)]), "html", null, true);
        yield "\" method=\"post\" class=\"space-y-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom (ex : Clio V Phase 2)\"
                       class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <div>
                    <label class=\"block text-xs text-tertiary mb-1\">Date de sortie (optionnel)</label>
                    <input type=\"date\" name=\"date_sortie\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                </div>
                <button type=\"submit\"
                        class=\"w-full px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                    Ajouter
                </button>
            </form>
        </div>

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
        return "admin/catalogue_generations.html.twig";
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
        return array (  238 => 66,  231 => 61,  224 => 59,  222 => 58,  216 => 56,  207 => 51,  205 => 50,  200 => 48,  191 => 45,  185 => 43,  183 => 42,  178 => 40,  173 => 38,  169 => 36,  164 => 35,  156 => 32,  144 => 25,  140 => 24,  133 => 20,  126 => 18,  121 => 16,  117 => 14,  108 => 12,  103 => 11,  94 => 9,  90 => 8,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}{{ modele.nom }} — Catalogue Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center gap-2 text-xs text-tertiary mb-6\">
        <a href=\"{{ path('admin_catalogue') }}\" class=\"hover:text-primary\">Catalogue</a>
        <span>›</span>
        <a href=\"{{ path('admin_catalogue_modeles', {id: modele.id_marque}) }}\" class=\"hover:text-primary\">{{ modele.marque_nom }}</a>
        <span>›</span>
        <span class=\"text-primary font-medium\">{{ modele.nom }}</span>
    </div>

    <div class=\"flex items-center justify-between mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">{{ modele.nom }} — Générations</h1>
        <a href=\"{{ path('admin_catalogue_modeles', {id: modele.id_marque}) }}\" class=\"text-sm text-tertiary hover:text-primary\">← {{ modele.marque_nom }}</a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">{{ generations|length }} génération{{ generations|length != 1 ? 's' : '' }}</h2>
            </div>
            <ul class=\"divide-y divide-gray-50\">
                {% for g in generations %}
                <li class=\"flex items-center justify-between px-5 py-3 hover:bg-gray-50\">
                    <div>
                        <a href=\"{{ path('admin_catalogue_versions', {id: g.id_generation}) }}\"
                           class=\"font-medium text-primary hover:text-secondary transition-colors text-sm\">
                            {{ g.nom ?? 'Sans nom' }}
                        </a>
                        {% if g.date_sortie %}
                        <span class=\"ml-2 text-xs text-tertiary\">{{ g.date_sortie|date('Y') }}</span>
                        {% endif %}
                        <span class=\"ml-2 text-xs text-tertiary\">· {{ g.nb_versions }} version{{ g.nb_versions != 1 ? 's' : '' }}</span>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <a href=\"{{ path('admin_catalogue_versions', {id: g.id_generation}) }}\"
                           class=\"text-xs text-secondary hover:underline\">Voir →</a>
                        {% if g.nb_versions == 0 %}
                        <form action=\"{{ path('admin_supprimer_generation', {id: g.id_generation}) }}\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer cette génération ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                        </form>
                        {% endif %}
                    </div>
                </li>
                {% else %}
                <li class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucune génération.</li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter une génération</h2>
            <form action=\"{{ path('admin_ajouter_generation', {id: modele.id_modele}) }}\" method=\"post\" class=\"space-y-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom (ex : Clio V Phase 2)\"
                       class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <div>
                    <label class=\"block text-xs text-tertiary mb-1\">Date de sortie (optionnel)</label>
                    <input type=\"date\" name=\"date_sortie\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                </div>
                <button type=\"submit\"
                        class=\"w-full px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                    Ajouter
                </button>
            </form>
        </div>

    </div>
</div>
{% endblock %}
", "admin/catalogue_generations.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\catalogue_generations.html.twig");
    }
}
