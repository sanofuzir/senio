<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_7516097dbeda2d81dd3010e67f4ebbd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Anketa";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Rezultati ankete </h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_add_questionnaire");
        echo "\"><i class=\"icon-plus-sign\"></i> Glasuj</a>
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
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["num_of_votes"]) ? $context["num_of_votes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 22
                echo "        <tr>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "browser"), "html", null, true);
                echo "</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), 1), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), 1) * 100) / $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 1)), 1, ".", " "), "html", null, true);
                echo " %</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  86 => 28,  77 => 25,  73 => 24,  69 => 23,  66 => 22,  61 => 21,  57 => 20,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
