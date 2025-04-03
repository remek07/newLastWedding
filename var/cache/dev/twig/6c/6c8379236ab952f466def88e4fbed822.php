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
        yield "<div class=\"container-fluid m-0\">
    <section class=\"home vh-100 p-0 m-0 d-flex justify-content-center align-items-center\">
        <div class=\"contentHomeSection d-flex flex-column justify-content-center align-items-center text-center\">
            <h1 class=\"display-1 fw-normal mb-5\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nameOfCouple"]) || array_key_exists("nameOfCouple", $context) ? $context["nameOfCouple"] : (function () { throw new RuntimeError('Variable "nameOfCouple" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</h1>
            <div class=\"date fs-3 fw-bold mt-n1\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateOfWedding"]) || array_key_exists("dateOfWedding", $context) ? $context["dateOfWedding"] : (function () { throw new RuntimeError('Variable "dateOfWedding" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"timerHomeTop\"></div>
        </div>
    </section>
    <section class=\"invitation w-100 p-0 m-0 d-flex justify-content-center align-items-center p-5 flex-column\">
        <div class=\"contentInvitationSection w-75 shadow-lg p-5 mb-5 bg-body rounded position-relative row\">
            <div class=\"leftImageInvitation col-sm-6 col-md-4 col-lg-3 position-relative\">
                <img src=\"/images/examplePageTwo/examplePageTwoHomeTop.jpg\" alt=\"\" class=\"rounded-circle overflow-hidden mb-4 object-fit-fill position-absolute top-50 start-0 translate-middle\">
            </div>
            <div class=\"rightInvitationContent col-sm-6 col-md-4 col-lg-9\">
                <h2 class=\"h2 mb-4\">Zaproszenie</h2>       
                <p >Z radością zapraszamy
                    [Imię Panny Młodej] & [Imię Pana Młodego]
                    na uroczystość zaślubin,
                    która odbędzie się
                    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateOfWedding"]) || array_key_exists("dateOfWedding", $context) ? $context["dateOfWedding"] : (function () { throw new RuntimeError('Variable "dateOfWedding" does not exist.', 29, $this->source); })()), "html", null, true);
        yield " o godzinie [Godzina]
                    w [Miejsce ceremonii].
                    
                    Po ceremonii serdecznie zapraszamy na przyjęcie weselne,
                    które odbędzie się w [Miejsce przyjęcia].
                    
                    Prosimy o potwierdzenie przybycia do [Data RSVP]
                    pod numerem telefonu: [Numer telefonu]
                    
                    Z miłością i radością,
                    [Imię Panny Młodej] & [Imię Pana Młodego]
                </p>    
            </div>
        </div>
        <a href=\"\">Zobacz Gdzie</a>
    </section>
    <section class=\"place w-100 p-5 d-flex justify-content-center align-items-center flex-column\">
        <h2 class=\"h2 mb-5\">Gdzie i kiedy</h2>
        <div class=\"contentPlace row w-100 text-center\" >
            <div class=\"boxPlace col-4 mt-3\">
                <h3>Ślub</h3>
                <ul class=\"grid list-unstyled p-4 g-1\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datasOfWedding"]) || array_key_exists("datasOfWedding", $context) ? $context["datasOfWedding"] : (function () { throw new RuntimeError('Variable "datasOfWedding" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dataOfWedding"]) {
            // line 52
            yield "                    <li class=\"m-1 p-2\">
                        <h5>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWedding"], "header", [], "any", false, false, false, 53), "html", null, true);
            yield "</h5>
                        <p>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWedding"], "content", [], "any", false, false, false, 54), "html", null, true);
            yield "</p>
                    </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 56
        if (!$context['_iterated']) {
            // line 57
            yield "                        <li>Brak danych</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dataOfWedding'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                </ul>
            </div>
            <div class=\"boxPlace col-4 mt-3\">
                <h3>Wesele</h3>
                <ul class=\"grid list-unstyled p-4\" >
                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datasOfWeddingReception"]) || array_key_exists("datasOfWeddingReception", $context) ? $context["datasOfWeddingReception"] : (function () { throw new RuntimeError('Variable "datasOfWeddingReception" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dataOfWeddingReception"]) {
            // line 65
            yield "                    <li class=\"m-1 p-2\">
                        <h5 class=\"h5\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "header", [], "any", false, false, false, 66), "html", null, true);
            yield "</h5>
                        <p>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "content", [], "any", false, false, false, 67), "html", null, true);
            yield "</p>
                    </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "                        <li>Brak danych</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dataOfWeddingReception'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                </ul>
            </div>
            <div class=\"boxPlace col-4 mt-3\">
                <h3>Nocleg</h3>
                <ul class=\"grid list-unstyled p-4\">
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["datasOfWeddingReception"]) || array_key_exists("datasOfWeddingReception", $context) ? $context["datasOfWeddingReception"] : (function () { throw new RuntimeError('Variable "datasOfWeddingReception" does not exist.', 77, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dataOfWeddingReception"]) {
            // line 78
            yield "                    <li class=\"m-1 p-2\">
                        <h5 class=\"h5\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "header", [], "any", false, false, false, 79), "html", null, true);
            yield "</h5>
                        <p>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dataOfWeddingReception"], "content", [], "any", false, false, false, 80), "html", null, true);
            yield "</p>
                    </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "                        <li>Brak danych</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dataOfWeddingReception'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                </ul>
            </div>
        </div>
    </section>
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
        return array (  255 => 85,  248 => 83,  246 => 82,  239 => 80,  235 => 79,  232 => 78,  227 => 77,  220 => 72,  213 => 70,  211 => 69,  204 => 67,  200 => 66,  197 => 65,  192 => 64,  185 => 59,  178 => 57,  176 => 56,  169 => 54,  165 => 53,  162 => 52,  157 => 51,  132 => 29,  114 => 14,  110 => 13,  105 => 10,  95 => 9,  86 => 7,  76 => 6,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Strona przykładowa 2!{% endblock %}


{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/styles/examplePageTwo.css\">
{% endblock %}
{% block body %}
<div class=\"container-fluid m-0\">
    <section class=\"home vh-100 p-0 m-0 d-flex justify-content-center align-items-center\">
        <div class=\"contentHomeSection d-flex flex-column justify-content-center align-items-center text-center\">
            <h1 class=\"display-1 fw-normal mb-5\">{{nameOfCouple}}</h1>
            <div class=\"date fs-3 fw-bold mt-n1\">{{dateOfWedding}}</div>
            <div class=\"timerHomeTop\"></div>
        </div>
    </section>
    <section class=\"invitation w-100 p-0 m-0 d-flex justify-content-center align-items-center p-5 flex-column\">
        <div class=\"contentInvitationSection w-75 shadow-lg p-5 mb-5 bg-body rounded position-relative row\">
            <div class=\"leftImageInvitation col-sm-6 col-md-4 col-lg-3 position-relative\">
                <img src=\"/images/examplePageTwo/examplePageTwoHomeTop.jpg\" alt=\"\" class=\"rounded-circle overflow-hidden mb-4 object-fit-fill position-absolute top-50 start-0 translate-middle\">
            </div>
            <div class=\"rightInvitationContent col-sm-6 col-md-4 col-lg-9\">
                <h2 class=\"h2 mb-4\">Zaproszenie</h2>       
                <p >Z radością zapraszamy
                    [Imię Panny Młodej] & [Imię Pana Młodego]
                    na uroczystość zaślubin,
                    która odbędzie się
                    {{dateOfWedding}} o godzinie [Godzina]
                    w [Miejsce ceremonii].
                    
                    Po ceremonii serdecznie zapraszamy na przyjęcie weselne,
                    które odbędzie się w [Miejsce przyjęcia].
                    
                    Prosimy o potwierdzenie przybycia do [Data RSVP]
                    pod numerem telefonu: [Numer telefonu]
                    
                    Z miłością i radością,
                    [Imię Panny Młodej] & [Imię Pana Młodego]
                </p>    
            </div>
        </div>
        <a href=\"\">Zobacz Gdzie</a>
    </section>
    <section class=\"place w-100 p-5 d-flex justify-content-center align-items-center flex-column\">
        <h2 class=\"h2 mb-5\">Gdzie i kiedy</h2>
        <div class=\"contentPlace row w-100 text-center\" >
            <div class=\"boxPlace col-4 mt-3\">
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
            </div>
            <div class=\"boxPlace col-4 mt-3\">
                <h3>Wesele</h3>
                <ul class=\"grid list-unstyled p-4\" >
                    {% for dataOfWeddingReception in datasOfWeddingReception %}
                    <li class=\"m-1 p-2\">
                        <h5 class=\"h5\">{{ dataOfWeddingReception.header }}</h5>
                        <p>{{ dataOfWeddingReception.content }}</p>
                    </li>
                    {% else %}
                        <li>Brak danych</li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"boxPlace col-4 mt-3\">
                <h3>Nocleg</h3>
                <ul class=\"grid list-unstyled p-4\">
                    {% for dataOfWeddingReception in datasOfWeddingReception %}
                    <li class=\"m-1 p-2\">
                        <h5 class=\"h5\">{{ dataOfWeddingReception.header }}</h5>
                        <p>{{ dataOfWeddingReception.content }}</p>
                    </li>
                    {% else %}
                        <li>Brak danych</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </section>
</div>
{% endblock %}", "example_page/examplePageTwo.html.twig", "C:\\Users\\admin\\Desktop\\weddingApp\\templates\\example_page\\examplePageTwo.html.twig");
    }
}
