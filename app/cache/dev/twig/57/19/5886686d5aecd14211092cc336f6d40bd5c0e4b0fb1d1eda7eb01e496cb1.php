<?php

/* CTVideoBundle:Video:test.html.twig */
class __TwigTemplate_57195886686d5aecd14211092cc336f6d40bd5c0e4b0fb1d1eda7eb01e496cb1 extends Twig_Template
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
            <h2>Lab AngularJS</h2>
            <p>Toujours plus vite, plus fort, plus logique.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class=\"container\" >

    <div class=\"row\" ng-controller=\"HelloCtrl\">
      <div class=\"col-lg-8 col-md-offset-2\">
        <div class=\"boxed-grey\">


            <div class=\"input-group\" >
              <span class=\"input-group-btn\">
                <button class=\"btn\" type=\"button\" ng-click=\"searchIdbm()\">Search : {[{ req.query }]}</button>
              </span>
              <input type=\"text\" class=\"form-control\" ng-model=\"req.query\" placeholder=\"Filter ...\">
            </div>
          <p>
            Valeur Test : {[{ req.query | uppercase }]}
            <br>
            Format Json : {[{ req.query | json }]}
          </p>
          <div class=\"row\">
            <div class=\"col-sm-12 col-md-12 col-lg-12\" >

              <div class=\"row\">

                <div class=\"col-md-3 animateTest\" ng-repeat=\"idbm in listIdbm | filter:req.query \">
                  <a href=\"\" title=\"{[{ idbm.title }]}\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/1@2x.jpg\">
                    ";
        // line 46
        echo "                    <img src=\"{[{ idbm.images.poster }]}\"
                    ";
        // line 48
        echo "                     class=\"img-responsive\" alt=\"img\">
                  <small>{[{ idbm.title | limitTo:45 }]}...</small>
                  </a>
                </div>

              </div>

            </div>
          <!-- <div>
            <table class=\"table\">

              <tr ng-repeat=\"Idbm in listIdbm | filter:req.query\">
                <td>
                  {[{ Idbm.title }]}
                </td>
                <td>
                  {[{ Idbm.year }]}
                </td>
                <td>
                  {[{ Idbm.imdb_id }]}
                </td>

              </tr>
            </table>
          </div> -->

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
        return "CTVideoBundle:Video:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 48,  82 => 46,  39 => 4,  36 => 3,  11 => 1,);
    }
}
