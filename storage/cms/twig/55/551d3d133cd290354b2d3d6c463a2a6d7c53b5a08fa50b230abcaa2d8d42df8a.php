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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_about.htm */
class __TwigTemplate_b510c014bdeed79ee488687092ac28fb82e2fa2c1c43224c8e5612ca2feb52eb extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About us"]);
        echo "</h4></div>
                <ul class=\"cat-links clearfix\">
                    <li class=\"";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == "about-our_aims")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/our_aims");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Aims"]);
        echo "</a></li>
                    <li class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "about-personnel")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/personnel");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Personnel"]);
        echo "</a></li>
                    <li class=\"";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == "about-structure")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/structure");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Structure"]);
        echo "</a></li>
                    <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == "about-relations")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/relations");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["International Relations"]);
        echo "</a></li>
                </ul>
            </div>
        </div>

        ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("subscribe_us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "
    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  93 => 16,  79 => 11,  69 => 10,  59 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Sidebar Side-->
<div class=\"sidebar-side info-column col-lg-4 col-md-12 col-sm-12\">
    <aside class=\"sidebar info-inner\">
        <div class=\"sidebar-widget cat-widget\">
            <div class=\"widget-content\">
                <div class=\"title\"><h4>{{ 'About us'|_ }}</h4></div>
                <ul class=\"cat-links clearfix\">
                    <li class=\"{% if this.page.id == 'about-our_aims' %} current {% endif %}\"><a href=\"{{ 'about/our_aims'|page }}\">{{ 'Our Aims'|_ }}</a></li>
                    <li class=\"{% if this.page.id == 'about-personnel' %} current {% endif %}\"><a href=\"{{ 'about/personnel'|page }}\">{{ 'Personnel'|_ }}</a></li>
                    <li class=\"{% if this.page.id == 'about-structure' %} current {% endif %}\"><a href=\"{{ 'about/structure'|page }}\">{{ 'Structure'|_ }}</a></li>
                    <li class=\"{% if this.page.id == 'about-relations' %} current {% endif %}\"><a href=\"{{ 'about/relations'|page }}\">{{ 'International Relations'|_ }}</a></li>
                </ul>
            </div>
        </div>

        {% partial 'subscribe_us' %}

    </aside>
</div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/sidebar_about.htm", "");
    }
}
