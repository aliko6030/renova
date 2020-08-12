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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_offers.htm */
class __TwigTemplate_e79ccec873e586c2dfc435704e80ebbc84386af4cd6c37ad15d70bc572e5062d extends \Twig\Template
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
        echo "<!--Sidebar Side-->
<div class=\"sidebar-side info-column col-lg-4 col-md-12 col-sm-12\">
    <aside class=\"sidebar info-inner\">
        <div class=\"sidebar-widget contact-widget\">

            ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("subscribe_us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
        </div>

    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_offers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Sidebar Side-->
<div class=\"sidebar-side info-column col-lg-4 col-md-12 col-sm-12\">
    <aside class=\"sidebar info-inner\">
        <div class=\"sidebar-widget contact-widget\">

            {% partial 'subscribe_us' %}

        </div>

    </aside>
</div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_offers.htm", "");
    }
}
