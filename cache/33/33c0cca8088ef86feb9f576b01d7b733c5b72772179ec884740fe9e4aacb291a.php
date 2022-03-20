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
class __TwigTemplate_2ff136e483c44fb1a79d322540a23e0f399dd61a6db1a50ef42463ec685400d3 extends Template
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
\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"100%\" src=\"https://kontumtv.vn/wp-content/uploads/2020/02/donald_trump_sblu.jpg\" width=\"90\"><span class=\"font-weight-bold\">Huỳnh Kỳ Anh</span>
\t\t\t\t\t\t<span>Việt Nam</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"p-3 py-5\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h2 class=\"text-right\">Thông tin cá nhân</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Họ tên *</label><input type=\"text\" class=\"form-control\" placeholder=\"first name\" value=\"John\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Ngày tháng năm sinh</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" placeholder=\"headline\" value=\"UI/UX Developer\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số điện thoại</label><input type=\"text\" class=\"form-control\" placeholder=\"headline\" value=\"UI/UX Developer at Boston\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số hộ chiếu/CMND</label><input type=\"text\" class=\"form-control\" placeholder=\"education\" value=\"Boston University\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Email</label><input type=\"mail\" class=\"form-control\" placeholder=\"country\" value=\"USA\"></div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Country</label><input type=\"text\" class=\"form-control\" placeholder=\"country\" value=\"USA\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">State/Region</label><input type=\"text\" class=\"form-control\" value=\"Boston\" placeholder=\"state\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-lg btn-block\" type=\"button\">Lưu</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
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
        return "user/pages/profile.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
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
\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"100%\" src=\"https://kontumtv.vn/wp-content/uploads/2020/02/donald_trump_sblu.jpg\" width=\"90\"><span class=\"font-weight-bold\">Huỳnh Kỳ Anh</span>
\t\t\t\t\t\t<span>Việt Nam</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"p-3 py-5\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h2 class=\"text-right\">Thông tin cá nhân</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Họ tên *</label><input type=\"text\" class=\"form-control\" placeholder=\"first name\" value=\"John\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Ngày tháng năm sinh</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" placeholder=\"headline\" value=\"UI/UX Developer\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số điện thoại</label><input type=\"text\" class=\"form-control\" placeholder=\"headline\" value=\"UI/UX Developer at Boston\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Số hộ chiếu/CMND</label><input type=\"text\" class=\"form-control\" placeholder=\"education\" value=\"Boston University\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Email</label><input type=\"mail\" class=\"form-control\" placeholder=\"country\" value=\"USA\"></div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">Country</label><input type=\"text\" class=\"form-control\" placeholder=\"country\" value=\"USA\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"labels\">State/Region</label><input type=\"text\" class=\"form-control\" value=\"Boston\" placeholder=\"state\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-lg btn-block\" type=\"button\">Lưu</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>

</html>
", "user/pages/profile.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\profile.twig");
    }
}
