<?php

/* JazzywebAulasMentorAlimentosBundle::layout.html.twig */
class __TwigTemplate_bc4e01b97d4d24e60bdd732aee5274bd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jazzywebaulasmentoralimentos/css/estilo.css"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("JAMAB_homepage");
        echo "\">inicio</a> |
  <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("JAMAB_listar");
        echo "\">ver alimentos</a> |
  <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("JAMAB_insertar");
        echo "\">insertar alimento</a> |
  <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("JAMAB_buscar");
        echo "\">buscar por nombre</a> |
  <a href=\"\">buscar por energia</a> |
  <a href=\"\">búsqueda combinada</a>
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
        return "JazzywebAulasMentorAlimentosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  86 => 24,  75 => 27,  73 => 24,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
