<?php

/* articlePlatformBundle:Advert:index.html.twig */
class __TwigTemplate_977dd4d6bcacf0925634ac50ba80022694235ff81e5a8d4327f57686510d480c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'body1' => array($this, 'block_body1'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(array(0 => "::base.html.twig", 1 => "::Blog/index.html.twig"), "articlePlatformBundle:Advert:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "



<div class=\"container\">

  <h1>My first Bootstrap website!</h1>

  ";
        // line 13
        $this->displayBlock('body1', $context, $blocks);
        // line 14
        echo "
  <p>This page will grow as we add more and more components from Bootstrap...</p>      
  <p>This is a paragraph.</p>      
  <p>This is another paragraph.</p>      
  <p>This is a paragraph.</p>      
  <p>This is another paragraph.</p>
</div>

      ";
    }

    // line 13
    public function block_body1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  43 => 14,  41 => 13,  31 => 5,  28 => 4,  19 => 1,);
    }
}
/* {% extends ['::base.html.twig','::Blog/index.html.twig'] %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* */
/* <div class="container">*/
/* */
/*   <h1>My first Bootstrap website!</h1>*/
/* */
/*   {% block body1 %}{% endblock %}*/
/* */
/*   <p>This page will grow as we add more and more components from Bootstrap...</p>      */
/*   <p>This is a paragraph.</p>      */
/*   <p>This is another paragraph.</p>      */
/*   <p>This is a paragraph.</p>      */
/*   <p>This is another paragraph.</p>*/
/* </div>*/
/* */
/*       {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
