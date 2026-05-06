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
        yield "    <nav class=\"text-sm text-tertiary mb-6\">
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\" class=\"hover:text-secondary\">Annonces</a>
        <span class=\"mx-2\">/</span>
        <span class=\"text-primary font-medium\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 19, $this->source); })()), "marque_nom", [], "any", false, false, false, 19), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 19, $this->source); })()), "modele_nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
    </nav>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">

        ";
        // line 25
        yield "        <div class=\"lg:col-span-2 space-y-6\">

            ";
        // line 28
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 28, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "            <div class=\"relative\">
                <div class=\"aspect-[16/9] bg-gray-100 rounded-xl overflow-hidden\">
                    <img id=\"carousel-main\" src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 31, $this->source); })()), 0, [], "array", false, false, false, 31), "url_photo", [], "any", false, false, false, 31), "html", null, true);
            yield "\"
                         alt=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 32, $this->source); })()), "marque_nom", [], "any", false, false, false, 32), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 32, $this->source); })()), "modele_nom", [], "any", false, false, false, 32), "html", null, true);
            yield "\"
                         class=\"w-full h-full object-cover\">
                </div>

                ";
            // line 36
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 36, $this->source); })())) > 1)) {
                // line 37
                yield "                <button id=\"carousel-prev\"
                        class=\"absolute left-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 19l-7-7 7-7\"/>
                    </svg>
                </button>
                <button id=\"carousel-next\"
                        class=\"absolute right-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
                    </svg>
                </button>

                <div class=\"absolute bottom-3 left-1/2 -translate-x-1/2 bg-black bg-opacity-50 text-white text-xs px-3 py-1 rounded-full\" id=\"carousel-counter\">
                    1 / ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 51, $this->source); })())), "html", null, true);
                yield "
                </div>
                ";
            }
            // line 54
            yield "            </div>

            ";
            // line 57
            yield "            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 57, $this->source); })())) > 1)) {
                // line 58
                yield "            <div class=\"grid grid-cols-5 gap-2\">
                ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 59, $this->source); })()));
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
                    // line 60
                    yield "                <div class=\"aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer ring-2 ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "ring-blue-500";
                    } else {
                        yield "ring-transparent";
                    }
                    yield " hover:ring-blue-500 transition-all\"
                     data-thumb-index=\"";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 61), "html", null, true);
                    yield "\">
                    <img src=\"";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "url_photo", [], "any", false, false, false, 62), "html", null, true);
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
                // line 65
                yield "            </div>
            ";
            }
            // line 67
            yield "
            ";
        } else {
            // line 69
            yield "            <div class=\"aspect-[16/9] bg-gray-100 rounded-xl overflow-hidden\">
                <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                    <svg class=\"w-24 h-24\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                    </svg>
                </div>
            </div>
            ";
        }
        // line 77
        yield "
            ";
        // line 79
        yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-lg mb-4 font-['ManRope']\">Caractéristiques</h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-4 text-sm\">
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Année</span>
                        <span class=\"font-semibold text-primary\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 84, $this->source); })()), "annee_circulation", [], "any", false, false, false, 84), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Kilométrage</span>
                        <span class=\"font-semibold text-primary\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 88, $this->source); })()), "kilometrage", [], "any", false, false, false, 88), 0, ",", " "), "html", null, true);
        yield " km</span>
                    </div>
                    ";
        // line 90
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 90, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Boîte de vitesse</span>
                        <span class=\"font-semibold text-primary\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 93, $this->source); })()), "boite_vitesse", [], "any", false, false, false, 93), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 96
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 96, $this->source); })()), "transmission", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Transmission</span>
                        <span class=\"font-semibold text-primary\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 99, $this->source); })()), "transmission", [], "any", false, false, false, 99), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 102
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 102, $this->source); })()), "couleur", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Couleur</span>
                        <span class=\"font-semibold text-primary\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 105, $this->source); })()), "couleur", [], "any", false, false, false, 105), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 108
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 108, $this->source); })()), "etat", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">État</span>
                        <span class=\"font-semibold text-primary\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 111, $this->source); })()), "etat", [], "any", false, false, false, 111), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 114
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 114, $this->source); })()), "nombre_places", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Places</span>
                        <span class=\"font-semibold text-primary\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 117, $this->source); })()), "nombre_places", [], "any", false, false, false, 117), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 120
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 120, $this->source); })()), "nombre_portes", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Portes</span>
                        <span class=\"font-semibold text-primary\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 123, $this->source); })()), "nombre_portes", [], "any", false, false, false, 123), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 126
        yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Première main</span>
                        <span class=\"font-semibold text-primary\">";
        // line 128
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 128, $this->source); })()), "premiere_main", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</span>
                    </div>
                    ";
        // line 130
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 130, $this->source); })()), "nombre_proprietaire", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Nb propriétaires</span>
                        <span class=\"font-semibold text-primary\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 133, $this->source); })()), "nombre_proprietaire", [], "any", false, false, false, 133), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 136
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 136, $this->source); })()), "controle_technique", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Contrôle technique</span>
                        <span class=\"font-semibold text-primary\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 139, $this->source); })()), "controle_technique", [], "any", false, false, false, 139), "d/m/Y"), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 142
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 142, $this->source); })()), "localisation", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 143
            yield "                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Localisation</span>
                        <span class=\"font-semibold text-primary\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 145, $this->source); })()), "localisation", [], "any", false, false, false, 145), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 148
        yield "                </div>
            </div>

            ";
        // line 152
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 152, $this->source); })()), "description", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 153
            yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-lg mb-3 font-['ManRope']\">Description</h2>
                <p class=\"text-tertiary text-sm leading-relaxed whitespace-pre-wrap\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 155, $this->source); })()), "description", [], "any", false, false, false, 155), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 158
        yield "
        </div>

        ";
        // line 162
        yield "        <div class=\"space-y-4\">

            <div class=\"bg-white rounded-xl p-6 shadow-sm sticky top-4\">

                <p class=\"text-3xl font-bold text-secondary mb-1\">
                    ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 167, $this->source); })()), "prix", [], "any", false, false, false, 167), 0, ",", " "), "html", null, true);
        yield " €
                </p>
                <p class=\"text-sm text-tertiary mb-1\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 169, $this->source); })()), "marque_nom", [], "any", false, false, false, 169), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 169, $this->source); })()), "modele_nom", [], "any", false, false, false, 169), "html", null, true);
        yield "</p>
                <p class=\"text-xs text-tertiary mb-6\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 170, $this->source); })()), "version_nom", [], "any", false, false, false, 170), "html", null, true);
        yield "</p>

                <hr class=\"border-gray-100 mb-4\">

                <h3 class=\"font-semibold text-primary mb-3 text-sm\">Vendeur</h3>
                <p class=\"font-bold text-primary\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 175, $this->source); })()), "vendeur_prenom", [], "any", false, false, false, 175), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 175, $this->source); })()), "vendeur_nom", [], "any", false, false, false, 175), "html", null, true);
        yield "</p>
                ";
        // line 176
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 176, $this->source); })()), "vendeur_phone", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                <p class=\"text-secondary text-sm mt-1\">📞 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 177, $this->source); })()), "vendeur_phone", [], "any", false, false, false, 177), "html", null, true);
            yield "</p>
                ";
        }
        // line 179
        yield "
                ";
        // line 180
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 181, $this->source); })()), "vendeur_id", [], "any", false, false, false, 181))) {
                // line 182
                yield "                    <a href=\"mailto:\" class=\"mt-4 block text-center py-3 bg-secondary text-white font-bold rounded-lg hover:bg-opacity-90 active:scale-95 transition-all text-sm\">
                        Contacter le vendeur
                    </a>
                    ";
            } else {
                // line 186
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 186, $this->source); })()), "id_annonce", [], "any", false, false, false, 186)]), "html", null, true);
                yield "\"
                       class=\"mt-4 block text-center py-2 border border-primary text-primary font-semibold rounded-lg hover:bg-primary hover:text-white transition-all text-sm\">
                        Modifier l'annonce
                    </a>
                    <form action=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 190, $this->source); })()), "id_annonce", [], "any", false, false, false, 190)]), "html", null, true);
                yield "\" method=\"post\" class=\"mt-2\">
                        <button type=\"submit\"
                                class=\"w-full py-2 border border-red-300 text-red-500 font-semibold rounded-lg hover:bg-red-50 transition-all text-sm\">
                            Supprimer
                        </button>
                    </form>
                    ";
            }
            // line 197
            yield "                ";
        } else {
            // line 198
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\"
                   class=\"mt-4 block text-center py-3 bg-primary text-white font-bold rounded-lg hover:bg-opacity-90 transition-all text-sm\">
                    Se connecter pour contacter
                </a>
                ";
        }
        // line 203
        yield "
                ";
        // line 204
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 204, $this->source); })()), "date_publication", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "                <p class=\"text-xs text-tertiary mt-4 text-center\">
                    Publiée le ";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 206, $this->source); })()), "date_publication", [], "any", false, false, false, 206), "d/m/Y"), "html", null, true);
            yield "
                </p>
                ";
        }
        // line 209
        yield "            </div>

        </div>
    </div>
</div>

";
        // line 215
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 215, $this->source); })())) > 1)) {
            // line 216
            yield "<script>
(function () {
    var photos = ";
            // line 218
            yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 218, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 218, $this->source); })()), "url_photo", [], "any", false, false, false, 218); }));
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
            t.style.outline = parseInt(t.dataset.thumbIndex) === current ? '3px solid #3b82f6' : 'none';
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
        return array (  544 => 218,  540 => 216,  538 => 215,  530 => 209,  524 => 206,  521 => 205,  519 => 204,  516 => 203,  507 => 198,  504 => 197,  494 => 190,  486 => 186,  480 => 182,  477 => 181,  475 => 180,  472 => 179,  466 => 177,  464 => 176,  458 => 175,  450 => 170,  444 => 169,  439 => 167,  432 => 162,  427 => 158,  421 => 155,  417 => 153,  414 => 152,  409 => 148,  403 => 145,  399 => 143,  396 => 142,  390 => 139,  386 => 137,  383 => 136,  377 => 133,  373 => 131,  371 => 130,  366 => 128,  362 => 126,  356 => 123,  352 => 121,  349 => 120,  343 => 117,  339 => 115,  336 => 114,  330 => 111,  326 => 109,  323 => 108,  317 => 105,  313 => 103,  310 => 102,  304 => 99,  300 => 97,  297 => 96,  291 => 93,  287 => 91,  285 => 90,  280 => 88,  273 => 84,  266 => 79,  263 => 77,  253 => 69,  249 => 67,  245 => 65,  228 => 62,  224 => 61,  215 => 60,  198 => 59,  195 => 58,  192 => 57,  188 => 54,  182 => 51,  166 => 37,  164 => 36,  155 => 32,  151 => 31,  147 => 29,  144 => 28,  140 => 25,  130 => 19,  125 => 17,  122 => 16,  119 => 14,  110 => 12,  105 => 11,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  58 => 3,  41 => 1,);
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
    <nav class=\"text-sm text-tertiary mb-6\">
        <a href=\"{{ path('annonces') }}\" class=\"hover:text-secondary\">Annonces</a>
        <span class=\"mx-2\">/</span>
        <span class=\"text-primary font-medium\">{{ annonce.marque_nom }} {{ annonce.modele_nom }}</span>
    </nav>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">

        {# Colonne gauche : photos + infos principales #}
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
                <button id=\"carousel-prev\"
                        class=\"absolute left-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 19l-7-7 7-7\"/>
                    </svg>
                </button>
                <button id=\"carousel-next\"
                        class=\"absolute right-3 top-1/2 -translate-y-1/2 bg-white text-primary rounded-full w-10 h-10 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
                    </svg>
                </button>

                <div class=\"absolute bottom-3 left-1/2 -translate-x-1/2 bg-black bg-opacity-50 text-white text-xs px-3 py-1 rounded-full\" id=\"carousel-counter\">
                    1 / {{ photos|length }}
                </div>
                {% endif %}
            </div>

            {# Miniatures cliquables #}
            {% if photos|length > 1 %}
            <div class=\"grid grid-cols-5 gap-2\">
                {% for photo in photos %}
                <div class=\"aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer ring-2 {% if loop.first %}ring-blue-500{% else %}ring-transparent{% endif %} hover:ring-blue-500 transition-all\"
                     data-thumb-index=\"{{ loop.index0 }}\">
                    <img src=\"{{ photo.url_photo }}\" class=\"w-full h-full object-cover hover:opacity-80 transition-opacity\">
                </div>
                {% endfor %}
            </div>
            {% endif %}

            {% else %}
            <div class=\"aspect-[16/9] bg-gray-100 rounded-xl overflow-hidden\">
                <div class=\"w-full h-full flex items-center justify-center text-gray-300\">
                    <svg class=\"w-24 h-24\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                    </svg>
                </div>
            </div>
            {% endif %}

            {# Caractéristiques clés #}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-lg mb-4 font-['ManRope']\">Caractéristiques</h2>
                <div class=\"grid grid-cols-2 md:grid-cols-3 gap-4 text-sm\">
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Année</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.annee_circulation }}</span>
                    </div>
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Kilométrage</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.kilometrage|number_format(0, ',', ' ') }} km</span>
                    </div>
                    {% if annonce.boite_vitesse %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Boîte de vitesse</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.boite_vitesse }}</span>
                    </div>
                    {% endif %}
                    {% if annonce.transmission %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Transmission</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.transmission }}</span>
                    </div>
                    {% endif %}
                    {% if annonce.couleur %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Couleur</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.couleur }}</span>
                    </div>
                    {% endif %}
                    {% if annonce.etat %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">État</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.etat }}</span>
                    </div>
                    {% endif %}
                    {% if annonce.nombre_places %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Places</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.nombre_places }}</span>
                    </div>
                    {% endif %}
                    {% if annonce.nombre_portes %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Portes</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.nombre_portes }}</span>
                    </div>
                    {% endif %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Première main</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.premiere_main ? 'Oui' : 'Non' }}</span>
                    </div>
                    {% if annonce.nombre_proprietaire %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Nb propriétaires</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.nombre_proprietaire }}</span>
                    </div>
                    {% endif %}
                    {% if annonce.controle_technique %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Contrôle technique</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.controle_technique|date('d/m/Y') }}</span>
                    </div>
                    {% endif %}
                    {% if annonce.localisation %}
                    <div class=\"flex flex-col\">
                        <span class=\"text-tertiary text-xs uppercase tracking-wide mb-1\">Localisation</span>
                        <span class=\"font-semibold text-primary\">{{ annonce.localisation }}</span>
                    </div>
                    {% endif %}
                </div>
            </div>

            {# Description #}
            {% if annonce.description %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm\">
                <h2 class=\"font-bold text-primary text-lg mb-3 font-['ManRope']\">Description</h2>
                <p class=\"text-tertiary text-sm leading-relaxed whitespace-pre-wrap\">{{ annonce.description }}</p>
            </div>
            {% endif %}

        </div>

        {# Colonne droite : prix + vendeur + actions #}
        <div class=\"space-y-4\">

            <div class=\"bg-white rounded-xl p-6 shadow-sm sticky top-4\">

                <p class=\"text-3xl font-bold text-secondary mb-1\">
                    {{ annonce.prix|number_format(0, ',', ' ') }} €
                </p>
                <p class=\"text-sm text-tertiary mb-1\">{{ annonce.marque_nom }} {{ annonce.modele_nom }}</p>
                <p class=\"text-xs text-tertiary mb-6\">{{ annonce.version_nom }}</p>

                <hr class=\"border-gray-100 mb-4\">

                <h3 class=\"font-semibold text-primary mb-3 text-sm\">Vendeur</h3>
                <p class=\"font-bold text-primary\">{{ annonce.vendeur_prenom }} {{ annonce.vendeur_nom }}</p>
                {% if annonce.vendeur_phone %}
                <p class=\"text-secondary text-sm mt-1\">📞 {{ annonce.vendeur_phone }}</p>
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
                        <button type=\"submit\"
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
                <p class=\"text-xs text-tertiary mt-4 text-center\">
                    Publiée le {{ annonce.date_publication|date('d/m/Y') }}
                </p>
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
            t.style.outline = parseInt(t.dataset.thumbIndex) === current ? '3px solid #3b82f6' : 'none';
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
