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

/* C:\xampp\htdocs\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm */
class __TwigTemplate_27da190d26e8aac55f17de53a93a56feca3d0fb9180f3519a41546c33f502ce3 extends \Twig\Template
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
        echo "<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Second Section</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Ipsum consequat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Second Section</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Ipsum consequat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>", "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm", "");
    }
}
