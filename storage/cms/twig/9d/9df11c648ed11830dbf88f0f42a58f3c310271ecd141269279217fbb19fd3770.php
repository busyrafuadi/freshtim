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

/* C:\xampp\htdocs\fresh/themes/zwiebl-zwiebl_stellar/pages/404.htm */
class __TwigTemplate_da26806381e5233370d435236092b12d089d3dab006f989864873850b1806ab2 extends \Twig\Template
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
        echo "<header class=\"major\">
    <h2>Sorry, the requested page was not found.</h2>
    <p><a class=\"button\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Back to Home</a></p>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"major\">
    <h2>Sorry, the requested page was not found.</h2>
    <p><a class=\"button\" href=\"{{'home'|page}}\">Back to Home</a></p>
</header>", "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/pages/404.htm", "");
    }
}
