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

/* admin/pages/login_sample.twig */
class __TwigTemplate_70bb3ea05d9f24129d71119a5f497733817f56a3c0d300fcf5eb570f4f7aa0cf extends Template
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
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('redirect')->getCallable(), ["admin/post-login"]), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"text\" name=\"email\">
    <input type=\"password\" name=\"password\">
    <button name=\"submit\" type=\"submit\">Login</button>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/pages/login_sample.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<form action=\"{{ redirect('admin/post-login') }}\" method=\"post\">
    <input type=\"text\" name=\"email\">
    <input type=\"password\" name=\"password\">
    <button name=\"submit\" type=\"submit\">Login</button>
</form>
</body>
</html>", "admin/pages/login_sample.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\admin\\pages\\login_sample.twig");
    }
}
