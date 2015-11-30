<?php

/* articlePlatformBundle:Blog:show.html.twig */
class __TwigTemplate_b2c2f2828e328124509068dad889b580785f292e0b0daf91312f40de3543af6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "articlePlatformBundle:Blog:show.html.twig", 1);
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
        echo "


    <h1>Informations sur l'article</h1>

        <table class=\"record_properties\">
            <tbody>

            <tr>
            <th>File</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "file", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
            <th>Id</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Title</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Author</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "author", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Blog</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "blog", array()), "html", null, true);
        echo "</td>
            </tr>



            <tr>
                <th>Created</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                  <th>Updated</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>


            </tbody>
        </table>




            <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("blog");
        echo "\">
                Retour aux articles
            </a>
        </li>
        <li>
            <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                modifier
            </a>
        </li>
        <li>";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 71,  118 => 67,  110 => 62,  95 => 50,  87 => 45,  77 => 38,  69 => 33,  61 => 28,  52 => 22,  43 => 16,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*     <h1>Informations sur l'article</h1>*/
/* */
/*         <table class="record_properties">*/
/*             <tbody>*/
/* */
/*             <tr>*/
/*             <th>File</th>*/
/*             <td>{{ entity.file }}</td>*/
/*             </tr>*/
/* */
/* */
/*             <tr>*/
/*             <th>Id</th>*/
/*             <td>{{ entity.id }}</td>*/
/*             </tr>*/
/* */
/* */
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ entity.title }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Author</th>*/
/*                 <td>{{ entity.author }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Blog</th>*/
/*                 <td>{{ entity.blog }}</td>*/
/*             </tr>*/
/* */
/* */
/* */
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{{ entity.created|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                   <th>Updated</th>*/
/*                     <td>{{ entity.updated|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/* */
/* */
/*             </tbody>*/
/*         </table>*/
/* */
/* */
/* */
/* */
/*             <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('blog') }}">*/
/*                 Retour aux articles*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('blog_edit', { 'id': entity.id }) }}">*/
/*                 modifier*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
