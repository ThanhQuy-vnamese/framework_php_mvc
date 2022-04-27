<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/pages/statistic-covid.twig */
class __TwigTemplate_87df02280b32e9291cf7bbddc0b7cac7568bed0197670af677cd9411a3ea2a06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>medical</title>
\t\t<!--Phần style, boostrap-->
\t\t";
        // line 10
        echo twig_include($this->env, $context, "user/components/head.twig");
        echo "

\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t";
        // line 16
        echo twig_include($this->env, $context, "user/components/menu.twig");
        echo "
\t\t<div class=\"container-fluid bg-light p-5 text-center my-3\">
\t\t\t<h1 class=\"\">Covid-19 Tracker</h1>
\t\t\t<h5 class=\"text-muted\">An opensource project to keep track of all the COVID-19 cases around the world.</h5>
\t\t</div>

\t\t<div class=\"container my-5\">
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-4 text-warning\">
\t\t\t\t\t<h5>Confirmed</h5>
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, ($context["total_confirmed"] ?? null), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-success\">
\t\t\t\t\t<h5>Recovered</h5>
\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, ($context["total_recovered"] ?? null), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-danger\">
\t\t\t\t\t<h5>Deceased</h5>
\t\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, ($context["total_deaths"] ?? null), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Countries</th>
\t\t\t\t\t\t\t<th scope=\"col\">Confirmed</th>
\t\t\t\t\t\t\t<th scope=\"col\">Recovered</th>
\t\t\t\t\t\t\t<th scope=\"col\">Deceased</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody></tbody>
\t\t\t\t\t<tbody>

\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 53
            echo "\t\t\t\t\t\t\t";
            $context["increase"] = (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["value"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["days_count"] ?? null)] ?? null) : null), "confirmed", [], "any", false, false, false, 53) - twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["value"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["days_count_prev"] ?? null)] ?? null) : null), "confirmed", [], "any", false, false, false, 53));
            // line 54
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 55
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["value"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["days_count"] ?? null)] ?? null) : null), "confirmed", [], "any", false, false, false, 57), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 58
            if ((0 !== twig_compare(($context["increase"] ?? null), 0))) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t<small class=\"text-danger pl-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, ($context["increase"] ?? null), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["value"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["days_count"] ?? null)] ?? null) : null), "recovered", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["value"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["days_count"] ?? null)] ?? null) : null), "deaths", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
                         
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</body>
</html></div><!-- footer part start-->";
        // line 74
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "<!-- footer part end--></body></html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/statistic-covid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 74,  152 => 69,  142 => 65,  138 => 64,  135 => 63,  130 => 61,  126 => 59,  124 => 58,  120 => 57,  115 => 55,  112 => 54,  109 => 53,  105 => 52,  84 => 34,  77 => 30,  70 => 26,  57 => 16,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>medical</title>
\t\t<!--Phần style, boostrap-->
\t\t{{ include('user/components/head.twig') }}

\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t{{ include('user/components/menu.twig')}}
\t\t<div class=\"container-fluid bg-light p-5 text-center my-3\">
\t\t\t<h1 class=\"\">Covid-19 Tracker</h1>
\t\t\t<h5 class=\"text-muted\">An opensource project to keep track of all the COVID-19 cases around the world.</h5>
\t\t</div>

\t\t<div class=\"container my-5\">
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-4 text-warning\">
\t\t\t\t\t<h5>Confirmed</h5>
\t\t\t\t\t{{ total_confirmed }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-success\">
\t\t\t\t\t<h5>Recovered</h5>
\t\t\t\t\t{{ total_recovered }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-danger\">
\t\t\t\t\t<h5>Deceased</h5>
\t\t\t\t\t{{ total_deaths }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Countries</th>
\t\t\t\t\t\t\t<th scope=\"col\">Confirmed</th>
\t\t\t\t\t\t\t<th scope=\"col\">Recovered</th>
\t\t\t\t\t\t\t<th scope=\"col\">Deceased</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody></tbody>
\t\t\t\t\t<tbody>

\t\t\t\t\t\t{% for key, value in data %}
\t\t\t\t\t\t\t{% set increase = value[days_count].confirmed - value[days_count_prev].confirmed %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">{{ key }}</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{ value[days_count].confirmed }}
\t\t\t\t\t\t\t\t\t{% if increase != 0  %}
\t\t\t\t\t\t\t\t\t\t<small class=\"text-danger pl-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ increase }}</small>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{ value[days_count].recovered}}</td>
\t\t\t\t\t\t\t\t<td>{{ value[days_count].deaths}}</td>
\t\t\t\t\t\t\t</tr>
                         
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</body>
</html></div><!-- footer part start-->{{ include('user/components/footer.twig')}}<!-- footer part end--></body></html>
", "user/pages/statistic-covid.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\statistic-covid.twig");
    }
}
