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

/* user/pages/list_book_clinic.twig */
class __TwigTemplate_776b992c64f5409952b0a3d5c38b0b7974f989b0f00083fce340b1458a124635 extends Template
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
\t\t<!-- Header part end-->

\t\t<!--::doctor_part start::-->

\t\t\t<div class=\"container\"> <div class=\"row justify-content-center\">
\t\t\t\t<h3>Danh sách lịch khám</h3>
\t\t\t</div>
\t\t\t<section class=\"pt-5 pb-5\">
\t\t\t\t";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "makeAppointment"], "method", false, false, false, 25)) {
            // line 26
            echo "\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "makeAppointment"], "method", false, false, false, 26), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 29
        if (twig_test_empty(($context["list_book"] ?? null))) {
            // line 30
            echo "\t\t\t\t\t\t<h1>Bạn chưa đặt lịch</h1>
\t\t\t\t\t";
        } else {
            // line 32
            echo "
\t\t\t\t\t\t<div class=\"row mb-md-2\">
\t\t\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_book"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card shadow-sm border-light mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/jpeg;base64,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\" class=\"card-img-top\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"font-weight-normal\">Họ tên:
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "full_name", [], "any", false, false, false, 43), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Ngày hẹn: ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_start", [], "any", false, false, false, 48), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Địa chỉ: 456 khu 2 thị trấn Cái Bè</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Trạng thái: 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 57), 0))) {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tĐang chờ duyệt
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 59
$context["item"], "status", [], "any", false, false, false, 59), 1))) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tĐã duyệt
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 61
$context["item"], "status", [], "any", false, false, false, 61), 2))) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHủy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t<div class=\"row py-4 mt-md-5\">
\t\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-lg shadow btn-primary mt-1\">Browse all</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t";
        // line 86
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "

\t\t<!-- footer part end-->
\t</body>
</html></body></html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/list_book_clinic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 86,  157 => 74,  152 => 71,  140 => 64,  136 => 62,  134 => 61,  131 => 60,  129 => 59,  126 => 58,  124 => 57,  112 => 48,  104 => 43,  94 => 35,  90 => 34,  86 => 32,  82 => 30,  80 => 29,  77 => 28,  71 => 26,  69 => 25,  57 => 16,  48 => 10,  37 => 1,);
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
\t\t<!-- Header part end-->

\t\t<!--::doctor_part start::-->

\t\t\t<div class=\"container\"> <div class=\"row justify-content-center\">
\t\t\t\t<h3>Danh sách lịch khám</h3>
\t\t\t</div>
\t\t\t<section class=\"pt-5 pb-5\">
\t\t\t\t{% if(Session.hasFlash('makeAppointment')) %}
\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('makeAppointment') }}</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{% if list_book is empty %}
\t\t\t\t\t\t<h1>Bạn chưa đặt lịch</h1>
\t\t\t\t\t{% else %}

\t\t\t\t\t\t<div class=\"row mb-md-2\">
\t\t\t\t\t\t\t{% for item in list_book %}
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card shadow-sm border-light mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/jpeg;base64,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\" class=\"card-img-top\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"font-weight-normal\">Họ tên:
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ item.full_name }}
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Ngày hẹn: {{ item.date_start }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Địa chỉ: 456 khu 2 thị trấn Cái Bè</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Trạng thái: 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if item.status == 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tĐang chờ duyệt
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif item.status == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tĐã duyệt
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif item.status == 2 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHủy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>

\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"row py-4 mt-md-5\">
\t\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-lg shadow btn-primary mt-1\">Browse all</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t{{ include('user/components/footer.twig')}}

\t\t<!-- footer part end-->
\t</body>
</html></body></html>
", "user/pages/list_book_clinic.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\list_book_clinic.twig");
    }
}
