<?php

/* CTApplicationBundle:Community:invitCommunity.html.twig */
class __TwigTemplate_a42ac7ab6d13490f88fd6205393937a880c7e4302863f424c06e04f2d4cb85bb extends Twig_Template
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
        echo "Invitation
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
      ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "invitFile", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["community"]) {
            // line 15
            echo "
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <h2 class=\"pull-left\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "title", array()), "html", null, true);
            echo "</h2>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <a href=\"\"><img class=\"media-object\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 320, 1 => 270), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 320, 1 => 270), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
            echo "\" alt=\"Profile standard\"></img></a>
        </div>

        <div class=\"col-lg-8\">
          <div class=\"row\">
            <div class=\"col-lg-4\">

              <table class=\"table pull-left\">
                <tr>
                  <td>
                    <p class=\"pull-left\">People</p>
                  </td>
                  <td>
                    <span class=\"badge\">";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["community"], "subscribers", array())), "html", null, true);
            echo "</span>
                  </td>
                </tr>
                <tr>
                  <td>

                    <p class=\"pull-left\">Posts</p>
                  </td>
                  <td>
                    <span class=\"badge\">";
            // line 46
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["community"], "posts", array())), "html", null, true);
            echo "</span>
                  </td>
                </tr>

              </table>
            </div>
            <div class=\"col-lg-3\">
              <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_accept_community", array("idCommunity" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\" role=\"button\">Accept<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></a>
              <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_decline_community", array("idCommunity" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-block\" role=\"button\">Decline<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
            </div>
          </div>
          <div class=\"row\">
            ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["community"], "subscribers", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 59
                echo "            ";
                if (($this->getAttribute($context["loop"], "index", array()) < 5)) {
                    // line 60
                    echo "
            <div class=\"col-lg-2 col-lg-offset-1\" >
              <img class=\"media-object pull-left\" src=\"";
                    // line 62
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["user"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 130, 1 => 150), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["user"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 130, 1 => 150), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
                    echo "\" alt=\"Profile standard\"></img></a>
            </div>
            ";
                }
                // line 65
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['community'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "CTApplicationBundle:Community:invitCommunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  165 => 66,  151 => 65,  145 => 62,  141 => 60,  138 => 59,  121 => 58,  114 => 54,  110 => 53,  100 => 46,  88 => 37,  72 => 24,  64 => 19,  58 => 15,  54 => 14,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
