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

/* base.html.twig */
class __TwigTemplate_4e8cb2d9b2492d28951109b7b9629ed2 extends Template
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
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        yield "</title>

    <link rel=\"icon\" href=\"\">

    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "
    <script src=\"https://cdn.tailwindcss.com\"></script>

    <script id=\"tailwind-config\">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        \"background\": \"#f7f9fb\",
                        \"primary\": \"#04122e\",
                        \"secondary\": \"#9d4300\",
                        \"tertiary\": \"#334155\"
                    }
                }
            }
        }
    </script>
</head>
<body class=\"min-h-screen flex flex-col\">
";
        // line 31
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 302
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 303
        yield "</body>
</html>";
        
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

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Styles/styles.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        yield "    <nav class=\"bg-white border-b border-gray-100 sticky top-0 z-50\">
        ";
        // line 33
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 191
        yield "    </nav>

    <main class=\"flex-grow\">
        ";
        // line 194
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 197
        yield "    </main>

    <footer class=\"flex-none py-10 text-white\">
        ";
        // line 200
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 300
        yield "    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 34
        yield "        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"flex justify-between h-16\">
                <!-- Logo -->
                <div class=\"flex-shrink-0 flex items-center\">
                    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homePage");
        yield "\">
                        <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("automarket_logo.svg"), "html", null, true);
        yield "\" alt=\"AutoMarket\" class=\"h-10 w-auto\">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class=\"hidden md:flex md:items-center md:space-x-8\">
                    ";
        // line 45
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Utilisateurs</a>
                        <a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Catalogue</a>
                        <a href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Statistiques</a>
                        <a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_inbox");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Messagerie</a>
                    ";
        } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Vendre ma voiture</a>
                        <a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Mes annonces</a>
                        <a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Statistiques</a>
                        <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_inbox");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Messagerie</a>
                    ";
        } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Vendre ma voiture</a>
                        <a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Mes annonces</a>
                        <a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_inbox");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Messagerie</a>
                    ";
        } else {
            // line 63
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"";
            // line 64
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Vendre ma voiture</a>
                    ";
        }
        // line 66
        yield "                </div>

                <!-- Right Desktop Actions -->
                <div class=\"hidden md:flex items-center space-x-6\">
                    ";
        // line 70
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
            yield "\" title=\"Mes favoris\" class=\"text-tertiary hover:text-red-500 transition-colors flex items-center gap-1.5 text-sm font-medium\">
                            <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                            </svg>
                            Favoris
                        </a>
                        
                        ";
            // line 79
            yield "                        <div class=\"relative group\">
                            <button class=\"flex items-center gap-2 text-sm font-semibold text-primary hover:text-secondary transition-colors focus:outline-none py-2\">
                                <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary uppercase\">
                                    ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "prenom", [], "any", false, false, false, 82)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82)), "html", null, true);
            yield "
                                </div>
                                <span class=\"max-w-[100px] truncate\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "prenom", [], "any", false, false, false, 84), "html", null, true);
            yield "</span>
                                <svg class=\"w-4 h-4 text-gray-400 group-hover:text-secondary\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"/></svg>
                            </button>
                            <!-- Menu déroulant -->
                            <div class=\"absolute right-0 mt-0 w-48 bg-white rounded-xl shadow-lg py-2 border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50\">
                                <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_vendeur", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" class=\"block px-4 py-2 text-sm text-tertiary hover:bg-gray-50 hover:text-primary\">Mon Profil</a>
                                <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametres");
            yield "\" class=\"block px-4 py-2 text-sm text-tertiary hover:bg-gray-50 hover:text-primary\">Paramètres</a>
                                <hr class=\"my-1 border-gray-100\">
                                <a href=\"";
            // line 92
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            yield "\" class=\"block px-4 py-2 text-sm text-red-600 hover:bg-red-50 font-medium\">Déconnexion</a>
                            </div>
                        </div>
                    ";
        } else {
            // line 96
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\" class=\"text-tertiary hover:text-primary font-medium text-sm transition-colors\">Connexion</a>
                        <a href=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            yield "\" class=\"px-5 py-2 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 active:scale-95 transition-all text-sm\">S'inscrire</a>
                    ";
        }
        // line 99
        yield "                </div>

                <!-- Mobile menu button -->
                <div class=\"flex items-center md:hidden\">
                    <button type=\"button\" id=\"mobile-menu-btn\" class=\"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Ouvrir le menu</span>
                        <!-- Icon when menu is closed. -->
                        <svg class=\"block h-6 w-6\" id=\"icon-menu-closed\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <svg class=\"hidden h-6 w-6\" id=\"icon-menu-open\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class=\"md:hidden hidden bg-white border-t border-gray-100 absolute w-full shadow-lg\" id=\"mobile-menu\">
            <div class=\"px-2 pt-2 pb-3 space-y-1 sm:px-3\">
                ";
        // line 121
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Utilisateurs</a>
                    <a href=\"";
            // line 123
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"";
            // line 124
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Catalogue</a>
                    <a href=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Statistiques</a>
                    <a href=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_inbox");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Messagerie</a>
                ";
        } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"";
            // line 129
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Vendre ma voiture</a>
                    <a href=\"";
            // line 130
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mes annonces</a>
                    <a href=\"";
            // line 131
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Statistiques</a>
                    <a href=\"";
            // line 132
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_inbox");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Messagerie</a>
                ";
        } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"";
            // line 135
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Vendre ma voiture</a>
                    <a href=\"";
            // line 136
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mes annonces</a>
                    <a href=\"";
            // line 137
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_inbox");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Messagerie</a>
                ";
        } else {
            // line 139
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"";
            // line 140
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Vendre ma voiture</a>
                ";
        }
        // line 142
        yield "            </div>
            
            <div class=\"pt-4 pb-3 border-t border-gray-200\">
                ";
        // line 145
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "                    <div class=\"flex items-center px-5\">
                        <div class=\"flex-shrink-0\">
                            <div class=\"w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold uppercase\">
                                ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "prenom", [], "any", false, false, false, 149)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "nom", [], "any", false, false, false, 149)), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"ml-3\">
                            <div class=\"text-base font-medium text-primary\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "prenom", [], "any", false, false, false, 153), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "nom", [], "any", false, false, false, 153), "html", null, true);
            yield "</div>
                            <div class=\"text-sm font-medium text-gray-500\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "email", [], "any", false, false, false, 154), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                    <div class=\"mt-3 px-2 space-y-1\">
                        <a href=\"";
            // line 158
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mes Favoris</a>
                        <a href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_vendeur", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mon Profil</a>
                        <a href=\"";
            // line 160
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametres");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Paramètres</a>
                        <a href=\"";
            // line 161
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-red-600 hover:bg-red-50\">Déconnexion</a>
                    </div>
                ";
        } else {
            // line 164
            yield "                    <div class=\"mt-3 px-2 space-y-1\">
                        <a href=\"";
            // line 165
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Connexion</a>
                        <a href=\"";
            // line 166
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            yield "\" class=\"block px-3 py-2 rounded-md text-base font-medium text-primary hover:bg-gray-50\">S'inscrire</a>
                    </div>
                ";
        }
        // line 169
        yield "            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btn = document.getElementById('mobile-menu-btn');
                const menu = document.getElementById('mobile-menu');
                const iconClosed = document.getElementById('icon-menu-closed');
                const iconOpen = document.getElementById('icon-menu-open');
                
                if(btn && menu) {
                    btn.addEventListener('click', function() {
                        const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                        btn.setAttribute('aria-expanded', !isExpanded);
                        menu.classList.toggle('hidden');
                        iconClosed.classList.toggle('hidden');
                        iconOpen.classList.toggle('hidden');
                    });
                }
            });
        </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 195
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 201
        yield "            <div class=\"px-10 py-5 flex flex-row gap-8\">
                <div class=\"basis-1/3\"> <!-- 1ere colonne -->
                    <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homePage");
        yield "\" class=\"inline-block pb-5\">
                        <img src=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("automarket_logo.svg"), "html", null, true);
        yield "\" alt=\"AutoMarket\" class=\"h-12 w-auto\">
                    </a>
                    <p class=\"desc text-white/70\">
                        L'expérience du Showroom Digital. Redéfinir la façon dont les passionnés achètent et vendent
                        des chefs-d'œuvres automobiles avec intégrité éditoriale
                    </p>
                </div>
                <div class=\"basis-1/6 text-[15px] text-white/70\"> <!-- 2eme colonne - Ecosystème -->
                    <ul>
                        <li class=\"pb-5\">
                            <h3 class=\"font-['ManRope'] text-[15px] font-bold text-secondary\">ÉCOSYSTÈME</h3>
                        </li>
                        ";
        // line 216
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 217
            yield "                        <li class=\"pb-3\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
            yield "\">Utilisateurs</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 218
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
            yield "\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 219
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
            yield "\">Catalogue</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 220
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
            yield "\">Statistiques</a></li>
                        ";
        } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "                        <li class=\"pb-3\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 223
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\">Vendre ma voiture</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 224
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            yield "\">Mes annonces</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 225
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
            yield "\">Statistiques</a></li>
                        ";
        } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 227
            yield "                        <li class=\"pb-3\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 228
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\">Vendre ma voiture</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 229
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            yield "\">Mes annonces</a></li>
                        ";
        } else {
            // line 231
            yield "                        <li class=\"pb-3\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 232
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\">Vendre ma voiture</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 233
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\">Connexion</a></li>
                        <li class=\"pb-3\"><a href=\"";
            // line 234
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            yield "\">S'inscrire</a></li>
                        ";
        }
        // line 236
        yield "                    </ul>
                </div>

                <div class=\"basis-1/6 text-[15px] text-white/70\"> <!-- 3eme colonne - Entreprise -->
                    <ul>
                        <li class=\"pb-5\">
                            <h3 class=\"font-['ManRope'] text-[15px] font-bold text-secondary\">ENTREPRISE</h3>
                        </li>
                        <li class=\"pb-3\">
                            <a>Politique de confidentialité</a>
                        </li>
                        <li class=\"pb-3\">
                            <a>Conditions d'utilisations</a>
                        </li>
                        <li class=\"pb-3\">
                            <a>Politique de Cookies</a>
                        </li>
                        <li class=\"pb-3\">
                            <a>Contactez-nous</a>
                        </li>
                    </ul>
                </div>
                <div class=\"flex-1 text-[15px] text-white/70\"> <!-- 4eme colonne - Rejoindre le club -->
                    <ul>
                        <li class=\"pb-5\">
                            <h3 class=\"font-['ManRope'] text-[15px] font-bold text-secondary\">REJOINDRE LE CLUB</h3>
                        </li>
                        <li class=\"pb-3\">
                            <p>Recevez le briefing éditorial hebdomadaire sur les tendances du marché et un
                            accès anticipé exclusif aux annonces rares</p>
                        </li>
                        <li class=\"pb-3\">
                            <form class=\"flex gap-3\">
                                <input class=\"bg-white/5 border-none rounded-lg px-4 py-3 flex-1 text-sm focus:ring-1
                                 focus:ring-secondary text-white\" placeholder=\"Adresse email\" type=\"email\"/>
                                <button class=\"bg-secondary px-6 rounded-lg font-bold hover:bg-secondary-container
                                transition-all \">
                                    <span> > </span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>


            </div>
            <div class=\"border-t text-[10px] border-white/5 text-white/30 px-10 pt-5\">
                <ul class=\"flex full-width flex-row gap-5\">
                    <li class=\"\">
                        © 2026 AUTOMARKET. Tous droits réservés
                    </li>
                    <li class=\"spacer\"></li>
                    <li class=\"\">
                        <a href=\"https://www.instagram.com\">INSTAGRAM</a>
                    </li>
                    <li class=\"\">
                        <a href=\"https://www.x.com\">X / TWITTER</a>
                    </li>
                    <li class=\"\">
                        <a href=\"https://www.linkedin.com\">LINKEDIN</a>
                    </li>
                </ul>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 302
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  728 => 302,  657 => 236,  652 => 234,  648 => 233,  644 => 232,  639 => 231,  634 => 229,  630 => 228,  625 => 227,  620 => 225,  616 => 224,  612 => 223,  607 => 222,  602 => 220,  598 => 219,  594 => 218,  589 => 217,  587 => 216,  572 => 204,  568 => 203,  564 => 201,  554 => 200,  545 => 195,  535 => 194,  506 => 169,  500 => 166,  496 => 165,  493 => 164,  487 => 161,  483 => 160,  479 => 159,  475 => 158,  468 => 154,  462 => 153,  454 => 149,  449 => 146,  447 => 145,  442 => 142,  437 => 140,  432 => 139,  427 => 137,  423 => 136,  419 => 135,  414 => 134,  409 => 132,  405 => 131,  401 => 130,  397 => 129,  392 => 128,  387 => 126,  383 => 125,  379 => 124,  375 => 123,  370 => 122,  368 => 121,  344 => 99,  339 => 97,  334 => 96,  327 => 92,  322 => 90,  318 => 89,  310 => 84,  304 => 82,  299 => 79,  288 => 71,  286 => 70,  280 => 66,  275 => 64,  270 => 63,  265 => 61,  261 => 60,  257 => 59,  252 => 58,  247 => 56,  243 => 55,  239 => 54,  235 => 53,  230 => 52,  225 => 50,  221 => 49,  217 => 48,  213 => 47,  208 => 46,  206 => 45,  197 => 39,  193 => 38,  187 => 34,  177 => 33,  168 => 300,  166 => 200,  161 => 197,  159 => 194,  154 => 191,  152 => 33,  149 => 32,  139 => 31,  128 => 10,  118 => 9,  101 => 5,  92 => 303,  90 => 302,  88 => 31,  67 => 12,  65 => 9,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block pageTitle %}AutoMarket{% endblock %}</title>

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
                        \"primary\": \"#04122e\",
                        \"secondary\": \"#9d4300\",
                        \"tertiary\": \"#334155\"
                    }
                }
            }
        }
    </script>
</head>
<body class=\"min-h-screen flex flex-col\">
{% block body %}
    <nav class=\"bg-white border-b border-gray-100 sticky top-0 z-50\">
        {% block header %}
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"flex justify-between h-16\">
                <!-- Logo -->
                <div class=\"flex-shrink-0 flex items-center\">
                    <a href=\"{{ path('homePage') }}\">
                        <img src=\"{{ asset('automarket_logo.svg') }}\" alt=\"AutoMarket\" class=\"h-10 w-auto\">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class=\"hidden md:flex md:items-center md:space-x-8\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('admin_utilisateurs') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Utilisateurs</a>
                        <a href=\"{{ path('admin_annonces') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"{{ path('admin_catalogue') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Catalogue</a>
                        <a href=\"{{ path('stats') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Statistiques</a>
                        <a href=\"{{ path('messagerie_inbox') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Messagerie</a>
                    {% elseif is_granted('ROLE_ENTREPRISE') %}
                        <a href=\"{{ path('annonces') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"{{ path('vendreMaVoiture') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Vendre ma voiture</a>
                        <a href=\"{{ path('mes_annonces') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Mes annonces</a>
                        <a href=\"{{ path('stats') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Statistiques</a>
                        <a href=\"{{ path('messagerie_inbox') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Messagerie</a>
                    {% elseif is_granted('ROLE_USER') %}
                        <a href=\"{{ path('annonces') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"{{ path('vendreMaVoiture') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Vendre ma voiture</a>
                        <a href=\"{{ path('mes_annonces') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Mes annonces</a>
                        <a href=\"{{ path('messagerie_inbox') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Messagerie</a>
                    {% else %}
                        <a href=\"{{ path('annonces') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Annonces</a>
                        <a href=\"{{ path('vendreMaVoiture') }}\" class=\"text-tertiary hover:text-secondary font-medium text-sm transition-colors\">Vendre ma voiture</a>
                    {% endif %}
                </div>

                <!-- Right Desktop Actions -->
                <div class=\"hidden md:flex items-center space-x-6\">
                    {% if app.user %}
                        <a href=\"{{ path('favoris') }}\" title=\"Mes favoris\" class=\"text-tertiary hover:text-red-500 transition-colors flex items-center gap-1.5 text-sm font-medium\">
                            <svg class=\"w-5 h-5 text-red-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\"/>
                            </svg>
                            Favoris
                        </a>
                        
                        {# Dropdown Profil (remplace le \"Bonjour\") #}
                        <div class=\"relative group\">
                            <button class=\"flex items-center gap-2 text-sm font-semibold text-primary hover:text-secondary transition-colors focus:outline-none py-2\">
                                <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary uppercase\">
                                    {{ app.user.prenom|first }}{{ app.user.nom|first }}
                                </div>
                                <span class=\"max-w-[100px] truncate\">{{ app.user.prenom }}</span>
                                <svg class=\"w-4 h-4 text-gray-400 group-hover:text-secondary\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"/></svg>
                            </button>
                            <!-- Menu déroulant -->
                            <div class=\"absolute right-0 mt-0 w-48 bg-white rounded-xl shadow-lg py-2 border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50\">
                                <a href=\"{{ path('avis_vendeur', {id: app.user.id}) }}\" class=\"block px-4 py-2 text-sm text-tertiary hover:bg-gray-50 hover:text-primary\">Mon Profil</a>
                                <a href=\"{{ path('parametres') }}\" class=\"block px-4 py-2 text-sm text-tertiary hover:bg-gray-50 hover:text-primary\">Paramètres</a>
                                <hr class=\"my-1 border-gray-100\">
                                <a href=\"{{ path('deconnexion') }}\" class=\"block px-4 py-2 text-sm text-red-600 hover:bg-red-50 font-medium\">Déconnexion</a>
                            </div>
                        </div>
                    {% else %}
                        <a href=\"{{ path('connexion') }}\" class=\"text-tertiary hover:text-primary font-medium text-sm transition-colors\">Connexion</a>
                        <a href=\"{{ path('inscription') }}\" class=\"px-5 py-2 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 active:scale-95 transition-all text-sm\">S'inscrire</a>
                    {% endif %}
                </div>

                <!-- Mobile menu button -->
                <div class=\"flex items-center md:hidden\">
                    <button type=\"button\" id=\"mobile-menu-btn\" class=\"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Ouvrir le menu</span>
                        <!-- Icon when menu is closed. -->
                        <svg class=\"block h-6 w-6\" id=\"icon-menu-closed\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <svg class=\"hidden h-6 w-6\" id=\"icon-menu-open\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class=\"md:hidden hidden bg-white border-t border-gray-100 absolute w-full shadow-lg\" id=\"mobile-menu\">
            <div class=\"px-2 pt-2 pb-3 space-y-1 sm:px-3\">
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('admin_utilisateurs') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Utilisateurs</a>
                    <a href=\"{{ path('admin_annonces') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"{{ path('admin_catalogue') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Catalogue</a>
                    <a href=\"{{ path('stats') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Statistiques</a>
                    <a href=\"{{ path('messagerie_inbox') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Messagerie</a>
                {% elseif is_granted('ROLE_ENTREPRISE') %}
                    <a href=\"{{ path('annonces') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"{{ path('vendreMaVoiture') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Vendre ma voiture</a>
                    <a href=\"{{ path('mes_annonces') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mes annonces</a>
                    <a href=\"{{ path('stats') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Statistiques</a>
                    <a href=\"{{ path('messagerie_inbox') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Messagerie</a>
                {% elseif is_granted('ROLE_USER') %}
                    <a href=\"{{ path('annonces') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"{{ path('vendreMaVoiture') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Vendre ma voiture</a>
                    <a href=\"{{ path('mes_annonces') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mes annonces</a>
                    <a href=\"{{ path('messagerie_inbox') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Messagerie</a>
                {% else %}
                    <a href=\"{{ path('annonces') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Annonces</a>
                    <a href=\"{{ path('vendreMaVoiture') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Vendre ma voiture</a>
                {% endif %}
            </div>
            
            <div class=\"pt-4 pb-3 border-t border-gray-200\">
                {% if app.user %}
                    <div class=\"flex items-center px-5\">
                        <div class=\"flex-shrink-0\">
                            <div class=\"w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold uppercase\">
                                {{ app.user.prenom|first }}{{ app.user.nom|first }}
                            </div>
                        </div>
                        <div class=\"ml-3\">
                            <div class=\"text-base font-medium text-primary\">{{ app.user.prenom }} {{ app.user.nom }}</div>
                            <div class=\"text-sm font-medium text-gray-500\">{{ app.user.email }}</div>
                        </div>
                    </div>
                    <div class=\"mt-3 px-2 space-y-1\">
                        <a href=\"{{ path('favoris') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mes Favoris</a>
                        <a href=\"{{ path('avis_vendeur', {id: app.user.id}) }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Mon Profil</a>
                        <a href=\"{{ path('parametres') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Paramètres</a>
                        <a href=\"{{ path('deconnexion') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-red-600 hover:bg-red-50\">Déconnexion</a>
                    </div>
                {% else %}
                    <div class=\"mt-3 px-2 space-y-1\">
                        <a href=\"{{ path('connexion') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-tertiary hover:text-primary hover:bg-gray-50\">Connexion</a>
                        <a href=\"{{ path('inscription') }}\" class=\"block px-3 py-2 rounded-md text-base font-medium text-primary hover:bg-gray-50\">S'inscrire</a>
                    </div>
                {% endif %}
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btn = document.getElementById('mobile-menu-btn');
                const menu = document.getElementById('mobile-menu');
                const iconClosed = document.getElementById('icon-menu-closed');
                const iconOpen = document.getElementById('icon-menu-open');
                
                if(btn && menu) {
                    btn.addEventListener('click', function() {
                        const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                        btn.setAttribute('aria-expanded', !isExpanded);
                        menu.classList.toggle('hidden');
                        iconClosed.classList.toggle('hidden');
                        iconOpen.classList.toggle('hidden');
                    });
                }
            });
        </script>
        {% endblock %}
    </nav>

    <main class=\"flex-grow\">
        {% block main %}

        {% endblock %}
    </main>

    <footer class=\"flex-none py-10 text-white\">
        {% block footer %}
            <div class=\"px-10 py-5 flex flex-row gap-8\">
                <div class=\"basis-1/3\"> <!-- 1ere colonne -->
                    <a href=\"{{ path('homePage') }}\" class=\"inline-block pb-5\">
                        <img src=\"{{ asset('automarket_logo.svg') }}\" alt=\"AutoMarket\" class=\"h-12 w-auto\">
                    </a>
                    <p class=\"desc text-white/70\">
                        L'expérience du Showroom Digital. Redéfinir la façon dont les passionnés achètent et vendent
                        des chefs-d'œuvres automobiles avec intégrité éditoriale
                    </p>
                </div>
                <div class=\"basis-1/6 text-[15px] text-white/70\"> <!-- 2eme colonne - Ecosystème -->
                    <ul>
                        <li class=\"pb-5\">
                            <h3 class=\"font-['ManRope'] text-[15px] font-bold text-secondary\">ÉCOSYSTÈME</h3>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"pb-3\"><a href=\"{{ path('admin_utilisateurs') }}\">Utilisateurs</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('admin_annonces') }}\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('admin_catalogue') }}\">Catalogue</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('stats') }}\">Statistiques</a></li>
                        {% elseif is_granted('ROLE_ENTREPRISE') %}
                        <li class=\"pb-3\"><a href=\"{{ path('annonces') }}\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('vendreMaVoiture') }}\">Vendre ma voiture</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('mes_annonces') }}\">Mes annonces</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('stats') }}\">Statistiques</a></li>
                        {% elseif is_granted('ROLE_USER') %}
                        <li class=\"pb-3\"><a href=\"{{ path('annonces') }}\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('vendreMaVoiture') }}\">Vendre ma voiture</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('mes_annonces') }}\">Mes annonces</a></li>
                        {% else %}
                        <li class=\"pb-3\"><a href=\"{{ path('annonces') }}\">Annonces</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('vendreMaVoiture') }}\">Vendre ma voiture</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('connexion') }}\">Connexion</a></li>
                        <li class=\"pb-3\"><a href=\"{{ path('inscription') }}\">S'inscrire</a></li>
                        {% endif %}
                    </ul>
                </div>

                <div class=\"basis-1/6 text-[15px] text-white/70\"> <!-- 3eme colonne - Entreprise -->
                    <ul>
                        <li class=\"pb-5\">
                            <h3 class=\"font-['ManRope'] text-[15px] font-bold text-secondary\">ENTREPRISE</h3>
                        </li>
                        <li class=\"pb-3\">
                            <a>Politique de confidentialité</a>
                        </li>
                        <li class=\"pb-3\">
                            <a>Conditions d'utilisations</a>
                        </li>
                        <li class=\"pb-3\">
                            <a>Politique de Cookies</a>
                        </li>
                        <li class=\"pb-3\">
                            <a>Contactez-nous</a>
                        </li>
                    </ul>
                </div>
                <div class=\"flex-1 text-[15px] text-white/70\"> <!-- 4eme colonne - Rejoindre le club -->
                    <ul>
                        <li class=\"pb-5\">
                            <h3 class=\"font-['ManRope'] text-[15px] font-bold text-secondary\">REJOINDRE LE CLUB</h3>
                        </li>
                        <li class=\"pb-3\">
                            <p>Recevez le briefing éditorial hebdomadaire sur les tendances du marché et un
                            accès anticipé exclusif aux annonces rares</p>
                        </li>
                        <li class=\"pb-3\">
                            <form class=\"flex gap-3\">
                                <input class=\"bg-white/5 border-none rounded-lg px-4 py-3 flex-1 text-sm focus:ring-1
                                 focus:ring-secondary text-white\" placeholder=\"Adresse email\" type=\"email\"/>
                                <button class=\"bg-secondary px-6 rounded-lg font-bold hover:bg-secondary-container
                                transition-all \">
                                    <span> > </span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>


            </div>
            <div class=\"border-t text-[10px] border-white/5 text-white/30 px-10 pt-5\">
                <ul class=\"flex full-width flex-row gap-5\">
                    <li class=\"\">
                        © 2026 AUTOMARKET. Tous droits réservés
                    </li>
                    <li class=\"spacer\"></li>
                    <li class=\"\">
                        <a href=\"https://www.instagram.com\">INSTAGRAM</a>
                    </li>
                    <li class=\"\">
                        <a href=\"https://www.x.com\">X / TWITTER</a>
                    </li>
                    <li class=\"\">
                        <a href=\"https://www.linkedin.com\">LINKEDIN</a>
                    </li>
                </ul>
            </div>
        {% endblock %}
    </footer>
{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\jean-\\PhpstormProjects\\WE4A_projet\\templates\\base.html.twig");
    }
}
