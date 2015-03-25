<?php

/* home.html.twig */
class __TwigTemplate_7c1a689d6b84d9353eb9ccf27e76fb10833fd1d49928fe849648bff93ff83770 extends Twig_Template
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
        echo "  <div class=\"content\">
    <a class=\"P_A\" href=\"#\" >
      <img src=\"";
        // line 8
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/P_A.svg\" alt=\"P_A\" id=\"P_A\"/>
    </a>
    <div class=\"logo\">
      <img class=\"cnap\" src=\"";
        // line 11
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/cnap.png\">   
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 8,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
