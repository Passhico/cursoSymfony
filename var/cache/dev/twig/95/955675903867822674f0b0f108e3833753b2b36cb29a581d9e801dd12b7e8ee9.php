<?php

/* AppBundle:pruebas:index.html.twig */
class __TwigTemplate_2f385e854fe027b44629afcb43d47fa380cd7de3389515f659f0b7be4e7844ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:pruebas:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a736e36a7df57a7127dbd7fb9ec5b69218b968d7c4d33091c092598887947b = $this->env->getExtension("native_profiler");
        $__internal_d3a736e36a7df57a7127dbd7fb9ec5b69218b968d7c4d33091c092598887947b->enter($__internal_d3a736e36a7df57a7127dbd7fb9ec5b69218b968d7c4d33091c092598887947b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a736e36a7df57a7127dbd7fb9ec5b69218b968d7c4d33091c092598887947b->leave($__internal_d3a736e36a7df57a7127dbd7fb9ec5b69218b968d7c4d33091c092598887947b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dbd33d74b2ca11c2a1449592a5e03642885c13af705dd1662c651b24ec4ba30 = $this->env->getExtension("native_profiler");
        $__internal_4dbd33d74b2ca11c2a1449592a5e03642885c13af705dd1662c651b24ec4ba30->enter($__internal_4dbd33d74b2ca11c2a1449592a5e03642885c13af705dd1662c651b24ec4ba30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Render de los productos ";
        
        $__internal_4dbd33d74b2ca11c2a1449592a5e03642885c13af705dd1662c651b24ec4ba30->leave($__internal_4dbd33d74b2ca11c2a1449592a5e03642885c13af705dd1662c651b24ec4ba30_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_5fe7cb480c9e17ecc08630ddf9a4edc1ca28122aa1360e494e73013f442ebe34 = $this->env->getExtension("native_profiler");
        $__internal_5fe7cb480c9e17ecc08630ddf9a4edc1ca28122aa1360e494e73013f442ebe34->enter($__internal_5fe7cb480c9e17ecc08630ddf9a4edc1ca28122aa1360e494e73013f442ebe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "<hr/>
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")), "html", null, true);
        echo "<hr/>
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
        echo "<hr/>
    ";
        // line 7
        $this->displayParentBlock("container", $context, $blocks);
        echo "<hr/>
    

    ";
        // line 10
        $context["variable"] = "hola twig";
        // line 11
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
        echo "<hr/>
    
    ";
        // line 16
        echo "    <ul>
        ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 2)) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 19
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "producto", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "    </ul>
    ";
        // line 23
        $context["fecha"] = twig_date_converter($this->env, "+2 days");
        // line 24
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["gajo"]) ? $context["gajo"] : $this->getContext($context, "gajo")));
        echo "
    
    ";
        // line 29
        echo "    ";
        echo twig_include($this->env, $context, "AppBundle::partial.html.twig");
        echo " 
    
";
        
        $__internal_5fe7cb480c9e17ecc08630ddf9a4edc1ca28122aa1360e494e73013f442ebe34->leave($__internal_5fe7cb480c9e17ecc08630ddf9a4edc1ca28122aa1360e494e73013f442ebe34_prof);

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
        return array (  124 => 29,  119 => 26,  115 => 25,  110 => 24,  108 => 23,  105 => 22,  102 => 21,  91 => 19,  86 => 18,  84 => 17,  81 => 16,  75 => 11,  73 => 10,  67 => 7,  63 => 6,  59 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}{{parent()}} Render de los productos {% endblock %}*/
/* {% block container %}*/
/*     {{texto}}<hr/>*/
/*     {{numero}}<hr/>*/
/*     {{fruta.manzana}}<hr/>*/
/*     {{parent()}}<hr/>*/
/*     */
/* */
/*     {%set variable= "hola twig"%}*/
/*     {{variable}}<hr/>*/
/*     */
/*     {#*/
/*         Esto es un comentario de Twig . */
/*     #}*/
/*     <ul>*/
/*         {%if productos|length > 2%}*/
/*             {% for producto in productos %}*/
/*                 <li>{{producto.producto}} - {{producto.precio}}</li>*/
/*             {%endfor%}*/
/*         {%endif%}*/
/*     </ul>*/
/*     {%set fecha = date("+2 days")%}*/
/*     {{dump(fecha)}}*/
/*     {{dump(productos)}}*/
/*     {{dump(gajo)}}*/
/*     */
/*     {# Aquí incluimos el partial   #}*/
/*     {{include('AppBundle::partial.html.twig')}} */
/*     */
/* {%endblock%}*/
