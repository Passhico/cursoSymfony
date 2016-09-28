<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52e7cfac9daea2fec168f823b129822bed50a7347229d036db33a988bdd548a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fc633433fdbf243311a88ca1f52d472b6a15d9bfa648d72813edf5823394bd9 = $this->env->getExtension("native_profiler");
        $__internal_4fc633433fdbf243311a88ca1f52d472b6a15d9bfa648d72813edf5823394bd9->enter($__internal_4fc633433fdbf243311a88ca1f52d472b6a15d9bfa648d72813edf5823394bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc633433fdbf243311a88ca1f52d472b6a15d9bfa648d72813edf5823394bd9->leave($__internal_4fc633433fdbf243311a88ca1f52d472b6a15d9bfa648d72813edf5823394bd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3621ee98d27665f70e8693acd8d1a88601fc974ac2a55806d41a35b297420415 = $this->env->getExtension("native_profiler");
        $__internal_3621ee98d27665f70e8693acd8d1a88601fc974ac2a55806d41a35b297420415->enter($__internal_3621ee98d27665f70e8693acd8d1a88601fc974ac2a55806d41a35b297420415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3621ee98d27665f70e8693acd8d1a88601fc974ac2a55806d41a35b297420415->leave($__internal_3621ee98d27665f70e8693acd8d1a88601fc974ac2a55806d41a35b297420415_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d404873c41e209ef216c71e896c3a14fa0e58cb372c3e232b7bae54ec83c68f2 = $this->env->getExtension("native_profiler");
        $__internal_d404873c41e209ef216c71e896c3a14fa0e58cb372c3e232b7bae54ec83c68f2->enter($__internal_d404873c41e209ef216c71e896c3a14fa0e58cb372c3e232b7bae54ec83c68f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d404873c41e209ef216c71e896c3a14fa0e58cb372c3e232b7bae54ec83c68f2->leave($__internal_d404873c41e209ef216c71e896c3a14fa0e58cb372c3e232b7bae54ec83c68f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb5d7456ce2c116bcf0315b9eabb8be1056a8529600bf4b04b70e1e9eb529b7f = $this->env->getExtension("native_profiler");
        $__internal_eb5d7456ce2c116bcf0315b9eabb8be1056a8529600bf4b04b70e1e9eb529b7f->enter($__internal_eb5d7456ce2c116bcf0315b9eabb8be1056a8529600bf4b04b70e1e9eb529b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eb5d7456ce2c116bcf0315b9eabb8be1056a8529600bf4b04b70e1e9eb529b7f->leave($__internal_eb5d7456ce2c116bcf0315b9eabb8be1056a8529600bf4b04b70e1e9eb529b7f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
