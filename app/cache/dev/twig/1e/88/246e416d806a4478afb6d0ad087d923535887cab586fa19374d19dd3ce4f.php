<?php

/* CTVideoBundle:Video:upload.html.twig */
class __TwigTemplate_1e88246e416d806a4478afb6d0ad087d923535887cab586fa19374d19dd3ce4f extends Twig_Template
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
            <h2>Upload Video</h2>
            <p>Le lecteur ne prend pas encore en compte les format .avi et .mkv, Nous vous prions de bien vouloir upload du .webm ou .mp4.</p>
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
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "contact-form")));
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
          <div class=\"row\">
            <div class=\"col-md-10\">
              ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
              <div class=\"form-group\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Choissisez la video "));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'errors');
        echo "
                <div class=\"input-group\">
                  <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-folder-open\"></span>
                  </span>
                  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>

              <div class=\"form-group\">

                <label for=\"idbm_search\">Reference Video : {[{ req.valid_idbm }]}</label>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "videoIdbm", array()), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "videoIdbm", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "videoIdbm", array()), 'widget', array("attr" => array("value" => "{[{ req.valid_idbm}]}")));
        echo "
              <div class=\"input-group\" >
                <span class=\"input-group-btn\">
                  <button class=\"btn\" type=\"button\" ng-click=\"searchIdbm()\">Search</button>
                </span>
                <input type=\"text\" class=\"form-control\" ng-model=\"req.query\" placeholder=\"Filter ...\" id=\"idbm_search\">
              </div>
            </div>

            <div class=\"row\">

              <div class=\"col-md-3 animated\" ng-class=\"myAnimVar\" ng-click=\"myAnimVar='selectIdbm'\" ng-repeat=\"idbm in listIdbm | filter:req.query \">
                <a  title=\"{[{ idbm.title }]}\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/1@2x.jpg\">
                  ";
        // line 60
        echo "                  <img src=\"{[{ idbm.images.poster }]}\"
                   class=\"img-responsive\" alt=\"img\" ng-click=\"valideIdbm(idbm.imdb_id)\">
                  ";
        // line 63
        echo "                <small>{[{ idbm.title | limitTo:45 }]}</small>
                </a>
              </div>

            </div>

            </div>
            <div class=\"col-md-12\">
              ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload", array()), 'widget', array("attr" => array("class" => "btn btn-skin pull-right")));
        echo "
            </div>
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            ";
        // line 75
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
        return "CTVideoBundle:Video:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 75,  142 => 73,  137 => 71,  127 => 63,  123 => 60,  107 => 46,  103 => 45,  99 => 44,  89 => 37,  81 => 32,  77 => 31,  72 => 29,  66 => 26,  62 => 25,  39 => 4,  36 => 3,  11 => 1,);
    }
}
