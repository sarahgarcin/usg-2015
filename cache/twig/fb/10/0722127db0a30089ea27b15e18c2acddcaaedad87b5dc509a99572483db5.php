<?php

/* partials/menu.html.twig */
class __TwigTemplate_fb100722127db0a30089ea27b15e18c2acddcaaedad87b5dc509a99572483db5 extends Twig_Template
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
        echo "<nav class=\"navbar\" role=\"navigation\">       
    <ul class=\"sommaire\">
      ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "        <li class=\"";
            echo twig_lower_filter($this->env, $this->getAttribute($context["page"], "title", array()));
            echo "\">
          <a href=\"";
            // line 5
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
            <span class=\"element-menu\">";
            // line 6
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</span>
            </a>
          ";
            // line 8
            if ( !twig_test_empty($this->getAttribute($context["page"], "children", array()))) {
                // line 9
                echo "            <ul class=\"submenu\">
            ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 11
                    echo "                  <li class=\"";
                    echo strtr(strtr(strtr(twig_lower_filter($this->env, $this->getAttribute($context["child"], "title", array())), array(" " => "", "-" => "", "ü" => "u")), array("&" => "")), array("&" => ""));
                    echo "\">
                    <a href=\"";
                    // line 12
                    echo strtr($this->getAttribute($context["child"], "url", array()), array("conference" => "home"));
                    echo "\">
                    ";
                    // line 13
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "media", array()), "cover.png", array(), "array"))) {
                        // line 14
                        echo "                      <img src=\"";
                        echo $this->getAttribute($this->getAttribute($context["child"], "media", array()), "cover.png", array(), "array");
                        echo "\">
                    ";
                    }
                    // line 16
                    echo "                    <span class=\"title-sub\">";
                    echo $this->getAttribute($context["child"], "menu", array());
                    echo "</span>
                    </a>
                  </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            </ul>
          ";
            }
            // line 22
            echo "        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  82 => 22,  78 => 20,  67 => 16,  61 => 14,  59 => 13,  55 => 12,  50 => 11,  46 => 10,  43 => 9,  41 => 8,  36 => 6,  32 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
