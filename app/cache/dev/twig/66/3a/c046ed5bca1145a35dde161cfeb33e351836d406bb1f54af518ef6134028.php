<?php

/* CTApplicationBundle:Community:showCommunity.html.twig */
class __TwigTemplate_663ac046ed5bca1145a35dde161cfeb33e351836d406bb1f54af518ef6134028 extends Twig_Template
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
        echo "Community Show
";
    }

    // line 9
    public function block_app_content($context, array $blocks = array())
    {
        // line 10
        echo "<!-- Section: services -->
<section id=\"service\" class=\"home-section text-center\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 1535, 1 => 339, 2 => 0, 3 => "center", 4 => "center"), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 1535, 1 => 339, 2 => 0, 3 => "center", 4 => "center"), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
        echo ")\">

  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2\">

          <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "title", array()), "html", null, true);
        echo "</h1>

        </div>
      </div>
    </div>
  </div>

</section>
<!-- /Section: services -->

<section id=\"about\" class=\"home-section text-center bg-gray\">
  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h2>Posts</h2>
          ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["communityPost"]) ? $context["communityPost"] : $this->getContext($context, "communityPost")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 35
            echo "
          <div class=\"row\">
            <div class=\"col-lg-12\">

              <div class=\"media\">
                <div class=\"media-left\">
                  <a href=\"#\">

                    <img class=\"media-object\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, ("http://image.tmdb.org/t/p/w150" . (($this->getAttribute($this->getAttribute($context["post"], "api", array(), "any", false, true), "poster_path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["post"], "api", array(), "any", false, true), "poster_path", array()), "http://www.photodenature.fr/wp-content/uploads/2014/09/photo-Lama-5.jpg")) : ("http://www.photodenature.fr/wp-content/uploads/2014/09/photo-Lama-5.jpg"))), "html", null, true);
            echo "\" alt=\"...\">
                    <p class=\"pull-left\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "api", array()), "vote_average", array()), "html", null, true);
            echo "</p><small class=\"pull-right\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["post"], "api", array()), "title", array()), 0, 20), "html", null, true);
            echo "</small>
                  </a>
                </div>
                <div class=\"media-body\" >
                  <h4 class=\"media-heading pull-left\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h4>
                  <p class=\"pull-left\">
                    ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "
                  </p>
                  <a href=\"\" class=\"btn btn-info pull-left\"  ng-click=\"m";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo " = !m";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" role=\"button\">
                    <div ng-if=\"m";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                      <span class=\"glyphicon glyphicon-collapse-up\" aria-hidden=\"true\"></span> hide Comment
                    </div>
                    <div ng-if=\"!m";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">

                    <span class=\"glyphicon glyphicon-collapse-down\" aria-hidden=\"true\"></span> show Comment
                    </div>
                  </a>
                  <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_create_comment", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning pull-right\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\" aria-hidden=\"true\"></span> Add Comment</a>
                </div>
                ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "getComments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 64
                echo "
                <div class=\"col-lg-10 col-lg-offset-2 animated\" ng-show=\"m";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">
                    <div class=\"media\">
                      <div class=\"media-left\">
                        <a href=\"\">
                          <a href=\"\">
                          <img class=\"media-object\" src=\"";
                // line 70
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "image", array()), "getUrlWay", array())), "resize", array(0 => 125, 1 => 125), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "image", array()), "getUrlWay", array())), "resize", array(0 => 125, 1 => 125), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
                echo "\" alt=\"...\">
                          <p class=\"pull-left\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getUsername", array()), "html", null, true);
                echo "</p>

                        </a>
                      </div>
                      <div class=\"media-body\">
                        <h4 class=\"media-heading pull-left\">";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_delete_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-star btn\" aria-hidden=\"true\"></span></a></h4>

                        <p class=\"pull-right\">";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "note", array()), "html", null, true);
                echo "  <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span></p>


                        <br>
                        <p class=\"pull-left\">
                          ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "
                        </p>
                        <p>
                        <small class=\"pull-right\"> ";
                // line 86
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "d/m/Y", "Europe/Paris"), "html", null, true);
                echo "</small>

                        </p>
                      </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                <br>
                <br>
              </div>
            </div>

          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "          <div class=\"row\">
            <div class=\"col-lg-10 \">
              <div class=\"boxed-grey \">
                ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "contact-form")));
        echo "
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "_token", array()), 'widget');
        echo "
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "community_id", array()), 'label');
        echo "
                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "community_id", array()), 'errors');
        echo "
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "community_id", array()), 'widget', array("attr" => array("value" => $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "id", array()))));
        echo "
                <div class=\"row\">
                  <div class=\"col-md-10\">
                    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), 'errors');
        echo "
                    <div class=\"form-group\">
                      ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Post name "));
        echo "
                      ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "title", array()), 'errors');
        echo "
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                          <span class=\"glyphicon glyphicon-console\"></span>
                        </span>
                        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>

                    <div class=\"form-group\">

                      ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "video", array()), 'errors');
        echo "
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                          <span class=\"glyphicon glyphicon-facetime-video\"></span>
                        </span>
                        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "video", array()), 'widget', array("attr" => array("class" => "pull-left")));
        echo "
                      </div>

                    </div>
                    <div class=\"form-group\">
                      ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "content", array()), 'errors');
        echo "
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                          <span class=\"glyphicon glyphicon-console\"></span>
                        </span>
                        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "content", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Content "));
        echo "
                      </div>
                      ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>



                  </div>
                  <div class=\"col-md-12\">
                    ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), "post", array()), 'widget', array("attr" => array("class" => "btn btn-skin pull-right")));
        echo "
                  </div>
                  ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), 'rest');
        echo "

                  ";
        // line 152
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPost"]) ? $context["formPost"] : $this->getContext($context, "formPost")), 'form_end');
        echo "
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class=\"col-lg-3\">
          <h2>Followers</h2>
          <table class=\"table\">
            ";
        // line 164
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "getSubscribers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 165
            echo "
            <tr>
              <td>
                <img class=\"media-object pull-left\" src=\"";
            // line 168
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["user"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 50, 1 => 50), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["user"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 50, 1 => 50), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
            echo "\" alt=\"...\">
              </td>
              <td>
                <p>
                  ";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
                </p>
              </td>
              ";
            // line 175
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "admin", array()))) {
                // line 176
                echo "              <td>
                ";
                // line 177
                if (!twig_in_filter($context["user"], $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "subscribers", array()))) {
                    // line 178
                    echo "                ";
                    if (!twig_in_filter($context["user"], $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "invitUser", array()))) {
                        // line 179
                        echo "                <a href=\"\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span></a>
                ";
                    } else {
                        // line 181
                        echo "                <a href=\"\" class=\"btn btn-warning\" role=\"button\"><span class=\"glyphicon glyphicon-hourglass\" aria-hidden=\"true\"></span></a>
                ";
                    }
                    // line 183
                    echo "                ";
                } else {
                    // line 184
                    echo "                <a href=\"\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></a>
                ";
                }
                // line 186
                echo "              </td>
              ";
            }
            // line 188
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "myFriends", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 191
            echo "            ";
            if (!twig_in_filter($context["user"], $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "subscribers", array()))) {
                // line 192
                echo "            <tr>
              <td>
                <img class=\"media-object pull-left\" src=\"";
                // line 194
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["user"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 50, 1 => 50), "method", false, true), "jpeg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->env->getExtension('image')->webImage($this->getAttribute($this->getAttribute($context["user"], "image", array()), "getUrlWay", array())), "zoomCrop", array(0 => 50, 1 => 50), "method", false, true), "jpeg", array()), "img/profil.jpg")) : ("img/profil.jpg")), "html", null, true);
                echo "\" alt=\"...\">
              </td>
              <td>
                <p>
                  ";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "
                </p>
              </td>
              ";
                // line 201
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "admin", array()))) {
                    // line 202
                    echo "              <td>
                ";
                    // line 203
                    if (!twig_in_filter($context["user"], $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "subscribers", array()))) {
                        // line 204
                        echo "                ";
                        if (!twig_in_filter($context["user"], $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "invitUser", array()))) {
                            // line 205
                            echo "                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ct_application_send_invit_community", array("idCommunity" => $this->getAttribute((isset($context["community"]) ? $context["community"] : $this->getContext($context, "community")), "id", array()), "idUser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                            echo "\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span></a>
                ";
                        } else {
                            // line 207
                            echo "                <a href=\"\" class=\"btn btn-warning\" role=\"button\"><span class=\"glyphicon glyphicon-hourglass\" aria-hidden=\"true\"></span></a>
                ";
                        }
                        // line 209
                        echo "                ";
                    } else {
                        // line 210
                        echo "                <a href=\"\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></a>
                ";
                    }
                    // line 212
                    echo "              </td>
              ";
                }
                // line 214
                echo "            </tr>
            ";
            }
            // line 216
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "          </table>
        </div>
      </div>
    </div>
  </div>




  ";
    }

    public function getTemplateName()
    {
        return "CTApplicationBundle:Community:showCommunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 217,  450 => 216,  446 => 214,  442 => 212,  438 => 210,  435 => 209,  431 => 207,  425 => 205,  422 => 204,  420 => 203,  417 => 202,  415 => 201,  409 => 198,  402 => 194,  398 => 192,  395 => 191,  390 => 190,  383 => 188,  379 => 186,  375 => 184,  372 => 183,  368 => 181,  364 => 179,  361 => 178,  359 => 177,  356 => 176,  354 => 175,  348 => 172,  341 => 168,  336 => 165,  332 => 164,  317 => 152,  312 => 150,  307 => 148,  297 => 141,  292 => 139,  284 => 134,  276 => 129,  268 => 124,  259 => 118,  251 => 113,  247 => 112,  242 => 110,  236 => 107,  232 => 106,  228 => 105,  224 => 104,  220 => 103,  215 => 100,  203 => 93,  190 => 86,  184 => 83,  176 => 78,  169 => 76,  161 => 71,  157 => 70,  149 => 65,  146 => 64,  142 => 63,  137 => 61,  129 => 56,  123 => 53,  117 => 52,  112 => 50,  107 => 48,  98 => 44,  94 => 43,  84 => 35,  80 => 34,  61 => 18,  51 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
