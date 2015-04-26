<?php

/* CTApplicationBundle:Community:indexCommunity.html.twig */
class __TwigTemplate_767eb6c484b066b482aa2d36e9db6032c027a9f3247b8b0e750fa3ca97021d79 extends Twig_Template
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
        echo "Index Community
";
    }

    // line 7
    public function block_app_content($context, array $blocks = array())
    {
        // line 8
        echo "<section id=\"about\" class=\"home-section text-center bg-gray\">
  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <h2>My Community</h2>
      <br>
      <div class=\"row\">
        <div class=\"col-lg-5\">


        <form class=\"\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ct_application_search_community");
        echo "\" method=\"get\">

          <div class=\"input-group pull-left\">
            <span class=\"input-group-addon\" id=\"basic-addon1\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ct_application_search_community");
        echo "\" class=\"\" role=\"button\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Search Community</a>
          </span>
          <input type=\"search\" class=\"form-control\" placeholder=\"Community Title\" aria-describedby=\"basic-addon1\" name=\"search\">
        </div>

        </form>

      </div>
      <div class=\"col-lg-7\">
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ct_application_create_community");
        echo "\" class=\"btn btn-warning pull-right\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\" aria-hidden=\"true\"></span> Add Community</a>

      </div>


    </div>

    <br>
    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mycommunities"]) ? $context["mycommunities"] : $this->getContext($context, "mycommunities")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["community"]) {
            // line 38
            echo "    ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 0)) {
                // line 39
                echo "    <div class=\"row\">
    ";
            }
            // line 41
            echo "      <div class=\"col-lg-4\">
        <div class=\"team boxed-40ey\">
          <div class=\"row\">
            <div class=\"col-lg-8\">
              <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_show_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
            echo "\"><img class=\"media-object\" src=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 240, 1 => 270), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 240, 1 => 270), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
            echo "\" alt=\"Profile standard\"></img></a>
            </div>
            <div class=\"col-lg-4\">
              <table class=\"table\">
                <tr>
                  <td>
                    <p class=\"pull-left\">People</p>
                  </td>
                  <td>
                    <span class=\"badge\">";
            // line 54
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["community"], "getsubscribers", array())), "html", null, true);
            echo "</span>
                  </td>
                </tr>
                <tr>
                  <td>

                    <p class=\"pull-left\">Posts</p>
                  </td>
                  <td>
                    <span class=\"badge\">";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["community"], "getPosts", array())), "html", null, true);
            echo "</span>
                  </td>
                </tr>

              </table>

              ";
            // line 69
            if ($this->getAttribute($context["community"], "private", array())) {
                // line 70
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_private_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span> Open</a>
              ";
            } else {
                // line 72
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_private_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-sunglasses\" aria-hidden=\"true\"></span> Private</a>
              ";
            }
            // line 74
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_delete_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-remove-circle\" aria-hidden=\"true\"></span> Delete</a>
              <br>
              <small class=\"pull-left\">by ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["community"], "admin", array()), "getUserName", array(), "method"), "html", null, true);
            echo "</small>
            </div>


          </div>
          <br>
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <h3 class=\"pull-left\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "title", array()), "html", null, true);
            echo "</h3>
                          </div>
          </div>
        </div>
      </div>
      ";
            // line 89
            if (((($this->getAttribute($context["loop"], "index0", array()) % 3) == 2) || $this->getAttribute($context["loop"], "last", array()))) {
                // line 90
                echo "      </div>
      ";
            }
            // line 92
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['community'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    <br>
    <h2>Community Follow</h2>
    <br>
    ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["followcommunity"]) ? $context["followcommunity"] : $this->getContext($context, "followcommunity")));
        foreach ($context['_seq'] as $context["_key"] => $context["community"]) {
            // line 97
            echo "
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"team boxed-40ey\">
          <div class=\"row\">
            <div class=\"col-lg-8\">
              <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_show_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
            echo "\"><img class=\"media-object\" src=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 240, 1 => 270), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 240, 1 => 270), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
            echo "\" alt=\"Profile standard\"></img></a>
            </div>
            <div class=\"col-lg-4\">
              <table class=\"table\">
                <tr>
                  <td>
                    <p class=\"pull-left\">People</p>
                  </td>
                  <td>
                    <span class=\"badge\">";
            // line 112
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["community"], "getsubscribers", array())), "html", null, true);
            echo "</span>
                  </td>
                </tr>
                <tr>
                  <td>

                    <p class=\"pull-left\">Posts</p>
                  </td>
                  <td>
                    <span class=\"badge\">";
            // line 121
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["community"], "getPosts", array())), "html", null, true);
            echo "</span>
                  </td>
                </tr>

              </table>

              ";
            // line 127
            if (twig_in_filter($context["community"], $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "user", array()), "getFollowCommunities", array()))) {
                // line 128
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_leave_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Leave</a>
              ";
            } else {
                // line 130
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_follow_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-circle-arrow-down\" aria-hidden=\"true\"></span> Follow</a>
              ";
            }
            // line 132
            echo "              <br>
              <small class=\"pull-left\">by ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["community"], "admin", array()), "getUserName", array(), "method"), "html", null, true);
            echo "</small>
            </div>


          </div>
          <br>
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <h3 class=\"pull-left\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "title", array()), "html", null, true);
            echo "</h3>

            </div>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['community'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "

    </div>

  </section>
  ";
    }

    public function getTemplateName()
    {
        return "CTApplicationBundle:Community:indexCommunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 148,  292 => 141,  281 => 133,  278 => 132,  272 => 130,  266 => 128,  264 => 127,  255 => 121,  243 => 112,  229 => 103,  221 => 97,  217 => 96,  212 => 93,  198 => 92,  194 => 90,  192 => 89,  184 => 84,  173 => 76,  167 => 74,  161 => 72,  155 => 70,  153 => 69,  144 => 63,  132 => 54,  118 => 45,  112 => 41,  108 => 39,  105 => 38,  88 => 37,  77 => 29,  65 => 20,  59 => 17,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
