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

/* user/pages/detail-blog.twig */
class __TwigTemplate_9b0a3c58ee94d345309a29b1320dad1024b4c665fef87a31b24a9290f02755c6 extends Template
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
\t\t\t\t\t\t\t\t<h2>Detail Blog</h2>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user"], "method", false, false, false, 99), "first_name", [], "any", false, false, false, 99), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user"], "method", false, false, false, 99), "last_name", [], "any", false, false, false, 99), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 110), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content", [], "any", false, false, false, 116), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t";
        // line 131
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "

\t\t<!-- footer part end-->

\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/detail-blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 131,  168 => 116,  159 => 110,  143 => 99,  114 => 73,  48 => 10,  37 => 1,);
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
\t\t\t\t\t\t\t\t<h2>Detail Blog</h2>
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
\t\t\t\t\t\t\t\t\t\t<h4>{{ session.get('user').first_name}} {{ session.get('user').last_name}}</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">{{ blog.title }}</h2>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">{{ blog.content }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t{{ include('user/components/footer.twig')}}

\t\t<!-- footer part end-->

\t</body>

</html>
", "user/pages/detail-blog.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\detail-blog.twig");
    }
}
