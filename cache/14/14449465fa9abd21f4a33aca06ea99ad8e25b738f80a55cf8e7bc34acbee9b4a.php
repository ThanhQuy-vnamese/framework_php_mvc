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

/* user/components/head.twig */
class __TwigTemplate_5c5d6056b70d063d3dc6555831fecb1834fc18b7ac2ac3bdf78dae588c799541 extends Template
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
        echo "<link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/img/favicon.png"], "method", false, false, false, 1), "html", null, true);
        echo "\">
<link
rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">

<!-- Bootstrap CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/bootstrap.min.css"], "method", false, false, false, 7), "html", null, true);
        echo "\">

<!-- animate CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/animate.css"], "method", false, false, false, 11), "html", null, true);
        echo "\">

<!-- owl carousel CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/owl.carousel.min.css"], "method", false, false, false, 15), "html", null, true);
        echo "\">

<!-- themify CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/themify-icons.css"], "method", false, false, false, 19), "html", null, true);
        echo "\">

<!-- flaticon CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/flaticon.css"], "method", false, false, false, 23), "html", null, true);
        echo "\">

<!-- magnific popup CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/magnific-popup.css"], "method", false, false, false, 27), "html", null, true);
        echo "\">

<!-- nice select CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/nice-select.css"], "method", false, false, false, 31), "html", null, true);
        echo "\">

<!-- swiper CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/slick.css"], "method", false, false, false, 35), "html", null, true);
        echo "\">

<!-- style CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helper"] ?? null), "custom_link", [0 => "style/css/style.css"], "method", false, false, false, 38), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "user/components/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  96 => 35,  89 => 31,  82 => 27,  75 => 23,  68 => 19,  61 => 15,  54 => 11,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"icon\" href=\"{{ helper.custom_link('style/img/favicon.png')}}\">
<link
rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">

<!-- Bootstrap CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/bootstrap.min.css')}}\">

<!-- animate CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/animate.css')}}\">

<!-- owl carousel CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/owl.carousel.min.css')}}\">

<!-- themify CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/themify-icons.css')}}\">

<!-- flaticon CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/flaticon.css')}}\">

<!-- magnific popup CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/magnific-popup.css')}}\">

<!-- nice select CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/nice-select.css')}}\">

<!-- swiper CSS -->
<link
rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/slick.css')}}\">

<!-- style CSS -->
<link rel=\"stylesheet\" href=\"{{ helper.custom_link('style/css/style.css')}}\">
", "user/components/head.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc - template-done - Copy\\views\\user\\components\\head.twig");
    }
}
