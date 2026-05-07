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
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "transmission", [], "any", false, false, false, 137) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "nombre_rapport", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "nombre_places", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "nombre_portes", [], "any", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 137, $this->source); })()), "vitesse_max", [], "any", false, false, false, 137))) {
            // line 138
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Motorisation & carrosserie
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 144, $this->source); })()), "transmission", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Transmission</p>
                        <p class=\"font-semibold text-primary\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 147, $this->source); })()), "transmission", [], "any", false, false, false, 147), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 150
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 150, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Boîte de vitesse</p>
                        <p class=\"font-semibold text-primary\">";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 153, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 153), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 156
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 156, $this->source); })()), "nombre_rapport", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 157
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Nombre de rapports</p>
                        <p class=\"font-semibold text-primary\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 159, $this->source); })()), "nombre_rapport", [], "any", false, false, false, 159), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 162
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 162, $this->source); })()), "nombre_places", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Places</p>
                        <p class=\"font-semibold text-primary\">";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 165, $this->source); })()), "nombre_places", [], "any", false, false, false, 165), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 168
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 168, $this->source); })()), "nombre_portes", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Portes</p>
                        <p class=\"font-semibold text-primary\">";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 171, $this->source); })()), "nombre_portes", [], "any", false, false, false, 171), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 174
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 174, $this->source); })()), "vitesse_max", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 175
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Vitesse max</p>
                        <p class=\"font-semibold text-primary\">";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 177, $this->source); })()), "vitesse_max", [], "any", false, false, false, 177), "html", null, true);
                yield " km/h</p>
                    </div>
                    ";
            }
            // line 180
            yield "                </div>
            </div>
            ";
        }
        // line 183
        yield "
            ";
        // line 185
        yield "            ";
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 185, $this->source); })()), "consommation_urbaine", [], "any", false, false, false, 185) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 185, $this->source); })()), "consommation_extra_urbaine", [], "any", false, false, false, 185)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 185, $this->source); })()), "consomation_mixte", [], "any", false, false, false, 185)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 185, $this->source); })()), "emission_CO2", [], "any", false, false, false, 185)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 185, $this->source); })()), "Norme_euro", [], "any", false, false, false, 185)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 185, $this->source); })()), "Crit_air", [], "any", false, false, false, 185)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 185, $this->source); })()), "Crit_air", [], "any", false, false, false, 185) != "")))) {
            // line 186
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Consommation & émissions
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 192
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 192, $this->source); })()), "consommation_urbaine", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Urbain</p>
                        <p class=\"font-semibold text-primary\">";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 195, $this->source); })()), "consommation_urbaine", [], "any", false, false, false, 195), "html", null, true);
                yield " L/100 km</p>
                    </div>
                    ";
            }
            // line 198
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 198, $this->source); })()), "consommation_extra_urbaine", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 199
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Extra-urbain</p>
                        <p class=\"font-semibold text-primary\">";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 201, $this->source); })()), "consommation_extra_urbaine", [], "any", false, false, false, 201), "html", null, true);
                yield " L/100 km</p>
                    </div>
                    ";
            }
            // line 204
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 204, $this->source); })()), "consomation_mixte", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Mixte</p>
                        <p class=\"font-semibold text-primary\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 207, $this->source); })()), "consomation_mixte", [], "any", false, false, false, 207), "html", null, true);
                yield " L/100 km</p>
                    </div>
                    ";
            }
            // line 210
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 210, $this->source); })()), "emission_CO2", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 211
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Émissions CO₂</p>
                        <p class=\"font-semibold text-primary\">";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 213, $this->source); })()), "emission_CO2", [], "any", false, false, false, 213), "html", null, true);
                yield " g/km</p>
                    </div>
                    ";
            }
            // line 216
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 216, $this->source); })()), "Norme_euro", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 217
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Norme Euro</p>
                        <p class=\"font-semibold text-primary\">";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 219, $this->source); })()), "Norme_euro", [], "any", false, false, false, 219), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 222
            yield "                    ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 222, $this->source); })()), "Crit_air", [], "any", false, false, false, 222)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 222, $this->source); })()), "Crit_air", [], "any", false, false, false, 222) != ""))) {
                // line 223
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Crit'Air</p>
                        <span class=\"inline-block font-bold text-white px-3 py-1 rounded text-sm
                            ";
                // line 226
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 226, $this->source); })()), "Crit_air", [], "any", false, false, false, 226) == 0)) {
                    yield "bg-green-600
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 227
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 227, $this->source); })()), "Crit_air", [], "any", false, false, false, 227) == 1)) {
                    yield "bg-green-500
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 228
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 228, $this->source); })()), "Crit_air", [], "any", false, false, false, 228) == 2)) {
                    yield "bg-yellow-500
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 229
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 229, $this->source); })()), "Crit_air", [], "any", false, false, false, 229) == 3)) {
                    yield "bg-orange-500
                            ";
                } else {
                    // line 230
                    yield "bg-red-500";
                }
                yield "\">
                            ";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 231, $this->source); })()), "Crit_air", [], "any", false, false, false, 231), "html", null, true);
                yield "
                        </span>
                    </div>
                    ";
            }
            // line 235
            yield "                </div>
            </div>
            ";
        }
        // line 238
        yield "
            ";
        // line 240
        yield "            ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 240, $this->source); })()), "largeur_sans_retros", [], "any", false, false, false, 240) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 240, $this->source); })()), "hauteur", [], "any", false, false, false, 240)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 240, $this->source); })()), "empattement", [], "any", false, false, false, 240)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 240, $this->source); })()), "poids_vide", [], "any", false, false, false, 240))) {
            // line 241
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Dimensions & poids
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-4 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 247
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 247, $this->source); })()), "largeur_sans_retros", [], "any", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 248
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Largeur</p>
                        <p class=\"font-semibold text-primary\">";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 250, $this->source); })()), "largeur_sans_retros", [], "any", false, false, false, 250), "html", null, true);
                yield " mm</p>
                    </div>
                    ";
            }
            // line 253
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 253, $this->source); })()), "hauteur", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 254
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Hauteur</p>
                        <p class=\"font-semibold text-primary\">";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 256, $this->source); })()), "hauteur", [], "any", false, false, false, 256), "html", null, true);
                yield " mm</p>
                    </div>
                    ";
            }
            // line 259
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 259, $this->source); })()), "empattement", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 260
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Empattement</p>
                        <p class=\"font-semibold text-primary\">";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 262, $this->source); })()), "empattement", [], "any", false, false, false, 262), "html", null, true);
                yield " mm</p>
                    </div>
                    ";
            }
            // line 265
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 265, $this->source); })()), "poids_vide", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 266
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Poids à vide</p>
                        <p class=\"font-semibold text-primary\">";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 268, $this->source); })()), "poids_vide", [], "any", false, false, false, 268), "html", null, true);
                yield " kg</p>
                    </div>
                    ";
            }
            // line 271
            yield "                </div>
            </div>
            ";
        }
        // line 274
        yield "
            ";
        // line 276
        yield "            ";
        if (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 276, $this->source); })()), "suspension_avant", [], "any", false, false, false, 276) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 276, $this->source); })()), "suspension_arriere", [], "any", false, false, false, 276)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 276, $this->source); })()), "freins_avant", [], "any", false, false, false, 276)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 276, $this->source); })()), "freins_arriere", [], "any", false, false, false, 276)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 276, $this->source); })()), "diametre_braquage", [], "any", false, false, false, 276))) {
            // line 277
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Châssis & freinage
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    ";
            // line 283
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 283, $this->source); })()), "suspension_avant", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 284
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suspension avant</p>
                        <p class=\"font-semibold text-primary\">";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 286, $this->source); })()), "suspension_avant", [], "any", false, false, false, 286), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 289
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 289, $this->source); })()), "suspension_arriere", [], "any", false, false, false, 289)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 290
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Suspension arrière</p>
                        <p class=\"font-semibold text-primary\">";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 292, $this->source); })()), "suspension_arriere", [], "any", false, false, false, 292), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 295
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 295, $this->source); })()), "freins_avant", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 296
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Freins avant</p>
                        <p class=\"font-semibold text-primary\">";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 298, $this->source); })()), "freins_avant", [], "any", false, false, false, 298), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 301
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 301, $this->source); })()), "freins_arriere", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 302
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Freins arrière</p>
                        <p class=\"font-semibold text-primary\">";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 304, $this->source); })()), "freins_arriere", [], "any", false, false, false, 304), "html", null, true);
                yield "</p>
                    </div>
                    ";
            }
            // line 307
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 307, $this->source); })()), "diametre_braquage", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 308
                yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Diamètre de braquage</p>
                        <p class=\"font-semibold text-primary\">";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 310, $this->source); })()), "diametre_braquage", [], "any", false, false, false, 310), "html", null, true);
                yield " m</p>
                    </div>
                    ";
            }
            // line 313
            yield "                </div>
            </div>
            ";
        }
        // line 316
        yield "
            ";
        // line 318
        yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Fiche modèle
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Marque</p>
                        <p class=\"font-semibold text-primary\">";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 326, $this->source); })()), "marque_nom", [], "any", false, false, false, 326), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 326, $this->source); })()), "marque_pays", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 326, $this->source); })()), "marque_pays", [], "any", false, false, false, 326), "html", null, true);
            yield ")";
        }
        yield "</p>
                    </div>
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Modèle</p>
                        <p class=\"font-semibold text-primary\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 330, $this->source); })()), "modele_nom", [], "any", false, false, false, 330), "html", null, true);
        yield "</p>
                    </div>
                    ";
        // line 332
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 332, $this->source); })()), "type_nom", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 333
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Type de carrosserie</p>
                        <p class=\"font-semibold text-primary\">";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 335, $this->source); })()), "type_nom", [], "any", false, false, false, 335), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 338
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 338, $this->source); })()), "generation_nom", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 339
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Génération</p>
                        <p class=\"font-semibold text-primary\">";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 341, $this->source); })()), "generation_nom", [], "any", false, false, false, 341), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 341, $this->source); })()), "generation_date_sortie", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 341, $this->source); })()), "generation_date_sortie", [], "any", false, false, false, 341), "Y"), "html", null, true);
                yield ")";
            }
            yield "</p>
                    </div>
                    ";
        }
        // line 344
        yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Version</p>
                        <p class=\"font-semibold text-primary\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 346, $this->source); })()), "version_nom", [], "any", false, false, false, 346), "html", null, true);
        yield "</p>
                    </div>
                    ";
        // line 348
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 348, $this->source); })()), "modele_annee", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 349
            yield "                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Commercialisé depuis</p>
                        <p class=\"font-semibold text-primary\">";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 351, $this->source); })()), "modele_annee", [], "any", false, false, false, 351), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 354
        yield "                </div>
            </div>

            ";
        // line 358
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 358, $this->source); })()), "description", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 359
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-3 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Description du vendeur
                </h2>
                <p class=\"text-tertiary text-sm leading-relaxed whitespace-pre-wrap\">";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 364, $this->source); })()), "description", [], "any", false, false, false, 364), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 367
        yield "
        </div>

        ";
        // line 371
        yield "        <div class=\"space-y-4\">
            <div class=\"bg-white rounded-xl p-6 shadow-sm sticky top-4\">

                <p class=\"text-3xl font-bold text-secondary mb-1\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 374, $this->source); })()), "prix", [], "any", false, false, false, 374), 0, ",", " "), "html", null, true);
        yield " €</p>
                <p class=\"text-sm text-primary font-semibold\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 375, $this->source); })()), "marque_nom", [], "any", false, false, false, 375), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 375, $this->source); })()), "modele_nom", [], "any", false, false, false, 375), "html", null, true);
        yield "</p>
                <p class=\"text-xs text-tertiary mt-0.5 mb-1\">";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 376, $this->source); })()), "version_nom", [], "any", false, false, false, 376), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap gap-2 mt-2 mb-4\">
                    ";
        // line 378
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 378, $this->source); })()), "type_nom", [], "any", false, false, false, 378)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 379
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 379, $this->source); })()), "type_nom", [], "any", false, false, false, 379), "html", null, true);
            yield "</span>
                    ";
        }
        // line 381
        yield "                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 381, $this->source); })()), "annee_circulation", [], "any", false, false, false, 381), "html", null, true);
        yield "</span>
                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 382, $this->source); })()), "kilometrage", [], "any", false, false, false, 382), 0, ",", " "), "html", null, true);
        yield " km</span>
                    ";
        // line 383
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 383, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 384
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 384, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 384), "html", null, true);
            yield "</span>
                    ";
        }
        // line 386
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 386, $this->source); })()), "couleur", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 387
            yield "                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 387, $this->source); })()), "couleur", [], "any", false, false, false, 387), "html", null, true);
            yield "</span>
                    ";
        }
        // line 389
        yield "                </div>

                <hr class=\"border-gray-100 mb-4\">

                <h3 class=\"font-semibold text-primary mb-2 text-sm\">Vendeur</h3>
                <p class=\"font-bold text-primary text-sm\">";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 394, $this->source); })()), "vendeur_prenom", [], "any", false, false, false, 394), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 394, $this->source); })()), "vendeur_nom", [], "any", false, false, false, 394), "html", null, true);
        yield "</p>
                ";
        // line 395
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 395, $this->source); })()), "vendeur_phone", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 396
            yield "                <p class=\"text-secondary text-sm mt-1 font-medium\">📞 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 396, $this->source); })()), "vendeur_phone", [], "any", false, false, false, 396), "html", null, true);
            yield "</p>
                ";
        }
        // line 398
        yield "
                ";
        // line 399
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "user", [], "any", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 400
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 400, $this->source); })()), "user", [], "any", false, false, false, 400), "id", [], "any", false, false, false, 400) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 400, $this->source); })()), "vendeur_id", [], "any", false, false, false, 400))) {
                // line 401
                yield "                    <a href=\"mailto:\" class=\"mt-4 block text-center py-3 bg-secondary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all text-sm\">
                        Contacter le vendeur
                    </a>
                    ";
            } else {
                // line 405
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 405, $this->source); })()), "id_annonce", [], "any", false, false, false, 405)]), "html", null, true);
                yield "\"
                       class=\"mt-4 block text-center py-2 border border-primary text-primary font-semibold rounded-lg hover:bg-primary hover:text-white transition-all text-sm\">
                        Modifier l'annonce
                    </a>
                    <form action=\"";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 409, $this->source); })()), "id_annonce", [], "any", false, false, false, 409)]), "html", null, true);
                yield "\" method=\"post\" class=\"mt-2\">
                        <button type=\"submit\" onclick=\"return confirm('Supprimer cette annonce ?')\"
                                class=\"w-full py-2 border border-red-300 text-red-500 font-semibold rounded-lg hover:bg-red-50 transition-all text-sm\">
                            Supprimer
                        </button>
                    </form>
                    ";
            }
            // line 416
            yield "                ";
        } else {
            // line 417
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\"
                   class=\"mt-4 block text-center py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 transition-all text-sm\">
                    Se connecter pour contacter
                </a>
                ";
        }
        // line 422
        yield "
                ";
        // line 423
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 423, $this->source); })()), "date_publication", [], "any", false, false, false, 423)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 424
            yield "                <p class=\"text-xs text-tertiary mt-4 text-center\">Publiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 424, $this->source); })()), "date_publication", [], "any", false, false, false, 424), "d/m/Y"), "html", null, true);
            yield "</p>
                ";
        }
        // line 426
        yield "            </div>
        </div>

    </div>
</div>

";
        // line 432
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 432, $this->source); })())) > 1)) {
            // line 433
            yield "<script>
(function () {
    var photos = ";
            // line 435
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 435, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 435, $this->source); })()), "url_photo", [], "any", false, false, false, 435); }));
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
        return array (  1017 => 435,  1013 => 433,  1011 => 432,  1003 => 426,  997 => 424,  995 => 423,  992 => 422,  983 => 417,  980 => 416,  970 => 409,  962 => 405,  956 => 401,  953 => 400,  951 => 399,  948 => 398,  942 => 396,  940 => 395,  934 => 394,  927 => 389,  921 => 387,  918 => 386,  912 => 384,  910 => 383,  906 => 382,  901 => 381,  895 => 379,  893 => 378,  888 => 376,  882 => 375,  878 => 374,  873 => 371,  868 => 367,  862 => 364,  855 => 359,  852 => 358,  847 => 354,  841 => 351,  837 => 349,  835 => 348,  830 => 346,  826 => 344,  815 => 341,  811 => 339,  808 => 338,  802 => 335,  798 => 333,  796 => 332,  791 => 330,  779 => 326,  769 => 318,  766 => 316,  761 => 313,  755 => 310,  751 => 308,  748 => 307,  742 => 304,  738 => 302,  735 => 301,  729 => 298,  725 => 296,  722 => 295,  716 => 292,  712 => 290,  709 => 289,  703 => 286,  699 => 284,  697 => 283,  689 => 277,  686 => 276,  683 => 274,  678 => 271,  672 => 268,  668 => 266,  665 => 265,  659 => 262,  655 => 260,  652 => 259,  646 => 256,  642 => 254,  639 => 253,  633 => 250,  629 => 248,  627 => 247,  619 => 241,  616 => 240,  613 => 238,  608 => 235,  601 => 231,  596 => 230,  591 => 229,  587 => 228,  583 => 227,  579 => 226,  574 => 223,  571 => 222,  565 => 219,  561 => 217,  558 => 216,  552 => 213,  548 => 211,  545 => 210,  539 => 207,  535 => 205,  532 => 204,  526 => 201,  522 => 199,  519 => 198,  513 => 195,  509 => 193,  507 => 192,  499 => 186,  496 => 185,  493 => 183,  488 => 180,  482 => 177,  478 => 175,  475 => 174,  469 => 171,  465 => 169,  462 => 168,  456 => 165,  452 => 163,  449 => 162,  443 => 159,  439 => 157,  436 => 156,  430 => 153,  426 => 151,  423 => 150,  417 => 147,  413 => 145,  411 => 144,  403 => 138,  400 => 137,  395 => 133,  389 => 130,  385 => 128,  382 => 127,  376 => 124,  372 => 122,  369 => 121,  363 => 118,  359 => 116,  356 => 115,  350 => 112,  346 => 110,  344 => 109,  339 => 107,  335 => 105,  329 => 102,  325 => 100,  322 => 99,  316 => 96,  312 => 94,  309 => 93,  303 => 90,  299 => 88,  296 => 87,  290 => 84,  286 => 82,  284 => 81,  279 => 79,  272 => 75,  262 => 67,  259 => 65,  253 => 61,  250 => 60,  246 => 58,  229 => 55,  218 => 54,  201 => 53,  198 => 52,  196 => 51,  193 => 50,  188 => 48,  180 => 42,  178 => 41,  170 => 38,  166 => 37,  162 => 35,  159 => 34,  155 => 31,  145 => 25,  139 => 23,  132 => 20,  130 => 19,  125 => 17,  122 => 16,  119 => 14,  110 => 12,  105 => 11,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  58 => 3,  41 => 1,);
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
            {% if annonce.transmission or annonce.boite_vitesse or annonce.nombre_rapport or annonce.nombre_places or annonce.nombre_portes or annonce.vitesse_max %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Motorisation & carrosserie
                </h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 text-sm\">
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
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Nombre de rapports</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.nombre_rapport }}</p>
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
                    {% if annonce.vitesse_max %}
                    <div>
                        <p class=\"text-[11px] text-tertiary uppercase tracking-wide mb-0.5\">Vitesse max</p>
                        <p class=\"font-semibold text-primary\">{{ annonce.vitesse_max }} km/h</p>
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

        </div>

        {# ── Colonne droite : prix + vendeur ── #}
        <div class=\"space-y-4\">
            <div class=\"bg-white rounded-xl p-6 shadow-sm sticky top-4\">

                <p class=\"text-3xl font-bold text-secondary mb-1\">{{ annonce.prix|number_format(0, ',', ' ') }} €</p>
                <p class=\"text-sm text-primary font-semibold\">{{ annonce.marque_nom }} {{ annonce.modele_nom }}</p>
                <p class=\"text-xs text-tertiary mt-0.5 mb-1\">{{ annonce.version_nom }}</p>
                <div class=\"flex flex-wrap gap-2 mt-2 mb-4\">
                    {% if annonce.type_nom %}
                        <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.type_nom }}</span>
                    {% endif %}
                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.annee_circulation }}</span>
                    <span class=\"text-[10px] bg-gray-100 text-tertiary px-2 py-0.5 rounded-full\">{{ annonce.kilometrage|number_format(0, ',', ' ') }} km</span>
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

                {% if app.user %}
                    {% if app.user.id != annonce.vendeur_id %}
                    <a href=\"mailto:\" class=\"mt-4 block text-center py-3 bg-secondary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all text-sm\">
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
{% endblock %}
", "annonce/detail.html.twig", "C:\\projets\\Projet_WE4A\\templates\\annonce\\detail.html.twig");
    }
}
