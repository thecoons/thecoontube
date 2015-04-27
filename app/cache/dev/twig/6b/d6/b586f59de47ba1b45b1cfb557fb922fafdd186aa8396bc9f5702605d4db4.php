<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_6bd6b586f59de47ba1b45b1cfb557fb922fafdd186aa8396bc9f5702605d4db4 extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-md-offset-2\">
      <div class=\"boxed-grey\">
    <div class=\"thumbnail\">

      <div class=\"caption\">
        <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
      ";
        // line 12
        echo "      <img class=\"img-thumbnail\" src=\"";
        echo (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage((((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "getUploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "url", array()))), "resize", array(0 => 200, 1 => 200), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage((((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "getUploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "url", array()))), "resize", array(0 => 200, 1 => 200), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg"));
        echo "\" alt=\"...\">
      ";
        // line 14
        echo "        <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>

        <br>
        <br>

      </div>
    </div>
</div>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 14,  33 => 12,  29 => 10,  19 => 2,);
    }
}
