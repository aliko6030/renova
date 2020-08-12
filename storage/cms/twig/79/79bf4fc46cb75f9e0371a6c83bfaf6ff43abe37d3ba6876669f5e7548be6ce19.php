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

/* S:\domains\renova.gadimlie.com/themes/citygovt_placeholder/partials/news_block.htm */
class __TwigTemplate_180329d2b4307afd79e3603f3b55d40a483ec6a8f97b1cbab16e3a9acafd506a extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<!--News Section-->
<section class=\"news-section\">


    <div class=\"auto-container\">
        <div class=\"sec-title with-separator\">
            <h2>Latest Press Releases</h2>
            <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
        </div>


        <div class=\"carousel-box\">
            <div class=\"news-carousel owl-theme owl-carousel\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "                <!--News Block-->
                <div class=\"news-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\">
                                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 22), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 23
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 23), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                            </figure>
                            <div class=\"hover-box\">
                                <div class=\"link zoom-link\">
                                    <a href=\"";
            // line 28
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/resource/blog-image-1.jpg");
            echo "\" class=\"lightbox-image\"><span class=\"icon flaticon-zoom-in\"></span></a>
                                </div>
                                <div class=\"link single-link\">
                                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 31), "html", null, true);
            echo "\"><span class=\"icon flaticon-link-4\"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <div class=\"upper-info\">
                                <h4><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></h4>
                                <div class=\"cat-info\"><a href=\"#\"><span class=\"fa fa-folder\"></span>Community Life</a></div>
                            </div>
                            <div class=\"meta-info clearfix\">
                                <div class=\"author-info clearfix\">
                                    <div class=\"author-icon\"><span class=\"flaticon-user-3\"></span></div>
                                    <div class=\"author-title\">By Julie Gordon</div>
                                    <div class=\"date\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 44), "html", null, true);
            echo "</div>
                                </div>
                                <div class=\"comments-info\">
                                    <a href=\"#\"><span class=\"fa fa-comment\"></span> 02</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/news_block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  113 => 44,  101 => 37,  92 => 31,  86 => 28,  81 => 25,  70 => 23,  66 => 22,  59 => 17,  55 => 16,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

<!--News Section-->
<section class=\"news-section\">


    <div class=\"auto-container\">
        <div class=\"sec-title with-separator\">
            <h2>Latest Press Releases</h2>
            <div class=\"separator\"><span class=\"cir c-1\"></span><span class=\"cir c-2\"></span><span class=\"cir c-3\"></span></div>
        </div>


        <div class=\"carousel-box\">
            <div class=\"news-carousel owl-theme owl-carousel\">
                {% for post in posts %}
                <!--News Block-->
                <div class=\"news-block\">
                    <div class=\"inner-box\">
                        <div class=\"image-box\">
                            <figure class=\"image\">
                                {% for image in post.featured_images|slice(0, 1) %}
                                <img src=\"{{ image.path }}\" alt=\"{{ post.title }}\">
                                {% endfor %}
                            </figure>
                            <div class=\"hover-box\">
                                <div class=\"link zoom-link\">
                                    <a href=\"{{ 'assets/images/resource/blog-image-1.jpg'|theme }}\" class=\"lightbox-image\"><span class=\"icon flaticon-zoom-in\"></span></a>
                                </div>
                                <div class=\"link single-link\">
                                    <a href=\"{{ post.url }}\"><span class=\"icon flaticon-link-4\"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-box\">
                            <div class=\"upper-info\">
                                <h4><a href=\"{{ post.url }}\">{{ post.title }}</a></h4>
                                <div class=\"cat-info\"><a href=\"#\"><span class=\"fa fa-folder\"></span>Community Life</a></div>
                            </div>
                            <div class=\"meta-info clearfix\">
                                <div class=\"author-info clearfix\">
                                    <div class=\"author-icon\"><span class=\"flaticon-user-3\"></span></div>
                                    <div class=\"author-title\">By Julie Gordon</div>
                                    <div class=\"date\">{{ post.published_at }}</div>
                                </div>
                                <div class=\"comments-info\">
                                    <a href=\"#\"><span class=\"fa fa-comment\"></span> 02</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>", "S:\\domains\\renova.gadimlie.com/themes/citygovt_placeholder/partials/news_block.htm", "");
    }
}
