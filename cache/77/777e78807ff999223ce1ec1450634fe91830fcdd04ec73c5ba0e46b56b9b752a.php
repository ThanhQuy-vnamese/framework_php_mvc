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

/* user/pages/home.twig */
class __TwigTemplate_6e40229f87f497f1ba30a4dfe4723a709b202d93e1a49d8adeb2ee05027ec7ab extends Template
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
<html
\tlang=\"en\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>medical</title>

\t\t<!--Phần style, boostrap-->
\t\t";
        // line 11
        echo twig_include($this->env, $context, "user/components/head.twig");
        echo "
        <!--End-->
\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t";
        // line 17
        echo twig_include($this->env, $context, "user/components/menu.twig");
        echo "
\t\t<!-- Header part end-->

\t\t<!-- banner part start-->
\t\t\t<section class=\"banner_part\"> <div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-lg-5 col-xl-5\">
\t\t\t\t\t\t<div class=\"banner_text\">
\t\t\t\t\t\t\t<div class=\"banner_text_iner\">
\t\t\t\t\t\t\t\t<h5>We are here for your care</h5>
\t\t\t\t\t\t\t\t<h1>Best Care & Better Doctor</h1>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus cmodo viverra
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn_2\">Make an appointment</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"banner_img\">
\t\t\t\t\t\t\t<img src=\"img/banner_img.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- banner part start-->

\t\t<!-- about us part start-->
\t\t<section class=\"about_us padding_top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-6\">
\t\t\t\t\t\t<div class=\"about_us_img\">
\t\t\t\t\t\t\t<img src=\"img/top_service.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t\t<div class=\"about_us_text\">
\t\t\t\t\t\t\t<h2>About us</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra maecenas accumsan lacus vel</p>
\t\t\t\t\t\t\t<a class=\"btn_2 \" href=\"#\">learn more</a>
\t\t\t\t\t\t\t<div class=\"banner_item\">
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/icon/banner_1.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Emergency</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/icon/banner_2.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Appointment</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/icon/banner_3.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Qualfied</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- about us part end-->

\t\t<!-- feature_part start-->
\t\t<section class=\"feature_part\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"section_tittle text-center\">
\t\t\t\t\t\t\t<h2>Our services</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-lg-3 col-sm-12\">
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t\t<div class=\"single_feature_img\">
\t\t\t\t\t\t\t<img src=\"img/service.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-12\">
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- feature_part start-->

\t\t<!-- our depertment part start-->
\t\t<section class=\"our_depertment section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center text-center\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t<div class=\"depertment_content\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t\t\t\t<h2>Our Depertment</h2>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- our depertment part end-->

\t\t<!--::doctor_part start::-->
\t\t<section class=\"doctor_part section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"section_tittle text-center\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tExperienced Doctors</h2>
\t\t\t\t\t\t\t<p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/img/doctor/doctor_1.png"], "method", false, false, false, 198), "html", null, true);
        echo "\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Adam Billiard</h3>
\t\t\t\t\t\t\t\t\t<p>Heart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"img/doctor/doctor_4.png\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Adam Billiard</h3>
\t\t\t\t\t\t\t\t\t<p>Medicine specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"img/doctor/doctor_2.png\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Fred Macyard</h3>
\t\t\t\t\t\t\t\t\t<p>CHeart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"img/doctor/doctor_3.png\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Justin Stuard</h3>
\t\t\t\t\t\t\t\t\t<p>Heart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::doctor_part end::-->

\t\t<!--::regervation_part start::-->
\t\t<section class=\"regervation_part section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center regervation_content\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"regervation_part_iner\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<h2>Make an Appointment</h2>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"inputPassword4\" placeholder=\"Email address\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"Select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>Select service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group time_icon col-md-6\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"Select2\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Time</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">8 AM TO 10AM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">10 AM TO 12PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">12PM TO 2PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2PM TO 4PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">4PM TO 6PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">6PM TO 8PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">4PM TO 10PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">10PM TO 12PM</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"Textarea\" rows=\"4\" placeholder=\"Your Note \"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"regerv_btn\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn_2\">Make an Appointment</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-5 col-md-6\">
\t\t\t\t\t\t<div class=\"reservation_img\">
\t\t\t\t\t\t\t<img src=\"img/reservation.png\" alt=\"\" class=\"reservation_img_iner\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::regervation_part end::-->

\t\t<!--::blog_part start::-->
\t\t<section class=\"blog_part section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"section_tittle text-center\">
\t\t\t\t\t\t\t<h2>Our Blog</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"single-home-blog\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog_2.png\" class=\"card-img-top\" alt=\"blog\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">First cattle which earth unto let health for can get and see what you
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-user\"></span>Jhon mike</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bookmark\"></span>Clinic, doctors</li>
\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"single-home-blog\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog_3.png\" class=\"card-img-top\" alt=\"blog\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">First cattle which earth unto let health for can get and see what you
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-user\"></span>Jhon mike</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bookmark\"></span>Clinic, doctors</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::blog_part end::-->

\t\t<!-- footer part start-->
\t\t";
        // line 397
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "
\t\t<!-- footer part end-->


\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 397,  242 => 198,  58 => 17,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html
\tlang=\"en\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>medical</title>

\t\t<!--Phần style, boostrap-->
\t\t{{ include('user/components/head.twig')}}
        <!--End-->
\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t{{ include('user/components/menu.twig')}}
\t\t<!-- Header part end-->

\t\t<!-- banner part start-->
\t\t\t<section class=\"banner_part\"> <div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-lg-5 col-xl-5\">
\t\t\t\t\t\t<div class=\"banner_text\">
\t\t\t\t\t\t\t<div class=\"banner_text_iner\">
\t\t\t\t\t\t\t\t<h5>We are here for your care</h5>
\t\t\t\t\t\t\t\t<h1>Best Care & Better Doctor</h1>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus cmodo viverra
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn_2\">Make an appointment</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"banner_img\">
\t\t\t\t\t\t\t<img src=\"img/banner_img.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- banner part start-->

\t\t<!-- about us part start-->
\t\t<section class=\"about_us padding_top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-6\">
\t\t\t\t\t\t<div class=\"about_us_img\">
\t\t\t\t\t\t\t<img src=\"img/top_service.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t\t<div class=\"about_us_text\">
\t\t\t\t\t\t\t<h2>About us</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra maecenas accumsan lacus vel</p>
\t\t\t\t\t\t\t<a class=\"btn_2 \" href=\"#\">learn more</a>
\t\t\t\t\t\t\t<div class=\"banner_item\">
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/icon/banner_1.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Emergency</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/icon/banner_2.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Appointment</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/icon/banner_3.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Qualfied</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- about us part end-->

\t\t<!-- feature_part start-->
\t\t<section class=\"feature_part\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"section_tittle text-center\">
\t\t\t\t\t\t\t<h2>Our services</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-lg-3 col-sm-12\">
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t\t<div class=\"single_feature_img\">
\t\t\t\t\t\t\t<img src=\"img/service.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-12\">
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single_feature\">
\t\t\t\t\t\t\t<div class=\"single_feature_part\">
\t\t\t\t\t\t\t\t<span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- feature_part start-->

\t\t<!-- our depertment part start-->
\t\t<section class=\"our_depertment section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center text-center\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t<div class=\"depertment_content\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t\t\t\t<h2>Our Depertment</h2>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- our depertment part end-->

\t\t<!--::doctor_part start::-->
\t\t<section class=\"doctor_part section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"section_tittle text-center\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tExperienced Doctors</h2>
\t\t\t\t\t\t\t<p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"{{ helper.custom_link('style/img/doctor/doctor_1.png') }}\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Adam Billiard</h3>
\t\t\t\t\t\t\t\t\t<p>Heart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"img/doctor/doctor_4.png\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Adam Billiard</h3>
\t\t\t\t\t\t\t\t\t<p>Medicine specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"img/doctor/doctor_2.png\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Fred Macyard</h3>
\t\t\t\t\t\t\t\t\t<p>CHeart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"img/doctor/doctor_3.png\" alt=\"doctor\">
\t\t\t\t\t\t\t\t<div class=\"social_icon\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ti-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single_text\">
\t\t\t\t\t\t\t\t<div class=\"single_blog_text\">
\t\t\t\t\t\t\t\t\t<h3>DR Justin Stuard</h3>
\t\t\t\t\t\t\t\t\t<p>Heart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::doctor_part end::-->

\t\t<!--::regervation_part start::-->
\t\t<section class=\"regervation_part section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center regervation_content\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"regervation_part_iner\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<h2>Make an Appointment</h2>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"inputPassword4\" placeholder=\"Email address\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"Select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>Select service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">Name of service</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group time_icon col-md-6\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"Select2\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Time</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">8 AM TO 10AM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">10 AM TO 12PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">12PM TO 2PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2PM TO 4PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">4PM TO 6PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">6PM TO 8PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">4PM TO 10PM</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">10PM TO 12PM</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"Textarea\" rows=\"4\" placeholder=\"Your Note \"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"regerv_btn\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn_2\">Make an Appointment</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-5 col-md-6\">
\t\t\t\t\t\t<div class=\"reservation_img\">
\t\t\t\t\t\t\t<img src=\"img/reservation.png\" alt=\"\" class=\"reservation_img_iner\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::regervation_part end::-->

\t\t<!--::blog_part start::-->
\t\t<section class=\"blog_part section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"section_tittle text-center\">
\t\t\t\t\t\t\t<h2>Our Blog</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"single-home-blog\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog_2.png\" class=\"card-img-top\" alt=\"blog\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">First cattle which earth unto let health for can get and see what you
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-user\"></span>Jhon mike</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bookmark\"></span>Clinic, doctors</li>
\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"single-home-blog\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog_3.png\" class=\"card-img-top\" alt=\"blog\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">First cattle which earth unto let health for can get and see what you
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-user\"></span>Jhon mike</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bookmark\"></span>Clinic, doctors</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::blog_part end::-->

\t\t<!-- footer part start-->
\t\t{{ include('user/components/footer.twig')}}
\t\t<!-- footer part end-->


\t</body>

</html>
", "user/pages/home.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\home.twig");
    }
}
