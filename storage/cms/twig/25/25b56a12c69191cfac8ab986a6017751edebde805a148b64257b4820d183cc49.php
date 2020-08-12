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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/subscribe_us.htm */
class __TwigTemplate_6bc00655d3cac53aa44e0c011285b43c3a0ce3cb443df1bf04e77eafbb0b4d5d extends \Twig\Template
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
        echo "<div class=\"sidebar-widget contact-widget\">
    <div class=\"widget-content\">

        <div class=\"title\">
            <h4>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Subscribe Us"]);
        echo "</h4>
        </div>
        <div class=\"newsletter-box-two\">
            <div class=\"image-box\">
                <div class=\"image-layer\" style=\"background-image: url(";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/image-13.jpg");
        echo ");\"></div>
                <div class=\"text\">Subscribe us to get latest news and events detail.</div>
                <form method=\"post\" action=\"contact.html\">
                    <div class=\"form-group clearfix\">
                        <input type=\"email\" name=\"email\" value=\"\" placeholder=\"mailid@example.com\" required=\"\">
                        <button type=\"submit\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Subscribe Us"]);
        echo "</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/subscribe_us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-widget contact-widget\">
    <div class=\"widget-content\">

        <div class=\"title\">
            <h4>{{ 'Subscribe Us'|_ }}</h4>
        </div>
        <div class=\"newsletter-box-two\">
            <div class=\"image-box\">
                <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/image-13.jpg'|theme }});\"></div>
                <div class=\"text\">Subscribe us to get latest news and events detail.</div>
                <form method=\"post\" action=\"contact.html\">
                    <div class=\"form-group clearfix\">
                        <input type=\"email\" name=\"email\" value=\"\" placeholder=\"mailid@example.com\" required=\"\">
                        <button type=\"submit\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">{{ 'Subscribe Us'|_ }}</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/subscribe_us.htm", "");
    }
}
