<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c2078f157febeaaa7409a40a41bc6d2165ace2e944e1338237ec9791e5ec3476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f894b0ce4182186a9732c3837707d3df885acbdda056fecc4069c87664b11506 = $this->env->getExtension("native_profiler");
        $__internal_f894b0ce4182186a9732c3837707d3df885acbdda056fecc4069c87664b11506->enter($__internal_f894b0ce4182186a9732c3837707d3df885acbdda056fecc4069c87664b11506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f894b0ce4182186a9732c3837707d3df885acbdda056fecc4069c87664b11506->leave($__internal_f894b0ce4182186a9732c3837707d3df885acbdda056fecc4069c87664b11506_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c362681a7dd4a89a324a4e68bee2b7f62f515d294f05414f7b9344b29d4d73a = $this->env->getExtension("native_profiler");
        $__internal_7c362681a7dd4a89a324a4e68bee2b7f62f515d294f05414f7b9344b29d4d73a->enter($__internal_7c362681a7dd4a89a324a4e68bee2b7f62f515d294f05414f7b9344b29d4d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c362681a7dd4a89a324a4e68bee2b7f62f515d294f05414f7b9344b29d4d73a->leave($__internal_7c362681a7dd4a89a324a4e68bee2b7f62f515d294f05414f7b9344b29d4d73a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_642be5a777788fbfe8f59df46f679cef9124620bb5c23144bdc5f3ed0439cd65 = $this->env->getExtension("native_profiler");
        $__internal_642be5a777788fbfe8f59df46f679cef9124620bb5c23144bdc5f3ed0439cd65->enter($__internal_642be5a777788fbfe8f59df46f679cef9124620bb5c23144bdc5f3ed0439cd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_642be5a777788fbfe8f59df46f679cef9124620bb5c23144bdc5f3ed0439cd65->leave($__internal_642be5a777788fbfe8f59df46f679cef9124620bb5c23144bdc5f3ed0439cd65_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d4c01e09c73d5d264b2f049753041949e6e166b4858cae87ffbe151d617fa82 = $this->env->getExtension("native_profiler");
        $__internal_3d4c01e09c73d5d264b2f049753041949e6e166b4858cae87ffbe151d617fa82->enter($__internal_3d4c01e09c73d5d264b2f049753041949e6e166b4858cae87ffbe151d617fa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d4c01e09c73d5d264b2f049753041949e6e166b4858cae87ffbe151d617fa82->leave($__internal_3d4c01e09c73d5d264b2f049753041949e6e166b4858cae87ffbe151d617fa82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
