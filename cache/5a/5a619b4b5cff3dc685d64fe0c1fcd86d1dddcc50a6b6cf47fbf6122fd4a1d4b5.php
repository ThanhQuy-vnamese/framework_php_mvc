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
class __TwigTemplate_b01980b48c9da652bce09a40b8eb3387f0b0130ce9581869ab0a67c266be9d9d extends Template
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
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["doctor/book-clinic"]), "html", null, true);
        echo "?user_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user"], "method", false, false, false, 30), "user_id", [], "any", false, false, false, 30), "html", null, true);
        echo "\" class=\"btn_2\">Make an appointment</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"banner_img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/banner_img.png"]), "html", null, true);
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t<img src=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/top_service.png"]), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t\t<div class=\"about_us_text\">
\t\t\t\t\t\t\t<h2>About us</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra maecenas accumsan lacus vel</p>
\t\t\t\t\t\t\t<a class=\"btn_2 \" href=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["about"]), "html", null, true);
        echo "\">learn more</a>
\t\t\t\t\t\t\t<div class=\"banner_item\">
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/icon/banner_1.svg"]), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Emergency</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/icon/banner_2.svg"]), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Appointment</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/icon/banner_3.svg"]), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Qualfied</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- about us part end-->

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
\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getAllDoctor"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 94
            echo "\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 97
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/doctor/doctor_1.png"]), "html", null, true);
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
\t\t\t\t\t\t\t\t\t<h3> ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "first_name", [], "any", false, false, false, 109), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "last_name", [], "any", false, false, false, 109), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t<p>Heart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t";
        // line 123
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
        return array (  208 => 123,  199 => 116,  184 => 109,  169 => 97,  164 => 94,  160 => 93,  133 => 69,  126 => 65,  119 => 61,  113 => 58,  103 => 51,  86 => 37,  74 => 30,  58 => 17,  49 => 11,  37 => 1,);
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
\t\t\t\t\t\t\t\t<a  href=\"{{ createLink('doctor/book-clinic')}}?user_id={{session.get('user').user_id }}\" class=\"btn_2\">Make an appointment</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"banner_img\">
\t\t\t\t\t\t\t<img src=\"{{ createLink('style/img/banner_img.png') }}\" alt=\"\">
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
\t\t\t\t\t\t\t<img src=\"{{ createLink('style/img/top_service.png') }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t\t<div class=\"about_us_text\">
\t\t\t\t\t\t\t<h2>About us</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra maecenas accumsan lacus vel</p>
\t\t\t\t\t\t\t<a class=\"btn_2 \" href=\"{{ createLink('about') }}\">learn more</a>
\t\t\t\t\t\t\t<div class=\"banner_item\">
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ createLink('style/img/icon/banner_1.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Emergency</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ createLink('style/img/icon/banner_2.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Appointment</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"single_item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ createLink('style/img/icon/banner_3.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Qualfied</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- about us part end-->

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
\t\t\t\t{% for user in getAllDoctor %}
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"single_blog_item\">
\t\t\t\t\t\t\t<div class=\"single_blog_img\">
\t\t\t\t\t\t\t\t<img src=\"{{ createLink('style/img/doctor/doctor_1.png') }}\" alt=\"doctor\">
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
\t\t\t\t\t\t\t\t\t<h3> {{ user.first_name }} {{ user.last_name }}</h3>
\t\t\t\t\t\t\t\t\t<p>Heart specialist</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--::doctor_part end::-->


\t\t<!-- footer part start-->
\t\t{{ include('user/components/footer.twig')}}
\t\t<!-- footer part end-->


\t</body>

</html>
", "user/pages/home.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\home.twig");
    }
}
