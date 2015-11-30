<?php

/* articlePlatformBundle:Advert:newart.html.twig */
class __TwigTemplate_4dbfef6f78c48e57601307cbcf47f3f43c5d981098155978ed91e851b987547e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "articlePlatformBundle:Advert:newart.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blog_title' => array($this, 'block_blog_title'),
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<section id=\"wrapper\">

            <header id=\"header\">

                <div class=\"top\">


                </div>




                <hgroup>
                   
            <h2>";
        // line 21
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>

                </hgroup>


            </header>


        <html lang=fr>


<!-- Formulaire -->

<body>

<div class=\"container\">
  <h3>Ajouter un article</h3>

  <form class=\"form-horizontal\" role=\"form\">


    <div class=\"form-group\">
      <label class=\"control-label col-sm-2\" for=\"email\">Votre Pseudonyme</label>
      <div class=\"col-sm-10\">
        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrer un Email\">
      </div>
    </div>


    <div class=\"form-group\">
      <label class=\"control-label col-sm-2\" for=\"pwd\">Rentrer votre article</label>
      <div class=\"col-sm-10\">          
        <input type=\"article\" class=\"form-control\" id=\"artcl\" placeholder=\"Entrer un article\">
      </div>
    </div>


    <div class=\"form-group\">        
      <div class=\"col-sm-offset-2 col-sm-10\">
        <div class=\"checkbox\">
          <label><input type=\"checkbox\"> se souvenir de moi</label>
        </div>
      </div>
    </div>


    <div class=\"form-group\">        
      <div class=\"col-sm-offset-2 col-sm-10\">
        <button type=\"submit\" class=\"btn btn-default\">Soumettre</button>
      </div>
    </div>

  </form>

</div>

</body>
</html>






        ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "


            ";
    }

    // line 21
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("article_platform_homepage");
        echo "\">Blogueur en Séries </a>";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

            <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/articlePlatform/js/example.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle:Advert:newart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 89,  136 => 86,  133 => 85,  125 => 21,  118 => 92,  116 => 85,  49 => 21,  33 => 7,  30 => 6,  11 => 3,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Advert/newart.html.twig #}*/
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/*   {% block body -%}*/
/*         <section id="wrapper">*/
/* */
/*             <header id="header">*/
/* */
/*                 <div class="top">*/
/* */
/* */
/*                 </div>*/
/* */
/* */
/* */
/* */
/*                 <hgroup>*/
/*                    */
/*             <h2>{% block blog_title %}<a href="{{ path('article_platform_homepage') }}">Blogueur en Séries </a>{% endblock %}</h2>*/
/* */
/*                 </hgroup>*/
/* */
/* */
/*             </header>*/
/* */
/* */
/*         <html lang=fr>*/
/* */
/* */
/* <!-- Formulaire -->*/
/* */
/* <body>*/
/* */
/* <div class="container">*/
/*   <h3>Ajouter un article</h3>*/
/* */
/*   <form class="form-horizontal" role="form">*/
/* */
/* */
/*     <div class="form-group">*/
/*       <label class="control-label col-sm-2" for="email">Votre Pseudonyme</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="email" class="form-control" id="email" placeholder="Entrer un Email">*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*       <label class="control-label col-sm-2" for="pwd">Rentrer votre article</label>*/
/*       <div class="col-sm-10">          */
/*         <input type="article" class="form-control" id="artcl" placeholder="Entrer un article">*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">        */
/*       <div class="col-sm-offset-2 col-sm-10">*/
/*         <div class="checkbox">*/
/*           <label><input type="checkbox"> se souvenir de moi</label>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">        */
/*       <div class="col-sm-offset-2 col-sm-10">*/
/*         <button type="submit" class="btn btn-default">Soumettre</button>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </form>*/
/* */
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
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
/*             {% endblock -%}*/
/* */
/* */
