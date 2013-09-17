<?php

/* FinalProyectoBundle::layout.html.twig */
class __TwigTemplate_38c4da0fcfe30afade988a09ccce34a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div id=\"cabecera\">
  <h1>Información de alimentos</h1>
</div>

<div id=\"menu\">
<hr/>
  <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("final_proyecto_home");
        echo "\">inicio</a> |
<hr/>
</div>

<div id=\"contenido\">
";
        // line 24
        $this->displayBlock('contenido', $context, $blocks);
        // line 27
        echo "</div>

<div id=\"pie\">
<hr/>
<div align=\"center\">- pie de página -</div>
</div>

";
    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "FinalProyectoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  87 => 24,  76 => 27,  74 => 24,  66 => 19,  58 => 13,  49 => 9,  44 => 8,  34 => 4,  31 => 3,  55 => 12,  51 => 11,  48 => 10,  41 => 7,  37 => 5,  32 => 4,  29 => 3,);
    }
}
