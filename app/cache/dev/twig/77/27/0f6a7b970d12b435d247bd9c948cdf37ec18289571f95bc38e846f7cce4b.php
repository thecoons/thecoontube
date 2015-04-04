<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_77270f6a7b970d12b435d247bd9c948cdf37ec18289571f95bc38e846f7cce4b extends Twig_Template
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
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 6
    public function block_app_content($context, array $blocks = array())
    {
        // line 7
        echo "
        
        <section id=\"contact\" class=\"home-section text-center\">

        <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8 col-md-offset-2\">
                <div class=\"boxed-grey\">
        ";
        // line 17
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "      </div>
    </div>
  </div>
</section>

";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  63 => 17,  54 => 20,  51 => 17,  40 => 7,  37 => 6,  11 => 1,);
    }
}
