<?php

/* CTVideoBundle:Video:gallery.html.twig */
class __TwigTemplate_e88138f325a52ba0e358fde44d380ee313e3434bc43bc3ea2c335557ed9de21b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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

    // line 3
    public function block_app_title($context, array $blocks = array())
    {
        // line 4
        echo "Gallerie de  vidéo - ";
        $this->displayParentBlock("app_title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_app_stylesheet($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("app_stylesheet", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_app_content($context, array $blocks = array())
    {
        // line 12
        echo "<!-- Section: works -->
<section id=\"works\" class=\"home-section text-center bg-gray\">
  <div class=\"heading-works marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2\">

          <div class=\"section-heading\">
            <h2>Gallery</h2>
            <p>Bientôt imbd fera des mérveilles dans cette page !!!</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-sm-12 col-md-12 col-lg-12\" >

          ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["video_list"]) ? $context["video_list"] : $this->getContext($context, "video_list")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 34
            echo "          ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 4) == 0)) {
                // line 35
                echo "          <div class=\"row\">
          ";
            }
            // line 37
            echo "          <div class=\"col-sm-3\">
            <div class=\"thumbnail\">
              ";
            // line 40
            echo "              <img src=\"";
            echo ("http://image.tmdb.org/t/p/w300" . (($this->getAttribute($this->getAttribute($context["video"], "api", array(), "any", false, true), "poster_path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["video"], "api", array(), "any", false, true), "poster_path", array()), "http://www.photodenature.fr/wp-content/uploads/2014/09/photo-Lama-5.jpg")) : ("http://www.photodenature.fr/wp-content/uploads/2014/09/photo-Lama-5.jpg")));
            echo "\" >
              <div class=\"caption\">
                <p>";
            // line 42
            echo (($this->getAttribute($this->getAttribute($context["video"], "api", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["video"], "api", array(), "any", false, true), "title", array()), "Title default")) : ("Title default"));
            echo "</p>
                <p>
              ";
            // line 45
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_video_watch", array("id" => $this->getAttribute($context["video"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning pull-left\" role=\"button\"><span class=\"glyphicon glyphicon-play\" aria-hidden=\"true\"></span> Play</a>
                  <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_video_delete", array("id" => $this->getAttribute($context["video"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\" id=\"btnContactUs\" role=\"button\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> delete</a>
                </p>
              </div>
              <br>
              <br>
            </div>
          </div>
          ";
            // line 53
            if ((($this->getAttribute($context["loop"], "index0", array()) % 4) == 3)) {
                // line 54
                echo "          </div>
          ";
            }
            // line 56
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        </div>

      </div>
    </div>
  </div>
</section>


<!-- /Section: works -->
";
    }

    public function getTemplateName()
    {
        return "CTVideoBundle:Video:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  143 => 56,  139 => 54,  137 => 53,  127 => 46,  122 => 45,  117 => 42,  111 => 40,  107 => 37,  103 => 35,  100 => 34,  83 => 33,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
