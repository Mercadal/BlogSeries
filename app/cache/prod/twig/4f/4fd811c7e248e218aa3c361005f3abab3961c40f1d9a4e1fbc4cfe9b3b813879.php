<?php

/* articlePlatformBundle:Advert:layout.html.twig */
class __TwigTemplate_54012577a58faea7fe6bbbdf176494ee9b6d138bd3951f5c7d1222fa597f365f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "articlePlatformBundle:Advert:layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle:Advert:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Advert/layout.html.twig #}*/
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{parent()}}*/
/* {% endblock %}*/
