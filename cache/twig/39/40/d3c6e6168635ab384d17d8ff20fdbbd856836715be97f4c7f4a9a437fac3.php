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
        echo "\t";
        $this->env->loadTemplate("partials/menu.html.twig")->display($context);
        // line 5
        echo "\t<div class=\"panzoom\" id=\"panzoom\">
\t\t";
        // line 7
        echo "\t\t\t<div id=\"dialog\"></div>
        ";
        // line 8
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 9
        echo "        <div class=\"carte-container\">
        \t<div class=\"cartes\">
<!--         \t<div class=\"carte-route\" style=\"background-image:url(";
        // line 11
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/carte-route-test.png)\"></div> -->
        \t\t<img class=\"carte-route\" src=\"";
        // line 12
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/carte-route-test.png\">
\t    \t\t\t<img class=\"carte-expo\" src=\"";
        // line 13
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/carte-block.min.svg\">
        \t</div>
        \t<div class=\"img-expo\">
        \t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "        \t\t\t";
            if ($this->getAttribute($context["page"], "children", array())) {
                // line 18
                echo "\t        \t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 19
                    echo "\t        \t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "media", array()), "images", array()))) {
                        // line 20
                        echo "\t\t        \t\t\t\t<div id=\"";
                        echo strtr(strtr(strtr($this->getAttribute($context["child"], "menu", array()), array(" " => "")), array("+" => "")), array("&" => ""));
                        echo "\">
\t\t        \t\t\t\t\t<a href=\"";
                        // line 21
                        echo $this->getAttribute($context["child"], "url", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["child"], "title", array());
                        echo "\">
\t\t\t        \t\t\t\t\t<h3>";
                        // line 22
                        echo $this->getAttribute($context["child"], "title", array());
                        echo "</h3>
\t\t\t        \t\t\t\t\t<img src=\"";
                        // line 23
                        echo $this->getAttribute($this->getAttribute($context["child"], "media", array()), "image.png", array(), "array");
                        echo "\">
\t\t\t        \t\t\t\t</a>
\t\t        \t\t\t\t</div>
\t        \t\t\t\t";
                    }
                    // line 27
                    echo "\t        \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t        \t\t";
            }
            // line 29
            echo "        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        \t</div>
    \t</div>
  \t</div>
    ";
        // line 33
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
        return array (  125 => 33,  120 => 30,  114 => 29,  111 => 28,  105 => 27,  98 => 23,  94 => 22,  88 => 21,  83 => 20,  80 => 19,  75 => 18,  72 => 17,  68 => 16,  62 => 13,  58 => 12,  54 => 11,  50 => 9,  48 => 8,  45 => 7,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
