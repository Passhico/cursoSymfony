<?php

/* AppBundle:pruebas:index.html.twig */
class __TwigTemplate_2f385e854fe027b44629afcb43d47fa380cd7de3389515f659f0b7be4e7844ec extends Twig_Template
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
        $__internal_68d3347c6e7b080e985e33c19919dcd77d9d906fc90c2296df8baee4cfae92fa = $this->env->getExtension("native_profiler");
        $__internal_68d3347c6e7b080e985e33c19919dcd77d9d906fc90c2296df8baee4cfae92fa->enter($__internal_68d3347c6e7b080e985e33c19919dcd77d9d906fc90c2296df8baee4cfae92fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")), "html", null, true);
        
        $__internal_68d3347c6e7b080e985e33c19919dcd77d9d906fc90c2296df8baee4cfae92fa->leave($__internal_68d3347c6e7b080e985e33c19919dcd77d9d906fc90c2296df8baee4cfae92fa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pruebas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {{texto}}*/
/* {{numero}}*/
