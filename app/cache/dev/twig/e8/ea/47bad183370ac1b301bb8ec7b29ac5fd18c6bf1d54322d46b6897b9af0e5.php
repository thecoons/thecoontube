<?php

/* CTVideoBundle:Video:news.html.twig */
class __TwigTemplate_e8ea47bad183370ac1b301bb8ec7b29ac5fd18c6bf1d54322d46b6897b9af0e5 extends Twig_Template
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
        // line 1
        echo "<br>
<h2 style=\"color:white;\">News</h2>
<div class=\"row\">
  <div class=\"col-lg-12\">
    <div class=\"row\" >
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "
    <div class=\"col-lg-3 col-lg-offset-1\" >
      <div class=\"row\">

        <div class=\"col-lg-6\">

      <a href=\"#\" class=\"thumbnail\">
        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, ("http://image.tmdb.org/t/p/w300" . $this->getAttribute($this->getAttribute($context["post"], "api", array()), "poster_path", array())), "html", null, true);
            echo "\" alt=\"...\">
      </a>

        </div>
        <div class=\"col-lg-6\">
          <P>";
            // line 19
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["post"], "api", array()), "title", array()), 0, 15), "html", null, true);
            echo "</p>
          <table class=\"table\">

            <tr>

              <td>
                <p class=\"pull-left\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>Rate</p>
              </td>
              <td>
                <span class=\"badge\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "api", array()), "vote_average", array()), "html", null, true);
            echo "</span>
              </td>
            </tr>
            <tr>
              <td>

                <small class=\"pull-left\" style=\"color:white;\">on ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "community", array()), "title", array()), "html", null, true);
            echo "</small>
              </td>
              <td>
              </td>
            </tr>

          </table>
          <a href=\"\" class=\"btn btn-warning\" role=\"button\"><span class=\"glyphicon glyphicon-play\" aria-hidden=\"true\"></span> Play</a>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CTVideoBundle:Video:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 46,  68 => 34,  59 => 28,  47 => 19,  39 => 14,  30 => 7,  26 => 6,  19 => 1,);
    }
}
