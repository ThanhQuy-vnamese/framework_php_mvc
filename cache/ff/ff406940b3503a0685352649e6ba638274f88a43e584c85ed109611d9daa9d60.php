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

/* user/pages/detail-doctor.twig */
class __TwigTemplate_7dc288192567534cc0ae4299f1470ab4a42835db1d2fcc55cb1c7f55d4443212 extends Template
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
\t\t<style>
\t\t\tbody {
\t\t\t\tmargin-top: 20px;
\t\t\t\tcolor: #1a202c;
\t\t\t\ttext-align: left;
\t\t\t}
\t\t\t.main-body {
\t\t\t\tpadding: 15px;
\t\t\t}
\t\t\t.card {
\t\t\t\tbox-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
\t\t\t}

\t\t\t.card {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\tmin-width: 0;
\t\t\t\tword-wrap: break-word;
\t\t\t\tbackground-color: #fff;
\t\t\t\tbackground-clip: border-box;
\t\t\t\tborder: 0 solid rgba(0, 0, 0, 0.125);
\t\t\t\tborder-radius: 0.25rem;
\t\t\t}

\t\t\t.card-body {
\t\t\t\tflex: 1 1 auto;
\t\t\t\tmin-height: 1px;
\t\t\t\tpadding: 1rem;
\t\t\t\theight: 360px;
\t\t\t}

\t\t\t.gutters-sm {
\t\t\t\tmargin-right: -8px;
\t\t\t\tmargin-left: -8px;
\t\t\t}

\t\t\t.gutters-sm > .col,
\t\t\t.gutters-sm > [class*=col-] {
\t\t\t\tpadding-right: 8px;
\t\t\t\tpadding-left: 8px;
\t\t\t}
\t\t\t.mb-3,
\t\t\t.my-3 {
\t\t\t\tmargin-bottom: 1rem !important;
\t\t\t}

\t\t\t.bg-gray-300 {
\t\t\t\tbackground-color: #e2e8f0;
\t\t\t}
\t\t\t.h-100 {
\t\t\t\theight: 100% !important;
\t\t\t}
\t\t\t.shadow-none {
\t\t\t\tbox-shadow: none !important;
\t\t\t}
\t\t</style>

\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t";
        // line 73
        echo twig_include($this->env, $context, "user/components/menu.twig");
        echo "
\t\t<!-- Header part end-->
\t\t<!-- breadcrumb start-->
\t\t\t<section class=\"breadcrumb_part breadcrumb_bg\"> <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner\">
\t\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t\t<h2>Detail Doctor</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->
\t\t<!--::doctor_part start::-->
\t\t<div class=\"container\">
\t\t\t<div class=\"main-body\">
\t\t\t\t<div class=\"row gutters-sm\">
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center\">
\t\t\t\t\t\t\t\t\t<img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 99), "first_name", [], "any", false, false, false, 99), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 99), "last_name", [], "any", false, false, false, 99), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">Full Stack Developer</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted font-size-sm\">Bay Area, San Francisco, CA</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Follow</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary\">Message</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Full Name</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 117), "first_name", [], "any", false, false, false, 117), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 117), "last_name", [], "any", false, false, false, 117), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Email</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 126), "email", [], "any", false, false, false, 126), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Phone</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 135), "phone", [], "any", false, false, false, 135), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Mobile</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t(320) 380-4539
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Address</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 153), "address", [], "any", false, false, false, 153), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info \" href=\"";
        // line 159
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["doctor/book-clinic"]), "html", null, true);
        echo "?doctor_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "doctorProfile"], "method", false, false, false, 159), "user_id", [], "any", false, false, false, 159), "html", null, true);
        echo "&user_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user"], "method", false, false, false, 159), "user_id", [], "any", false, false, false, 159), "html", null, true);
        echo "\">Đặt lịch khám</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row gutters-sm\">
\t\t\t\t\t<h2>Lịch làm việc</h2>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t";
        // line 176
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "

\t\t<!-- footer part end-->

\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/detail-doctor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 176,  222 => 159,  213 => 153,  192 => 135,  180 => 126,  166 => 117,  143 => 99,  114 => 73,  48 => 10,  37 => 1,);
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
\t\t<style>
\t\t\tbody {
\t\t\t\tmargin-top: 20px;
\t\t\t\tcolor: #1a202c;
\t\t\t\ttext-align: left;
\t\t\t}
\t\t\t.main-body {
\t\t\t\tpadding: 15px;
\t\t\t}
\t\t\t.card {
\t\t\t\tbox-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
\t\t\t}

\t\t\t.card {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\tmin-width: 0;
\t\t\t\tword-wrap: break-word;
\t\t\t\tbackground-color: #fff;
\t\t\t\tbackground-clip: border-box;
\t\t\t\tborder: 0 solid rgba(0, 0, 0, 0.125);
\t\t\t\tborder-radius: 0.25rem;
\t\t\t}

\t\t\t.card-body {
\t\t\t\tflex: 1 1 auto;
\t\t\t\tmin-height: 1px;
\t\t\t\tpadding: 1rem;
\t\t\t\theight: 360px;
\t\t\t}

\t\t\t.gutters-sm {
\t\t\t\tmargin-right: -8px;
\t\t\t\tmargin-left: -8px;
\t\t\t}

\t\t\t.gutters-sm > .col,
\t\t\t.gutters-sm > [class*=col-] {
\t\t\t\tpadding-right: 8px;
\t\t\t\tpadding-left: 8px;
\t\t\t}
\t\t\t.mb-3,
\t\t\t.my-3 {
\t\t\t\tmargin-bottom: 1rem !important;
\t\t\t}

\t\t\t.bg-gray-300 {
\t\t\t\tbackground-color: #e2e8f0;
\t\t\t}
\t\t\t.h-100 {
\t\t\t\theight: 100% !important;
\t\t\t}
\t\t\t.shadow-none {
\t\t\t\tbox-shadow: none !important;
\t\t\t}
\t\t</style>

\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t{{ include('user/components/menu.twig')}}
\t\t<!-- Header part end-->
\t\t<!-- breadcrumb start-->
\t\t\t<section class=\"breadcrumb_part breadcrumb_bg\"> <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner\">
\t\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t\t<h2>Detail Doctor</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->
\t\t<!--::doctor_part start::-->
\t\t<div class=\"container\">
\t\t\t<div class=\"main-body\">
\t\t\t\t<div class=\"row gutters-sm\">
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center\">
\t\t\t\t\t\t\t\t\t<img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<h4>{{ session.get('doctorProfile').first_name}} {{ session.get('doctorProfile').last_name  }}</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">Full Stack Developer</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted font-size-sm\">Bay Area, San Francisco, CA</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Follow</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary\">Message</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Full Name</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t{{ session.get('doctorProfile').first_name}} {{ session.get('doctorProfile').last_name  }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Email</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t{{ session.get('doctorProfile').email}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Phone</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t{{ session.get('doctorProfile').phone}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Mobile</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t(320) 380-4539
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Address</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t\t{{ session.get('doctorProfile').address}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info \" href=\"{{ createLink('doctor/book-clinic')}}?doctor_id={{session.get('doctorProfile').user_id}}&user_id={{session.get('user').user_id }}\">Đặt lịch khám</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row gutters-sm\">
\t\t\t\t\t<h2>Lịch làm việc</h2>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t{{ include('user/components/footer.twig')}}

\t\t<!-- footer part end-->

\t</body>

</html>
", "user/pages/detail-doctor.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\detail-doctor.twig");
    }
}
