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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/header.htm */
class __TwigTemplate_0e564d2077caefb06b1b1bc0d2f4acceb114e7e73c699ceb99d6b49910ba908f extends \Twig\Template
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
        echo "<!-- Main Header -->
<header class=\"main-header header-style-one\">
    <!-- Header Top -->
    <div class=\"header-top header-top-one\">
        <div class=\"auto-container\">
            <div class=\"inner clearfix\">
                <div class=\"top-right clearfix\">
                    <div class=\"phone\"><a href=\"tel:18001234567\"><span class=\"icon fa fa-phone-alt\"></span>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["call on"]);
        echo ": 1800 123 45 67</a></div>
                    <div class=\"email \"><a href=\"mailto:support@mygov.com\"><span class=\"icon fa fa-envelope\"></span>support@mygov.com</a></div>
                    <div class=\"hours\">
                        <div class=\"hours-btn\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Open Today"]);
        echo ": 09 - 18 <span class=\"arrow flaticon-down-arrow\"></span></div>
                        <div class=\"hours-dropdown\">
                            <ul>
                                <li><a href=\"#\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monday"]);
        echo ": 09:00 - 18:00</a></li>
                                <li><a href=\"#\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tuesday"]);
        echo ": 09:00 - 18:00</a></li>
                                <li><a href=\"#\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Wednesday"]);
        echo ": 09:00 - 18:00</a></li>
                                <li><a href=\"#\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Thursday"]);
        echo ": 09:00 - 18:00</a></li>
                                <li><a href=\"#\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Friday"]);
        echo ": 09:00 - 18:00</a></li>
                                <li><a href=\"#\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Saturday"]);
        echo ": 10:00 - 15:00</a></li>
                                <li><a href=\"#\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sunday"]);
        echo ": ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Off"]);
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class=\"header-upper\">
        <div class=\"auto-container\">
            <div class=\"inner-container clearfix\">
                <!--Logo-->
                <div class=\"logo-box clearfix\">
                    <div class=\"logo\"><a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" title=\"City Government - City Regulatory HTML Template\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"City Government - City Regulatory HTML Template\" title=\"City Government - City Regulatory HTML Template\"></a></div>
                    <div class=\"search-btn search-btn-one\"><button type=\"button\" class=\"theme-btn search-toggler\"><span class=\"txt\">Explore</span> <span class=\"icon flaticon-loupe-1\"></span></button></div>
                </div>

                <!--Nav-->
                <div class=\"nav-outer clearfix\">
                    <!--Mobile Navigation Toggler-->
                    <div class=\"mobile-nav-toggler\"><span class=\"icon flaticon-menu-1\"></span></div>

                    <!-- Main Menu -->
                    <nav class=\"main-menu navbar-expand-md navbar-light\">
                        <div class=\"collapse navbar-collapse show clearfix\" id=\"navbarSupportedContent\">
                            <ul class=\"navigation clearfix\">
                                <li class=\"";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48) == "home")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "</a>
                                </li>
                                <li  class=\"dropdown ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "is_active", [], "any", false, false, false, 50) == "about")) {
            echo " current ";
        }
        echo "\"><a href=\"#\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About us"]);
        echo "</a>
                                    <ul>
                                        <li><a href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/our_aims");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Aims"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/personnel");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Personnel"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/structure");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Structure"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about/relations");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["International Relations"]);
        echo "</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 58), "is_active", [], "any", false, false, false, 58) == "legislative")) {
            echo " current ";
        }
        echo "\"><a href=\"#\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Legislative Base"]);
        echo "</a>
                                    <ul>
                                        <li><a href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legislative/laws");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Laws"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legislative/decrees");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Decrees"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legislative/decisions");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Decisions"]);
        echo "</a></li>
                                    </ul>
                                </li>
                                <li class=\"";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 65), "is_active", [], "any", false, false, false, 65) == "blog")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blog");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["News"]);
        echo "</a></li>
                                <li class=\"dropdown ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "is_active", [], "any", false, false, false, 66) == "services")) {
            echo " current ";
        }
        echo "\"><a href=\"#\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Services"]);
        echo "</a>
                                    <ul>
                                        <li><a href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services/dmaa");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["DMAA"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services/dmiip");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["DMİİP"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services/expertise");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Geological Expertise"]);
        echo "</a></li>
                                        <li><a href=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services/monitoring");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monitoring"]);
        echo "</a></li>
                                    </ul>
                                </li>
                                <li class=\"";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 74), "is_active", [], "any", false, false, false, 74) == "offers")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Offers"]);
        echo "</a></li>
                                <li class=\"";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 75), "is_active", [], "any", false, false, false, 75) == "contact")) {
            echo " current ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--Other Links-->
                <div class=\"other-links clearfix\">
                    <!--Language-->
                    ";
        // line 83
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 84
        echo "
                    <div class=\"language\">
                        <div class=\"lang-btn\">
                            <span class=\"icon flaticon-worldwide-1\"></span>
                            <span class=\"txt\">English</span>
                            <span class=\"arrow fa fa-angle-down\"></span>
                        </div>
                        <div class=\"lang-dropdown\">
                            <ul>
                                <li><a href=\"#\">Azərbaycan</a></li>
                                <li><a href=\"#\">English</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Social Links-->
                    <div class=\"social-links-one\">
                        <ul class=\"clearfix\">
                            <li><a href=\"#\" class=\"has-tooltip\"><span class=\"fab fa-facebook-f\"></span><div class=\"c-tooltip\"><div class=\"tooltip-inner\">Facebook</div></div></a></li>
                            <li><a href=\"#\" class=\"has-tooltip\"><span class=\"fab fa-twitter\"></span><div class=\"c-tooltip\"><div class=\"tooltip-inner\">Twitter</div></div></a></li>
                            <li><a href=\"#\" class=\"has-tooltip\"><span class=\"fab fa-linkedin-in\"></span><div class=\"c-tooltip\"><div class=\"tooltip-inner\">Linkedin</div></div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class=\"sticky-header\">
        <div class=\"auto-container clearfix\">
            <!--Logo-->
            <div class=\"logo pull-left\">
                <a href=\"index.html\" title=\"\"><img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sticky-logo.png");
        echo "\" alt=\"\" title=\"\"></a>
            </div>
            <!--Right Col-->
            <div class=\"pull-right\">
                <!-- Main Menu -->
                <nav class=\"main-menu clearfix\">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class=\"mobile-menu\">
        <div class=\"menu-backdrop\"></div>
        <div class=\"close-btn\"><span class=\"icon flaticon-targeting-cross\"></span></div>

        <nav class=\"menu-box\">
            <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/nav-logo.png");
        echo "\" alt=\"\" title=\"\"></a></div>
            <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class=\"social-links\">
                <ul class=\"clearfix\">
                    <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-facebook-square\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-pinterest-p\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-youtube\"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 135,  306 => 117,  271 => 84,  267 => 83,  250 => 75,  240 => 74,  232 => 71,  226 => 70,  220 => 69,  214 => 68,  205 => 66,  195 => 65,  187 => 62,  181 => 61,  175 => 60,  166 => 58,  158 => 55,  152 => 54,  146 => 53,  140 => 52,  131 => 50,  120 => 48,  102 => 35,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  52 => 11,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Main Header -->
<header class=\"main-header header-style-one\">
    <!-- Header Top -->
    <div class=\"header-top header-top-one\">
        <div class=\"auto-container\">
            <div class=\"inner clearfix\">
                <div class=\"top-right clearfix\">
                    <div class=\"phone\"><a href=\"tel:18001234567\"><span class=\"icon fa fa-phone-alt\"></span>{{'call on'|_}}: 1800 123 45 67</a></div>
                    <div class=\"email \"><a href=\"mailto:support@mygov.com\"><span class=\"icon fa fa-envelope\"></span>support@mygov.com</a></div>
                    <div class=\"hours\">
                        <div class=\"hours-btn\">{{ 'Open Today'|_ }}: 09 - 18 <span class=\"arrow flaticon-down-arrow\"></span></div>
                        <div class=\"hours-dropdown\">
                            <ul>
                                <li><a href=\"#\">{{ 'Monday'|_ }}: 09:00 - 18:00</a></li>
                                <li><a href=\"#\">{{ 'Tuesday'|_ }}: 09:00 - 18:00</a></li>
                                <li><a href=\"#\">{{ 'Wednesday'|_ }}: 09:00 - 18:00</a></li>
                                <li><a href=\"#\">{{ 'Thursday'|_ }}: 09:00 - 18:00</a></li>
                                <li><a href=\"#\">{{ 'Friday'|_ }}: 09:00 - 18:00</a></li>
                                <li><a href=\"#\">{{ 'Saturday'|_ }}: 10:00 - 15:00</a></li>
                                <li><a href=\"#\">{{ 'Sunday'|_ }}: {{ 'Off'|_ }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class=\"header-upper\">
        <div class=\"auto-container\">
            <div class=\"inner-container clearfix\">
                <!--Logo-->
                <div class=\"logo-box clearfix\">
                    <div class=\"logo\"><a href=\"{{ 'home'|page }}\" title=\"City Government - City Regulatory HTML Template\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"City Government - City Regulatory HTML Template\" title=\"City Government - City Regulatory HTML Template\"></a></div>
                    <div class=\"search-btn search-btn-one\"><button type=\"button\" class=\"theme-btn search-toggler\"><span class=\"txt\">Explore</span> <span class=\"icon flaticon-loupe-1\"></span></button></div>
                </div>

                <!--Nav-->
                <div class=\"nav-outer clearfix\">
                    <!--Mobile Navigation Toggler-->
                    <div class=\"mobile-nav-toggler\"><span class=\"icon flaticon-menu-1\"></span></div>

                    <!-- Main Menu -->
                    <nav class=\"main-menu navbar-expand-md navbar-light\">
                        <div class=\"collapse navbar-collapse show clearfix\" id=\"navbarSupportedContent\">
                            <ul class=\"navigation clearfix\">
                                <li class=\"{% if this.page.id == 'home'%} current {% endif %}\"><a href=\"{{ 'home'|page }}\">{{ 'Home'|_ }}</a>
                                </li>
                                <li  class=\"dropdown {% if this.page.is_active == 'about' %} current {% endif %}\"><a href=\"#\">{{ 'About us'|_ }}</a>
                                    <ul>
                                        <li><a href=\"{{ 'about/our_aims'|page }}\">{{ 'Our Aims'|_ }}</a></li>
                                        <li><a href=\"{{ 'about/personnel'|page }}\">{{ 'Personnel'|_ }}</a></li>
                                        <li><a href=\"{{ 'about/structure'|page }}\">{{ 'Structure'|_ }}</a></li>
                                        <li><a href=\"{{ 'about/relations'|page }}\">{{ 'International Relations'|_ }}</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown {% if this.page.is_active == 'legislative' %} current {% endif %}\"><a href=\"#\">{{ 'Legislative Base'|_ }}</a>
                                    <ul>
                                        <li><a href=\"{{ 'legislative/laws'|page }}\">{{ 'Laws'|_ }}</a></li>
                                        <li><a href=\"{{ 'legislative/decrees'|page }}\">{{ 'Decrees'|_ }}</a></li>
                                        <li><a href=\"{{ 'legislative/decisions'|page }}\">{{ 'Decisions'|_ }}</a></li>
                                    </ul>
                                </li>
                                <li class=\"{% if this.page.is_active == 'blog' %} current {% endif %}\"><a href=\"{{ 'blog/blog'|page }}\">{{ 'News'|_ }}</a></li>
                                <li class=\"dropdown {% if this.page.is_active == 'services' %} current {% endif %}\"><a href=\"#\">{{ 'Our Services'|_ }}</a>
                                    <ul>
                                        <li><a href=\"{{ 'services/dmaa'|page }}\">{{ 'DMAA'|_ }}</a></li>
                                        <li><a href=\"{{ 'services/dmiip'|page }}\">{{ 'DMİİP'|_ }}</a></li>
                                        <li><a href=\"{{ 'services/expertise'|page }}\">{{ 'Geological Expertise'|_ }}</a></li>
                                        <li><a href=\"{{ 'services/monitoring'|page }}\">{{ 'Monitoring'|_ }}</a></li>
                                    </ul>
                                </li>
                                <li class=\"{% if this.page.is_active == 'offers' %} current {% endif %}\"><a href=\"{{ 'offers'|page }}\">{{ 'Offers'|_ }}</a></li>
                                <li class=\"{% if this.page.is_active == 'contact' %} current {% endif %}\"><a href=\"{{ 'contact'|page }}\">{{ 'Contact'|_ }}</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--Other Links-->
                <div class=\"other-links clearfix\">
                    <!--Language-->
                    {% component 'localePicker' %}

                    <div class=\"language\">
                        <div class=\"lang-btn\">
                            <span class=\"icon flaticon-worldwide-1\"></span>
                            <span class=\"txt\">English</span>
                            <span class=\"arrow fa fa-angle-down\"></span>
                        </div>
                        <div class=\"lang-dropdown\">
                            <ul>
                                <li><a href=\"#\">Azərbaycan</a></li>
                                <li><a href=\"#\">English</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Social Links-->
                    <div class=\"social-links-one\">
                        <ul class=\"clearfix\">
                            <li><a href=\"#\" class=\"has-tooltip\"><span class=\"fab fa-facebook-f\"></span><div class=\"c-tooltip\"><div class=\"tooltip-inner\">Facebook</div></div></a></li>
                            <li><a href=\"#\" class=\"has-tooltip\"><span class=\"fab fa-twitter\"></span><div class=\"c-tooltip\"><div class=\"tooltip-inner\">Twitter</div></div></a></li>
                            <li><a href=\"#\" class=\"has-tooltip\"><span class=\"fab fa-linkedin-in\"></span><div class=\"c-tooltip\"><div class=\"tooltip-inner\">Linkedin</div></div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class=\"sticky-header\">
        <div class=\"auto-container clearfix\">
            <!--Logo-->
            <div class=\"logo pull-left\">
                <a href=\"index.html\" title=\"\"><img src=\"{{ 'assets/images/sticky-logo.png'|theme }}\" alt=\"\" title=\"\"></a>
            </div>
            <!--Right Col-->
            <div class=\"pull-right\">
                <!-- Main Menu -->
                <nav class=\"main-menu clearfix\">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class=\"mobile-menu\">
        <div class=\"menu-backdrop\"></div>
        <div class=\"close-btn\"><span class=\"icon flaticon-targeting-cross\"></span></div>

        <nav class=\"menu-box\">
            <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"{{ 'assets/images/nav-logo.png'|theme }}\" alt=\"\" title=\"\"></a></div>
            <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class=\"social-links\">
                <ul class=\"clearfix\">
                    <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-facebook-square\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-pinterest-p\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-youtube\"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/header.htm", "");
    }
}
