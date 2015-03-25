<?php

/* home.html.twig */
class __TwigTemplate_3940d3c6e6168635ab384d17d8ff20fdbbd856836715be97f4c7f4a9a437fac3 extends Twig_Template
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
        echo "\t<!-- header for mobile -->
\t<header id=\"header\" class=\"visible-for-small-only\">
\t\t<div class=\"title-mobile\" >
\t\t\t<h2>";
        // line 7
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h2>
\t    <h1>";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "year", array());
        echo "</h1>
    </div>
    <div class=\"menu-toggle-mobile visible-for-small-only\">
      <div></div>
      <div></div>
    </div>
\t</header><!-- /header -->
\t";
        // line 15
        $this->env->loadTemplate("partials/menu.html.twig")->display($context);
        // line 16
        echo "\t<div class=\"panzoom\">
\t\t";
        // line 18
        echo "\t\t\t<div id=\"dialog\"></div>
      ";
        // line 19
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 20
        echo "      <div class=\"carte-container hide-for-small-only\">
      \t<div class=\"cartes\">
      \t\t<img class=\"carte-route\" src=\"";
        // line 22
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/carte-route3.png\">
    \t\t\t<img class=\"carte-expo\" src=\"";
        // line 23
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/carte-block.svg\">
      \t</div>
      \t<div class=\"img-expo\">
      \t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 27
            echo "      \t\t\t";
            if ($this->getAttribute($context["page"], "children", array())) {
                // line 28
                echo "        \t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 29
                    echo "        \t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "media", array()), "images", array()))) {
                        // line 30
                        echo "\t        \t\t\t\t<div id=\"";
                        echo strtr(strtr(strtr($this->getAttribute($context["child"], "menu", array()), array(" " => "")), array("+" => "")), array("&" => ""));
                        echo "\">
\t        \t\t\t\t\t<a href=\"";
                        // line 31
                        echo $this->getAttribute($context["child"], "url", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["child"], "title", array());
                        echo "\">
\t\t        \t\t\t\t\t<h3>";
                        // line 32
                        echo $this->getAttribute($context["child"], "title", array());
                        echo "</h3>
\t\t        \t\t\t\t\t<img src=\"";
                        // line 33
                        echo $this->getAttribute($this->getAttribute($context["child"], "media", array()), "image.png", array(), "array");
                        echo "\">
\t\t        \t\t\t\t</a>
\t        \t\t\t\t</div>
        \t\t\t\t";
                    }
                    // line 37
                    echo "        \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "        \t\t";
            }
            // line 39
            echo "      \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      \t</div>
    \t</div>
  \t</div>
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
        return array (  134 => 40,  128 => 39,  125 => 38,  119 => 37,  112 => 33,  108 => 32,  102 => 31,  97 => 30,  94 => 29,  89 => 28,  86 => 27,  82 => 26,  76 => 23,  72 => 22,  68 => 20,  66 => 19,  63 => 18,  60 => 16,  58 => 15,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
