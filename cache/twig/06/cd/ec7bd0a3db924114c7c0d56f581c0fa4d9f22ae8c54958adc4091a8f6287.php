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
        echo "<nav class=\"navbar\" role=\"navigation\">       
    <div class=\"container\">
        <div class=\"navbar-collapse\">
<!--             <div class=\"zoom\">
              <button class=\"zoom-in\">+</button>
              <button class=\"zoom-out\">-</button>
              <input type=\"range\" class=\"zoom-range\">
              <button class=\"reset\">Reset</button>
            </div> -->
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 12
            echo "                ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 13
            echo "                <li class=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
                  <a href=\"";
            // line 14
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
                  ";
            // line 15
            if ($this->getAttribute($context["page"], "children", array())) {
                // line 16
                echo "                      <ul class=\"submenu\">
                      ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 18
                    echo "                          ";
                    if ($this->getAttribute($context["child"], "visible", array())) {
                        // line 19
                        echo "                            <li class=\"";
                        echo (isset($context["current_page"]) ? $context["current_page"] : null);
                        echo " ";
                        echo strtr($this->getAttribute($context["child"], "title", array()), array(" " => ""));
                        echo "\"><a href=\"#\">";
                        echo $this->getAttribute($context["child"], "menu", array());
                        echo "</a></li>
                          ";
                    }
                    // line 21
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                      </ul>
                  ";
            }
            // line 24
            echo "                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>
        </div>
        <div class=\"title\">
          <a class=\"title-big\" href=\"";
        // line 29
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
              <h2>";
        // line 30
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h2>
              <h1>";
        // line 31
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "year", array());
        echo "</h1>
              <h3>";
        // line 32
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "date", array());
        echo "</h3>
          </a>
        </div>
    </div>
</nav>";
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
        return array (  105 => 32,  101 => 31,  97 => 30,  93 => 29,  88 => 26,  81 => 24,  77 => 22,  71 => 21,  61 => 19,  58 => 18,  54 => 17,  51 => 16,  49 => 15,  43 => 14,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
