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

/* user/pages/book_clinic.twig */
class __TwigTemplate_edb4955590e0bdd040146c66336b335f5b69314356690bb1219ee3944a9e89b2 extends Template
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
\t\t";
        // line 9
        echo twig_include($this->env, $context, "user/components/head.twig");
        echo "

\t</head>

\t<body>
\t\t<!--::header part start::-->

\t\t<!-- Header part end-->
\t\t";
        // line 17
        echo twig_include($this->env, $context, "user/components/menu.twig");
        echo "
\t\t<!-- breadcrumb start-->

\t\t<!-- breadcrumb start-->

\t\t\t<div class=\"container\"> <div class=\"row md-5\">
\t\t\t\t<div class=\"col-12 md-5\">
\t\t\t\t\t<div class=\"card-title\" style=\"text-align:center\">
\t\t\t\t\t\t<h2>ĐẶT LỊCH HẸN</h2>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "makeAppointment"], "method", false, false, false, 27)) {
            // line 28
            echo "\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "makeAppointment"], "method", false, false, false, 28), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t<form action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["doctor/post-book-clinic"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_doctor\" value=";
        // line 31
        echo twig_escape_filter($this->env, ($context["id_doctor"] ?? null), "html", null, true);
        echo ">
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Họ</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"first-name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Tên</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"last-name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Địa chỉ</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"address\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Số điện thoại</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"phone\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Chọn ngày
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"date\" min=\"08:00\" max=\"17:00\" class=\"form-control\" id=\"name\" name=\"date\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Chọn giờ
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"time\" min=\"08:00\" max=\"17:00\" class=\"form-control\" id=\"name\" name=\"time\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"description\" class=\"col-sm-3 col-form-label\">Bệnh nhân có ghi chú khác</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"description\" rows=\"5\" name=\"description\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"description\" class=\"col-sm-3 col-form-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"form-control btn-info\" id=\"name\" name=\"submit\" value=\"Save\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--::regervation_part end::-->

\t\t<!-- footer part start-->
\t\t";
        // line 90
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "</body>
</html></body></html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/book_clinic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 90,  84 => 31,  79 => 30,  73 => 28,  71 => 27,  58 => 17,  47 => 9,  37 => 1,);
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
\t\t{{ include('user/components/head.twig') }}

\t</head>

\t<body>
\t\t<!--::header part start::-->

\t\t<!-- Header part end-->
\t\t{{ include('user/components/menu.twig')}}
\t\t<!-- breadcrumb start-->

\t\t<!-- breadcrumb start-->

\t\t\t<div class=\"container\"> <div class=\"row md-5\">
\t\t\t\t<div class=\"col-12 md-5\">
\t\t\t\t\t<div class=\"card-title\" style=\"text-align:center\">
\t\t\t\t\t\t<h2>ĐẶT LỊCH HẸN</h2>
\t\t\t\t\t</div>
\t\t\t\t{% if(Session.hasFlash('makeAppointment')) %}
\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('makeAppointment') }}</div>
\t\t\t\t{% endif %}
\t\t\t\t\t<form action=\"{{ redirect('doctor/post-book-clinic') }}\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_doctor\" value={{ id_doctor }}>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Họ</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"first-name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Tên</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"last-name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Địa chỉ</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"address\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Số điện thoại</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"phone\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Chọn ngày
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"date\" min=\"08:00\" max=\"17:00\" class=\"form-control\" id=\"name\" name=\"date\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">Chọn giờ
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"time\" min=\"08:00\" max=\"17:00\" class=\"form-control\" id=\"name\" name=\"time\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"description\" class=\"col-sm-3 col-form-label\">Bệnh nhân có ghi chú khác</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"description\" rows=\"5\" name=\"description\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"description\" class=\"col-sm-3 col-form-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"form-control btn-info\" id=\"name\" name=\"submit\" value=\"Save\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--::regervation_part end::-->

\t\t<!-- footer part start-->
\t\t{{ include('user/components/footer.twig')}}</body>
</html></body></html>
", "user/pages/book_clinic.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\book_clinic.twig");
    }
}
