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

/* example_page/index.html.twig */
class __TwigTemplate_6c1ecaa257b0d714e46df655ac23b841 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "example_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "example_page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello ExamplePageController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!-- prawe menu -->
 <nav class=\"menuDesktopRightBar\">
    <ul>
        <li>
            <a href=\"#home\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <span>Główna</span>
            </a>
        </li>
        <li>
            <a href=\"#attractions\">
                <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                <span>Atrakcje</span>
            </a>
        </li>
        <li>
            <a href=\"#place\">
                <i class=\"fa fa-map-o\" aria-hidden=\"true\"></i>
                <span>Miejsce</span>
            </a>  
        </li>
        <li>
            <a href=\"#presence\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                <span>Obecność</span>
            </a>
        </li>
        <li>
            <a href=\"#gifts\">
                <i class=\"fa fa-gift\" aria-hidden=\"true\"></i>
                <span>Prezenty</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <span>Kontakt</span>
            </a>
        </li>
    </ul>
 </nav>
 <!-- początek strony ze zdjęciem pary młodej-->
<section class=\"home\" id=\"home\">
    <div class=\"contentHome\">
        <img src=\"./images/homeExamplePage.jpg\" alt=\"\">
        <div class=\"box\"></div>
        <div class=\"box\">
            <!-- górne menu -->
            <header>
                <div class=\"headerContent\">
                    <div class=\"menu\">
                        <a href=\"#attractions\">Atrakcje</a>
                        <a href=\"#place\">Miejsce</a>
                        <a href=\"#presence\">Obecność</a>
                        <a href=\"#gifts\">Prezenty</a>
                        <a href=\"\">Kontakt</a>
                    </div>
                </div>
            </header>
            <h1>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imiona_pary"]) || array_key_exists("imiona_pary", $context) ? $context["imiona_pary"] : (function () { throw new RuntimeError('Variable "imiona_pary" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "</h1>
            <!-- czasomierz -->
             <p>Do ślubu pozostało: </p>
            <div id=\"countdown\"></div>
            <a href=\"#attractions\" class=\"buttonLink\">Sprawdź atrakcje</a>
        </div>
    </div>
</section>
<!-- atrakcje -->
<section class=\"attractions\" id=\"attractions\">
    <div class=\"contentAttractions\">
        <h2>Atrakcje które na Was czekają</h2>
        <ul>
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attractions"]) || array_key_exists("attractions", $context) ? $context["attractions"] : (function () { throw new RuntimeError('Variable "attractions" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["attraction"]) {
            // line 79
            yield "            <li>
                <div class=\"icons\">";
            // line 80
            yield CoreExtension::getAttribute($this->env, $this->source, $context["attraction"], "icons", [], "any", false, false, false, 80);
            yield "</div>
                <h4>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attraction"], "header", [], "any", false, false, false, 81), "html", null, true);
            yield "</h4>
                <p>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attraction"], "describe", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
            </li>
            ";
            $context['_iterated'] = true;
        }
        // line 84
        if (!$context['_iterated']) {
            // line 85
            yield "                <li>Brak atrakcji</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['attraction'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "        </ul>
        <a href=\"#place\" class=\"buttonLink\">Zobacz gdzie</a>
    </div>
</section>
<section class=\"place\" id=\"place\">
    <!-- miejsce ślubu -->
    <div class=\"weddingPlace\">
        <img src=\"./images/placeWedding.jpg\" alt=\"\">
        <div class=\"weddingPlaceContent\">
            <div class=\"box\">
                <h3>Ślub</h3>
                <ul>
                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datasOfWedding"]) || array_key_exists("datasOfWedding", $context) ? $context["datasOfWedding"] : (function () { throw new RuntimeError('Variable "datasOfWedding" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dataOfWedding"]) {
            // line 100
            yield "                    <li>
                        <h4>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWedding"], "header", [], "any", false, false, false, 101), "html", null, true);
            yield "</h4>
                        <p>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWedding"], "content", [], "any", false, false, false, 102), "html", null, true);
            yield "</p>
                    </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 104
        if (!$context['_iterated']) {
            // line 105
            yield "                        <li>Brak danych</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dataOfWedding'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                </ul>
                <a href=\"\" class=\"buttonLink\">Zobacz na mapie</a>
            </div>
            <div class=\"box\">
            </div>
        </div>
    </div>
    <!-- miejsce wesela -->
    <div class=\"weddingReceptionPlace\">
        <img src=\"./images/placeWeddingReceptions.jpg\" alt=\"\">
        <div class=\"weddingReceptionPlaceContent\">
            <div class=\"box\">
            </div>
            <div class=\"box\">
                <h2>Wesele</h2>
                <ul>
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datasOfWeddingReception"]) || array_key_exists("datasOfWeddingReception", $context) ? $context["datasOfWeddingReception"] : (function () { throw new RuntimeError('Variable "datasOfWeddingReception" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dataOfWeddingReception"]) {
            // line 124
            yield "                    <li>
                        <h4>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "header", [], "any", false, false, false, 125), "html", null, true);
            yield "</h4>
                        <p>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "content", [], "any", false, false, false, 126), "html", null, true);
            yield "</p>
                    </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 128
        if (!$context['_iterated']) {
            // line 129
            yield "                        <li>Brak danych</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dataOfWeddingReception'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                </ul>
                <a href=\"\" class=\"buttonLink\">Zobacz na mapie</a>
            </div>
        </div>
    </div>
</section>
<!-- potwierdzenia obecności -->
<section class=\"presence\" id=\"presence\">
    <div class=\"presenceContent\">
        <h2>Potwierdź swoją obecność</h2>
        ";
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form_start', ["attr" => ["class" => "formGuest"]]);
        yield "
        <div class=\"box\">
            ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "Imie", [], "any", false, false, false, 143), 'label', ["label" => "Imie"]);
        yield "
            ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "Imie", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "inputName", "placeholder" => "Imie.."]]);
        yield "
        </div>
        <div class=\"box\">
            ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "Nazwisko", [], "any", false, false, false, 147), 'label', ["label" => "Nazwisko"]);
        yield "
            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "Nazwisko", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "inputName", "placeholder" => "Nazwisko.."]]);
        yield "
        </div>
        <div class=\"box\">
            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "Email", [], "any", false, false, false, 151), 'label', ["label" => "Email (Opcjonalne)"]);
        yield "
            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "Email", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "inputName", "placeholder" => "Email.."]]);
        yield "
        </div>
        <div class=\"box\">
            ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "save", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => "buttonForm"]]);
        yield "
        </div>
        ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_end');
        yield "
    </div>
</section>
<!-- sekcja prezentow -->
<section class=\"gifts\" id=\"gifts\">
    <img src=\"./images/backgroundGifts.jpg\" alt=\"\">
    <div class=\"giftsContent\">
        <h2>Lista prezentów</h2>
        <ul id=\"listGift\">
            ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prezenty"]) || array_key_exists("prezenty", $context) ? $context["prezenty"] : (function () { throw new RuntimeError('Variable "prezenty" does not exist.', 166, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prezent"]) {
            // line 167
            yield "                <li>
                    ";
            // line 168
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "zarezerwowany", [], "any", false, false, false, 168) != null)) {
                // line 169
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "link", [], "any", false, false, false, 169) != null)) {
                    // line 170
                    yield "                            <span style=\"text-decoration: line-through;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "nazwa", [], "any", false, false, false, 170), "html", null, true);
                    yield "</span> 
                            <span><a href='";
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "link", [], "any", false, false, false, 171), "html", null, true);
                    yield "' target=\"_blank\">Link</a></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "id", [], "any", false, false, false, 172), "html", null, true);
                    yield "\" disabled>
                        ";
                } else {
                    // line 174
                    yield "                            <span style=\"text-decoration: line-through;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "nazwa", [], "any", false, false, false, 174), "html", null, true);
                    yield "</span>
                            <span></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "id", [], "any", false, false, false, 176), "html", null, true);
                    yield "\" disabled>
                        ";
                }
                // line 178
                yield "                    ";
            } else {
                // line 179
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "link", [], "any", false, false, false, 179) != null)) {
                    // line 180
                    yield "                            <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "nazwa", [], "any", false, false, false, 180), "html", null, true);
                    yield "</span> 
                            <span><a href='";
                    // line 181
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "link", [], "any", false, false, false, 181), "html", null, true);
                    yield "' target=\"_blank\">Link</a></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"";
                    // line 182
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "id", [], "any", false, false, false, 182), "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 184
                    yield "                            <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "nazwa", [], "any", false, false, false, 184), "html", null, true);
                    yield "</span> 
                            <span></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"";
                    // line 186
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prezent"], "id", [], "any", false, false, false, 186), "html", null, true);
                    yield "\">
                        ";
                }
                // line 188
                yield "                    ";
            }
            // line 189
            yield "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prezent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "        </ul>
    </div>
</section>
    <!-- Pop-up do rezerwacji prezentu -->
    <div id=\"popup\">
        <div class=\"popupContent\">
            <h2>Podaj imię i nazwisko</h2>
            <input type=\"text\" id=\"imieNazwisko\" placeholder=\"Twoje imię i nazwisko\">
            <button id=\"potwierdz\">Potwierdź</button>
            <button id=\"anuluj\">Anuluj</button>
        </div>
    </div>
<script>
    // czasomierze na stronie głównej
    document.addEventListener(\"DOMContentLoaded\", function () {
        const targetTimestamp = ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["targetTimestampDate"]) || array_key_exists("targetTimestampDate", $context) ? $context["targetTimestampDate"] : (function () { throw new RuntimeError('Variable "targetTimestampDate" does not exist.', 206, $this->source); })()), "html", null, true);
        yield " * 1000;// zamian na milisekundy
        function updateCountdown() {
            const now = new Date().getTime();
            const timeLeft = targetTimestamp - now;
            if (timeLeft <= 0) {
                document.getElementById(\"countdown\").innerHTML = \"<h2>To już dziś!!!</h2>\";
                clearInterval(countdownInterval);
                return;
            }
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById(\"countdown\").innerHTML =
                `<ul><li><span>Dni</span><span>\${days}</span></li> 
                <li><span>Godziny</span><span>\${hours}</span></li>
                <li><span>Minuty</span><span>\${minutes}</span></li> 
                <li><span>Sekundy</span><span>\${seconds}</span></li></ul>`;
        }
        // Odświeżanie czasu co sekundę
        const countdownInterval = setInterval(updateCountdown, 1000);
        updateCountdown();
    });
</script>
";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "flashes", ["success"], "method", false, false, false, 231));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 232
            yield "    <script>
        // Pop up z informacją o potwierdzeniu obecności
        window.onload = function() {
            // Tworzymy pop up
            let popup = document.createElement(\"div\");
            popup.textContent = \"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "\";
            popup.style.position = \"fixed\";
            popup.style.top = \"20px\";
            popup.style.left = \"50%\";
            popup.style.transform = \"translateX(-50%)\";
            popup.style.background = \"#4CAF50\";
            popup.style.color = \"white\";
            popup.style.padding = \"15px 20px\";
            popup.style.borderRadius = \"5px\";
            popup.style.boxShadow = \"0 0 10px rgba(0, 0, 0, 0.3)\";
            popup.style.zIndex = \"1000\";
            popup.style.fontSize = \"16px\";

            document.body.appendChild(popup);

            // Pop up znika po 3 sekundach 
            setTimeout(function() {
                popup.style.opacity = \"0\";
                popup.style.transition = \"opacity 0.5s\";
                setTimeout(() => popup.remove(), 500);
            }, 3000);
        };
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        yield "<script>

    // Pop up do rezerwacji prezentu
    document.addEventListener(\"DOMContentLoaded\", function() {
        let popup = document.getElementById(\"popup\");
        let potwierdzBtn = document.getElementById(\"potwierdz\");
        let anulujBtn = document.getElementById(\"anuluj\");
        let inputImie = document.getElementById(\"imieNazwisko\");
        let wybranyPrezentId = null;

        document.querySelectorAll(\".rezerwuj-checkbox\").forEach(checkbox => {
            checkbox.addEventListener(\"change\", function() {
                if (this.checked) {
                    wybranyPrezentId = this.getAttribute(\"data-id\");
                    popup.style.display = \"flex\";
                }
            });
        });

        anulujBtn.addEventListener(\"click\", function() {
            popup.style.display = \"none\";
            inputImie.value = \"\";
            wybranyPrezentId = null;
        });

        potwierdzBtn.addEventListener(\"click\", function() {
            let imieNazwisko = inputImie.value.trim();
            if (!imieNazwisko) {
                alert(\"Podaj swoje imię i nazwisko!\");
                return;
            }

            fetch(\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rezerwuj_prezent");
        yield "\", {
                method: \"POST\",
                headers: {
                    \"Content-Type\": \"application/x-www-form-urlencoded\"
                },
                body: \"prezent_id=\" + wybranyPrezentId + \"&rezerwujacy=\" + encodeURIComponent(imieNazwisko)
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);  // Dodaj logowanie odpowiedzi
                if (data.success) {
                    alert(data.message);
                    location.reload();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);  // Logowanie błędów
            });
            popup.style.display = \"none\";
        });
    });
</script>
<script>
    // animacja ładowania strony
    \$(window).on('load', function() {
        \$('section.home img').css('opacity', '1');
        \$('section.home img').css('transform', 'translateX(0px)');
        \$('.contentHome .box h1').css('opacity', '1');
        \$('.contentHome .box p').css('opacity', '1');
        \$('.contentHome .box #countdown').css('opacity', '1');

    });
    // animacja bocznego menu
    \$(document).ready(function () {
    var menu = \$('.menuDesktopRightBar');
    var menuItems = \$('.menuDesktopRightBar ul li a');
    
    \$(window).on('scroll', function () {
        if (\$(this).scrollTop() > 400) {
            menu.css('right', '30px');
            menuItems.each(function(index) {
                \$(this).delay(index * 300).animate({ right: \"0px\" }, 300);
            });
        } else {
            menu.css('right', '-200px');
            menuItems.stop(true, true).css('right', '-200px');
        }
    });
    
    menuItems.css({
        right: '-200px'
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
        return "example_page/index.html.twig";
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
        return array (  544 => 293,  510 => 261,  480 => 237,  473 => 232,  469 => 231,  441 => 206,  424 => 191,  417 => 189,  414 => 188,  409 => 186,  403 => 184,  398 => 182,  394 => 181,  389 => 180,  386 => 179,  383 => 178,  378 => 176,  372 => 174,  367 => 172,  363 => 171,  358 => 170,  355 => 169,  353 => 168,  350 => 167,  346 => 166,  334 => 157,  329 => 155,  323 => 152,  319 => 151,  313 => 148,  309 => 147,  303 => 144,  299 => 143,  294 => 141,  282 => 131,  275 => 129,  273 => 128,  266 => 126,  262 => 125,  259 => 124,  254 => 123,  236 => 107,  229 => 105,  227 => 104,  220 => 102,  216 => 101,  213 => 100,  208 => 99,  194 => 87,  187 => 85,  185 => 84,  178 => 82,  174 => 81,  170 => 80,  167 => 79,  162 => 78,  146 => 65,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ExamplePageController!{% endblock %}

{% block body %}
<!-- prawe menu -->
 <nav class=\"menuDesktopRightBar\">
    <ul>
        <li>
            <a href=\"#home\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <span>Główna</span>
            </a>
        </li>
        <li>
            <a href=\"#attractions\">
                <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                <span>Atrakcje</span>
            </a>
        </li>
        <li>
            <a href=\"#place\">
                <i class=\"fa fa-map-o\" aria-hidden=\"true\"></i>
                <span>Miejsce</span>
            </a>  
        </li>
        <li>
            <a href=\"#presence\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                <span>Obecność</span>
            </a>
        </li>
        <li>
            <a href=\"#gifts\">
                <i class=\"fa fa-gift\" aria-hidden=\"true\"></i>
                <span>Prezenty</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <span>Kontakt</span>
            </a>
        </li>
    </ul>
 </nav>
 <!-- początek strony ze zdjęciem pary młodej-->
<section class=\"home\" id=\"home\">
    <div class=\"contentHome\">
        <img src=\"./images/homeExamplePage.jpg\" alt=\"\">
        <div class=\"box\"></div>
        <div class=\"box\">
            <!-- górne menu -->
            <header>
                <div class=\"headerContent\">
                    <div class=\"menu\">
                        <a href=\"#attractions\">Atrakcje</a>
                        <a href=\"#place\">Miejsce</a>
                        <a href=\"#presence\">Obecność</a>
                        <a href=\"#gifts\">Prezenty</a>
                        <a href=\"\">Kontakt</a>
                    </div>
                </div>
            </header>
            <h1>{{ imiona_pary }}</h1>
            <!-- czasomierz -->
             <p>Do ślubu pozostało: </p>
            <div id=\"countdown\"></div>
            <a href=\"#attractions\" class=\"buttonLink\">Sprawdź atrakcje</a>
        </div>
    </div>
</section>
<!-- atrakcje -->
<section class=\"attractions\" id=\"attractions\">
    <div class=\"contentAttractions\">
        <h2>Atrakcje które na Was czekają</h2>
        <ul>
            {% for attraction in attractions %}
            <li>
                <div class=\"icons\">{{ attraction.icons|raw }}</div>
                <h4>{{ attraction.header }}</h4>
                <p>{{ attraction.describe }}</p>
            </li>
            {% else %}
                <li>Brak atrakcji</li>
            {% endfor %}
        </ul>
        <a href=\"#place\" class=\"buttonLink\">Zobacz gdzie</a>
    </div>
</section>
<section class=\"place\" id=\"place\">
    <!-- miejsce ślubu -->
    <div class=\"weddingPlace\">
        <img src=\"./images/placeWedding.jpg\" alt=\"\">
        <div class=\"weddingPlaceContent\">
            <div class=\"box\">
                <h3>Ślub</h3>
                <ul>
                    {% for dataOfWedding in datasOfWedding %}
                    <li>
                        <h4>{{ dataOfWedding.header }}</h4>
                        <p>{{ dataOfWedding.content }}</p>
                    </li>
                    {% else %}
                        <li>Brak danych</li>
                    {% endfor %}
                </ul>
                <a href=\"\" class=\"buttonLink\">Zobacz na mapie</a>
            </div>
            <div class=\"box\">
            </div>
        </div>
    </div>
    <!-- miejsce wesela -->
    <div class=\"weddingReceptionPlace\">
        <img src=\"./images/placeWeddingReceptions.jpg\" alt=\"\">
        <div class=\"weddingReceptionPlaceContent\">
            <div class=\"box\">
            </div>
            <div class=\"box\">
                <h2>Wesele</h2>
                <ul>
                    {% for dataOfWeddingReception in datasOfWeddingReception %}
                    <li>
                        <h4>{{ dataOfWeddingReception.header }}</h4>
                        <p>{{ dataOfWeddingReception.content }}</p>
                    </li>
                    {% else %}
                        <li>Brak danych</li>
                    {% endfor %}
                </ul>
                <a href=\"\" class=\"buttonLink\">Zobacz na mapie</a>
            </div>
        </div>
    </div>
</section>
<!-- potwierdzenia obecności -->
<section class=\"presence\" id=\"presence\">
    <div class=\"presenceContent\">
        <h2>Potwierdź swoją obecność</h2>
        {{ form_start(form, {'attr': {'class': 'formGuest'}})}}
        <div class=\"box\">
            {{ form_label(form.Imie, 'Imie')}}
            {{ form_widget(form.Imie, {'attr':{'class':'inputName','placeholder':'Imie..'}} )}}
        </div>
        <div class=\"box\">
            {{ form_label(form.Nazwisko, 'Nazwisko')}}
            {{ form_widget(form.Nazwisko, {'attr':{'class':'inputName','placeholder':'Nazwisko..'}} )}}
        </div>
        <div class=\"box\">
            {{ form_label(form.Email, 'Email (Opcjonalne)')}}
            {{ form_widget(form.Email, {'attr':{'class':'inputName','placeholder':'Email..'}} )}}
        </div>
        <div class=\"box\">
            {{ form_widget(form.save, {'attr':{'class':'buttonForm'}})}}
        </div>
        {{ form_end(form)}}
    </div>
</section>
<!-- sekcja prezentow -->
<section class=\"gifts\" id=\"gifts\">
    <img src=\"./images/backgroundGifts.jpg\" alt=\"\">
    <div class=\"giftsContent\">
        <h2>Lista prezentów</h2>
        <ul id=\"listGift\">
            {% for prezent in prezenty %}
                <li>
                    {% if prezent.zarezerwowany != NULL %}
                        {% if prezent.link != NULL %}
                            <span style=\"text-decoration: line-through;\">{{ prezent.nazwa }}</span> 
                            <span><a href='{{ prezent.link }}' target=\"_blank\">Link</a></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"{{ prezent.id }}\" disabled>
                        {% else %}
                            <span style=\"text-decoration: line-through;\">{{ prezent.nazwa }}</span>
                            <span></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"{{ prezent.id }}\" disabled>
                        {% endif %}
                    {% else %}
                        {% if prezent.link != NULL %}
                            <span>{{ prezent.nazwa }}</span> 
                            <span><a href='{{ prezent.link }}' target=\"_blank\">Link</a></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"{{ prezent.id }}\">
                        {% else %}
                            <span>{{ prezent.nazwa }}</span> 
                            <span></span> 
                            <input type=\"checkbox\" class=\"rezerwuj-checkbox\" data-id=\"{{ prezent.id }}\">
                        {% endif %}
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
    </div>
</section>
    <!-- Pop-up do rezerwacji prezentu -->
    <div id=\"popup\">
        <div class=\"popupContent\">
            <h2>Podaj imię i nazwisko</h2>
            <input type=\"text\" id=\"imieNazwisko\" placeholder=\"Twoje imię i nazwisko\">
            <button id=\"potwierdz\">Potwierdź</button>
            <button id=\"anuluj\">Anuluj</button>
        </div>
    </div>
<script>
    // czasomierze na stronie głównej
    document.addEventListener(\"DOMContentLoaded\", function () {
        const targetTimestamp = {{ targetTimestampDate }} * 1000;// zamian na milisekundy
        function updateCountdown() {
            const now = new Date().getTime();
            const timeLeft = targetTimestamp - now;
            if (timeLeft <= 0) {
                document.getElementById(\"countdown\").innerHTML = \"<h2>To już dziś!!!</h2>\";
                clearInterval(countdownInterval);
                return;
            }
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById(\"countdown\").innerHTML =
                `<ul><li><span>Dni</span><span>\${days}</span></li> 
                <li><span>Godziny</span><span>\${hours}</span></li>
                <li><span>Minuty</span><span>\${minutes}</span></li> 
                <li><span>Sekundy</span><span>\${seconds}</span></li></ul>`;
        }
        // Odświeżanie czasu co sekundę
        const countdownInterval = setInterval(updateCountdown, 1000);
        updateCountdown();
    });
</script>
{% for message in app.flashes('success') %}
    <script>
        // Pop up z informacją o potwierdzeniu obecności
        window.onload = function() {
            // Tworzymy pop up
            let popup = document.createElement(\"div\");
            popup.textContent = \"{{ message }}\";
            popup.style.position = \"fixed\";
            popup.style.top = \"20px\";
            popup.style.left = \"50%\";
            popup.style.transform = \"translateX(-50%)\";
            popup.style.background = \"#4CAF50\";
            popup.style.color = \"white\";
            popup.style.padding = \"15px 20px\";
            popup.style.borderRadius = \"5px\";
            popup.style.boxShadow = \"0 0 10px rgba(0, 0, 0, 0.3)\";
            popup.style.zIndex = \"1000\";
            popup.style.fontSize = \"16px\";

            document.body.appendChild(popup);

            // Pop up znika po 3 sekundach 
            setTimeout(function() {
                popup.style.opacity = \"0\";
                popup.style.transition = \"opacity 0.5s\";
                setTimeout(() => popup.remove(), 500);
            }, 3000);
        };
    </script>
{% endfor %}
<script>

    // Pop up do rezerwacji prezentu
    document.addEventListener(\"DOMContentLoaded\", function() {
        let popup = document.getElementById(\"popup\");
        let potwierdzBtn = document.getElementById(\"potwierdz\");
        let anulujBtn = document.getElementById(\"anuluj\");
        let inputImie = document.getElementById(\"imieNazwisko\");
        let wybranyPrezentId = null;

        document.querySelectorAll(\".rezerwuj-checkbox\").forEach(checkbox => {
            checkbox.addEventListener(\"change\", function() {
                if (this.checked) {
                    wybranyPrezentId = this.getAttribute(\"data-id\");
                    popup.style.display = \"flex\";
                }
            });
        });

        anulujBtn.addEventListener(\"click\", function() {
            popup.style.display = \"none\";
            inputImie.value = \"\";
            wybranyPrezentId = null;
        });

        potwierdzBtn.addEventListener(\"click\", function() {
            let imieNazwisko = inputImie.value.trim();
            if (!imieNazwisko) {
                alert(\"Podaj swoje imię i nazwisko!\");
                return;
            }

            fetch(\"{{ path('rezerwuj_prezent') }}\", {
                method: \"POST\",
                headers: {
                    \"Content-Type\": \"application/x-www-form-urlencoded\"
                },
                body: \"prezent_id=\" + wybranyPrezentId + \"&rezerwujacy=\" + encodeURIComponent(imieNazwisko)
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);  // Dodaj logowanie odpowiedzi
                if (data.success) {
                    alert(data.message);
                    location.reload();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);  // Logowanie błędów
            });
            popup.style.display = \"none\";
        });
    });
</script>
<script>
    // animacja ładowania strony
    \$(window).on('load', function() {
        \$('section.home img').css('opacity', '1');
        \$('section.home img').css('transform', 'translateX(0px)');
        \$('.contentHome .box h1').css('opacity', '1');
        \$('.contentHome .box p').css('opacity', '1');
        \$('.contentHome .box #countdown').css('opacity', '1');

    });
    // animacja bocznego menu
    \$(document).ready(function () {
    var menu = \$('.menuDesktopRightBar');
    var menuItems = \$('.menuDesktopRightBar ul li a');
    
    \$(window).on('scroll', function () {
        if (\$(this).scrollTop() > 400) {
            menu.css('right', '30px');
            menuItems.each(function(index) {
                \$(this).delay(index * 300).animate({ right: \"0px\" }, 300);
            });
        } else {
            menu.css('right', '-200px');
            menuItems.stop(true, true).css('right', '-200px');
        }
    });
    
    menuItems.css({
        right: '-200px'
    });
});

</script>
{% endblock %}
", "example_page/index.html.twig", "C:\\Users\\admin\\Desktop\\weddingApp\\templates\\example_page\\index.html.twig");
    }
}
