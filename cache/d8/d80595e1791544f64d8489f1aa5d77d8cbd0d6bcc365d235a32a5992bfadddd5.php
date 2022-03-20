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

/* user/pages/login.twig */
class __TwigTemplate_ca2546a89947eb7a0c6a41eb522ff3d59e9c805339746d03f56860bca6c8276c extends Template
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
\t\t<title>Login</title>
\t\t";
        // line 9
        echo twig_include($this->env, $context, "user/components/head.twig");
        echo "
\t\t<style>
\t\t\tbody {
\t\t\t\tbackground-image: -webkit-gradient(linear, left top, right top, from(#4e63d7), to(#76bfe9)) !important;
\t\t\t\tbackground-image: linear-gradient(to right, #4e63d7 0%, #76bfe9 100%) !important;
\t\t\t\tmargin-top: 20px;
\t\t\t}

\t\t\t/* ===== LOGIN PAGE ===== */
\t\t\t.login-box {
\t\t\t\t-webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t\tbox-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t\t@media(min-width: 992px) {
\t\t\t\t.login-box {
\t\t\t\t\tmargin: 40px 0;
\t\t\t\t}
\t\t\t}

\t\t\t.login-box .form-wrap {
\t\t\t\tpadding: 30px 25px;
\t\t\t\tborder-radius: 10px;
\t\t\t\t-webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t\tbox-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.login-box .form-wrap {
\t\t\t\t\tpadding: 45px;
\t\t\t\t}
\t\t\t}

\t\t\t@media(min-width: 992px) {
\t\t\t\t.login-box .form-wrap {
\t\t\t\t\tmargin-top: -40px;
\t\t\t\t\tmargin-bottom: -40px;
\t\t\t\t\tpadding: 60px;
\t\t\t\t}
\t\t\t}

\t\t\t.login-box .socials a {
\t\t\t\t-webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t\tbox-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t}

\t\t\t.login-section {
\t\t\t\tposition: relative;
\t\t\t\tz-index: 0;
\t\t\t}

\t\t\t.login-section::after {
\t\t\t\tposition: absolute;
\t\t\t\tcontent: '';
\t\t\t\tright: 0;
\t\t\t\tleft: 0;
\t\t\t\tbottom: 0;
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\topacity: 0.15;
\t\t\t\tz-index: -1;
\t\t\t\tbackground-image: url('../img/shapes/login-wave2.svg');
\t\t\t\tbackground-size: cover;
\t\t\t\tbackground-repeat: no-repeat;
\t\t\t\tbackground-position: top right;
\t\t\t\t-webkit-animation-duration: 3s;
\t\t\t\tanimation-duration: 3s;
\t\t\t\t-webkit-animation-direction: alternate;
\t\t\t\tanimation-direction: alternate;
\t\t\t\t-webkit-animation-iteration-count: infinite;
\t\t\t\tanimation-iteration-count: infinite;
\t\t\t\t-webkit-animation-name: pulse;
\t\t\t\tanimation-name: pulse;
\t\t\t}

\t\t\t.login-section::before {
\t\t\t\tposition: absolute;
\t\t\t\tcontent: '';
\t\t\t\topacity: 0.10;
\t\t\t\tright: 0;
\t\t\t\tleft: 0;
\t\t\t\tbottom: 0;
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\tz-index: -1;
\t\t\t\tbackground-image: url('../img/shapes/login-wave1.svg');
\t\t\t\tbackground-size: cover;
\t\t\t\tbackground-position: top right;
\t\t\t\t-webkit-animation-duration: 6s;
\t\t\t\tanimation-duration: 6s;
\t\t\t\t-webkit-animation-direction: alternate;
\t\t\t\tanimation-direction: alternate;
\t\t\t\t-webkit-animation-iteration-count: infinite;
\t\t\t\tanimation-iteration-count: infinite;
\t\t\t\t-webkit-animation-name: pulse;
\t\t\t\tanimation-name: pulse;
\t\t\t}

\t\t\t.login-section .content {
\t\t\t\tpadding: 45px;
\t\t\t}

\t\t\t.form-group .zmdi {
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\tcolor: #fff;
\t\t\t\tbackground-color: #4e63d7;
\t\t\t\tborder-radius: 5px;
\t\t\t\theight: 100%;
\t\t\t\twidth: 45px;
\t\t\t\ttext-align: center;
\t\t\t\tfont-size: 20px;
\t\t\t\tpadding-top: 13px;
\t\t\t}

\t\t\t.form-group input[type='text'],
\t\t\t.form-group input[type='email'],
\t\t\t.form-group input[type='password'] {
\t\t\t\tpadding-left: 60px;
\t\t\t}

\t\t\t.form-control {
\t\t\t\tborder: 1px solid #e1e1e1;
\t\t\t\t-webkit-box-shadow: none;
\t\t\t\tbox-shadow: none;
\t\t\t\tborder-radius: 5px;
\t\t\t\t-webkit-transition: all 0.3s ease;
\t\t\t\ttransition: all 0.3s ease;
\t\t\t\tbackground-color: #fff;
\t\t\t\tcolor: #858585;
\t\t\t\tfont-weight: 400;
\t\t\t\tposition: relative;
\t\t\t}


\t\t\t.login-box .socials a {
\t\t\t\t-webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t\tbox-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t}
\t\t\t.socials a {
\t\t\t\twidth: 35px;
\t\t\t\theight: 35px;
\t\t\t\tbackground-color: #6893e1;
\t\t\t\tborder-radius: 50%;
\t\t\t\t-webkit-box-shadow: 0 3px 2px 0 #516cd9;
\t\t\t\tbox-shadow: 0 3px 2px 0 #516cd9;
\t\t\t\ttext-align: center;
\t\t\t\tcolor: #fff;
\t\t\t\tpadding-top: 10px;
\t\t\t\tfont-size: 16px;
\t\t\t\tmargin-right: 10px;
\t\t\t\t-webkit-transition: all 0.3s ease;
\t\t\t\ttransition: all 0.3s ease;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css\" integrity=\"sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=\" crossorigin=\"anonymous\"/>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-11 mt-60 mx-md-auto\">
\t\t\t\t\t<div class=\"login-box bg-white pl-lg-5 pl-0\">
\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-wrap bg-white\">
\t\t\t\t\t\t\t\t\t";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "updatePass"], "method", false, false, false, 176)) {
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "updatePass"], "method", false, false, false, 177), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"btm-sep pb-3 mb-5\">Login</h4>
\t\t\t\t\t\t\t\t\t<form class=\"form\" method=\"post\" action=\"";
        // line 180
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/post-login"]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zmdi zmdi-account\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email Address\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zmdi zmdi-email\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-lg-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 195
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/forgot-password"]), "html", null, true);
        echo "\" class=\"c-black\">Forgot password ?</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"submit\" class=\"btn btn-lg btn-custom btn-dark btn-block\">Sign In
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"content text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"border-bottom pb-5 mb-5\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"c-black\">First time here?</h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "user/register"], "method", false, false, false, 209), "html", null, true);
        echo "\" class=\"btn btn-custom\">Sign up</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"c-black mb-4 mt-n1\">Or Sign In With</h5>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-google\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-instagram\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 209,  246 => 195,  228 => 180,  225 => 179,  219 => 177,  217 => 176,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>Login</title>
\t\t{{ include('user/components/head.twig') }}
\t\t<style>
\t\t\tbody {
\t\t\t\tbackground-image: -webkit-gradient(linear, left top, right top, from(#4e63d7), to(#76bfe9)) !important;
\t\t\t\tbackground-image: linear-gradient(to right, #4e63d7 0%, #76bfe9 100%) !important;
\t\t\t\tmargin-top: 20px;
\t\t\t}

\t\t\t/* ===== LOGIN PAGE ===== */
\t\t\t.login-box {
\t\t\t\t-webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t\tbox-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t\t@media(min-width: 992px) {
\t\t\t\t.login-box {
\t\t\t\t\tmargin: 40px 0;
\t\t\t\t}
\t\t\t}

\t\t\t.login-box .form-wrap {
\t\t\t\tpadding: 30px 25px;
\t\t\t\tborder-radius: 10px;
\t\t\t\t-webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t\tbox-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.login-box .form-wrap {
\t\t\t\t\tpadding: 45px;
\t\t\t\t}
\t\t\t}

\t\t\t@media(min-width: 992px) {
\t\t\t\t.login-box .form-wrap {
\t\t\t\t\tmargin-top: -40px;
\t\t\t\t\tmargin-bottom: -40px;
\t\t\t\t\tpadding: 60px;
\t\t\t\t}
\t\t\t}

\t\t\t.login-box .socials a {
\t\t\t\t-webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t\tbox-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t}

\t\t\t.login-section {
\t\t\t\tposition: relative;
\t\t\t\tz-index: 0;
\t\t\t}

\t\t\t.login-section::after {
\t\t\t\tposition: absolute;
\t\t\t\tcontent: '';
\t\t\t\tright: 0;
\t\t\t\tleft: 0;
\t\t\t\tbottom: 0;
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\topacity: 0.15;
\t\t\t\tz-index: -1;
\t\t\t\tbackground-image: url('../img/shapes/login-wave2.svg');
\t\t\t\tbackground-size: cover;
\t\t\t\tbackground-repeat: no-repeat;
\t\t\t\tbackground-position: top right;
\t\t\t\t-webkit-animation-duration: 3s;
\t\t\t\tanimation-duration: 3s;
\t\t\t\t-webkit-animation-direction: alternate;
\t\t\t\tanimation-direction: alternate;
\t\t\t\t-webkit-animation-iteration-count: infinite;
\t\t\t\tanimation-iteration-count: infinite;
\t\t\t\t-webkit-animation-name: pulse;
\t\t\t\tanimation-name: pulse;
\t\t\t}

\t\t\t.login-section::before {
\t\t\t\tposition: absolute;
\t\t\t\tcontent: '';
\t\t\t\topacity: 0.10;
\t\t\t\tright: 0;
\t\t\t\tleft: 0;
\t\t\t\tbottom: 0;
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\tz-index: -1;
\t\t\t\tbackground-image: url('../img/shapes/login-wave1.svg');
\t\t\t\tbackground-size: cover;
\t\t\t\tbackground-position: top right;
\t\t\t\t-webkit-animation-duration: 6s;
\t\t\t\tanimation-duration: 6s;
\t\t\t\t-webkit-animation-direction: alternate;
\t\t\t\tanimation-direction: alternate;
\t\t\t\t-webkit-animation-iteration-count: infinite;
\t\t\t\tanimation-iteration-count: infinite;
\t\t\t\t-webkit-animation-name: pulse;
\t\t\t\tanimation-name: pulse;
\t\t\t}

\t\t\t.login-section .content {
\t\t\t\tpadding: 45px;
\t\t\t}

\t\t\t.form-group .zmdi {
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\tcolor: #fff;
\t\t\t\tbackground-color: #4e63d7;
\t\t\t\tborder-radius: 5px;
\t\t\t\theight: 100%;
\t\t\t\twidth: 45px;
\t\t\t\ttext-align: center;
\t\t\t\tfont-size: 20px;
\t\t\t\tpadding-top: 13px;
\t\t\t}

\t\t\t.form-group input[type='text'],
\t\t\t.form-group input[type='email'],
\t\t\t.form-group input[type='password'] {
\t\t\t\tpadding-left: 60px;
\t\t\t}

\t\t\t.form-control {
\t\t\t\tborder: 1px solid #e1e1e1;
\t\t\t\t-webkit-box-shadow: none;
\t\t\t\tbox-shadow: none;
\t\t\t\tborder-radius: 5px;
\t\t\t\t-webkit-transition: all 0.3s ease;
\t\t\t\ttransition: all 0.3s ease;
\t\t\t\tbackground-color: #fff;
\t\t\t\tcolor: #858585;
\t\t\t\tfont-weight: 400;
\t\t\t\tposition: relative;
\t\t\t}


\t\t\t.login-box .socials a {
\t\t\t\t-webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t\tbox-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
\t\t\t}
\t\t\t.socials a {
\t\t\t\twidth: 35px;
\t\t\t\theight: 35px;
\t\t\t\tbackground-color: #6893e1;
\t\t\t\tborder-radius: 50%;
\t\t\t\t-webkit-box-shadow: 0 3px 2px 0 #516cd9;
\t\t\t\tbox-shadow: 0 3px 2px 0 #516cd9;
\t\t\t\ttext-align: center;
\t\t\t\tcolor: #fff;
\t\t\t\tpadding-top: 10px;
\t\t\t\tfont-size: 16px;
\t\t\t\tmargin-right: 10px;
\t\t\t\t-webkit-transition: all 0.3s ease;
\t\t\t\ttransition: all 0.3s ease;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css\" integrity=\"sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=\" crossorigin=\"anonymous\"/>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-11 mt-60 mx-md-auto\">
\t\t\t\t\t<div class=\"login-box bg-white pl-lg-5 pl-0\">
\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-wrap bg-white\">
\t\t\t\t\t\t\t\t\t{% if(Session.hasFlash('updatePass')) %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('updatePass') }}</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<h4 class=\"btm-sep pb-3 mb-5\">Login</h4>
\t\t\t\t\t\t\t\t\t<form class=\"form\" method=\"post\" action=\"{{ redirect('user/post-login') }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zmdi zmdi-account\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email Address\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zmdi zmdi-email\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-lg-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ redirect('user/forgot-password') }}\" class=\"c-black\">Forgot password ?</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"submit\" class=\"btn btn-lg btn-custom btn-dark btn-block\">Sign In
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"content text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"border-bottom pb-5 mb-5\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"c-black\">First time here?</h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ helper.custom_link('user/register') }}\" class=\"btn btn-custom\">Sign up</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"c-black mb-4 mt-n1\">Or Sign In With</h5>
\t\t\t\t\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-google\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-instagram\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
", "user/pages/login.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\login.twig");
    }
}
