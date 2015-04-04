<?php

/* CTVideoBundle:Video:watch.html.twig */
class __TwigTemplate_b8306b94dee3a84e7c133296073581a72f9d58c2bdd030864bba5d6e60ebc421 extends Twig_Template
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
<section id=\"service\" class=\"home-section text-center\" style=\"background-image:url(";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "Fanart", array()), "html", null, true);
        echo ")\">

  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2\">

          <p>Video dimensions won't probably match your player</p>

          <div data-swf=\"//releases.flowplayer.org/5.5.2/flowplayer.swf\"
          class=\"flowplayer no-toggle\"
          data-ratio=\"0.5625\"
          style=\"background-image: url(";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "Fanart", array()), "html", null, true);
        echo ")\">
          <video>
              <source type=\"video/webm\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/video/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "videoExt", array()), "html", null, true);
        echo "\">
              <source type=\"video/mp4\" src=\"";
        // line 35
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
        return array (  99 => 35,  91 => 34,  86 => 32,  71 => 20,  68 => 19,  65 => 18,  56 => 12,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  11 => 3,);
    }
}
