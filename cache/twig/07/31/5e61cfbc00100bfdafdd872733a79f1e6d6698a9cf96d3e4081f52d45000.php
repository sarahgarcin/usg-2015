<?php

/* error.html.twig */
class __TwigTemplate_07315e61cfbc00100bfdafdd872733a79f1e6d6698a9cf96d3e4081f52d45000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("partials/base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 5
        echo "  ";
        $this->env->loadTemplate("partials/menu.html.twig")->display($context);
        // line 6
        echo "\t<div id=\"error\">
\t\t<div>
\t\t\t<h1>Error ";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  49 => 8,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
