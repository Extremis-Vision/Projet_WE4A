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

/* admin/catalogue.html.twig */
class __TwigTemplate_0cad5db160482e0fa0142a544d864f7a extends Template
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
            'pageHeading' => [$this, 'block_pageHeading'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Catalogue";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageHeading(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeading"));

        yield "Catalogue — Marques";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        yield " <span class=\"text-gray-300\">/</span> <span class=\"text-gray-600\">Catalogue</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "
<div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

    ";
        // line 12
        yield "    <div class=\"lg:col-span-1\">
        <div class=\"bg-white rounded-xl shadow-sm border border-gray-100 p-6 sticky top-6\">
            <h2 class=\"font-bold text-primary mb-4\">Ajouter une marque</h2>
            <form action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_marque");
        yield "\" method=\"post\" class=\"space-y-4\">
                <div>
                    <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Nom de la marque</label>
                    <input type=\"text\" name=\"nom\" required
                           placeholder=\"Ex: Toyota, Peugeot…\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
                </div>
                <button type=\"submit\"
                        class=\"w-full py-2.5 bg-primary text-white text-sm font-bold rounded-lg hover:bg-opacity-90 active:scale-[0.98] transition-all\">
                    Ajouter la marque
                </button>
            </form>
        </div>
    </div>

    ";
        // line 31
        yield "    <div class=\"lg:col-span-2\">
        <div class=\"bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden\">
            <div class=\"px-6 py-4 border-b border-gray-100\">
                <p class=\"text-sm text-gray-500\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 34, $this->source); })())), "html", null, true);
        yield " marque";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 34, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</p>
            </div>

            ";
        // line 37
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 37, $this->source); })()))) {
            // line 38
            yield "                <div class=\"text-center py-16 text-gray-400\">Aucune marque enregistrée.</div>
            ";
        } else {
            // line 40
            yield "                <ul class=\"divide-y divide-gray-50\">
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 42
                yield "                    <li class=\"flex items-center justify-between px-6 py-4 hover:bg-gray-50/50 transition-colors\">
                        <div>
                            <p class=\"font-semibold text-primary\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 44), "html", null, true);
                yield "</p>
                            <p class=\"text-xs text-gray-400 mt-0.5\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_modeles", [], "any", false, false, false, 45), "html", null, true);
                yield " modèle";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nb_modeles", [], "any", false, false, false, 45) != 1)) ? ("s") : (""));
                yield "</p>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <a href=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue_modeles", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\"
                               class=\"px-3 py-1.5 border border-primary/20 text-primary text-xs font-semibold rounded-lg hover:bg-primary hover:text-white transition-all\">
                                Modèles →
                            </a>
                            <form action=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_marque", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" method=\"post\"
                                  onsubmit=\"return confirm('Supprimer la marque ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 53), "html", null, true);
                yield " ?')\">
                                <button type=\"submit\"
                                        class=\"px-3 py-1.5 border border-red-200 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                </ul>
            ";
        }
        // line 64
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
        return "admin/catalogue.html.twig";
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
        return array (  221 => 64,  217 => 62,  202 => 53,  198 => 52,  191 => 48,  183 => 45,  179 => 44,  175 => 42,  171 => 41,  168 => 40,  164 => 38,  162 => 37,  154 => 34,  149 => 31,  131 => 15,  126 => 12,  121 => 8,  111 => 7,  94 => 5,  77 => 4,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Catalogue{% endblock %}
{% block pageHeading %}Catalogue — Marques{% endblock %}
{% block breadcrumb %} <span class=\"text-gray-300\">/</span> <span class=\"text-gray-600\">Catalogue</span>{% endblock %}

{% block content %}

<div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

    {# ── Formulaire d'ajout ─────────────────────────────────────────────── #}
    <div class=\"lg:col-span-1\">
        <div class=\"bg-white rounded-xl shadow-sm border border-gray-100 p-6 sticky top-6\">
            <h2 class=\"font-bold text-primary mb-4\">Ajouter une marque</h2>
            <form action=\"{{ path('admin_ajouter_marque') }}\" method=\"post\" class=\"space-y-4\">
                <div>
                    <label class=\"block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider\">Nom de la marque</label>
                    <input type=\"text\" name=\"nom\" required
                           placeholder=\"Ex: Toyota, Peugeot…\"
                           class=\"w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20\">
                </div>
                <button type=\"submit\"
                        class=\"w-full py-2.5 bg-primary text-white text-sm font-bold rounded-lg hover:bg-opacity-90 active:scale-[0.98] transition-all\">
                    Ajouter la marque
                </button>
            </form>
        </div>
    </div>

    {# ── Liste des marques ───────────────────────────────────────────────── #}
    <div class=\"lg:col-span-2\">
        <div class=\"bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden\">
            <div class=\"px-6 py-4 border-b border-gray-100\">
                <p class=\"text-sm text-gray-500\">{{ marques|length }} marque{{ marques|length != 1 ? 's' : '' }}</p>
            </div>

            {% if marques is empty %}
                <div class=\"text-center py-16 text-gray-400\">Aucune marque enregistrée.</div>
            {% else %}
                <ul class=\"divide-y divide-gray-50\">
                    {% for m in marques %}
                    <li class=\"flex items-center justify-between px-6 py-4 hover:bg-gray-50/50 transition-colors\">
                        <div>
                            <p class=\"font-semibold text-primary\">{{ m.nom }}</p>
                            <p class=\"text-xs text-gray-400 mt-0.5\">{{ m.nb_modeles }} modèle{{ m.nb_modeles != 1 ? 's' : '' }}</p>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <a href=\"{{ path('admin_catalogue_modeles', {id: m.id_marque}) }}\"
                               class=\"px-3 py-1.5 border border-primary/20 text-primary text-xs font-semibold rounded-lg hover:bg-primary hover:text-white transition-all\">
                                Modèles →
                            </a>
                            <form action=\"{{ path('admin_supprimer_marque', {id: m.id_marque}) }}\" method=\"post\"
                                  onsubmit=\"return confirm('Supprimer la marque {{ m.nom }} ?')\">
                                <button type=\"submit\"
                                        class=\"px-3 py-1.5 border border-red-200 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    </div>

</div>

{% endblock %}
", "admin/catalogue.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\catalogue.html.twig");
    }
}
