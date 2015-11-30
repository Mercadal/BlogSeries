<?php

/* articlePlatformBundle:Advert:about.html.twig */
class __TwigTemplate_ff5c75b783b7e24391209621b00138dc45cc7e8faf26a0d52e98d4ff9df83b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "articlePlatformBundle:Advert:about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "




        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "





    <header>

        <h1 style=\"text-align:center\">Qui sommes nous</h1>
    </header>


    <article>


<p>
    Nous sommes tout comme vous, de simples internautes passionnés de séries. Et dans ce blog, nous recherchons régulièrement les meilleures séries d'actualités qui nous ont le plus marqués, touchées et que nous souhaitons partager avec vous.
</p>


    </article>




            ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/articlePlatform/js/example.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle:Advert:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  73 => 16,  70 => 15,  41 => 22,  39 => 15,  32 => 10,  29 => 9,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {# src/article/PlatformBundle/Resources/views/Advert/about.html.twig #}*/
/* */
/* */
/* */
/* */
/* */
/*     {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/*         {% block javascripts %}*/
/* */
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* */
/*             <script src="{{ asset('bundles/articlePlatform/js/example.js') }}"></script>*/
/* */
/*         {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <header>*/
/* */
/*         <h1 style="text-align:center">Qui sommes nous</h1>*/
/*     </header>*/
/* */
/* */
/*     <article>*/
/* */
/* */
/* <p>*/
/*     Nous sommes tout comme vous, de simples internautes passionnés de séries. Et dans ce blog, nous recherchons régulièrement les meilleures séries d'actualités qui nous ont le plus marqués, touchées et que nous souhaitons partager avec vous.*/
/* </p>*/
/* */
/* */
/*     </article>*/
/* */
/* */
/* */
/* */
/*             {% endblock %}*/
/* */
/* */
