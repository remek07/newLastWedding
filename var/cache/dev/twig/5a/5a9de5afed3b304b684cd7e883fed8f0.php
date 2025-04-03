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

/* home/nav.html.twig */
class __TwigTemplate_663bfb67a6bd325fc694f533e5f40089 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nav.html.twig"));

        // line 1
        yield "<nav class=\"menu\">
    <div class=\"menuContent\">
        <div class=\"boxMenuContent\">
            Logo
        </div>
        <div class=\"boxMenuContent\">
            <ul>
                <li><a href=\"\">Strona Główna</a></li>
                <li><a href=\"\">O nas</a></li>
                <li><a href=\"\">Usługi</a></li>
                <li><a href=\"\">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"menu\">
    <div class=\"menuContent\">
        <div class=\"boxMenuContent\">
            Logo
        </div>
        <div class=\"boxMenuContent\">
            <ul>
                <li><a href=\"\">Strona Główna</a></li>
                <li><a href=\"\">O nas</a></li>
                <li><a href=\"\">Usługi</a></li>
                <li><a href=\"\">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>", "home/nav.html.twig", "C:\\Users\\admin\\Desktop\\weddingApp\\templates\\home\\nav.html.twig");
    }
}
