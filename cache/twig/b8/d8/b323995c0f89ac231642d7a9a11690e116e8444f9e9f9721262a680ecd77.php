<?php

/* expo.html.twig */
class __TwigTemplate_b8d8b323995c0f89ac231642d7a9a11690e116e8444f9e9f9721262a680ecd77 extends Twig_Template
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
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 5
        echo "  ";
        $this->env->loadTemplate("partials/menu.html.twig")->display($context);
        // line 6
        echo "\t<div class=\"expo-content\">
\t\t\t<div class=\"colonne-central\">
\t\t\t\t<h1>";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
\t\t\t\t";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "\t
\t\t\t</div>
\t\t\t<div class=\"colonne-right\">
\t\t\t\t<div class=\"inner-content\">
\t\t\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["length"]) ? $context["length"] : null), ((isset($context["length"]) ? $context["length"] : null) - 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["pictures"]) {
            // line 14
            echo "\t\t\t\t\t\t";
            $context["picture"] = $context["pictures"];
            // line 15
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"";
            // line 16
            echo $this->getAttribute((isset($context["picture"]) ? $context["picture"] : null), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array());
            echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pictures'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</div>

\t\t</div>
\t\t\t
\t</div>
    
";
    }

    public function getTemplateName()
    {
        return "expo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  70 => 16,  67 => 15,  64 => 14,  60 => 13,  53 => 9,  49 => 8,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
