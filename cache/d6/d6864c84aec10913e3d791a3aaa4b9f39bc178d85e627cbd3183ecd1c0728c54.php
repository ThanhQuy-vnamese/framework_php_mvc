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

/* user/components/footer.twig */
class __TwigTemplate_e001a8aa895496e868ffb6337b45128a4bd8bba58a2d52056d4511d261fc82f0 extends Template
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
        echo "
<footer class=\"footer-area\">
\t<div class=\"footer section_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t<div class=\"col-xl-6 col-md-6 col-sm-6 single-footer-widget\">
\t\t\t\t\t<a href=\"#\" class=\"footer_logo\">
\t\t\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/img/logo.png"]), "html", null, true);
        echo "\" alt=\"#\">
\t\t\t\t\t</a>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"social_logo\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-skype\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6 col-sm-6 col-md-6 single-footer-widget\">
\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t<p>Seed good winged wherein which night multiply midst does not fruitful</p>
\t\t\t\t\t<div class=\"form-wrap\" id=\"mc_embed_signup\">
\t\t\t\t\t\t<form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"EMAIL\" placeholder=\"Your Email Address\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Your Email Address '\" required=\"\" type=\"email\">
\t\t\t\t\t\t\t<button class=\"click-btn btn btn-default text-uppercase\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-right\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div style=\"position: absolute; left: -5000px;\">
\t\t\t\t\t\t\t\t<input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"copyright_part\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<p
\t\t\t\t\tclass=\"footer-text m-0 col-lg-8 col-md-12\">
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\tCopyright &copy;
\t\t\t\t\t<script>
\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t</script>
\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t<i class=\"ti-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\tby
\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t</p>
\t\t\t\t<div class=\"col-lg-4 col-md-12 text-center text-lg-right footer-social\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-skype\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/jquery-1.12.1.min.js"]), "html", null, true);
        echo "\"></script>

<!-- popper js -->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/popper.min.js"]), "html", null, true);
        echo "\"></script>

<!-- bootstrap js -->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/bootstrap.min.js"]), "html", null, true);
        echo "\"></script>

<!-- owl carousel js -->
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/owl.carousel.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/jquery.nice-select.min.js"]), "html", null, true);
        echo "\"></script>

<!-- contact js -->
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/jquery.ajaxchimp.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/jquery.form.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/jquery.validate.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/mail-script.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/contact.js"]), "html", null, true);
        echo "\"></script>

<!-- custom js -->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('createLink')->getCallable(), ["style/js/custom.js"]), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "user/components/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 105,  170 => 102,  166 => 101,  162 => 100,  158 => 99,  154 => 98,  148 => 95,  144 => 94,  138 => 91,  132 => 88,  126 => 85,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<footer class=\"footer-area\">
\t<div class=\"footer section_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t<div class=\"col-xl-6 col-md-6 col-sm-6 single-footer-widget\">
\t\t\t\t\t<a href=\"#\" class=\"footer_logo\">
\t\t\t\t\t\t<img src=\"{{ createLink('style/img/logo.png') }}\" alt=\"#\">
\t\t\t\t\t</a>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"social_logo\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"ti-skype\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6 col-sm-6 col-md-6 single-footer-widget\">
\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t<p>Seed good winged wherein which night multiply midst does not fruitful</p>
\t\t\t\t\t<div class=\"form-wrap\" id=\"mc_embed_signup\">
\t\t\t\t\t\t<form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"EMAIL\" placeholder=\"Your Email Address\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Your Email Address '\" required=\"\" type=\"email\">
\t\t\t\t\t\t\t<button class=\"click-btn btn btn-default text-uppercase\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-right\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div style=\"position: absolute; left: -5000px;\">
\t\t\t\t\t\t\t\t<input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"copyright_part\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<p
\t\t\t\t\tclass=\"footer-text m-0 col-lg-8 col-md-12\">
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\tCopyright &copy;
\t\t\t\t\t<script>
\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t</script>
\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t<i class=\"ti-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\tby
\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t</p>
\t\t\t\t<div class=\"col-lg-4 col-md-12 text-center text-lg-right footer-social\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"ti-skype\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<script src=\"{{ createLink('style/js/jquery-1.12.1.min.js')}}\"></script>

<!-- popper js -->
<script src=\"{{ createLink('style/js/popper.min.js')}}\"></script>

<!-- bootstrap js -->
<script src=\"{{ createLink('style/js/bootstrap.min.js')}}\"></script>

<!-- owl carousel js -->
<script src=\"{{ createLink('style/js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ createLink('style/js/jquery.nice-select.min.js')}}\"></script>

<!-- contact js -->
<script src=\"{{ createLink('style/js/jquery.ajaxchimp.min.js')}}\"></script>
<script src=\"{{ createLink('style/js/jquery.form.js')}}\"></script>
<script src=\"{{ createLink('style/js/jquery.validate.min.js')}}\"></script>
<script src=\"{{ createLink('style/js/mail-script.js')}}\"></script>
<script src=\"{{ createLink('style/js/contact.js')}}\"></script>

<!-- custom js -->
<script src=\"{{ createLink('style/js/custom.js')}}\"></script>
", "user/components/footer.twig", "D:\\HKII-Year4\\DoAn\\Code\\phpmvc-user-test\\views\\user\\components\\footer.twig");
    }
}
