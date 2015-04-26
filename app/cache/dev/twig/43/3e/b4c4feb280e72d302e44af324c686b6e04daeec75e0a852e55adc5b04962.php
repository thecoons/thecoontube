<?php

/* CTVideoBundle:Video:idbm_search.html.twig */
class __TwigTemplate_433eb4c4feb280e72d302e44af324c686b6e04daeec75e0a852e55adc5b04962 extends Twig_Template
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


</script>
";
    }

    // line 14
    public function block_app_content($context, array $blocks = array())
    {
        // line 15
        echo "<!-- Section: works -->
<section id=\"works\" class=\"home-section text-center bg-gray\">
  <div class=\"heading-works marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2\">

          <div class=\"section-heading\">
            <h2>Choix de reference</h2>
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
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIdbm"]) ? $context["listIdbm"] : $this->getContext($context, "listIdbm")));
        foreach ($context['_seq'] as $context["_key"] => $context["idbm"]) {
            // line 40
            echo "          <div class=\"col-md-3\" >
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["idbm"], "imdb_id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idbm"], "title", array()), "html", null, true);
            echo "\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/1@2x.jpg\">
              ";
            // line 43
            echo "              <img src=\"";
            echo (($this->getAttribute($this->getAttribute($context["idbm"], "images", array(), "any", false, true), "poster", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["idbm"], "images", array(), "any", false, true), "poster", array()), ((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "/img/sadTrexPoster.png"))) : (((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "/img/sadTrexPoster.png")));
            echo "\"
              ";
            // line 45
            echo "               class=\"img-responsive\" alt=\"img\">
            <small>";
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["idbm"], "title", array()), 0, 45), "html", null, true);
            echo "...</small>
            </a>
          </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idbm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "CTVideoBundle:Video:idbm_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  110 => 46,  107 => 45,  102 => 43,  96 => 41,  93 => 40,  89 => 39,  63 => 15,  60 => 14,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
