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

/* user/pages/forgotPassword.twig */
class __TwigTemplate_4365f921b50a79393e25ecced62869b5dec8d9112e8f3c0b7d39335fce085a4b extends Template
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
        echo twig_include($this->env, $context, "/user/components/head.twig");
        echo "
\t\t<style>
\t\t\thtml,
\t\t\tbody {
\t\t\t\theight: 100%;
\t\t\t}

\t\t\tbody {
\t\t\t\tdisplay: -ms-flexbox;
\t\t\t\tdisplay: -webkit-box;
\t\t\t\tdisplay: flex;
\t\t\t\t-ms-flex-align: center;
\t\t\t\t-ms-flex-pack: center;
\t\t\t\t-webkit-box-align: center;
\t\t\t\talign-items: center;
\t\t\t\t-webkit-box-pack: center;
\t\t\t\tjustify-content: center;
\t\t\t\tbackground-color: #f5f5f5;
\t\t\t}

\t\t\tform {
\t\t\t\tpadding-top: 10px;
\t\t\t\tfont-size: 14px;
\t\t\t\tmargin-top: 30px;
\t\t\t}

\t\t\t.card-title {
\t\t\t\tfont-weight: 300;
\t\t\t}

\t\t\t.btn {
\t\t\t\tfont-size: 14px;
\t\t\t\tmargin-top: 20px;
\t\t\t}

\t\t\t.login-form {
\t\t\t\twidth: 320px;
\t\t\t\tmargin: 20px;
\t\t\t}

\t\t\t.sign-up {
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 20px 0 0;
\t\t\t}

\t\t\tspan {
\t\t\t\tfont-size: 14px;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<!-- breadcrumb start-->
\t\t<div class=\"card login-form\">
\t\t\t<div class=\"card-body\">
\t\t\t\t";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "errorForgotPass"], "method", false, false, false, 64)) {
            // line 65
            echo "\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "errorForgotPass"], "method", false, false, false, 65), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "mail"], "method", false, false, false, 67)) {
            // line 68
            echo "\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "mail"], "method", false, false, false, 68), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t<h3 class=\"card-title text-center\">Forgot password</h3>
\t\t\t\t<div class=\"card-text\">
\t\t\t\t\t<form method=\"get\" action=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/forgot-password"]), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-sm\" placeholder=\"Enter your email address\" name=\"email\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Send password reset email</button>
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
        return "user/pages/forgotPassword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 72,  122 => 70,  116 => 68,  113 => 67,  107 => 65,  105 => 64,  47 => 9,  37 => 1,);
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
\t\t{{ include('/user/components/head.twig') }}
\t\t<style>
\t\t\thtml,
\t\t\tbody {
\t\t\t\theight: 100%;
\t\t\t}

\t\t\tbody {
\t\t\t\tdisplay: -ms-flexbox;
\t\t\t\tdisplay: -webkit-box;
\t\t\t\tdisplay: flex;
\t\t\t\t-ms-flex-align: center;
\t\t\t\t-ms-flex-pack: center;
\t\t\t\t-webkit-box-align: center;
\t\t\t\talign-items: center;
\t\t\t\t-webkit-box-pack: center;
\t\t\t\tjustify-content: center;
\t\t\t\tbackground-color: #f5f5f5;
\t\t\t}

\t\t\tform {
\t\t\t\tpadding-top: 10px;
\t\t\t\tfont-size: 14px;
\t\t\t\tmargin-top: 30px;
\t\t\t}

\t\t\t.card-title {
\t\t\t\tfont-weight: 300;
\t\t\t}

\t\t\t.btn {
\t\t\t\tfont-size: 14px;
\t\t\t\tmargin-top: 20px;
\t\t\t}

\t\t\t.login-form {
\t\t\t\twidth: 320px;
\t\t\t\tmargin: 20px;
\t\t\t}

\t\t\t.sign-up {
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 20px 0 0;
\t\t\t}

\t\t\tspan {
\t\t\t\tfont-size: 14px;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<!-- breadcrumb start-->
\t\t<div class=\"card login-form\">
\t\t\t<div class=\"card-body\">
\t\t\t\t{% if(Session.hasFlash('errorForgotPass')) %}
\t\t\t\t\t<div class=\"alert alert-danger\">{{ session.getFlash('errorForgotPass') }}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if(Session.hasFlash('mail')) %}
\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('mail') }}</div>
\t\t\t\t{% endif %}
\t\t\t\t<h3 class=\"card-title text-center\">Forgot password</h3>
\t\t\t\t<div class=\"card-text\">
\t\t\t\t\t<form method=\"get\" action=\"{{ redirect('user/forgot-password') }}\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-sm\" placeholder=\"Enter your email address\" name=\"email\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Send password reset email</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</body>

</html>
", "user/pages/forgotPassword.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\forgotPassword.twig");
    }
}
