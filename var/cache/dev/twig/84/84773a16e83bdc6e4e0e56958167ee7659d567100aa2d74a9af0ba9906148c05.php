<?php

/* base.html.twig */
class __TwigTemplate_036cf1bf01a0e6b1cec5ce9a72b942df221085c5af164db49f7e980d7a89b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_767d2cdefa8fa1e52ebbae0f4b990b036dc66014b2ecffa444dcdcbda2b85651 = $this->env->getExtension("native_profiler");
        $__internal_767d2cdefa8fa1e52ebbae0f4b990b036dc66014b2ecffa444dcdcbda2b85651->enter($__internal_767d2cdefa8fa1e52ebbae0f4b990b036dc66014b2ecffa444dcdcbda2b85651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            }
        </style>
    </head>
    <body>
        <div class=\"container\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "        
    </body>
</html>
";
        
        $__internal_767d2cdefa8fa1e52ebbae0f4b990b036dc66014b2ecffa444dcdcbda2b85651->leave($__internal_767d2cdefa8fa1e52ebbae0f4b990b036dc66014b2ecffa444dcdcbda2b85651_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b1de0557a6cfa678d523600b79fd66e2f7d63efe43b94ddf89d466b24f9cdf6 = $this->env->getExtension("native_profiler");
        $__internal_8b1de0557a6cfa678d523600b79fd66e2f7d63efe43b94ddf89d466b24f9cdf6->enter($__internal_8b1de0557a6cfa678d523600b79fd66e2f7d63efe43b94ddf89d466b24f9cdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b1de0557a6cfa678d523600b79fd66e2f7d63efe43b94ddf89d466b24f9cdf6->leave($__internal_8b1de0557a6cfa678d523600b79fd66e2f7d63efe43b94ddf89d466b24f9cdf6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39b1b9157c9d4faadced33075b5ec7d0ceb945ae8cce06d83b8f423393ec9bf6 = $this->env->getExtension("native_profiler");
        $__internal_39b1b9157c9d4faadced33075b5ec7d0ceb945ae8cce06d83b8f423393ec9bf6->enter($__internal_39b1b9157c9d4faadced33075b5ec7d0ceb945ae8cce06d83b8f423393ec9bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_39b1b9157c9d4faadced33075b5ec7d0ceb945ae8cce06d83b8f423393ec9bf6->leave($__internal_39b1b9157c9d4faadced33075b5ec7d0ceb945ae8cce06d83b8f423393ec9bf6_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_54915bf341652d3b6711a1a4bf837976dd3b4c96dd2e6de77a3066f8794240c5 = $this->env->getExtension("native_profiler");
        $__internal_54915bf341652d3b6711a1a4bf837976dd3b4c96dd2e6de77a3066f8794240c5->enter($__internal_54915bf341652d3b6711a1a4bf837976dd3b4c96dd2e6de77a3066f8794240c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "        ";
        
        $__internal_54915bf341652d3b6711a1a4bf837976dd3b4c96dd2e6de77a3066f8794240c5->leave($__internal_54915bf341652d3b6711a1a4bf837976dd3b4c96dd2e6de77a3066f8794240c5_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a412c32be1fa05107714aea982b2ad96d0237eb932c812e20608dd161122b418 = $this->env->getExtension("native_profiler");
        $__internal_a412c32be1fa05107714aea982b2ad96d0237eb932c812e20608dd161122b418->enter($__internal_a412c32be1fa05107714aea982b2ad96d0237eb932c812e20608dd161122b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a412c32be1fa05107714aea982b2ad96d0237eb932c812e20608dd161122b418->leave($__internal_a412c32be1fa05107714aea982b2ad96d0237eb932c812e20608dd161122b418_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  100 => 20,  94 => 19,  83 => 6,  71 => 5,  61 => 23,  59 => 22,  56 => 21,  54 => 19,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*         <style>*/
/*             .container{*/
/*                 border: 1px solid black;*/
/*                 width: 85%;*/
/*                 height: 300px;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
