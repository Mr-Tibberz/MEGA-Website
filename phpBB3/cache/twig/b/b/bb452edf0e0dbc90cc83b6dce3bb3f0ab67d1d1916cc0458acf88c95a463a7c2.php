<?php

/* acp_scss.html */
class __TwigTemplate_bb452edf0e0dbc90cc83b6dce3bb3f0ab67d1d1916cc0458acf88c95a463a7c2 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_scss.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_STYLE_DETAILS"]) ? $context["S_STYLE_DETAILS"] : null)) {
            // line 6
            echo "\t<a href=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
";
        // line 9
        if ((isset($context["L_TITLE"]) ? $context["L_TITLE"] : null)) {
            echo "<h1>";
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>";
        }
        // line 10
        echo "
";
        // line 11
        if ((isset($context["L_EXPLAIN"]) ? $context["L_EXPLAIN"] : null)) {
            echo "<p>";
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>";
        }
        // line 12
        echo "
";
        // line 13
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "results", array()))) {
            // line 14
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "results", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["results"]) {
                // line 15
                echo "\t\t";
                if ($this->getAttribute($context["results"], "ERROR", array())) {
                    // line 16
                    echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                    // line 17
                    echo $this->getAttribute($context["results"], "STYLE_NAME", array());
                    echo "</h3>
\t\t\t<p>";
                    // line 18
                    echo $this->getAttribute($context["results"], "ERROR", array());
                    echo "</p>
\t\t</div>
\t\t";
                } elseif ($this->getAttribute(                // line 20
$context["results"], "SUCCESS", array())) {
                    // line 21
                    echo "\t\t<div class=\"successbox\">
\t\t\t<h3>";
                    // line 22
                    echo $this->getAttribute($context["results"], "STYLE_NAME", array());
                    echo "</h3>
\t\t\t<p>";
                    // line 23
                    echo $this->env->getExtension('phpbb')->lang("SCSS_COMPILED");
                    echo "</p>
\t\t</div>
\t";
                }
                // line 26
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['results'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        echo "
";
        // line 29
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "styles_list", array()))) {
            // line 30
            echo "\t<table class=\"table1 styles\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("STYLE_NAME");
            echo "</th>
\t\t<th>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("STATUS");
            echo "</th>
\t\t<th width=\"25%\" style=\"white-space: nowrap; text-align: center;\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("ACTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "styles_list", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["styles_list"]) {
                // line 39
                echo "\t<tbody id=\"styles-list-";
                echo $this->getAttribute($context["styles_list"], "S_ROW_COUNT", array());
                echo "\">
\t<tr";
                // line 40
                if ((($this->getAttribute($context["styles_list"], "CSS_TIME", array()) > 0) && ($this->getAttribute($context["styles_list"], "CSS_TIME", array()) > $this->getAttribute($context["styles_list"], "SCSS_TIME", array())))) {
                    echo " class=\"row-inactive\"";
                }
                echo ">
\t\t<td>
\t\t\t";
                // line 42
                echo $this->getAttribute($context["styles_list"], "STYLE_NAME", array());
                echo "
\t\t\t<span class=\"style-path\"><br />";
                // line 43
                echo $this->env->getExtension('phpbb')->lang("STYLE_PATH");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " styles/";
                echo $this->getAttribute($context["styles_list"], "DIR", array());
                echo "/</span>
\t\t</td>
\t\t<td>";
                // line 45
                echo $this->getAttribute($context["styles_list"], "L_STATUS", array());
                echo "</td>
\t\t<td class=\"actions\">
\t\t\t<a href=\"";
                // line 47
                echo $this->getAttribute($context["styles_list"], "U_COMPILE", array());
                echo "\">";
                if ((($this->getAttribute($context["styles_list"], "CSS_TIME", array()) > 0) && ($this->getAttribute($context["styles_list"], "CSS_TIME", array()) > $this->getAttribute($context["styles_list"], "SCSS_TIME", array())))) {
                    echo $this->env->getExtension('phpbb')->lang("RECOMPILE_THEME");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("COMPILE_THEME");
                }
                echo "</a>
\t\t</td>
\t</tr>
\t</tbody>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styles_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t</table>
";
        }
        // line 54
        echo "
";
        // line 55
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_scss.html", 55)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_scss.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 55,  191 => 54,  187 => 52,  170 => 47,  165 => 45,  157 => 43,  153 => 42,  146 => 40,  141 => 39,  137 => 38,  131 => 35,  127 => 34,  123 => 33,  118 => 30,  116 => 29,  113 => 28,  106 => 26,  100 => 23,  96 => 22,  93 => 21,  91 => 20,  86 => 18,  82 => 17,  79 => 16,  76 => 15,  71 => 14,  69 => 13,  66 => 12,  60 => 11,  57 => 10,  51 => 9,  48 => 8,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
