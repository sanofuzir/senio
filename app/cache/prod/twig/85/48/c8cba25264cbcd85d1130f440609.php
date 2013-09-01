<?php

/* CoreBundle:Default:email.html.twig */
class __TwigTemplate_8548c8cba25264cbcd85d1130f440609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<h2>Rezultati ankete </h2>
<table class=\"table table-condensed table-hover\">
  <thead>
    <tr>
      <th>Brskalnik</th>
      <th>Število glasov</th>
      <th>Odstotek</th>
      <th>&nbsp;</th>
    </tr>
  </thead>

  <tbody>
     
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["num_of_votes"]) ? $context["num_of_votes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 17
                echo "        <tr>
            <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "browser"), "html", null, true);
                echo "</td>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), 1), "html", null, true);
                echo "</td>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), 1) * 100) / $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 1)), 1, ".", " "), "html", null, true);
                echo " %</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Default:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  70 => 23,  61 => 20,  57 => 19,  53 => 18,  50 => 17,  45 => 16,  41 => 15,  26 => 2,  20 => 1,);
    }
}
