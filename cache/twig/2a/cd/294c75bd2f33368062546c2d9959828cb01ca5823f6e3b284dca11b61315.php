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
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
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
        // line 44
        echo "    </head>

      <body>

        <div class=\"container\">
            ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "        </div>

<!--         <div class=\"footer\">
        </div> -->
    </body>
    ";
        // line 55
        $this->displayBlock('bottom', $context, $blocks);
        // line 56
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
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
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
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

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://bower_components/jquery/dist/jquery.min.js", 1 => 101), "method");
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://bower_components/jquery-ui/jquery-ui.min.js"), "method");
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://bower_components/jquery.panzoom/dist/jquery.panzoom.min.js"), "method");
        // line 33
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/script.js"), "method");
        // line 34
        echo "
            ";
        // line 35
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 36
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 37
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 38
            echo "            ";
        }
        // line 39
        echo "
            ";
        // line 40
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 55,  166 => 49,  160 => 40,  157 => 39,  154 => 38,  151 => 37,  148 => 36,  146 => 35,  143 => 34,  140 => 33,  137 => 32,  134 => 31,  131 => 30,  128 => 29,  123 => 25,  120 => 24,  118 => 23,  115 => 22,  113 => 21,  110 => 20,  105 => 42,  103 => 29,  97 => 27,  95 => 20,  89 => 18,  83 => 16,  80 => 15,  74 => 13,  68 => 11,  66 => 10,  60 => 7,  57 => 6,  54 => 5,  50 => 56,  48 => 55,  41 => 50,  39 => 49,  32 => 44,  30 => 5,  24 => 1,);
    }
}
