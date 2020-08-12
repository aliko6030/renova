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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/search_popup.htm */
class __TwigTemplate_73a255e957e5049fbabcb709910d1e4f1d9ec67ef4e5f02863249db5a56c9394 extends \Twig\Template
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
        echo "<!--Search Popup-->
<div id=\"search-popup\" class=\"search-popup\">
    <div class=\"close-search theme-btn\"><span class=\"flaticon-targeting-cross\"></span></div>
    <div class=\"popup-inner\">
        <div class=\"overlay-layer\"></div>
        <div class=\"search-form\">
            <form method=\"post\" action=\"index.html\">
                <div class=\"form-group\">
                    <fieldset>
                        <input type=\"search\" class=\"form-control\" name=\"search-input\" value=\"\" placeholder=\"Search Here\" required >
                        <input type=\"submit\" value=\"Search Now!\" class=\"theme-btn\">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class=\"recent-searches\">
                <li><a href=\"#\">Finance</a></li>
                <li><a href=\"#\">Idea</a></li>
                <li><a href=\"#\">Service</a></li>
                <li><a href=\"#\">Growth</a></li>
                <li><a href=\"#\">Plan</a></li>
            </ul>

        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/search_popup.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Search Popup-->
<div id=\"search-popup\" class=\"search-popup\">
    <div class=\"close-search theme-btn\"><span class=\"flaticon-targeting-cross\"></span></div>
    <div class=\"popup-inner\">
        <div class=\"overlay-layer\"></div>
        <div class=\"search-form\">
            <form method=\"post\" action=\"index.html\">
                <div class=\"form-group\">
                    <fieldset>
                        <input type=\"search\" class=\"form-control\" name=\"search-input\" value=\"\" placeholder=\"Search Here\" required >
                        <input type=\"submit\" value=\"Search Now!\" class=\"theme-btn\">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class=\"recent-searches\">
                <li><a href=\"#\">Finance</a></li>
                <li><a href=\"#\">Idea</a></li>
                <li><a href=\"#\">Service</a></li>
                <li><a href=\"#\">Growth</a></li>
                <li><a href=\"#\">Plan</a></li>
            </ul>

        </div>

    </div>
</div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/search_popup.htm", "");
    }
}
