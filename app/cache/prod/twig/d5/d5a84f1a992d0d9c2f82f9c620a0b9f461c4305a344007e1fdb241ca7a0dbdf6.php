<?php

/* articlePlatformBundle:Blog:index.html.twig */
class __TwigTemplate_adc105053815af16aad0e76b238b6eb0db766ba93bf28131d11d75bdd7b62b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "articlePlatformBundle:Blog:index.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "


    <h1>Bienvenue sur notre blog</h1>


    <p>Dans ce blog vous pourrez découvrir les séries qui vous correspondent, de nouveaux genres, mais aussi des séries dont peu de gens connaissent l'existence, mais qui font l'unanimité chez les internautes! </p>



    <h1>Notre sélection</h1>


    <ul style=\"margin-top: 10px;\">
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("blog_new");
        echo "\">
                <h3>Créer un article...</h3>
            </a>
        </li>
    </ul>






    <table class=\"table table-responsive\" style=\"margin-top: 10px;\">
        <thead>
            <tr>
                <th>A l'image</th>
                <th>Titre</th>
                <th>Auteur de l'article</th>
                <th>Nos articles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "

            <tr>
        <div class=\"container-fluid\">
            <div class=\"table-responsive\">


                <td><p>  <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("images/" . $this->getAttribute($context["entity"], "id", array())) . ".jpeg")), "html", null, true);
            echo "\" alt=\"\"  width=\"410\" height=\"220\" /> </p></td>






                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>



                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "author", array()), "html", null, true);
            echo "</td>



                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "blog", array()), "html", null, true);
            echo "</td>




                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
        </div>
        </div>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tbody>
    </table>





     <footer class=\"row\">


  <div class=\"container\">

<ul class=\"pagination\">
    <li><a href=\"#\">1</a></li>
</ul>

<ul class=\"pager\">
  <li><a href=\"#\">Previous</a></li>
  <li><a href=\"#\">Next</a></li>
</ul>



  </div>


      </footer>




    ";
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 87,  127 => 78,  121 => 75,  110 => 67,  103 => 63,  96 => 59,  86 => 52,  77 => 45,  73 => 44,  48 => 22,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*     <h1>Bienvenue sur notre blog</h1>*/
/* */
/* */
/*     <p>Dans ce blog vous pourrez découvrir les séries qui vous correspondent, de nouveaux genres, mais aussi des séries dont peu de gens connaissent l'existence, mais qui font l'unanimité chez les internautes! </p>*/
/* */
/* */
/* */
/*     <h1>Notre sélection</h1>*/
/* */
/* */
/*     <ul style="margin-top: 10px;">*/
/*         <li>*/
/*             <a href="{{ path('blog_new') }}">*/
/*                 <h3>Créer un article...</h3>*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <table class="table table-responsive" style="margin-top: 10px;">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>A l'image</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Auteur de l'article</th>*/
/*                 <th>Nos articles</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/* */
/* */
/*             <tr>*/
/*         <div class="container-fluid">*/
/*             <div class="table-responsive">*/
/* */
/* */
/*                 <td><p>  <img src="{{asset('images/' ~ entity.id ~ '.jpeg') }}" alt=""  width="410" height="220" /> </p></td>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                 <td>{{ entity.title }}</td>*/
/* */
/* */
/* */
/*                 <td>{{ entity.author }}</td>*/
/* */
/* */
/* */
/*                 <td>{{ entity.blog }}</td>*/
/* */
/* */
/* */
/* */
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('blog_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('blog_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*         </div>*/
/*         </div>*/
/*             </tr>*/
/* */
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* */
/* */
/* */
/*      <footer class="row">*/
/* */
/* */
/*   <div class="container">*/
/* */
/* <ul class="pagination">*/
/*     <li><a href="#">1</a></li>*/
/* </ul>*/
/* */
/* <ul class="pager">*/
/*   <li><a href="#">Previous</a></li>*/
/*   <li><a href="#">Next</a></li>*/
/* </ul>*/
/* */
/* */
/* */
/*   </div>*/
/* */
/* */
/*       </footer>*/
/* */
/* */
/* */
/* */
/*     {% endblock %}*/
/* */
