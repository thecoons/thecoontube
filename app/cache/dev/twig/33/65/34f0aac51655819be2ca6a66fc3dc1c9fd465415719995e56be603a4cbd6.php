<?php

/* CTApplicationBundle:Community:searchCommunity.html.twig */
class __TwigTemplate_336534f0aac51655819be2ca6a66fc3dc1c9fd465415719995e56be603a4cbd6 extends Twig_Template
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
        echo "Search Community
";
    }

    // line 7
    public function block_app_content($context, array $blocks = array())
    {
        // line 8
        echo "<section id=\"about\" class=\"home-section text-center bg-gray\">
  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <h2>Community Search</h2>
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
        echo $this->env->getExtension('routing')->getPath("ct_application_create_community");
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
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["communities"]) ? $context["communities"] : $this->getContext($context, "communities")));
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
            // line 39
            echo "    ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 0)) {
                // line 40
                echo "    <div class=\"row\">
    ";
            }
            // line 42
            echo "      <div class=\"col-lg-4\">
        <div class=\"team boxed-40ey\">
          <div class=\"row\">
            <div class=\"col-lg-8\">
              <img class=\"media-object\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 240, 1 => 270), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["community"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 240, 1 => 270), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
            echo "\" alt=\"Profile standard\"></img>
            </div>
            <div class=\"col-lg-4\">
              <table class=\"table\">
                <tr>
                  <td>
                    <p class=\"pull-left\">People</p>
                  </td>
                  <td>
                    <span class=\"badge\">";
            // line 55
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
            // line 64
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["community"], "getPosts", array())), "html", null, true);
            echo "</span>
                  </td>
                </tr>

              </table>

              ";
            // line 70
            if (twig_in_filter($context["community"], $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "user", array()), "getFollowCommunities", array()))) {
                // line 71
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_leave_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Leave</a>
              ";
            } else {
                // line 73
                echo "              ";
                if ($this->getAttribute($context["community"], "private", array())) {
                    // line 74
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_follow_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-circle-arrow-down\" aria-hidden=\"true\"></span> Follow</a>
              ";
                } else {
                    // line 76
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_follow_community", array("id" => $this->getAttribute($context["community"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-warning  btn-block\" role=\"button\"><span class=\"glyphicon glyphicon-warning-sign\" aria-hidden=\"true\"></span> Private</a>
              ";
                }
                // line 78
                echo "              ";
            }
            // line 79
            echo "              <br>
              <small class=\"pull-left\">by ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["community"], "admin", array()), "getUserName", array(), "method"), "html", null, true);
            echo "</small>
            </div>


          </div>
          <br>
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <h3 class=\"pull-left\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "title", array()), "html", null, true);
            echo "</h3>

            </div>
          </div>
        </div>
      </div>
        ";
            // line 94
            if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 2)) {
                // line 95
                echo "        </div>
        ";
            }
            // line 97
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
        // line 98
        echo "

    </div>

  </section>
  ";
    }

    public function getTemplateName()
    {
        return "CTApplicationBundle:Community:searchCommunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 98,  207 => 97,  203 => 95,  201 => 94,  192 => 88,  181 => 80,  178 => 79,  175 => 78,  169 => 76,  163 => 74,  160 => 73,  154 => 71,  152 => 70,  143 => 64,  131 => 55,  119 => 46,  113 => 42,  109 => 40,  106 => 39,  89 => 38,  77 => 29,  65 => 20,  59 => 17,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
