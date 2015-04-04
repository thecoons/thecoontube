<?php

/* CTVideoBundle:Video:flowplayer.css.twig */
class __TwigTemplate_65487c676dd860c0a1f59ea6ddf42e019523ada5babc458744a8198b5d939362 extends Twig_Template
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
        echo ".flowplayer { width: 100%; background-color: #222; background-size: cover; max-width: 1000px; }
.flowplayer .fp-controls { background-color: rgba(0, 0, 0, 0.4)}
.flowplayer .fp-timeline { background-color: rgba(0, 0, 0, 0.5)}
.flowplayer .fp-progress { background-color: rgba(235, 97, 52, 1)}
.flowplayer .fp-buffer { background-color: rgba(249, 249, 249, 1)}
.flowplayer { background-image: url(";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "Fanart", array()), "html", null, true);
        echo ")}
";
    }

    public function getTemplateName()
    {
        return "CTVideoBundle:Video:flowplayer.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
