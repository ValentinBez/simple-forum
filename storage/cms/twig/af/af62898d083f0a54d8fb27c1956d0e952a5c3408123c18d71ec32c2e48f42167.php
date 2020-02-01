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

/* C:\xampp\htdocs\forum/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_3bc041caee1d8f3db250528d1c91de766c59266ea821fb436151e4db33e7086e extends \Twig\Template
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
        echo "<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("features");
        echo "\">Forum</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-left\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "baseFileName", [], "any", false, false, false, 6) == "forum")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
        echo "\">Forum</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "baseFileName", [], "any", false, false, false, 9) == "about")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t";
        // line 14
        if (($context["user"] ?? null)) {
            // line 15
            echo "\t\t\t    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"dropdown-item\" href=\"";
            // line 20
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Change account settings</a>
                      <a class=\"dropdown-item\" href=\"#\" data-request=\"onLogout\">Logout</a>
                    </div>
                </li>
\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t<li class=\"nav-item";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 25), "baseFileName", [], "any", false, false, false, 25) == "login")) ? (" active") : (""));
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Login</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
            // line 28
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "baseFileName", [], "any", false, false, false, 28) == "register")) ? (" active") : (""));
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Register</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 32
        echo "\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  101 => 29,  97 => 28,  92 => 26,  87 => 25,  79 => 20,  73 => 17,  69 => 15,  67 => 14,  60 => 10,  56 => 9,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'features'|page }}\">Forum</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-left\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'forum' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'forum'|page }}\">Forum</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t{% if user %}
\t\t\t    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      {{ user.name }}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"dropdown-item\" href=\"{{ 'login'|page }}\">Change account settings</a>
                      <a class=\"dropdown-item\" href=\"#\" data-request=\"onLogout\">Logout</a>
                    </div>
                </li>
\t\t\t{% else %}
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'login' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'login'|page }}\">Login</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'register' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'register'|page }}\">Register</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\xampp\\htdocs\\forum/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
