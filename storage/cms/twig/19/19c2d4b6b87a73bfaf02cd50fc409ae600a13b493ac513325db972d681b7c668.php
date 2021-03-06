<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\fresh/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm */
class __TwigTemplate_2075a6405797facd953eca3501671dd7b8f19693be6e6a5cc60d3b89af6dd045 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\" /></span>
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <p>";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5);
        echo "</p>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"{{'assets/images/logo.svg'|theme}}\" alt=\"Logo\" /></span>
    <h1>{{ this.page.title }}</h1>
    <p>{{ this.page.description|raw }}</p>
</header>", "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm", "");
    }
}
