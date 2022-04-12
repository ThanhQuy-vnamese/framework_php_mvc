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
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mb-md-2\">
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-sm border-light mb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://via.placeholder.com/500x350/5fa9f8/ffffff\" class=\"card-img-top\" alt=\"image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"font-weight-normal\">Bác sĩ: Huỳnh Anh</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Ngày hẹn: 9H 15-07-2022</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Địa chỉ: 456 khu 2 thị trấn Cái Bè</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Trạng thái: Đã duyệt</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info\">Hủy</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
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
\t\t";
        // line 68
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "

\t\t<!-- footer part end-->

\t</body>

</html>
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
        return array (  112 => 68,  57 => 16,  48 => 10,  37 => 1,);
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
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mb-md-2\">
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-sm border-light mb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://via.placeholder.com/500x350/5fa9f8/ffffff\" class=\"card-img-top\" alt=\"image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"font-weight-normal\">Bác sĩ: Huỳnh Anh</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Ngày hẹn: 9H 15-07-2022</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Địa chỉ: 456 khu 2 thị trấn Cái Bè</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Trạng thái: Đã duyệt</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info\">Hủy</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
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

</html>
", "user/pages/list_book_clinic.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\list_book_clinic.twig");
    }
}
