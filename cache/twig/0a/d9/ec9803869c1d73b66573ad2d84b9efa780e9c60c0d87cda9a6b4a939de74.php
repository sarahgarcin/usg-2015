<?php

/* partials/base.html.twig */
class __TwigTemplate_0ad9ec9803869c1d73b66573ad2d84b9efa780e9c60c0d87cda9a6b4a939de74 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "    </head>

      <body>

        <div class=\"container\">
            ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "        </div>

        <div class=\"footer\">
        </div>
    </body>
    ";
        // line 56
        $this->displayBlock('bottom', $context, $blocks);
        // line 57
        echo "</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 6
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 15
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 17
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
    ";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "            ";
        // line 21
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 101), "method");
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap-custom.css", 1 => 100), "method");
        // line 24
        echo "
        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery-ui.min.js"), "method");
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/panzoom.js"), "method");
        // line 33
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery.scrollTo.min.js"), "method");
        // line 34
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/script.js"), "method");
        // line 35
        echo "
            ";
        // line 36
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 37
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 38
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 39
            echo "            ";
        }
        // line 40
        echo "
            ";
        // line 41
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 56
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  176 => 56,  171 => 50,  165 => 41,  162 => 40,  159 => 39,  156 => 38,  153 => 37,  151 => 36,  148 => 35,  145 => 34,  142 => 33,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  127 => 28,  122 => 24,  119 => 23,  117 => 22,  114 => 21,  112 => 20,  109 => 19,  104 => 43,  102 => 28,  96 => 26,  94 => 19,  88 => 17,  82 => 15,  79 => 14,  73 => 12,  67 => 10,  65 => 9,  59 => 6,  56 => 5,  53 => 4,  49 => 57,  47 => 56,  40 => 51,  38 => 50,  31 => 45,  29 => 4,  24 => 1,);
    }
}
