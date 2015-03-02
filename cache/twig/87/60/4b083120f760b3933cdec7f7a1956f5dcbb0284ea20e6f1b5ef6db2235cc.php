<?php

/* partials/header.html.twig */
class __TwigTemplate_87604b083120f760b3933cdec7f7a1956f5dcbb0284ea20e6f1b5ef6db2235cc extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-inverse navbar-static-top\" role=\"navigation\">       
    <div class=\"container\">
        <div class=\"navbar-collapse collapse\">
";
        // line 8
        echo "            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "                ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 11
            echo "                <li class=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
                  <a href=\"";
            // line 12
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
                  ";
            // line 13
            if ($this->getAttribute($context["page"], "children", array())) {
                // line 14
                echo "                      <ul class=\"submenu\">
                      ";
                // line 15
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    echo "                          ";
                    if ($this->getAttribute($context["child"], "visible", array())) {
                        // line 17
                        echo "                            <li class=\"";
                        echo (isset($context["current_page"]) ? $context["current_page"] : null);
                        echo "\"><a data-title=\"#";
                        echo strtr($this->getAttribute($context["child"], "menu", array()), array(" " => ""));
                        echo "\">";
                        echo $this->getAttribute($context["child"], "menu", array());
                        echo "</a></li>
                          ";
                    }
                    // line 19
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                      </ul>
                  ";
            }
            // line 22
            echo "                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </ul>
        </div>
        <div class=\"title\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"title-big\" href=\"";
        // line 33
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                <h2>";
        // line 34
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h2>
                <h1>";
        // line 35
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "year", array());
        echo "</h1>
                <h3>";
        // line 36
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
        return array (  107 => 36,  103 => 35,  99 => 34,  95 => 33,  84 => 24,  77 => 22,  73 => 20,  67 => 19,  57 => 17,  54 => 16,  50 => 15,  47 => 14,  45 => 13,  39 => 12,  34 => 11,  31 => 10,  27 => 9,  24 => 8,  19 => 1,);
    }
}
