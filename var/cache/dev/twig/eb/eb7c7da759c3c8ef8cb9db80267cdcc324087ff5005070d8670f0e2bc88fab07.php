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
        $__internal_bb34f51fe45451cf914e9d6402917b42f34dc491e27f032b097115f2d57624cd = $this->env->getExtension("native_profiler");
        $__internal_bb34f51fe45451cf914e9d6402917b42f34dc491e27f032b097115f2d57624cd->enter($__internal_bb34f51fe45451cf914e9d6402917b42f34dc491e27f032b097115f2d57624cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb34f51fe45451cf914e9d6402917b42f34dc491e27f032b097115f2d57624cd->leave($__internal_bb34f51fe45451cf914e9d6402917b42f34dc491e27f032b097115f2d57624cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46763552f86e97fda39a7fe4304817e31a706a8cfe5f2bc566d4dca8fe3102f0 = $this->env->getExtension("native_profiler");
        $__internal_46763552f86e97fda39a7fe4304817e31a706a8cfe5f2bc566d4dca8fe3102f0->enter($__internal_46763552f86e97fda39a7fe4304817e31a706a8cfe5f2bc566d4dca8fe3102f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46763552f86e97fda39a7fe4304817e31a706a8cfe5f2bc566d4dca8fe3102f0->leave($__internal_46763552f86e97fda39a7fe4304817e31a706a8cfe5f2bc566d4dca8fe3102f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c09a5d0bee0d615795eb5286bfbc37f9633f6e39e7fd26dcc5759f6d00e1d8f = $this->env->getExtension("native_profiler");
        $__internal_1c09a5d0bee0d615795eb5286bfbc37f9633f6e39e7fd26dcc5759f6d00e1d8f->enter($__internal_1c09a5d0bee0d615795eb5286bfbc37f9633f6e39e7fd26dcc5759f6d00e1d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1c09a5d0bee0d615795eb5286bfbc37f9633f6e39e7fd26dcc5759f6d00e1d8f->leave($__internal_1c09a5d0bee0d615795eb5286bfbc37f9633f6e39e7fd26dcc5759f6d00e1d8f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b078f9daba6a7f147d1e853ea886969091b4beac2ad1de21b7d1c01969e6a49 = $this->env->getExtension("native_profiler");
        $__internal_6b078f9daba6a7f147d1e853ea886969091b4beac2ad1de21b7d1c01969e6a49->enter($__internal_6b078f9daba6a7f147d1e853ea886969091b4beac2ad1de21b7d1c01969e6a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b078f9daba6a7f147d1e853ea886969091b4beac2ad1de21b7d1c01969e6a49->leave($__internal_6b078f9daba6a7f147d1e853ea886969091b4beac2ad1de21b7d1c01969e6a49_prof);

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
