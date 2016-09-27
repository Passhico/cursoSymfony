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
        $__internal_987645c170164f4895d51bb5a64ce67fe28767e17145a23f055521961756e274 = $this->env->getExtension("native_profiler");
        $__internal_987645c170164f4895d51bb5a64ce67fe28767e17145a23f055521961756e274->enter($__internal_987645c170164f4895d51bb5a64ce67fe28767e17145a23f055521961756e274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987645c170164f4895d51bb5a64ce67fe28767e17145a23f055521961756e274->leave($__internal_987645c170164f4895d51bb5a64ce67fe28767e17145a23f055521961756e274_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e6cc21da70da2c22cea632a452cc2fbd6905cd127f3080246893422a51c49bd = $this->env->getExtension("native_profiler");
        $__internal_9e6cc21da70da2c22cea632a452cc2fbd6905cd127f3080246893422a51c49bd->enter($__internal_9e6cc21da70da2c22cea632a452cc2fbd6905cd127f3080246893422a51c49bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e6cc21da70da2c22cea632a452cc2fbd6905cd127f3080246893422a51c49bd->leave($__internal_9e6cc21da70da2c22cea632a452cc2fbd6905cd127f3080246893422a51c49bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d3ad3f14e1fd1415f85d4311969eb9e2052820422ff642b949e527fdd426c9d = $this->env->getExtension("native_profiler");
        $__internal_7d3ad3f14e1fd1415f85d4311969eb9e2052820422ff642b949e527fdd426c9d->enter($__internal_7d3ad3f14e1fd1415f85d4311969eb9e2052820422ff642b949e527fdd426c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d3ad3f14e1fd1415f85d4311969eb9e2052820422ff642b949e527fdd426c9d->leave($__internal_7d3ad3f14e1fd1415f85d4311969eb9e2052820422ff642b949e527fdd426c9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c856e6edfc4f29d6cc7d44fde7693f324307cf8d55db14bea1a6f8401a041c0 = $this->env->getExtension("native_profiler");
        $__internal_3c856e6edfc4f29d6cc7d44fde7693f324307cf8d55db14bea1a6f8401a041c0->enter($__internal_3c856e6edfc4f29d6cc7d44fde7693f324307cf8d55db14bea1a6f8401a041c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3c856e6edfc4f29d6cc7d44fde7693f324307cf8d55db14bea1a6f8401a041c0->leave($__internal_3c856e6edfc4f29d6cc7d44fde7693f324307cf8d55db14bea1a6f8401a041c0_prof);

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
