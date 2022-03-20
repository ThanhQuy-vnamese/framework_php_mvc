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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => ""], "method", false, false, false, 7), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/img/logo.png"], "method", false, false, false, 8), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => ""], "method", false, false, false, 17), "html", null, true);
        echo "\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "about"], "method", false, false, false, 20), "html", null, true);
        echo "\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "blog"], "method", false, false, false, 23), "html", null, true);
        echo "\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "doctor"], "method", false, false, false, 26), "html", null, true);
        echo "\">Doctors</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tService
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "book-clinic"], "method", false, false, false, 33), "html", null, true);
        echo "\">Đặt phòng khám</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "book-clinic"], "method", false, false, false, 34), "html", null, true);
        echo "\">Khai báo y tế</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "contact"], "method", false, false, false, 38), "html", null, true);
        echo "\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["Session"] ?? null), "hasFlash", [0 => "user"], "method", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t <i class=\"fa-solid fa-user\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "getValue", [0 => "user"], "method", false, false, false, 43), "first_name", [], "any", false, false, false, 43), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "book-clinic"], "method", false, false, false, 46), "html", null, true);
            echo "\">Profile</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "user/logout"], "method", false, false, false, 47), "html", null, true);
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t<a class=\"btn_2 d-none d-lg-block\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "user/login"], "method", false, false, false, 50), "html", null, true);
            echo "\">Login</a>
\t\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row align-items-center mb-5\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"input-group rounded\">
\t\t\t\t\t\t<input type=\"search\" class=\"form-control rounded\" placeholder=\"Nhập tên bệnh viện cần tìm\" aria-label=\"Search\" aria-describedby=\"search-addon\"/>
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
        return array (  133 => 52,  127 => 50,  121 => 47,  117 => 46,  111 => 43,  108 => 42,  106 => 41,  100 => 38,  93 => 34,  89 => 33,  79 => 26,  73 => 23,  67 => 20,  61 => 17,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--::header part start::-->
<header class=\"main_menu home_menu\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ helper.custom_link('') }}\">
\t\t\t\t\t\t<img src=\"{{ helper.custom_link('style/img/logo.png') }}\" alt=\"logo\">
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse main-menu-item justify-content-center\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav align-items-center\">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ helper.custom_link('') }}\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ helper.custom_link('about') }}\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ helper.custom_link('blog') }}\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ helper.custom_link('doctor') }}\">Doctors</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tService
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ helper.custom_link('book-clinic') }}\">Đặt phòng khám</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ helper.custom_link('book-clinic') }}\">Khai báo y tế</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ helper.custom_link('contact') }}\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t{% if(Session.hasFlash('user')) %}
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t <i class=\"fa-solid fa-user\"></i> {{ session.getValue('user').first_name}}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ helper.custom_link('book-clinic') }}\">Profile</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ helper.custom_link('user/logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a class=\"btn_2 d-none d-lg-block\" href=\"{{ helper.custom_link('user/login') }}\">Login</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row align-items-center mb-5\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"input-group rounded\">
\t\t\t\t\t\t<input type=\"search\" class=\"form-control rounded\" placeholder=\"Nhập tên bệnh viện cần tìm\" aria-label=\"Search\" aria-describedby=\"search-addon\"/>
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
", "user/components/menu.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\components\\menu.twig");
    }
}
