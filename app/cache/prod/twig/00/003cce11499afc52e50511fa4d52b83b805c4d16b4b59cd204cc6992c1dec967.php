<?php

/* articlePlatformBundle::preferences.html.twig */
class __TwigTemplate_007356efc3027b38996ee27a237dddde495a4bb34e68dfc5777e825c731599ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "pictureName", array())) {
            // line 2
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getWebPath", array(), "method")), "html", null, true);
            echo "\" />
";
        } else {
            // line 4
            echo "    Pas d'image de profil chargée !
";
        }
        // line 6
        echo "
<h1>Charger une image de profil</h1>

<form action=\"#\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <input type=\"submit\" value=\"Uploader\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "articlePlatformBundle::preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  36 => 9,  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if user.pictureName %}*/
/*     <img src="{{ asset(user.getWebPath()) }}" />*/
/* {% else %}*/
/*     Pas d'image de profil chargée !*/
/* {% endif %}*/
/* */
/* <h1>Charger une image de profil</h1>*/
/* */
/* <form action="#" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/* */
/*     <input type="submit" value="Uploader" />*/
/* </form>*/
/* */
