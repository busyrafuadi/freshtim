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

/* C:\xampp\htdocs\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm */
class __TwigTemplate_bd1d7cf48c430302861f0ae6fabeb9e47d2f2cdc8853605aa53da5e9865597eb extends \Twig\Template
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
        echo "<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
                adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
                Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
            <ul class=\"actions\">
                <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"image\" /></span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
                adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
                Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
            <ul class=\"actions\">
                <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"image\" /></span>
    </div>
</section>", "C:\\xampp\\htdocs\\fresh/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm", "");
    }
}
