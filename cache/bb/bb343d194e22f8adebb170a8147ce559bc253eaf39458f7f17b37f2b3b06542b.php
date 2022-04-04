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

/* user/pages/profile.twig */
class __TwigTemplate_a37b94d86afa2f3e50f56f627ce776d68bc389b5142dbc7e4be1345488854d45 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css\">
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<title>Profile</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tbackground: #1da1f2;
\t\t\t}
\t\t\t.border-right {
\t\t\t\tborder-right: none;
\t\t\t}
\t\t\t.form-control:focus {
\t\t\t\tbox-shadow: none;
\t\t\t\tborder-color: #BA68C8
\t\t\t}

\t\t\t.profile-button {
\t\t\t\tbackground: #BA68C8;
\t\t\t\tbox-shadow: none;
\t\t\t\tborder: none
\t\t\t}

\t\t\t.profile-button:hover {
\t\t\t\tbackground: #682773
\t\t\t}

\t\t\t.profile-button:focus {
\t\t\t\tbackground: #682773;
\t\t\t\tbox-shadow: none
\t\t\t}

\t\t\t.profile-button:active {
\t\t\t\tbackground: #682773;
\t\t\t\tbox-shadow: none
\t\t\t}

\t\t\t.back:hover {
\t\t\t\tcolor: #682773;
\t\t\t\tcursor: pointer
\t\t\t}

\t\t\t.labels {
\t\t\t\tfont-size: 11px
\t\t\t}
\t\t\t.roundeed {
\t\t\t\tborder-radius: 2rem !important;
\t\t\t}
\t\t\t.add-experience:hover {
\t\t\t\tbackground: #BA68C8;
\t\t\t\tcolor: #fff;
\t\t\t\tcursor: pointer;
\t\t\t\tborder: solid 1px #BA68C8
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<div class=\"container roundeed bg-white mt-5 mb-5\">
\t\t\t<form method=\"post\" method=\"post\" action=\"";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/post-profile"]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => ""], "method", false, false, false, 72), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.6 483.2 483.9 512 448.5 512H128.1C92.75 512 64.09 483.3 64.09 448V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5H575.8zM288 160C252.7 160 224 188.7 224 224C224 259.3 252.7 288 288 288C323.3 288 352 259.3 352 224C352 188.7 323.3 160 288 160zM256 320C211.8 320 176 355.8 176 400C176 408.8 183.2 416 192 416H384C392.8 416 400 408.8 400 400C400 355.8 364.2 320 320 320H256z\"/></svg>
\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 76
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 76), "avatar", [], "any", false, false, false, 76), ""))) {
            // line 77
            echo "
\t\t\t\t\t\t\t\t<img class=\"rounded-circle mt-5\" width=\"100%\" src=\"/";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "getDirectoryUpload", [], "method", false, false, false, 78), "html", null, true);
            echo "avatars/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 78), "avatar", [], "any", false, false, false, 78), "html", null, true);
            echo "\" width=\"90\">
\t\t\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\t\t\t<img class=\"rounded-circle mt-5\" width=\"100%\" src=\"/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "getDirectoryUpload", [], "method", false, false, false, 80), "html", null, true);
            echo "avatars/donaltrump.jpg\" width=\"90\">
\t\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t\t<span class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 83), "first_name", [], "any", false, false, false, 83), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 84), "last_name", [], "any", false, false, false, 84), "html", null, true);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span>Việt Nam</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"p-3 py-5\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t<h2 class=\"text-right\">Thông tin cá nhân</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "updateUserError"], "method", false, false, false, 94)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "updateUserError"], "method", false, false, false, 95), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "errorImage"], "method", false, false, false, 97)) {
            // line 98
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "errorImage"], "method", false, false, false, 98), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "updateUser"], "method", false, false, false, 100)) {
            // line 101
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "updateUser"], "method", false, false, false, 101), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 103
        echo "
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" class=\"form-control\" value=\" ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 104), "user_id", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_profile\" class=\"form-control\" value=\" ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">First name
\t\t\t\t\t\t\t\t\t</label><input type=\"text\" name=\"first-name\" class=\"form-control\" placeholder=\"first name\" value=\" ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 109), "first_name", [], "any", false, false, false, 109), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Last name
\t\t\t\t\t\t\t\t\t</label><input type=\"text\" name=\"last-name\" class=\"form-control\" placeholder=\"first name\" value=\" ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 114), "last_name", [], "any", false, false, false, 114), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Ngày tháng năm sinh</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" placeholder=\"headline\" name=\"birthday\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 119), "birthday", [], "any", false, false, false, 119), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số điện thoại</label><input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"headline\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 122), "phone", [], "any", false, false, false, 122), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số hộ chiếu/CMND</label><input type=\"text\" class=\"form-control\" placeholder=\"CMND\" name=\"cmnd\" value=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Email</label><input type=\"mail\" name=\"email\" class=\"form-control\" placeholder=\"country\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 128), "email", [], "any", false, false, false, 128), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Avatar</label><input type=\"file\" name=\"avatar\" class=\"form-control\" placeholder=\"avatar\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 132), "avatar", [], "any", false, false, false, 132), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Gender</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 138
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 138), "gender", [], "any", false, false, false, 138), "male"))) {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios1\" value=\"male\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios2\" value=\"female\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios2\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFemale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 152
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 152), "gender", [], "any", false, false, false, 152), "female"))) {
            // line 153
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios1\" value=\"male\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios2\" value=\"female\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios2\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFemale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 166
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Address</label><input type=\"text\" class=\"form-control\" placeholder=\"country\" name=\"address\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 171), "address", [], "any", false, false, false, 171), "html", null, true);
        echo "\"></div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3 \">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Country</label><input type=\"text\" class=\"form-control\" placeholder=\"country\" name=\"country\" value=\"Country\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3 \">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">State/Region</label><input type=\"text\" class=\"form-control\" value=\"Boston\" name=\"state\" placeholder=\"state\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-danger btn-lg btn-block\" type=\"submit\" value=\"Lưu\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</body>
</html></body></html></body></html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 171,  280 => 166,  265 => 153,  262 => 152,  247 => 139,  245 => 138,  236 => 132,  229 => 128,  220 => 122,  214 => 119,  206 => 114,  198 => 109,  191 => 105,  187 => 104,  184 => 103,  178 => 101,  175 => 100,  169 => 98,  166 => 97,  160 => 95,  158 => 94,  145 => 84,  141 => 83,  138 => 82,  132 => 80,  125 => 78,  122 => 77,  120 => 76,  113 => 72,  105 => 67,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css\">
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<title>Profile</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tbackground: #1da1f2;
\t\t\t}
\t\t\t.border-right {
\t\t\t\tborder-right: none;
\t\t\t}
\t\t\t.form-control:focus {
\t\t\t\tbox-shadow: none;
\t\t\t\tborder-color: #BA68C8
\t\t\t}

\t\t\t.profile-button {
\t\t\t\tbackground: #BA68C8;
\t\t\t\tbox-shadow: none;
\t\t\t\tborder: none
\t\t\t}

\t\t\t.profile-button:hover {
\t\t\t\tbackground: #682773
\t\t\t}

\t\t\t.profile-button:focus {
\t\t\t\tbackground: #682773;
\t\t\t\tbox-shadow: none
\t\t\t}

\t\t\t.profile-button:active {
\t\t\t\tbackground: #682773;
\t\t\t\tbox-shadow: none
\t\t\t}

\t\t\t.back:hover {
\t\t\t\tcolor: #682773;
\t\t\t\tcursor: pointer
\t\t\t}

\t\t\t.labels {
\t\t\t\tfont-size: 11px
\t\t\t}
\t\t\t.roundeed {
\t\t\t\tborder-radius: 2rem !important;
\t\t\t}
\t\t\t.add-experience:hover {
\t\t\t\tbackground: #BA68C8;
\t\t\t\tcolor: #fff;
\t\t\t\tcursor: pointer;
\t\t\t\tborder: solid 1px #BA68C8
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<div class=\"container roundeed bg-white mt-5 mb-5\">
\t\t\t<form method=\"post\" method=\"post\" action=\"{{ redirect('user/post-profile') }}\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
\t\t\t\t\t\t\t<a href=\"{{ helper.custom_link('') }}\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.6 483.2 483.9 512 448.5 512H128.1C92.75 512 64.09 483.3 64.09 448V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5H575.8zM288 160C252.7 160 224 188.7 224 224C224 259.3 252.7 288 288 288C323.3 288 352 259.3 352 224C352 188.7 323.3 160 288 160zM256 320C211.8 320 176 355.8 176 400C176 408.8 183.2 416 192 416H384C392.8 416 400 408.8 400 400C400 355.8 364.2 320 320 320H256z\"/></svg>
\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% if(session.get('userProfile').avatar != '') %}

\t\t\t\t\t\t\t\t<img class=\"rounded-circle mt-5\" width=\"100%\" src=\"/{{helper.getDirectoryUpload()}}avatars/{{session.get('userProfile').avatar}}\" width=\"90\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img class=\"rounded-circle mt-5\" width=\"100%\" src=\"/{{helper.getDirectoryUpload()}}avatars/donaltrump.jpg\" width=\"90\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<span class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t{{ session.get('userProfile').first_name }}
\t\t\t\t\t\t\t\t{{ session.get('userProfile').last_name }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span>Việt Nam</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"p-3 py-5\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t<h2 class=\"text-right\">Thông tin cá nhân</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if(Session.hasFlash('updateUserError')) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ session.getFlash('updateUserError') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if(Session.hasFlash('errorImage')) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ session.getFlash('errorImage') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if(Session.hasFlash('updateUser')) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('updateUser') }}</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" class=\"form-control\" value=\" {{ session.get('userProfile').user_id}}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_profile\" class=\"form-control\" value=\" {{ session.get('userProfile').id}}\">
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">First name
\t\t\t\t\t\t\t\t\t</label><input type=\"text\" name=\"first-name\" class=\"form-control\" placeholder=\"first name\" value=\" {{ session.get('userProfile').first_name}}\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Last name
\t\t\t\t\t\t\t\t\t</label><input type=\"text\" name=\"last-name\" class=\"form-control\" placeholder=\"first name\" value=\" {{ session.get('userProfile').last_name}}\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Ngày tháng năm sinh</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" placeholder=\"headline\" name=\"birthday\" value=\"{{ session.get('userProfile').birthday }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số điện thoại</label><input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"headline\" value=\"{{ session.get('userProfile').phone }}\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số hộ chiếu/CMND</label><input type=\"text\" class=\"form-control\" placeholder=\"CMND\" name=\"cmnd\" value=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Email</label><input type=\"mail\" name=\"email\" class=\"form-control\" placeholder=\"country\" value=\"{{ session.get('userProfile').email }}\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Avatar</label><input type=\"file\" name=\"avatar\" class=\"form-control\" placeholder=\"avatar\" value=\"{{ session.get('userProfile').avatar }}\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Gender</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t{% if session.get('userProfile').gender == 'male' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios1\" value=\"male\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios2\" value=\"female\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios2\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFemale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if session.get('userProfile').gender == 'female' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios1\" value=\"male\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"gridRadios2\" value=\"female\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gridRadios2\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFemale
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Address</label><input type=\"text\" class=\"form-control\" placeholder=\"country\" name=\"address\" value=\"{{ session.get('userProfile').address }}\"></div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3 \">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Country</label><input type=\"text\" class=\"form-control\" placeholder=\"country\" name=\"country\" value=\"Country\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3 \">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">State/Region</label><input type=\"text\" class=\"form-control\" value=\"Boston\" name=\"state\" placeholder=\"state\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-danger btn-lg btn-block\" type=\"submit\" value=\"Lưu\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</body>
</html></body></html></body></html>
", "user/pages/profile.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\profile.twig");
    }
}
