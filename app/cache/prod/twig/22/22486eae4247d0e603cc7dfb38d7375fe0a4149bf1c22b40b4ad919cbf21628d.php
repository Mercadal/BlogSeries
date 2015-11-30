<?php

/* articlePlatformBundle:Blog:new.html.twig */
class __TwigTemplate_b0221e6b714967978d0acec231d40c2cc55f43d91365cb4f81cea4b8ac978103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "articlePlatformBundle:Blog:new.html.twig", 1);
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Création de l'article</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("blog");
        echo "\">
            Retour aux articles
        </a>

    </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle:Blog:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  38 => 9,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {%form_theme form 'bootstrap_3_layout.html.twig'%}*/
/* */
/* */
/* {% block body -%}*/
/*     <h1>Création de l'article</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('blog') }}">*/
/*             Retour aux articles*/
/*         </a>*/
/* */
/*     </li>*/
/* </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
