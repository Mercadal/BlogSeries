<?php

/* ::base.html.twig */
class __TwigTemplate_69e924eea4c7819da38eab68e05b097f68f0ca00c96d76d08c1fed710b8639a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- app/Resources/views/base.html.twig -->
<html>



    <head>

  <title>Blogueur en Séries</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/articleplatform/css/screen.css"), "html", null, true);
        echo "\" >

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 45%;
      margin: auto;
  }
  </style>



    </head>




    <body>


<div style=\"background-image:url(";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/articleplatform/images/parquet.jpg"), "html", null, true);
        echo "); background-repeat: repeat;\" >


        <section id=\"wrapper\">

            <header id=\"header\">

                <div class=\"top\">

<!-- barre de navigation -->

<nav class=\"navbar navbar-inverse navbar-custom navbar-fixed-top\" >

    <div class=\"container-fluid\">
  <ul class=\"nav navbar-nav\">
    <li class=\"active\"><a href=\"#\">Blogueur en Séries</a></li>
    <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("article_platform_homepage");
        echo "\">Accueil</a></li>
    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("article_platform_about");
        echo "\">À propos</a></li>
    <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("article_platform_newart");
        echo "\">Nouvel article de série</a></li>
  </ul>

    </div>

</nav>

                </div>



            </header>


            <div class=\"container\" style=\"margin-top: 80px;\">


  

                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

                    <!-- Les indicateurs -->

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
                    </ol>


                    <!-- Wrapper for slides -->


                    <div class=\"carousel-inner\" role=\"listbox\">

                        <div class=\"item active\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/bb.jpg"), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"Breaking bad\" width=\"460\" height=\"345\"/>
                            <div class=\"carousel-caption\">
                                <h3 style=\"color: #1e6fb8; \"></h3>
                                <p></p>
                            </div>
                        </div>




                        <div class=\"item\">
                            <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/got.jpg"), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"Game of Thrones\" width=\"460\" height=\"345\"/>
                            <div class=\"carousel-caption\">
                                <h3>Game of thrones</h3>
                                <p>\"A telltale games series\"</p>
                            </div>
                        </div>



                        <div class=\"item\">
                            <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/pb.jpg"), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"Peaky blinders\" width=\"460\" height=\"345\"/>

                            <div class=\"carousel-caption\">
                                <h3>Peaky blinders</h3>
                                <p>du bookmaking au groupe criminel </p>
                            </div>
                        </div>



                        <div class=\"item\">
                            <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/aw.png"), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"Awake\" width=\"460\" height=\"345\"/>
                            <div class=\"carousel-caption\">
                                <h3>Awake</h3>
                                <p></p>
                            </div>
                        </div>

                    </div>



                    <!-- Page carousel suivante et Page précédentes-->


                    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>



            <section class=\"main-col\">


                ";
        // line 153
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "

            </section>




            <aside class=\"sidebar\">
                ";
        // line 162
        $this->displayBlock('sidebar', $context, $blocks);
        // line 163
        echo "            </aside>


            <div id=\"footer\">
                ";
        // line 167
        $this->displayBlock('footer', $context, $blocks);
        // line 169
        echo "            </div>
        </section>



        ";
        // line 174
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "


      <footer class=\"row\">


  <div class=\"container\">
  <ul class=\"pagination\">

  </ul>
</div>

<div class=\"container\">

<ul class=\"pager\">

</ul>

</div>
      </footer>

</div>

    </body>



</html>";
    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 162
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 167
    public function block_footer($context, array $blocks = array())
    {
        // line 168
        echo "                ";
    }

    // line 174
    public function block_javascripts($context, array $blocks = array())
    {
        // line 175
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

            <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/articlePlatform/js/example.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 178,  287 => 175,  284 => 174,  280 => 168,  277 => 167,  272 => 162,  266 => 153,  235 => 181,  233 => 174,  226 => 169,  224 => 167,  218 => 163,  216 => 162,  206 => 154,  204 => 153,  171 => 123,  157 => 112,  144 => 102,  130 => 91,  90 => 54,  86 => 53,  82 => 52,  63 => 36,  38 => 14,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!-- app/Resources/views/base.html.twig -->*/
/* <html>*/
/* */
/* */
/* */
/*     <head>*/
/* */
/*   <title>Blogueur en Séries</title>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/articleplatform/css/screen.css') }}" >*/
/* */
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*   <style>*/
/*   .carousel-inner > .item > img,*/
/*   .carousel-inner > .item > a > img {*/
/*       width: 45%;*/
/*       margin: auto;*/
/*   }*/
/*   </style>*/
/* */
/* */
/* */
/*     </head>*/
/* */
/* */
/* */
/* */
/*     <body>*/
/* */
/* */
/* <div style="background-image:url({{ asset('bundles/articleplatform/images/parquet.jpg')}}); background-repeat: repeat;" >*/
/* */
/* */
/*         <section id="wrapper">*/
/* */
/*             <header id="header">*/
/* */
/*                 <div class="top">*/
/* */
/* <!-- barre de navigation -->*/
/* */
/* <nav class="navbar navbar-inverse navbar-custom navbar-fixed-top" >*/
/* */
/*     <div class="container-fluid">*/
/*   <ul class="nav navbar-nav">*/
/*     <li class="active"><a href="#">Blogueur en Séries</a></li>*/
/*     <li><a href="{{ path('article_platform_homepage') }}">Accueil</a></li>*/
/*     <li><a href="{{ path('article_platform_about') }}">À propos</a></li>*/
/*     <li><a href="{{ path('article_platform_newart') }}">Nouvel article de série</a></li>*/
/*   </ul>*/
/* */
/*     </div>*/
/* */
/* </nav>*/
/* */
/*                 </div>*/
/* */
/* */
/* */
/*             </header>*/
/* */
/* */
/*             <div class="container" style="margin-top: 80px;">*/
/* */
/* */
/*   */
/* */
/*                 <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/* */
/*                     <!-- Les indicateurs -->*/
/* */
/*                     <ol class="carousel-indicators">*/
/*                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*                     </ol>*/
/* */
/* */
/*                     <!-- Wrapper for slides -->*/
/* */
/* */
/*                     <div class="carousel-inner" role="listbox">*/
/* */
/*                         <div class="item active">*/
/*                             <img src="{{ asset('images/bb.jpg') }}" class="img-rounded" alt="Breaking bad" width="460" height="345"/>*/
/*                             <div class="carousel-caption">*/
/*                                 <h3 style="color: #1e6fb8; "></h3>*/
/*                                 <p></p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/* */
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('images/got.jpg') }}" class="img-rounded" alt="Game of Thrones" width="460" height="345"/>*/
/*                             <div class="carousel-caption">*/
/*                                 <h3>Game of thrones</h3>*/
/*                                 <p>"A telltale games series"</p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('images/pb.jpg') }}" class="img-rounded" alt="Peaky blinders" width="460" height="345"/>*/
/* */
/*                             <div class="carousel-caption">*/
/*                                 <h3>Peaky blinders</h3>*/
/*                                 <p>du bookmaking au groupe criminel </p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('images/aw.png') }}" class="img-rounded" alt="Awake" width="460" height="345"/>*/
/*                             <div class="carousel-caption">*/
/*                                 <h3>Awake</h3>*/
/*                                 <p></p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/*                     <!-- Page carousel suivante et Page précédentes-->*/
/* */
/* */
/*                     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                         <span class="sr-only">Previous</span>*/
/*                     </a>*/
/*                     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                         <span class="sr-only">Next</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*             <section class="main-col">*/
/* */
/* */
/*                 {% block body %}  {% endblock %}*/
/* */
/* */
/*             </section>*/
/* */
/* */
/* */
/* */
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
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
/*       <footer class="row">*/
/* */
/* */
/*   <div class="container">*/
/*   <ul class="pagination">*/
/* */
/*   </ul>*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/* <ul class="pager">*/
/* */
/* </ul>*/
/* */
/* </div>*/
/*       </footer>*/
/* */
/* </div>*/
/* */
/*     </body>*/
/* */
/* */
/* */
/* </html>*/
