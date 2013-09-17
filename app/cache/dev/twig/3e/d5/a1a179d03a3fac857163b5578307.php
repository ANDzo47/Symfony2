<?php

/* FinalProyectoBundle:Project:home.html.twig */
class __TwigTemplate_3ed5a1a179d03a3fac857163b5578307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FinalProyectoBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FinalProyectoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/js/proyect.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?sensor=false\"></script>
";
    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"map\" style=\"width: 500px; height: 300px\"></div>
<div>
    <h1> Search Locations </h1>
    <form id=\"mapForm\" name=\"mapForm\" method=\"POST\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("final_proyecto_get_markers");
        echo "\" >
        <input type=\"text\" id=\"projectId\" name=\"projectId\" /><br>
        <input type=\"submit\" value=\"Cargar Markers\">
    </form>
</div>

<div>
    <h1> Search Location </h1>

    Address: <input type=\"text\" id=\"addressSave\" name=\"addressSave\" />
    <button type=\"button\" id=\"buttonGeoCode\">Go!</button>

    <h1> Save Location </h1>
    <form id=\"saveMarker\" name=\"saveMarker\" method=\"POST\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("final_proyecto_add_marker");
        echo "\" >
        Project Id: <input type=\"text\" id=\"projectIdSave\" name=\"projectIdSave\" /><br>
        Name: <input type=\"text\" id=\"nameSave\" name=\"nameSave\" /><br>
        Type: <input type=\"text\" id=\"typeSave\" name=\"typeSave\" /><br><br>

        <input type=\"submit\" value=\"Guardar Marcador\">
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "FinalProyectoBundle:Project:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  57 => 15,  51 => 11,  48 => 10,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
