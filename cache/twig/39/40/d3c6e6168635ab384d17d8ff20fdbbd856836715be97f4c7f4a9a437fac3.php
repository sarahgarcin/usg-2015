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
        echo "\t<div class=\"panzoom\">
\t\t";
        // line 6
        echo "        ";
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 7
        echo "        <div class=\"carte-container\">
        \t<div class=\"cartes\">
        \t\t<img class=\"carte-route\" src=\"";
        // line 9
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/carte-route.svg\">
\t    \t\t\t<img class=\"carte-expo\" src=\"";
        // line 10
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/carte-block.svg\">
        \t</div>
        \t<div class=\"img-expo\">
        \t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "        \t\t\t";
            if ($this->getAttribute($context["page"], "children", array())) {
                // line 15
                echo "\t        \t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    echo "\t        \t\t\t\t";
                    if ($this->getAttribute($context["child"], "media", array())) {
                        // line 17
                        echo "\t\t        \t\t\t\t<div id=\"";
                        echo strtr($this->getAttribute($context["child"], "menu", array()), array(" " => ""));
                        echo "\">
\t\t        \t\t\t\t\t<a href=\"";
                        // line 18
                        echo $this->getAttribute($context["child"], "url", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["child"], "title", array());
                        echo "\">
\t\t\t        \t\t\t\t\t<h3>";
                        // line 19
                        echo $this->getAttribute($context["child"], "title", array());
                        echo "</h3>
\t\t\t        \t\t\t\t\t<img src=\"";
                        // line 20
                        echo $this->getAttribute($this->getAttribute($context["child"], "media", array()), "image.png", array(), "array");
                        echo "\">
\t\t\t        \t\t\t\t</a>
\t\t        \t\t\t\t</div>
\t        \t\t\t\t";
                    }
                    // line 24
                    echo "\t        \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t        \t\t";
            }
            // line 26
            echo "        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        \t</div>
    \t</div>
  \t</div>
    ";
        // line 30
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
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
        return array (  116 => 30,  111 => 27,  105 => 26,  102 => 25,  96 => 24,  89 => 20,  85 => 19,  79 => 18,  74 => 17,  71 => 16,  66 => 15,  63 => 14,  59 => 13,  53 => 10,  49 => 9,  45 => 7,  42 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
