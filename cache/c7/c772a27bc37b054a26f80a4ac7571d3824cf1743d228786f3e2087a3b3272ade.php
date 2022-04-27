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

/* user/pages/register.twig */
class __TwigTemplate_949169467b843f1bb5be33518c634fa4bd1ec59e31ae7511ea3b14a4889d8bd8 extends Template
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
\t\t<title>Register</title>
\t\t";
        // line 9
        echo twig_include($this->env, $context, "user/components/head.twig");
        echo "
\t\t<style>
\t\t\t.register {
\t\t\t\tbackground: -webkit-linear-gradient(left, #3931af, #00c6ff);
\t\t\t\tmargin-top: 3%;
\t\t\t\tpadding: 3%;
\t\t\t}
\t\t\t.register-left {
\t\t\t\ttext-align: center;
\t\t\t\tcolor: #fff;
\t\t\t\tmargin-top: 4%;
\t\t\t}
\t\t\t.register-left input {
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 1.5rem;
\t\t\t\tpadding: 2%;
\t\t\t\twidth: 60%;
\t\t\t\tbackground: #f8f9fa;
\t\t\t\tfont-weight: bold;
\t\t\t\tcolor: #383d41;
\t\t\t\tmargin-top: 30%;
\t\t\t\tmargin-bottom: 3%;
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t\t.register-right {
\t\t\t\tbackground: #f8f9fa;
\t\t\t\tborder-top-left-radius: 10% 50%;
\t\t\t\tborder-bottom-left-radius: 10% 50%;
\t\t\t}
\t\t\t.register-left img {
\t\t\t\tmargin-top: 15%;
\t\t\t\tmargin-bottom: 5%;
\t\t\t\twidth: 25%;
\t\t\t\t-webkit-animation: mover 2s infinite alternate;
\t\t\t\tanimation: mover 1s infinite alternate;
\t\t\t}
\t\t\t@-webkit-keyframes mover {
\t\t\t\t0% {
\t\t\t\t\ttransform: translateY(0);
\t\t\t\t}
\t\t\t\t100% {
\t\t\t\t\ttransform: translateY(-20px);
\t\t\t\t}
\t\t\t}
\t\t\t@keyframes mover {
\t\t\t\t0% {
\t\t\t\t\ttransform: translateY(0);
\t\t\t\t}
\t\t\t\t100% {
\t\t\t\t\ttransform: translateY(-20px);
\t\t\t\t}
\t\t\t}
\t\t\t.register-left p {
\t\t\t\tfont-weight: lighter;
\t\t\t\tpadding: 12%;
\t\t\t\tmargin-top: -9%;
\t\t\t}
\t\t\t.register .register-form {
\t\t\t\tpadding: 10%;
\t\t\t\tmargin-top: 10%;
\t\t\t}
\t\t\t.btnRegister {
\t\t\t\tfloat: right;
\t\t\t\tmargin-top: 10%;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 1.5rem;
\t\t\t\tpadding: 2%;
\t\t\t\tbackground: #0062cc;
\t\t\t\tcolor: #fff;
\t\t\t\tfont-weight: 600;
\t\t\t\twidth: 50%;
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t\t.register .nav-tabs {
\t\t\t\tmargin-top: 3%;
\t\t\t\tborder: none;
\t\t\t\tbackground: #0062cc;
\t\t\t\tborder-radius: 1.5rem;
\t\t\t\twidth: 28%;
\t\t\t\tfloat: right;
\t\t\t}
\t\t\t.register .nav-tabs .nav-link {
\t\t\t\tpadding: 2%;
\t\t\t\theight: 34px;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: #fff;
\t\t\t\tborder-top-right-radius: 1.5rem;
\t\t\t\tborder-bottom-right-radius: 1.5rem;
\t\t\t}
\t\t\t.register .nav-tabs .nav-link:hover {
\t\t\t\tborder: none;
\t\t\t}
\t\t\t.register .nav-tabs .nav-link.active {
\t\t\t\twidth: 100px;
\t\t\t\tcolor: #0062cc;
\t\t\t\tborder: 2px solid #0062cc;
\t\t\t\tborder-top-left-radius: 1.5rem;
\t\t\t\tborder-bottom-left-radius: 1.5rem;
\t\t\t}
\t\t\t.register-heading {
\t\t\t\ttext-align: center;
\t\t\t\tmargin-top: 8%;
\t\t\t\tmargin-bottom: -15%;
\t\t\t\tcolor: #495057;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<div class=\"container register\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 register-left\">
\t\t\t\t\t<img src=\"https://image.ibb.co/n7oTvU/logo_white.png\" alt=\"\"/>
\t\t\t\t\t<h2 style=\"color:white; font-weight: 500;\">Welcome</h2>
\t\t\t\t\t<a href=\"";
        // line 123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/login"]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Login
\t\t\t\t\t</a><br/>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-9 register-right\">
\t\t\t\t\t";
        // line 136
        echo "\t\t\t\t\t<form class=\"tab-content\" id=\"myTabContent\" action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/post-add-user"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "errorAddUser"], "method", false, false, false, 137)) {
            // line 138
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "errorAddUser"], "method", false, false, false, 138), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "successAddUser"], "method", false, false, false, 140)) {
            // line 141
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "successAddUser"], "method", false, false, false, 141), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t<h3 class=\"register-heading\">Register</h3>
\t\t\t\t\t\t\t<div class=\"row register-form\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"First Name *\" value=\"\" name=\"first-name\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Last Name *\" value=\"\" name=\"last-name\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password *\" value=\"\" name=\"password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Confirm Password *\" value=\"\" name=\"confirm-password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"maxl\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" value=\"male\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\tMale
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" value=\"female\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Female
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Your Email *\" value=\"\" name=\"email\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" minlength=\"10\" maxlength=\"10\" class=\"form-control\" placeholder=\"Your Phone *\" value=\"\" name=\"phone\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" placeholder=\"Your birthday *\" value=\"\" name=\"birthday\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Address *\" value=\"\" name=\"address\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btnRegister\" value=\"Register\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 143,  188 => 141,  185 => 140,  179 => 138,  177 => 137,  172 => 136,  164 => 123,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>Register</title>
\t\t{{ include('user/components/head.twig') }}
\t\t<style>
\t\t\t.register {
\t\t\t\tbackground: -webkit-linear-gradient(left, #3931af, #00c6ff);
\t\t\t\tmargin-top: 3%;
\t\t\t\tpadding: 3%;
\t\t\t}
\t\t\t.register-left {
\t\t\t\ttext-align: center;
\t\t\t\tcolor: #fff;
\t\t\t\tmargin-top: 4%;
\t\t\t}
\t\t\t.register-left input {
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 1.5rem;
\t\t\t\tpadding: 2%;
\t\t\t\twidth: 60%;
\t\t\t\tbackground: #f8f9fa;
\t\t\t\tfont-weight: bold;
\t\t\t\tcolor: #383d41;
\t\t\t\tmargin-top: 30%;
\t\t\t\tmargin-bottom: 3%;
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t\t.register-right {
\t\t\t\tbackground: #f8f9fa;
\t\t\t\tborder-top-left-radius: 10% 50%;
\t\t\t\tborder-bottom-left-radius: 10% 50%;
\t\t\t}
\t\t\t.register-left img {
\t\t\t\tmargin-top: 15%;
\t\t\t\tmargin-bottom: 5%;
\t\t\t\twidth: 25%;
\t\t\t\t-webkit-animation: mover 2s infinite alternate;
\t\t\t\tanimation: mover 1s infinite alternate;
\t\t\t}
\t\t\t@-webkit-keyframes mover {
\t\t\t\t0% {
\t\t\t\t\ttransform: translateY(0);
\t\t\t\t}
\t\t\t\t100% {
\t\t\t\t\ttransform: translateY(-20px);
\t\t\t\t}
\t\t\t}
\t\t\t@keyframes mover {
\t\t\t\t0% {
\t\t\t\t\ttransform: translateY(0);
\t\t\t\t}
\t\t\t\t100% {
\t\t\t\t\ttransform: translateY(-20px);
\t\t\t\t}
\t\t\t}
\t\t\t.register-left p {
\t\t\t\tfont-weight: lighter;
\t\t\t\tpadding: 12%;
\t\t\t\tmargin-top: -9%;
\t\t\t}
\t\t\t.register .register-form {
\t\t\t\tpadding: 10%;
\t\t\t\tmargin-top: 10%;
\t\t\t}
\t\t\t.btnRegister {
\t\t\t\tfloat: right;
\t\t\t\tmargin-top: 10%;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 1.5rem;
\t\t\t\tpadding: 2%;
\t\t\t\tbackground: #0062cc;
\t\t\t\tcolor: #fff;
\t\t\t\tfont-weight: 600;
\t\t\t\twidth: 50%;
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t\t.register .nav-tabs {
\t\t\t\tmargin-top: 3%;
\t\t\t\tborder: none;
\t\t\t\tbackground: #0062cc;
\t\t\t\tborder-radius: 1.5rem;
\t\t\t\twidth: 28%;
\t\t\t\tfloat: right;
\t\t\t}
\t\t\t.register .nav-tabs .nav-link {
\t\t\t\tpadding: 2%;
\t\t\t\theight: 34px;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: #fff;
\t\t\t\tborder-top-right-radius: 1.5rem;
\t\t\t\tborder-bottom-right-radius: 1.5rem;
\t\t\t}
\t\t\t.register .nav-tabs .nav-link:hover {
\t\t\t\tborder: none;
\t\t\t}
\t\t\t.register .nav-tabs .nav-link.active {
\t\t\t\twidth: 100px;
\t\t\t\tcolor: #0062cc;
\t\t\t\tborder: 2px solid #0062cc;
\t\t\t\tborder-top-left-radius: 1.5rem;
\t\t\t\tborder-bottom-left-radius: 1.5rem;
\t\t\t}
\t\t\t.register-heading {
\t\t\t\ttext-align: center;
\t\t\t\tmargin-top: 8%;
\t\t\t\tmargin-bottom: -15%;
\t\t\t\tcolor: #495057;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<div class=\"container register\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 register-left\">
\t\t\t\t\t<img src=\"https://image.ibb.co/n7oTvU/logo_white.png\" alt=\"\"/>
\t\t\t\t\t<h2 style=\"color:white; font-weight: 500;\">Welcome</h2>
\t\t\t\t\t<a href=\"{{ redirect('user/login') }}\" class=\"btn btn-primary\">Login
\t\t\t\t\t</a><br/>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-9 register-right\">
\t\t\t\t\t{# <ul class=\"nav nav-tabs nav-justified\" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Employee</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Hirer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul> #}
\t\t\t\t\t<form class=\"tab-content\" id=\"myTabContent\" action=\"{{ redirect('user/post-add-user') }}\" method=\"post\">
\t\t\t\t\t\t{% if(Session.hasFlash('errorAddUser')) %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ session.getFlash('errorAddUser') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if(Session.hasFlash('successAddUser')) %}
\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('successAddUser') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t<h3 class=\"register-heading\">Register</h3>
\t\t\t\t\t\t\t<div class=\"row register-form\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"First Name *\" value=\"\" name=\"first-name\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Last Name *\" value=\"\" name=\"last-name\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password *\" value=\"\" name=\"password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Confirm Password *\" value=\"\" name=\"confirm-password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"maxl\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" value=\"male\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\tMale
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gender\" value=\"female\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Female
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Your Email *\" value=\"\" name=\"email\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" minlength=\"10\" maxlength=\"10\" class=\"form-control\" placeholder=\"Your Phone *\" value=\"\" name=\"phone\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" placeholder=\"Your birthday *\" value=\"\" name=\"birthday\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Address *\" value=\"\" name=\"address\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btnRegister\" value=\"Register\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</body>
</html>
", "user/pages/register.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\register.twig");
    }
}
