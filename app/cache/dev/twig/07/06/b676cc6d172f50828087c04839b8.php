<?php

/* JazzywebAulasMentorAlimentosBundle:Default:buscarPorNombre.html.twig */
class __TwigTemplate_0706b676cc6d172f50828087c04839b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JazzywebAulasMentorAlimentosBundle::layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JazzywebAulasMentorAlimentosBundle::layout.html.twig";
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
 <form name=\"formBusqueda\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("JAMAB_buscar");
        echo "\" method=\"POST\">

      <table>
          <tr>
              <td>nombre alimento:</td>
              <td><input type=\"text\" name=\"nombre\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\">(puedes utilizar '%' como comodín)</td>

              <td><input type=\"submit\" value=\"buscar\"></td>
          </tr>
      </table>

      </table>

  </form>

  ";
        // line 20
        if ((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado"))) {
            // line 21
            echo "  ";
            $this->env->loadTemplate("JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig")->display(array_merge($context, array("alimentos" => (isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")))));
            // line 22
            echo "  ";
        }
        // line 23
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:buscarPorNombre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  57 => 21,  55 => 20,  42 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
