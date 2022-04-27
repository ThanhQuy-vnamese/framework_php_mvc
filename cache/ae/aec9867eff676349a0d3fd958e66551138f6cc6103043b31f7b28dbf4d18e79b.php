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
class __TwigTemplate_e6fcd093b6ca35b55a823d6734473256ded93885d3886c03e9dcd1508969f828 extends Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/favicon.png"]), "html", null, true);
        echo "\">
<link
rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">

<!-- Bootstrap CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/bootstrap.min.css"]), "html", null, true);
        echo "\">

<!-- animate CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/animate.css"]), "html", null, true);
        echo "\">

<!-- owl carousel CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/owl.carousel.min.css"]), "html", null, true);
        echo "\">

<!-- themify CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/themify-icons.css"]), "html", null, true);
        echo "\">

<!-- flaticon CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/flaticon.css"]), "html", null, true);
        echo "\">

<!-- magnific popup CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/magnific-popup.css"]), "html", null, true);
        echo "\">

<!-- nice select CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/nice-select.css"]), "html", null, true);
        echo "\">

<!-- swiper CSS -->
<link
rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/slick.css"]), "html", null, true);
        echo "\">

<!-- style CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/css/style.css"]), "html", null, true);
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
        return new Source("<link rel=\"icon\" href=\"{{ createLink('style/img/favicon.png')}}\">
<link
rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">

<!-- Bootstrap CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/bootstrap.min.css')}}\">

<!-- animate CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/animate.css')}}\">

<!-- owl carousel CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/owl.carousel.min.css')}}\">

<!-- themify CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/themify-icons.css')}}\">

<!-- flaticon CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/flaticon.css')}}\">

<!-- magnific popup CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/magnific-popup.css')}}\">

<!-- nice select CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/nice-select.css')}}\">

<!-- swiper CSS -->
<link
rel=\"stylesheet\" href=\"{{ createLink('style/css/slick.css')}}\">

<!-- style CSS -->
<link rel=\"stylesheet\" href=\"{{ createLink('style/css/style.css')}}\">
", "user/components/head.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\components\\head.twig");
    }
}
