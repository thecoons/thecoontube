<?php

/* CTUserBundle:Friendship:FriendList.html.twig */
class __TwigTemplate_4035c136bc63105fce37b9e71308828e4ba16fa02638a378834700512d9ce213 extends Twig_Template
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
        echo "Liste d'amis-";
        $this->displayParentBlock("app_title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_app_content($context, array $blocks = array())
    {
        // line 10
        echo "<h2>Vos Amis</h2>
<section id=\"about\" class=\"home-section text-center bg-gray\">
  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-lg-offset-3\">

          <div class=\"section-heading\">
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 19
            echo "
            <div class=\"media\">
              <div class=\"media-left media-middle\">
                <img class=\"media-object\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["friend"], "image", array()), "getUrlWay", array())), "resize", array(0 => 125, 1 => 125), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["friend"], "image", array()), "getUrlWay", array())), "resize", array(0 => 125, 1 => 125), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
            echo "\" alt=\"Profile standard\"></img>
                <small><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_video_gallery_user", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
            echo "\"<button class=\"btn btn-warning btn-lg btn-block\">gallery</button></a></small>
              </div>
              <div class=\"media-body\">
                <h4 class=\"media-heading\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getUsername", array()), "html", null, true);
            echo "</h4>
                <address class=\"pull-left\">
                  <small class=\"pull-left\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getEmail", array(), "method"), "html", null, true);
            echo "</small>
                  <br>
                  <small class=\"pull-left\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> ";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["friend"], "getFriendsWithMe", array())), "html", null, true);
            echo "</small>
                </address>
                <div class=\"inline-block\">


                ";
            // line 35
            if (twig_in_filter($context["friend"], $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "myFriends", array()))) {
                // line 36
                echo "                <a class=\"btn pull-right\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_user_deleteFriend", array("id" => $this->getAttribute($context["friend"], "Id", array()))), "html", null, true);
                echo "\" role=\"button\"><span class=\"glyphicon glyphicon-remove\"></span>Supprimer</a>
                ";
            } else {
                // line 38
                echo "                <a class=\"btn pull-right\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_user_addFriend", array("id" => $this->getAttribute($context["friend"], "Id", array()))), "html", null, true);
                echo "\" role=\"button\"><span class=\"glyphicon glyphicon-ok\"></span>Ajouter</a>
                ";
            }
            // line 40
            echo "                </div>
              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "CTUserBundle:Friendship:FriendList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  111 => 40,  105 => 38,  99 => 36,  97 => 35,  89 => 30,  84 => 28,  79 => 26,  73 => 23,  69 => 22,  64 => 19,  60 => 18,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
