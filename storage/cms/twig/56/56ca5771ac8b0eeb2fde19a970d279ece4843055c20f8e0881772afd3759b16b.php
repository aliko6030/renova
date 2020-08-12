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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/layouts/default.htm */
class __TwigTemplate_30e2aaa10c53584d1d7fe95677e6a323146d5754b382c8a12429440e3d74fcf4 extends \Twig\Template
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
        <title>City Government - City Regulatory HTML Template | Home Page 01</title>
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
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/respond.js");
        echo "\"></script><![endif]-->

        ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 23
        echo "

    </head>

        <body>
        ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "
        <div class=\"page\">
            ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 32
        echo "        </div>

        ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "

        <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
        <script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-ui.js");
        echo "\"></script>
        <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.fancybox.js");
        echo "\"></script>
        <script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.js");
        echo "\"></script>
        <script src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scrollbar.js");
        echo "\"></script>
        <script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/appear.js");
        echo "\"></script>
        <script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/validate.js");
        echo "\"></script>
        <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.js");
        echo "\"></script>
        <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom-script.js");
        echo "\"></script>
        ";
        // line 48
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 49
        echo "        ";
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 50
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 51
        echo "
        <!--Google Map-->
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ\"></script>
        <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/map-script.js");
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  174 => 51,  170 => 50,  158 => 49,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 35,  102 => 34,  98 => 32,  96 => 31,  92 => 29,  88 => 28,  81 => 23,  78 => 22,  73 => 20,  63 => 13,  59 => 12,  54 => 10,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>City Government - City Regulatory HTML Template | Home Page 01</title>
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

        {% styles %}


    </head>

        <body>
        {% partial 'header' %}

        <div class=\"page\">
            {% page %}
        </div>

        {% partial 'footer' %}


        <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/popper.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery-ui.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.fancybox.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/owl.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/scrollbar.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/appear.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/validate.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/wow.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/custom-script.js'|theme }}\"></script>
        {% framework %}
        {% framework extras %}
        {% scripts %}

        <!--Google Map-->
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ\"></script>
        <script src=\"{{ 'assets/js/map-script.js'|theme }}\"></script>
    </body>
</html>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/layouts/default.htm", "");
    }
}
