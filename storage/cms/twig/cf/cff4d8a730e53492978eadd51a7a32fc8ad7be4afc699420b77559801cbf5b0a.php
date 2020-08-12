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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/footer.htm */
class __TwigTemplate_5264f39d766a2128c14b912a3352d7a1929741ae960a77e43ac07c7a5d9eed0d extends \Twig\Template
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
        echo "<!-- Main Footer -->
<footer class=\"main-footer\">

    <!--Widgets Section-->
    <div class=\"widgets-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget links-widget\">
                        <div class=\"widget-title\">
                            <h4>Departments</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"links\">
                                <li><a href=\"#\">Police and crime</a></li>
                                <li><a href=\"#\">Arts and culture</a></li>
                                <li><a href=\"#\">Transport and traffic</a></li>
                                <li><a href=\"#\">Housing and land</a></li>
                                <li><a href=\"#\">Education</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget links-widget\">
                        <div class=\"widget-title\">
                            <h4>Information</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"links\">
                                <li><a href=\"#\">About city govt</a></li>
                                <li><a href=\"#\">Mayor’s profile</a></li>
                                <li><a href=\"#\">Highlights</a></li>
                                <li><a href=\"#\">Online services</a></li>
                                <li><a href=\"#\">About 311</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget num-widget\">
                        <div class=\"widget-title\">
                            <h4>Emergency</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"num-links\">
                                <li><a href=\"#\">Police <span class=\"hvr-info\">Call: 977</span></a></li>
                                <li><a href=\"#\">Ambulance <span class=\"hvr-info\">Call: 911</span></a></li>
                                <li><a href=\"#\">Fire Brigade <span class=\"hvr-info\">Call: 922</span></a></li>
                                <li><a href=\"#\">Gas service <span class=\"hvr-info\">Call: 111</span></a></li>
                                <li><a href=\"#\">Poison centre <span class=\"hvr-info\">Call: 101</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget about-widget\">
                        <div class=\"logo\">
                            <a href=\"#\"><img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footer-logo.png");
        echo "\" alt=\"\"></a>
                        </div>
                        <div class=\"address\">
                            <h5>London city govt</h5>
                            <div class=\"text\">46, The queen's walk <br>london 5241, UK</div>
                        </div>
                        <div class=\"address\">
                            <h5>Opening hrs</h5>
                            <div class=\"text\">10am to 6pm, Sun: Closed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class=\"footer-bottom\">
        <div class=\"auto-container\">
            <div class=\"inner\">
                <div class=\"copyright\">Copyrights &copy; 2020. ";
        // line 83
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All rights reserved"]);
        echo ".</div>
                <ul class=\"social-links clearfix\">
                    <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 83,  101 => 63,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Main Footer -->
<footer class=\"main-footer\">

    <!--Widgets Section-->
    <div class=\"widgets-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget links-widget\">
                        <div class=\"widget-title\">
                            <h4>Departments</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"links\">
                                <li><a href=\"#\">Police and crime</a></li>
                                <li><a href=\"#\">Arts and culture</a></li>
                                <li><a href=\"#\">Transport and traffic</a></li>
                                <li><a href=\"#\">Housing and land</a></li>
                                <li><a href=\"#\">Education</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget links-widget\">
                        <div class=\"widget-title\">
                            <h4>Information</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"links\">
                                <li><a href=\"#\">About city govt</a></li>
                                <li><a href=\"#\">Mayor’s profile</a></li>
                                <li><a href=\"#\">Highlights</a></li>
                                <li><a href=\"#\">Online services</a></li>
                                <li><a href=\"#\">About 311</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget num-widget\">
                        <div class=\"widget-title\">
                            <h4>Emergency</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"num-links\">
                                <li><a href=\"#\">Police <span class=\"hvr-info\">Call: 977</span></a></li>
                                <li><a href=\"#\">Ambulance <span class=\"hvr-info\">Call: 911</span></a></li>
                                <li><a href=\"#\">Fire Brigade <span class=\"hvr-info\">Call: 922</span></a></li>
                                <li><a href=\"#\">Gas service <span class=\"hvr-info\">Call: 111</span></a></li>
                                <li><a href=\"#\">Poison centre <span class=\"hvr-info\">Call: 101</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class=\"column col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"footer-widget about-widget\">
                        <div class=\"logo\">
                            <a href=\"#\"><img src=\"{{ 'assets/images/footer-logo.png'|theme }}\" alt=\"\"></a>
                        </div>
                        <div class=\"address\">
                            <h5>London city govt</h5>
                            <div class=\"text\">46, The queen's walk <br>london 5241, UK</div>
                        </div>
                        <div class=\"address\">
                            <h5>Opening hrs</h5>
                            <div class=\"text\">10am to 6pm, Sun: Closed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class=\"footer-bottom\">
        <div class=\"auto-container\">
            <div class=\"inner\">
                <div class=\"copyright\">Copyrights &copy; 2020. {{ 'All rights reserved'|_ }}.</div>
                <ul class=\"social-links clearfix\">
                    <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                    <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/footer.htm", "");
    }
}
