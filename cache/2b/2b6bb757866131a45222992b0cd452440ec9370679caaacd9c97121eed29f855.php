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

/* user/pages/about.twig */
class __TwigTemplate_414fdfb3da484474db7463259cf9f39d949c0cc4d7b8afa45c0defbb40c675c2 extends Template
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
\t</head>

\t<body>
\t\t<!--::header part start::-->
        ";
        // line 14
        echo twig_include($this->env, $context, "user/components/menu.twig");
        echo "
\t\t<!-- Header part end-->

\t\t<!-- breadcrumb start-->
\t\t<section class=\"breadcrumb_part breadcrumb_bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner\">
\t\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t\t<h2>about us</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->

\t\t<!-- about us part start-->
\t\t<section class=\"about_us single_about_padding\">
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
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed
\t\t\t\t\t\t\t\t                            do eiusmod tempor incididunt ut labore et dolore magna aliqua
\t\t\t\t\t\t\t\t                            Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra
\t\t\t\t\t\t\t\t                            maecenas accumsan lacus vel</p>
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
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
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

\t\t<!-- footer part start-->
        ";
        // line 125
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "
\t\t<!-- footer part end-->

\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 125,  55 => 14,  47 => 9,  37 => 1,);
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
\t</head>

\t<body>
\t\t<!--::header part start::-->
        {{ include('user/components/menu.twig')}}
\t\t<!-- Header part end-->

\t\t<!-- breadcrumb start-->
\t\t<section class=\"breadcrumb_part breadcrumb_bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner\">
\t\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t\t<h2>about us</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->

\t\t<!-- about us part start-->
\t\t<section class=\"about_us single_about_padding\">
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
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed
\t\t\t\t\t\t\t\t                            do eiusmod tempor incididunt ut labore et dolore magna aliqua
\t\t\t\t\t\t\t\t                            Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra
\t\t\t\t\t\t\t\t                            maecenas accumsan lacus vel</p>
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
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single_our_depertment\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Better Future</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Darkness multiply rule Which from without life creature blessed
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                give moveth moveth seas make day which divided our have.</p>
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

\t\t<!-- footer part start-->
        {{include('user/components/footer.twig')}}
\t\t<!-- footer part end-->

\t</body>

</html>
", "user/pages/about.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\about.twig");
    }
}
