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

/* C:\xampp\htdocs\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm */
class __TwigTemplate_ca619e55100ab18d0cec1166e8a35e48c0c2b33599e9c9971536cd4ae3e09465 extends \Twig\Template
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
        echo "<section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Fourth Section</h2>
        <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p>
    </header>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Fourth Section</h2>
        <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p>
    </header>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"{{'elements'|page}}\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"{{'blog'|page}}\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer>
</section>", "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm", "");
    }
}
