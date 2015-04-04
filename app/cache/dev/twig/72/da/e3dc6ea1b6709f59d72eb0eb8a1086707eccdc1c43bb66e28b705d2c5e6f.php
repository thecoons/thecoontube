<?php

/* CTVideoBundle:Video:gallery.html.twig */
class __TwigTemplate_72dae3dc6ea1b6709f59d72eb0eb8a1086707eccdc1c43bb66e28b705d2c5e6f extends Twig_Template
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
            <h2>Your Gallery</h2>
            <p>Bientôt imbd fera des mérveilles dans cette page !!!</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-sm-12 col-md-12 col-lg-12\" >

        <div class=\"row\">

          ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["video_list"]) ? $context["video_list"] : $this->getContext($context, "video_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 36
            echo "          <div class=\"col-md-3\" >
            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_video_watch", array("id" => $this->getAttribute($context["video"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "videoName", array()), "html", null, true);
            echo "\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/1@2x.jpg\">
              ";
            // line 39
            echo "              <img src=\"";
            echo $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($context["video"], "Poster", array())), "cropresize", array(0 => 250), "method");
            echo "\"
              ";
            // line 41
            echo "              class=\"img-responsive\" alt=\"img\">
              <small>";
            // line 42
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["video"], "videoName", array()), 0, 45), "html", null, true);
            echo "...</small>
            </a>
          </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        return array (  117 => 47,  106 => 42,  103 => 41,  98 => 39,  92 => 37,  89 => 36,  85 => 35,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
