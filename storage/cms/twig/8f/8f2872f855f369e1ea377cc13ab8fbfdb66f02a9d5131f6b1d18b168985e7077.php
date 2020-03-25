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

/* C:\xampp\htdocs\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm */
class __TwigTemplate_3d3d07bb23caefd60371c26109ca392e5728e217496efaaba3427358fec6edcd extends \Twig\Template
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
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">One</a></li>
        <li><a href=\"#two\">Two</a></li>
        <li><a href=\"#three\">Three</a></li>
        <li><a href=\"#four\">Four</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">One</a></li>
        <li><a href=\"#two\">Two</a></li>
        <li><a href=\"#three\">Three</a></li>
        <li><a href=\"#four\">Four</a></li>
    </ul>
</nav>", "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm", "");
    }
}
