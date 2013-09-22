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
    <script type=\"text/javascript\" src=\"http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js\"></script>
";
    }

    // line 11
    public function block_contenido($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"infobox-wrapper\">

    <div id=\"infobox\">

        <img id=\"deleteMarkerButton\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/final_proyecto/images/remove_marker.png"), "html", null, true);
        echo "\" alt=\"Delete\" />
        <form id=\"deleteMarkerForm\" name=\"deleteMarkerForm\" method=\"POST\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("final_proyecto_delete_marker");
        echo "\" >

            <div id=\"infobox-container\">
                <div id=\"infobox-name\"></div>
                <div id=\"infobox-address\"></div>
                <input type=\"hidden\" name=\"deleteMarkerId\" id=\"deleteMarkerId\" value=\"\">
            </div>

        </form>

    </div>
</div>

<div id=\"map\" style=\"width: 500px; height: 300px\"></div>
<div>
    <h1> Search Locations </h1>
    <form id=\"mapForm\" name=\"mapForm\" method=\"POST\" action=\"";
        // line 34
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
        // line 47
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
        return array (  98 => 47,  82 => 34,  63 => 18,  59 => 17,  52 => 12,  49 => 11,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
