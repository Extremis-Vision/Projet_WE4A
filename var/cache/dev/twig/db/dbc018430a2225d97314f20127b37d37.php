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

/* homePage.html.twig */
class __TwigTemplate_1621f806d5b801aea26703c3c1805ce3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homePage.html.twig"));

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

        yield "AutoMarket — Le Showroom Digital";
        
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
        yield "
";
        // line 10
        yield "<section class=\"relative overflow-hidden bg-primary min-h-[88vh] flex items-center\">

    ";
        // line 13
        yield "    <div class=\"absolute inset-0 opacity-[0.04]\" style=\"
        background-image:
            linear-gradient(30deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(150deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(30deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(150deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(60deg, #ffffff77 25%, transparent 25.5%, transparent 75%, #ffffff77 75%, #ffffff77);
        background-size: 80px 140px;
        background-position: 0 0, 0 0, 40px 70px, 40px 70px, 0 0;
    \"></div>

    ";
        // line 25
        yield "    <div class=\"absolute right-0 top-0 w-1/2 h-full bg-gradient-to-l from-secondary/10 to-transparent pointer-events-none\"></div>

    <div class=\"relative max-w-6xl mx-auto px-6 py-24 w-full\">
        <div class=\"max-w-3xl\">

            <span class=\"inline-block text-secondary text-sm font-semibold tracking-widest uppercase mb-6 border border-secondary/30 px-3 py-1 rounded-full\">
                Le Showroom Digital
            </span>

            <h1 class=\"text-5xl md:text-6xl lg:text-7xl font-bold text-white font-['ManRope'] leading-[1.05] mb-6\">
                Trouvez votre<br>
                prochaine <span class=\"text-secondary\">œuvre</span><br>
                automobile
            </h1>

            <p class=\"text-white/60 text-lg md:text-xl max-w-xl mb-10 leading-relaxed\">
                Des milliers d'annonces sélectionnées, présentées avec l'intégrité éditoriale
                d'un vrai showroom. Sans compromis.
            </p>

            <div class=\"flex flex-wrap gap-4\">
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\"
                   class=\"inline-flex items-center gap-2 px-8 py-4 bg-secondary text-white font-bold rounded-xl hover:bg-secondary/90 active:scale-95 transition-all text-base shadow-lg shadow-secondary/30\">
                    Voir les annonces
                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                    </svg>
                </a>
                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendreMaVoiture");
        yield "\"
                   class=\"inline-flex items-center gap-2 px-8 py-4 border border-white/30 text-white font-semibold rounded-xl hover:bg-white/10 active:scale-95 transition-all text-base\">
                    Vendre ma voiture
                </a>
            </div>

        </div>
    </div>

    ";
        // line 63
        yield "    <div class=\"absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/30\">
        <span class=\"text-xs tracking-widest uppercase\">Découvrir</span>
        <div class=\"w-px h-8 bg-white/20 animate-pulse\"></div>
    </div>
</section>

";
        // line 72
        yield "<section class=\"bg-white shadow-lg relative z-10 -mt-1\">
    <div class=\"max-w-6xl mx-auto px-6 py-6\">
        <form action=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\" method=\"get\"
              class=\"flex flex-wrap lg:flex-nowrap items-end gap-4\">

            <div class=\"flex-1 min-w-[140px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Marque</label>
                <select name=\"marque_id\" id=\"hp-marque\"
                        class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
                    <option value=\"\">Toutes les marques</option>
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 83
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id_marque", [], "any", false, false, false, 83), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 83), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                </select>
            </div>

            <div class=\"flex-1 min-w-[140px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Modèle</label>
                <select name=\"modele_id\" id=\"hp-modele\" disabled
                        class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition disabled:opacity-40\">
                    <option value=\"\">Tous les modèles</option>
                </select>
            </div>

            <div class=\"flex-1 min-w-[120px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Prix max (€)</label>
                <input type=\"number\" name=\"prix_max\" placeholder=\"Ex: 30 000\" min=\"0\" step=\"1000\"
                       class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
            </div>

            <div class=\"flex-1 min-w-[120px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Km max</label>
                <input type=\"number\" name=\"km_max\" placeholder=\"Ex: 100 000\" min=\"0\" step=\"5000\"
                       class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
            </div>

            <div class=\"flex-1 min-w-[110px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Année min</label>
                <input type=\"number\" name=\"annee_min\" placeholder=\"Ex: 2018\" min=\"1950\" max=\"2025\"
                       class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
            </div>

            <button type=\"submit\"
                    class=\"flex-none px-8 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm shadow-md shadow-secondary/20 whitespace-nowrap\">
                Rechercher
            </button>
        </form>
    </div>
</section>

";
        // line 125
        yield "<section class=\"bg-[#f8f8f6] py-20\">
    <div class=\"max-w-6xl mx-auto px-6\">

        <div class=\"flex items-end justify-between mb-10\">
            <div>
                <p class=\"text-secondary text-sm font-semibold tracking-widest uppercase mb-2\">Sélection éditoriale</p>
                <h2 class=\"text-3xl md:text-4xl font-bold text-primary font-['ManRope']\">Annonces en vedette</h2>
            </div>
            <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\"
               class=\"hidden md:inline-flex items-center gap-2 text-sm font-semibold text-primary/60 hover:text-secondary transition-colors\">
                Voir tout
                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                </svg>
            </a>
        </div>

        ";
        // line 142
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["vedettes"]) || array_key_exists("vedettes", $context) ? $context["vedettes"] : (function () { throw new RuntimeError('Variable "vedettes" does not exist.', 142, $this->source); })()))) {
            // line 143
            yield "            <div class=\"text-center py-16 text-primary/40\">
                <p class=\"text-lg\">Aucune annonce disponible pour le moment.</p>
            </div>
        ";
        } else {
            // line 147
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
            ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vedettes"]) || array_key_exists("vedettes", $context) ? $context["vedettes"] : (function () { throw new RuntimeError('Variable "vedettes" does not exist.', 148, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 149
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id_annonce", [], "any", false, false, false, 149)]), "html", null, true);
                yield "\"
               class=\"group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col\">

                ";
                // line 153
                yield "                <div class=\"relative aspect-[4/3] bg-gray-100 overflow-hidden flex-none\">
                    ";
                // line 154
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 155
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "photo_principale", [], "any", false, false, false, 155), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 155), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 155), "html", null, true);
                    yield "\"
                             class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-500\">
                    ";
                } else {
                    // line 158
                    yield "                        <div class=\"w-full h-full flex items-center justify-center\">
                            <svg class=\"w-16 h-16 text-gray-200\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                            </svg>
                        </div>
                    ";
                }
                // line 164
                yield "
                    ";
                // line 166
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 166) <= 2)) {
                    // line 167
                    yield "                    <span class=\"absolute top-3 left-3 bg-secondary text-white text-xs font-bold px-2.5 py-1 rounded-full\">
                        ";
                    // line 168
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 168) == 1)) ? ("Premium") : ("Nouveau"));
                    yield "
                    </span>
                    ";
                }
                // line 171
                yield "                </div>

                ";
                // line 174
                yield "                <div class=\"p-5 flex flex-col flex-1\">
                    <div class=\"flex-1\">
                        <h3 class=\"font-bold text-primary text-base leading-tight mb-1 group-hover:text-secondary transition-colors\">
                            ";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "marque_nom", [], "any", false, false, false, 177), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "modele_nom", [], "any", false, false, false, 177), "html", null, true);
                yield "
                        </h3>
                        <p class=\"text-xs text-primary/50 mb-3\">";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "version_nom", [], "any", false, false, false, 179), "html", null, true);
                yield "</p>

                        <div class=\"flex flex-wrap gap-x-3 gap-y-1 text-xs text-primary/50 mb-4\">
                            <span>";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annee_circulation", [], "any", false, false, false, 182), "html", null, true);
                yield "</span>
                            <span>·</span>
                            <span>";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "kilometrage", [], "any", false, false, false, 184), 0, ",", " "), "html", null, true);
                yield " km</span>
                            ";
                // line 185
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "boite_vitesse", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>·</span><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "boite_vitesse", [], "any", false, false, false, 185), "html", null, true);
                    yield "</span>";
                }
                // line 186
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>·</span><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 186), "html", null, true);
                    yield "</span>";
                }
                // line 187
                yield "                        </div>
                    </div>

                    <div class=\"flex items-center justify-between pt-4 border-t border-gray-100\">
                        <p class=\"text-xl font-bold text-secondary\">";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 191), 0, ",", " "), "html", null, true);
                yield " €</p>
                        <span class=\"text-xs font-semibold text-primary/40 group-hover:text-secondary transition-colors flex items-center gap-1\">
                            Voir l'annonce
                            <svg class=\"w-3 h-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
                            </svg>
                        </span>
                    </div>
                </div>

            </a>
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
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            yield "        </div>

        <div class=\"text-center mt-10 md:hidden\">
            <a href=\"";
            // line 206
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            yield "\"
               class=\"inline-flex items-center gap-2 px-6 py-3 border border-primary text-primary font-semibold rounded-xl hover:bg-primary hover:text-white transition-all text-sm\">
                Voir toutes les annonces
            </a>
        </div>
        ";
        }
        // line 212
        yield "
    </div>
</section>

";
        // line 219
        yield "<section class=\"bg-primary py-16\">
    <div class=\"max-w-6xl mx-auto px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left md:divide-x md:divide-white/10\">

            <div class=\"md:px-8 first:pl-0\">
                <p class=\"text-4xl md:text-5xl font-bold font-['ManRope'] text-secondary mb-2\">
                    ";
        // line 225
        yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 225, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 225, $this->source); })()) . "+"), "html", null, true)) : ("0"));
        yield "
                </p>
                <p class=\"text-white/60 text-sm font-medium uppercase tracking-wider\">Annonces actives</p>
            </div>

            <div class=\"md:px-8\">
                <p class=\"text-4xl md:text-5xl font-bold font-['ManRope'] text-secondary mb-2\">98%</p>
                <p class=\"text-white/60 text-sm font-medium uppercase tracking-wider\">Vendeurs satisfaits</p>
            </div>

            <div class=\"md:px-8\">
                <p class=\"text-4xl md:text-5xl font-bold font-['ManRope'] text-secondary mb-2\">2026</p>
                <p class=\"text-white/60 text-sm font-medium uppercase tracking-wider\">Depuis</p>
            </div>

        </div>
    </div>
</section>

";
        // line 247
        yield "<section class=\"bg-[#f8f8f6] py-20\">
    <div class=\"max-w-6xl mx-auto px-6\">

        <div class=\"text-center mb-14\">
            <p class=\"text-secondary text-sm font-semibold tracking-widest uppercase mb-3\">Simple & rapide</p>
            <h2 class=\"text-3xl md:text-4xl font-bold text-primary font-['ManRope']\">Comment ça marche ?</h2>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 relative\">

            ";
        // line 258
        yield "            <div class=\"hidden md:block absolute top-10 left-[calc(16.67%+2rem)] right-[calc(16.67%+2rem)] h-px bg-gray-200 z-0\"></div>

            ";
        // line 260
        $context["steps"] = [["num" => "01", "icon" => "M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z", "title" => "Cherchez", "desc" => "Parcourez des milliers d'annonces filtrées par marque, prix, kilométrage et année. Notre sélection éditoriale met en avant les meilleures offres."], ["num" => "02", "icon" => "M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z", "title" => "Contactez", "desc" => "Contactez directement le vendeur via la fiche annonce. Pas d'intermédiaire, pas de commission cachée. Une mise en relation honnête et directe."], ["num" => "03", "icon" => "M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z", "title" => "Achetez", "desc" => "Finalisez votre achat en toute sérénité. AutoMarket vous accompagne à chaque étape avec des conseils d'experts pour un achat réussi."]];
        // line 265
        yield "
            ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 266, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 267
            yield "            <div class=\"relative z-10 text-center md:text-left\">
                <div class=\"inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-secondary/10 mb-6 relative\">
                    <svg class=\"w-8 h-8 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "icon", [], "any", false, false, false, 270), "html", null, true);
            yield "\"/>
                    </svg>
                    <span class=\"absolute -top-2 -right-2 w-6 h-6 bg-secondary text-white text-xs font-bold rounded-full flex items-center justify-center\">
                        ";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 273), "html", null, true);
            yield "
                    </span>
                </div>
                <h3 class=\"text-xl font-bold text-primary font-['ManRope'] mb-3\">";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "title", [], "any", false, false, false, 276), "html", null, true);
            yield "</h3>
                <p class=\"text-primary/60 text-sm leading-relaxed\">";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "desc", [], "any", false, false, false, 277), "html", null, true);
            yield "</p>
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
        unset($context['_seq'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        yield "
        </div>

        <div class=\"text-center mt-14\">
            <a href=\"";
        // line 284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        yield "\"
               class=\"inline-flex items-center gap-2 px-8 py-4 bg-secondary text-white font-bold rounded-xl hover:bg-secondary/90 active:scale-95 transition-all shadow-lg shadow-secondary/20\">
                Commencer maintenant
                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                </svg>
            </a>
        </div>

    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 298
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 299
        yield "<script>
const MODELES_PAR_MARQUE = ";
        // line 300
        yield json_encode((isset($context["modelesParMarque"]) || array_key_exists("modelesParMarque", $context) ? $context["modelesParMarque"] : (function () { throw new RuntimeError('Variable "modelesParMarque" does not exist.', 300, $this->source); })()));
        yield ";
(function () {
    var selMarque = document.getElementById('hp-marque');
    var selModele = document.getElementById('hp-modele');
    if (!selMarque) return;

    selMarque.addEventListener('change', function () {
        var mid = this.value;
        selModele.innerHTML = '<option value=\"\">Tous les modèles</option>';
        if (mid && MODELES_PAR_MARQUE[mid]) {
            MODELES_PAR_MARQUE[mid].forEach(function (mo) {
                var opt = document.createElement('option');
                opt.value = mo.id;
                opt.textContent = mo.nom;
                selModele.appendChild(opt);
            });
            selModele.disabled = false;
        } else {
            selModele.disabled = true;
        }
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
        return "homePage.html.twig";
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
        return array (  566 => 300,  563 => 299,  553 => 298,  532 => 284,  526 => 280,  509 => 277,  505 => 276,  499 => 273,  493 => 270,  488 => 267,  471 => 266,  468 => 265,  466 => 260,  462 => 258,  450 => 247,  428 => 225,  420 => 219,  414 => 212,  405 => 206,  400 => 203,  374 => 191,  368 => 187,  361 => 186,  355 => 185,  351 => 184,  346 => 182,  340 => 179,  333 => 177,  328 => 174,  324 => 171,  318 => 168,  315 => 167,  312 => 166,  309 => 164,  301 => 158,  290 => 155,  288 => 154,  285 => 153,  278 => 149,  261 => 148,  258 => 147,  252 => 143,  250 => 142,  238 => 133,  228 => 125,  189 => 85,  178 => 83,  174 => 82,  163 => 74,  159 => 72,  151 => 63,  139 => 53,  129 => 46,  106 => 25,  93 => 13,  89 => 10,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block pageTitle %}AutoMarket — Le Showroom Digital{% endblock %}

{% block main %}

{# ═══════════════════════════════════════════════════════
   HERO
═══════════════════════════════════════════════════════ #}
<section class=\"relative overflow-hidden bg-primary min-h-[88vh] flex items-center\">

    {# Motif géométrique CSS en arrière-plan #}
    <div class=\"absolute inset-0 opacity-[0.04]\" style=\"
        background-image:
            linear-gradient(30deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(150deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(30deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(150deg, #ffffff 12%, transparent 12.5%, transparent 87%, #ffffff 87.5%, #ffffff),
            linear-gradient(60deg, #ffffff77 25%, transparent 25.5%, transparent 75%, #ffffff77 75%, #ffffff77);
        background-size: 80px 140px;
        background-position: 0 0, 0 0, 40px 70px, 40px 70px, 0 0;
    \"></div>

    {# Gradient latéral droit #}
    <div class=\"absolute right-0 top-0 w-1/2 h-full bg-gradient-to-l from-secondary/10 to-transparent pointer-events-none\"></div>

    <div class=\"relative max-w-6xl mx-auto px-6 py-24 w-full\">
        <div class=\"max-w-3xl\">

            <span class=\"inline-block text-secondary text-sm font-semibold tracking-widest uppercase mb-6 border border-secondary/30 px-3 py-1 rounded-full\">
                Le Showroom Digital
            </span>

            <h1 class=\"text-5xl md:text-6xl lg:text-7xl font-bold text-white font-['ManRope'] leading-[1.05] mb-6\">
                Trouvez votre<br>
                prochaine <span class=\"text-secondary\">œuvre</span><br>
                automobile
            </h1>

            <p class=\"text-white/60 text-lg md:text-xl max-w-xl mb-10 leading-relaxed\">
                Des milliers d'annonces sélectionnées, présentées avec l'intégrité éditoriale
                d'un vrai showroom. Sans compromis.
            </p>

            <div class=\"flex flex-wrap gap-4\">
                <a href=\"{{ path('annonces') }}\"
                   class=\"inline-flex items-center gap-2 px-8 py-4 bg-secondary text-white font-bold rounded-xl hover:bg-secondary/90 active:scale-95 transition-all text-base shadow-lg shadow-secondary/30\">
                    Voir les annonces
                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                    </svg>
                </a>
                <a href=\"{{ path('vendreMaVoiture') }}\"
                   class=\"inline-flex items-center gap-2 px-8 py-4 border border-white/30 text-white font-semibold rounded-xl hover:bg-white/10 active:scale-95 transition-all text-base\">
                    Vendre ma voiture
                </a>
            </div>

        </div>
    </div>

    {# Indicateur de scroll #}
    <div class=\"absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/30\">
        <span class=\"text-xs tracking-widest uppercase\">Découvrir</span>
        <div class=\"w-px h-8 bg-white/20 animate-pulse\"></div>
    </div>
</section>

{# ═══════════════════════════════════════════════════════
   BARRE DE RECHERCHE
═══════════════════════════════════════════════════════ #}
<section class=\"bg-white shadow-lg relative z-10 -mt-1\">
    <div class=\"max-w-6xl mx-auto px-6 py-6\">
        <form action=\"{{ path('annonces') }}\" method=\"get\"
              class=\"flex flex-wrap lg:flex-nowrap items-end gap-4\">

            <div class=\"flex-1 min-w-[140px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Marque</label>
                <select name=\"marque_id\" id=\"hp-marque\"
                        class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
                    <option value=\"\">Toutes les marques</option>
                    {% for m in marques %}
                        <option value=\"{{ m.id_marque }}\">{{ m.nom }}</option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"flex-1 min-w-[140px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Modèle</label>
                <select name=\"modele_id\" id=\"hp-modele\" disabled
                        class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition disabled:opacity-40\">
                    <option value=\"\">Tous les modèles</option>
                </select>
            </div>

            <div class=\"flex-1 min-w-[120px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Prix max (€)</label>
                <input type=\"number\" name=\"prix_max\" placeholder=\"Ex: 30 000\" min=\"0\" step=\"1000\"
                       class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
            </div>

            <div class=\"flex-1 min-w-[120px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Km max</label>
                <input type=\"number\" name=\"km_max\" placeholder=\"Ex: 100 000\" min=\"0\" step=\"5000\"
                       class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
            </div>

            <div class=\"flex-1 min-w-[110px]\">
                <label class=\"block text-xs font-semibold text-primary/50 uppercase tracking-wider mb-2\">Année min</label>
                <input type=\"number\" name=\"annee_min\" placeholder=\"Ex: 2018\" min=\"1950\" max=\"2025\"
                       class=\"w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-primary focus:outline-none focus:ring-2 focus:ring-secondary/40 transition\">
            </div>

            <button type=\"submit\"
                    class=\"flex-none px-8 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-secondary/90 active:scale-95 transition-all text-sm shadow-md shadow-secondary/20 whitespace-nowrap\">
                Rechercher
            </button>
        </form>
    </div>
</section>

{# ═══════════════════════════════════════════════════════
   ANNONCES EN VEDETTE
═══════════════════════════════════════════════════════ #}
<section class=\"bg-[#f8f8f6] py-20\">
    <div class=\"max-w-6xl mx-auto px-6\">

        <div class=\"flex items-end justify-between mb-10\">
            <div>
                <p class=\"text-secondary text-sm font-semibold tracking-widest uppercase mb-2\">Sélection éditoriale</p>
                <h2 class=\"text-3xl md:text-4xl font-bold text-primary font-['ManRope']\">Annonces en vedette</h2>
            </div>
            <a href=\"{{ path('annonces') }}\"
               class=\"hidden md:inline-flex items-center gap-2 text-sm font-semibold text-primary/60 hover:text-secondary transition-colors\">
                Voir tout
                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                </svg>
            </a>
        </div>

        {% if vedettes is empty %}
            <div class=\"text-center py-16 text-primary/40\">
                <p class=\"text-lg\">Aucune annonce disponible pour le moment.</p>
            </div>
        {% else %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
            {% for a in vedettes %}
            <a href=\"{{ path('annonce_detail', {id: a.id_annonce}) }}\"
               class=\"group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col\">

                {# Photo #}
                <div class=\"relative aspect-[4/3] bg-gray-100 overflow-hidden flex-none\">
                    {% if a.photo_principale %}
                        <img src=\"{{ a.photo_principale }}\" alt=\"{{ a.marque_nom }} {{ a.modele_nom }}\"
                             class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-500\">
                    {% else %}
                        <div class=\"w-full h-full flex items-center justify-center\">
                            <svg class=\"w-16 h-16 text-gray-200\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M19 7H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 9c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm5-8H7l2-4h6l2 4z\"/>
                            </svg>
                        </div>
                    {% endif %}

                    {# Badge #}
                    {% if loop.index <= 2 %}
                    <span class=\"absolute top-3 left-3 bg-secondary text-white text-xs font-bold px-2.5 py-1 rounded-full\">
                        {{ loop.index == 1 ? 'Premium' : 'Nouveau' }}
                    </span>
                    {% endif %}
                </div>

                {# Infos #}
                <div class=\"p-5 flex flex-col flex-1\">
                    <div class=\"flex-1\">
                        <h3 class=\"font-bold text-primary text-base leading-tight mb-1 group-hover:text-secondary transition-colors\">
                            {{ a.marque_nom }} {{ a.modele_nom }}
                        </h3>
                        <p class=\"text-xs text-primary/50 mb-3\">{{ a.version_nom }}</p>

                        <div class=\"flex flex-wrap gap-x-3 gap-y-1 text-xs text-primary/50 mb-4\">
                            <span>{{ a.annee_circulation }}</span>
                            <span>·</span>
                            <span>{{ a.kilometrage|number_format(0, ',', ' ') }} km</span>
                            {% if a.boite_vitesse %}<span>·</span><span>{{ a.boite_vitesse }}</span>{% endif %}
                            {% if a.localisation %}<span>·</span><span>{{ a.localisation }}</span>{% endif %}
                        </div>
                    </div>

                    <div class=\"flex items-center justify-between pt-4 border-t border-gray-100\">
                        <p class=\"text-xl font-bold text-secondary\">{{ a.prix|number_format(0, ',', ' ') }} €</p>
                        <span class=\"text-xs font-semibold text-primary/40 group-hover:text-secondary transition-colors flex items-center gap-1\">
                            Voir l'annonce
                            <svg class=\"w-3 h-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
                            </svg>
                        </span>
                    </div>
                </div>

            </a>
            {% endfor %}
        </div>

        <div class=\"text-center mt-10 md:hidden\">
            <a href=\"{{ path('annonces') }}\"
               class=\"inline-flex items-center gap-2 px-6 py-3 border border-primary text-primary font-semibold rounded-xl hover:bg-primary hover:text-white transition-all text-sm\">
                Voir toutes les annonces
            </a>
        </div>
        {% endif %}

    </div>
</section>

{# ═══════════════════════════════════════════════════════
   STATS
═══════════════════════════════════════════════════════ #}
<section class=\"bg-primary py-16\">
    <div class=\"max-w-6xl mx-auto px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left md:divide-x md:divide-white/10\">

            <div class=\"md:px-8 first:pl-0\">
                <p class=\"text-4xl md:text-5xl font-bold font-['ManRope'] text-secondary mb-2\">
                    {{ total > 0 ? total ~ '+' : '0' }}
                </p>
                <p class=\"text-white/60 text-sm font-medium uppercase tracking-wider\">Annonces actives</p>
            </div>

            <div class=\"md:px-8\">
                <p class=\"text-4xl md:text-5xl font-bold font-['ManRope'] text-secondary mb-2\">98%</p>
                <p class=\"text-white/60 text-sm font-medium uppercase tracking-wider\">Vendeurs satisfaits</p>
            </div>

            <div class=\"md:px-8\">
                <p class=\"text-4xl md:text-5xl font-bold font-['ManRope'] text-secondary mb-2\">2026</p>
                <p class=\"text-white/60 text-sm font-medium uppercase tracking-wider\">Depuis</p>
            </div>

        </div>
    </div>
</section>

{# ═══════════════════════════════════════════════════════
   COMMENT ÇA MARCHE
═══════════════════════════════════════════════════════ #}
<section class=\"bg-[#f8f8f6] py-20\">
    <div class=\"max-w-6xl mx-auto px-6\">

        <div class=\"text-center mb-14\">
            <p class=\"text-secondary text-sm font-semibold tracking-widest uppercase mb-3\">Simple & rapide</p>
            <h2 class=\"text-3xl md:text-4xl font-bold text-primary font-['ManRope']\">Comment ça marche ?</h2>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 relative\">

            {# Ligne de connexion desktop #}
            <div class=\"hidden md:block absolute top-10 left-[calc(16.67%+2rem)] right-[calc(16.67%+2rem)] h-px bg-gray-200 z-0\"></div>

            {% set steps = [
                {num: '01', icon: 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', title: 'Cherchez', desc: 'Parcourez des milliers d\\'annonces filtrées par marque, prix, kilométrage et année. Notre sélection éditoriale met en avant les meilleures offres.'},
                {num: '02', icon: 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z', title: 'Contactez', desc: 'Contactez directement le vendeur via la fiche annonce. Pas d\\'intermédiaire, pas de commission cachée. Une mise en relation honnête et directe.'},
                {num: '03', icon: 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', title: 'Achetez', desc: 'Finalisez votre achat en toute sérénité. AutoMarket vous accompagne à chaque étape avec des conseils d\\'experts pour un achat réussi.'}
            ] %}

            {% for step in steps %}
            <div class=\"relative z-10 text-center md:text-left\">
                <div class=\"inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-secondary/10 mb-6 relative\">
                    <svg class=\"w-8 h-8 text-secondary\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"{{ step.icon }}\"/>
                    </svg>
                    <span class=\"absolute -top-2 -right-2 w-6 h-6 bg-secondary text-white text-xs font-bold rounded-full flex items-center justify-center\">
                        {{ loop.index }}
                    </span>
                </div>
                <h3 class=\"text-xl font-bold text-primary font-['ManRope'] mb-3\">{{ step.title }}</h3>
                <p class=\"text-primary/60 text-sm leading-relaxed\">{{ step.desc }}</p>
            </div>
            {% endfor %}

        </div>

        <div class=\"text-center mt-14\">
            <a href=\"{{ path('annonces') }}\"
               class=\"inline-flex items-center gap-2 px-8 py-4 bg-secondary text-white font-bold rounded-xl hover:bg-secondary/90 active:scale-95 transition-all shadow-lg shadow-secondary/20\">
                Commencer maintenant
                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 8l4 4m0 0l-4 4m4-4H3\"/>
                </svg>
            </a>
        </div>

    </div>
</section>

{% endblock %}

{% block javascripts %}
<script>
const MODELES_PAR_MARQUE = {{ modelesParMarque|json_encode|raw }};
(function () {
    var selMarque = document.getElementById('hp-marque');
    var selModele = document.getElementById('hp-modele');
    if (!selMarque) return;

    selMarque.addEventListener('change', function () {
        var mid = this.value;
        selModele.innerHTML = '<option value=\"\">Tous les modèles</option>';
        if (mid && MODELES_PAR_MARQUE[mid]) {
            MODELES_PAR_MARQUE[mid].forEach(function (mo) {
                var opt = document.createElement('option');
                opt.value = mo.id;
                opt.textContent = mo.nom;
                selModele.appendChild(opt);
            });
            selModele.disabled = false;
        } else {
            selModele.disabled = true;
        }
    });
})();
</script>
{% endblock %}
", "homePage.html.twig", "C:\\projets\\Projet_WE4A\\templates\\homePage.html.twig");
    }
}
