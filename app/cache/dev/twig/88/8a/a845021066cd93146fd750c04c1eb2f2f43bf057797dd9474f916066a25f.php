<?php

/* CTApplicationBundle:Community:createPost.html.twig */
class __TwigTemplate_888aa845021066cd93146fd750c04c1eb2f2f43bf057797dd9474f916066a25f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"row\">
  <div class=\"col-lg-10 \">
    <div class=\"boxed-grey \">
      ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "contact-form")));
        echo "
      ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
          <div class=\"form-group\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Post name "));
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
                <span class=\"glyphicon glyphicon-console\"></span>
              </span>
              ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>

            <div class=\"form-group\">

              ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'errors');
        echo "
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                  <span class=\"glyphicon glyphicon-facetime-video\"></span>
                </span>
              ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'widget', array("attr" => array("class" => "pull-left")));
        echo "
              </div>

            </div>
            <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
                <span class=\"glyphicon glyphicon-console\"></span>
              </span>
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Content "));
        echo "
            </div>
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>



        </div>
        <div class=\"col-md-12\">
          ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post", array()), 'widget', array("attr" => array("class" => "btn btn-skin pull-right")));
        echo "
        </div>
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </div>

    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "CTApplicationBundle:Community:createPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 51,  105 => 49,  100 => 47,  90 => 40,  85 => 38,  77 => 33,  69 => 28,  61 => 23,  52 => 17,  44 => 12,  40 => 11,  35 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }
}
