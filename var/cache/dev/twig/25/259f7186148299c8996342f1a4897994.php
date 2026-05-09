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

/* annonce/detail.html.twig */
class __TwigTemplate_5929c1c6209ed468dd2d4e299a3a2f61 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/detail.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 3, $this->source); })()), "marque_nom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 3, $this->source); })()), "modele_nom", [], "any", false, false, false, 3), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            yield "        <div class=\"bg-amber-50 border border-amber-200 text-amber-800 px-4 py-3 rounded-lg mb-6 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    ";
        // line 16
        yield "    <nav class=\"text-sm text-tertiary mb-6 flex items-center gap-2\">
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\" class=\"hover:text-secondary\">Annonces</a>
        <span>/</span>
        ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 19, $this->source); })()), "type_nom", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "            <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 20, $this->source); })()), "type_nom", [], "any", false, false, false, 20), "html", null, true);
            yield "</span>
            <span>/</span>
        ";
        }
        // line 23
        yield "        <span>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 23, $this->source); })()), "marque_nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</span>
        <span>/</span>
        <span class=\"text-primary font-medium\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 25, $this->source); })()), "modele_nom", [], "any", false, false, false, 25), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 25, $this->source); })()), "version_nom", [], "any", false, false, false, 25), "html", null, true);
        yield "</span>
    </nav>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">

        ";
        // line 31
        yield "        <div class=\"lg:col-span-2 space-y-6\">

            ";
        // line 34
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 34, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "            <div class=\"relative\">
                <div class=\"aspect-[16/9] bg-gray-100 rounded-xl overflow-hidden\">
                    <img id=\"carousel-main\" src=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 37, $this->source); })()), 0, [], "array", false, false, false, 37), "url_photo", [], "any", false, false, false, 37), "html", null, true);
            yield "\"
                         alt=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 38, $this->source); })()), "marque_nom", [], "any", false, false, false, 38), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 38, $this->source); })()), "modele_nom", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
                         class=\"w-full h-full object-cover\">
                </div>
                ";
            // line 41
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 41, $this->source); })())) > 1)) {
                // line 42
                yield "                <button id=\"carousel-prev\" class=\"absolute left-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 19l-7-7 7-7\"/></svg>
                </button>
                <button id=\"carousel-next\" class=\"absolute right-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/></svg>
                </button>
                <div class=\"absolute bottom-3 left-1/2 -translate-x-1/2 bg-black bg-opacity-50 text-white text-xs px-3 py-1 rounded-full\" id=\"carousel-counter\">1 / ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 48, $this->source); })())), "html", null, true);
                yield "</div>
                ";
            }
            // line 50
            yield "            </div>
            ";
            // line 51
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 51, $this->source); })())) > 1)) {
                // line 52
                yield "            <div class=\"grid grid-cols-5 gap-2\">
                ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 53, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 54
                    yield "                <div class=\"aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer ring-2 ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "ring-secondary";
                    } else {
                        yield "ring-transparent";
                    }
                    yield " hover:ring-secondary transition-all\" data-thumb-index=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 54), "html", null, true);
                    yield "\">
                    <img src=\"";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "url_photo", [], "any", false, false, false, 55), "html", null, true);
                    yield "\" class=\"w-full h-full object-cover hover:opacity-80 transition-opacity\">
                </div>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                yield "            </div>
            ";
            }
            // line 60
            yield "            ";
        } else {
            // line 61
            yield "            <div class=\"aspect-[16/9] bg-gray-100 rounded-xl flex items-center justify-center text-gray-300\">
                <svg class=\"w-24 h-24\" fill=\"currentColor\" viewBox=\"0 0 24 24\"><path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/></svg>
            </div>
            ";
        }
        // line 65
        yield "
            ";
        // line 67
        yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Informations de l'annonce
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Année</p>
                        <p class=\"font-semibold text-primary\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 75, $this->source); })()), "annee_circulation", [], "any", false, false, false, 75), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Kilométrage</p>
                        <p class=\"font-semibold text-primary\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 79, $this->source); })()), "kilometrage", [], "any", false, false, false, 79), 0, ",", " "), "html", null, true);
        yield " km</p>
                    </div>
                    ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 81, $this->source); })()), "etat", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">État</p>
                        <p class=\"font-semibold text-primary\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 84, $this->source); })()), "etat", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 87
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 87, $this->source); })()), "couleur", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Couleur</p>
                        <p class=\"font-semibold text-primary\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 90, $this->source); })()), "couleur", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 93
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 93, $this->source); })()), "sellerie", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Sellerie</p>
                        <p class=\"font-semibold text-primary\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 96, $this->source); })()), "sellerie", [], "any", false, false, false, 96), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 99
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 99, $this->source); })()), "finition", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Finition</p>
                        <p class=\"font-semibold text-primary\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 102, $this->source); })()), "finition", [], "any", false, false, false, 102), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 105
        yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Première main</p>
                        <p class=\"font-semibold text-primary\">";
        // line 107
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 107, $this->source); })()), "premiere_main", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</p>
                    </div>
                    ";
        // line 109
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 109, $this->source); })()), "nombre_proprietaire", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Nb propriétaires</p>
                        <p class=\"font-semibold text-primary\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 112, $this->source); })()), "nombre_proprietaire", [], "any", false, false, false, 112), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 115
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 115, $this->source); })()), "controle_technique", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Contrôle technique</p>
                        <p class=\"font-semibold text-primary\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 118, $this->source); })()), "controle_technique", [], "any", false, false, false, 118), "d/m/Y"), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 121
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 121, $this->source); })()), "provenance", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Provenance</p>
                        <p class=\"font-semibold text-primary\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 124, $this->source); })()), "provenance", [], "any", false, false, false, 124), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 127
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 127, $this->source); })()), "localisation", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "                    <div class=\"col-span-2 md:col-span-1\">
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Localisation</p>
                        <p class=\"font-semibold text-primary\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 130, $this->source); })()), "localisation", [], "any", false, false, false, 130), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 133
        yield "                </div>
            </div>

            ";
        // line 137
        yield "            ";
        if ((((((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "puissance_DIN", [], "any", false, false, false, 137) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "cylindree", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "carburant", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "transmission", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "nombre_rapport", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "nombre_places", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "nombre_portes", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "vitesse_max", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "coffre_volume", [], "any", false, false, false, 137))) {
            // line 138
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Motorisation & carrosserie
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 144, $this->source); })()), "puissance_DIN", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Puissance</p>
                        <p class=\"font-semibold text-primary\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 147, $this->source); })()), "puissance_DIN", [], "any", false, false, false, 147), "html", null, true);
                yield " ch";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 147, $this->source); })()), "puissance_fiscale", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 147, $this->source); })()), "puissance_fiscale", [], "any", false, false, false, 147), "html", null, true);
                    yield " CV)";
                }
                yield "</p>
                    </div>
                    ";
            }
            // line 150
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 150, $this->source); })()), "couple_cumul", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Couple</p>
                        <p class=\"font-semibold text-primary\">";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 153, $this->source); })()), "couple_cumul", [], "any", false, false, false, 153), "html", null, true);
                yield " Nm</p>
                    </div>
                    ";
            }
            // line 156
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 156, $this->source); })()), "cylindree", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 157
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Cylindrée</p>
                        <p class=\"font-semibold text-primary\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 159, $this->source); })()), "cylindree", [], "any", false, false, false, 159), "html", null, true);
                yield " cm³</p>
                    </div>
                    ";
            }
            // line 162
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 162, $this->source); })()), "nombre_cylindre", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Cylindres</p>
                        <p class=\"font-semibold text-primary\">";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 165, $this->source); })()), "nombre_cylindre", [], "any", false, false, false, 165), "html", null, true);
                yield " cyl.";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 165, $this->source); })()), "nombre_soupapes_cyclindre", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " × ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 165, $this->source); })()), "nombre_soupapes_cyclindre", [], "any", false, false, false, 165), "html", null, true);
                    yield " soupapes";
                }
                yield "</p>
                    </div>
                    ";
            }
            // line 168
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 168, $this->source); })()), "alimentation", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Alimentation</p>
                        <p class=\"font-semibold text-primary\">";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 171, $this->source); })()), "alimentation", [], "any", false, false, false, 171), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 174
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 174, $this->source); })()), "type_suralimentation", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 175
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suralimentation</p>
                        <p class=\"font-semibold text-primary\">";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 177, $this->source); })()), "type_suralimentation", [], "any", false, false, false, 177), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 180
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 180, $this->source); })()), "carburant", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 181
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Carburant</p>
                        <p class=\"font-semibold text-primary\">";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 183, $this->source); })()), "carburant", [], "any", false, false, false, 183), "html", null, true);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 183, $this->source); })()), "reservoir_volume", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " — ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 183, $this->source); })()), "reservoir_volume", [], "any", false, false, false, 183), "html", null, true);
                    yield " L";
                }
                yield "</p>
                    </div>
                    ";
            }
            // line 186
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 186, $this->source); })()), "transmission", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 187
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Transmission</p>
                        <p class=\"font-semibold text-primary\">";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 189, $this->source); })()), "transmission", [], "any", false, false, false, 189), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 192
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 192, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Boîte de vitesse</p>
                        <p class=\"font-semibold text-primary\">";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 195, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 195), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 198
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 198, $this->source); })()), "nombre_rapport", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 199
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Rapports</p>
                        <p class=\"font-semibold text-primary\">";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 201, $this->source); })()), "nombre_rapport", [], "any", false, false, false, 201), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 204
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 204, $this->source); })()), "vitesse_max", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Vitesse max</p>
                        <p class=\"font-semibold text-primary\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 207, $this->source); })()), "vitesse_max", [], "any", false, false, false, 207), "html", null, true);
                yield " km/h</p>
                    </div>
                    ";
            }
            // line 210
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 210, $this->source); })()), "nombre_places", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 211
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Places</p>
                        <p class=\"font-semibold text-primary\">";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 213, $this->source); })()), "nombre_places", [], "any", false, false, false, 213), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 216
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 216, $this->source); })()), "nombre_portes", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 217
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Portes</p>
                        <p class=\"font-semibold text-primary\">";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 219, $this->source); })()), "nombre_portes", [], "any", false, false, false, 219), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 222
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 222, $this->source); })()), "coffre_volume", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 223
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Volume coffre</p>
                        <p class=\"font-semibold text-primary\">";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 225, $this->source); })()), "coffre_volume", [], "any", false, false, false, 225), "html", null, true);
                yield " L</p>
                    </div>
                    ";
            }
            // line 228
            yield "                </div>
            </div>
            ";
        }
        // line 231
        yield "
            ";
        // line 233
        yield "            ";
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 233, $this->source); })()), "consommation_urbaine", [], "any", false, false, false, 233) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 233, $this->source); })()), "consommation_extra_urbaine", [], "any", false, false, false, 233)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 233, $this->source); })()), "consomation_mixte", [], "any", false, false, false, 233)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 233, $this->source); })()), "emission_CO2", [], "any", false, false, false, 233)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 233, $this->source); })()), "Norme_euro", [], "any", false, false, false, 233)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 233, $this->source); })()), "Crit_air", [], "any", false, false, false, 233)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 233, $this->source); })()), "Crit_air", [], "any", false, false, false, 233) != "")))) {
            // line 234
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Consommation & émissions
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 240
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 240, $this->source); })()), "consommation_urbaine", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 241
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Urbain</p>
                        <p class=\"font-semibold text-primary\">";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 243, $this->source); })()), "consommation_urbaine", [], "any", false, false, false, 243), "html", null, true);
                yield " L/100 km</p>
                    </div>
                    ";
            }
            // line 246
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 246, $this->source); })()), "consommation_extra_urbaine", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Extra-urbain</p>
                        <p class=\"font-semibold text-primary\">";
                // line 249
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 249, $this->source); })()), "consommation_extra_urbaine", [], "any", false, false, false, 249), "html", null, true);
                yield " L/100 km</p>
                    </div>
                    ";
            }
            // line 252
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 252, $this->source); })()), "consomation_mixte", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 253
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Mixte</p>
                        <p class=\"font-semibold text-primary\">";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 255, $this->source); })()), "consomation_mixte", [], "any", false, false, false, 255), "html", null, true);
                yield " L/100 km</p>
                    </div>
                    ";
            }
            // line 258
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 258, $this->source); })()), "emission_CO2", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 259
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Émissions CO₂</p>
                        <p class=\"font-semibold text-primary\">";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 261, $this->source); })()), "emission_CO2", [], "any", false, false, false, 261), "html", null, true);
                yield " g/km</p>
                    </div>
                    ";
            }
            // line 264
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 264, $this->source); })()), "Norme_euro", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Norme Euro</p>
                        <p class=\"font-semibold text-primary\">";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 267, $this->source); })()), "Norme_euro", [], "any", false, false, false, 267), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 270
            yield "                    ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 270, $this->source); })()), "Crit_air", [], "any", false, false, false, 270)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 270, $this->source); })()), "Crit_air", [], "any", false, false, false, 270) != ""))) {
                // line 271
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Crit'Air</p>
                        <span class=\"inline-block font-bold text-white px-3 py-1 rounded text-sm
                            ";
                // line 274
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 274, $this->source); })()), "Crit_air", [], "any", false, false, false, 274) == 0)) {
                    yield "bg-green-600
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 275
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 275, $this->source); })()), "Crit_air", [], "any", false, false, false, 275) == 1)) {
                    yield "bg-green-500
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 276
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 276, $this->source); })()), "Crit_air", [], "any", false, false, false, 276) == 2)) {
                    yield "bg-yellow-500
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 277
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 277, $this->source); })()), "Crit_air", [], "any", false, false, false, 277) == 3)) {
                    yield "bg-orange-500
                            ";
                } else {
                    // line 278
                    yield "bg-red-500";
                }
                yield "\">
                            ";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 279, $this->source); })()), "Crit_air", [], "any", false, false, false, 279), "html", null, true);
                yield "
                        </span>
                    </div>
                    ";
            }
            // line 283
            yield "                </div>
            </div>
            ";
        }
        // line 286
        yield "
            ";
        // line 288
        yield "            ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 288, $this->source); })()), "largeur_sans_retros", [], "any", false, false, false, 288) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 288, $this->source); })()), "hauteur", [], "any", false, false, false, 288)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 288, $this->source); })()), "empattement", [], "any", false, false, false, 288)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 288, $this->source); })()), "poids_vide", [], "any", false, false, false, 288))) {
            // line 289
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Dimensions & poids
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-4 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 295
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 295, $this->source); })()), "largeur_sans_retros", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 296
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Largeur</p>
                        <p class=\"font-semibold text-primary\">";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 298, $this->source); })()), "largeur_sans_retros", [], "any", false, false, false, 298), "html", null, true);
                yield " mm</p>
                    </div>
                    ";
            }
            // line 301
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 301, $this->source); })()), "hauteur", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 302
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Hauteur</p>
                        <p class=\"font-semibold text-primary\">";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 304, $this->source); })()), "hauteur", [], "any", false, false, false, 304), "html", null, true);
                yield " mm</p>
                    </div>
                    ";
            }
            // line 307
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 307, $this->source); })()), "empattement", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 308
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Empattement</p>
                        <p class=\"font-semibold text-primary\">";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 310, $this->source); })()), "empattement", [], "any", false, false, false, 310), "html", null, true);
                yield " mm</p>
                    </div>
                    ";
            }
            // line 313
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 313, $this->source); })()), "poids_vide", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 314
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Poids à vide</p>
                        <p class=\"font-semibold text-primary\">";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 316, $this->source); })()), "poids_vide", [], "any", false, false, false, 316), "html", null, true);
                yield " kg</p>
                    </div>
                    ";
            }
            // line 319
            yield "                </div>
            </div>
            ";
        }
        // line 322
        yield "
            ";
        // line 324
        yield "            ";
        if (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 324, $this->source); })()), "suspension_avant", [], "any", false, false, false, 324) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 324, $this->source); })()), "suspension_arriere", [], "any", false, false, false, 324)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 324, $this->source); })()), "freins_avant", [], "any", false, false, false, 324)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 324, $this->source); })()), "freins_arriere", [], "any", false, false, false, 324)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 324, $this->source); })()), "diametre_braquage", [], "any", false, false, false, 324))) {
            // line 325
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Châssis & freinage
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 331
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 331, $this->source); })()), "suspension_avant", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 332
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suspension avant</p>
                        <p class=\"font-semibold text-primary\">";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 334, $this->source); })()), "suspension_avant", [], "any", false, false, false, 334), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 337
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 337, $this->source); })()), "suspension_arriere", [], "any", false, false, false, 337)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 338
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suspension arrière</p>
                        <p class=\"font-semibold text-primary\">";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 340, $this->source); })()), "suspension_arriere", [], "any", false, false, false, 340), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 343
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 343, $this->source); })()), "freins_avant", [], "any", false, false, false, 343)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 344
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Freins avant</p>
                        <p class=\"font-semibold text-primary\">";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 346, $this->source); })()), "freins_avant", [], "any", false, false, false, 346), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 349
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 349, $this->source); })()), "freins_arriere", [], "any", false, false, false, 349)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 350
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Freins arrière</p>
                        <p class=\"font-semibold text-primary\">";
                // line 352
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 352, $this->source); })()), "freins_arriere", [], "any", false, false, false, 352), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 355
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 355, $this->source); })()), "diametre_braquage", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 356
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Diamètre de braquage</p>
                        <p class=\"font-semibold text-primary\">";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 358, $this->source); })()), "diametre_braquage", [], "any", false, false, false, 358), "html", null, true);
                yield " m</p>
                    </div>
                    ";
            }
            // line 361
            yield "                </div>
            </div>
            ";
        }
        // line 364
        yield "
            ";
        // line 366
        yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Fiche modèle
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Marque</p>
                        <p class=\"font-semibold text-primary\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 374, $this->source); })()), "marque_nom", [], "any", false, false, false, 374), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 374, $this->source); })()), "marque_pays", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 374, $this->source); })()), "marque_pays", [], "any", false, false, false, 374), "html", null, true);
            yield ")";
        }
        yield "</p>
                    </div>
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Modèle</p>
                        <p class=\"font-semibold text-primary\">";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 378, $this->source); })()), "modele_nom", [], "any", false, false, false, 378), "html", null, true);
        yield "</p>
                    </div>
                    ";
        // line 380
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 380, $this->source); })()), "type_nom", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 381
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Type de carrosserie</p>
                        <p class=\"font-semibold text-primary\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 383, $this->source); })()), "type_nom", [], "any", false, false, false, 383), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 386
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 386, $this->source); })()), "generation_nom", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 387
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Génération</p>
                        <p class=\"font-semibold text-primary\">";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 389, $this->source); })()), "generation_nom", [], "any", false, false, false, 389), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 389, $this->source); })()), "generation_date_sortie", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 389, $this->source); })()), "generation_date_sortie", [], "any", false, false, false, 389), "Y"), "html", null, true);
                yield ")";
            }
            yield "</p>
                    </div>
                    ";
        }
        // line 392
        yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Version</p>
                        <p class=\"font-semibold text-primary\">";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 394, $this->source); })()), "version_nom", [], "any", false, false, false, 394), "html", null, true);
        yield "</p>
                    </div>
                    ";
        // line 396
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 396, $this->source); })()), "modele_annee", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 397
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Commercialisé depuis</p>
                        <p class=\"font-semibold text-primary\">";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 399, $this->source); })()), "modele_annee", [], "any", false, false, false, 399), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 402
        yield "                </div>
            </div>

            ";
        // line 406
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 406, $this->source); })()), "description", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 407
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-3 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Description du vendeur
                </h2>
                <p class=\"text-tertiary text-sm leading-relaxed whitespace-pre-wrap\">";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 412, $this->source); })()), "description", [], "any", false, false, false, 412), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 415
        yield "
            ";
        // line 417
        yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h2 class=\"font-bold text-primary text-base font-['ManRope'] flex items-center gap-2\">
                        <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                        Avis sur le ";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 421, $this->source); })()), "marque_nom", [], "any", false, false, false, 421), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 421, $this->source); })()), "modele_nom", [], "any", false, false, false, 421), "html", null, true);
        yield "
                    </h2>
                    ";
        // line 423
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats_modele"]) || array_key_exists("stats_modele", $context) ? $context["stats_modele"] : (function () { throw new RuntimeError('Variable "stats_modele" does not exist.', 423, $this->source); })()), "nb_avis", [], "any", false, false, false, 423) > 0)) {
            // line 424
            yield "                    <div class=\"flex items-center gap-2\">
                        <div class=\"flex gap-0.5\">
                            ";
            // line 426
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 427
                yield "                                <svg class=\"w-4 h-4 ";
                yield ((($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats_modele"]) || array_key_exists("stats_modele", $context) ? $context["stats_modele"] : (function () { throw new RuntimeError('Variable "stats_modele" does not exist.', 427, $this->source); })()), "note_moyenne", [], "any", false, false, false, 427)))) ? ("text-amber-400") : ("text-gray-200"));
                yield "\"
                                     fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            yield "                        </div>
                        <span class=\"text-sm font-bold text-primary\">";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats_modele"]) || array_key_exists("stats_modele", $context) ? $context["stats_modele"] : (function () { throw new RuntimeError('Variable "stats_modele" does not exist.', 433, $this->source); })()), "note_moyenne", [], "any", false, false, false, 433), "html", null, true);
            yield "</span>
                        <span class=\"text-xs text-tertiary\">(";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats_modele"]) || array_key_exists("stats_modele", $context) ? $context["stats_modele"] : (function () { throw new RuntimeError('Variable "stats_modele" does not exist.', 434, $this->source); })()), "nb_avis", [], "any", false, false, false, 434), "html", null, true);
            yield " avis)</span>
                    </div>
                    ";
        }
        // line 437
        yield "                </div>

                ";
        // line 440
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 440, $this->source); })()), "flashes", ["success"], "method", false, false, false, 440));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 441
            yield "                    <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 443, $this->source); })()), "flashes", ["error"], "method", false, false, false, 443));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 444
            yield "                    <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        yield "
                ";
        // line 448
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 448, $this->source); })()), "user", [], "any", false, false, false, 448)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 449
            yield "                    ";
            if ((($tmp = (isset($context["deja_note"]) || array_key_exists("deja_note", $context) ? $context["deja_note"] : (function () { throw new RuntimeError('Variable "deja_note" does not exist.', 449, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 450
                yield "                        <div class=\"bg-amber-50 border border-amber-200 rounded-xl p-4 mb-5 text-sm text-amber-800 text-center\">
                            Vous avez déjà laissé un avis pour ce modèle.
                        </div>
                    ";
            } else {
                // line 454
                yield "                        <div class=\"border border-gray-100 rounded-xl p-5 mb-6 bg-gray-50\">
                            <p class=\"text-sm font-semibold text-primary mb-3\">Votre avis</p>
                            <form method=\"post\" action=\"";
                // line 456
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_modele_ajouter", ["id_annonce" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 456, $this->source); })()), "id_annonce", [], "any", false, false, false, 456)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken(("avis_modele_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 457, $this->source); })()), "id_annonce", [], "any", false, false, false, 457))), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"id_modele\" value=\"";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 458, $this->source); })()), "id_modele", [], "any", false, false, false, 458), "html", null, true);
                yield "\">

                                <div class=\"mb-3\">
                                    <div class=\"flex gap-1\" id=\"star-selector-modele\">
                                        ";
                // line 462
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 463
                    yield "                                            <button type=\"button\" data-value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\"
                                                    class=\"star-btn-modele w-8 h-8 text-gray-300 hover:text-amber-400 transition-colors\">
                                                <svg fill=\"currentColor\" viewBox=\"0 0 24 24\" class=\"w-full h-full\">
                                                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                                </svg>
                                            </button>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 470
                yield "                                    </div>
                                    <input type=\"hidden\" name=\"note\" id=\"note-input-modele\" value=\"0\">
                                </div>

                                <textarea name=\"contenu\" rows=\"3\" maxlength=\"2000\"
                                          placeholder=\"Partagez votre expérience avec ce modèle...\"
                                          class=\"w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-primary resize-none focus:outline-none focus:ring-2 focus:ring-secondary/30 focus:border-secondary mb-3\"></textarea>

                                <button type=\"submit\"
                                        class=\"px-5 py-2 bg-secondary text-white font-bold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm\">
                                    Publier
                                </button>
                            </form>
                        </div>
                    ";
            }
            // line 485
            yield "                ";
        } else {
            // line 486
            yield "                    <div class=\"border border-gray-100 rounded-xl p-4 mb-5 flex items-center justify-between gap-4 bg-gray-50\">
                        <p class=\"text-sm text-tertiary\">Connectez-vous pour laisser un avis sur ce modèle.</p>
                        <a href=\"";
            // line 488
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\"
                           class=\"shrink-0 px-4 py-2 bg-primary text-white font-bold rounded-lg text-sm hover:bg-primary/90 transition-all\">
                            Se connecter
                        </a>
                    </div>
                ";
        }
        // line 494
        yield "
                ";
        // line 496
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["avis_modele"]) || array_key_exists("avis_modele", $context) ? $context["avis_modele"] : (function () { throw new RuntimeError('Variable "avis_modele" does not exist.', 496, $this->source); })()))) {
            // line 497
            yield "                    <p class=\"text-sm text-tertiary text-center py-6\">Aucun avis pour ce modèle. Soyez le premier !</p>
                ";
        } else {
            // line 499
            yield "                    <div class=\"space-y-4\">
                        ";
            // line 500
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis_modele"]) || array_key_exists("avis_modele", $context) ? $context["avis_modele"] : (function () { throw new RuntimeError('Variable "avis_modele" does not exist.', 500, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 501
                yield "                        <div class=\"border-t border-gray-50 pt-4 first:border-t-0 first:pt-0\">
                            <div class=\"flex items-start justify-between gap-3\">
                                <div class=\"flex items-center gap-3\">
                                    <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center shrink-0\">
                                        <span class=\"text-xs font-bold text-primary\">";
                // line 505
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_prenom", [], "any", false, false, false, 505))), "html", null, true);
                yield "</span>
                                    </div>
                                    <div>
                                        <p class=\"font-semibold text-primary text-sm\">";
                // line 508
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_prenom", [], "any", false, false, false, 508), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_nom", [], "any", false, false, false, 508), "html", null, true);
                yield "</p>
                                        <p class=\"text-[11px] text-tertiary\">";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_avis", [], "any", false, false, false, 509), "d/m/Y"), "html", null, true);
                yield "</p>
                                    </div>
                                </div>
                                <div class=\"flex items-center gap-2\">
                                    <div class=\"flex gap-0.5\">
                                        ";
                // line 514
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 515
                    yield "                                            <svg class=\"w-3.5 h-3.5 ";
                    yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["a"], "note", [], "any", false, false, false, 515))) ? ("text-amber-400") : ("text-gray-200"));
                    yield "\"
                                                 fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                            </svg>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 520
                yield "                                    </div>
                                    ";
                // line 521
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 521, $this->source); })()), "user", [], "any", false, false, false, 521) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 521, $this->source); })()), "user", [], "any", false, false, false, 521), "id", [], "any", false, false, false, 521) == CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_id", [], "any", false, false, false, 521)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
                    // line 522
                    yield "                                        <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_modele_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_avis_modele", [], "any", false, false, false, 522)]), "html", null, true);
                    yield "\"
                                              onsubmit=\"return confirm('Supprimer cet avis ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 524
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken(("avis_modele_supprimer_" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_avis_modele", [], "any", false, false, false, 524))), "html", null, true);
                    yield "\">
                                            <input type=\"hidden\" name=\"id_annonce\" value=\"";
                    // line 525
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 525, $this->source); })()), "id_annonce", [], "any", false, false, false, 525), "html", null, true);
                    yield "\">
                                            <button type=\"submit\" title=\"Supprimer\"
                                                    class=\"text-gray-300 hover:text-red-500 transition-colors\">
                                                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"/>
                                                </svg>
                                            </button>
                                        </form>
                                    ";
                }
                // line 534
                yield "                                </div>
                            </div>
                            ";
                // line 536
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "contenu", [], "any", false, false, false, 536)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 537
                    yield "                                <p class=\"mt-2 text-sm text-tertiary leading-relaxed pl-11\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "contenu", [], "any", false, false, false, 537), "html", null, true);
                    yield "</p>
                            ";
                }
                // line 539
                yield "                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            yield "                    </div>
                ";
        }
        // line 543
        yield "            </div>

        </div>

        ";
        // line 548
        yield "        <div class=\"space-y-4\">
            <div class=\"bg-white rounded-xl p-6 shadow-sm sticky top-4\">

                <div class=\"flex items-center justify-between mb-1\">
                    <p class=\"text-3xl font-bold text-secondary\">";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 552, $this->source); })()), "prix", [], "any", false, false, false, 552), 0, ",", " "), "html", null, true);
        yield " €</p>
                    ";
        // line 553
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 553, $this->source); })()), "user", [], "any", false, false, false, 553) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 553, $this->source); })()), "user", [], "any", false, false, false, 553), "id", [], "any", false, false, false, 553) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 553, $this->source); })()), "vendeur_id", [], "any", false, false, false, 553)))) {
            // line 554
            yield "                    <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favori_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 554, $this->source); })()), "id_annonce", [], "any", false, false, false, 554)]), "html", null, true);
            yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("favori"), "html", null, true);
            yield "\">
                        <button type=\"submit\" title=\"";
            // line 556
            yield (((($tmp = (isset($context["is_favori"]) || array_key_exists("is_favori", $context) ? $context["is_favori"] : (function () { throw new RuntimeError('Variable "is_favori" does not exist.', 556, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Retirer des favoris") : ("Ajouter aux favoris"));
            yield "\"
                                class=\"w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center hover:scale-110 transition-transform\">
                            ";
            // line 558
            if ((($tmp = (isset($context["is_favori"]) || array_key_exists("is_favori", $context) ? $context["is_favori"] : (function () { throw new RuntimeError('Variable "is_favori" does not exist.', 558, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 559
                yield "                                <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                                </svg>
                            ";
            } else {
                // line 563
                yield "                                <svg class=\"w-5 h-5 text-gray-400\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                                </svg>
                            ";
            }
            // line 567
            yield "                        </button>
                    </form>
                    ";
        }
        // line 570
        yield "                </div>
                <p class=\"text-sm text-primary font-semibold\">";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 571, $this->source); })()), "marque_nom", [], "any", false, false, false, 571), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 571, $this->source); })()), "modele_nom", [], "any", false, false, false, 571), "html", null, true);
        yield "</p>
                <p class=\"text-xs text-tertiary mt-0.5 mb-1\">";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 572, $this->source); })()), "version_nom", [], "any", false, false, false, 572), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap gap-2 mt-2 mb-4\">
                    ";
        // line 574
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 574, $this->source); })()), "type_nom", [], "any", false, false, false, 574)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 575
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 575, $this->source); })()), "type_nom", [], "any", false, false, false, 575), "html", null, true);
            yield "</span>
                    ";
        }
        // line 577
        yield "                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 577, $this->source); })()), "annee_circulation", [], "any", false, false, false, 577), "html", null, true);
        yield "</span>
                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 578, $this->source); })()), "kilometrage", [], "any", false, false, false, 578), 0, ",", " "), "html", null, true);
        yield " km</span>
                    ";
        // line 579
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 579, $this->source); })()), "carburant", [], "any", false, false, false, 579)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 580
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 580, $this->source); })()), "carburant", [], "any", false, false, false, 580), "html", null, true);
            yield "</span>
                    ";
        }
        // line 582
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 582, $this->source); })()), "puissance_DIN", [], "any", false, false, false, 582)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 583
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 583, $this->source); })()), "puissance_DIN", [], "any", false, false, false, 583), "html", null, true);
            yield " ch</span>
                    ";
        }
        // line 585
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 585, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 585)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 586
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 586, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 586), "html", null, true);
            yield "</span>
                    ";
        }
        // line 588
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 588, $this->source); })()), "couleur", [], "any", false, false, false, 588)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 589
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 589, $this->source); })()), "couleur", [], "any", false, false, false, 589), "html", null, true);
            yield "</span>
                    ";
        }
        // line 591
        yield "                </div>

                <hr class=\"border-gray-100 mb-4\">

                <h3 class=\"font-semibold text-primary mb-2 text-sm\">Vendeur</h3>
                <p class=\"font-bold text-primary text-sm\">";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 596, $this->source); })()), "vendeur_prenom", [], "any", false, false, false, 596), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 596, $this->source); })()), "vendeur_nom", [], "any", false, false, false, 596), "html", null, true);
        yield "</p>
                ";
        // line 597
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 597, $this->source); })()), "vendeur_phone", [], "any", false, false, false, 597)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 598
            yield "                <p class=\"text-secondary text-sm mt-1 font-medium\">📞 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 598, $this->source); })()), "vendeur_phone", [], "any", false, false, false, 598), "html", null, true);
            yield "</p>
                ";
        }
        // line 600
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_vendeur", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 600, $this->source); })()), "vendeur_id", [], "any", false, false, false, 600)]), "html", null, true);
        yield "\"
                   class=\"inline-block mt-2 text-xs text-secondary hover:underline\">
                    Voir les avis du vendeur
                </a>

                ";
        // line 605
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 605, $this->source); })()), "user", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 606
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 606, $this->source); })()), "user", [], "any", false, false, false, 606), "id", [], "any", false, false, false, 606) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 606, $this->source); })()), "vendeur_id", [], "any", false, false, false, 606))) {
                // line 607
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_conversation", ["id_vendeur" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 607, $this->source); })()), "vendeur_id", [], "any", false, false, false, 607), "id_annonce" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 607, $this->source); })()), "id_annonce", [], "any", false, false, false, 607)]), "html", null, true);
                yield "\"
                       class=\"mt-4 block text-center py-3 bg-secondary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all text-sm\">
                        Contacter le vendeur
                    </a>
                    ";
            } else {
                // line 612
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 612, $this->source); })()), "id_annonce", [], "any", false, false, false, 612)]), "html", null, true);
                yield "\"
                       class=\"mt-4 block text-center py-2 border border-primary text-primary font-semibold rounded-lg hover:bg-primary hover:text-white transition-all text-sm\">
                        Modifier l'annonce
                    </a>
                    <form action=\"";
                // line 616
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 616, $this->source); })()), "id_annonce", [], "any", false, false, false, 616)]), "html", null, true);
                yield "\" method=\"post\" class=\"mt-2\">
                        <button type=\"submit\" onclick=\"return confirm('Supprimer cette annonce ?')\"
                                class=\"w-full py-2 border border-red-300 text-red-500 font-semibold rounded-lg hover:bg-red-50 transition-all text-sm\">
                            Supprimer
                        </button>
                    </form>
                    ";
            }
            // line 623
            yield "                ";
        } else {
            // line 624
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\"
                   class=\"mt-4 block text-center py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 transition-all text-sm\">
                    Se connecter pour contacter
                </a>
                ";
        }
        // line 629
        yield "
                ";
        // line 630
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 630, $this->source); })()), "date_publication", [], "any", false, false, false, 630)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 631
            yield "                <p class=\"text-xs text-tertiary mt-4 text-center\">Publiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 631, $this->source); })()), "date_publication", [], "any", false, false, false, 631), "d/m/Y"), "html", null, true);
            yield "</p>
                ";
        }
        // line 633
        yield "            </div>
        </div>

    </div>
</div>

";
        // line 639
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 639, $this->source); })())) > 1)) {
            // line 640
            yield "<script>
(function () {
    var photos = ";
            // line 642
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 642, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 642, $this->source); })()), "url_photo", [], "any", false, false, false, 642); }));
            yield ";
    var current = 0;
    var mainImg = document.getElementById('carousel-main');
    var counter = document.getElementById('carousel-counter');
    var prevBtn = document.getElementById('carousel-prev');
    var nextBtn = document.getElementById('carousel-next');
    var thumbs  = document.querySelectorAll('[data-thumb-index]');

    function goTo(index) {
        current = (index + photos.length) % photos.length;
        mainImg.src = photos[current];
        counter.textContent = (current + 1) + ' / ' + photos.length;
        thumbs.forEach(function(t) {
            t.style.outline = parseInt(t.dataset.thumbIndex) === current ? '2px solid #9d4300' : 'none';
        });
    }

    prevBtn.addEventListener('click', function() { goTo(current - 1); });
    nextBtn.addEventListener('click', function() { goTo(current + 1); });
    thumbs.forEach(function(t) {
        t.addEventListener('click', function() { goTo(parseInt(t.dataset.thumbIndex)); });
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft')  goTo(current - 1);
        if (e.key === 'ArrowRight') goTo(current + 1);
    });
})();
</script>
";
        }
        // line 671
        yield "<script>
(function () {
    var stars   = document.querySelectorAll('.star-btn-modele');
    var input   = document.getElementById('note-input-modele');
    if (!stars.length || !input) return;
    var current = 0;

    function paint(value) {
        stars.forEach(function (btn) {
            btn.classList.toggle('text-amber-400', parseInt(btn.dataset.value) <= value);
            btn.classList.toggle('text-gray-300',  parseInt(btn.dataset.value) >  value);
        });
    }

    stars.forEach(function (btn) {
        btn.addEventListener('mouseenter', function () { paint(parseInt(btn.dataset.value)); });
        btn.addEventListener('mouseleave', function () { paint(current); });
        btn.addEventListener('click', function () {
            current = parseInt(btn.dataset.value);
            input.value = current;
            paint(current);
        });
    });
})();
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
        return "annonce/detail.html.twig";
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
        return array (  1514 => 671,  1482 => 642,  1478 => 640,  1476 => 639,  1468 => 633,  1462 => 631,  1460 => 630,  1457 => 629,  1448 => 624,  1445 => 623,  1435 => 616,  1427 => 612,  1418 => 607,  1415 => 606,  1413 => 605,  1404 => 600,  1398 => 598,  1396 => 597,  1390 => 596,  1383 => 591,  1377 => 589,  1374 => 588,  1368 => 586,  1365 => 585,  1359 => 583,  1356 => 582,  1350 => 580,  1348 => 579,  1344 => 578,  1339 => 577,  1333 => 575,  1331 => 574,  1326 => 572,  1320 => 571,  1317 => 570,  1312 => 567,  1306 => 563,  1300 => 559,  1298 => 558,  1293 => 556,  1289 => 555,  1284 => 554,  1282 => 553,  1278 => 552,  1272 => 548,  1266 => 543,  1262 => 541,  1255 => 539,  1249 => 537,  1247 => 536,  1243 => 534,  1231 => 525,  1227 => 524,  1221 => 522,  1219 => 521,  1216 => 520,  1204 => 515,  1200 => 514,  1192 => 509,  1186 => 508,  1180 => 505,  1174 => 501,  1170 => 500,  1167 => 499,  1163 => 497,  1160 => 496,  1157 => 494,  1148 => 488,  1144 => 486,  1141 => 485,  1124 => 470,  1110 => 463,  1106 => 462,  1099 => 458,  1095 => 457,  1091 => 456,  1087 => 454,  1081 => 450,  1078 => 449,  1075 => 448,  1072 => 446,  1063 => 444,  1058 => 443,  1049 => 441,  1044 => 440,  1040 => 437,  1034 => 434,  1030 => 433,  1027 => 432,  1015 => 427,  1011 => 426,  1007 => 424,  1005 => 423,  998 => 421,  992 => 417,  989 => 415,  983 => 412,  976 => 407,  973 => 406,  968 => 402,  962 => 399,  958 => 397,  956 => 396,  951 => 394,  947 => 392,  936 => 389,  932 => 387,  929 => 386,  923 => 383,  919 => 381,  917 => 380,  912 => 378,  900 => 374,  890 => 366,  887 => 364,  882 => 361,  876 => 358,  872 => 356,  869 => 355,  863 => 352,  859 => 350,  856 => 349,  850 => 346,  846 => 344,  843 => 343,  837 => 340,  833 => 338,  830 => 337,  824 => 334,  820 => 332,  818 => 331,  810 => 325,  807 => 324,  804 => 322,  799 => 319,  793 => 316,  789 => 314,  786 => 313,  780 => 310,  776 => 308,  773 => 307,  767 => 304,  763 => 302,  760 => 301,  754 => 298,  750 => 296,  748 => 295,  740 => 289,  737 => 288,  734 => 286,  729 => 283,  722 => 279,  717 => 278,  712 => 277,  708 => 276,  704 => 275,  700 => 274,  695 => 271,  692 => 270,  686 => 267,  682 => 265,  679 => 264,  673 => 261,  669 => 259,  666 => 258,  660 => 255,  656 => 253,  653 => 252,  647 => 249,  643 => 247,  640 => 246,  634 => 243,  630 => 241,  628 => 240,  620 => 234,  617 => 233,  614 => 231,  609 => 228,  603 => 225,  599 => 223,  596 => 222,  590 => 219,  586 => 217,  583 => 216,  577 => 213,  573 => 211,  570 => 210,  564 => 207,  560 => 205,  557 => 204,  551 => 201,  547 => 199,  544 => 198,  538 => 195,  534 => 193,  531 => 192,  525 => 189,  521 => 187,  518 => 186,  507 => 183,  503 => 181,  500 => 180,  494 => 177,  490 => 175,  487 => 174,  481 => 171,  477 => 169,  474 => 168,  462 => 165,  458 => 163,  455 => 162,  449 => 159,  445 => 157,  442 => 156,  436 => 153,  432 => 151,  429 => 150,  417 => 147,  413 => 145,  411 => 144,  403 => 138,  400 => 137,  395 => 133,  389 => 130,  385 => 128,  382 => 127,  376 => 124,  372 => 122,  369 => 121,  363 => 118,  359 => 116,  356 => 115,  350 => 112,  346 => 110,  344 => 109,  339 => 107,  335 => 105,  329 => 102,  325 => 100,  322 => 99,  316 => 96,  312 => 94,  309 => 93,  303 => 90,  299 => 88,  296 => 87,  290 => 84,  286 => 82,  284 => 81,  279 => 79,  272 => 75,  262 => 67,  259 => 65,  253 => 61,  250 => 60,  246 => 58,  229 => 55,  218 => 54,  201 => 53,  198 => 52,  196 => 51,  193 => 50,  188 => 48,  180 => 42,  178 => 41,  170 => 38,  166 => 37,  162 => 35,  159 => 34,  155 => 31,  145 => 25,  139 => 23,  132 => 20,  130 => 19,  125 => 17,  122 => 16,  119 => 14,  110 => 12,  105 => 11,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block pageTitle %}{{ annonce.marque_nom }} {{ annonce.modele_nom }} — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-8\">

    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('warning') %}
        <div class=\"bg-amber-50 border border-amber-200 text-amber-800 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}

    {# Breadcrumb #}
    <nav class=\"text-sm text-tertiary mb-6 flex items-center gap-2\">
        <a href=\"{{ path('annonces') }}\" class=\"hover:text-secondary\">Annonces</a>
        <span>/</span>
        {% if annonce.type_nom %}
            <span>{{ annonce.type_nom }}</span>
            <span>/</span>
        {% endif %}
        <span>{{ annonce.marque_nom }}</span>
        <span>/</span>
        <span class=\"text-primary font-medium\">{{ annonce.modele_nom }} {{ annonce.version_nom }}</span>
    </nav>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">

        {# ── Colonne gauche : photos + toutes les données ── #}
        <div class=\"lg:col-span-2 space-y-6\">

            {# Carrousel photos #}
            {% if photos is not empty %}
            <div class=\"relative\">
                <div class=\"aspect-[16/9] bg-gray-100 rounded-xl overflow-hidden\">
                    <img id=\"carousel-main\" src=\"{{ photos[0].url_photo }}\"
                         alt=\"{{ annonce.marque_nom }} {{ annonce.modele_nom }}\"
                         class=\"w-full h-full object-cover\">
                </div>
                {% if photos|length > 1 %}
                <button id=\"carousel-prev\" class=\"absolute left-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 19l-7-7 7-7\"/></svg>
                </button>
                <button id=\"carousel-next\" class=\"absolute right-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/></svg>
                </button>
                <div class=\"absolute bottom-3 left-1/2 -translate-x-1/2 bg-black bg-opacity-50 text-white text-xs px-3 py-1 rounded-full\" id=\"carousel-counter\">1 / {{ photos|length }}</div>
                {% endif %}
            </div>
            {% if photos|length > 1 %}
            <div class=\"grid grid-cols-5 gap-2\">
                {% for photo in photos %}
                <div class=\"aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer ring-2 {% if loop.first %}ring-secondary{% else %}ring-transparent{% endif %} hover:ring-secondary transition-all\" data-thumb-index=\"{{ loop.index0 }}\">
                    <img src=\"{{ photo.url_photo }}\" class=\"w-full h-full object-cover hover:opacity-80 transition-opacity\">
                </div>
                {% endfor %}
            </div>
            {% endif %}
            {% else %}
            <div class=\"aspect-[16/9] bg-gray-100 rounded-xl flex items-center justify-center text-gray-300\">
                <svg class=\"w-24 h-24\" fill=\"currentColor\" viewBox=\"0 0 24 24\"><path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/></svg>
            </div>
            {% endif %}

            {# ── Section : Informations annonce ── #}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Informations de l'annonce
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Année</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.annee_circulation }}</p>
                    </div>
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Kilométrage</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.kilometrage|number_format(0, ',', ' ') }} km</p>
                    </div>
                    {% if annonce.etat %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">État</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.etat }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.couleur %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Couleur</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.couleur }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.sellerie %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Sellerie</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.sellerie }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.finition %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Finition</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.finition }}</p>
                    </div>
                    {% endif %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Première main</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.premiere_main ? 'Oui' : 'Non' }}</p>
                    </div>
                    {% if annonce.nombre_proprietaire %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Nb propriétaires</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.nombre_proprietaire }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.controle_technique %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Contrôle technique</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.controle_technique|date('d/m/Y') }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.provenance %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Provenance</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.provenance }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.localisation %}
                    <div class=\"col-span-2 md:col-span-1\">
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Localisation</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.localisation }}</p>
                    </div>
                    {% endif %}
                </div>
            </div>

            {# ── Section : Motorisation ── #}
            {% if annonce.puissance_DIN or annonce.cylindree or annonce.carburant or annonce.transmission or annonce.boite_vitesse or annonce.nombre_rapport or annonce.nombre_places or annonce.nombre_portes or annonce.vitesse_max or annonce.coffre_volume %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Motorisation & carrosserie
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    {% if annonce.puissance_DIN %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Puissance</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.puissance_DIN }} ch{% if annonce.puissance_fiscale %} ({{ annonce.puissance_fiscale }} CV){% endif %}</p>
                    </div>
                    {% endif %}
                    {% if annonce.couple_cumul %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Couple</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.couple_cumul }} Nm</p>
                    </div>
                    {% endif %}
                    {% if annonce.cylindree %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Cylindrée</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.cylindree }} cm³</p>
                    </div>
                    {% endif %}
                    {% if annonce.nombre_cylindre %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Cylindres</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.nombre_cylindre }} cyl.{% if annonce.nombre_soupapes_cyclindre %} × {{ annonce.nombre_soupapes_cyclindre }} soupapes{% endif %}</p>
                    </div>
                    {% endif %}
                    {% if annonce.alimentation %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Alimentation</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.alimentation }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.type_suralimentation %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suralimentation</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.type_suralimentation }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.carburant %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Carburant</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.carburant }}{% if annonce.reservoir_volume %} — {{ annonce.reservoir_volume }} L{% endif %}</p>
                    </div>
                    {% endif %}
                    {% if annonce.transmission %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Transmission</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.transmission }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.boite_vitesse %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Boîte de vitesse</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.boite_vitesse }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.nombre_rapport %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Rapports</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.nombre_rapport }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.vitesse_max %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Vitesse max</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.vitesse_max }} km/h</p>
                    </div>
                    {% endif %}
                    {% if annonce.nombre_places %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Places</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.nombre_places }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.nombre_portes %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Portes</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.nombre_portes }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.coffre_volume %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Volume coffre</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.coffre_volume }} L</p>
                    </div>
                    {% endif %}
                </div>
            </div>
            {% endif %}

            {# ── Section : Consommation & émissions ── #}
            {% if annonce.consommation_urbaine or annonce.consommation_extra_urbaine or annonce.consomation_mixte or annonce.emission_CO2 or annonce.Norme_euro or (annonce.Crit_air is not null and annonce.Crit_air != '') %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Consommation & émissions
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    {% if annonce.consommation_urbaine %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Urbain</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.consommation_urbaine }} L/100 km</p>
                    </div>
                    {% endif %}
                    {% if annonce.consommation_extra_urbaine %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Extra-urbain</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.consommation_extra_urbaine }} L/100 km</p>
                    </div>
                    {% endif %}
                    {% if annonce.consomation_mixte %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Mixte</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.consomation_mixte }} L/100 km</p>
                    </div>
                    {% endif %}
                    {% if annonce.emission_CO2 %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Émissions CO₂</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.emission_CO2 }} g/km</p>
                    </div>
                    {% endif %}
                    {% if annonce.Norme_euro %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Norme Euro</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.Norme_euro }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.Crit_air is not null and annonce.Crit_air != '' %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Crit'Air</p>
                        <span class=\"inline-block font-bold text-white px-3 py-1 rounded text-sm
                            {% if annonce.Crit_air == 0 %}bg-green-600
                            {% elseif annonce.Crit_air == 1 %}bg-green-500
                            {% elseif annonce.Crit_air == 2 %}bg-yellow-500
                            {% elseif annonce.Crit_air == 3 %}bg-orange-500
                            {% else %}bg-red-500{% endif %}\">
                            {{ annonce.Crit_air }}
                        </span>
                    </div>
                    {% endif %}
                </div>
            </div>
            {% endif %}

            {# ── Section : Dimensions & poids ── #}
            {% if annonce.largeur_sans_retros or annonce.hauteur or annonce.empattement or annonce.poids_vide %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Dimensions & poids
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-4 gap-y-4 gap-x-6 text-sm\">
                    {% if annonce.largeur_sans_retros %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Largeur</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.largeur_sans_retros }} mm</p>
                    </div>
                    {% endif %}
                    {% if annonce.hauteur %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Hauteur</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.hauteur }} mm</p>
                    </div>
                    {% endif %}
                    {% if annonce.empattement %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Empattement</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.empattement }} mm</p>
                    </div>
                    {% endif %}
                    {% if annonce.poids_vide %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Poids à vide</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.poids_vide }} kg</p>
                    </div>
                    {% endif %}
                </div>
            </div>
            {% endif %}

            {# ── Section : Châssis ── #}
            {% if annonce.suspension_avant or annonce.suspension_arriere or annonce.freins_avant or annonce.freins_arriere or annonce.diametre_braquage %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Châssis & freinage
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    {% if annonce.suspension_avant %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suspension avant</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.suspension_avant }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.suspension_arriere %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suspension arrière</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.suspension_arriere }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.freins_avant %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Freins avant</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.freins_avant }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.freins_arriere %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Freins arrière</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.freins_arriere }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.diametre_braquage %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Diamètre de braquage</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.diametre_braquage }} m</p>
                    </div>
                    {% endif %}
                </div>
            </div>
            {% endif %}

            {# ── Section : Fiche modèle ── #}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Fiche modèle
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Marque</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.marque_nom }}{% if annonce.marque_pays %} ({{ annonce.marque_pays }}){% endif %}</p>
                    </div>
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Modèle</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.modele_nom }}</p>
                    </div>
                    {% if annonce.type_nom %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Type de carrosserie</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.type_nom }}</p>
                    </div>
                    {% endif %}
                    {% if annonce.generation_nom %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Génération</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.generation_nom }}{% if annonce.generation_date_sortie %} ({{ annonce.generation_date_sortie|date('Y') }}){% endif %}</p>
                    </div>
                    {% endif %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Version</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.version_nom }}</p>
                    </div>
                    {% if annonce.modele_annee %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Commercialisé depuis</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.modele_annee }}</p>
                    </div>
                    {% endif %}
                </div>
            </div>

            {# ── Description libre ── #}
            {% if annonce.description %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-3 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Description du vendeur
                </h2>
                <p class=\"text-tertiary text-sm leading-relaxed whitespace-pre-wrap\">{{ annonce.description }}</p>
            </div>
            {% endif %}

            {# ── Avis sur le modèle ── #}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h2 class=\"font-bold text-primary text-base font-['ManRope'] flex items-center gap-2\">
                        <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                        Avis sur le {{ annonce.marque_nom }} {{ annonce.modele_nom }}
                    </h2>
                    {% if stats_modele.nb_avis > 0 %}
                    <div class=\"flex items-center gap-2\">
                        <div class=\"flex gap-0.5\">
                            {% for i in 1..5 %}
                                <svg class=\"w-4 h-4 {{ i <= stats_modele.note_moyenne|round ? 'text-amber-400' : 'text-gray-200' }}\"
                                     fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                            {% endfor %}
                        </div>
                        <span class=\"text-sm font-bold text-primary\">{{ stats_modele.note_moyenne }}</span>
                        <span class=\"text-xs text-tertiary\">({{ stats_modele.nb_avis }} avis)</span>
                    </div>
                    {% endif %}
                </div>

                {# Flashes avis modèle #}
                {% for msg in app.flashes('success') %}
                    <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
                {% endfor %}
                {% for msg in app.flashes('error') %}
                    <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm\">{{ msg }}</div>
                {% endfor %}

                {# Formulaire #}
                {% if app.user %}
                    {% if deja_note %}
                        <div class=\"bg-amber-50 border border-amber-200 rounded-xl p-4 mb-5 text-sm text-amber-800 text-center\">
                            Vous avez déjà laissé un avis pour ce modèle.
                        </div>
                    {% else %}
                        <div class=\"border border-gray-100 rounded-xl p-5 mb-6 bg-gray-50\">
                            <p class=\"text-sm font-semibold text-primary mb-3\">Votre avis</p>
                            <form method=\"post\" action=\"{{ path('avis_modele_ajouter', {id_annonce: annonce.id_annonce}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('avis_modele_' ~ annonce.id_annonce) }}\">
                                <input type=\"hidden\" name=\"id_modele\" value=\"{{ annonce.id_modele }}\">

                                <div class=\"mb-3\">
                                    <div class=\"flex gap-1\" id=\"star-selector-modele\">
                                        {% for i in 1..5 %}
                                            <button type=\"button\" data-value=\"{{ i }}\"
                                                    class=\"star-btn-modele w-8 h-8 text-gray-300 hover:text-amber-400 transition-colors\">
                                                <svg fill=\"currentColor\" viewBox=\"0 0 24 24\" class=\"w-full h-full\">
                                                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                                </svg>
                                            </button>
                                        {% endfor %}
                                    </div>
                                    <input type=\"hidden\" name=\"note\" id=\"note-input-modele\" value=\"0\">
                                </div>

                                <textarea name=\"contenu\" rows=\"3\" maxlength=\"2000\"
                                          placeholder=\"Partagez votre expérience avec ce modèle...\"
                                          class=\"w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-primary resize-none focus:outline-none focus:ring-2 focus:ring-secondary/30 focus:border-secondary mb-3\"></textarea>

                                <button type=\"submit\"
                                        class=\"px-5 py-2 bg-secondary text-white font-bold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm\">
                                    Publier
                                </button>
                            </form>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"border border-gray-100 rounded-xl p-4 mb-5 flex items-center justify-between gap-4 bg-gray-50\">
                        <p class=\"text-sm text-tertiary\">Connectez-vous pour laisser un avis sur ce modèle.</p>
                        <a href=\"{{ path('connexion') }}\"
                           class=\"shrink-0 px-4 py-2 bg-primary text-white font-bold rounded-lg text-sm hover:bg-primary/90 transition-all\">
                            Se connecter
                        </a>
                    </div>
                {% endif %}

                {# Liste des avis #}
                {% if avis_modele is empty %}
                    <p class=\"text-sm text-tertiary text-center py-6\">Aucun avis pour ce modèle. Soyez le premier !</p>
                {% else %}
                    <div class=\"space-y-4\">
                        {% for a in avis_modele %}
                        <div class=\"border-t border-gray-50 pt-4 first:border-t-0 first:pt-0\">
                            <div class=\"flex items-start justify-between gap-3\">
                                <div class=\"flex items-center gap-3\">
                                    <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center shrink-0\">
                                        <span class=\"text-xs font-bold text-primary\">{{ a.redacteur_prenom|first|upper }}</span>
                                    </div>
                                    <div>
                                        <p class=\"font-semibold text-primary text-sm\">{{ a.redacteur_prenom }} {{ a.redacteur_nom }}</p>
                                        <p class=\"text-[11px] text-tertiary\">{{ a.date_avis|date('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class=\"flex items-center gap-2\">
                                    <div class=\"flex gap-0.5\">
                                        {% for i in 1..5 %}
                                            <svg class=\"w-3.5 h-3.5 {{ i <= a.note ? 'text-amber-400' : 'text-gray-200' }}\"
                                                 fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                            </svg>
                                        {% endfor %}
                                    </div>
                                    {% if app.user and (app.user.id == a.redacteur_id or is_granted('ROLE_ADMIN')) %}
                                        <form method=\"post\" action=\"{{ path('avis_modele_supprimer', {id: a.id_avis_modele}) }}\"
                                              onsubmit=\"return confirm('Supprimer cet avis ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('avis_modele_supprimer_' ~ a.id_avis_modele) }}\">
                                            <input type=\"hidden\" name=\"id_annonce\" value=\"{{ annonce.id_annonce }}\">
                                            <button type=\"submit\" title=\"Supprimer\"
                                                    class=\"text-gray-300 hover:text-red-500 transition-colors\">
                                                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"/>
                                                </svg>
                                            </button>
                                        </form>
                                    {% endif %}
                                </div>
                            </div>
                            {% if a.contenu %}
                                <p class=\"mt-2 text-sm text-tertiary leading-relaxed pl-11\">{{ a.contenu }}</p>
                            {% endif %}
                        </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>

        </div>

        {# ── Colonne droite : prix + vendeur ── #}
        <div class=\"space-y-4\">
            <div class=\"bg-white rounded-xl p-6 shadow-sm sticky top-4\">

                <div class=\"flex items-center justify-between mb-1\">
                    <p class=\"text-3xl font-bold text-secondary\">{{ annonce.prix|number_format(0, ',', ' ') }} €</p>
                    {% if app.user and app.user.id != annonce.vendeur_id %}
                    <form method=\"post\" action=\"{{ path('favori_toggle', {id: annonce.id_annonce}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('favori') }}\">
                        <button type=\"submit\" title=\"{{ is_favori ? 'Retirer des favoris' : 'Ajouter aux favoris' }}\"
                                class=\"w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center hover:scale-110 transition-transform\">
                            {% if is_favori %}
                                <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                                </svg>
                            {% else %}
                                <svg class=\"w-5 h-5 text-gray-400\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                                </svg>
                            {% endif %}
                        </button>
                    </form>
                    {% endif %}
                </div>
                <p class=\"text-sm text-primary font-semibold\">{{ annonce.marque_nom }} {{ annonce.modele_nom }}</p>
                <p class=\"text-xs text-tertiary mt-0.5 mb-1\">{{ annonce.version_nom }}</p>
                <div class=\"flex flex-wrap gap-2 mt-2 mb-4\">
                    {% if annonce.type_nom %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.type_nom }}</span>
                    {% endif %}
                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.annee_circulation }}</span>
                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.kilometrage|number_format(0, ',', ' ') }} km</span>
                    {% if annonce.carburant %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.carburant }}</span>
                    {% endif %}
                    {% if annonce.puissance_DIN %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.puissance_DIN }} ch</span>
                    {% endif %}
                    {% if annonce.boite_vitesse %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.boite_vitesse }}</span>
                    {% endif %}
                    {% if annonce.couleur %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.couleur }}</span>
                    {% endif %}
                </div>

                <hr class=\"border-gray-100 mb-4\">

                <h3 class=\"font-semibold text-primary mb-2 text-sm\">Vendeur</h3>
                <p class=\"font-bold text-primary text-sm\">{{ annonce.vendeur_prenom }} {{ annonce.vendeur_nom }}</p>
                {% if annonce.vendeur_phone %}
                <p class=\"text-secondary text-sm mt-1 font-medium\">📞 {{ annonce.vendeur_phone }}</p>
                {% endif %}
                <a href=\"{{ path('avis_vendeur', {id: annonce.vendeur_id}) }}\"
                   class=\"inline-block mt-2 text-xs text-secondary hover:underline\">
                    Voir les avis du vendeur
                </a>

                {% if app.user %}
                    {% if app.user.id != annonce.vendeur_id %}
                    <a href=\"{{ path('messagerie_conversation', {id_vendeur: annonce.vendeur_id, id_annonce: annonce.id_annonce}) }}\"
                       class=\"mt-4 block text-center py-3 bg-secondary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all text-sm\">
                        Contacter le vendeur
                    </a>
                    {% else %}
                    <a href=\"{{ path('annonce_modifier', {id: annonce.id_annonce}) }}\"
                       class=\"mt-4 block text-center py-2 border border-primary text-primary font-semibold rounded-lg hover:bg-primary hover:text-white transition-all text-sm\">
                        Modifier l'annonce
                    </a>
                    <form action=\"{{ path('annonce_supprimer', {id: annonce.id_annonce}) }}\" method=\"post\" class=\"mt-2\">
                        <button type=\"submit\" onclick=\"return confirm('Supprimer cette annonce ?')\"
                                class=\"w-full py-2 border border-red-300 text-red-500 font-semibold rounded-lg hover:bg-red-50 transition-all text-sm\">
                            Supprimer
                        </button>
                    </form>
                    {% endif %}
                {% else %}
                <a href=\"{{ path('connexion') }}\"
                   class=\"mt-4 block text-center py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 transition-all text-sm\">
                    Se connecter pour contacter
                </a>
                {% endif %}

                {% if annonce.date_publication %}
                <p class=\"text-xs text-tertiary mt-4 text-center\">Publiée le {{ annonce.date_publication|date('d/m/Y') }}</p>
                {% endif %}
            </div>
        </div>

    </div>
</div>

{% if photos|length > 1 %}
<script>
(function () {
    var photos = {{ photos|map(p => p.url_photo)|json_encode|raw }};
    var current = 0;
    var mainImg = document.getElementById('carousel-main');
    var counter = document.getElementById('carousel-counter');
    var prevBtn = document.getElementById('carousel-prev');
    var nextBtn = document.getElementById('carousel-next');
    var thumbs  = document.querySelectorAll('[data-thumb-index]');

    function goTo(index) {
        current = (index + photos.length) % photos.length;
        mainImg.src = photos[current];
        counter.textContent = (current + 1) + ' / ' + photos.length;
        thumbs.forEach(function(t) {
            t.style.outline = parseInt(t.dataset.thumbIndex) === current ? '2px solid #9d4300' : 'none';
        });
    }

    prevBtn.addEventListener('click', function() { goTo(current - 1); });
    nextBtn.addEventListener('click', function() { goTo(current + 1); });
    thumbs.forEach(function(t) {
        t.addEventListener('click', function() { goTo(parseInt(t.dataset.thumbIndex)); });
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft')  goTo(current - 1);
        if (e.key === 'ArrowRight') goTo(current + 1);
    });
})();
</script>
{% endif %}
<script>
(function () {
    var stars   = document.querySelectorAll('.star-btn-modele');
    var input   = document.getElementById('note-input-modele');
    if (!stars.length || !input) return;
    var current = 0;

    function paint(value) {
        stars.forEach(function (btn) {
            btn.classList.toggle('text-amber-400', parseInt(btn.dataset.value) <= value);
            btn.classList.toggle('text-gray-300',  parseInt(btn.dataset.value) >  value);
        });
    }

    stars.forEach(function (btn) {
        btn.addEventListener('mouseenter', function () { paint(parseInt(btn.dataset.value)); });
        btn.addEventListener('mouseleave', function () { paint(current); });
        btn.addEventListener('click', function () {
            current = parseInt(btn.dataset.value);
            input.value = current;
            paint(current);
        });
    });
})();
</script>
{% endblock %}
", "annonce/detail.html.twig", "C:\\projets\\Projet_WE4A\\templates\\annonce\\detail.html.twig");
    }
}
