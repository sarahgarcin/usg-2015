<?php

/* expo.html.twig */
class __TwigTemplate_c5479121daa72363d23edd9733bc04c4f84b99e3ab62d36e37f9c7e08984fc82 extends Twig_Template
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
        echo "\t<div class=\"row\">
\t\t<div class=\"colonne-left large-4 columns\">
\t\t\t<div class=\"inner-content\">
\t\t\t\t";
        // line 7
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 8
        echo "\t\t\t\t<img src=\"";
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array());
        echo "\" />
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"colonne-central large-4 columns\">
\t\t\t\t<h2>";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
\t\t\t\t";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "\t
\t\t\t</div>
\t\t\t<div class=\"colonne-right large-4 columns\">
\t\t\t\t<div class=\"inner-content\">
\t\t\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), 1, (isset($context["length"]) ? $context["length"] : null)), (isset($context["length"]) ? $context["length"] : null), ((isset($context["length"]) ? $context["length"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["pictures"]) {
            // line 18
            echo "\t\t\t\t\t\t";
            $context["picture"] = $context["pictures"];
            // line 19
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"";
            // line 20
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
        // line 23
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
        return array (  88 => 23,  77 => 20,  74 => 19,  71 => 18,  67 => 17,  60 => 13,  56 => 12,  46 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}