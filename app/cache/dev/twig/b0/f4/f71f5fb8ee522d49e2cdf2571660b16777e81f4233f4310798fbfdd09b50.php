<?php

/* CTApplicationBundle:Community:createCommunity.html.twig */
class __TwigTemplate_b0f4f71f5fb8ee522d49e2cdf2571660b16777e81f4233f4310798fbfdd09b50 extends Twig_Template
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
    public function block_app_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Section: contact -->
<section id=\"contact\" class=\"home-section text-center\">
  <div class=\"heading-contact marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2\">

          <div class=\"section-heading\">
            <h2>Create Community</h2>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class=\"container\" ng-controller=\"HelloCtrl\">

    <div class=\"row\">
      <div class=\"col-lg-8 col-md-offset-2\">
        <div class=\"boxed-grey\">
          ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "contact-form")));
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
          <div class=\"row\">
            <div class=\"col-md-10\">
              ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
              <div class=\"form-group\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Community name "));
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                <div class=\"input-group\">
                  <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-console\"></span>
                  </span>
                  ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>

                <div class=\"form-group\">

                  ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
                  ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "pull-left")));
        echo "

                </div>
              



            </div>
            <div class=\"col-md-12\">
              ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "create", array()), 'widget', array("attr" => array("class" => "btn btn-skin pull-right")));
        echo "
            </div>
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
</section>
<!-- /Section: contact -->
";
    }

    public function getTemplateName()
    {
        return "CTApplicationBundle:Community:createCommunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  118 => 54,  113 => 52,  101 => 43,  97 => 42,  88 => 36,  80 => 31,  76 => 30,  71 => 28,  65 => 25,  61 => 24,  39 => 4,  36 => 3,  11 => 1,);
    }
}
