<?php

/* partials/menu.html.twig */
class __TwigTemplate_b79b69383d388f5a74e5505a9bc1493c39f6e58fd9936d4fa99a5ec611462aad extends Twig_Template
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
      <div class=\"home\">
        <a href=\"";
        // line 4
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\" title=\"home\">
          <div class=\"toit\">
            <div class=\"toit1\">
             </div>
             <div class=\"toit2\">
             </div>
          </div>
          <div class=\"mur\"></div>
        </a>
      </div>
      <div class=\"menu-toggle\">
        <div></div>
        <div></div>
      </div>
      <div class=\"navbar-collapse\">
        <ul class=\"nav navbar-nav navbar-right\">
          ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 22
            echo "            <li class=\"";
            echo $this->getAttribute($context["page"], "title", array());
            echo "\">
              <a href=\"";
            // line 23
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
              ";
            // line 24
            if ( !twig_test_empty($this->getAttribute($context["page"], "children", array()))) {
                // line 25
                echo "                  <ul class=\"submenu\">
                    <div class=\"carreblanc\"></div>
                  ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 28
                    echo "                        <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo " ";
                    echo strtr(strtr(strtr($this->getAttribute($context["child"], "title", array()), array(" " => "")), array("&" => "")), array("&" => ""));
                    echo "\"><a href=\"#\" data-title=\"";
                    echo strtr(strtr(strtr($this->getAttribute($context["child"], "title", array()), array(" " => "")), array("&" => "")), array("+" => ""));
                    echo "\">";
                    echo $this->getAttribute($context["child"], "menu", array());
                    echo "</a></li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                  </ul>
              ";
            }
            // line 32
            echo "            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </ul>
      </div>
    </div>
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
        return array (  97 => 34,  90 => 32,  86 => 30,  71 => 28,  67 => 27,  63 => 25,  61 => 24,  55 => 23,  50 => 22,  47 => 21,  43 => 20,  24 => 4,  19 => 1,);
    }
}
