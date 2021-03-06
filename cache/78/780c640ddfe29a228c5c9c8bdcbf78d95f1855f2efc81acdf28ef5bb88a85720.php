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

/* user/pages/blog.twig */
class __TwigTemplate_bbc8fb57a97d5cf94b0de1e5e0efcb335d65db8caf5796a851ceb59fcd5d7a50 extends Template
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
\t\t\t\t\t\t\t\t<h2>Blog</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->
\t\t\t<section class=\"pt-5 pb-5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mb-md-2\">
\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 35
            echo "\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-sm border-light mb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["user/detail-blog"]), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://via.placeholder.com/500x350/5fa9f8/ffffff\" class=\"card-img-top\" alt=\"image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"font-weight-normal\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 43), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Ng??y t???o: ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "created_at", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>T??c gi???: ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "first_name", [], "any", false, false, false, 51), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_name", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["user/detail-blog"]), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" class=\"btn btn-info\">Xem chi ti???t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row py-4 mt-md-5\">
\t\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-lg shadow btn-primary mt-1\">Browse all</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>


\t\t<!-- footer part start-->
\t\t";
        // line 73
        echo twig_include($this->env, $context, "user/components/footer.twig");
        echo "
\t\t<!-- footer part end-->

\t</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "user/pages/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 73,  134 => 61,  119 => 54,  111 => 51,  104 => 47,  97 => 43,  87 => 38,  82 => 35,  78 => 34,  55 => 14,  47 => 9,  37 => 1,);
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
\t\t{{ include('user/components/menu.twig')}}
\t\t<!-- Header part end-->

\t\t<!-- breadcrumb start-->
\t\t\t<section class=\"breadcrumb_part breadcrumb_bg\"> <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner\">
\t\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t\t<h2>Blog</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb start-->
\t\t\t<section class=\"pt-5 pb-5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mb-md-2\">
\t\t\t\t\t\t{% for blog in data %}
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-sm border-light mb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ createLink('user/detail-blog') }}?id={{blog.id}}\" class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://via.placeholder.com/500x350/5fa9f8/ffffff\" class=\"card-img-top\" alt=\"image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"font-weight-normal\">{{ blog.title }}</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>Ng??y t???o: {{ blog.created_at }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small lh-120\" style=\"font-size: 100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2\"></i>T??c gi???: {{ blog.first_name }} {{ blog.last_name }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex my-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ createLink('user/detail-blog') }}?id={{blog.id}}\" class=\"btn btn-info\">Xem chi ti???t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row py-4 mt-md-5\">
\t\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-lg shadow btn-primary mt-1\">Browse all</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>


\t\t<!-- footer part start-->
\t\t{{include('user/components/footer.twig')}}
\t\t<!-- footer part end-->

\t</body>

</html>
", "user/pages/blog.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\pages\\blog.twig");
    }
}
