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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/pages/offers.htm */
class __TwigTemplate_5718ab5173cc2b34669fad4bdf8fe38ba29efde4dc548a8eaebba31503ef2691 extends \Twig\Template
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
        echo "<div class=\"page-wrapper\">
    <!-- Preloader -->
    <div class=\"preloader\"><div class=\"icon\"></div></div>

    <!--Search Popup-->
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("search_popup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
    <!--Page Banner-->
    <section class=\"event-banner\">
        <div class=\"image-layer\" style=\"background-image:url(";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/banner-image-7.jpg");
        echo ");\"></div>

        <div class=\"banner-inner\">
            <div class=\"auto-container\">
                <div class=\"inner-container clearfix\">
                    <h1>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Offers for Investors"]);
        echo "</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Events Section-->
    <section class=\"event-details-section\">
        <div class=\"auto-container\">
            <div class=\"event-details\">
                <div class=\"row clearfix\">
                    <!--Content Column-->
                    <div class=\"content-column col-lg-8 col-md-12 col-sm-12\">
                        <div class=\"content-inner\">
                            <div class=\"main-image\">
                                <figure class=\"image\"><img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/featured-image-27.jpg");
        echo "\" alt=\"\"></figure>
                            </div>

                            <div class=\"text-block\">
                                <h2>Overview</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_offers"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "
                </div>
            </div>
        </div>
    </section>

</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"icon flaticon-up-arrow-angle\"></span></div>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/pages/offers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 41,  92 => 40,  79 => 30,  61 => 15,  53 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-wrapper\">
    <!-- Preloader -->
    <div class=\"preloader\"><div class=\"icon\"></div></div>

    <!--Search Popup-->
    {% partial 'search_popup' %}

    <!--Page Banner-->
    <section class=\"event-banner\">
        <div class=\"image-layer\" style=\"background-image:url({{ 'assets/images/background/banner-image-7.jpg'|theme }});\"></div>

        <div class=\"banner-inner\">
            <div class=\"auto-container\">
                <div class=\"inner-container clearfix\">
                    <h1>{{ 'Offers for Investors'|_ }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Events Section-->
    <section class=\"event-details-section\">
        <div class=\"auto-container\">
            <div class=\"event-details\">
                <div class=\"row clearfix\">
                    <!--Content Column-->
                    <div class=\"content-column col-lg-8 col-md-12 col-sm-12\">
                        <div class=\"content-inner\">
                            <div class=\"main-image\">
                                <figure class=\"image\"><img src=\"{{ 'assets/images/resource/featured-image-27.jpg'|theme }}\" alt=\"\"></figure>
                            </div>

                            <div class=\"text-block\">
                                <h2>Overview</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                    {% partial 'sidebar_offers' %}

                </div>
            </div>
        </div>
    </section>

</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"icon flaticon-up-arrow-angle\"></span></div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/pages/offers.htm", "");
    }
}
