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
        $context['_seq'] = twig_ensure_traversable((isset($context["num_of_votes"]) ? $context["num_of_votes"] : $this->getContext($context, "num_of_votes")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 22
                echo "        <tr>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : $this->getContext($context, "item2")), "browser"), "html", null, true);
                echo "</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : $this->getContext($context, "item2")), 1), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["item2"]) ? $context["item2"] : $this->getContext($context, "item2")), 1) * 100) / $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1)), 1, ".", " "), "html", null, true);
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
        return array (  77 => 25,  76 => 24,  70 => 23,  53 => 18,  20 => 1,  207 => 59,  192 => 82,  160 => 80,  137 => 58,  127 => 55,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 51,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 58,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 41,  89 => 20,  85 => 25,  75 => 17,  68 => 20,  56 => 9,  87 => 25,  21 => 1,  26 => 2,  93 => 28,  88 => 38,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 75,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 23,  47 => 8,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 52,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 22,  55 => 15,  52 => 21,  50 => 17,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 8,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 53,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 17,  60 => 6,  57 => 20,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 18,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
