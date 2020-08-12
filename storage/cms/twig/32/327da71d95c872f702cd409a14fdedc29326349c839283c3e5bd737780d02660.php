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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/layouts/contact.htm */
class __TwigTemplate_a90a2a51a6bb05d7b91907dbf1c982c8dd87b17d3e282cdf2283824f811f1fab extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>City Government - City Regulatory HTML Template | Contact Us</title>
        <!-- Stylesheets -->
        <link href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
        <!-- Responsive File -->
        <link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">

        <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" type=\"image/x-icon\">

        <!-- Responsive Settings -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
        <!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script><![endif]-->
        <!--[if lt IE 9]><script src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/respond.js");
        echo "\"></script><![endif]-->
    </head>

    <body>
        ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
        <div class=\"page\">
            ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "        </div>

        ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "
        <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
        <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-ui.js");
        echo "\"></script>
        <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.fancybox.js");
        echo "\"></script>
        <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/validate.js");
        echo "\"></script>
        <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scrollbar.js");
        echo "\"></script>
        <script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/appear.js");
        echo "\"></script>
        <script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.js");
        echo "\"></script>
        <script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom-script.js");
        echo "\"></script>

        <!--Google Map-->
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ\"></script>
        <script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/map-script.js");
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/layouts/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  89 => 27,  87 => 26,  83 => 24,  79 => 23,  72 => 19,  63 => 13,  59 => 12,  54 => 10,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>City Government - City Regulatory HTML Template | Contact Us</title>
        <!-- Stylesheets -->
        <link href=\"{{ 'assets/css/bootstrap.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
        <!-- Responsive File -->
        <link href=\"{{ 'assets/css/responsive.css'|theme }}\" rel=\"stylesheet\">

        <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" type=\"image/x-icon\">

        <!-- Responsive Settings -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
        <!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script><![endif]-->
        <!--[if lt IE 9]><script src=\"{{ 'assets/js/respond.js'|theme }}\"></script><![endif]-->
    </head>

    <body>
        {% partial 'header' %}

        <div class=\"page\">
            {% page %}
        </div>

        {% partial 'footer' %}

        <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/popper.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/bootstrap.min.js'| theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery-ui.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.fancybox.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/validate.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/scrollbar.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/appear.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/wow.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/custom-script.js'|theme }}\"></script>

        <!--Google Map-->
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ\"></script>
        <script src=\"{{ 'assets/js/map-script.js'|theme }}\"></script>
    </body>
</html>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/layouts/contact.htm", "");
    }
}
