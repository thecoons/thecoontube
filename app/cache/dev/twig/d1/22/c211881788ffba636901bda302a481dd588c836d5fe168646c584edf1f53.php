<?php

/* ::oldLayout.html.twig */
class __TwigTemplate_d122c211881788ffba636901bda302a481dd588c836d5fe168646c584edf1f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 37
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
      ";
        }
        // line 39
        echo "      <h3>Les annonces</h3>
      <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("CT_plateform_home");
        echo "\">Accueil</a></li>

        ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 44
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("CT_plateform_add");
            echo "\">Ajouter une annonce</a></li>
        ";
        }
        // line 46
        echo "
      </ul>

      <h4>Dernières annonces</h4>
      ";
        // line 50
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CTPlateformBundle:Advert:menu", array("limit" => 3)));
        echo "
    </div>
    <div id=\"content\" class=\"col-md-9\">
      ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>
  </div>

  <hr>

  <footer>
    <p>The sky's the limit © ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
  </footer>
</div>

";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "CT Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        // line 13
        echo "  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "      ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "::oldLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 67,  154 => 65,  150 => 54,  147 => 53,  142 => 13,  140 => 12,  137 => 11,  131 => 9,  124 => 70,  122 => 65,  115 => 61,  107 => 55,  105 => 53,  99 => 50,  93 => 46,  87 => 44,  85 => 43,  80 => 41,  76 => 39,  70 => 37,  62 => 35,  60 => 34,  39 => 15,  37 => 11,  32 => 9,  23 => 2,);
    }
}
