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

/* admin/catalogue_modeles.html.twig */
class __TwigTemplate_f655c0783fb2f2c13138093bfa26c32b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue_modeles.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
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
        <span class=\"text-primary font-medium\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
    </div>

    <div class=\"flex items-center justify-between mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield " — Modèles</h1>
        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\" class=\"text-sm text-tertiary hover:text-primary\">← Catalogue</a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 30, $this->source); })())), "html", null, true);
        yield " modèle";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 30, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</h2>
            </div>
            <ul class=\"divide-y divide-gray-50\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 34
            yield "                <li class=\"flex items-center justify-between px-5 py-3 hover:bg-gray-50\">
                    <div>
                        <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_generations", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_modele", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\"
                           class=\"font-medium text-primary hover:text-secondary transition-colors text-sm\">
                            ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "
                        </a>
                        <span class=\"ml-2 text-xs text-tertiary\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_generations", [], "any", false, false, false, 40), "html", null, true);
            yield " génération";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_generations", [], "any", false, false, false, 40) != 1)) ? ("s") : (""));
            yield "</span>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_generations", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_modele", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\"
                           class=\"text-xs text-secondary hover:underline\">Voir →</a>
                        ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_generations", [], "any", false, false, false, 45) == 0)) {
                // line 46
                yield "                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_modele", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_modele", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 47), "html", null, true);
                yield " ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                        </form>
                        ";
            }
            // line 51
            yield "                    </div>
                </li>
                ";
            $context['_iterated'] = true;
        }
        // line 53
        if (!$context['_iterated']) {
            // line 54
            yield "                <li class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucun modèle.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "            </ul>
        </div>

        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter un modèle</h2>
            <form action=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_modele", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new RuntimeError('Variable "marque" does not exist.', 61, $this->source); })()), "id_marque", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\" method=\"post\" class=\"flex gap-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom du modèle\"
                       class=\"flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <button type=\"submit\"
                        class=\"px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
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
        return "admin/catalogue_modeles.html.twig";
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
        return array (  223 => 61,  216 => 56,  209 => 54,  207 => 53,  201 => 51,  194 => 47,  189 => 46,  187 => 45,  182 => 43,  174 => 40,  169 => 38,  164 => 36,  160 => 34,  155 => 33,  147 => 30,  137 => 23,  133 => 22,  126 => 18,  121 => 16,  117 => 14,  108 => 12,  103 => 11,  94 => 9,  90 => 8,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}{{ marque.nom }} — Catalogue Admin{% endblock %}

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
        <span class=\"text-primary font-medium\">{{ marque.nom }}</span>
    </div>

    <div class=\"flex items-center justify-between mb-8\">
        <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">{{ marque.nom }} — Modèles</h1>
        <a href=\"{{ path('admin_catalogue') }}\" class=\"text-sm text-tertiary hover:text-primary\">← Catalogue</a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

        <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
            <div class=\"px-5 py-3 border-b border-gray-100\">
                <h2 class=\"font-semibold text-primary text-sm\">{{ modeles|length }} modèle{{ modeles|length != 1 ? 's' : '' }}</h2>
            </div>
            <ul class=\"divide-y divide-gray-50\">
                {% for m in modeles %}
                <li class=\"flex items-center justify-between px-5 py-3 hover:bg-gray-50\">
                    <div>
                        <a href=\"{{ path('admin_catalogue_generations', {id: m.id_modele}) }}\"
                           class=\"font-medium text-primary hover:text-secondary transition-colors text-sm\">
                            {{ m.nom }}
                        </a>
                        <span class=\"ml-2 text-xs text-tertiary\">{{ m.nb_generations }} génération{{ m.nb_generations != 1 ? 's' : '' }}</span>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <a href=\"{{ path('admin_catalogue_generations', {id: m.id_modele}) }}\"
                           class=\"text-xs text-secondary hover:underline\">Voir →</a>
                        {% if m.nb_generations == 0 %}
                        <form action=\"{{ path('admin_supprimer_modele', {id: m.id_modele}) }}\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer {{ m.nom }} ?')\">
                            <button class=\"text-xs text-red-400 hover:text-red-600 transition-colors\">✕</button>
                        </form>
                        {% endif %}
                    </div>
                </li>
                {% else %}
                <li class=\"px-5 py-6 text-center text-tertiary text-sm\">Aucun modèle.</li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"bg-white rounded-xl shadow-sm p-5 self-start\">
            <h2 class=\"font-semibold text-primary text-sm mb-4\">Ajouter un modèle</h2>
            <form action=\"{{ path('admin_ajouter_modele', {id: marque.id_marque}) }}\" method=\"post\" class=\"flex gap-3\">
                <input type=\"text\" name=\"nom\" required placeholder=\"Nom du modèle\"
                       class=\"flex-1 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-secondary\">
                <button type=\"submit\"
                        class=\"px-4 py-2 bg-secondary text-white text-sm font-semibold rounded-lg hover:bg-opacity-90 transition-all\">
                    Ajouter
                </button>
            </form>
        </div>

    </div>
</div>
{% endblock %}
", "admin/catalogue_modeles.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\catalogue_modeles.html.twig");
    }
}
