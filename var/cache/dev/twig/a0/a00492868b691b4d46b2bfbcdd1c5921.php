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
class __TwigTemplate_8f0b70884dcda446b77d65d5dd204eff extends Template
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
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 151
=======
        // line 175
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 176
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
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
        yield "    <nav class=\"header flex-none shadow-lg/5\">
        ";
        // line 33
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 56
=======
        // line 73
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
        yield "    </nav>

    <main class=\"flex-grow\">
        ";
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 59
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 62
=======
        // line 76
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 79
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
        yield "    </main>

    <footer class=\"flex-none py-10 text-white\">
        ";
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 65
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 149
=======
        // line 82
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 173
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
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
        yield "            <ul class = \"nav-container\">

                <li id=\"nav-logo\" class=\"text-[#04122e]\">
                    <h1>
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homePage");
        yield "\">AutoMarket</a>
                    </h1>
                </li>

<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
                <li class=\"nav-item nav-gauche\"><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\">Annonces</a></li>

                <li class=\"nav-item nav-gauche\"><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
        yield "\">Vendre ma voiture</a></li>

                <li class=\"spacer\"></li>

                ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "
                ";
        } else {
            // line 51
=======
                ";
        // line 44
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                    <li class=\"nav-item nav-gauche\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">Tableau de bord</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
            yield "\">Utilisateurs</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces");
            yield "\">Annonces</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalogue");
            yield "\">Catalogue</a></li>
                ";
        } else {
            // line 50
            yield "                    <li class=\"nav-item nav-gauche\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\">Annonces</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
            yield "\">Vendre ma voiture</a></li>
                    ";
            // line 52
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                    <li class=\"nav-item nav-gauche\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
                yield "\">Mes annonces</a></li>
                    ";
            }
            // line 55
            yield "                ";
        }
        // line 56
        yield "
                <li class=\"spacer\"></li>

                ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                    <li class=\"text-tertiary text-sm\">Bonjour, <span class=\"font-semibold text-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            yield "</span></li>
                    <li>
                        <a href=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            yield "\"
                           class=\"px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-all text-sm font-semibold\">
                            Déconnexion
                        </a>
                    </li>
                ";
        } else {
            // line 68
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
            yield "                    <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\">Connexion</a></li>
                    <li><a class=\"px-6 py-2.5 bg-primary text-white font-bold rounded-lg active:scale-95\" href=\"";
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
            // line 52
=======
            // line 69
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            yield "\">S'inscrire</a></li>
                ";
        }
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 54
        yield "            </ul>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 60
        yield "
=======
        // line 71
        yield "            </ul>
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 77
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 66
        yield "            <div class=\"px-10 py-5 flex flex-row gap-8\">
                <div class=\"basis-1/3\"> <!-- 1ere colonne -->
                    <h2 class=\"font-['ManRope'] text-white text-[20px] font-bold pb-5\">AutoMarket</h2>
=======
        // line 83
        yield "            <div class=\"px-10 py-5 flex flex-row gap-8\">
                <div class=\"basis-1/3\"> <!-- 1ere colonne -->
                    <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homePage");
        yield "\" class=\"inline-block pb-5\">
                        <img src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("automarket_logo.svg"), "html", null, true);
        yield "\" alt=\"AutoMarket\" class=\"h-12 w-auto\">
                    </a>
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
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
                        <li class=\"pb-3\">
                            <a href=\"";
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 80
=======
        // line 99
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\" >Annonces</a>
                        </li>
                        <li class=\"pb-3\">
                            <a href=\"";
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
        yield "\">Vente</a>
                        </li>
                    </ul>
=======
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
        yield "\">Vente</a>
                        </li>
                        ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                        <li class=\"pb-3\">
                            <a href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_annonces");
            yield "\">Mes annonces</a>
                        </li>
                        ";
        }
        // line 109
        yield "                    </ul>
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
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

<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
=======
    // line 175
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

>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
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
<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
        return array (  285 => 83,  279 => 80,  263 => 66,  253 => 65,  244 => 60,  234 => 59,  225 => 54,  220 => 52,  215 => 51,  211 => 49,  209 => 48,  202 => 44,  197 => 42,  190 => 38,  184 => 34,  174 => 33,  165 => 149,  163 => 65,  158 => 62,  156 => 59,  151 => 56,  149 => 33,  146 => 32,  136 => 31,  125 => 10,  115 => 9,  98 => 5,  89 => 151,  87 => 31,  66 => 12,  64 => 9,  57 => 5,  51 => 1,);
=======
        return array (  432 => 175,  361 => 109,  355 => 106,  352 => 105,  350 => 104,  345 => 102,  339 => 99,  323 => 86,  319 => 85,  315 => 83,  305 => 82,  296 => 77,  286 => 76,  277 => 71,  272 => 69,  267 => 68,  258 => 62,  252 => 60,  250 => 59,  245 => 56,  242 => 55,  236 => 53,  234 => 52,  230 => 51,  225 => 50,  220 => 48,  216 => 47,  212 => 46,  207 => 45,  205 => 44,  197 => 39,  193 => 38,  187 => 34,  177 => 33,  168 => 173,  166 => 82,  161 => 79,  159 => 76,  154 => 73,  152 => 33,  149 => 32,  139 => 31,  128 => 10,  118 => 9,  101 => 5,  92 => 176,  90 => 175,  88 => 31,  67 => 12,  65 => 9,  58 => 5,  52 => 1,);
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php
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
    <nav class=\"header flex-none shadow-lg/5\">
        {% block header %}
            <ul class = \"nav-container\">

                <li id=\"nav-logo\" class=\"text-[#04122e]\">
                    <h1>
                        <a href=\"{{ path('homePage') }}\">AutoMarket</a>
                    </h1>
                </li>

<<<<<<< Updated upstream:var/cache/dev/twig/a0/a00492868b691b4d46b2bfbcdd1c5921.php
                <li class=\"nav-item nav-gauche\"><a href=\"{{ path('annonces') }}\">Annonces</a></li>

                <li class=\"nav-item nav-gauche\"><a href=\"{{ path('vendreMaVoiture') }}\">Vendre ma voiture</a></li>
=======
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item nav-gauche\"><a href=\"{{ path('admin_dashboard') }}\">Tableau de bord</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"{{ path('admin_utilisateurs') }}\">Utilisateurs</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"{{ path('admin_annonces') }}\">Annonces</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"{{ path('admin_catalogue') }}\">Catalogue</a></li>
                {% else %}
                    <li class=\"nav-item nav-gauche\"><a href=\"{{ path('annonces') }}\">Annonces</a></li>
                    <li class=\"nav-item nav-gauche\"><a href=\"{{ path('vendreMaVoiture') }}\">Vendre ma voiture</a></li>
                    {% if app.user %}
                    <li class=\"nav-item nav-gauche\"><a href=\"{{ path('mes_annonces') }}\">Mes annonces</a></li>
                    {% endif %}
                {% endif %}
>>>>>>> Stashed changes:var/cache/dev/twig/3c/3c86121d3c47a11a2856453b78091cb8.php

                <li class=\"spacer\"></li>

                {% if app.user %}

                {% else %}
                    <li><a href=\"{{ path(\"connexion\") }}\">Connexion</a></li>
                    <li><a class=\"px-6 py-2.5 bg-primary text-white font-bold rounded-lg active:scale-95\" href=\"{{ path(\"inscription\") }}\">S'inscrire</a></li>
                {% endif %}
            </ul>
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
                    <h2 class=\"font-['ManRope'] text-white text-[20px] font-bold pb-5\">AutoMarket</h2>
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
                        <li class=\"pb-3\">
                            <a href=\"{{ path(\"annonces\") }}\" >Annonces</a>
                        </li>
                        <li class=\"pb-3\">
                            <a href=\"{{ path(\"vendreMaVoiture\") }}\">Vente</a>
                        </li>
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
</body>
</html>", "base.html.twig", "/Users/pierre/Documents/UTBM/BR2/WE4/WE4A/projet/templates/base.html.twig");
    }
}
