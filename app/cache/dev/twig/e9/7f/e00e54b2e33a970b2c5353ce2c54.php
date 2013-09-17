<?php

/* JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig */
class __TwigTemplate_e97fe00e54b2e33a970b2c5353ce2c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <table>
      <tr>
          <th>alimento (por 100g)</th>
          <th>energía (Kcal)</th>
          <th>grasa (g)</th>
      </tr>
      ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alimentos"]) ? $context["alimentos"] : $this->getContext($context, "alimentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alimento"]) {
            // line 8
            echo "      <tr>
          <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "nombre"), "html", null, true);
            echo "</td>
          <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "energia"), "html", null, true);
            echo "</td>
          <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "grasatotal"), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alimento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
  </table>";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  38 => 10,  27 => 7,  19 => 1,  89 => 25,  86 => 24,  75 => 27,  73 => 24,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  36 => 6,  34 => 9,  31 => 8,  28 => 3,);
    }
}
