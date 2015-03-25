<?php

/* partials/header.html.twig */
class __TwigTemplate_63f97a24655494611d1648276f8074c44373a4b13f649bf12c70d086ef9066ce extends Twig_Template
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
        echo "<header class=\"header\" id=\"header\">
\t\t<a href=\"javascript:history.go(-1)\" >
\t\t<img class=\"precedent\" src=\"";
        // line 3
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/precedent.png\" alt=\"precedent\">
\t\t</a>
\t\t<div class=\"title\">
\t\t<a href=\"";
        // line 6
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\" title=\"home\">
    \t<h2>";
        // line 7
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h2>
    \t<h1>2015</h1>
    \t</a>
    </div>
    <div class=\"menu-toggle\">
      <div></div>
      <div></div>
    </div>
</header>";
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
        return array (  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
