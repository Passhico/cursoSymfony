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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43df241d697118dc8332fdd727f57abcd76a3afca822c0520412ac140eab03b2 = $this->env->getExtension("native_profiler");
        $__internal_43df241d697118dc8332fdd727f57abcd76a3afca822c0520412ac140eab03b2->enter($__internal_43df241d697118dc8332fdd727f57abcd76a3afca822c0520412ac140eab03b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43df241d697118dc8332fdd727f57abcd76a3afca822c0520412ac140eab03b2->leave($__internal_43df241d697118dc8332fdd727f57abcd76a3afca822c0520412ac140eab03b2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_742b28f6ccb4874d9595590f0a41eb99dcc7bc64098fe159c14c3cdad01e07b1 = $this->env->getExtension("native_profiler");
        $__internal_742b28f6ccb4874d9595590f0a41eb99dcc7bc64098fe159c14c3cdad01e07b1->enter($__internal_742b28f6ccb4874d9595590f0a41eb99dcc7bc64098fe159c14c3cdad01e07b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")), "html", null, true);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
        echo "
    
    ";
        // line 7
        $context["variable"] = "hola twig";
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
        echo "
    
    ";
        // line 13
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 2)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 15
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "producto", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        // line 18
        echo "    
    ";
        // line 19
        $context["fecha"] = twig_date_converter($this->env);
        // line 20
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "
";
        
        $__internal_742b28f6ccb4874d9595590f0a41eb99dcc7bc64098fe159c14c3cdad01e07b1->leave($__internal_742b28f6ccb4874d9595590f0a41eb99dcc7bc64098fe159c14c3cdad01e07b1_prof);

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
        return array (  94 => 21,  89 => 20,  87 => 19,  84 => 18,  81 => 17,  70 => 15,  65 => 14,  62 => 13,  56 => 8,  54 => 7,  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     {{texto}}*/
/*     {{numero}}*/
/*     {{fruta.manzana}}*/
/*     */
/*     {%set variable= "hola twig"%}*/
/*     {{variable}}*/
/*     */
/*     {#*/
/*         Esto es un comentario de Twig . */
/*     #}*/
/*     {%if productos|length > 2%}*/
/*         {% for producto in productos %}*/
/*             <li>{{producto.producto}} - {{producto.precio}}</li>*/
/*         {%endfor%}*/
/*     {%endif%}*/
/*     */
/*     {%set fecha = date()%}*/
/*     {{dump(fecha)}}*/
/*     {{dump(productos)}}*/
/* {%endblock%}*/
