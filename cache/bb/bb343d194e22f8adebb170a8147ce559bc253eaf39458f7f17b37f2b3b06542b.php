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
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"100%\" src=\"https://kontumtv.vn/wp-content/uploads/2020/02/donald_trump_sblu.jpg\" width=\"90\"><span class=\"font-weight-bold\">
\t\t\t\t\t\t\t";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 70), "first_name", [], "any", false, false, false, 70), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 71), "last_name", [], "any", false, false, false, 71), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span>Việt Nam</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"p-3 py-5\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h2 class=\"text-right\">Thông tin cá nhân</h2>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "updateUserError"], "method", false, false, false, 83)) {
            // line 84
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "updateUserError"], "method", false, false, false, 84), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "updateUser"], "method", false, false, false, 86)) {
            // line 87
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "updateUser"], "method", false, false, false, 87), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t<form method=\"post\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/post-profile"]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" class=\"form-control\" value=\" ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 90), "user_id", [], "any", false, false, false, 90), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_profile\" class=\"form-control\" value=\" ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">First name
\t\t\t\t\t\t\t\t\t</label><input type=\"text\" name=\"first-name\" class=\"form-control\" placeholder=\"first name\" value=\" ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 95), "first_name", [], "any", false, false, false, 95), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Last name
\t\t\t\t\t\t\t\t\t</label><input type=\"text\" name=\"last-name\" class=\"form-control\" placeholder=\"first name\" value=\" ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 100), "last_name", [], "any", false, false, false, 100), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Ngày tháng năm sinh</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" placeholder=\"headline\" name=\"birthday\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 105), "birthday", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số điện thoại</label><input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"headline\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 108), "phone", [], "any", false, false, false, 108), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số hộ chiếu/CMND</label><input type=\"text\" class=\"form-control\" placeholder=\"CMND\" name=\"cmnd\" value=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Email</label><input type=\"mail\" name=\"email\" class=\"form-control\" placeholder=\"country\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 114), "email", [], "any", false, false, false, 114), "html", null, true);
        echo "\"></div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Gender</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 121
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 121), "gender", [], "any", false, false, false, 121), "male"))) {
            // line 122
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
        // line 135
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 135), "gender", [], "any", false, false, false, 135), "female"))) {
            // line 136
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
        // line 149
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Address</label><input type=\"text\" class=\"form-control\" placeholder=\"country\" name=\"address\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "userProfile"], "method", false, false, false, 154), "address", [], "any", false, false, false, 154), "html", null, true);
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

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
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
        return array (  243 => 154,  236 => 149,  221 => 136,  218 => 135,  203 => 122,  201 => 121,  191 => 114,  182 => 108,  176 => 105,  168 => 100,  160 => 95,  153 => 91,  149 => 90,  144 => 89,  138 => 87,  135 => 86,  129 => 84,  127 => 83,  112 => 71,  108 => 70,  37 => 1,);
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
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"100%\" src=\"https://kontumtv.vn/wp-content/uploads/2020/02/donald_trump_sblu.jpg\" width=\"90\"><span class=\"font-weight-bold\">
\t\t\t\t\t\t\t{{ session.get('userProfile').first_name }}
\t\t\t\t\t\t\t{{ session.get('userProfile').last_name }}
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span>Việt Nam</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"p-3 py-5\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h2 class=\"text-right\">Thông tin cá nhân</h2>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if(Session.hasFlash('updateUserError')) %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ session.getFlash('updateUserError') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if(Session.hasFlash('updateUser')) %}
\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('updateUser') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<form method=\"post\" method=\"post\" action=\"{{ redirect('user/post-profile') }}\">
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

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html></body></html></body></html>
", "user/pages/profile.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\profile.twig");
    }
}
