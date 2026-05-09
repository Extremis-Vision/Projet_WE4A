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

/* messagerie/inbox.html.twig */
class __TwigTemplate_e741ad63a5110c126e368e3dec903556 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messagerie/inbox.html.twig"));

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

        yield "Messagerie — AutoMarket";
        
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
        yield "<div class=\"max-w-6xl mx-auto px-6 py-10 flex gap-6 min-h-[calc(100vh-200px)]\">

    ";
        // line 9
        yield "    <aside class=\"w-80 flex-none flex flex-col bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100\">

        <div class=\"px-5 py-4 border-b border-gray-100 flex items-center justify-between\">
            <h1 class=\"text-lg font-bold text-primary font-['ManRope']\">Messages</h1>
            ";
        // line 13
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 13, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                <span class=\"text-xs bg-secondary text-white font-bold px-2 py-0.5 rounded-full\">
                    ";
            // line 15
            yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 15, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 15, $this->source); })()), "lu", [], "any", false, false, false, 15); }))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 15, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 15, $this->source); })()), "lu", [], "any", false, false, false, 15); })), "html", null, true)) : (""));
            yield "
                </span>
            ";
        }
        // line 18
        yield "        </div>

        <div class=\"flex-1 overflow-y-auto divide-y divide-gray-50\">
            ";
        // line 21
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "                <div class=\"flex flex-col items-center justify-center h-full py-16 text-center px-6\">
                    <div class=\"w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mb-4\">
                        <svg class=\"w-8 h-8 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\"/>
                        </svg>
                    </div>
                    <p class=\"text-sm font-semibold text-primary mb-1\">Aucun message</p>
                    <p class=\"text-xs text-primary/50\">Vos échanges avec les vendeurs apparaîtront ici.</p>
                </div>
            ";
        } else {
            // line 32
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
                // line 33
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_conversation", ["id_vendeur" => CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "interlocuteur_id", [], "any", false, false, false, 33), "id_annonce" => CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "id_annonce", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\"
                   class=\"flex items-center gap-3 px-5 py-4 hover:bg-gray-50 transition-colors
                          ";
                // line 35
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "interlocuteur_id", [], "any", false, false, false, 35) == (isset($context["interlocuteur_actif"]) || array_key_exists("interlocuteur_actif", $context) ? $context["interlocuteur_actif"] : (function () { throw new RuntimeError('Variable "interlocuteur_actif" does not exist.', 35, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "id_annonce", [], "any", false, false, false, 35) == (isset($context["id_annonce_actif"]) || array_key_exists("id_annonce_actif", $context) ? $context["id_annonce_actif"] : (function () { throw new RuntimeError('Variable "id_annonce_actif" does not exist.', 35, $this->source); })())))) ? ("bg-secondary/5 border-l-2 border-secondary") : (""));
                yield "\">

                    ";
                // line 38
                yield "                    <div class=\"w-11 h-11 rounded-full bg-primary flex items-center justify-center flex-none text-white font-bold text-sm uppercase\">
                        ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "prenom", [], "any", false, false, false, 39)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "nom", [], "any", false, false, false, 39)), "html", null, true);
                yield "
                    </div>

                    <div class=\"flex-1 min-w-0\">
                        <div class=\"flex items-center justify-between mb-0.5\">
                            <span class=\"text-sm font-semibold text-primary truncate\">
                                ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "prenom", [], "any", false, false, false, 45), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "nom", [], "any", false, false, false, 45), "html", null, true);
                yield "
                            </span>
                            <span class=\"text-[11px] text-primary/40 flex-none ml-2\">
                                ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "date_dernier_message", [], "any", false, false, false, 48), "d/m"), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"flex items-center justify-between\">
                            <p class=\"text-[11px] text-secondary/70 truncate font-medium\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "annonce_titre", [], "any", false, false, false, 52), "html", null, true);
                yield "</p>
                        <p class=\"text-xs text-primary/50 truncate\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "dernier_message", [], "any", false, false, false, 53), "html", null, true);
                yield "</p>
                            ";
                // line 54
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["conv"], "lu", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                                <span class=\"w-2 h-2 rounded-full bg-secondary flex-none ml-2\"></span>
                            ";
                }
                // line 57
                yield "                        </div>
                    </div>
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['conv'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "            ";
        }
        // line 62
        yield "        </div>
    </aside>

    ";
        // line 66
        yield "    <section class=\"flex-1 flex flex-col bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100\">

        ";
        // line 68
        if ((array_key_exists("interlocuteur", $context) && (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 68, $this->source); })()))) {
            // line 69
            yield "
            ";
            // line 71
            yield "            ";
            $context["active_conv"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 71, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 71, $this->source); })()), "interlocuteur_id", [], "any", false, false, false, 71) == (isset($context["interlocuteur_actif"]) || array_key_exists("interlocuteur_actif", $context) ? $context["interlocuteur_actif"] : (function () { throw new RuntimeError('Variable "interlocuteur_actif" does not exist.', 71, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 71, $this->source); })()), "id_annonce", [], "any", false, false, false, 71) == (isset($context["id_annonce_actif"]) || array_key_exists("id_annonce_actif", $context) ? $context["id_annonce_actif"] : (function () { throw new RuntimeError('Variable "id_annonce_actif" does not exist.', 71, $this->source); })()))); }));
            // line 72
            yield "            <div class=\"px-6 py-4 border-b border-gray-100 flex items-center justify-between flex-none\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-10 h-10 rounded-xl bg-gray-50 border border-gray-100 flex items-center justify-center text-primary/40 shadow-sm\">
                        <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\"/>
                        </svg>
                    </div>
                    <div>
                        <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => (isset($context["id_annonce_actif"]) || array_key_exists("id_annonce_actif", $context) ? $context["id_annonce_actif"] : (function () { throw new RuntimeError('Variable "id_annonce_actif" does not exist.', 80, $this->source); })())]), "html", null, true);
            yield "\" class=\"font-bold text-primary text-sm hover:underline hover:text-secondary transition-colors\">
                            ";
            // line 81
            yield (((($tmp = (isset($context["active_conv"]) || array_key_exists("active_conv", $context) ? $context["active_conv"] : (function () { throw new RuntimeError('Variable "active_conv" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_conv"]) || array_key_exists("active_conv", $context) ? $context["active_conv"] : (function () { throw new RuntimeError('Variable "active_conv" does not exist.', 81, $this->source); })()), "annonce_titre", [], "any", false, false, false, 81), "html", null, true)) : ("Annonce"));
            yield "
                        </a>
                        <div class=\"flex items-center gap-2 mt-0.5\">
                            <div class=\"w-4 h-4 rounded-full bg-primary flex items-center justify-center text-white font-bold text-[8px] uppercase\">
                                ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 85, $this->source); })()), "prenom", [], "any", false, false, false, 85)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 85, $this->source); })()), "nom", [], "any", false, false, false, 85)), "html", null, true);
            yield "
                            </div>
                            <p class=\"text-xs text-primary/60\">Avec ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 87, $this->source); })()), "prenom", [], "any", false, false, false, 87), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 87, $this->source); })()), "nom", [], "any", false, false, false, 87), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 94
            yield "            <div class=\"flex-1 overflow-y-auto px-6 py-6 flex flex-col gap-4\" id=\"messages-container\">
                ";
            // line 95
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 95, $this->source); })()))) {
                // line 96
                yield "                    <div class=\"flex-1 flex flex-col items-center justify-center text-center py-16\">
                        <p class=\"text-sm text-primary/40\">Commencez la conversation avec <strong>";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 97, $this->source); })()), "prenom", [], "any", false, false, false, 97), "html", null, true);
                yield "</strong></p>
                    </div>
                ";
            } else {
                // line 100
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 100, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 101
                    yield "                        ";
                    $context["is_mine"] = (CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id_expediteur", [], "any", false, false, false, 101) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101));
                    // line 102
                    yield "                        <div class=\"flex ";
                    yield (((($tmp = (isset($context["is_mine"]) || array_key_exists("is_mine", $context) ? $context["is_mine"] : (function () { throw new RuntimeError('Variable "is_mine" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("justify-end") : ("justify-start"));
                    yield "\">
                            <div class=\"max-w-[70%] flex flex-col ";
                    // line 103
                    yield (((($tmp = (isset($context["is_mine"]) || array_key_exists("is_mine", $context) ? $context["is_mine"] : (function () { throw new RuntimeError('Variable "is_mine" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("items-end") : ("items-start"));
                    yield " gap-1\">

                                ";
                    // line 105
                    if ((($tmp =  !(isset($context["is_mine"]) || array_key_exists("is_mine", $context) ? $context["is_mine"] : (function () { throw new RuntimeError('Variable "is_mine" does not exist.', 105, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 106
                        yield "                                <span class=\"text-xs font-semibold text-primary/50 px-1\">
                                    ";
                        // line 107
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 107, $this->source); })()), "prenom", [], "any", false, false, false, 107), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    // line 110
                    yield "
                                <div class=\"px-4 py-3 rounded-2xl text-sm leading-relaxed
                                    ";
                    // line 112
                    yield (((($tmp = (isset($context["is_mine"]) || array_key_exists("is_mine", $context) ? $context["is_mine"] : (function () { throw new RuntimeError('Variable "is_mine" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-secondary text-white rounded-br-sm") : ("bg-gray-100 text-primary rounded-bl-sm"));
                    // line 114
                    yield "\">
                                    ";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 115), "html", null, true);
                    yield "
                                </div>

                                <span class=\"text-[11px] text-primary/30 px-1\">
                                    ";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "date_envoi", [], "any", false, false, false, 119), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                </span>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                yield "                ";
            }
            // line 125
            yield "            </div>

            ";
            // line 128
            yield "            <div class=\"px-6 py-4 border-t border-gray-100 flex-none\">
                <form action=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie_envoyer", ["id_vendeur" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["interlocuteur"]) || array_key_exists("interlocuteur", $context) ? $context["interlocuteur"] : (function () { throw new RuntimeError('Variable "interlocuteur" does not exist.', 129, $this->source); })()), "id_utilisateur", [], "any", false, false, false, 129), "id_annonce" => (isset($context["id_annonce_actif"]) || array_key_exists("id_annonce_actif", $context) ? $context["id_annonce_actif"] : (function () { throw new RuntimeError('Variable "id_annonce_actif" does not exist.', 129, $this->source); })())]), "html", null, true);
            yield "\" method=\"post\"
                      class=\"flex items-end gap-3\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("message"), "html", null, true);
            yield "\">
                    <textarea name=\"contenu\" rows=\"2\" placeholder=\"Écrire un message…\"
                              class=\"flex-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm text-primary
                                     resize-none focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\"></textarea>
                    <button type=\"submit\"
                            class=\"flex-none w-11 h-11 bg-secondary text-white rounded-xl flex items-center justify-center
                                   hover:bg-secondary/90 active:scale-95 transition-all shadow-md shadow-secondary/20\">
                        <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\"/>
                        </svg>
                    </button>
                </form>
            </div>

        ";
        } else {
            // line 146
            yield "
            ";
            // line 148
            yield "            <div class=\"flex-1 flex flex-col items-center justify-center text-center px-10\">
                <div class=\"w-20 h-20 rounded-2xl bg-secondary/10 flex items-center justify-center mb-6\">
                    <svg class=\"w-10 h-10 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\"/>
                    </svg>
                </div>
                <h2 class=\"text-xl font-bold text-primary font-['ManRope'] mb-2\">Vos messages</h2>
                <p class=\"text-sm text-primary/50 max-w-xs\">
                    Sélectionnez une conversation à gauche ou contactez un vendeur depuis une annonce.
                </p>
            </div>

        ";
        }
        // line 161
        yield "
    </section>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 168
        yield "<script>
    const container = document.getElementById('messages-container');
    if (container) container.scrollTop = container.scrollHeight;
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
        return "messagerie/inbox.html.twig";
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
        return array (  394 => 168,  384 => 167,  372 => 161,  357 => 148,  354 => 146,  336 => 131,  331 => 129,  328 => 128,  324 => 125,  321 => 124,  310 => 119,  303 => 115,  300 => 114,  298 => 112,  294 => 110,  288 => 107,  285 => 106,  283 => 105,  278 => 103,  273 => 102,  270 => 101,  265 => 100,  259 => 97,  256 => 96,  254 => 95,  251 => 94,  240 => 87,  234 => 85,  227 => 81,  223 => 80,  213 => 72,  210 => 71,  207 => 69,  205 => 68,  201 => 66,  196 => 62,  193 => 61,  184 => 57,  180 => 55,  178 => 54,  174 => 53,  170 => 52,  163 => 48,  155 => 45,  145 => 39,  142 => 38,  137 => 35,  131 => 33,  126 => 32,  114 => 22,  112 => 21,  107 => 18,  101 => 15,  98 => 14,  96 => 13,  90 => 9,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block pageTitle %}Messagerie — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-6xl mx-auto px-6 py-10 flex gap-6 min-h-[calc(100vh-200px)]\">

    {# ── Colonne gauche : liste des conversations ── #}
    <aside class=\"w-80 flex-none flex flex-col bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100\">

        <div class=\"px-5 py-4 border-b border-gray-100 flex items-center justify-between\">
            <h1 class=\"text-lg font-bold text-primary font-['ManRope']\">Messages</h1>
            {% if conversations is not empty %}
                <span class=\"text-xs bg-secondary text-white font-bold px-2 py-0.5 rounded-full\">
                    {{ conversations|filter(c => not c.lu)|length ?: '' }}
                </span>
            {% endif %}
        </div>

        <div class=\"flex-1 overflow-y-auto divide-y divide-gray-50\">
            {% if conversations is empty %}
                <div class=\"flex flex-col items-center justify-center h-full py-16 text-center px-6\">
                    <div class=\"w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mb-4\">
                        <svg class=\"w-8 h-8 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\"/>
                        </svg>
                    </div>
                    <p class=\"text-sm font-semibold text-primary mb-1\">Aucun message</p>
                    <p class=\"text-xs text-primary/50\">Vos échanges avec les vendeurs apparaîtront ici.</p>
                </div>
            {% else %}
                {% for conv in conversations %}
                <a href=\"{{ path('messagerie_conversation', {id_vendeur: conv.interlocuteur_id, id_annonce: conv.id_annonce}) }}\"
                   class=\"flex items-center gap-3 px-5 py-4 hover:bg-gray-50 transition-colors
                          {{ conv.interlocuteur_id == interlocuteur_actif and conv.id_annonce == id_annonce_actif ? 'bg-secondary/5 border-l-2 border-secondary' : '' }}\">

                    {# Avatar initiales #}
                    <div class=\"w-11 h-11 rounded-full bg-primary flex items-center justify-center flex-none text-white font-bold text-sm uppercase\">
                        {{ conv.prenom|first }}{{ conv.nom|first }}
                    </div>

                    <div class=\"flex-1 min-w-0\">
                        <div class=\"flex items-center justify-between mb-0.5\">
                            <span class=\"text-sm font-semibold text-primary truncate\">
                                {{ conv.prenom }} {{ conv.nom }}
                            </span>
                            <span class=\"text-[11px] text-primary/40 flex-none ml-2\">
                                {{ conv.date_dernier_message|date('d/m') }}
                            </span>
                        </div>
                        <div class=\"flex items-center justify-between\">
                            <p class=\"text-[11px] text-secondary/70 truncate font-medium\">{{ conv.annonce_titre }}</p>
                        <p class=\"text-xs text-primary/50 truncate\">{{ conv.dernier_message }}</p>
                            {% if not conv.lu %}
                                <span class=\"w-2 h-2 rounded-full bg-secondary flex-none ml-2\"></span>
                            {% endif %}
                        </div>
                    </div>
                </a>
                {% endfor %}
            {% endif %}
        </div>
    </aside>

    {# ── Colonne droite : zone principale ── #}
    <section class=\"flex-1 flex flex-col bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100\">

        {% if interlocuteur is defined and interlocuteur %}

            {# En-tête conversation #}
            {% set active_conv = conversations|filter(c => c.interlocuteur_id == interlocuteur_actif and c.id_annonce == id_annonce_actif)|first %}
            <div class=\"px-6 py-4 border-b border-gray-100 flex items-center justify-between flex-none\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-10 h-10 rounded-xl bg-gray-50 border border-gray-100 flex items-center justify-center text-primary/40 shadow-sm\">
                        <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\"/>
                        </svg>
                    </div>
                    <div>
                        <a href=\"{{ path('annonce_detail', {id: id_annonce_actif}) }}\" class=\"font-bold text-primary text-sm hover:underline hover:text-secondary transition-colors\">
                            {{ active_conv ? active_conv.annonce_titre : 'Annonce' }}
                        </a>
                        <div class=\"flex items-center gap-2 mt-0.5\">
                            <div class=\"w-4 h-4 rounded-full bg-primary flex items-center justify-center text-white font-bold text-[8px] uppercase\">
                                {{ interlocuteur.prenom|first }}{{ interlocuteur.nom|first }}
                            </div>
                            <p class=\"text-xs text-primary/60\">Avec {{ interlocuteur.prenom }} {{ interlocuteur.nom }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {# Messages #}
            <div class=\"flex-1 overflow-y-auto px-6 py-6 flex flex-col gap-4\" id=\"messages-container\">
                {% if messages is empty %}
                    <div class=\"flex-1 flex flex-col items-center justify-center text-center py-16\">
                        <p class=\"text-sm text-primary/40\">Commencez la conversation avec <strong>{{ interlocuteur.prenom }}</strong></p>
                    </div>
                {% else %}
                    {% for message in messages %}
                        {% set is_mine = message.id_expediteur == app.user.id %}
                        <div class=\"flex {{ is_mine ? 'justify-end' : 'justify-start' }}\">
                            <div class=\"max-w-[70%] flex flex-col {{ is_mine ? 'items-end' : 'items-start' }} gap-1\">

                                {% if not is_mine %}
                                <span class=\"text-xs font-semibold text-primary/50 px-1\">
                                    {{ interlocuteur.prenom }}
                                </span>
                                {% endif %}

                                <div class=\"px-4 py-3 rounded-2xl text-sm leading-relaxed
                                    {{ is_mine
                                        ? 'bg-secondary text-white rounded-br-sm'
                                        : 'bg-gray-100 text-primary rounded-bl-sm' }}\">
                                    {{ message.contenu }}
                                </div>

                                <span class=\"text-[11px] text-primary/30 px-1\">
                                    {{ message.date_envoi|date('d/m/Y à H:i') }}
                                </span>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>

            {# Formulaire d'envoi #}
            <div class=\"px-6 py-4 border-t border-gray-100 flex-none\">
                <form action=\"{{ path('messagerie_envoyer', {id_vendeur: interlocuteur.id_utilisateur, id_annonce: id_annonce_actif}) }}\" method=\"post\"
                      class=\"flex items-end gap-3\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('message') }}\">
                    <textarea name=\"contenu\" rows=\"2\" placeholder=\"Écrire un message…\"
                              class=\"flex-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm text-primary
                                     resize-none focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\"></textarea>
                    <button type=\"submit\"
                            class=\"flex-none w-11 h-11 bg-secondary text-white rounded-xl flex items-center justify-center
                                   hover:bg-secondary/90 active:scale-95 transition-all shadow-md shadow-secondary/20\">
                        <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\"/>
                        </svg>
                    </button>
                </form>
            </div>

        {% else %}

            {# État vide — aucune conversation sélectionnée #}
            <div class=\"flex-1 flex flex-col items-center justify-center text-center px-10\">
                <div class=\"w-20 h-20 rounded-2xl bg-secondary/10 flex items-center justify-center mb-6\">
                    <svg class=\"w-10 h-10 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\"/>
                    </svg>
                </div>
                <h2 class=\"text-xl font-bold text-primary font-['ManRope'] mb-2\">Vos messages</h2>
                <p class=\"text-sm text-primary/50 max-w-xs\">
                    Sélectionnez une conversation à gauche ou contactez un vendeur depuis une annonce.
                </p>
            </div>

        {% endif %}

    </section>

</div>
{% endblock %}

{% block javascripts %}
<script>
    const container = document.getElementById('messages-container');
    if (container) container.scrollTop = container.scrollHeight;
</script>
{% endblock %}
", "messagerie/inbox.html.twig", "C:\\Users\\jean-\\PhpstormProjects\\WE4A_projet\\templates\\messagerie\\inbox.html.twig");
    }
}
