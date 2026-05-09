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

/* user/parametres.html.twig */
class __TwigTemplate_e0c9aab2cbd80db77d2f0f574c3d3942 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/parametres.html.twig"));

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

        yield "Paramètres — AutoMarket";
        
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

    <h1 class=\"text-3xl font-bold text-primary font-['ManRope'] mb-2\">Paramètres</h1>
    <p class=\"text-tertiary mb-8\">Gérez vos informations personnelles et la sécurité de votre compte</p>

    ";
        // line 11
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            yield "        <div class=\"bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-xl mb-4 text-sm flex items-center gap-2\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"/></svg>
            ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 18
            yield "        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-4 text-sm flex items-center gap-2\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/></svg>
            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
    ";
        // line 25
        yield "    <div class=\"bg-white rounded-xl p-6 shadow-sm mb-6\">
        <div class=\"flex items-center gap-3 mb-6\">
            <div class=\"w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold uppercase text-sm\">
                ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28)), "html", null, true);
        yield "
            </div>
            <div>
                <h2 class=\"font-bold text-primary font-['ManRope']\">Informations personnelles</h2>
                <p class=\"text-xs text-tertiary\">Modifiez vos coordonnées</p>
            </div>
        </div>

        <form method=\"post\" class=\"space-y-4\">
            <input type=\"hidden\" name=\"_action\" value=\"update_profile\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("parametres_profile"), "html", null, true);
        yield "\">

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Prénom *</label>
                    <input type=\"text\" name=\"prenom\" required value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), "html", null, true);
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Nom *</label>
                    <input type=\"text\" name=\"nom\" required value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), "html", null, true);
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                </div>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Adresse email *</label>
                <input type=\"email\" name=\"email\" required value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), "html", null, true);
        yield "\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Numéro de téléphone</label>
                <input type=\"tel\" name=\"numero_phone\" value=\"";
        // line 61
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "numero_phone", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 61, $this->source); })()), "numero_phone", [], "any", false, false, false, 61)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 61, $this->source); })()), "numero_phone", [], "any", false, false, false, 61), "html", null, true)) : (""));
        yield "\" placeholder=\"06 12 34 56 78\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
            </div>

            <div class=\"flex justify-end pt-2\">
                <button type=\"submit\"
                        class=\"px-6 py-2.5 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 active:scale-95 transition-all text-sm\">
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </div>

    ";
        // line 75
        yield "    <div class=\"bg-white rounded-xl p-6 shadow-sm mb-6\">
        <div class=\"flex items-center gap-3 mb-6\">
            <div class=\"w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z\"/>
                </svg>
            </div>
            <div>
                <h2 class=\"font-bold text-primary font-['ManRope']\">Mot de passe</h2>
                <p class=\"text-xs text-tertiary\">Sécurisez votre compte</p>
            </div>
        </div>

        <form method=\"post\" id=\"form-password\" class=\"space-y-4\" novalidate>
            <input type=\"hidden\" name=\"_action\" value=\"update_password\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("parametres_password"), "html", null, true);
        yield "\">

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Mot de passe actuel *</label>
                <input type=\"password\" name=\"current_password\" id=\"current_password\" required
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Nouveau mot de passe * (8 caractères minimum)</label>
                <input type=\"password\" name=\"new_password\" id=\"new_password\" required minlength=\"8\" autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                <p id=\"pwd-length-hint\" class=\"text-xs mt-1 text-gray-400 hidden\">
                    <span id=\"pwd-length-icon\">⚠️</span> Le mot de passe doit contenir au moins 8 caractères.
                </p>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Confirmer le nouveau mot de passe *</label>
                <input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" required autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                <p id=\"pwd-match-error\" class=\"text-red-500 text-xs mt-1 hidden\">Les mots de passe ne correspondent pas.</p>
                <p id=\"pwd-match-ok\" class=\"text-emerald-500 text-xs mt-1 hidden\">✓ Les mots de passe correspondent.</p>
            </div>

            <div class=\"flex justify-end pt-2\">
                <button type=\"submit\"
                        class=\"px-6 py-2.5 bg-secondary text-white font-semibold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm\">
                    Changer le mot de passe
                </button>
            </div>
        </form>
    </div>

    ";
        // line 125
        yield "    <div class=\"bg-white rounded-xl p-6 shadow-sm border border-red-100\">
        <div class=\"flex items-center gap-3 mb-4\">
            <div class=\"w-10 h-10 rounded-full bg-red-50 flex items-center justify-center text-red-500\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
                </svg>
            </div>
            <div>
                <h2 class=\"font-bold text-red-600 font-['ManRope']\">Supprimer mon compte</h2>
                <p class=\"text-xs text-tertiary\">Cette action est irréversible</p>
            </div>
        </div>

        <p class=\"text-sm text-tertiary mb-4\">
            La suppression de votre compte entraîne la suppression définitive de toutes vos annonces,
            messages, avis et favoris. Cette action ne peut pas être annulée.
        </p>

        <details class=\"group\">
            <summary class=\"cursor-pointer text-sm font-semibold text-red-600 hover:text-red-700 transition-colors list-none flex items-center gap-1\">
                <svg class=\"w-4 h-4 transition-transform group-open:rotate-90\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"/></svg>
                Je souhaite supprimer mon compte
            </summary>

            <form method=\"post\" class=\"mt-4 space-y-4 pt-4 border-t border-red-100\"
                  onsubmit=\"return confirm('Êtes-vous absolument certain ? Toutes vos données seront perdues.');\">
                <input type=\"hidden\" name=\"_action\" value=\"delete_account\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("parametres_delete"), "html", null, true);
        yield "\">

                <div>
                    <label class=\"block text-sm font-medium text-red-600 mb-1\">
                        Tapez <span class=\"font-bold\">SUPPRIMER</span> pour confirmer
                    </label>
                    <input type=\"text\" name=\"confirm_delete\" required autocomplete=\"off\" placeholder=\"SUPPRIMER\"
                           class=\"w-full px-4 py-3 border border-red-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 bg-red-50/50 text-primary text-sm\">
                </div>

                <button type=\"submit\"
                        class=\"px-6 py-2.5 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 active:scale-95 transition-all text-sm\">
                    Supprimer définitivement mon compte
                </button>
            </form>
        </details>
    </div>

    ";
        // line 171
        yield "    <div class=\"mt-8 text-center text-xs text-gray-400\">
        <p>Membre depuis le ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 172, $this->source); })()), "date_inscription", [], "any", false, false, false, 172), "d/m/Y"), "html", null, true);
        yield " · Rôle : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 172, $this->source); })()), "role", [], "any", false, false, false, 172)), "html", null, true);
        yield "</p>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        yield "<script>
document.addEventListener('DOMContentLoaded', function () {
    var form       = document.getElementById('form-password');
    if (!form) return;

    var newPwd     = document.getElementById('new_password');
    var confirmPwd = document.getElementById('confirm_password');
    var lengthHint = document.getElementById('pwd-length-hint');
    var lengthIcon = document.getElementById('pwd-length-icon');
    var matchError = document.getElementById('pwd-match-error');
    var matchOk    = document.getElementById('pwd-match-ok');

    // Validate password length in real-time
    newPwd.addEventListener('input', function () {
        if (newPwd.value.length > 0 && newPwd.value.length < 8) {
            lengthHint.classList.remove('hidden');
            lengthHint.className = 'text-xs mt-1 text-red-500';
            lengthIcon.textContent = '⚠️';
            newPwd.classList.add('ring-2', 'ring-red-400');
        } else if (newPwd.value.length >= 8) {
            lengthHint.classList.remove('hidden');
            lengthHint.className = 'text-xs mt-1 text-emerald-500';
            lengthIcon.textContent = '✓';
            newPwd.classList.remove('ring-2', 'ring-red-400');
        } else {
            lengthHint.classList.add('hidden');
            newPwd.classList.remove('ring-2', 'ring-red-400');
        }
        validateMatch();
    });

    // Validate password match in real-time
    function validateMatch() {
        if (!confirmPwd.value) {
            matchError.classList.add('hidden');
            matchOk.classList.add('hidden');
            confirmPwd.classList.remove('ring-2', 'ring-red-400', 'ring-emerald-400');
            confirmPwd.setCustomValidity('');
            return;
        }
        if (newPwd.value !== confirmPwd.value) {
            matchError.classList.remove('hidden');
            matchOk.classList.add('hidden');
            confirmPwd.classList.add('ring-2', 'ring-red-400');
            confirmPwd.classList.remove('ring-emerald-400');
            confirmPwd.setCustomValidity('Les mots de passe ne correspondent pas.');
        } else {
            matchError.classList.add('hidden');
            matchOk.classList.remove('hidden');
            confirmPwd.classList.remove('ring-red-400');
            confirmPwd.classList.add('ring-2', 'ring-emerald-400');
            confirmPwd.setCustomValidity('');
        }
    }
    confirmPwd.addEventListener('input', validateMatch);

    // Validate on submit
    form.addEventListener('submit', function (e) {
        var valid = true;

        // Required fields
        ['current_password', 'new_password', 'confirm_password'].forEach(function (id) {
            var field = document.getElementById(id);
            if (!field || !field.value.trim()) {
                field.classList.add('ring-2', 'ring-red-400');
                valid = false;
            } else {
                field.classList.remove('ring-2', 'ring-red-400');
            }
        });

        // Min length
        if (newPwd.value.length > 0 && newPwd.value.length < 8) {
            newPwd.classList.add('ring-2', 'ring-red-400');
            valid = false;
        }

        // Match
        validateMatch();
        if (confirmPwd.validationMessage) {
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
        }
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
        return "user/parametres.html.twig";
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
        return array (  334 => 179,  324 => 178,  309 => 172,  306 => 171,  285 => 152,  256 => 125,  219 => 90,  202 => 75,  186 => 61,  177 => 55,  167 => 48,  159 => 43,  151 => 38,  137 => 28,  132 => 25,  129 => 23,  120 => 20,  116 => 18,  111 => 17,  102 => 14,  98 => 12,  93 => 11,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block pageTitle %}Paramètres — AutoMarket{% endblock %}

{% block main %}
<div class=\"max-w-3xl mx-auto px-6 py-10\">

    <h1 class=\"text-3xl font-bold text-primary font-['ManRope'] mb-2\">Paramètres</h1>
    <p class=\"text-tertiary mb-8\">Gérez vos informations personnelles et la sécurité de votre compte</p>

    {# Flash messages #}
    {% for msg in app.flashes('success') %}
        <div class=\"bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-xl mb-4 text-sm flex items-center gap-2\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"/></svg>
            {{ msg }}
        </div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-4 text-sm flex items-center gap-2\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/></svg>
            {{ msg }}
        </div>
    {% endfor %}

    {# ─── Informations du profil ─── #}
    <div class=\"bg-white rounded-xl p-6 shadow-sm mb-6\">
        <div class=\"flex items-center gap-3 mb-6\">
            <div class=\"w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold uppercase text-sm\">
                {{ profile.prenom|first }}{{ profile.nom|first }}
            </div>
            <div>
                <h2 class=\"font-bold text-primary font-['ManRope']\">Informations personnelles</h2>
                <p class=\"text-xs text-tertiary\">Modifiez vos coordonnées</p>
            </div>
        </div>

        <form method=\"post\" class=\"space-y-4\">
            <input type=\"hidden\" name=\"_action\" value=\"update_profile\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('parametres_profile') }}\">

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Prénom *</label>
                    <input type=\"text\" name=\"prenom\" required value=\"{{ profile.prenom }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-tertiary mb-1\">Nom *</label>
                    <input type=\"text\" name=\"nom\" required value=\"{{ profile.nom }}\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                </div>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Adresse email *</label>
                <input type=\"email\" name=\"email\" required value=\"{{ profile.email }}\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Numéro de téléphone</label>
                <input type=\"tel\" name=\"numero_phone\" value=\"{{ profile.numero_phone ?? '' }}\" placeholder=\"06 12 34 56 78\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
            </div>

            <div class=\"flex justify-end pt-2\">
                <button type=\"submit\"
                        class=\"px-6 py-2.5 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 active:scale-95 transition-all text-sm\">
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </div>

    {# ─── Mot de passe ─── #}
    <div class=\"bg-white rounded-xl p-6 shadow-sm mb-6\">
        <div class=\"flex items-center gap-3 mb-6\">
            <div class=\"w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z\"/>
                </svg>
            </div>
            <div>
                <h2 class=\"font-bold text-primary font-['ManRope']\">Mot de passe</h2>
                <p class=\"text-xs text-tertiary\">Sécurisez votre compte</p>
            </div>
        </div>

        <form method=\"post\" id=\"form-password\" class=\"space-y-4\" novalidate>
            <input type=\"hidden\" name=\"_action\" value=\"update_password\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('parametres_password') }}\">

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Mot de passe actuel *</label>
                <input type=\"password\" name=\"current_password\" id=\"current_password\" required
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Nouveau mot de passe * (8 caractères minimum)</label>
                <input type=\"password\" name=\"new_password\" id=\"new_password\" required minlength=\"8\" autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                <p id=\"pwd-length-hint\" class=\"text-xs mt-1 text-gray-400 hidden\">
                    <span id=\"pwd-length-icon\">⚠️</span> Le mot de passe doit contenir au moins 8 caractères.
                </p>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-tertiary mb-1\">Confirmer le nouveau mot de passe *</label>
                <input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" required autocomplete=\"new-password\"
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary bg-white text-primary text-sm\">
                <p id=\"pwd-match-error\" class=\"text-red-500 text-xs mt-1 hidden\">Les mots de passe ne correspondent pas.</p>
                <p id=\"pwd-match-ok\" class=\"text-emerald-500 text-xs mt-1 hidden\">✓ Les mots de passe correspondent.</p>
            </div>

            <div class=\"flex justify-end pt-2\">
                <button type=\"submit\"
                        class=\"px-6 py-2.5 bg-secondary text-white font-semibold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm\">
                    Changer le mot de passe
                </button>
            </div>
        </form>
    </div>

    {# ─── Zone de danger : suppression du compte ─── #}
    <div class=\"bg-white rounded-xl p-6 shadow-sm border border-red-100\">
        <div class=\"flex items-center gap-3 mb-4\">
            <div class=\"w-10 h-10 rounded-full bg-red-50 flex items-center justify-center text-red-500\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
                </svg>
            </div>
            <div>
                <h2 class=\"font-bold text-red-600 font-['ManRope']\">Supprimer mon compte</h2>
                <p class=\"text-xs text-tertiary\">Cette action est irréversible</p>
            </div>
        </div>

        <p class=\"text-sm text-tertiary mb-4\">
            La suppression de votre compte entraîne la suppression définitive de toutes vos annonces,
            messages, avis et favoris. Cette action ne peut pas être annulée.
        </p>

        <details class=\"group\">
            <summary class=\"cursor-pointer text-sm font-semibold text-red-600 hover:text-red-700 transition-colors list-none flex items-center gap-1\">
                <svg class=\"w-4 h-4 transition-transform group-open:rotate-90\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"/></svg>
                Je souhaite supprimer mon compte
            </summary>

            <form method=\"post\" class=\"mt-4 space-y-4 pt-4 border-t border-red-100\"
                  onsubmit=\"return confirm('Êtes-vous absolument certain ? Toutes vos données seront perdues.');\">
                <input type=\"hidden\" name=\"_action\" value=\"delete_account\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('parametres_delete') }}\">

                <div>
                    <label class=\"block text-sm font-medium text-red-600 mb-1\">
                        Tapez <span class=\"font-bold\">SUPPRIMER</span> pour confirmer
                    </label>
                    <input type=\"text\" name=\"confirm_delete\" required autocomplete=\"off\" placeholder=\"SUPPRIMER\"
                           class=\"w-full px-4 py-3 border border-red-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 bg-red-50/50 text-primary text-sm\">
                </div>

                <button type=\"submit\"
                        class=\"px-6 py-2.5 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 active:scale-95 transition-all text-sm\">
                    Supprimer définitivement mon compte
                </button>
            </form>
        </details>
    </div>

    {# ─── Infos compte ─── #}
    <div class=\"mt-8 text-center text-xs text-gray-400\">
        <p>Membre depuis le {{ profile.date_inscription|date('d/m/Y') }} · Rôle : {{ profile.role|capitalize }}</p>
    </div>

</div>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form       = document.getElementById('form-password');
    if (!form) return;

    var newPwd     = document.getElementById('new_password');
    var confirmPwd = document.getElementById('confirm_password');
    var lengthHint = document.getElementById('pwd-length-hint');
    var lengthIcon = document.getElementById('pwd-length-icon');
    var matchError = document.getElementById('pwd-match-error');
    var matchOk    = document.getElementById('pwd-match-ok');

    // Validate password length in real-time
    newPwd.addEventListener('input', function () {
        if (newPwd.value.length > 0 && newPwd.value.length < 8) {
            lengthHint.classList.remove('hidden');
            lengthHint.className = 'text-xs mt-1 text-red-500';
            lengthIcon.textContent = '⚠️';
            newPwd.classList.add('ring-2', 'ring-red-400');
        } else if (newPwd.value.length >= 8) {
            lengthHint.classList.remove('hidden');
            lengthHint.className = 'text-xs mt-1 text-emerald-500';
            lengthIcon.textContent = '✓';
            newPwd.classList.remove('ring-2', 'ring-red-400');
        } else {
            lengthHint.classList.add('hidden');
            newPwd.classList.remove('ring-2', 'ring-red-400');
        }
        validateMatch();
    });

    // Validate password match in real-time
    function validateMatch() {
        if (!confirmPwd.value) {
            matchError.classList.add('hidden');
            matchOk.classList.add('hidden');
            confirmPwd.classList.remove('ring-2', 'ring-red-400', 'ring-emerald-400');
            confirmPwd.setCustomValidity('');
            return;
        }
        if (newPwd.value !== confirmPwd.value) {
            matchError.classList.remove('hidden');
            matchOk.classList.add('hidden');
            confirmPwd.classList.add('ring-2', 'ring-red-400');
            confirmPwd.classList.remove('ring-emerald-400');
            confirmPwd.setCustomValidity('Les mots de passe ne correspondent pas.');
        } else {
            matchError.classList.add('hidden');
            matchOk.classList.remove('hidden');
            confirmPwd.classList.remove('ring-red-400');
            confirmPwd.classList.add('ring-2', 'ring-emerald-400');
            confirmPwd.setCustomValidity('');
        }
    }
    confirmPwd.addEventListener('input', validateMatch);

    // Validate on submit
    form.addEventListener('submit', function (e) {
        var valid = true;

        // Required fields
        ['current_password', 'new_password', 'confirm_password'].forEach(function (id) {
            var field = document.getElementById(id);
            if (!field || !field.value.trim()) {
                field.classList.add('ring-2', 'ring-red-400');
                valid = false;
            } else {
                field.classList.remove('ring-2', 'ring-red-400');
            }
        });

        // Min length
        if (newPwd.value.length > 0 && newPwd.value.length < 8) {
            newPwd.classList.add('ring-2', 'ring-red-400');
            valid = false;
        }

        // Match
        validateMatch();
        if (confirmPwd.validationMessage) {
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
        }
    });
});
</script>
{% endblock %}
", "user/parametres.html.twig", "C:\\Users\\jean-\\PhpstormProjects\\WE4A_projet\\templates\\user\\parametres.html.twig");
    }
}
