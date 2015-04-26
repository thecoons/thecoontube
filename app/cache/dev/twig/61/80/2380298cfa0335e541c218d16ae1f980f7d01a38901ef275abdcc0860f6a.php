<?php

/* ::layout.html.twig */
class __TwigTemplate_61802380298cfa0335e541c218d16ae1f980f7d01a38901ef275abdcc0860f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'app_head' => array($this, 'block_app_head'),
            'app_title' => array($this, 'block_app_title'),
            'app_stylesheet' => array($this, 'block_app_stylesheet'),
            'app_nav' => array($this, 'block_app_nav'),
            'app_content' => array($this, 'block_app_content'),
            'app_footer' => array($this, 'block_app_footer'),
            'app_load' => array($this, 'block_app_load'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["app_locale"]) ? $context["app_locale"] : $this->getContext($context, "app_locale")), "html", null, true);
        echo "\">

<head>
  ";
        // line 7
        $this->displayBlock('app_head', $context, $blocks);
        // line 13
        echo "
  <title>";
        // line 14
        $this->displayBlock('app_title', $context, $blocks);
        echo "</title>

  <!-- Bootstrap Core CSS -->
  ";
        // line 17
        $this->displayBlock('app_stylesheet', $context, $blocks);
        // line 28
        echo "
</head>

<body data-spy=\"scroll\" ng-app=\"app\">
  ";
        // line 32
        $this->displayBlock('app_nav', $context, $blocks);
        // line 91
        echo "
    <!-- Section: intro -->
    ";
        // line 93
        $this->displayBlock('app_content', $context, $blocks);
        // line 101
        echo "    <!-- /Section: intro -->




    ";
        // line 106
        $this->displayBlock('app_footer', $context, $blocks);
        // line 118
        echo "
    ";
        // line 119
        $this->displayBlock('app_load', $context, $blocks);
        // line 173
        echo "
  </body>

  </html>
";
    }

    // line 7
    public function block_app_head($context, array $blocks = array())
    {
        // line 8
        echo "  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"description\" content=\"Wait and (...) see !!!\">
  <meta name=\"author\" content=\"theCoon\">
  ";
    }

    // line 14
    public function block_app_title($context, array $blocks = array())
    {
        echo " The CoonTube ";
    }

    // line 17
    public function block_app_stylesheet($context, array $blocks = array())
    {
        // line 18
        echo "  <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/css/animate.css\" rel=\"stylesheet\" />
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/color/default.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/css/nivo-lightbox.css\" rel=\"stylesheet\" />
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/css/nivo-lightbox-theme/default/default.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/css/ngAnimateStyle.css\" rel=\"stylesheet\" />

  ";
    }

    // line 32
    public function block_app_nav($context, array $blocks = array())
    {
        // line 33
        echo "  <div class=\"container\">
    <ul id=\"gn-menu\" class=\"gn-menu-main\">
      <li class=\"gn-trigger\">
        <a class=\"gn-icon gn-icon-menu\"><span>Menu</span></a>
        <nav class=\"gn-menu-wrapper\">
          <div class=\"gn-scroller\">
            <ul class=\"gn-menu\">
              <form class=\"\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ct_user_search");
        echo "\" method=\"get\">

                <li class=\"gn-search-item\">
                  <input placeholder=\"People\" type=\"search\" class=\"gn-search\" name=\"search\">
                  <a class=\"gn-icon gn-icon-search\"><span>People</span></a>

                </li>

              </form>
              <li>
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ct_video_gallery");
        echo "\" class=\"gn-icon gn-icon-videos\">Gallery</a>
              </li>
              <li>
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ct_video_upload");
        echo "\" class=\"gn-icon gn-icon-download\">Upload</a>
              </li>
              <li>
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("ct_application_mycommunities");
        echo "\" class=\"gn-icon gn-icon-archive\">Community</a>
              </li>
            </ul>
          </div><!-- /gn-scroller -->
        </nav>
      </li>
      <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("ct_application_homepage");
        echo "\">The CoonTube</a></li>
      ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "      <li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">

            <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><strong>  ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>
            <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu gn-menu\" role=\"menu\">
              <li class=\"gn-icon\"><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>Profile</a></li>
              <li class=\"gn-icon\"><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>Edition</a></li>
              <li class=\"gn-icon\"><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("ct_user_show_friends");
            echo "\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span>Amis</a></li>
              <li class=\"gn-icon\"><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>Déconnection</a></li>
            </ul>
          </li>
        </li>
        ";
        } else {
            // line 79
            echo "        <li>
          <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connectez-vous</a>
        </li>
        ";
        }
        // line 83
        echo "
        <li><ul class=\"company-social\">
          <li class=\"social-facebook\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
          <li class=\"social-twitter\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
        </ul>\t</li>
      </ul>
    </div>
    ";
    }

    // line 93
    public function block_app_content($context, array $blocks = array())
    {
        // line 94
        echo "    <section id=\"intro\" class=\"intro\">
      <div class=\"slogan\">
        <h1>The CoonTube</h1>
        <p>Wait and (...) See !!!</p>
      </div>
    </section>
    ";
    }

    // line 106
    public function block_app_footer($context, array $blocks = array())
    {
        // line 107
        echo "    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12 col-lg-12\">

            <p>Copyright &copy; 2015 TheCoonTube & Co - by <a href=\"http://bootstraptaste.com\">Bootstraptaste</a></p>
          </div>
        </div>
      </div>
    </footer>
    ";
    }

    // line 119
    public function block_app_load($context, array $blocks = array())
    {
        // line 120
        echo "    <!-- Core JavaScript Files -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/jquery.min.js\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/jquery.easing.min.js\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/classie.js\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/gnmenu.js\"></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/jquery.scrollTo.js\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/nivo-lightbox.min.js\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/stellar.js\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/inc/moment/moment.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/inc/angular-resource/angular-resource.js\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/inc/angular-animate/angular-animate.js\"></script>
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/js/custom.js\"></script>
    <script >

    var controllers = angular.module('controllers',['ngResource']);
    controllers.controller('HelloCtrl', ['\$scope','\$resource',function(\$scope,\$resource){
      \$scope.req = {query : \"\",valid_idbm : \"\"};

      \$scope.listIdbm = \"\";

      \$scope.searchIdbm = function(){
        var res = \$resource('";
        // line 144
        echo $this->env->getExtension('routing')->getPath("ct_video_idbm_search");
        echo "/:query');
        \$scope.listIdbm = res.get({ query: \$scope.req.query  });
      };

      \$scope.valideIdbm = function(id_idbm){
        \$scope.req.valid_idbm = id_idbm;
      }

    }]);


    var filters = angular.module('filters',[]);
    filters.filter('moment',function() {
      return function(input,format){
        format = format || 'll';
        return moment(input).format(format);
      }
    });

    var configs = angular.module('configs',[]);
    configs.config(function(\$interpolateProvider){
      \$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    });


    var app = angular.module('app',['controllers','filters','ngAnimate','configs']);

    </script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 144,  325 => 134,  320 => 132,  316 => 131,  311 => 129,  307 => 128,  303 => 127,  299 => 126,  295 => 125,  291 => 124,  287 => 123,  283 => 122,  279 => 121,  276 => 120,  273 => 119,  259 => 107,  256 => 106,  246 => 94,  243 => 93,  232 => 83,  226 => 80,  223 => 79,  215 => 74,  211 => 73,  207 => 72,  203 => 71,  197 => 68,  191 => 64,  189 => 63,  185 => 62,  176 => 56,  170 => 53,  164 => 50,  151 => 40,  142 => 33,  139 => 32,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  105 => 18,  102 => 17,  96 => 14,  88 => 8,  85 => 7,  77 => 173,  75 => 119,  72 => 118,  70 => 106,  63 => 101,  61 => 93,  57 => 91,  55 => 32,  49 => 28,  47 => 17,  41 => 14,  38 => 13,  36 => 7,  30 => 4,  26 => 2,);
    }
}
