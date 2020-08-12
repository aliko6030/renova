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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/pages/home.htm */
class __TwigTemplate_5dc3e6919f215818bae13960417340b4bf226e83252f65c85e28273c7f27d541 extends \Twig\Template
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

    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("search_popup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
    <!-- Banner Section -->
    <section class=\"banner-section banner-one\">

        <div class=\"banner-carousel owl-theme owl-carousel\">
            <!-- Slide Item -->
            <div class=\"slide-item\">
                <div class=\"image-layer\" style=\"background-image: url(";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-slider/1.jpg");
        echo ");\"></div>
                <div class=\"auto-container\">
                    <div class=\"content-box\">
                        <div class=\"content clearfix\">
                            <div class=\"inner\">
                                <h1>London is <br>Best Town on <br>Earth</h1>
                                <div class=\"text\">We're starting off with a handful of spots that should also be on your bucket list.</div>
                                <div class=\"links-box clearfix\">
                                    <a href=\"about.html\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Learn More</span></a>
                                    <a href=\"https://www.youtube.com/watch?v=Get7rqXYrbQ\" class=\"theme-btn btn-style-two lightbox-image\"><span class=\"btn-title\"><span class=\"icon flaticon-media-play-symbol\"></span> City Video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"next-slide\">
                    <div class=\"inner\">
                        <div class=\"count\">02</div>
                        <div class=\"text\">Save time , pay your tax online</div>
                        <div class=\"arrow\"><span class=\"flaticon-next\"></span></div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class=\"slide-item\">
                <div class=\"image-layer\" style=\"background-image: url(";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-slider/2.jpg");
        echo ");\"></div>
                <div class=\"auto-container\">
                    <div class=\"content-box\">
                        <div class=\"content clearfix\">
                            <div class=\"inner\">
                                <h1>Save Time, <br>pay your tax <br>online </h1>
                                <div class=\"text\">We're starting off with a handful of spots that should also be on your bucket list.</div>
                                <div class=\"links-box clearfix\">
                                    <a href=\"about.html\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Pay Your Tax</span></a>
                                    <a href=\"https://www.youtube.com/watch?v=Get7rqXYrbQ\" class=\"theme-btn btn-style-two lightbox-image\"><span class=\"btn-title\"><span class=\"icon flaticon-media-play-symbol\"></span> Video Guide</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"next-slide\">
                    <div class=\"inner\">
                        <div class=\"count\">03</div>
                        <div class=\"text\">The worls’d larget urban museum</div>
                        <div class=\"arrow\"><span class=\"flaticon-next\"></span></div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class=\"slide-item\">
                <div class=\"image-layer\" style=\"background-image: url(";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-slider/3.jpg");
        echo ");\"></div>
                <div class=\"auto-container\">
                    <div class=\"content-box\">
                        <div class=\"content clearfix\">
                            <div class=\"inner\">
                                <h1>the world's <br>largest urban <br>museum</h1>
                                <div class=\"text\">We're starting off with a handful of spots that should also be on your bucket list.</div>
                                <div class=\"links-box clearfix\">
                                    <a href=\"about.html\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Learn More</span></a>
                                    <a href=\"about.html\" class=\"theme-btn btn-style-two\"><span class=\"btn-title\">Visit Museum</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"next-slide\">
                    <div class=\"inner\">
                        <div class=\"count\">01</div>
                        <div class=\"text\">London is best town on earth</div>
                        <div class=\"arrow\"><span class=\"flaticon-next\"></span></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <!--Welcome Section-->
    <section class=\"welcome-section\">
        <div class=\"auto-container\">
            <div class=\"sec-title centered\">
                <h2>What are The Today Activities of City Govt of London </h2>
                <div class=\"lower-text\">We denounce with righteous indignation and dislike men who are so beguiled & demoralized.</div>
            </div>
            <div class=\"row clearfix\">
                <!--Feature Block-->
                <div class=\"featured-block col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"content-box\">
                            <div class=\"icon-box\"><span class=\"flaticon-parking\"></span></div>
                            <div class=\"content\">
                                <div class=\"subtitle\">In Effect</div>
                                <h4><a href=\"#\">Alternate side parking in effect.</a></h4>
                            </div>
                        </div>
                        <div class=\"hover-box\">
                            <div class=\"image-layer\" style=\"background-image: url(";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/featured-image-1.jpg");
        echo ");\"></div>
                            <div class=\"inner\">
                                <h4><a href=\"#\">Alternate side parking in effect.</a></h4>
                                <div class=\"text\">These cases are perfectly simple and easy work to distinguish.</div>
                            </div>
                        </div>
                        <div class=\"more-link\">
                            <a href=\"#\"><span class=\"flaticon-right-2\"></span></a>
                        </div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class=\"featured-block col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"content-box\">
                            <div class=\"icon-box\"><span class=\"flaticon-recycling-truck\"></span></div>
                            <div class=\"content\">
                                <div class=\"subtitle\">Schedule</div>
                                <h4><a href=\"#\">Garbage & recycling on schedule.</a></h4>
                            </div>
                        </div>
                        <div class=\"hover-box\">
                            <div class=\"image-layer\" style=\"background-image: url(";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/featured-image-1.jpg");
        echo ");\"></div>
                            <div class=\"inner\">
                                <h4><a href=\"#\">Garbage & recycling on schedule.</a></h4>
                                <div class=\"text\">These cases are perfectly simple and easy work to distinguish.</div>
                            </div>
                        </div>
                        <div class=\"more-link\">
                            <a href=\"#\"><span class=\"flaticon-right-2\"></span></a>
                        </div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class=\"featured-block col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"content-box\">
                            <div class=\"icon-box\"><span class=\"flaticon-school\"></span></div>
                            <div class=\"content\">
                                <div class=\"subtitle\">Schools</div>
                                <h4><a href=\"#\">All public schools are open.</a></h4>
                            </div>
                        </div>
                        <div class=\"hover-box\">
                            <div class=\"image-layer\" style=\"background-image: url(";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/featured-image-1.jpg");
        echo ");\"></div>
                            <div class=\"inner\">
                                <h4><a href=\"#\">All public schools are open.</a></h4>
                                <div class=\"text\">These cases are perfectly simple and easy work to distinguish.</div>
                            </div>
                        </div>
                        <div class=\"more-link\">
                            <a href=\"#\"><span class=\"flaticon-right-2\"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--About Section-->
    <section class=\"about-section\">
        <div class=\"image-layer\" style=\"background-image: url(";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/image-1.jpg");
        echo ");\"></div>
        <div class=\"pattern-layer\" style=\"background-image: url(";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/pattern-1.png");
        echo ");\"></div>
        <div class=\"auto-container\">
            <div class=\"content-box\">
                <div class=\"content\">
                    <div class=\"sec-title light\">
                        <h2>The Major Voice of <br>City Government, London</h2>
                    </div>
                    <div class=\"upper-text clearfix\"><span class=\"big-letter\">M</span>ayor of london the obligations business will frequently occur that all pleasures have to be repudiated annoyances accepted wise man therefore always holds.</div>
                    <div class=\"text\">Beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</div>
                    <div class=\"signature\"><img src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/signature.png");
        echo "\" alt=\"\"></div>
                    <div class=\"info\">
                        <div class=\"name\">Brendon Garrey</div>
                        <div class=\"designation\">London city mayor</div>
                    </div>
                </div>

                <!--Quote-->
                <div class=\"quote-box\">
                    <div class=\"round-point\">+</div>
                    <div class=\"inner\">
                        <div class=\"icon-one\"><span class=\"flaticon-left-quote\"></span></div>
                        <div class=\"icon-two\"><span class=\"flaticon-left-quote\"></span></div>
                        <div class=\"text\">My highest priority is keeping Londoners safe from harm.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Services Section-->
    <section class=\"services-section\">
        <div class=\"image-left\">
            <div class=\"image-layer\" style=\"background-image: url(";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/image-2.jpg");
        echo ");\"></div>
        </div>
        <div class=\"auto-container\">

            <div class=\"row clearfix\">
                <!--Featured Service Block-->
                <div class=\"featured-service-block col-xl-4 col-lg-12 col-md-12\">
                    <div class=\"inner-box\">
                        <figure class=\"image-box\"><a href=\"#\"><img src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/featured-image-1.jpg");
        echo "\" alt=\"\"></a></figure>
                        <div class=\"lower-box\">
                            <h3><a href=\"#\">Explore Our Service Departments</a></h3>
                            <div class=\"more-link\"><a href=\"departments.html\">All Departments</a></div>
                        </div>
                    </div>
                </div>

                <div class=\"column col-xl-8 col-lg-12 col-md-12\">
                    <div class=\"col-inner\">
                        <div class=\"row clearfix\">
                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-sheriff-badge\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"policing-crime.html\">Policing & <br>crime department</a></h4>
                                            <div class=\"text\">Blinded by desire, that they cannot foresee belongs which through shrinking.</div>
                                            <div class=\"read-more\"><a href=\"policing-crime.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-traffic-light\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"transport-traffice.html\">Transport & <br>traffic department</a></h4>
                                            <div class=\"text\">Foresee the pain and trouble that are bound to ensue; and equal blame belongs.</div>
                                            <div class=\"read-more\"><a href=\"transport-traffice.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-statue\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"arts-culture.html\">Arts & <br>culture department</a></h4>
                                            <div class=\"text\">Trouble that are bound to ensue and equal to those city work who fail their duty.</div>
                                            <div class=\"read-more\"><a href=\"arts-culture.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-museum\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"land-department.html\">Housing & <br>land department</a></h4>
                                            <div class=\"text\">Our power of choice untrammelled and when nothing prevents what like best. </div>
                                            <div class=\"read-more\"><a href=\"land-department.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!--Events Section-->
    <section class=\"events-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">

                <div class=\"left-column col-xl-8 col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"col-inner\">
                        <div class=\"sec-title with-separator\">
                            <h2>Upcoming Activities & Events</h2>
                            <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                        </div>

                        <div class=\"carousel-box\">
                            <!--Event Block-->
                            <div class=\"event-block\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"date-box\"><div class=\"date\"><span class=\"day\">14</span><span class=\"month\">December</span></div></div>
                                        <div class=\"content\">
                                            <div class=\"cat-info\"><a href=\"#\">Conference</a></div>
                                            <h3><a href=\"event-details.html\">Dacy's parade balloon inflation</a></h3>
                                            <div class=\"location\">At 12th street, Central park west, UK</div>
                                            <div class=\"read-more\"><a href=\"event-details.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Event Block-->
                            <div class=\"event-block\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"date-box\"><div class=\"date\"><span class=\"day\">22</span><span class=\"month\">December</span></div></div>
                                        <div class=\"content\">
                                            <div class=\"cat-info\"><a href=\"#\">Celebration</a></div>
                                            <h3><a href=\"event-details.html\">The mayor's christmas carol service</a></h3>
                                            <div class=\"location\">At 12th street, Central park west, UK</div>
                                            <div class=\"read-more\"><a href=\"event-details.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Event Block-->
                            <div class=\"event-block\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"date-box\"><div class=\"date\"><span class=\"day\">05</span><span class=\"month\">January</span></div></div>
                                        <div class=\"content\">
                                            <div class=\"cat-info\"><a href=\"#\">Tourist Guide</a></div>
                                            <h3><a href=\"event-details.html\">City job fair’19 for mayor’s office</a></h3>
                                            <div class=\"location\">At 12th street, Central park west, UK</div>
                                            <div class=\"read-more\"><a href=\"event-details.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class=\"right-column col-xl-4 col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"col-inner\">
                        <div class=\"newsletter-box\">
                            <div class=\"image-box\">
                                <div class=\"image-layer\" style=\"background-image: url(";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/image-3.jpg");
        echo ");\"></div>
                                <div class=\"icon-box\"><img src=\"";
        // line 360
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-email.png");
        echo "\" alt=\"\"></div>
                                <h3>Subscribe Us</h3>
                                <div class=\"text\">Get latest News, Events Details.</div>
                            </div>
                            <div class=\"form-box\">
                                <form method=\"post\" action=\"contact.html\">
                                    <div class=\"form-group clearfix\">
                                        <input type=\"email\" name=\"email\" value=\"\" placeholder=\"mailid@example.com\" required>
                                        <button type=\"submit\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Subscribe Us</span></button>
                                    </div>
                                </form>
                                <div class=\"instruction\">Never share your email with others.</div>
                            </div>
                        </div>

                        <div class=\"see-all\">
                            <a href=\"events-list.html\"><span class=\"arrow flaticon-right-2\"></span> View All Upcoming Events</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Services Section-->
    <section class=\"services-section-two\">
        <div class=\"image-layer\" style=\"background-image: url(";
        // line 388
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/image-4.jpg");
        echo ");\"></div>
        <div class=\"auto-container\">
            <div class=\"sec-title light with-separator centered\">
                <h2>Explore Online Services</h2>
                <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
            </div>

            <div class=\"outer clearfix\">
                <div class=\"column nav-column\">
                    <div class=\"inner\">
                        <ul>
                            <li><a href=\"departments.html\">Miscellaneous</a></li>
                            <li><a href=\"departments.html\">Taxes and bills</a></li>
                            <li><a href=\"departments.html\">Property tax related</a></li>
                            <li><a href=\"departments.html\">Certificates</a></li>
                            <li><a href=\"departments.html\">Building sanctions</a></li>
                        </ul>
                    </div>
                </div>

                <div class=\"column image-column\">
                    <div class=\"inner\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 411
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/featured-image-2.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"over-box\">
                                <div class=\"icon-box\"><span class=\"flaticon-play\"></span></div>
                                <h4>Video Guidelines For Online Services</h4>
                            </div>
                            <a href=\"https://www.youtube.com/watch?v=Get7rqXYrbQ\" class=\"over-link lightbox-image\"></a>
                        </div>
                    </div>
                </div>

                <div class=\"column nav-column\">
                    <div class=\"inner\">
                        <ul>
                            <li><a href=\"departments.html\">Birth certificate</a></li>
                            <li><a href=\"departments.html\">Commencement</a></li>
                            <li><a href=\"departments.html\">Death certificate</a></li>
                            <li><a href=\"departments.html\">Fire NOC</a></li>
                            <li><a href=\"departments.html\">Raise compaints</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Team Section-->
    <section class=\"team-section\">
        <div class=\"auto-container\">
            <div class=\"sec-title with-separator centered\">
                <h2>Meet Council Members</h2>
                <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                <div class=\"lower-text\">Denounce with righteous indignation and dislike men who are so beguiled & demoralized our power of choice.</div>
            </div>

            <div class=\"team-carousel owl-theme owl-carousel\">
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 451
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-1.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Bertram Irvin</a></h4>
                            <div class=\"designation\">Mayor</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 482
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-2.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Elvina Julie</a></h4>
                            <div class=\"designation\">Actuary</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 513
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-3.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Herman Gordon</a></h4>
                            <div class=\"designation\">Director</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 544
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-4.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Marian Lenora</a></h4>
                            <div class=\"designation\">Speaker</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 576
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-1.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Bertram Irvin</a></h4>
                            <div class=\"designation\">Mayor</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 607
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-2.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Elvina Julie</a></h4>
                            <div class=\"designation\">Actuary</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 638
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-3.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Herman Gordon</a></h4>
                            <div class=\"designation\">Director</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 669
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-4.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Marian Lenora</a></h4>
                            <div class=\"designation\">Speaker</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 701
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-1.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Bertram Irvin</a></h4>
                            <div class=\"designation\">Mayor</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 732
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-2.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Elvina Julie</a></h4>
                            <div class=\"designation\">Actuary</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 763
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-3.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Herman Gordon</a></h4>
                            <div class=\"designation\">Director</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"";
        // line 794
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/team-image-4.jpg");
        echo "\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Marian Lenora</a></h4>
                            <div class=\"designation\">Speaker</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- News Section -->
    ";
        // line 827
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("news_block"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 828
        echo "
    <!--Contact Info Section-->
    <section class=\"contact-info-section\">
        <div class=\"image-layer\" style=\"background-image: url(";
        // line 831
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/image-5.jpg");
        echo ");\"></div>
        <div class=\"auto-container\">
            <div class=\"sec-title with-separator centered\">
                <h2>Suggestion and Complaints</h2>
                <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                <div class=\"lower-text\">Denounce with righteous indignation and dislike men who are so beguiled & demoralized our power of choice.</div>
            </div>
            <div class=\"info-outer clearfix\">
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-password\"></span></div>
                        <strong>Call on</strong>
                        <div class=\"info\"><a href=\"tel:+4488812345\">+44 888 12 345</a></div>
                    </div>
                </div>
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-contact\"></span></div>
                        <strong>Mail at</strong>
                        <div class=\"info\"><a href=\"mailto:Mail@mygovt.com\">Mail@mygovt.com</a></div>
                    </div>
                </div>
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-circular-clock\"></span></div>
                        <strong>Off hrs</strong>
                        <div class=\"info\">10am to 6pm</div>
                    </div>
                </div>
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-checklist\"></span></div>
                        <strong>LN 311</strong>
                        <div class=\"info\">Non Emergency</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--Testimonials Section-->
    <section class=\"testimonials-section\">
        <div class=\"image-layer\" style=\"background-image: url(";
        // line 878
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background/image-2.jpg");
        echo ");\"></div>

        <div class=\"auto-container\">
            <div class=\"carousel-box\">
                <div class=\"icon-box\"><span>Q</span></div>
                <div class=\"testimonial-carousel owl-theme owl-carousel\">
                    <!--Slide-->
                    <div class=\"slide-item\">
                        <div class=\"inner\">
                            <div class=\"info clearfix\">
                                <div class=\"author-thumb\"><img src=\"";
        // line 888
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/author-thumb-1.jpg");
        echo "\" alt=\"\"></div>
                                <div class=\"name\">Lucian manroe</div>
                                <div class=\"designation\">Citizen</div>
                            </div>
                            <div class=\"text\">“Loves or pursues desires to obtain pain of itself, because pain because occasionally circumstances occur in which toil and pain can procure him some great pleasure.”</div>
                        </div>
                    </div>

                    <!--Slide-->
                    <div class=\"slide-item\">
                        <div class=\"inner\">
                            <div class=\"info clearfix\">
                                <div class=\"author-thumb\"><img src=\"";
        // line 900
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/author-thumb-6.jpg");
        echo "\" alt=\"\"></div>
                                <div class=\"name\">Bertram Irvin</div>
                                <div class=\"designation\">Citizen</div>
                            </div>
                            <div class=\"text\">“Loves or pursues desires to obtain pain of itself, because pain because occasionally circumstances occur in which toil and pain can procure him some great pleasure.”</div>
                        </div>
                    </div>

                    <!--Slide-->
                    <div class=\"slide-item\">
                        <div class=\"inner\">
                            <div class=\"info clearfix\">
                                <div class=\"author-thumb\"><img src=\"";
        // line 912
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/author-thumb-7.jpg");
        echo "\" alt=\"\"></div>
                                <div class=\"name\">Marian Lenora</div>
                                <div class=\"designation\">Speaker</div>
                            </div>
                            <div class=\"text\">“Loves or pursues desires to obtain pain of itself, because pain because occasionally circumstances occur in which toil and pain can procure him some great pleasure.”</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--Facts Section-->
    <section class=\"facts-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">
                <!--Fact Column-->
                <div class=\"fact-column col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"fact-box\">
                            <span class=\"count-box\">850k</span>
                        </div>
                        <h4 class=\"fact-title\">People lived in <br>our city</h4>
                        <div class=\"text\">Foresee the pain and trouble that are bound ensue equal blame belongs.</div>
                    </div>
                </div>
                <!--Fact Column-->
                <div class=\"fact-column col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"fact-box\">
                            <span class=\"count-box\">1.5k</span>
                        </div>
                        <h4 class=\"fact-title\">Square kilometres <br>region covers  </h4>
                        <div class=\"text\">Our power of choice is untrammelled and when nothing prevents what we like best. </div>
                    </div>
                </div>
                <!--Fact Column-->
                <div class=\"fact-column col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"fact-box\">
                            <span class=\"count-box\">24%</span>
                        </div>
                        <h4 class=\"fact-title\">Private & domestic <br>garden land</h4>
                        <div class=\"text\">Trouble that are bound to ensue and equal to city work who fail in their duty.</div>
                    </div>
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
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1053 => 912,  1038 => 900,  1023 => 888,  1010 => 878,  960 => 831,  955 => 828,  951 => 827,  915 => 794,  881 => 763,  847 => 732,  813 => 701,  778 => 669,  744 => 638,  710 => 607,  676 => 576,  641 => 544,  607 => 513,  573 => 482,  539 => 451,  496 => 411,  470 => 388,  439 => 360,  435 => 359,  290 => 217,  279 => 209,  253 => 186,  241 => 177,  237 => 176,  216 => 158,  190 => 135,  164 => 112,  114 => 65,  85 => 39,  56 => 13,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-wrapper\">
    <!-- Preloader -->
    <div class=\"preloader\"><div class=\"icon\"></div></div>

    {% partial 'search_popup' %}

    <!-- Banner Section -->
    <section class=\"banner-section banner-one\">

        <div class=\"banner-carousel owl-theme owl-carousel\">
            <!-- Slide Item -->
            <div class=\"slide-item\">
                <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/main-slider/1.jpg'|theme }});\"></div>
                <div class=\"auto-container\">
                    <div class=\"content-box\">
                        <div class=\"content clearfix\">
                            <div class=\"inner\">
                                <h1>London is <br>Best Town on <br>Earth</h1>
                                <div class=\"text\">We're starting off with a handful of spots that should also be on your bucket list.</div>
                                <div class=\"links-box clearfix\">
                                    <a href=\"about.html\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Learn More</span></a>
                                    <a href=\"https://www.youtube.com/watch?v=Get7rqXYrbQ\" class=\"theme-btn btn-style-two lightbox-image\"><span class=\"btn-title\"><span class=\"icon flaticon-media-play-symbol\"></span> City Video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"next-slide\">
                    <div class=\"inner\">
                        <div class=\"count\">02</div>
                        <div class=\"text\">Save time , pay your tax online</div>
                        <div class=\"arrow\"><span class=\"flaticon-next\"></span></div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class=\"slide-item\">
                <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/main-slider/2.jpg'|theme }});\"></div>
                <div class=\"auto-container\">
                    <div class=\"content-box\">
                        <div class=\"content clearfix\">
                            <div class=\"inner\">
                                <h1>Save Time, <br>pay your tax <br>online </h1>
                                <div class=\"text\">We're starting off with a handful of spots that should also be on your bucket list.</div>
                                <div class=\"links-box clearfix\">
                                    <a href=\"about.html\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Pay Your Tax</span></a>
                                    <a href=\"https://www.youtube.com/watch?v=Get7rqXYrbQ\" class=\"theme-btn btn-style-two lightbox-image\"><span class=\"btn-title\"><span class=\"icon flaticon-media-play-symbol\"></span> Video Guide</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"next-slide\">
                    <div class=\"inner\">
                        <div class=\"count\">03</div>
                        <div class=\"text\">The worls’d larget urban museum</div>
                        <div class=\"arrow\"><span class=\"flaticon-next\"></span></div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class=\"slide-item\">
                <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/main-slider/3.jpg'|theme }});\"></div>
                <div class=\"auto-container\">
                    <div class=\"content-box\">
                        <div class=\"content clearfix\">
                            <div class=\"inner\">
                                <h1>the world's <br>largest urban <br>museum</h1>
                                <div class=\"text\">We're starting off with a handful of spots that should also be on your bucket list.</div>
                                <div class=\"links-box clearfix\">
                                    <a href=\"about.html\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Learn More</span></a>
                                    <a href=\"about.html\" class=\"theme-btn btn-style-two\"><span class=\"btn-title\">Visit Museum</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"next-slide\">
                    <div class=\"inner\">
                        <div class=\"count\">01</div>
                        <div class=\"text\">London is best town on earth</div>
                        <div class=\"arrow\"><span class=\"flaticon-next\"></span></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <!--Welcome Section-->
    <section class=\"welcome-section\">
        <div class=\"auto-container\">
            <div class=\"sec-title centered\">
                <h2>What are The Today Activities of City Govt of London </h2>
                <div class=\"lower-text\">We denounce with righteous indignation and dislike men who are so beguiled & demoralized.</div>
            </div>
            <div class=\"row clearfix\">
                <!--Feature Block-->
                <div class=\"featured-block col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"content-box\">
                            <div class=\"icon-box\"><span class=\"flaticon-parking\"></span></div>
                            <div class=\"content\">
                                <div class=\"subtitle\">In Effect</div>
                                <h4><a href=\"#\">Alternate side parking in effect.</a></h4>
                            </div>
                        </div>
                        <div class=\"hover-box\">
                            <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/featured-image-1.jpg'|theme }});\"></div>
                            <div class=\"inner\">
                                <h4><a href=\"#\">Alternate side parking in effect.</a></h4>
                                <div class=\"text\">These cases are perfectly simple and easy work to distinguish.</div>
                            </div>
                        </div>
                        <div class=\"more-link\">
                            <a href=\"#\"><span class=\"flaticon-right-2\"></span></a>
                        </div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class=\"featured-block col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"content-box\">
                            <div class=\"icon-box\"><span class=\"flaticon-recycling-truck\"></span></div>
                            <div class=\"content\">
                                <div class=\"subtitle\">Schedule</div>
                                <h4><a href=\"#\">Garbage & recycling on schedule.</a></h4>
                            </div>
                        </div>
                        <div class=\"hover-box\">
                            <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/featured-image-1.jpg'|theme }});\"></div>
                            <div class=\"inner\">
                                <h4><a href=\"#\">Garbage & recycling on schedule.</a></h4>
                                <div class=\"text\">These cases are perfectly simple and easy work to distinguish.</div>
                            </div>
                        </div>
                        <div class=\"more-link\">
                            <a href=\"#\"><span class=\"flaticon-right-2\"></span></a>
                        </div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class=\"featured-block col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"inner-box\">
                        <div class=\"content-box\">
                            <div class=\"icon-box\"><span class=\"flaticon-school\"></span></div>
                            <div class=\"content\">
                                <div class=\"subtitle\">Schools</div>
                                <h4><a href=\"#\">All public schools are open.</a></h4>
                            </div>
                        </div>
                        <div class=\"hover-box\">
                            <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/featured-image-1.jpg'|theme }});\"></div>
                            <div class=\"inner\">
                                <h4><a href=\"#\">All public schools are open.</a></h4>
                                <div class=\"text\">These cases are perfectly simple and easy work to distinguish.</div>
                            </div>
                        </div>
                        <div class=\"more-link\">
                            <a href=\"#\"><span class=\"flaticon-right-2\"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--About Section-->
    <section class=\"about-section\">
        <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/image-1.jpg'|theme }});\"></div>
        <div class=\"pattern-layer\" style=\"background-image: url({{ 'assets/images/background/pattern-1.png'|theme }});\"></div>
        <div class=\"auto-container\">
            <div class=\"content-box\">
                <div class=\"content\">
                    <div class=\"sec-title light\">
                        <h2>The Major Voice of <br>City Government, London</h2>
                    </div>
                    <div class=\"upper-text clearfix\"><span class=\"big-letter\">M</span>ayor of london the obligations business will frequently occur that all pleasures have to be repudiated annoyances accepted wise man therefore always holds.</div>
                    <div class=\"text\">Beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</div>
                    <div class=\"signature\"><img src=\"{{ 'assets/images/resource/signature.png'|theme }}\" alt=\"\"></div>
                    <div class=\"info\">
                        <div class=\"name\">Brendon Garrey</div>
                        <div class=\"designation\">London city mayor</div>
                    </div>
                </div>

                <!--Quote-->
                <div class=\"quote-box\">
                    <div class=\"round-point\">+</div>
                    <div class=\"inner\">
                        <div class=\"icon-one\"><span class=\"flaticon-left-quote\"></span></div>
                        <div class=\"icon-two\"><span class=\"flaticon-left-quote\"></span></div>
                        <div class=\"text\">My highest priority is keeping Londoners safe from harm.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Services Section-->
    <section class=\"services-section\">
        <div class=\"image-left\">
            <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/image-2.jpg'|theme }});\"></div>
        </div>
        <div class=\"auto-container\">

            <div class=\"row clearfix\">
                <!--Featured Service Block-->
                <div class=\"featured-service-block col-xl-4 col-lg-12 col-md-12\">
                    <div class=\"inner-box\">
                        <figure class=\"image-box\"><a href=\"#\"><img src=\"{{ 'assets/images/resource/featured-image-1.jpg'|theme }}\" alt=\"\"></a></figure>
                        <div class=\"lower-box\">
                            <h3><a href=\"#\">Explore Our Service Departments</a></h3>
                            <div class=\"more-link\"><a href=\"departments.html\">All Departments</a></div>
                        </div>
                    </div>
                </div>

                <div class=\"column col-xl-8 col-lg-12 col-md-12\">
                    <div class=\"col-inner\">
                        <div class=\"row clearfix\">
                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-sheriff-badge\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"policing-crime.html\">Policing & <br>crime department</a></h4>
                                            <div class=\"text\">Blinded by desire, that they cannot foresee belongs which through shrinking.</div>
                                            <div class=\"read-more\"><a href=\"policing-crime.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-traffic-light\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"transport-traffice.html\">Transport & <br>traffic department</a></h4>
                                            <div class=\"text\">Foresee the pain and trouble that are bound to ensue; and equal blame belongs.</div>
                                            <div class=\"read-more\"><a href=\"transport-traffice.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-statue\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"arts-culture.html\">Arts & <br>culture department</a></h4>
                                            <div class=\"text\">Trouble that are bound to ensue and equal to those city work who fail their duty.</div>
                                            <div class=\"read-more\"><a href=\"arts-culture.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class=\"featured-block-two col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"icon-box\"><span class=\"icon flaticon-museum\"></span></div>
                                        <div class=\"content\">
                                            <h4><a href=\"land-department.html\">Housing & <br>land department</a></h4>
                                            <div class=\"text\">Our power of choice untrammelled and when nothing prevents what like best. </div>
                                            <div class=\"read-more\"><a href=\"land-department.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!--Events Section-->
    <section class=\"events-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">

                <div class=\"left-column col-xl-8 col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"col-inner\">
                        <div class=\"sec-title with-separator\">
                            <h2>Upcoming Activities & Events</h2>
                            <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                        </div>

                        <div class=\"carousel-box\">
                            <!--Event Block-->
                            <div class=\"event-block\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"date-box\"><div class=\"date\"><span class=\"day\">14</span><span class=\"month\">December</span></div></div>
                                        <div class=\"content\">
                                            <div class=\"cat-info\"><a href=\"#\">Conference</a></div>
                                            <h3><a href=\"event-details.html\">Dacy's parade balloon inflation</a></h3>
                                            <div class=\"location\">At 12th street, Central park west, UK</div>
                                            <div class=\"read-more\"><a href=\"event-details.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Event Block-->
                            <div class=\"event-block\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"date-box\"><div class=\"date\"><span class=\"day\">22</span><span class=\"month\">December</span></div></div>
                                        <div class=\"content\">
                                            <div class=\"cat-info\"><a href=\"#\">Celebration</a></div>
                                            <h3><a href=\"event-details.html\">The mayor's christmas carol service</a></h3>
                                            <div class=\"location\">At 12th street, Central park west, UK</div>
                                            <div class=\"read-more\"><a href=\"event-details.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Event Block-->
                            <div class=\"event-block\">
                                <div class=\"inner-box\">
                                    <div class=\"content-box\">
                                        <div class=\"date-box\"><div class=\"date\"><span class=\"day\">05</span><span class=\"month\">January</span></div></div>
                                        <div class=\"content\">
                                            <div class=\"cat-info\"><a href=\"#\">Tourist Guide</a></div>
                                            <h3><a href=\"event-details.html\">City job fair’19 for mayor’s office</a></h3>
                                            <div class=\"location\">At 12th street, Central park west, UK</div>
                                            <div class=\"read-more\"><a href=\"event-details.html\">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class=\"right-column col-xl-4 col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"col-inner\">
                        <div class=\"newsletter-box\">
                            <div class=\"image-box\">
                                <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/image-3.jpg'|theme }});\"></div>
                                <div class=\"icon-box\"><img src=\"{{ 'assets/images/icons/icon-email.png'|theme }}\" alt=\"\"></div>
                                <h3>Subscribe Us</h3>
                                <div class=\"text\">Get latest News, Events Details.</div>
                            </div>
                            <div class=\"form-box\">
                                <form method=\"post\" action=\"contact.html\">
                                    <div class=\"form-group clearfix\">
                                        <input type=\"email\" name=\"email\" value=\"\" placeholder=\"mailid@example.com\" required>
                                        <button type=\"submit\" class=\"theme-btn btn-style-one\"><span class=\"btn-title\">Subscribe Us</span></button>
                                    </div>
                                </form>
                                <div class=\"instruction\">Never share your email with others.</div>
                            </div>
                        </div>

                        <div class=\"see-all\">
                            <a href=\"events-list.html\"><span class=\"arrow flaticon-right-2\"></span> View All Upcoming Events</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Services Section-->
    <section class=\"services-section-two\">
        <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/image-4.jpg'|theme }});\"></div>
        <div class=\"auto-container\">
            <div class=\"sec-title light with-separator centered\">
                <h2>Explore Online Services</h2>
                <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
            </div>

            <div class=\"outer clearfix\">
                <div class=\"column nav-column\">
                    <div class=\"inner\">
                        <ul>
                            <li><a href=\"departments.html\">Miscellaneous</a></li>
                            <li><a href=\"departments.html\">Taxes and bills</a></li>
                            <li><a href=\"departments.html\">Property tax related</a></li>
                            <li><a href=\"departments.html\">Certificates</a></li>
                            <li><a href=\"departments.html\">Building sanctions</a></li>
                        </ul>
                    </div>
                </div>

                <div class=\"column image-column\">
                    <div class=\"inner\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/featured-image-2.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"over-box\">
                                <div class=\"icon-box\"><span class=\"flaticon-play\"></span></div>
                                <h4>Video Guidelines For Online Services</h4>
                            </div>
                            <a href=\"https://www.youtube.com/watch?v=Get7rqXYrbQ\" class=\"over-link lightbox-image\"></a>
                        </div>
                    </div>
                </div>

                <div class=\"column nav-column\">
                    <div class=\"inner\">
                        <ul>
                            <li><a href=\"departments.html\">Birth certificate</a></li>
                            <li><a href=\"departments.html\">Commencement</a></li>
                            <li><a href=\"departments.html\">Death certificate</a></li>
                            <li><a href=\"departments.html\">Fire NOC</a></li>
                            <li><a href=\"departments.html\">Raise compaints</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Team Section-->
    <section class=\"team-section\">
        <div class=\"auto-container\">
            <div class=\"sec-title with-separator centered\">
                <h2>Meet Council Members</h2>
                <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                <div class=\"lower-text\">Denounce with righteous indignation and dislike men who are so beguiled & demoralized our power of choice.</div>
            </div>

            <div class=\"team-carousel owl-theme owl-carousel\">
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-1.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Bertram Irvin</a></h4>
                            <div class=\"designation\">Mayor</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-2.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Elvina Julie</a></h4>
                            <div class=\"designation\">Actuary</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-3.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Herman Gordon</a></h4>
                            <div class=\"designation\">Director</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-4.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Marian Lenora</a></h4>
                            <div class=\"designation\">Speaker</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-1.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Bertram Irvin</a></h4>
                            <div class=\"designation\">Mayor</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-2.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Elvina Julie</a></h4>
                            <div class=\"designation\">Actuary</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-3.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Herman Gordon</a></h4>
                            <div class=\"designation\">Director</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-4.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Marian Lenora</a></h4>
                            <div class=\"designation\">Speaker</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-1.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Bertram Irvin</a></h4>
                            <div class=\"designation\">Mayor</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-2.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Elvina Julie</a></h4>
                            <div class=\"designation\">Actuary</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-3.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Herman Gordon</a></h4>
                            <div class=\"designation\">Director</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class=\"team-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\"><img src=\"{{ 'assets/images/resource/team-image-4.jpg'|theme }}\" alt=\"\"></figure>
                            <div class=\"hover-box\">
                                <div class=\"hover-inner\">
                                    <div class=\"hover-upper\">
                                        <div class=\"icon-box\"><span class=\"flaticon-chat\"></span></div>
                                        <h6>Get Touch With Me</h6>
                                    </div>
                                    <div class=\"hover-lower\">
                                        <ul class=\"info\">
                                            <li><a href=\"tel:+44-800-123-45\">+44 800 123 45</a></li>
                                            <li><a href=\"mailto:elvina@citygov.com\">elvina@citygov.com</a></li>
                                        </ul>
                                        <ul class=\"social-links clearfix\">
                                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                            <li><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <h4><a href=\"#\">Marian Lenora</a></h4>
                            <div class=\"designation\">Speaker</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- News Section -->
    {% partial 'news_block' %}

    <!--Contact Info Section-->
    <section class=\"contact-info-section\">
        <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/image-5.jpg'|theme }});\"></div>
        <div class=\"auto-container\">
            <div class=\"sec-title with-separator centered\">
                <h2>Suggestion and Complaints</h2>
                <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
                <div class=\"lower-text\">Denounce with righteous indignation and dislike men who are so beguiled & demoralized our power of choice.</div>
            </div>
            <div class=\"info-outer clearfix\">
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-password\"></span></div>
                        <strong>Call on</strong>
                        <div class=\"info\"><a href=\"tel:+4488812345\">+44 888 12 345</a></div>
                    </div>
                </div>
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-contact\"></span></div>
                        <strong>Mail at</strong>
                        <div class=\"info\"><a href=\"mailto:Mail@mygovt.com\">Mail@mygovt.com</a></div>
                    </div>
                </div>
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-circular-clock\"></span></div>
                        <strong>Off hrs</strong>
                        <div class=\"info\">10am to 6pm</div>
                    </div>
                </div>
                <!--Info Box-->
                <div class=\"info-box\">
                    <div class=\"inner\">
                        <div class=\"icon\"><span class=\"flaticon-checklist\"></span></div>
                        <strong>LN 311</strong>
                        <div class=\"info\">Non Emergency</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--Testimonials Section-->
    <section class=\"testimonials-section\">
        <div class=\"image-layer\" style=\"background-image: url({{ 'assets/images/background/image-2.jpg'|theme }});\"></div>

        <div class=\"auto-container\">
            <div class=\"carousel-box\">
                <div class=\"icon-box\"><span>Q</span></div>
                <div class=\"testimonial-carousel owl-theme owl-carousel\">
                    <!--Slide-->
                    <div class=\"slide-item\">
                        <div class=\"inner\">
                            <div class=\"info clearfix\">
                                <div class=\"author-thumb\"><img src=\"{{ 'assets/images/resource/author-thumb-1.jpg'|theme }}\" alt=\"\"></div>
                                <div class=\"name\">Lucian manroe</div>
                                <div class=\"designation\">Citizen</div>
                            </div>
                            <div class=\"text\">“Loves or pursues desires to obtain pain of itself, because pain because occasionally circumstances occur in which toil and pain can procure him some great pleasure.”</div>
                        </div>
                    </div>

                    <!--Slide-->
                    <div class=\"slide-item\">
                        <div class=\"inner\">
                            <div class=\"info clearfix\">
                                <div class=\"author-thumb\"><img src=\"{{ 'assets/images/resource/author-thumb-6.jpg'|theme }}\" alt=\"\"></div>
                                <div class=\"name\">Bertram Irvin</div>
                                <div class=\"designation\">Citizen</div>
                            </div>
                            <div class=\"text\">“Loves or pursues desires to obtain pain of itself, because pain because occasionally circumstances occur in which toil and pain can procure him some great pleasure.”</div>
                        </div>
                    </div>

                    <!--Slide-->
                    <div class=\"slide-item\">
                        <div class=\"inner\">
                            <div class=\"info clearfix\">
                                <div class=\"author-thumb\"><img src=\"{{ 'assets/images/resource/author-thumb-7.jpg'|theme }}\" alt=\"\"></div>
                                <div class=\"name\">Marian Lenora</div>
                                <div class=\"designation\">Speaker</div>
                            </div>
                            <div class=\"text\">“Loves or pursues desires to obtain pain of itself, because pain because occasionally circumstances occur in which toil and pain can procure him some great pleasure.”</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--Facts Section-->
    <section class=\"facts-section\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">
                <!--Fact Column-->
                <div class=\"fact-column col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"fact-box\">
                            <span class=\"count-box\">850k</span>
                        </div>
                        <h4 class=\"fact-title\">People lived in <br>our city</h4>
                        <div class=\"text\">Foresee the pain and trouble that are bound ensue equal blame belongs.</div>
                    </div>
                </div>
                <!--Fact Column-->
                <div class=\"fact-column col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"fact-box\">
                            <span class=\"count-box\">1.5k</span>
                        </div>
                        <h4 class=\"fact-title\">Square kilometres <br>region covers  </h4>
                        <div class=\"text\">Our power of choice is untrammelled and when nothing prevents what we like best. </div>
                    </div>
                </div>
                <!--Fact Column-->
                <div class=\"fact-column col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"inner\">
                        <div class=\"fact-box\">
                            <span class=\"count-box\">24%</span>
                        </div>
                        <h4 class=\"fact-title\">Private & domestic <br>garden land</h4>
                        <div class=\"text\">Trouble that are bound to ensue and equal to city work who fail in their duty.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

<!--End pagewrapper-->
<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"icon flaticon-up-arrow-angle\"></span></div>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/pages/home.htm", "");
    }
}
