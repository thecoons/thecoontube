<?php

/* CTVideoBundle:Video:watch.html.twig */
class __TwigTemplate_145a5595c5c53a8f058d3430ac8d8da05365270fcdd0c93ccfdcabd79e3dd404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'app_title' => array($this, 'block_app_title'),
            'app_stylesheet' => array($this, 'block_app_stylesheet'),
            'app_content' => array($this, 'block_app_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_app_title($context, array $blocks = array())
    {
        // line 6
        echo "Regarder une vidéo - ";
        $this->displayParentBlock("app_title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_app_stylesheet($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("app_stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"//releases.flowplayer.org/5.5.2/skin/minimalist.css\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/css/flowplayer.css\">
<script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
<script src=\"//releases.flowplayer.org/5.5.2/flowplayer.min.js\"></script>

";
    }

    // line 18
    public function block_app_content($context, array $blocks = array())
    {
        // line 19
        echo "<!-- Section: services -->
<section id=\"service\" class=\"home-section text-center\" style=\"background-image:url(http://image.tmdb.org/t/p/w1000";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "backdrop_path", array()), "html", null, true);
        echo ")\">

  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2\">


          <div data-swf=\"//releases.flowplayer.org/5.5.2/flowplayer.swf\"
          class=\"flowplayer no-toggle\"
          data-ratio=\"0.5625\"
          style=\"background-image: url(http://image.tmdb.org/t/p/w1000";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "backdrop_path", array()), "html", null, true);
        echo ")\">
          <video>
              <source type=\"video/webm\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/video/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "videoExt", array()), "html", null, true);
        echo "\">
              <source type=\"video/mp4\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/video/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "videoExt", array()), "html", null, true);
        echo "\">
              </video>

            </div>

          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /Section: services -->

  <!-- Section: about -->
    <section id=\"about\" class=\"home-section text-center bg-gray\">
\t\t<div class=\"heading-about marginbot-50\">
\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
        <div class=\"col-lg-4\">

            <div class=\"team boxed-grey\">
                <div class=\"inner\">
        <h5>
          ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 58
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
            echo "

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </h5>
                    <p class=\"subtitle\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "release_date", array()), "html", null, true);
        echo "</p>
                    <div class=\"avatar text-center\"><img src=\"http://image.tmdb.org/t/p/w300";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "poster_path", array()), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\" /></div>
                </div>
            </div>

        </div>
\t\t\t\t<div class=\"col-lg-8\">

\t\t\t\t\t<div class=\"section-heading\">
\t\t\t\t\t<h2>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "original_title", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t<p>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "overview", array()), "html", null, true);
        echo "</p>
          <h3>Casting</h3>
            <div class=\"container\">

                  ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "api", array()), "cast", array()), "cast", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["cast"]) {
            if (($this->getAttribute($context["cast"], "order", array()) < 8)) {
                // line 77
                echo "                  ";
                if ((($this->getAttribute($context["loop"], "index0", array()) % 4) == 0)) {
                    // line 78
                    echo "                  <br>
                <div class=\"row\">
                  ";
                }
                // line 81
                echo "                    <div class=\"col-lg-2\">

                        <div class=\"team boxed-grey\">
                            <div class=\"inner\">
        \t\t\t\t\t\t                <h5>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["cast"], "name", array()), "html", null, true);
                echo "</h5>
                                <p class=\"subtitle\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["cast"], "character", array()), "html", null, true);
                echo "</p>
                                <div class=\"avatar\"><a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_video_actor", array("id" => $this->getAttribute($context["cast"], "id", array()))), "html", null, true);
                echo "\"><img src=\"http://image.tmdb.org/t/p/w300";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cast"], "profile_path", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-responsive\" /></a></div>
                            </div>
                        </div>

                    </div>
                    ";
                // line 92
                if ((($this->getAttribute($context["loop"], "index0", array()) % 4) == 3)) {
                    // line 93
                    echo "                    </div>
                    ";
                }
                // line 95
                echo "                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cast'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
          </div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
\t<!-- /Section: about -->

  ";
    }

    public function getTemplateName()
    {
        return "CTVideoBundle:Video:watch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 96,  220 => 95,  216 => 93,  214 => 92,  204 => 87,  200 => 86,  196 => 85,  190 => 81,  185 => 78,  182 => 77,  171 => 76,  164 => 72,  160 => 71,  149 => 63,  145 => 62,  142 => 61,  132 => 58,  128 => 57,  98 => 34,  90 => 33,  85 => 31,  71 => 20,  68 => 19,  65 => 18,  56 => 12,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  11 => 3,);
    }
}
