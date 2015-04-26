<?php

/* CTVideoBundle:Video:actor.html.twig */
class __TwigTemplate_5ad654d96ca9fec016aa649ac5d1e14f67917db5ca29b438e30218708345eb27 extends Twig_Template
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
        echo "Actor Detail
";
    }

    // line 7
    public function block_app_content($context, array $blocks = array())
    {
        // line 8
        echo "<section id=\"about\" class=\"home-section text-center bg-gray\">
  <div class=\"heading-about marginbot-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4\">

          <div class=\"team boxed-grey\">
            <div class=\"inner\">
              <h2>
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "name", array()), "html", null, true);
        echo "
              </h2>
              <p class=\"subtitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "birthday", array()), "html", null, true);
        echo "</p>
              <p class=\"subtitle\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "place_of_birth", array()), "html", null, true);
        echo "</p>
              <div class=\"avatar text-center\"><img src=\"http://image.tmdb.org/t/p/w300";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "profile_path", array()), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\" /></div>
            </div>
          </div>

        </div>
        <div class=\"col-lg-8\">

          <div class=\"section-heading\">
            <h2>Biography</h2>
            <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "biography", array()), "html", null, true);
        echo "</p>
          </div>

        </div>
        <br>
        <br>
      </div>
      <h2>filmography</h2>
      ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "cast", array()), "cast", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cast"]) {
            // line 39
            echo "      ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 6) == 0)) {
                // line 40
                echo "      <br>
      <div class=\"row\">
        ";
            }
            // line 43
            echo "        <div class=\"col-lg-2\">

          <div class=\"team boxed-grey\">
            <div class=\"inner\">
              <h5>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["cast"], "title", array()), "html", null, true);
            echo "</h5>
              <p class=\"subtitle\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["cast"], "character", array()), "html", null, true);
            echo "</p>
              <div class=\"avatar\"><img src=\"http://image.tmdb.org/t/p/w300";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["cast"], "poster_path", array()), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\" /></div>
            </div>
          </div>

        </div>
        ";
            // line 54
            if ((($this->getAttribute($context["loop"], "index0", array()) % 6) == 5)) {
                // line 55
                echo "      </div>
      ";
            }
            // line 57
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cast'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>
  </div>

</section>
<!-- /Section: about -->
";
    }

    public function getTemplateName()
    {
        return "CTVideoBundle:Video:actor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 58,  148 => 57,  144 => 55,  142 => 54,  134 => 49,  130 => 48,  126 => 47,  120 => 43,  115 => 40,  112 => 39,  95 => 38,  84 => 30,  72 => 21,  68 => 20,  64 => 19,  59 => 17,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
