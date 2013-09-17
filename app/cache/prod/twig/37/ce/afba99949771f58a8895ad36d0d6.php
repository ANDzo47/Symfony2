<?php

/* FinalProyectoBundle:Default:startSession.html.twig */
class __TwigTemplate_37ceafba99949771f58a8895ad36d0d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FinalProyectoBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Session Started</h1>

<form name=\"input\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("final_proyecto_close_session");
        echo "\" method=\"post\">
    <input type=\"submit\" value=\"logout\">
</form>

";
    }

    public function getTemplateName()
    {
        return "FinalProyectoBundle:Default:startSession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
