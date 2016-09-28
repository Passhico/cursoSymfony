<?php

/* ::base.html.twig */
class __TwigTemplate_036cf1bf01a0e6b1cec5ce9a72b942df221085c5af164db49f7e980d7a89b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07c11a53b31cf0a6daafdcf7a84be234e5d9bb53e76bd17e507a042fff304c61 = $this->env->getExtension("native_profiler");
        $__internal_07c11a53b31cf0a6daafdcf7a84be234e5d9bb53e76bd17e507a042fff304c61->enter($__internal_07c11a53b31cf0a6daafdcf7a84be234e5d9bb53e76bd17e507a042fff304c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <style>
            .container{
                border: 1px solid black;
                width: 85%;
                height: 300px;
                background-color: #00ff00;
            }
        </style>
    </head>
    <body>
        <div class=\"container\">
        ";
        // line 20
        $this->displayBlock('container', $context, $blocks);
        // line 23
        echo "        </div>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "        
    </body>
</html>
";
        
        $__internal_07c11a53b31cf0a6daafdcf7a84be234e5d9bb53e76bd17e507a042fff304c61->leave($__internal_07c11a53b31cf0a6daafdcf7a84be234e5d9bb53e76bd17e507a042fff304c61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_142f01e468bf3af404bef31c18adbdae381cb179177b5f69b63a44288e4ae3e4 = $this->env->getExtension("native_profiler");
        $__internal_142f01e468bf3af404bef31c18adbdae381cb179177b5f69b63a44288e4ae3e4->enter($__internal_142f01e468bf3af404bef31c18adbdae381cb179177b5f69b63a44288e4ae3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plantilla Base!";
        
        $__internal_142f01e468bf3af404bef31c18adbdae381cb179177b5f69b63a44288e4ae3e4->leave($__internal_142f01e468bf3af404bef31c18adbdae381cb179177b5f69b63a44288e4ae3e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af836957047374d421fa7920c0b322de6eeeb8e44e79f821dfba863415e99f61 = $this->env->getExtension("native_profiler");
        $__internal_af836957047374d421fa7920c0b322de6eeeb8e44e79f821dfba863415e99f61->enter($__internal_af836957047374d421fa7920c0b322de6eeeb8e44e79f821dfba863415e99f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af836957047374d421fa7920c0b322de6eeeb8e44e79f821dfba863415e99f61->leave($__internal_af836957047374d421fa7920c0b322de6eeeb8e44e79f821dfba863415e99f61_prof);

    }

    // line 20
    public function block_container($context, array $blocks = array())
    {
        $__internal_c500706e1451f810358e983f6de8968efd9c5566b3c024a8cf70985e3199986f = $this->env->getExtension("native_profiler");
        $__internal_c500706e1451f810358e983f6de8968efd9c5566b3c024a8cf70985e3199986f->enter($__internal_c500706e1451f810358e983f6de8968efd9c5566b3c024a8cf70985e3199986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 21
        echo "            contenido por defecto 
        ";
        
        $__internal_c500706e1451f810358e983f6de8968efd9c5566b3c024a8cf70985e3199986f->leave($__internal_c500706e1451f810358e983f6de8968efd9c5566b3c024a8cf70985e3199986f_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c301020a3a429861eaa07c203eb8a9239bee8c7babf1a32fbead340eab115139 = $this->env->getExtension("native_profiler");
        $__internal_c301020a3a429861eaa07c203eb8a9239bee8c7babf1a32fbead340eab115139->enter($__internal_c301020a3a429861eaa07c203eb8a9239bee8c7babf1a32fbead340eab115139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c301020a3a429861eaa07c203eb8a9239bee8c7babf1a32fbead340eab115139->leave($__internal_c301020a3a429861eaa07c203eb8a9239bee8c7babf1a32fbead340eab115139_prof);

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
        return array (  109 => 24,  101 => 21,  95 => 20,  84 => 6,  72 => 5,  62 => 25,  60 => 24,  57 => 23,  55 => 20,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Plantilla Base!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*         <style>*/
/*             .container{*/
/*                 border: 1px solid black;*/
/*                 width: 85%;*/
/*                 height: 300px;*/
/*                 background-color: #00ff00;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*         {% block container %}*/
/*             contenido por defecto */
/*         {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
