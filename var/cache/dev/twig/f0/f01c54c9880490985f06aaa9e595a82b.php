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

/* admin/utilisateurs.html.twig */
class __TwigTemplate_b586030c0f0be795a006243e584f65be extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateurs.html.twig"));

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

        yield "Utilisateurs — AutoMarket Admin";
        
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
    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Utilisateurs</h1>
            <p class=\"text-tertiary mt-1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 18, $this->source); })())), "html", null, true);
        yield " compte";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 18, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</p>
        </div>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\" class=\"text-sm text-tertiary hover:text-primary\">← Site</a>
    </div>

    <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
        <table class=\"w-full text-sm\">
            <thead class=\"bg-gray-50 border-b border-gray-100\">
                <tr>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Utilisateur</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Email</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Rôle</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Annonces</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Inscrit le</th>
                    <th class=\"px-5 py-3\"></th>
                </tr>
            </thead>
            <tbody class=\"divide-y divide-gray-50\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 37
            yield "                <tr class=\"hover:bg-gray-50 transition-colors\">
                    <td class=\"px-5 py-3 font-medium text-primary\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 38), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                    <td class=\"px-5 py-3 text-tertiary\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                    <td class=\"px-5 py-3\">
                        ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 41) == "admin")) {
                // line 42
                yield "                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-purple-100 text-purple-700\">Admin</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 43
$context["u"], "role", [], "any", false, false, false, 43) == "vendeur")) {
                // line 44
                yield "                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-blue-100 text-blue-700\">Vendeur</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["u"], "role", [], "any", false, false, false, 45) == "entreprise")) {
                // line 46
                yield "                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-amber-100 text-amber-700\">Entreprise</span>
                        ";
            } else {
                // line 48
                yield "                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-gray-100 text-gray-600\">Particulier</span>
                        ";
            }
            // line 50
            yield "                    </td>
                    <td class=\"px-5 py-3 text-tertiary\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nb_annonces", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                    <td class=\"px-5 py-3 text-tertiary\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "date_inscription", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td class=\"px-5 py-3 text-right\">
                        ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 54) != "admin")) {
                // line 55
                yield "                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_utilisateur", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_utilisateur", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 56) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 56)), "js"), "html", null, true);
                yield " et toutes ses annonces ?')\">
                            <button type=\"submit\"
                                    class=\"px-3 py-1 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                Supprimer
                            </button>
                        </form>
                        ";
            }
            // line 63
            yield "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "            </tbody>
        </table>
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
        return "admin/utilisateurs.html.twig";
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
        return array (  223 => 66,  215 => 63,  205 => 56,  200 => 55,  198 => 54,  193 => 52,  189 => 51,  186 => 50,  182 => 48,  178 => 46,  176 => 45,  173 => 44,  171 => 43,  168 => 42,  166 => 41,  161 => 39,  155 => 38,  152 => 37,  148 => 36,  129 => 20,  122 => 18,  116 => 14,  107 => 12,  102 => 11,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Utilisateurs — AutoMarket Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Utilisateurs</h1>
            <p class=\"text-tertiary mt-1\">{{ users|length }} compte{{ users|length != 1 ? 's' : '' }}</p>
        </div>
        <a href=\"{{ path('annonces') }}\" class=\"text-sm text-tertiary hover:text-primary\">← Site</a>
    </div>

    <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
        <table class=\"w-full text-sm\">
            <thead class=\"bg-gray-50 border-b border-gray-100\">
                <tr>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Utilisateur</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Email</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Rôle</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Annonces</th>
                    <th class=\"px-5 py-3 text-left text-xs font-semibold text-tertiary uppercase tracking-wide\">Inscrit le</th>
                    <th class=\"px-5 py-3\"></th>
                </tr>
            </thead>
            <tbody class=\"divide-y divide-gray-50\">
                {% for u in users %}
                <tr class=\"hover:bg-gray-50 transition-colors\">
                    <td class=\"px-5 py-3 font-medium text-primary\">{{ u.prenom }} {{ u.nom }}</td>
                    <td class=\"px-5 py-3 text-tertiary\">{{ u.email }}</td>
                    <td class=\"px-5 py-3\">
                        {% if u.role == 'admin' %}
                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-purple-100 text-purple-700\">Admin</span>
                        {% elseif u.role == 'vendeur' %}
                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-blue-100 text-blue-700\">Vendeur</span>
                        {% elseif u.role == 'entreprise' %}
                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-amber-100 text-amber-700\">Entreprise</span>
                        {% else %}
                            <span class=\"px-2 py-0.5 rounded-full text-[10px] font-semibold bg-gray-100 text-gray-600\">Particulier</span>
                        {% endif %}
                    </td>
                    <td class=\"px-5 py-3 text-tertiary\">{{ u.nb_annonces }}</td>
                    <td class=\"px-5 py-3 text-tertiary\">{{ u.date_inscription|date('d/m/Y') }}</td>
                    <td class=\"px-5 py-3 text-right\">
                        {% if u.role != 'admin' %}
                        <form action=\"{{ path('admin_supprimer_utilisateur', {id: u.id_utilisateur}) }}\" method=\"post\"
                              onsubmit=\"return confirm('Supprimer {{ (u.prenom ~ ' ' ~ u.nom)|e('js') }} et toutes ses annonces ?')\">
                            <button type=\"submit\"
                                    class=\"px-3 py-1 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                Supprimer
                            </button>
                        </form>
                        {% endif %}
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

</div>
{% endblock %}
", "admin/utilisateurs.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\utilisateurs.html.twig");
    }
}
