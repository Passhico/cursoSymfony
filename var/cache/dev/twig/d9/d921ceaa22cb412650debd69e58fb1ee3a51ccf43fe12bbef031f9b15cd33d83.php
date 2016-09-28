<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6e604d2854dce0b2caa7225e9343d6c5b2ef4cd06bfd644067e5f611c9d3bbab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bc2e3e226b2c55178eab0ca6c9fbd46896d2cdbecb92130a86961d25b34de9eb = $this->env->getExtension("native_profiler");
        $__internal_bc2e3e226b2c55178eab0ca6c9fbd46896d2cdbecb92130a86961d25b34de9eb->enter($__internal_bc2e3e226b2c55178eab0ca6c9fbd46896d2cdbecb92130a86961d25b34de9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2e3e226b2c55178eab0ca6c9fbd46896d2cdbecb92130a86961d25b34de9eb->leave($__internal_bc2e3e226b2c55178eab0ca6c9fbd46896d2cdbecb92130a86961d25b34de9eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_270eb652ba3692ad63eb03b1c0c08341d461291bccd455f44672a95160832a60 = $this->env->getExtension("native_profiler");
        $__internal_270eb652ba3692ad63eb03b1c0c08341d461291bccd455f44672a95160832a60->enter($__internal_270eb652ba3692ad63eb03b1c0c08341d461291bccd455f44672a95160832a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_270eb652ba3692ad63eb03b1c0c08341d461291bccd455f44672a95160832a60->leave($__internal_270eb652ba3692ad63eb03b1c0c08341d461291bccd455f44672a95160832a60_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_429557798152c106efd5bb802c47a73647785d358fd9f1ff3dac0a30cc911c91 = $this->env->getExtension("native_profiler");
        $__internal_429557798152c106efd5bb802c47a73647785d358fd9f1ff3dac0a30cc911c91->enter($__internal_429557798152c106efd5bb802c47a73647785d358fd9f1ff3dac0a30cc911c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_429557798152c106efd5bb802c47a73647785d358fd9f1ff3dac0a30cc911c91->leave($__internal_429557798152c106efd5bb802c47a73647785d358fd9f1ff3dac0a30cc911c91_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19b9740fd0d1239e6bd51690ddd3d3626c05e67bd794dc5fa9977468ab2c6ba4 = $this->env->getExtension("native_profiler");
        $__internal_19b9740fd0d1239e6bd51690ddd3d3626c05e67bd794dc5fa9977468ab2c6ba4->enter($__internal_19b9740fd0d1239e6bd51690ddd3d3626c05e67bd794dc5fa9977468ab2c6ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_19b9740fd0d1239e6bd51690ddd3d3626c05e67bd794dc5fa9977468ab2c6ba4->leave($__internal_19b9740fd0d1239e6bd51690ddd3d3626c05e67bd794dc5fa9977468ab2c6ba4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
