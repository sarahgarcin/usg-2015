<?php

/* partials/base.html.twig */
class __TwigTemplate_2acd294c75bd2f33368062546c2d9959828cb01ca5823f6e3b284dca11b61315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "    </head>

      <body>

        <div class=\"container\">
            ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "        </div>

<!--         <div class=\"footer\">
        </div> -->

       ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
    ";
        // line 57
        $this->displayBlock('bottom', $context, $blocks);
        // line 58
        echo "</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 7
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, max-scale=1\">
        ";
        // line 10
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 13
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 15
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 16
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 18
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        

    ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://bower_components/foundation/css/foundation.css", 1 => 101), "method");
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/usg.css", 1 => 100), "method");
        // line 25
        echo "
        ";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://bower_components/jquery/dist/jquery.min.js", 1 => 101), "method");
        // line 45
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://bower_components/jquery-ui/jquery-ui.min.js"), "method");
        // line 46
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery.mobile-events.min.js"), "method");
        // line 47
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://bower_components/jquery.pep/src/jquery.pep.js"), "method");
        // line 48
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/script.js"), "method");
        // line 49
        echo "            ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 50
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 51
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 52
            echo "            ";
        }
        // line 53
        echo "
            ";
        // line 54
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 57
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  168 => 54,  165 => 53,  162 => 52,  159 => 51,  156 => 50,  153 => 49,  150 => 48,  147 => 47,  144 => 46,  141 => 45,  138 => 44,  135 => 43,  130 => 37,  125 => 25,  122 => 24,  120 => 23,  117 => 22,  115 => 21,  112 => 20,  102 => 27,  100 => 20,  94 => 18,  88 => 16,  85 => 15,  79 => 13,  73 => 11,  71 => 10,  65 => 7,  62 => 6,  59 => 5,  55 => 58,  53 => 57,  50 => 56,  48 => 43,  41 => 38,  39 => 37,  32 => 32,  30 => 5,  24 => 1,);
    }
}
