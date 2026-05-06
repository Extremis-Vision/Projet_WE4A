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

/* annonce/form.html.twig */
class __TwigTemplate_f08117f2f76e5cdec7035a3b7ef749e6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/form.html.twig"));

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

        yield (((($tmp = (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Publier"));
        yield " une annonce — AutoMarket";
        
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
        yield "<div class=\"max-w-3xl mx-auto px-6 py-8\">

    <h1 class=\"text-3xl font-bold text-primary font-['ManRope'] mb-2\">
        ";
        // line 9
        yield (((($tmp = (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier l'annonce") : ("Publier une annonce"));
        yield "
    </h1>
    <p class=\"text-tertiary mb-8\">Renseignez les informations de votre véhicule</p>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 14
            yield "        <div class=\"bg-amber-50 border border-amber-200 text-amber-800 px-4 py-3 rounded-lg mb-4 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["err"]) {
            // line 17
            yield "        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["err"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['err'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
    <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-6\">

        ";
        // line 23
        yield "        <div class=\"bg-white rounded-xl p-6 shadow-sm space-y-4\">
            <h2 class=\"font-bold text-primary font-['ManRope']\">Modèle du véhicule</h2>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Marque *</label>
                <select id=\"sel-marque\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                    <option value=\"\">Sélectionner une marque</option>
                </select>
            </div>
            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Modèle *</label>
                <select id=\"sel-modele\" disabled class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm disabled:opacity-50\">
                    <option value=\"\">Sélectionner un modèle</option>
                </select>
            </div>
            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Génération *</label>
                <select id=\"sel-generation\" disabled class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm disabled:opacity-50\">
                    <option value=\"\">Sélectionner une génération</option>
                </select>
            </div>
            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Version / Finition *</label>
                <select id=\"sel-version\" name=\"id_version\" disabled required
                        class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm disabled:opacity-50\">
                    <option value=\"\">Sélectionner une version</option>
                </select>
            </div>
        </div>

        ";
        // line 54
        yield "        <div class=\"bg-white rounded-xl p-6 shadow-sm space-y-4\">
            <h2 class=\"font-bold text-primary font-['ManRope']\">Informations</h2>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Prix (€) *</label>
                    <input type=\"number\" name=\"prix\" min=\"1\" step=\"1\" required
                           value=\"";
        // line 61
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "prix", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 61, $this->source); })()), "prix", [], "any", false, false, false, 61)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 61, $this->source); })()), "prix", [], "any", false, false, false, 61), "html", null, true)) : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Année de mise en circulation *</label>
                    <input type=\"number\" name=\"annee_circulation\" min=\"1950\" max=\"2025\" required
                           value=\"";
        // line 67
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "annee_circulation", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 67, $this->source); })()), "annee_circulation", [], "any", false, false, false, 67)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 67, $this->source); })()), "annee_circulation", [], "any", false, false, false, 67), "html", null, true)) : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Kilométrage *</label>
                    <input type=\"number\" name=\"kilometrage\" min=\"0\" required
                           value=\"";
        // line 76
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "kilometrage", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 76, $this->source); })()), "kilometrage", [], "any", false, false, false, 76)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 76, $this->source); })()), "kilometrage", [], "any", false, false, false, 76), "html", null, true)) : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">État</label>
                    <select name=\"etat\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                        <option value=\"\">Non précisé</option>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Excellent", "Très bon", "Bon", "Correct", "À rénover"]);
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 84
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["e"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 84, $this->source); })()), "etat", [], "any", false, false, false, 84) == $context["e"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["e"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                    </select>
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Couleur</label>
                    <input type=\"text\" name=\"couleur\" placeholder=\"Noir, Blanc, Rouge…\"
                           value=\"";
        // line 94
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "couleur", [], "any", true, true, false, 94) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 94, $this->source); })()), "couleur", [], "any", false, false, false, 94)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 94, $this->source); })()), "couleur", [], "any", false, false, false, 94), "html", null, true)) : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Localisation</label>
                    <input type=\"text\" name=\"localisation\" placeholder=\"Paris, 75001\"
                           value=\"";
        // line 100
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "localisation", [], "any", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 100, $this->source); })()), "localisation", [], "any", false, false, false, 100)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 100, $this->source); })()), "localisation", [], "any", false, false, false, 100), "html", null, true)) : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Nombre de propriétaires</label>
                    <input type=\"number\" name=\"nombre_proprietaire\" id=\"nombre_proprietaire\" min=\"1\" max=\"20\"
                           value=\"";
        // line 109
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "nombre_proprietaire", [], "any", true, true, false, 109) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 109, $this->source); })()), "nombre_proprietaire", [], "any", false, false, false, 109)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 109, $this->source); })()), "nombre_proprietaire", [], "any", false, false, false, 109), "html", null, true)) : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Contrôle technique</label>
                    <input type=\"date\" name=\"controle_technique\"
                           value=\"";
        // line 115
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "controle_technique", [], "any", true, true, false, 115) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 115, $this->source); })()), "controle_technique", [], "any", false, false, false, 115)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 115, $this->source); })()), "controle_technique", [], "any", false, false, false, 115), "html", null, true)) : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div class=\"flex items-center gap-3\">
                <input type=\"checkbox\" id=\"premiere_main\" name=\"premiere_main\" value=\"1\"
                       ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 122, $this->source); })()), "premiere_main", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        // line 123
        yield "                       class=\"w-4 h-4 accent-secondary rounded\"
                       onchange=\"
                           var nb = document.getElementById('nombre_proprietaire');
                           if (this.checked) { nb.value = 1; nb.disabled = true; }
                           else { nb.disabled = false; nb.value = ''; }
                       \">
                <label for=\"premiere_main\" class=\"text-sm font-medium text-tertiary cursor-pointer\">Première main</label>
            </div>
        </div>

        ";
        // line 134
        yield "        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <h2 class=\"font-bold text-primary font-['ManRope'] mb-3\">Description</h2>
            <textarea name=\"description\" rows=\"5\" placeholder=\"Décrivez l'état général, l'historique, les options…\"
                      class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm resize-none\">";
        // line 137
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "description", [], "any", true, true, false, 137) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "description", [], "any", false, false, false, 137)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "description", [], "any", false, false, false, 137), "html", null, true)) : (""));
        yield "</textarea>
        </div>

        ";
        // line 141
        yield "        <div class=\"bg-white rounded-xl p-6 shadow-sm space-y-3\">
            <h2 class=\"font-bold text-primary font-['ManRope']\">Photos du véhicule</h2>

            ";
        // line 144
        if ((array_key_exists("photos", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 144, $this->source); })())))) {
            // line 145
            yield "                <p class=\"text-sm font-medium text-tertiary\">Photos actuelles</p>
                <div class=\"grid grid-cols-4 gap-2\">
                    ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 147, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 148
                yield "                    <div class=\"relative aspect-square bg-gray-100 rounded-lg overflow-hidden\">
                        <img src=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "url_photo", [], "any", false, false, false, 149), "html", null, true);
                yield "\" class=\"w-full h-full object-cover\">
                        <label class=\"absolute top-1 right-1 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center cursor-pointer transition-colors\"
                               title=\"Supprimer cette photo\">
                            <input type=\"checkbox\" name=\"delete_photos[]\" value=\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "id_photo", [], "any", false, false, false, 152), "html", null, true);
                yield "\" class=\"hidden\" onchange=\"this.closest('.relative').style.opacity = this.checked ? '0.3' : '1'\">
                            <svg class=\"w-3 h-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"/>
                            </svg>
                        </label>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "                </div>
                <p class=\"text-xs text-gray-400\">Cochez la croix rouge pour supprimer une photo. Les nouvelles photos s'ajouteront aux existantes.</p>
            ";
        }
        // line 162
        yield "
            <p class=\"text-sm font-medium text-tertiary\">Ajouter des photos</p>
            <label class=\"flex flex-col items-center justify-center border-2 border-dashed border-gray-200 rounded-xl py-8 px-4 cursor-pointer hover:border-secondary transition-colors\">
                <svg class=\"w-10 h-10 text-gray-300 mb-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"
                          d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                </svg>
                <span class=\"text-sm text-tertiary\">Cliquez pour sélectionner vos photos</span>
                <span class=\"text-xs text-gray-400 mt-1\">JPG, PNG, WEBP — plusieurs fichiers acceptés</span>
                <input type=\"file\" name=\"photos[]\" multiple accept=\"image/jpeg,image/png,image/webp,image/gif\"
                       id=\"input-photos\" class=\"hidden\">
            </label>
            <div id=\"preview-photos\" class=\"grid grid-cols-4 gap-2\"></div>
        </div>

        <button type=\"submit\"
                class=\"w-full py-4 bg-primary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all text-lg\">
            ";
        // line 179
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "id_annonce", [], "any", true, true, false, 179) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 179, $this->source); })()), "id_annonce", [], "any", false, false, false, 179))) ? ("Enregistrer les modifications") : ("Publier l'annonce"));
        yield "
        </button>

    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 186
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 187
        yield "<script>
const CATALOG = ";
        // line 188
        yield json_encode((isset($context["catalog"]) || array_key_exists("catalog", $context) ? $context["catalog"] : (function () { throw new RuntimeError('Variable "catalog" does not exist.', 188, $this->source); })()));
        yield ";
const SELECTED_VERSION = ";
        // line 189
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 189, $this->source); })()), "id_version", [], "any", false, false, false, 189));
        yield ";
</script>
<script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/annonces.js"), "html", null, true);
        yield "\"></script>
<script>
document.getElementById('input-photos').addEventListener('change', function () {
    const preview = document.getElementById('preview-photos');
    preview.innerHTML = '';
    Array.from(this.files).forEach(file => {
        const reader = new FileReader();
        reader.onload = e => {
            const div = document.createElement('div');
            div.className = 'aspect-square bg-gray-100 rounded-lg overflow-hidden';
            div.innerHTML = `<img src=\"\${e.target.result}\" class=\"w-full h-full object-cover\">`;
            preview.appendChild(div);
        };
        reader.readAsDataURL(file);
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonce/form.html.twig";
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
        return array (  396 => 191,  391 => 189,  387 => 188,  384 => 187,  374 => 186,  360 => 179,  341 => 162,  336 => 159,  323 => 152,  317 => 149,  314 => 148,  310 => 147,  306 => 145,  304 => 144,  299 => 141,  293 => 137,  288 => 134,  276 => 123,  272 => 122,  262 => 115,  253 => 109,  241 => 100,  232 => 94,  222 => 86,  207 => 84,  203 => 83,  193 => 76,  181 => 67,  172 => 61,  163 => 54,  131 => 23,  126 => 19,  117 => 17,  112 => 16,  103 => 14,  99 => 13,  92 => 9,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}{{ annonce ? 'Modifier' : 'Publier' }} une annonce — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-3xl mx-auto px-6 py-8\">

    <h1 class=\"text-3xl font-bold text-primary font-['ManRope'] mb-2\">
        {{ annonce ? 'Modifier l\\'annonce' : 'Publier une annonce' }}
    </h1>
    <p class=\"text-tertiary mb-8\">Renseignez les informations de votre véhicule</p>

    {% for msg in app.flashes('warning') %}
        <div class=\"bg-amber-50 border border-amber-200 text-amber-800 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for err in errors %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ err }}</div>
    {% endfor %}

    <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-6\">

        {# Sélection du véhicule #}
        <div class=\"bg-white rounded-xl p-6 shadow-sm space-y-4\">
            <h2 class=\"font-bold text-primary font-['ManRope']\">Modèle du véhicule</h2>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Marque *</label>
                <select id=\"sel-marque\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                    <option value=\"\">Sélectionner une marque</option>
                </select>
            </div>
            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Modèle *</label>
                <select id=\"sel-modele\" disabled class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm disabled:opacity-50\">
                    <option value=\"\">Sélectionner un modèle</option>
                </select>
            </div>
            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Génération *</label>
                <select id=\"sel-generation\" disabled class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm disabled:opacity-50\">
                    <option value=\"\">Sélectionner une génération</option>
                </select>
            </div>
            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Version / Finition *</label>
                <select id=\"sel-version\" name=\"id_version\" disabled required
                        class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm disabled:opacity-50\">
                    <option value=\"\">Sélectionner une version</option>
                </select>
            </div>
        </div>

        {# Informations du véhicule #}
        <div class=\"bg-white rounded-xl p-6 shadow-sm space-y-4\">
            <h2 class=\"font-bold text-primary font-['ManRope']\">Informations</h2>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Prix (€) *</label>
                    <input type=\"number\" name=\"prix\" min=\"1\" step=\"1\" required
                           value=\"{{ annonce.prix ?? '' }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Année de mise en circulation *</label>
                    <input type=\"number\" name=\"annee_circulation\" min=\"1950\" max=\"2025\" required
                           value=\"{{ annonce.annee_circulation ?? '' }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Kilométrage *</label>
                    <input type=\"number\" name=\"kilometrage\" min=\"0\" required
                           value=\"{{ annonce.kilometrage ?? '' }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">État</label>
                    <select name=\"etat\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                        <option value=\"\">Non précisé</option>
                        {% for e in ['Excellent', 'Très bon', 'Bon', 'Correct', 'À rénover'] %}
                            <option value=\"{{ e }}\" {% if annonce.etat == e %}selected{% endif %}>{{ e }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Couleur</label>
                    <input type=\"text\" name=\"couleur\" placeholder=\"Noir, Blanc, Rouge…\"
                           value=\"{{ annonce.couleur ?? '' }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Localisation</label>
                    <input type=\"text\" name=\"localisation\" placeholder=\"Paris, 75001\"
                           value=\"{{ annonce.localisation ?? '' }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Nombre de propriétaires</label>
                    <input type=\"number\" name=\"nombre_proprietaire\" id=\"nombre_proprietaire\" min=\"1\" max=\"20\"
                           value=\"{{ annonce.nombre_proprietaire ?? '' }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Contrôle technique</label>
                    <input type=\"date\" name=\"controle_technique\"
                           value=\"{{ annonce.controle_technique ?? '' }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary\">
                </div>
            </div>

            <div class=\"flex items-center gap-3\">
                <input type=\"checkbox\" id=\"premiere_main\" name=\"premiere_main\" value=\"1\"
                       {% if annonce.premiere_main %}checked{% endif %}
                       class=\"w-4 h-4 accent-secondary rounded\"
                       onchange=\"
                           var nb = document.getElementById('nombre_proprietaire');
                           if (this.checked) { nb.value = 1; nb.disabled = true; }
                           else { nb.disabled = false; nb.value = ''; }
                       \">
                <label for=\"premiere_main\" class=\"text-sm font-medium text-tertiary cursor-pointer\">Première main</label>
            </div>
        </div>

        {# Description #}
        <div class=\"bg-white rounded-xl p-6 shadow-sm\">
            <h2 class=\"font-bold text-primary font-['ManRope'] mb-3\">Description</h2>
            <textarea name=\"description\" rows=\"5\" placeholder=\"Décrivez l'état général, l'historique, les options…\"
                      class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm resize-none\">{{ annonce.description ?? '' }}</textarea>
        </div>

        {# Photos #}
        <div class=\"bg-white rounded-xl p-6 shadow-sm space-y-3\">
            <h2 class=\"font-bold text-primary font-['ManRope']\">Photos du véhicule</h2>

            {% if photos is defined and photos is not empty %}
                <p class=\"text-sm font-medium text-tertiary\">Photos actuelles</p>
                <div class=\"grid grid-cols-4 gap-2\">
                    {% for photo in photos %}
                    <div class=\"relative aspect-square bg-gray-100 rounded-lg overflow-hidden\">
                        <img src=\"{{ photo.url_photo }}\" class=\"w-full h-full object-cover\">
                        <label class=\"absolute top-1 right-1 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center cursor-pointer transition-colors\"
                               title=\"Supprimer cette photo\">
                            <input type=\"checkbox\" name=\"delete_photos[]\" value=\"{{ photo.id_photo }}\" class=\"hidden\" onchange=\"this.closest('.relative').style.opacity = this.checked ? '0.3' : '1'\">
                            <svg class=\"w-3 h-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"/>
                            </svg>
                        </label>
                    </div>
                    {% endfor %}
                </div>
                <p class=\"text-xs text-gray-400\">Cochez la croix rouge pour supprimer une photo. Les nouvelles photos s'ajouteront aux existantes.</p>
            {% endif %}

            <p class=\"text-sm font-medium text-tertiary\">Ajouter des photos</p>
            <label class=\"flex flex-col items-center justify-center border-2 border-dashed border-gray-200 rounded-xl py-8 px-4 cursor-pointer hover:border-secondary transition-colors\">
                <svg class=\"w-10 h-10 text-gray-300 mb-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"
                          d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                </svg>
                <span class=\"text-sm text-tertiary\">Cliquez pour sélectionner vos photos</span>
                <span class=\"text-xs text-gray-400 mt-1\">JPG, PNG, WEBP — plusieurs fichiers acceptés</span>
                <input type=\"file\" name=\"photos[]\" multiple accept=\"image/jpeg,image/png,image/webp,image/gif\"
                       id=\"input-photos\" class=\"hidden\">
            </label>
            <div id=\"preview-photos\" class=\"grid grid-cols-4 gap-2\"></div>
        </div>

        <button type=\"submit\"
                class=\"w-full py-4 bg-primary text-white font-bold rounded-xl hover:bg-opacity-90 active:scale-95 transition-all text-lg\">
            {{ annonce.id_annonce is defined and annonce.id_annonce ? 'Enregistrer les modifications' : 'Publier l\\'annonce' }}
        </button>

    </form>
</div>
{% endblock %}

{% block javascripts %}
<script>
const CATALOG = {{ catalog|json_encode|raw }};
const SELECTED_VERSION = {{ annonce.id_version|json_encode|raw }};
</script>
<script src=\"{{ asset('js/annonces.js') }}\"></script>
<script>
document.getElementById('input-photos').addEventListener('change', function () {
    const preview = document.getElementById('preview-photos');
    preview.innerHTML = '';
    Array.from(this.files).forEach(file => {
        const reader = new FileReader();
        reader.onload = e => {
            const div = document.createElement('div');
            div.className = 'aspect-square bg-gray-100 rounded-lg overflow-hidden';
            div.innerHTML = `<img src=\"\${e.target.result}\" class=\"w-full h-full object-cover\">`;
            preview.appendChild(div);
        };
        reader.readAsDataURL(file);
    });
});
</script>
{% endblock %}
", "annonce/form.html.twig", "C:\\projets\\Projet_WE4A\\templates\\annonce\\form.html.twig");
    }
}
