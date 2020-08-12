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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/pages/contact.htm */
class __TwigTemplate_4cf63c5106bef4a631cb21e1b296bda5107eedf689b9cc9a01ff3d737a8dd74d extends \Twig\Template
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
    <!--Page Title-->
    <section class=\"page-banner\">
        <div class=\"image-layer\" style=\"background-image:url(";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/banner-image-2.jpg");
        echo ");\"></div>

        <div class=\"banner-inner\">
            <div class=\"auto-container\">
                <div class=\"inner-container clearfix\">
                    <h1>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</h1>
                    <div class=\"page-nav\">
                        <ul class=\"bread-crumb clearfix\">
                            <li><a href=\"index.html\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "</a></li>
                            <li class=\"active\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Section-->
    <section class=\"contact-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">
                <div class=\"left-col col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"images clearfix\">
                            <figure class=\"image\"><img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/featured-image-10.jpg");
        echo "\" alt=\"\"></figure>
                            <figure class=\"image\"><img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/featured-image-11.jpg");
        echo "\" alt=\"\"></figure>
                        </div>
                        <div class=\"contact-info-box\">
                            <div class=\"inner\">
                                <ul class=\"info\">
                                    <li class=\"clearfix\">
                                        <h4>Quick contact</h4>
                                        <div class=\"content\">
                                            <span class=\"icon flaticon-telephone-2\"></span>
                                            <span>Call on</span><br>
                                            <a class=\"txt\" href=\"tel:+4488812345\">+44 888 12 345</a>
                                        </div>
                                    </li>
                                    <li class=\"clearfix\">
                                        <h4>Email address</h4>
                                        <div class=\"content\">
                                            <span class=\"icon flaticon-postcard\"></span>
                                            <span>Mail to</span><br>
                                            <a href=\"mailto:info@citygovt.com\" class=\"txt\">info@citygovt.com</a>
                                        </div>
                                    </li>
                                    <li class=\"clearfix\">
                                        <h4>Visit our office</h4>
                                        <div class=\"content\">
                                            <span class=\"icon flaticon-map\"></span>
                                            <span class=\"txt\">46, The queen's walk <br>london 5241, UK</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"right-col col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"sec-title with-separator\">
                            <h2>We’re Here to Help You</h2>
                            <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                            <div class=\"lower-text\">Shoot us a message if you have any question, we’re here to help!.</div>
                        </div>

                        <div class=\"default-form form-box\">
                            <form method=\"post\" action=\"sendemail.php\" id=\"contact-form\">
                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <input type=\"text\" name=\"username\" placeholder=\"Your name *\" required=\"\" value=\"\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <input type=\"email\" name=\"email\" placeholder=\"Email\" required=\"\" value=\"\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <select name=\"subject\" class=\"custom-select-box\">
                                            <option>Traffic & trasport</option>
                                            <option>Arts & culture department</option>
                                            <option>Housing & land department</option>
                                        </select>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <textarea name=\"message\" placeholder=\"Message...\" required=\"\"></textarea>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Map Section-->
    <section class=\"map-section\">
        <!--Map Box-->
        <div class=\"map-box\">
            <div class=\"map-canvas\"
                 data-zoom=\"10\"
                 data-lat=\"-37.817085\"
                 data-lng=\"144.955631\"
                 data-type=\"roadmap\"
                 data-hue=\"#ffc400\"
                 data-title=\"Melbourne\"
                 data-icon-path=\"images/icons/map-marker.png\"
                 data-content=\"Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>\">
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
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  89 => 34,  71 => 19,  67 => 18,  61 => 15,  53 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-wrapper\">
    <!-- Preloader -->
    <div class=\"preloader\"><div class=\"icon\"></div></div>

    <!--Search Popup-->
    {% partial 'search_popup' %}

    <!--Page Title-->
    <section class=\"page-banner\">
        <div class=\"image-layer\" style=\"background-image:url({{ 'assets/images/background/banner-image-2.jpg'|theme }});\"></div>

        <div class=\"banner-inner\">
            <div class=\"auto-container\">
                <div class=\"inner-container clearfix\">
                    <h1>{{ 'Contact'|_ }}</h1>
                    <div class=\"page-nav\">
                        <ul class=\"bread-crumb clearfix\">
                            <li><a href=\"index.html\">{{ 'Home'|_ }}</a></li>
                            <li class=\"active\">{{ 'Contact'|_ }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Section-->
    <section class=\"contact-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">
                <div class=\"left-col col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"images clearfix\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/featured-image-10.jpg'|theme }}\" alt=\"\"></figure>
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/featured-image-11.jpg'|theme }}\" alt=\"\"></figure>
                        </div>
                        <div class=\"contact-info-box\">
                            <div class=\"inner\">
                                <ul class=\"info\">
                                    <li class=\"clearfix\">
                                        <h4>Quick contact</h4>
                                        <div class=\"content\">
                                            <span class=\"icon flaticon-telephone-2\"></span>
                                            <span>Call on</span><br>
                                            <a class=\"txt\" href=\"tel:+4488812345\">+44 888 12 345</a>
                                        </div>
                                    </li>
                                    <li class=\"clearfix\">
                                        <h4>Email address</h4>
                                        <div class=\"content\">
                                            <span class=\"icon flaticon-postcard\"></span>
                                            <span>Mail to</span><br>
                                            <a href=\"mailto:info@citygovt.com\" class=\"txt\">info@citygovt.com</a>
                                        </div>
                                    </li>
                                    <li class=\"clearfix\">
                                        <h4>Visit our office</h4>
                                        <div class=\"content\">
                                            <span class=\"icon flaticon-map\"></span>
                                            <span class=\"txt\">46, The queen's walk <br>london 5241, UK</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"right-col col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"sec-title with-separator\">
                            <h2>We’re Here to Help You</h2>
                            <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                            <div class=\"lower-text\">Shoot us a message if you have any question, we’re here to help!.</div>
                        </div>

                        <div class=\"default-form form-box\">
                            <form method=\"post\" action=\"sendemail.php\" id=\"contact-form\">
                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <input type=\"text\" name=\"username\" placeholder=\"Your name *\" required=\"\" value=\"\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <input type=\"email\" name=\"email\" placeholder=\"Email\" required=\"\" value=\"\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <select name=\"subject\" class=\"custom-select-box\">
                                            <option>Traffic & trasport</option>
                                            <option>Arts & culture department</option>
                                            <option>Housing & land department</option>
                                        </select>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"field-inner\">
                                        <textarea name=\"message\" placeholder=\"Message...\" required=\"\"></textarea>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Map Section-->
    <section class=\"map-section\">
        <!--Map Box-->
        <div class=\"map-box\">
            <div class=\"map-canvas\"
                 data-zoom=\"10\"
                 data-lat=\"-37.817085\"
                 data-lng=\"144.955631\"
                 data-type=\"roadmap\"
                 data-hue=\"#ffc400\"
                 data-title=\"Melbourne\"
                 data-icon-path=\"images/icons/map-marker.png\"
                 data-content=\"Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>\">
            </div>
        </div>
    </section>

</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"icon flaticon-up-arrow-angle\"></span></div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/pages/contact.htm", "");
    }
}
