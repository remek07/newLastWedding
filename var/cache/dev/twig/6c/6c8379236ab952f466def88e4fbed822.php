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

/* example_page/examplePageTwo.html.twig */
class __TwigTemplate_426d6c1add30b2e36ec03cfe127d7103 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "example_page/examplePageTwo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "example_page/examplePageTwo.html.twig", 1);
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

        yield "Strona przykładowa 2!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "<link rel=\"stylesheet\" href=\"/styles/examplePageTwo.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<!--
    Miejca
    Atrakcje
    Prezenty
    Potweirdzenie przybycia
-->
        <nav class=\"container-fluid position-fixed top-0 start-50 translate-middle-x z-1 bg-transparent p-0 m-0\">
            <div class=\"row d-flex justify-content-between align-items-center\">
                <div class=\" d-flex justify-content-center align-items-center position-relative\">
                    <ul class=\"nav nav-pills position-relative\">
                        <li class=\"nav-item p-2 position-relative\">
                            <a class=\"nav-link\" href=\"#home\">Strona główna</a>
                        </li>
                        <li class=\"nav-item p-2\">
                          <a class=\"nav-link\" href=\"#invitation\">Zaproszenie</a>
                        </li>
                        <li class=\"nav-item p-2\">
                          <a class=\"nav-link\" href=\"#place\">Miejsca</a>
                        </li>
                        <li class=\"nav-item p-2\">
                            <a class=\"nav-link\" href=\"#attractions\">Atrakcje</a>
                        </li>
                        <li class=\"nav-item p-2\">
                            <a class=\"nav-link\" href=\"#gifts\">Prezenty</a>
                        </li>
                        <li class=\"nav-item p-2\">
                            <a class=\"nav-link\" href=\"#contact\">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<div class=\"container-fluid m-0 sc\">
    <section id=\"home\" class=\"home vh-100 m-0 d-flex justify-content-center align-items-center p-5\">
        <div class=\"contentHomeSection d-flex flex-column justify-content-center align-items-center text-center w-75 rounded h-75\">
            <div class=\"row w-100 h-100\">
              <div class=\"col-4 leftColTopHome d-flex align-items-center justify-content-center flex-column p-4 h-100\">
                <h2>Ten dzień</h2>
                <div class=\"date fs-3\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateOfWedding"]) || array_key_exists("dateOfWedding", $context) ? $context["dateOfWedding"] : (function () { throw new RuntimeError('Variable "dateOfWedding" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"timerHomeTop\"></div>
                <p>Dla nas najważniejszy</p>
                <a href=\"\" class=\"btn-link\">Zapraszamy</a>
              </div>
              <div class=\"col-8 rightColTopHome p-5 d-flex justify-content-center align-items-center flex-column h-100\">
                <h1 class=\"\">";
        // line 54
        yield (isset($context["nameOfCouple"]) || array_key_exists("nameOfCouple", $context) ? $context["nameOfCouple"] : (function () { throw new RuntimeError('Variable "nameOfCouple" does not exist.', 54, $this->source); })());
        yield "</h1>
              </div>
            </div>
        </div>
    </section>
    <section id=\"invitation\" class=\"invitation w-100 pb-5 pt-5 mt-5 mb-5 d-flex justify-content-center align-items-center flex-column position-relative\">
        <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute start-0 top-0\" style=\"width: 300px; height: 300px\">  
        <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute end-0 bottom-0\" style=\"width: 400px; height: 400px\">  
        <img src=\"/images/examplePageTwo/bohoPngTwo.png\" alt=\"\" class=\"position-absolute end-0 top-0\" style=\"width: 100px; height: 100px; transform: rotate(-120deg) translateY(-120px);\">  

      <div class=\"contentInvitationSection w-75 shadow-lg p-5 mb-5 bg-body rounded position-relative row\">
            <div class=\"leftImageInvitation col-sm-6 col-md-6 col-lg-3 position-relative\">
                <img src=\"/images/examplePageTwo/examplePageTwoHomeTop.jpg\" alt=\"\" class=\"rounded-circle overflow-hidden mb-4 object-fit-fill position-absolute top-50 start-0 translate-middle\">
            </div>
            <div class=\"rightInvitationContent col-sm-6 col-md-6 col-lg-9\">
                <h3 class=\"h3 mb-4\">Zaproszenie</h3>       
                <p>Z radością zapraszamy
                    <b>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nameOfCouple"]) || array_key_exists("nameOfCouple", $context) ? $context["nameOfCouple"] : (function () { throw new RuntimeError('Variable "nameOfCouple" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "</b>
                    na uroczystość zaślubin,
                    która odbędzie się
                    <br/>
                    <br/>
                    <b>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateOfWedding"]) || array_key_exists("dateOfWedding", $context) ? $context["dateOfWedding"] : (function () { throw new RuntimeError('Variable "dateOfWedding" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "</b> o godzinie <b>13:00</b>
                    w Kościele Matki Boskiej, Warszawa.
                    Po ceremonii serdecznie zapraszamy na przyjęcie weselne,
                    które odbędzie się w [Miejsce przyjęcia].
                    <br/>
                    <br/>
                    <b>Prosimy o potwierdzenie przybycia do 12.08.2025.</b>
                    <br/>
                    <br/>
                    Z miłością i radością,
                    <span class=\"position-absolute bottom-0 end-0 p-4 signature\">
                      ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nameOfCouple"]) || array_key_exists("nameOfCouple", $context) ? $context["nameOfCouple"] : (function () { throw new RuntimeError('Variable "nameOfCouple" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "
                    </span>
                </p>    
            </div>
        </div>
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalConfirm\" data-bs-whatever=\"@getbootstrap\">Potwierdź obecność</button>
    </section>
    <section id=\"place\" class=\"place d-flex justify-content-center align-items-center flex-column mb-5\">
        <h2 class=\"h2 mb-2\">Gdzie i kiedy</h2>
        <div class=\"container-fluid mx-auto mt-4 d-flex justify-content-center\">
          <div class=\"row row-cols-1 row-cols-md-2 gx-4 gy-3 text-center w-100\">
            <div class=\"boxPlace col d-flex flex-column justify-content-center align-items-center pt-5 pb-5\" style=\"background: url(/images/examplePageTwo/placeWedding.jpg);\">
                <div class=\"w-75\">
                  <h3>Ślub</h3>
                <ul class=\"grid list-unstyled p-4 g-1\">
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datasOfWedding"]) || array_key_exists("datasOfWedding", $context) ? $context["datasOfWedding"] : (function () { throw new RuntimeError('Variable "datasOfWedding" does not exist.', 102, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dataOfWedding"]) {
            // line 103
            yield "                    <li class=\"m-1 p-2\">
                        <h5>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWedding"], "header", [], "any", false, false, false, 104), "html", null, true);
            yield "</h5>
                        <p>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWedding"], "content", [], "any", false, false, false, 105), "html", null, true);
            yield "</p>
                    </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 107
        if (!$context['_iterated']) {
            // line 108
            yield "                        <li>Brak danych</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dataOfWedding'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                </ul>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6952.663600538601!2d18.546370629973982!3d50.09254172869486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47114f28e4e95de7%3A0x57dff1961fa217f6!2sRybnik%20Plaza!5e1!3m2!1spl!2spl!4v1744008210592!5m2!1spl!2spl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" class=\"w-75\"></iframe>

                </div>
            </div>
            <div class=\"boxPlace col d-flex flex-column justify-content-center align-items-center pt-5 pb-5\" style=\"background: url(/images/examplePageTwo/placeWeddingReceptions.jpg);\">
                <div class=\"w-75 \">
                  <h3>Wesele</h3>
                  <ul class=\"grid list-unstyled p-4 g-1\" >
                      ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datasOfWeddingReception"]) || array_key_exists("datasOfWeddingReception", $context) ? $context["datasOfWeddingReception"] : (function () { throw new RuntimeError('Variable "datasOfWeddingReception" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dataOfWeddingReception"]) {
            // line 120
            yield "                      <li class=\"m-1 p-2\">
                          <h5>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "header", [], "any", false, false, false, 121), "html", null, true);
            yield "</h5>
                          <p>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "content", [], "any", false, false, false, 122), "html", null, true);
            yield "</p>
                      </li>
                      ";
            $context['_iterated'] = true;
        }
        // line 124
        if (!$context['_iterated']) {
            // line 125
            yield "                          <li>Brak danych</li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dataOfWeddingReception'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "                  </ul>                  
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6952.663600538601!2d18.546370629973982!3d50.09254172869486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47114f28e4e95de7%3A0x57dff1961fa217f6!2sRybnik%20Plaza!5e1!3m2!1spl!2spl!4v1744008210592!5m2!1spl!2spl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" class=\"w-75\"></iframe>

                </div>
            </div>
        </div>
      </div>
    </section>
    <section id=\"attractions\" class=\"attractions w-100 p-5 d-flex justify-content-center align-items-center flex-column mb-5 position-relative\">
      <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute start-0 top-0\" style=\"width: 200px; height: 200px\">  
        <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute end-0 top-0\" style=\"width: 300px; height: 300px\">    
      <div class=\"w-100 text-center\" >
            <h2 class=\"h2 mb-2\">Atrakcje</h2>
            <div class=\"boxAttractions mt-2 position-relative\">
              <p class=\"fs-4\">Oto lista atrakcji, która na Was czeka: </p>
                <ul class=\"list-unstyled row justify-content-md-center w-100\">
                    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attractions"]) || array_key_exists("attractions", $context) ? $context["attractions"] : (function () { throw new RuntimeError('Variable "attractions" does not exist.', 143, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["attraction"]) {
            // line 144
            yield "                    <li class=\"col d-flex flex-column justify-content-center align-items-start m-4 p-4 rounded shadow-lg\">
                        <div class=\"contentAttractionBox d-flex flex-column justify-content-start align-items-center p-3 rounded h-100 w-100\" style=\"background: url(/images/examplePageTwo/examplePageTwoAttraction.jpg);\">
                          <div class=\"mb-2\">";
            // line 146
            yield CoreExtension::getAttribute($this->env, $this->source, $context["attraction"], "icons", [], "any", false, false, false, 146);
            yield "</div>
                          <h4 class=\"h3 mb-2\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attraction"], "header", [], "any", false, false, false, 147), "html", null, true);
            yield "</h4>
                          <p class=\"m-0\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attraction"], "describe", [], "any", false, false, false, 148), "html", null, true);
            yield "</p>
                        </div>
                    </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 151
        if (!$context['_iterated']) {
            // line 152
            yield "                        <li>Brak atrakcji</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['attraction'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                </ul>
            </div>
        </div>
    </section>
    <section id=\"gifts\" class=\"gifts d-flex justify-content-center align-items-center flex-column p-5\" style=\"background: url(/images/examplePageTwo/examplePageTwoGiftBackground.jpg);\">
        <h2 class=\"h2 mb-5\">Prezenty</h2>
        <div class=\"container w-100 mx-auto mt-4\">
            <div class=\"row row-cols-1 row-cols-md-2 gx-4 gy-3 text-center\">
                <div class=\"col\">
                  <div class=\"p-4 bg-light border rounded shadow-sm\">
                    <div class=\"row align-items-center\">
                      <div class=\"col-6 text-start\">
                        <p class=\"m-0 fs-4\">Zestaw do robienia sushi</p>
                      </div>
                      <div class=\"col\">
                        <a href=\"#\">Link</a>
                      </div>
                      <div class=\"col-4 text-end\">
                        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Zdrapki na loterię</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>

                        </div>
                      </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Robot kuchenny</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Ekspres do kawy</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\" disabled>Zarezerwowany</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Album na zdjęcia</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>
                        </div>
                      </div>
                    </div>
                </div>
                  
              </div>
            </div>
    </section>
    <section id=\"contact\" class=\"contact container-fluid w-100 d-flex justify-content-center align-items-center flex-column p-5 position-relative\">
      <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute start-0 bottom-50 translate-middle-x\" style=\"width: 250px; height: 250px\">  
      <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute end-0 top-0\" style=\"width: 300px; height: 300px\">     
      <h2 >Kontakt</h2>
        <p class=\"fs-4\">Jeżeli macie jakieś pytania śmiało dzwońcie/piszcie na wszystko odpowiemy.</p>
        <div class=\"container mx-auto mt-4\">
            <div class=\"row row-cols-1 row-cols-md-2 gx-4 gy-3 text-center\">
                <div class=\"col text-center\">
                  <div class=\"p-5 contactLeftContent rounded h-100\">
                      <div class=\"p-5 borderInset rounded\">
                        <h4>Numery kontatkowe</h4>
                        <div class=\"row row-cols-1 gx-4 gy-3 text-center d-flex justify-content-center align-items-center p-4 rounded\">
                            <div class=\"d-flex align-items-center justify-content-center flex-column contactLeftContentBox\">
                                <span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span>
                                <span>Imie Nazwisko</span>
                                <span><a href=\"tel:123456789\">tel. 123456789</a></span>
                            </div>
                            <div class=\"d-flex align-items-center justify-content-center flex-column contactLeftContentBox\">
                                <span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span>
                                <span>Imie Nazwisko</span>
                                <span><a href=\"tel:123456789\">tel. 123456789</a></span>
                            </div>
                            <div class=\" d-flex align-items-center justify-content-center flex-column contactLeftContentBox\">
                                <span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span>
                                <span>Imie Nazwisko</span>
                                <span><a href=\"tel:123456789\">tel. 123456789</a></span>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class=\"col\">
                    <div class=\"contactRightContent h-100 rounded p-5\">
                      <div class=\"borderInsetRight rounded h-100 p-5\">
                        <h4>Formularz kontaktowy</h4>
                        ";
        // line 277
        yield from $this->loadTemplate("form/contactForm.html.twig", "example_page/examplePageTwo.html.twig", 277)->unwrap()->yield(CoreExtension::merge($context, ["contactForm" => (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 277, $this->source); })())]));
        // line 278
        yield "                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class=\"modal fade\" id=\"exampleModalConfirm\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Potwiedź obecność</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <form>
            <div class=\"mb-2 row p-0 m-0\">
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Imię:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Nazwisko:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
            </div>
            <div class=\"mb-2 p-1\">
                <label for=\"recipient-name\" class=\"col-form-label\">E-mail:</label>
                <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
            </div>
          </form>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Wyjdź</button>
          <button type=\"button\" class=\"btn btn-primary\">Potwierdź</button>
        </div>
      </div>
    </div>
  </div>


  
<div class=\"modal fade\" id=\"exampleModalGifts\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Potwiedź zakup prezentu</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <form>
            <div class=\"mb-2 row p-0 m-0\">
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Imię:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Nazwisko:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
            </div>
          </form>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Wyjdź</button>
          <button type=\"button\" class=\"btn btn-primary\">Zakupię</button>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "example_page/examplePageTwo.html.twig";
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
        return array (  460 => 278,  458 => 277,  333 => 154,  326 => 152,  324 => 151,  316 => 148,  312 => 147,  308 => 146,  304 => 144,  299 => 143,  281 => 127,  274 => 125,  272 => 124,  265 => 122,  261 => 121,  258 => 120,  253 => 119,  242 => 110,  235 => 108,  233 => 107,  226 => 105,  222 => 104,  219 => 103,  214 => 102,  196 => 87,  182 => 76,  174 => 71,  154 => 54,  145 => 48,  105 => 10,  95 => 9,  86 => 7,  76 => 6,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Strona przykładowa 2!{% endblock %}


{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/styles/examplePageTwo.css\">
{% endblock %}
{% block body %}
<!--
    Miejca
    Atrakcje
    Prezenty
    Potweirdzenie przybycia
-->
        <nav class=\"container-fluid position-fixed top-0 start-50 translate-middle-x z-1 bg-transparent p-0 m-0\">
            <div class=\"row d-flex justify-content-between align-items-center\">
                <div class=\" d-flex justify-content-center align-items-center position-relative\">
                    <ul class=\"nav nav-pills position-relative\">
                        <li class=\"nav-item p-2 position-relative\">
                            <a class=\"nav-link\" href=\"#home\">Strona główna</a>
                        </li>
                        <li class=\"nav-item p-2\">
                          <a class=\"nav-link\" href=\"#invitation\">Zaproszenie</a>
                        </li>
                        <li class=\"nav-item p-2\">
                          <a class=\"nav-link\" href=\"#place\">Miejsca</a>
                        </li>
                        <li class=\"nav-item p-2\">
                            <a class=\"nav-link\" href=\"#attractions\">Atrakcje</a>
                        </li>
                        <li class=\"nav-item p-2\">
                            <a class=\"nav-link\" href=\"#gifts\">Prezenty</a>
                        </li>
                        <li class=\"nav-item p-2\">
                            <a class=\"nav-link\" href=\"#contact\">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<div class=\"container-fluid m-0 sc\">
    <section id=\"home\" class=\"home vh-100 m-0 d-flex justify-content-center align-items-center p-5\">
        <div class=\"contentHomeSection d-flex flex-column justify-content-center align-items-center text-center w-75 rounded h-75\">
            <div class=\"row w-100 h-100\">
              <div class=\"col-4 leftColTopHome d-flex align-items-center justify-content-center flex-column p-4 h-100\">
                <h2>Ten dzień</h2>
                <div class=\"date fs-3\">{{dateOfWedding}}</div>
                <div class=\"timerHomeTop\"></div>
                <p>Dla nas najważniejszy</p>
                <a href=\"\" class=\"btn-link\">Zapraszamy</a>
              </div>
              <div class=\"col-8 rightColTopHome p-5 d-flex justify-content-center align-items-center flex-column h-100\">
                <h1 class=\"\">{{nameOfCouple|raw}}</h1>
              </div>
            </div>
        </div>
    </section>
    <section id=\"invitation\" class=\"invitation w-100 pb-5 pt-5 mt-5 mb-5 d-flex justify-content-center align-items-center flex-column position-relative\">
        <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute start-0 top-0\" style=\"width: 300px; height: 300px\">  
        <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute end-0 bottom-0\" style=\"width: 400px; height: 400px\">  
        <img src=\"/images/examplePageTwo/bohoPngTwo.png\" alt=\"\" class=\"position-absolute end-0 top-0\" style=\"width: 100px; height: 100px; transform: rotate(-120deg) translateY(-120px);\">  

      <div class=\"contentInvitationSection w-75 shadow-lg p-5 mb-5 bg-body rounded position-relative row\">
            <div class=\"leftImageInvitation col-sm-6 col-md-6 col-lg-3 position-relative\">
                <img src=\"/images/examplePageTwo/examplePageTwoHomeTop.jpg\" alt=\"\" class=\"rounded-circle overflow-hidden mb-4 object-fit-fill position-absolute top-50 start-0 translate-middle\">
            </div>
            <div class=\"rightInvitationContent col-sm-6 col-md-6 col-lg-9\">
                <h3 class=\"h3 mb-4\">Zaproszenie</h3>       
                <p>Z radością zapraszamy
                    <b>{{nameOfCouple}}</b>
                    na uroczystość zaślubin,
                    która odbędzie się
                    <br/>
                    <br/>
                    <b>{{dateOfWedding}}</b> o godzinie <b>13:00</b>
                    w Kościele Matki Boskiej, Warszawa.
                    Po ceremonii serdecznie zapraszamy na przyjęcie weselne,
                    które odbędzie się w [Miejsce przyjęcia].
                    <br/>
                    <br/>
                    <b>Prosimy o potwierdzenie przybycia do 12.08.2025.</b>
                    <br/>
                    <br/>
                    Z miłością i radością,
                    <span class=\"position-absolute bottom-0 end-0 p-4 signature\">
                      {{nameOfCouple}}
                    </span>
                </p>    
            </div>
        </div>
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalConfirm\" data-bs-whatever=\"@getbootstrap\">Potwierdź obecność</button>
    </section>
    <section id=\"place\" class=\"place d-flex justify-content-center align-items-center flex-column mb-5\">
        <h2 class=\"h2 mb-2\">Gdzie i kiedy</h2>
        <div class=\"container-fluid mx-auto mt-4 d-flex justify-content-center\">
          <div class=\"row row-cols-1 row-cols-md-2 gx-4 gy-3 text-center w-100\">
            <div class=\"boxPlace col d-flex flex-column justify-content-center align-items-center pt-5 pb-5\" style=\"background: url(/images/examplePageTwo/placeWedding.jpg);\">
                <div class=\"w-75\">
                  <h3>Ślub</h3>
                <ul class=\"grid list-unstyled p-4 g-1\">
                    {% for dataOfWedding in datasOfWedding %}
                    <li class=\"m-1 p-2\">
                        <h5>{{ dataOfWedding.header }}</h5>
                        <p>{{ dataOfWedding.content }}</p>
                    </li>
                    {% else %}
                        <li>Brak danych</li>
                    {% endfor %}
                </ul>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6952.663600538601!2d18.546370629973982!3d50.09254172869486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47114f28e4e95de7%3A0x57dff1961fa217f6!2sRybnik%20Plaza!5e1!3m2!1spl!2spl!4v1744008210592!5m2!1spl!2spl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" class=\"w-75\"></iframe>

                </div>
            </div>
            <div class=\"boxPlace col d-flex flex-column justify-content-center align-items-center pt-5 pb-5\" style=\"background: url(/images/examplePageTwo/placeWeddingReceptions.jpg);\">
                <div class=\"w-75 \">
                  <h3>Wesele</h3>
                  <ul class=\"grid list-unstyled p-4 g-1\" >
                      {% for dataOfWeddingReception in datasOfWeddingReception %}
                      <li class=\"m-1 p-2\">
                          <h5>{{ dataOfWeddingReception.header }}</h5>
                          <p>{{ dataOfWeddingReception.content }}</p>
                      </li>
                      {% else %}
                          <li>Brak danych</li>
                      {% endfor %}
                  </ul>                  
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6952.663600538601!2d18.546370629973982!3d50.09254172869486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47114f28e4e95de7%3A0x57dff1961fa217f6!2sRybnik%20Plaza!5e1!3m2!1spl!2spl!4v1744008210592!5m2!1spl!2spl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" class=\"w-75\"></iframe>

                </div>
            </div>
        </div>
      </div>
    </section>
    <section id=\"attractions\" class=\"attractions w-100 p-5 d-flex justify-content-center align-items-center flex-column mb-5 position-relative\">
      <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute start-0 top-0\" style=\"width: 200px; height: 200px\">  
        <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute end-0 top-0\" style=\"width: 300px; height: 300px\">    
      <div class=\"w-100 text-center\" >
            <h2 class=\"h2 mb-2\">Atrakcje</h2>
            <div class=\"boxAttractions mt-2 position-relative\">
              <p class=\"fs-4\">Oto lista atrakcji, która na Was czeka: </p>
                <ul class=\"list-unstyled row justify-content-md-center w-100\">
                    {% for attraction in attractions %}
                    <li class=\"col d-flex flex-column justify-content-center align-items-start m-4 p-4 rounded shadow-lg\">
                        <div class=\"contentAttractionBox d-flex flex-column justify-content-start align-items-center p-3 rounded h-100 w-100\" style=\"background: url(/images/examplePageTwo/examplePageTwoAttraction.jpg);\">
                          <div class=\"mb-2\">{{ attraction.icons|raw }}</div>
                          <h4 class=\"h3 mb-2\">{{ attraction.header }}</h4>
                          <p class=\"m-0\">{{ attraction.describe }}</p>
                        </div>
                    </li>
                    {% else %}
                        <li>Brak atrakcji</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </section>
    <section id=\"gifts\" class=\"gifts d-flex justify-content-center align-items-center flex-column p-5\" style=\"background: url(/images/examplePageTwo/examplePageTwoGiftBackground.jpg);\">
        <h2 class=\"h2 mb-5\">Prezenty</h2>
        <div class=\"container w-100 mx-auto mt-4\">
            <div class=\"row row-cols-1 row-cols-md-2 gx-4 gy-3 text-center\">
                <div class=\"col\">
                  <div class=\"p-4 bg-light border rounded shadow-sm\">
                    <div class=\"row align-items-center\">
                      <div class=\"col-6 text-start\">
                        <p class=\"m-0 fs-4\">Zestaw do robienia sushi</p>
                      </div>
                      <div class=\"col\">
                        <a href=\"#\">Link</a>
                      </div>
                      <div class=\"col-4 text-end\">
                        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Zdrapki na loterię</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>

                        </div>
                      </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Robot kuchenny</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Ekspres do kawy</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\" disabled>Zarezerwowany</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"p-4 bg-light border rounded shadow-sm\">
                      <div class=\"row align-items-center\">
                        <div class=\"col-6 text-start\">
                          <p class=\"m-0 fs-4\">Album na zdjęcia</p>
                        </div>
                        <div class=\"col\">
                          <a href=\"#\">Link</a>
                        </div>
                        <div class=\"col-4 text-end\">
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalGifts\" data-bs-whatever=\"@getbootstrap\">Zarezerwuj</button>
                        </div>
                      </div>
                    </div>
                </div>
                  
              </div>
            </div>
    </section>
    <section id=\"contact\" class=\"contact container-fluid w-100 d-flex justify-content-center align-items-center flex-column p-5 position-relative\">
      <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute start-0 bottom-50 translate-middle-x\" style=\"width: 250px; height: 250px\">  
      <img src=\"/images/examplePageTwo/bohoPng.png\" alt=\"\" class=\"position-absolute end-0 top-0\" style=\"width: 300px; height: 300px\">     
      <h2 >Kontakt</h2>
        <p class=\"fs-4\">Jeżeli macie jakieś pytania śmiało dzwońcie/piszcie na wszystko odpowiemy.</p>
        <div class=\"container mx-auto mt-4\">
            <div class=\"row row-cols-1 row-cols-md-2 gx-4 gy-3 text-center\">
                <div class=\"col text-center\">
                  <div class=\"p-5 contactLeftContent rounded h-100\">
                      <div class=\"p-5 borderInset rounded\">
                        <h4>Numery kontatkowe</h4>
                        <div class=\"row row-cols-1 gx-4 gy-3 text-center d-flex justify-content-center align-items-center p-4 rounded\">
                            <div class=\"d-flex align-items-center justify-content-center flex-column contactLeftContentBox\">
                                <span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span>
                                <span>Imie Nazwisko</span>
                                <span><a href=\"tel:123456789\">tel. 123456789</a></span>
                            </div>
                            <div class=\"d-flex align-items-center justify-content-center flex-column contactLeftContentBox\">
                                <span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span>
                                <span>Imie Nazwisko</span>
                                <span><a href=\"tel:123456789\">tel. 123456789</a></span>
                            </div>
                            <div class=\" d-flex align-items-center justify-content-center flex-column contactLeftContentBox\">
                                <span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span>
                                <span>Imie Nazwisko</span>
                                <span><a href=\"tel:123456789\">tel. 123456789</a></span>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class=\"col\">
                    <div class=\"contactRightContent h-100 rounded p-5\">
                      <div class=\"borderInsetRight rounded h-100 p-5\">
                        <h4>Formularz kontaktowy</h4>
                        {% include 'form/contactForm.html.twig' with { contactForm: contactForm } %}
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class=\"modal fade\" id=\"exampleModalConfirm\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Potwiedź obecność</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <form>
            <div class=\"mb-2 row p-0 m-0\">
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Imię:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Nazwisko:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
            </div>
            <div class=\"mb-2 p-1\">
                <label for=\"recipient-name\" class=\"col-form-label\">E-mail:</label>
                <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
            </div>
          </form>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Wyjdź</button>
          <button type=\"button\" class=\"btn btn-primary\">Potwierdź</button>
        </div>
      </div>
    </div>
  </div>


  
<div class=\"modal fade\" id=\"exampleModalGifts\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Potwiedź zakup prezentu</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <form>
            <div class=\"mb-2 row p-0 m-0\">
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Imię:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
                <div class=\"col p-0 m-1\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Nazwisko:</label>
                    <input type=\"text\" class=\"form-control\" id=\"recipient-name\">
                </div>
            </div>
          </form>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Wyjdź</button>
          <button type=\"button\" class=\"btn btn-primary\">Zakupię</button>
        </div>
      </div>
    </div>
  </div>
{% endblock %}", "example_page/examplePageTwo.html.twig", "C:\\Users\\admin\\Desktop\\newLastWedding\\templates\\example_page\\examplePageTwo.html.twig");
    }
}
