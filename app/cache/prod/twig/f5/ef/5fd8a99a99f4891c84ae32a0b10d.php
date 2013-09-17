<?php

/* FinalProyectoBundle:Default:home.html.twig */
class __TwigTemplate_f5ef5fd8a99a99f4891c84ae32a0b10d extends Twig_Template
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
<h1>Contenido Del Home</h1>

<form id=\"contactForm\" name=\"contactForm\" method=\"POST\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("final_proyecto_start_session");
        echo "\" >
    Username: <input type=\"text\" name=\"username\" id=\"username\"><br>
    Password: <input type=\"password\" name=\"password\" id=\"password\"><br>
    <input type=\"submit\" value=\"Submit\">
</form>

";
    }

    public function getTemplateName()
    {
        return "FinalProyectoBundle:Default:home.html.twig";
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
