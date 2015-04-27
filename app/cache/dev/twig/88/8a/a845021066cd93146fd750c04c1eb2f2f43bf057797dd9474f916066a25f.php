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
        echo "<div class=\"row\">
  <div class=\"col-lg-10 \">
    <div class=\"boxed-grey \">
      ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "contact-form")));
        echo "
      ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
          <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Post name "));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
                <span class=\"glyphicon glyphicon-console\"></span>
              </span>
              ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>

            <div class=\"form-group\">

              ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'errors');
        echo "
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                  <span class=\"glyphicon glyphicon-facetime-video\"></span>
                </span>
              ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'widget', array("attr" => array("class" => "pull-left")));
        echo "
              </div>

            </div>
            <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
                <span class=\"glyphicon glyphicon-console\"></span>
              </span>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Content "));
        echo "
            </div>
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>



        </div>
        <div class=\"col-md-12\">
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post", array()), 'widget', array("attr" => array("class" => "btn btn-skin pull-right")));
        echo "
        </div>
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 50
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
        return array (  109 => 50,  104 => 48,  99 => 46,  89 => 39,  84 => 37,  76 => 32,  68 => 27,  60 => 22,  51 => 16,  43 => 11,  39 => 10,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
