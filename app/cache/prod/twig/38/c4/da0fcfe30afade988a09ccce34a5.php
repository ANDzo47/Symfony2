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
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"cabecera\">
  <h1>Información de alimentos</h1>
</div>

<div id=\"menu\">
<hr/>
  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("final_proyecto_home");
        echo "\">inicio</a> |
<hr/>
</div>

<div id=\"contenido\">
";
        // line 19
        $this->displayBlock('contenido', $context, $blocks);
        // line 22
        echo "</div>

<div id=\"pie\">
<hr/>
<div align=\"center\">- pie de página -</div>
</div>

";
    }

    // line 19
    public function block_contenido($context, array $blocks = array())
    {
        // line 20
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
        return array (  75 => 20,  72 => 19,  61 => 22,  59 => 19,  51 => 14,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  36 => 7,  31 => 4,  28 => 3,);
    }
}
