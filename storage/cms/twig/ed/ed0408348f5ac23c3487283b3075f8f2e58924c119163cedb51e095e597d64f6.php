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

/* C:\xampp\htdocs\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm */
class __TwigTemplate_d1daa4bee89f02b94cd061ebf5d54f3cd7b5b447372a06751fee5c7da2fb8564 extends \Twig\Template
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
        echo "<!-- Third Section -->
<section id=\"three\" class=\"main\">
    <header class=\"major\">
        <h2>Third Section</h2>
        <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
            posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
    </header>
    <ul class=\"statistics\">
        <li class=\"style1\">
            <span class=\"icon fa-code-fork\"></span>
            <strong>5,120</strong> Etiam
        </li>
        <li class=\"style2\">
            <span class=\"icon fa-folder-open-o\"></span>
            <strong>8,192</strong> Magna
        </li>
        <li class=\"style3\">
            <span class=\"icon fa-signal\"></span>
            <strong>2,048</strong> Tempus
        </li>
        <li class=\"style4\">
            <span class=\"icon fa-laptop\"></span>
            <strong>4,096</strong> Aliquam
        </li>
        <li class=\"style5\">
            <span class=\"icon fa-diamond\"></span>
            <strong>1,024</strong> Nullam
        </li>
    </ul>
    <p class=\"content\">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Third Section -->
<section id=\"three\" class=\"main\">
    <header class=\"major\">
        <h2>Third Section</h2>
        <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
            posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
    </header>
    <ul class=\"statistics\">
        <li class=\"style1\">
            <span class=\"icon fa-code-fork\"></span>
            <strong>5,120</strong> Etiam
        </li>
        <li class=\"style2\">
            <span class=\"icon fa-folder-open-o\"></span>
            <strong>8,192</strong> Magna
        </li>
        <li class=\"style3\">
            <span class=\"icon fa-signal\"></span>
            <strong>2,048</strong> Tempus
        </li>
        <li class=\"style4\">
            <span class=\"icon fa-laptop\"></span>
            <strong>4,096</strong> Aliquam
        </li>
        <li class=\"style5\">
            <span class=\"icon fa-diamond\"></span>
            <strong>1,024</strong> Nullam
        </li>
    </ul>
    <p class=\"content\">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>", "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm", "");
    }
}
