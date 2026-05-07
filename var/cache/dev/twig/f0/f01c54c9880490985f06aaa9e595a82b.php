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

        yield "Utilisateurs — Admin";
        
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
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            yield "        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 18, $this->source); })())), "html", null, true);
        yield " compte";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 18, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</p>
        </div>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"text-sm text-tertiary hover:text-primary transition-colors\">← Tableau de bord</a>
    </div>

    <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
        ";
        // line 24
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 24, $this->source); })()))) {
            // line 25
            yield "            <div class=\"text-center py-24 text-gray-400\">Aucun utilisateur.</div>
        ";
        } else {
            // line 27
            yield "            <div class=\"overflow-x-auto\">
                <table class=\"w-full text-sm\">
                    <thead class=\"bg-gray-50 border-b border-gray-100\">
                        <tr>
                            <th class=\"text-left px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Utilisateur</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Rôle</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Email</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Téléphone</th>
                            <th class=\"text-center px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Annonces</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Inscrit le</th>
                            <th class=\"px-6 py-3\"></th>
                        </tr>
                    </thead>
                    <tbody class=\"divide-y divide-gray-50\">
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 42
                yield "                        <tr class=\"hover:bg-gray-50 transition-colors\">

                            <td class=\"px-6 py-4\">
                                <div class=\"flex items-center gap-3\">
                                    <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-xs font-bold text-primary flex-none\">
                                        ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 47))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 47))), "html", null, true);
                yield "
                                    </div>
                                    <div>
                                        <p class=\"font-semibold text-primary\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 50), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 50), "html", null, true);
                yield "</p>
                                        <p class=\"text-xs text-gray-400\">#";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_utilisateur", [], "any", false, false, false, 51), "html", null, true);
                yield "</p>
                                    </div>
                                </div>
                            </td>

                            <td class=\"px-4 py-4\">
                                ";
                // line 57
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 57) == "admin")) {
                    // line 58
                    yield "                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-blue-100 text-blue-700\">Admin</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 59
$context["u"], "role", [], "any", false, false, false, 59) == "vendeur")) {
                    // line 60
                    yield "                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-700\">Vendeur</span>
                                ";
                } else {
                    // line 62
                    yield "                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-600\">Acheteur</span>
                                ";
                }
                // line 64
                yield "                            </td>

                            <td class=\"px-4 py-4 text-gray-600\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 66), "html", null, true);
                yield "</td>

                            <td class=\"px-4 py-4 text-gray-500\">";
                // line 68
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "numero_phone", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["u"], "numero_phone", [], "any", false, false, false, 68)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "numero_phone", [], "any", false, false, false, 68), "html", null, true)) : ("—"));
                yield "</td>

                            <td class=\"px-4 py-4 text-center\">
                                ";
                // line 71
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nb_annonces", [], "any", false, false, false, 71) > 0)) {
                    // line 72
                    yield "                                    <span class=\"inline-flex items-center justify-center w-6 h-6 rounded-full bg-primary/10 text-primary text-xs font-bold\">
                                        ";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nb_annonces", [], "any", false, false, false, 73), "html", null, true);
                    yield "
                                    </span>
                                ";
                } else {
                    // line 76
                    yield "                                    <span class=\"text-gray-300\">0</span>
                                ";
                }
                // line 78
                yield "                            </td>

                            <td class=\"px-4 py-4 text-gray-500 text-xs\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "date_inscription", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
                yield "</td>

                            <td class=\"px-6 py-4\">
                                ";
                // line 83
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 83) != "admin") && (CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_utilisateur", [], "any", false, false, false, 83) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83)))) {
                    // line 84
                    yield "                                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_utilisateur", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_utilisateur", [], "any", false, false, false, 84)]), "html", null, true);
                    yield "\" method=\"post\"
                                      onsubmit=\"return confirm('Supprimer ";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 85), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 85), "html", null, true);
                    yield " et toutes ses annonces ?')\">
                                    <button type=\"submit\"
                                            class=\"px-3 py-1.5 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                        Supprimer
                                    </button>
                                </form>
                                ";
                } else {
                    // line 92
                    yield "                                    <span class=\"text-xs text-gray-300\">—</span>
                                ";
                }
                // line 94
                yield "                            </td>

                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 102
        yield "    </div>

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
        return array (  284 => 102,  278 => 98,  269 => 94,  265 => 92,  253 => 85,  248 => 84,  246 => 83,  240 => 80,  236 => 78,  232 => 76,  226 => 73,  223 => 72,  221 => 71,  215 => 68,  210 => 66,  206 => 64,  202 => 62,  198 => 60,  196 => 59,  193 => 58,  191 => 57,  182 => 51,  176 => 50,  169 => 47,  162 => 42,  158 => 41,  142 => 27,  138 => 25,  136 => 24,  129 => 20,  122 => 18,  116 => 14,  107 => 12,  102 => 11,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}Utilisateurs — Admin{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}

    <div class=\"flex items-center justify-between mb-8\">
        <div>
            <h1 class=\"text-3xl font-bold text-primary font-['ManRope']\">Utilisateurs</h1>
            <p class=\"text-tertiary mt-1\">{{ utilisateurs|length }} compte{{ utilisateurs|length != 1 ? 's' : '' }}</p>
        </div>
        <a href=\"{{ path('admin_dashboard') }}\" class=\"text-sm text-tertiary hover:text-primary transition-colors\">← Tableau de bord</a>
    </div>

    <div class=\"bg-white rounded-xl shadow-sm overflow-hidden\">
        {% if utilisateurs is empty %}
            <div class=\"text-center py-24 text-gray-400\">Aucun utilisateur.</div>
        {% else %}
            <div class=\"overflow-x-auto\">
                <table class=\"w-full text-sm\">
                    <thead class=\"bg-gray-50 border-b border-gray-100\">
                        <tr>
                            <th class=\"text-left px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Utilisateur</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Rôle</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Email</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Téléphone</th>
                            <th class=\"text-center px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Annonces</th>
                            <th class=\"text-left px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider\">Inscrit le</th>
                            <th class=\"px-6 py-3\"></th>
                        </tr>
                    </thead>
                    <tbody class=\"divide-y divide-gray-50\">
                        {% for u in utilisateurs %}
                        <tr class=\"hover:bg-gray-50 transition-colors\">

                            <td class=\"px-6 py-4\">
                                <div class=\"flex items-center gap-3\">
                                    <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-xs font-bold text-primary flex-none\">
                                        {{ u.prenom|first|upper }}{{ u.nom|first|upper }}
                                    </div>
                                    <div>
                                        <p class=\"font-semibold text-primary\">{{ u.prenom }} {{ u.nom }}</p>
                                        <p class=\"text-xs text-gray-400\">#{{ u.id_utilisateur }}</p>
                                    </div>
                                </div>
                            </td>

                            <td class=\"px-4 py-4\">
                                {% if u.role == 'admin' %}
                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-blue-100 text-blue-700\">Admin</span>
                                {% elseif u.role == 'vendeur' %}
                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-700\">Vendeur</span>
                                {% else %}
                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-600\">Acheteur</span>
                                {% endif %}
                            </td>

                            <td class=\"px-4 py-4 text-gray-600\">{{ u.email }}</td>

                            <td class=\"px-4 py-4 text-gray-500\">{{ u.numero_phone ?? '—' }}</td>

                            <td class=\"px-4 py-4 text-center\">
                                {% if u.nb_annonces > 0 %}
                                    <span class=\"inline-flex items-center justify-center w-6 h-6 rounded-full bg-primary/10 text-primary text-xs font-bold\">
                                        {{ u.nb_annonces }}
                                    </span>
                                {% else %}
                                    <span class=\"text-gray-300\">0</span>
                                {% endif %}
                            </td>

                            <td class=\"px-4 py-4 text-gray-500 text-xs\">{{ u.date_inscription|date('d/m/Y') }}</td>

                            <td class=\"px-6 py-4\">
                                {% if u.role != 'admin' and u.id_utilisateur != app.user.id %}
                                <form action=\"{{ path('admin_supprimer_utilisateur', {id: u.id_utilisateur}) }}\" method=\"post\"
                                      onsubmit=\"return confirm('Supprimer {{ u.prenom }} {{ u.nom }} et toutes ses annonces ?')\">
                                    <button type=\"submit\"
                                            class=\"px-3 py-1.5 border border-red-300 text-red-500 text-xs font-semibold rounded-lg hover:bg-red-50 transition-all\">
                                        Supprimer
                                    </button>
                                </form>
                                {% else %}
                                    <span class=\"text-xs text-gray-300\">—</span>
                                {% endif %}
                            </td>

                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
    </div>

</div>
{% endblock %}
", "admin/utilisateurs.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\utilisateurs.html.twig");
    }
}
