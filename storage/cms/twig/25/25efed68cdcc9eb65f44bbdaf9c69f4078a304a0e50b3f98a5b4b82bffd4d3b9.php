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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_legislative.htm */
class __TwigTemplate_55ed4f661798a20f69a522fb42f1a71713af7398c00c71a4b97f04d92a3100fb extends \Twig\Template
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
        <div class=\"sidebar-widget cat-widget\">
            <div class=\"widget-content\">
                <div class=\"title\"><h4>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Legislative Base"]);
        echo "</h4></div>
                <ul class=\"cat-links clearfix\">
                    <li class=\"";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == "legislative-laws")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legislative/laws");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Laws"]);
        echo "</a></li>
                    <li class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "legislative-decrees")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legislative/decrees");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Decrees"]);
        echo "</a></li>
                    <li class=\"";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == "legislative-decisions")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legislative/decisions");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Decisions"]);
        echo "</a></li>
                </ul>
            </div>
        </div>

        ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("subscribe_us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "
    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_legislative.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  83 => 15,  69 => 10,  59 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Sidebar Side-->
<div class=\"sidebar-side info-column col-lg-4 col-md-12 col-sm-12\">
    <aside class=\"sidebar info-inner\">
        <div class=\"sidebar-widget cat-widget\">
            <div class=\"widget-content\">
                <div class=\"title\"><h4>{{ 'Legislative Base'|_ }}</h4></div>
                <ul class=\"cat-links clearfix\">
                    <li class=\"{% if this.page.id == 'legislative-laws' %} current {% endif %}\"><a href=\"{{ 'legislative/laws'|page }}\">{{ 'Laws'|_ }}</a></li>
                    <li class=\"{% if this.page.id == 'legislative-decrees' %} current {% endif %}\"><a href=\"{{ 'legislative/decrees'|page }}\">{{ 'Decrees'|_ }}</a></li>
                    <li class=\"{% if this.page.id == 'legislative-decisions' %} current {% endif %}\"><a href=\"{{ 'legislative/decisions'|page }}\">{{ 'Decisions'|_ }}</a></li>
                </ul>
            </div>
        </div>

        {% partial 'subscribe_us' %}

    </aside>
</div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_legislative.htm", "");
    }
}
