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

/* user/pages/doctor.twig */
class __TwigTemplate_ff49f6f069e35a31b33afb07627dd40c85594eb86a1eb4488a414a2808230592 extends Template
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

\t\t\t}
\t\t\t.single_advisor_profile {
\t\t\t\tposition: relative;
\t\t\t\tmargin-bottom: 50px;
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tz-index: 1;
\t\t\t\tborder-radius: 15px;
\t\t\t\t-webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
\t\t\t\tbox-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb {
\t\t\t\tposition: relative;
\t\t\t\tz-index: 1;
\t\t\t\tborder-radius: 15px 15px 0 0;
\t\t\t\tmargin: 0 auto;
\t\t\t\tpadding: 30px 30px 0;
\t\t\t\tbackground-color: #3f43fd;
\t\t\t\toverflow: hidden;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb::after {
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tposition: absolute;
\t\t\t\twidth: 150%;
\t\t\t\theight: 80px;
\t\t\t\tbottom: -45px;
\t\t\t\tleft: -25%;
\t\t\t\tcontent: \"\";
\t\t\t\tbackground-color: #ffffff;
\t\t\t\t-webkit-transform: rotate(-15deg);
\t\t\t\ttransform: rotate(-15deg);
\t\t\t}
\t\t\t@media only screen and(max-width: 575px) {
\t\t\t\t.single_advisor_profile .advisor_thumb::after {
\t\t\t\t\theight: 160px;
\t\t\t\t\tbottom: -90px;
\t\t\t\t}
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info {
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\twidth: 100%;
\t\t\t\tbottom: 0;
\t\t\t\tright: 30px;
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info a {
\t\t\t\tfont-size: 14px;
\t\t\t\tcolor: #020710;
\t\t\t\tpadding: 0 5px;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info a:hover,
\t\t\t.single_advisor_profile .advisor_thumb .social-info a:focus {
\t\t\t\tcolor: #3f43fd;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info a:last-child {
\t\t\t\tpadding-right: 0;
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info {
\t\t\t\tposition: relative;
\t\t\t\tz-index: 1;
\t\t\t\tpadding: 30px;
\t\t\t\ttext-align: right;
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tborder-radius: 0 0 15px 15px;
\t\t\t\tbackground-color: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info::after {
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\twidth: 50px;
\t\t\t\theight: 3px;
\t\t\t\tbackground-color: #3f43fd;
\t\t\t\tcontent: \"\";
\t\t\t\ttop: 12px;
\t\t\t\tright: 30px;
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info h6 {
\t\t\t\tmargin-bottom: 0.25rem;
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t}
\t\t\t@media only screen and(min-width: 768px) and(max-width: 991px) {
\t\t\t\t.single_advisor_profile .single_advisor_details_info h6 {
\t\t\t\t\tfont-size: 14px;
\t\t\t\t}
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info p {
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tmargin-bottom: 0;
\t\t\t\tfont-size: 14px;
\t\t\t}
\t\t\t@media only screen and(min-width: 768px) and(max-width: 991px) {
\t\t\t\t.single_advisor_profile .single_advisor_details_info p {
\t\t\t\t\tfont-size: 12px;
\t\t\t\t}
\t\t\t}
\t\t\t.single_advisor_profile:hover .advisor_thumb::after,
\t\t\t.single_advisor_profile:focus .advisor_thumb::after {
\t\t\t\tbackground-color: #070a57;
\t\t\t}
\t\t\t.single_advisor_profile:hover .advisor_thumb .social-info a,
\t\t\t.single_advisor_profile:focus .advisor_thumb .social-info a {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .advisor_thumb .social-info a:hover,
\t\t\t.single_advisor_profile:hover .advisor_thumb .social-info a:focus,
\t\t\t.single_advisor_profile:focus .advisor_thumb .social-info a:hover,
\t\t\t.single_advisor_profile:focus .advisor_thumb .social-info a:focus {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info {
\t\t\t\tbackground-color: #070a57;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info::after,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info::after {
\t\t\t\tbackground-color: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info h6,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info h6 {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info p,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info p {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t</style>

\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t";
        // line 153
        echo twig_include($this->env, $context, "user/components/menu.twig");
        echo "
\t\t<!-- Header part end-->

\t\t<!--::doctor_part start::-->

\t\t\t<div class=\"container\"> <div class=\"row justify-content-center\">
\t\t\t\t<h3>Danh sách bác sĩ</h3>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"row\">
\t\t\t\t<!-- Single Advisor-->

\t\t\t\t";
        // line 165
        if (twig_test_empty(($context["getListUser"] ?? null))) {
            // line 166
            echo "\t\t\t\t\t<h1>Không tồn tại bác sĩ này. Vui lòng nhập tên khác</h1>

\t\t\t\t";
        } else {
            // line 169
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["getListUser"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 170
                echo "\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3\">
\t\t\t\t\t\t\t<a href=\"";
                // line 171
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["doctor/detail-doctor"]), "html", null, true);
                echo "?user_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 171), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
\t\t\t\t\t\t\t\t\t<!-- Team Thumb-->
\t\t\t\t\t\t\t\t\t<div class=\"advisor_thumb\"><img
\t\t\t\t\t\t\t\t\t\tsrc=\"data:image/png;base64,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\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<!-- Social Info-->
\t\t\t\t\t\t\t\t\t\t<div class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Team Details-->
\t\t\t\t\t\t\t\t\t<div class=\"single_advisor_details_info\">
\t\t\t\t\t\t\t\t\t\t<h4>Bác sĩ:
\t\t\t\t\t\t\t\t\t\t\t";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "first_name", [], "any", false, false, false, 193), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "last_name", [], "any", false, false, false, 194), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"designation\">Chuyên khoa: Cấp cứu</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "\t\t\t\t";
        }
        // line 202
        echo "

\t\t\t\t<!-- Single Advisor-->
\t\t\t</div>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t";
        // line 211
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "

\t\t<!-- footer part end-->

\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/doctor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 211,  271 => 202,  268 => 201,  255 => 194,  251 => 193,  224 => 171,  221 => 170,  216 => 169,  211 => 166,  209 => 165,  194 => 153,  48 => 10,  37 => 1,);
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

\t\t\t}
\t\t\t.single_advisor_profile {
\t\t\t\tposition: relative;
\t\t\t\tmargin-bottom: 50px;
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tz-index: 1;
\t\t\t\tborder-radius: 15px;
\t\t\t\t-webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
\t\t\t\tbox-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb {
\t\t\t\tposition: relative;
\t\t\t\tz-index: 1;
\t\t\t\tborder-radius: 15px 15px 0 0;
\t\t\t\tmargin: 0 auto;
\t\t\t\tpadding: 30px 30px 0;
\t\t\t\tbackground-color: #3f43fd;
\t\t\t\toverflow: hidden;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb::after {
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tposition: absolute;
\t\t\t\twidth: 150%;
\t\t\t\theight: 80px;
\t\t\t\tbottom: -45px;
\t\t\t\tleft: -25%;
\t\t\t\tcontent: \"\";
\t\t\t\tbackground-color: #ffffff;
\t\t\t\t-webkit-transform: rotate(-15deg);
\t\t\t\ttransform: rotate(-15deg);
\t\t\t}
\t\t\t@media only screen and(max-width: 575px) {
\t\t\t\t.single_advisor_profile .advisor_thumb::after {
\t\t\t\t\theight: 160px;
\t\t\t\t\tbottom: -90px;
\t\t\t\t}
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info {
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\twidth: 100%;
\t\t\t\tbottom: 0;
\t\t\t\tright: 30px;
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info a {
\t\t\t\tfont-size: 14px;
\t\t\t\tcolor: #020710;
\t\t\t\tpadding: 0 5px;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info a:hover,
\t\t\t.single_advisor_profile .advisor_thumb .social-info a:focus {
\t\t\t\tcolor: #3f43fd;
\t\t\t}
\t\t\t.single_advisor_profile .advisor_thumb .social-info a:last-child {
\t\t\t\tpadding-right: 0;
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info {
\t\t\t\tposition: relative;
\t\t\t\tz-index: 1;
\t\t\t\tpadding: 30px;
\t\t\t\ttext-align: right;
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tborder-radius: 0 0 15px 15px;
\t\t\t\tbackground-color: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info::after {
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tposition: absolute;
\t\t\t\tz-index: 1;
\t\t\t\twidth: 50px;
\t\t\t\theight: 3px;
\t\t\t\tbackground-color: #3f43fd;
\t\t\t\tcontent: \"\";
\t\t\t\ttop: 12px;
\t\t\t\tright: 30px;
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info h6 {
\t\t\t\tmargin-bottom: 0.25rem;
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t}
\t\t\t@media only screen and(min-width: 768px) and(max-width: 991px) {
\t\t\t\t.single_advisor_profile .single_advisor_details_info h6 {
\t\t\t\t\tfont-size: 14px;
\t\t\t\t}
\t\t\t}
\t\t\t.single_advisor_profile .single_advisor_details_info p {
\t\t\t\t-webkit-transition-duration: 500ms;
\t\t\t\ttransition-duration: 500ms;
\t\t\t\tmargin-bottom: 0;
\t\t\t\tfont-size: 14px;
\t\t\t}
\t\t\t@media only screen and(min-width: 768px) and(max-width: 991px) {
\t\t\t\t.single_advisor_profile .single_advisor_details_info p {
\t\t\t\t\tfont-size: 12px;
\t\t\t\t}
\t\t\t}
\t\t\t.single_advisor_profile:hover .advisor_thumb::after,
\t\t\t.single_advisor_profile:focus .advisor_thumb::after {
\t\t\t\tbackground-color: #070a57;
\t\t\t}
\t\t\t.single_advisor_profile:hover .advisor_thumb .social-info a,
\t\t\t.single_advisor_profile:focus .advisor_thumb .social-info a {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .advisor_thumb .social-info a:hover,
\t\t\t.single_advisor_profile:hover .advisor_thumb .social-info a:focus,
\t\t\t.single_advisor_profile:focus .advisor_thumb .social-info a:hover,
\t\t\t.single_advisor_profile:focus .advisor_thumb .social-info a:focus {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info {
\t\t\t\tbackground-color: #070a57;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info::after,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info::after {
\t\t\t\tbackground-color: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info h6,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info h6 {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.single_advisor_profile:hover .single_advisor_details_info p,
\t\t\t.single_advisor_profile:focus .single_advisor_details_info p {
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t</style>

\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t{{ include('user/components/menu.twig')}}
\t\t<!-- Header part end-->

\t\t<!--::doctor_part start::-->

\t\t\t<div class=\"container\"> <div class=\"row justify-content-center\">
\t\t\t\t<h3>Danh sách bác sĩ</h3>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"row\">
\t\t\t\t<!-- Single Advisor-->

\t\t\t\t{% if getListUser is empty %}
\t\t\t\t\t<h1>Không tồn tại bác sĩ này. Vui lòng nhập tên khác</h1>

\t\t\t\t{% else %}
\t\t\t\t\t{% for user in getListUser %}
\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3\">
\t\t\t\t\t\t\t<a href=\"{{ redirect('doctor/detail-doctor') }}?user_id={{ user.user_id }}\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
\t\t\t\t\t\t\t\t\t<!-- Team Thumb-->
\t\t\t\t\t\t\t\t\t<div class=\"advisor_thumb\"><img
\t\t\t\t\t\t\t\t\t\tsrc=\"data:image/png;base64,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\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<!-- Social Info-->
\t\t\t\t\t\t\t\t\t\t<div class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Team Details-->
\t\t\t\t\t\t\t\t\t<div class=\"single_advisor_details_info\">
\t\t\t\t\t\t\t\t\t\t<h4>Bác sĩ:
\t\t\t\t\t\t\t\t\t\t\t{{ user.first_name }}
\t\t\t\t\t\t\t\t\t\t\t{{ user.last_name }}</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"designation\">Chuyên khoa: Cấp cứu</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}


\t\t\t\t<!-- Single Advisor-->
\t\t\t</div>
\t\t</div>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t{{ include('user/components/footer.twig')}}

\t\t<!-- footer part end-->

\t</body>

</html>
", "user/pages/doctor.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\doctor.twig");
    }
}
