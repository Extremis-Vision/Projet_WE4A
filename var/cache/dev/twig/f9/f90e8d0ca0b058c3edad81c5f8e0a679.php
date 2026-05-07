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

/* admin/base.html.twig */
class __TwigTemplate_fa1ab62990461eb51b5f7e691b352c12 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'pageHeading' => [$this, 'block_pageHeading'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Admin — ";
        // line 5
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"\">
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script id=\"tailwind-config\">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        \"background\": \"#f7f9fb\",
                        \"primary\":    \"#04122e\",
                        \"secondary\":  \"#9d4300\",
                        \"tertiary\":   \"#334155\"
                    }
                }
            }
        }
    </script>
</head>
<body class=\"flex h-screen bg-gray-100 overflow-hidden\">

    ";
        // line 29
        yield "    <aside class=\"w-60 bg-primary flex flex-col flex-none h-full\">
        <div class=\"px-6 py-5 border-b border-white/10\">
            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homePage");
        yield "\">
                <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("automarket_logo.svg"), "html", null, true);
        yield "\" alt=\"AutoMarket\" class=\"h-9 w-auto\">
            </a>
            <span class=\"mt-1 block text-[10px] uppercase tracking-widest text-secondary font-bold\">Espace Admin</span>
        </div>

        <nav class=\"flex-1 py-4 px-3 space-y-1 overflow-y-auto\">
            ";
        // line 38
        $context["current"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38);
        // line 39
        yield "
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      ";
        // line 42
        yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 42, $this->source); })()) == "admin_dashboard")) ? ("bg-white/10 text-white") : ("text-white/60 hover:text-white hover:bg-white/5"));
        yield "\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
                </svg>
                Tableau de bord
            </a>

            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
        yield "\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      ";
        // line 51
        yield ((((is_string($_v0 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 51, $this->source); })())) && is_string($_v1 = "admin_utilisateurs") && str_starts_with($_v0, $_v1)) || ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 51, $this->source); })()) == "admin_supprimer_utilisateur"))) ? ("bg-white/10 text-white") : ("text-white/60 hover:text-white hover:bg-white/5"));
        yield "\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
                Utilisateurs
            </a>

            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
        yield "\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      ";
        // line 60
        yield ((((((is_string($_v2 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })())) && is_string($_v3 = "admin_annonces") && str_starts_with($_v2, $_v3)) || (is_string($_v4 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })())) && is_string($_v5 = "admin_pauser") && str_starts_with($_v4, $_v5))) || (is_string($_v6 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })())) && is_string($_v7 = "admin_reactiver") && str_starts_with($_v6, $_v7))) || (is_string($_v8 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })())) && is_string($_v9 = "admin_supprimer_annonce") && str_starts_with($_v8, $_v9)))) ? ("bg-white/10 text-white") : ("text-white/60 hover:text-white hover:bg-white/5"));
        yield "\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                </svg>
                Annonces
            </a>

            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
        yield "\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      ";
        // line 69
        yield ((((((((is_string($_v10 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 69, $this->source); })())) && is_string($_v11 = "admin_catalogue") && str_starts_with($_v10, $_v11)) || (is_string($_v12 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 69, $this->source); })())) && is_string($_v13 = "admin_ajouter_") && str_starts_with($_v12, $_v13))) || (is_string($_v14 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 69, $this->source); })())) && is_string($_v15 = "admin_supprimer_marque") && str_starts_with($_v14, $_v15))) || (is_string($_v16 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 69, $this->source); })())) && is_string($_v17 = "admin_supprimer_modele") && str_starts_with($_v16, $_v17))) || (is_string($_v18 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 69, $this->source); })())) && is_string($_v19 = "admin_supprimer_generation") && str_starts_with($_v18, $_v19))) || (is_string($_v20 = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 69, $this->source); })())) && is_string($_v21 = "admin_supprimer_version") && str_starts_with($_v20, $_v21)))) ? ("bg-white/10 text-white") : ("text-white/60 hover:text-white hover:bg-white/5"));
        yield "\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\"/>
                </svg>
                Catalogue
            </a>
        </nav>

        <div class=\"px-3 py-4 border-t border-white/10\">
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homePage");
        yield "\"
               class=\"flex items-center gap-2 px-3 py-2 text-white/50 hover:text-white text-sm transition-colors rounded-lg hover:bg-white/5\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
                </svg>
                Retour au site
            </a>
            <div class=\"mt-3 px-3 py-2 text-xs text-white/30\">
                Connecté : <span class=\"text-white/60 font-medium\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "prenom", [], "any", false, false, false, 86), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "nom", [], "any", false, false, false, 86), "html", null, true);
        yield "</span>
            </div>
        </div>
    </aside>

    ";
        // line 92
        yield "    <div class=\"flex-1 flex flex-col min-w-0 h-full overflow-auto\">

        ";
        // line 95
        yield "        <header class=\"flex-none bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between\">
            <h1 class=\"text-lg font-bold text-primary font-['ManRope']\">";
        // line 96
        yield from $this->unwrap()->yieldBlock('pageHeading', $context, $blocks);
        yield "</h1>
            <nav class=\"flex items-center gap-1 text-xs text-gray-400\">
                <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"hover:text-primary\">Admin</a>
                ";
        // line 99
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 100
        yield "            </nav>
        </header>

        ";
        // line 104
        yield "        <div class=\"flex-none px-8 pt-5\">
            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", ["success"], "method", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 106
            yield "                <div class=\"flex items-center gap-2 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-3 text-sm\">
                    <svg class=\"w-4 h-4 flex-none\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                        <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"/>
                    </svg>
                    ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "flashes", ["error"], "method", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 114
            yield "                <div class=\"flex items-center gap-2 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-3 text-sm\">
                    <svg class=\"w-4 h-4 flex-none\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                        <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\"/>
                    </svg>
                    ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "        </div>

        ";
        // line 124
        yield "        <main class=\"flex-1 px-8 pb-8 pt-3\">
            ";
        // line 125
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 126
        yield "        </main>

    </div>

";
        // line 130
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 131
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        yield "AutoMarket";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Styles/styles.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageHeading(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeading"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/base.html.twig";
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
        return array (  367 => 130,  351 => 125,  335 => 99,  319 => 96,  308 => 8,  298 => 7,  281 => 5,  271 => 131,  269 => 130,  263 => 126,  261 => 125,  258 => 124,  254 => 121,  245 => 118,  239 => 114,  234 => 113,  225 => 110,  219 => 106,  215 => 105,  212 => 104,  207 => 100,  205 => 99,  201 => 98,  196 => 96,  193 => 95,  189 => 92,  179 => 86,  168 => 78,  156 => 69,  151 => 67,  141 => 60,  136 => 58,  126 => 51,  121 => 49,  111 => 42,  106 => 40,  103 => 39,  101 => 38,  92 => 32,  88 => 31,  84 => 29,  64 => 10,  62 => 7,  57 => 5,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Admin — {% block pageTitle %}AutoMarket{% endblock %}</title>
    <link rel=\"icon\" href=\"\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('Styles/styles.css') }}\">
    {% endblock %}
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script id=\"tailwind-config\">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        \"background\": \"#f7f9fb\",
                        \"primary\":    \"#04122e\",
                        \"secondary\":  \"#9d4300\",
                        \"tertiary\":   \"#334155\"
                    }
                }
            }
        }
    </script>
</head>
<body class=\"flex h-screen bg-gray-100 overflow-hidden\">

    {# ── SIDEBAR ─────────────────────────────────────────────────────────── #}
    <aside class=\"w-60 bg-primary flex flex-col flex-none h-full\">
        <div class=\"px-6 py-5 border-b border-white/10\">
            <a href=\"{{ path('homePage') }}\">
                <img src=\"{{ asset('automarket_logo.svg') }}\" alt=\"AutoMarket\" class=\"h-9 w-auto\">
            </a>
            <span class=\"mt-1 block text-[10px] uppercase tracking-widest text-secondary font-bold\">Espace Admin</span>
        </div>

        <nav class=\"flex-1 py-4 px-3 space-y-1 overflow-y-auto\">
            {% set current = app.request.attributes.get('_route') %}

            <a href=\"{{ path('admin_dashboard') }}\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      {{ current == 'admin_dashboard' ? 'bg-white/10 text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }}\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
                </svg>
                Tableau de bord
            </a>

            <a href=\"{{ path('admin_utilisateurs') }}\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      {{ current starts with 'admin_utilisateurs' or current == 'admin_supprimer_utilisateur' ? 'bg-white/10 text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }}\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
                Utilisateurs
            </a>

            <a href=\"{{ path('admin_annonces') }}\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      {{ current starts with 'admin_annonces' or current starts with 'admin_pauser' or current starts with 'admin_reactiver' or current starts with 'admin_supprimer_annonce' ? 'bg-white/10 text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }}\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"/>
                </svg>
                Annonces
            </a>

            <a href=\"{{ path('admin_catalogue') }}\"
               class=\"flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      {{ current starts with 'admin_catalogue' or current starts with 'admin_ajouter_' or current starts with 'admin_supprimer_marque' or current starts with 'admin_supprimer_modele' or current starts with 'admin_supprimer_generation' or current starts with 'admin_supprimer_version' ? 'bg-white/10 text-white' : 'text-white/60 hover:text-white hover:bg-white/5' }}\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\"/>
                </svg>
                Catalogue
            </a>
        </nav>

        <div class=\"px-3 py-4 border-t border-white/10\">
            <a href=\"{{ path('homePage') }}\"
               class=\"flex items-center gap-2 px-3 py-2 text-white/50 hover:text-white text-sm transition-colors rounded-lg hover:bg-white/5\">
                <svg class=\"w-4 h-4 flex-none\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
                </svg>
                Retour au site
            </a>
            <div class=\"mt-3 px-3 py-2 text-xs text-white/30\">
                Connecté : <span class=\"text-white/60 font-medium\">{{ app.user.prenom }} {{ app.user.nom }}</span>
            </div>
        </div>
    </aside>

    {# ── CONTENU PRINCIPAL ───────────────────────────────────────────────── #}
    <div class=\"flex-1 flex flex-col min-w-0 h-full overflow-auto\">

        {# En-tête de page #}
        <header class=\"flex-none bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between\">
            <h1 class=\"text-lg font-bold text-primary font-['ManRope']\">{% block pageHeading %}{% endblock %}</h1>
            <nav class=\"flex items-center gap-1 text-xs text-gray-400\">
                <a href=\"{{ path('admin_dashboard') }}\" class=\"hover:text-primary\">Admin</a>
                {% block breadcrumb %}{% endblock %}
            </nav>
        </header>

        {# Flash messages #}
        <div class=\"flex-none px-8 pt-5\">
            {% for msg in app.flashes('success') %}
                <div class=\"flex items-center gap-2 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-3 text-sm\">
                    <svg class=\"w-4 h-4 flex-none\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                        <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"/>
                    </svg>
                    {{ msg }}
                </div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flex items-center gap-2 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-3 text-sm\">
                    <svg class=\"w-4 h-4 flex-none\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                        <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\"/>
                    </svg>
                    {{ msg }}
                </div>
            {% endfor %}
        </div>

        {# Contenu #}
        <main class=\"flex-1 px-8 pb-8 pt-3\">
            {% block content %}{% endblock %}
        </main>

    </div>

{% block javascripts %}{% endblock %}
</body>
</html>
", "admin/base.html.twig", "C:\\projets\\Projet_WE4A\\templates\\admin\\base.html.twig");
    }
}
