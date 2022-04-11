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
class __TwigTemplate_9bc827d30d49ceaa4abd19b266f015ba5802349d4c01e4828020a4859c3a421c extends Template
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
\t\t\t\t\t<div id=\"map\" style=\"height: 480px;\"></div>
\t\t\t\t\t<script>
\t\t\t\t\t\tfunction initMap() {
var uluru = {
lat: -25.363,
lng: 131.044
};
var grayStyles = [
{
featureType: \"all\",
stylers: [
{
saturation: -90
}, {
lightness: 50
}
]
}, {
elementType: 'labels.text.fill',
stylers: [
{
color: '#ccdee9'
}
]
}
];
var map = new google.maps.Map(document.getElementById('map'), {
center: {
lat: -31.197,
lng: 150.744
},
zoom: 9,
styles: grayStyles,
scrollwheel: false
});
}
\t\t\t\t\t</script>
\t\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap\"></script>

\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<h2 class=\"contact-title\">Get in Touch</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<form class=\"form-contact contact_form\" action=\"contact_process.php\" method=\"post\" id=\"contactForm\" novalidate=\"novalidate\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control w-100\" name=\"message\" id=\"message\" cols=\"30\" rows=\"9\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Message'\" placeholder='Enter Message'></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your name'\" placeholder='Enter your name'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email address'\" placeholder='Enter email address'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"subject\" id=\"subject\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Subject'\" placeholder='Enter Subject'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"button button-contactForm btn_1\">Send Message</button>
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
        // line 150
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
        return array (  194 => 150,  55 => 14,  47 => 9,  37 => 1,);
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
\t\t\t\t\t<div id=\"map\" style=\"height: 480px;\"></div>
\t\t\t\t\t<script>
\t\t\t\t\t\tfunction initMap() {
var uluru = {
lat: -25.363,
lng: 131.044
};
var grayStyles = [
{
featureType: \"all\",
stylers: [
{
saturation: -90
}, {
lightness: 50
}
]
}, {
elementType: 'labels.text.fill',
stylers: [
{
color: '#ccdee9'
}
]
}
];
var map = new google.maps.Map(document.getElementById('map'), {
center: {
lat: -31.197,
lng: 150.744
},
zoom: 9,
styles: grayStyles,
scrollwheel: false
});
}
\t\t\t\t\t</script>
\t\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap\"></script>

\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<h2 class=\"contact-title\">Get in Touch</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<form class=\"form-contact contact_form\" action=\"contact_process.php\" method=\"post\" id=\"contactForm\" novalidate=\"novalidate\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control w-100\" name=\"message\" id=\"message\" cols=\"30\" rows=\"9\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Message'\" placeholder='Enter Message'></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your name'\" placeholder='Enter your name'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email address'\" placeholder='Enter email address'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"subject\" id=\"subject\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Subject'\" placeholder='Enter Subject'>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"button button-contactForm btn_1\">Send Message</button>
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
", "user/pages/contact.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\pages\\contact.twig");
    }
}
