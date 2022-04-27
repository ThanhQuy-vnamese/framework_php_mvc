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

/* user/components/menu.twig */
class __TwigTemplate_bb5751dd610a2263fe5d44706f18bb17ec52f32a1135c77e3c2dd1faa81f4965 extends Template
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
        echo "<!--::header part start::-->
<header class=\"main_menu home_menu\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), [""]), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/logo.png"]), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse main-menu-item justify-content-center\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav align-items-center\">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), [""]), "html", null, true);
        echo "\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["about"]), "html", null, true);
        echo "\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/blog"]), "html", null, true);
        echo "\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["doctor"]), "html", null, true);
        echo "\">Doctors</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tService
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["statistic-covid"]), "html", null, true);
        echo "\">Thống kê covid</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["book-clinic"]), "html", null, true);
        echo "\">Xem lịch khám</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/medican-record"]), "html", null, true);
        echo "?user_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user"], "method", false, false, false, 35), "user_id", [], "any", false, false, false, 35), "html", null, true);
        echo "\">Khai báo y tế</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["contact"]), "html", null, true);
        echo "\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t";
        // line 42
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "get", [0 => "user"], "method", false, false, false, 42), ""))) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user"], "method", false, false, false, 45), "first_name", [], "any", false, false, false, 45), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/profile"]), "html", null, true);
            echo "?user_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user"], "method", false, false, false, 48), "user_id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">Profile</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/logout"]), "html", null, true);
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<a class=\"btn_2 d-none d-lg-block\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/login"]), "html", null, true);
            echo "\">Login</a>
\t\t\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row align-items-center mb-5\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<form method=\"GET\" action=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["user/search-doctor"]), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"input-group rounded\">
\t\t\t\t\t\t<input type=\"search\" name=\"keyword\" class=\"form-control rounded\" placeholder=\"Nhập bác sĩ cần tìm\" aria-label=\"Search\" aria-describedby=\"search-addon\"/>
\t\t\t\t\t\t<span id=\"search-addon\" style=\"padding-left:10px\">
\t\t\t\t\t\t\t<input class=\"btn btn-info\" type=\"submit\" value=\"Search\"/>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- Header part end-->
";
    }

    public function getTemplateName()
    {
        return "user/components/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  142 => 54,  136 => 52,  130 => 49,  124 => 48,  118 => 45,  114 => 43,  112 => 42,  106 => 39,  97 => 35,  93 => 34,  89 => 33,  79 => 26,  73 => 23,  67 => 20,  61 => 17,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--::header part start::-->
<header class=\"main_menu home_menu\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ redirect('') }}\">
\t\t\t\t\t\t<img src=\"{{ createLink('style/img/logo.png') }}\" alt=\"logo\">
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse main-menu-item justify-content-center\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav align-items-center\">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ redirect('') }}\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ redirect('about') }}\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ redirect('user/blog') }}\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ redirect('doctor') }}\">Doctors</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tService
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ redirect('statistic-covid') }}\">Thống kê covid</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ redirect('book-clinic') }}\">Xem lịch khám</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ redirect('user/medican-record') }}?user_id={{ session.get('user').user_id}}\">Khai báo y tế</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ redirect('contact') }}\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t{% if(Session.get('user') != '') %}
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t{{ session.get('user').first_name}}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ redirect('user/profile')}}?user_id={{ session.get('user').user_id}}\">Profile</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ redirect('user/logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a class=\"btn_2 d-none d-lg-block\" href=\"{{ redirect('user/login') }}\">Login</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row align-items-center mb-5\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<form method=\"GET\" action=\"{{ redirect('user/search-doctor') }}\">
\t\t\t\t\t<div class=\"input-group rounded\">
\t\t\t\t\t\t<input type=\"search\" name=\"keyword\" class=\"form-control rounded\" placeholder=\"Nhập bác sĩ cần tìm\" aria-label=\"Search\" aria-describedby=\"search-addon\"/>
\t\t\t\t\t\t<span id=\"search-addon\" style=\"padding-left:10px\">
\t\t\t\t\t\t\t<input class=\"btn btn-info\" type=\"submit\" value=\"Search\"/>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- Header part end-->
", "user/components/menu.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\components\\menu.twig");
    }
}
