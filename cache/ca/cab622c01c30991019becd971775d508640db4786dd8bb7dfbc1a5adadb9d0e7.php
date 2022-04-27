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

/* user/pages/contact.twig */
class __TwigTemplate_b2dc283fd0ee64312826ddcf56b6126a9d79b264194ddda055402725d444284c extends Template
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
\t\t<title>Contact</title>
\t\t";
        // line 9
        echo twig_include($this->env, $context, "user/components/head.twig");
        echo "
\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t";
        // line 14
        echo twig_include($this->env, $context, "user/components/menu.twig");
        echo "
\t\t<!-- Header part end-->

\t\t<!-- breadcrumb start-->
\t\t\t<section class=\"breadcrumb_part breadcrumb_bg\"> <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner\">
\t\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t\t<h2>contact</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->

\t\t<!-- ================ contact section start ================= -->
\t\t<section class=\"contact-section section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-none d-sm-block mb-5 pb-4\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.4231794298908!2d106.69032532370754!3d10.823067399999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deb3ef536f31%3A0x8b7bb8b7c956157b!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBUUC5IQ00!5e0!3m2!1svi!2s!4v1649744207670!5m2!1svi!2s\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t</center>

\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<h2 class=\"contact-title\">Get in Touch</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<form class=\"form-contact contact_form\" action=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["post-contact"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "errorContact"], "method", false, false, false, 49)) {
            // line 50
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "errorContact"], "method", false, false, false, 50), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "successContact"], "method", false, false, false, 52)) {
            // line 53
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getFlash", [0 => "successContact"], "method", false, false, false, 53), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"fullname\" id=\"name\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your name'\" placeholder='Enter your name'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email address'\" placeholder='Enter email address'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"phone\" id=\"phone\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter phone'\" placeholder='Enter phone'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"description\" rows=\"5\" name=\"message\" placeholder=\"Description\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"button button-contactForm btn_1\" value=\"Send Message\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"media contact-info\">
\t\t\t\t\t\t\t<span class=\"contact-info__icon\">
\t\t\t\t\t\t\t\t<i class=\"ti-home\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t<h3>Buttonwood, California.</h3>
\t\t\t\t\t\t\t\t<p>Rosemead, CA 91770</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media contact-info\">
\t\t\t\t\t\t\t<span class=\"contact-info__icon\">
\t\t\t\t\t\t\t\t<i class=\"ti-tablet\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t<h3>00 (440) 9865 562</h3>
\t\t\t\t\t\t\t\t<p>Mon to Fri 9am to 6pm</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media contact-info\">
\t\t\t\t\t\t\t<span class=\"contact-info__icon\">
\t\t\t\t\t\t\t\t<i class=\"ti-email\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t<h3>support@colorlib.com</h3>
\t\t\t\t\t\t\t\t<p>Send us your query anytime!</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ================ contact section end ================= -->

\t\t<!-- footer part start-->


\t\t<!-- footer part end-->
\t";
        // line 120
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "
\t\t<!-- jquery plugins here-->


\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 120,  113 => 55,  107 => 53,  104 => 52,  98 => 50,  96 => 49,  92 => 48,  55 => 14,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>Contact</title>
\t\t{{ include('user/components/head.twig') }}
\t</head>

\t<body>
\t\t<!--::header part start::-->
\t\t{{ include('user/components/menu.twig')}}
\t\t<!-- Header part end-->

\t\t<!-- breadcrumb start-->
\t\t\t<section class=\"breadcrumb_part breadcrumb_bg\"> <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner\">
\t\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t\t<h2>contact</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->

\t\t<!-- ================ contact section start ================= -->
\t\t<section class=\"contact-section section_padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-none d-sm-block mb-5 pb-4\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.4231794298908!2d106.69032532370754!3d10.823067399999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deb3ef536f31%3A0x8b7bb8b7c956157b!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBUUC5IQ00!5e0!3m2!1svi!2s!4v1649744207670!5m2!1svi!2s\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t</center>

\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<h2 class=\"contact-title\">Get in Touch</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<form class=\"form-contact contact_form\" action=\"{{ redirect('post-contact') }}\" method=\"post\">
\t\t\t\t\t\t\t{% if(Session.hasFlash('errorContact')) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ session.getFlash('errorContact') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if(Session.hasFlash('successContact')) %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">{{ session.getFlash('successContact') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"fullname\" id=\"name\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your name'\" placeholder='Enter your name'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email address'\" placeholder='Enter email address'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"phone\" id=\"phone\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter phone'\" placeholder='Enter phone'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"description\" rows=\"5\" name=\"message\" placeholder=\"Description\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"button button-contactForm btn_1\" value=\"Send Message\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"media contact-info\">
\t\t\t\t\t\t\t<span class=\"contact-info__icon\">
\t\t\t\t\t\t\t\t<i class=\"ti-home\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t<h3>Buttonwood, California.</h3>
\t\t\t\t\t\t\t\t<p>Rosemead, CA 91770</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media contact-info\">
\t\t\t\t\t\t\t<span class=\"contact-info__icon\">
\t\t\t\t\t\t\t\t<i class=\"ti-tablet\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t<h3>00 (440) 9865 562</h3>
\t\t\t\t\t\t\t\t<p>Mon to Fri 9am to 6pm</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media contact-info\">
\t\t\t\t\t\t\t<span class=\"contact-info__icon\">
\t\t\t\t\t\t\t\t<i class=\"ti-email\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t<h3>support@colorlib.com</h3>
\t\t\t\t\t\t\t\t<p>Send us your query anytime!</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ================ contact section end ================= -->

\t\t<!-- footer part start-->


\t\t<!-- footer part end-->
\t{{ include('user/components/footer.twig')}}
\t\t<!-- jquery plugins here-->


\t</body>

</html>
", "user/pages/contact.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\contact.twig");
    }
}
