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

/* avis/avis.html.twig */
class __TwigTemplate_98fc84c60c508e4d320ea75ea63e9ca0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/avis.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        yield "Profil de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendeur"]) || array_key_exists("vendeur", $context) ? $context["vendeur"] : (function () { throw new RuntimeError('Variable "vendeur" does not exist.', 2, $this->source); })()), "prenom", [], "any", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendeur"]) || array_key_exists("vendeur", $context) ? $context["vendeur"] : (function () { throw new RuntimeError('Variable "vendeur" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        yield " — AutoMarket";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        yield "<div class=\"max-w-3xl mx-auto px-6 py-10\">

    ";
        // line 8
        yield "    ";
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
    ";
        // line 16
        yield "    <div class=\"flex items-center gap-4 mb-8\">
        <div class=\"w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center shrink-0\">
            <span class=\"text-xl font-bold text-primary font-['ManRope']\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendeur"]) || array_key_exists("vendeur", $context) ? $context["vendeur"] : (function () { throw new RuntimeError('Variable "vendeur" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18))), "html", null, true);
        yield "</span>
        </div>
        <div>
            <h1 class=\"text-2xl font-bold text-primary font-['ManRope']\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendeur"]) || array_key_exists("vendeur", $context) ? $context["vendeur"] : (function () { throw new RuntimeError('Variable "vendeur" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendeur"]) || array_key_exists("vendeur", $context) ? $context["vendeur"] : (function () { throw new RuntimeError('Variable "vendeur" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "</h1>
            <div class=\"flex items-center gap-2 mt-1\">
                ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "nb_avis", [], "any", false, false, false, 23) > 0)) {
            // line 24
            yield "                    <div class=\"flex gap-0.5\">
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 26
                yield "                            <svg class=\"w-4 h-4 ";
                yield ((($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()), "note_moyenne", [], "any", false, false, false, 26)))) ? ("text-amber-400") : ("text-gray-200"));
                yield "\"
                                 fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                            </svg>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                    </div>
                    <span class=\"text-sm font-semibold text-primary\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 32, $this->source); })()), "note_moyenne", [], "any", false, false, false, 32), "html", null, true);
            yield "</span>
                    <span class=\"text-sm text-tertiary\">(";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 33, $this->source); })()), "nb_avis", [], "any", false, false, false, 33), "html", null, true);
            yield " avis)</span>
                ";
        } else {
            // line 35
            yield "                    <span class=\"text-sm text-tertiary\">Aucun avis pour le moment</span>
                ";
        }
        // line 37
        yield "            </div>
        </div>
    </div>

    ";
        // line 42
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendeur"]) || array_key_exists("vendeur", $context) ? $context["vendeur"] : (function () { throw new RuntimeError('Variable "vendeur" does not exist.', 43, $this->source); })()), "id_utilisateur", [], "any", false, false, false, 43))) {
                // line 44
                yield "            <div class=\"bg-gray-50 border border-gray-200 rounded-xl p-4 mb-8 text-sm text-tertiary text-center\">
                Vous ne pouvez pas laisser un avis sur votre propre profil.
            </div>
        ";
            } elseif ((($tmp =             // line 47
(isset($context["deja_note"]) || array_key_exists("deja_note", $context) ? $context["deja_note"] : (function () { throw new RuntimeError('Variable "deja_note" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "            <div class=\"bg-amber-50 border border-amber-200 rounded-xl p-4 mb-8 text-sm text-amber-800 text-center\">
                Vous avez déjà laissé un avis pour ce vendeur.
            </div>
        ";
            } else {
                // line 52
                yield "            <div class=\"bg-white rounded-xl p-6 shadow-sm mb-8\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Laisser un avis
                </h2>
                <form method=\"post\" action=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_ajouter", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendeur"]) || array_key_exists("vendeur", $context) ? $context["vendeur"] : (function () { throw new RuntimeError('Variable "vendeur" does not exist.', 57, $this->source); })()), "id_utilisateur", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("avis"), "html", null, true);
                yield "\">

                    ";
                // line 61
                yield "                    <div class=\"mb-4\">
                        <label class=\"block text-sm font-medium text-primary mb-2\">Note <span class=\"text-red-500\">*</span></label>
                        <div class=\"flex gap-1\" id=\"star-selector\">
                            ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 65
                    yield "                                <button type=\"button\" data-value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\"
                                        class=\"star-btn w-9 h-9 text-gray-300 hover:text-amber-400 transition-colors\"
                                        aria-label=\"";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield " étoile(s)\">
                                    <svg fill=\"currentColor\" viewBox=\"0 0 24 24\" class=\"w-full h-full\">
                                        <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                    </svg>
                                </button>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "                        </div>
                        <input type=\"hidden\" name=\"note\" id=\"note-input\" value=\"0\">
                    </div>

                    ";
                // line 78
                yield "                    <div class=\"mb-5\">
                        <label for=\"contenu\" class=\"block text-sm font-medium text-primary mb-1\">Commentaire</label>
                        <textarea id=\"contenu\" name=\"contenu\" rows=\"4\" maxlength=\"2000\"
                                  placeholder=\"Décrivez votre expérience avec ce vendeur...\"
                                  class=\"w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-primary resize-none focus:outline-none focus:ring-2 focus:ring-secondary/30 focus:border-secondary\"></textarea>
                    </div>

                    <button type=\"submit\"
                            class=\"px-6 py-2.5 bg-secondary text-white font-bold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm\">
                        Publier l'avis
                    </button>
                </form>
            </div>
        ";
            }
            // line 92
            yield "    ";
        } else {
            // line 93
            yield "        <div class=\"bg-white rounded-xl p-5 shadow-sm mb-8 flex items-center justify-between gap-4\">
            <p class=\"text-sm text-tertiary\">Connectez-vous pour laisser un avis.</p>
            <a href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            yield "\"
               class=\"shrink-0 px-5 py-2 bg-primary text-white font-bold rounded-lg text-sm hover:bg-primary/90 transition-all\">
                Se connecter
            </a>
        </div>
    ";
        }
        // line 101
        yield "
    ";
        // line 103
        yield "    <div class=\"mb-12\">
        <h2 class=\"font-bold text-primary text-xl font-['ManRope'] mb-6 flex items-center gap-2\">
            <span class=\"w-1.5 h-6 bg-secondary rounded-full inline-block\"></span>
            Annonces en cours
        </h2>
        ";
        // line 108
        yield from $this->load("annonce/_liste.html.twig", 108)->unwrap()->yield(CoreExtension::merge($context, ["annonces" => (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 108, $this->source); })())]));
        // line 109
        yield "    </div>

    ";
        // line 112
        yield "    <div>
        <h2 class=\"font-bold text-primary text-xl font-['ManRope'] mb-6 flex items-center gap-2\">
            <span class=\"w-1.5 h-6 bg-secondary rounded-full inline-block\"></span>
            Avis clients
        </h2>
        <div class=\"space-y-4\">
        ";
        // line 118
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 118, $this->source); })()))) {
            // line 119
            yield "            <div class=\"flex flex-col items-center justify-center py-16 text-center\">
                <div class=\"w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mb-4\">
                    <svg class=\"w-8 h-8 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z\"/>
                    </svg>
                </div>
                <p class=\"text-sm text-tertiary\">Aucun avis pour le moment. Soyez le premier à en laisser un !</p>
            </div>
        ";
        } else {
            // line 128
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 128, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 129
                yield "            <div class=\"bg-white rounded-xl p-5 shadow-sm\">
                <div class=\"flex items-start justify-between gap-3\">
                    <div class=\"flex items-center gap-3\">
                        <div class=\"w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center shrink-0\">
                            <span class=\"text-xs font-bold text-primary\">";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_prenom", [], "any", false, false, false, 133))), "html", null, true);
                yield "</span>
                        </div>
                        <div>
                            <p class=\"font-semibold text-primary text-sm\">";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_prenom", [], "any", false, false, false, 136), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_nom", [], "any", false, false, false, 136), "html", null, true);
                yield "</p>
                            <p class=\"text-[11px] text-tertiary\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_avis", [], "any", false, false, false, 137), "d/m/Y"), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <div class=\"flex gap-0.5 shrink-0\">
                            ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 143
                    yield "                                <svg class=\"w-4 h-4 ";
                    yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["a"], "note", [], "any", false, false, false, 143))) ? ("text-amber-400") : ("text-gray-200"));
                    yield "\"
                                     fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                yield "                        </div>
                        ";
                // line 149
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149) == CoreExtension::getAttribute($this->env, $this->source, $context["a"], "redacteur_id", [], "any", false, false, false, 149)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
                    // line 150
                    yield "                            <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_avis_utilisateur", [], "any", false, false, false, 150)]), "html", null, true);
                    yield "\"
                                  onsubmit=\"return confirm('Supprimer cet avis ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken(("avis_supprimer_" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_avis_utilisateur", [], "any", false, false, false, 152))), "html", null, true);
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
                // line 161
                yield "                    </div>
                </div>
                ";
                // line 163
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "contenu", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 164
                    yield "                    <p class=\"mt-3 text-sm text-tertiary leading-relaxed\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "contenu", [], "any", false, false, false, 164), "html", null, true);
                    yield "</p>
                ";
                }
                // line 166
                yield "            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            yield "        ";
        }
        // line 169
        yield "    </div>
    </div>

</div>

<script>
(function () {
    var stars   = document.querySelectorAll('.star-btn');
    var input   = document.getElementById('note-input');
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
        return "avis/avis.html.twig";
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
        return array (  413 => 169,  410 => 168,  403 => 166,  397 => 164,  395 => 163,  391 => 161,  379 => 152,  373 => 150,  371 => 149,  368 => 148,  356 => 143,  352 => 142,  344 => 137,  338 => 136,  332 => 133,  326 => 129,  321 => 128,  310 => 119,  308 => 118,  300 => 112,  296 => 109,  294 => 108,  287 => 103,  284 => 101,  275 => 95,  271 => 93,  268 => 92,  252 => 78,  246 => 73,  234 => 67,  228 => 65,  224 => 64,  219 => 61,  214 => 58,  210 => 57,  203 => 52,  197 => 48,  195 => 47,  190 => 44,  187 => 43,  184 => 42,  178 => 37,  174 => 35,  169 => 33,  165 => 32,  162 => 31,  150 => 26,  146 => 25,  143 => 24,  141 => 23,  134 => 21,  128 => 18,  124 => 16,  121 => 14,  112 => 12,  107 => 11,  98 => 9,  93 => 8,  89 => 5,  79 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block pageTitle %}Profil de {{ vendeur.prenom }} {{ vendeur.nom }} — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-3xl mx-auto px-6 py-10\">

    {# Flashes #}
    {% for msg in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm\">{{ msg }}</div>
    {% endfor %}

    {# En-tête vendeur #}
    <div class=\"flex items-center gap-4 mb-8\">
        <div class=\"w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center shrink-0\">
            <span class=\"text-xl font-bold text-primary font-['ManRope']\">{{ vendeur.prenom|first|upper }}</span>
        </div>
        <div>
            <h1 class=\"text-2xl font-bold text-primary font-['ManRope']\">{{ vendeur.prenom }} {{ vendeur.nom }}</h1>
            <div class=\"flex items-center gap-2 mt-1\">
                {% if stats.nb_avis > 0 %}
                    <div class=\"flex gap-0.5\">
                        {% for i in 1..5 %}
                            <svg class=\"w-4 h-4 {{ i <= stats.note_moyenne|round ? 'text-amber-400' : 'text-gray-200' }}\"
                                 fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                            </svg>
                        {% endfor %}
                    </div>
                    <span class=\"text-sm font-semibold text-primary\">{{ stats.note_moyenne }}</span>
                    <span class=\"text-sm text-tertiary\">({{ stats.nb_avis }} avis)</span>
                {% else %}
                    <span class=\"text-sm text-tertiary\">Aucun avis pour le moment</span>
                {% endif %}
            </div>
        </div>
    </div>

    {# Formulaire d'ajout d'avis #}
    {% if app.user %}
        {% if app.user.id == vendeur.id_utilisateur %}
            <div class=\"bg-gray-50 border border-gray-200 rounded-xl p-4 mb-8 text-sm text-tertiary text-center\">
                Vous ne pouvez pas laisser un avis sur votre propre profil.
            </div>
        {% elseif deja_note %}
            <div class=\"bg-amber-50 border border-amber-200 rounded-xl p-4 mb-8 text-sm text-amber-800 text-center\">
                Vous avez déjà laissé un avis pour ce vendeur.
            </div>
        {% else %}
            <div class=\"bg-white rounded-xl p-6 shadow-sm mb-8\">
                <h2 class=\"font-bold text-primary text-base font-['ManRope'] mb-4 flex items-center gap-2\">
                    <span class=\"w-1 h-4 bg-secondary rounded-full inline-block\"></span>
                    Laisser un avis
                </h2>
                <form method=\"post\" action=\"{{ path('avis_ajouter', {id: vendeur.id_utilisateur}) }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('avis') }}\">

                    {# Sélecteur d'étoiles #}
                    <div class=\"mb-4\">
                        <label class=\"block text-sm font-medium text-primary mb-2\">Note <span class=\"text-red-500\">*</span></label>
                        <div class=\"flex gap-1\" id=\"star-selector\">
                            {% for i in 1..5 %}
                                <button type=\"button\" data-value=\"{{ i }}\"
                                        class=\"star-btn w-9 h-9 text-gray-300 hover:text-amber-400 transition-colors\"
                                        aria-label=\"{{ i }} étoile(s)\">
                                    <svg fill=\"currentColor\" viewBox=\"0 0 24 24\" class=\"w-full h-full\">
                                        <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                    </svg>
                                </button>
                            {% endfor %}
                        </div>
                        <input type=\"hidden\" name=\"note\" id=\"note-input\" value=\"0\">
                    </div>

                    {# Commentaire #}
                    <div class=\"mb-5\">
                        <label for=\"contenu\" class=\"block text-sm font-medium text-primary mb-1\">Commentaire</label>
                        <textarea id=\"contenu\" name=\"contenu\" rows=\"4\" maxlength=\"2000\"
                                  placeholder=\"Décrivez votre expérience avec ce vendeur...\"
                                  class=\"w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-primary resize-none focus:outline-none focus:ring-2 focus:ring-secondary/30 focus:border-secondary\"></textarea>
                    </div>

                    <button type=\"submit\"
                            class=\"px-6 py-2.5 bg-secondary text-white font-bold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm\">
                        Publier l'avis
                    </button>
                </form>
            </div>
        {% endif %}
    {% else %}
        <div class=\"bg-white rounded-xl p-5 shadow-sm mb-8 flex items-center justify-between gap-4\">
            <p class=\"text-sm text-tertiary\">Connectez-vous pour laisser un avis.</p>
            <a href=\"{{ path('connexion') }}\"
               class=\"shrink-0 px-5 py-2 bg-primary text-white font-bold rounded-lg text-sm hover:bg-primary/90 transition-all\">
                Se connecter
            </a>
        </div>
    {% endif %}

    {# Annonces du vendeur #}
    <div class=\"mb-12\">
        <h2 class=\"font-bold text-primary text-xl font-['ManRope'] mb-6 flex items-center gap-2\">
            <span class=\"w-1.5 h-6 bg-secondary rounded-full inline-block\"></span>
            Annonces en cours
        </h2>
        {% include 'annonce/_liste.html.twig' with {'annonces': annonces} %}
    </div>

    {# Liste des avis #}
    <div>
        <h2 class=\"font-bold text-primary text-xl font-['ManRope'] mb-6 flex items-center gap-2\">
            <span class=\"w-1.5 h-6 bg-secondary rounded-full inline-block\"></span>
            Avis clients
        </h2>
        <div class=\"space-y-4\">
        {% if avis is empty %}
            <div class=\"flex flex-col items-center justify-center py-16 text-center\">
                <div class=\"w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mb-4\">
                    <svg class=\"w-8 h-8 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z\"/>
                    </svg>
                </div>
                <p class=\"text-sm text-tertiary\">Aucun avis pour le moment. Soyez le premier à en laisser un !</p>
            </div>
        {% else %}
            {% for a in avis %}
            <div class=\"bg-white rounded-xl p-5 shadow-sm\">
                <div class=\"flex items-start justify-between gap-3\">
                    <div class=\"flex items-center gap-3\">
                        <div class=\"w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center shrink-0\">
                            <span class=\"text-xs font-bold text-primary\">{{ a.redacteur_prenom|first|upper }}</span>
                        </div>
                        <div>
                            <p class=\"font-semibold text-primary text-sm\">{{ a.redacteur_prenom }} {{ a.redacteur_nom }}</p>
                            <p class=\"text-[11px] text-tertiary\">{{ a.date_avis|date('d/m/Y') }}</p>
                        </div>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <div class=\"flex gap-0.5 shrink-0\">
                            {% for i in 1..5 %}
                                <svg class=\"w-4 h-4 {{ i <= a.note ? 'text-amber-400' : 'text-gray-200' }}\"
                                     fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                            {% endfor %}
                        </div>
                        {% if app.user and (app.user.id == a.redacteur_id or is_granted('ROLE_ADMIN')) %}
                            <form method=\"post\" action=\"{{ path('avis_supprimer', {id: a.id_avis_utilisateur}) }}\"
                                  onsubmit=\"return confirm('Supprimer cet avis ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('avis_supprimer_' ~ a.id_avis_utilisateur) }}\">
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
                    <p class=\"mt-3 text-sm text-tertiary leading-relaxed\">{{ a.contenu }}</p>
                {% endif %}
            </div>
            {% endfor %}
        {% endif %}
    </div>
    </div>

</div>

<script>
(function () {
    var stars   = document.querySelectorAll('.star-btn');
    var input   = document.getElementById('note-input');
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
", "avis/avis.html.twig", "C:\\Users\\jean-\\PhpstormProjects\\WE4A_projet\\templates\\avis\\avis.html.twig");
    }
}
