<?php

/* partials/header.html.twig */
class __TwigTemplate_06cdec7bd0a3db924114c7c0d56f581c0fa4d9f22ae8c54958adc4091a8f6287 extends Twig_Template
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
        echo "<div class=\"title\">
    <h1>";
        // line 2
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h1>
    <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "year", array());
        echo "</h2>
    <h3>";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "date", array());
        echo "</h3>
    <img class=\"logo\" src=\"";
        // line 5
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo.png\">
</div>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
