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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/channel/title.htm */
class __TwigTemplate_e72d4e6f77392aec172038edad278bb3c6ec50baa2f81d78d23ea171613814a6 extends \Twig\Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-9\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["method" => "get"]]);
        echo "
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search topics\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, input("search"));
        echo "\">
            </div>
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>
    <div class=\"col-md-3 text-right\">
        ";
        // line 11
        if (($context["isGuest"] ?? null)) {
            // line 12
            echo "            <p>Log in to Post a new topic</p>
        ";
        } else {
            // line 14
            echo "            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["topicPage"] ?? null));
            echo "?channel=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">
                Post a new topic
            </a>
        ";
        }
        // line 18
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channel/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  64 => 14,  60 => 12,  58 => 11,  52 => 8,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">

    <div class=\"col-md-9\">
        {{ form_open({ method: 'get' })}}
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search topics\" value=\"{{ input('search')|e }}\">
            </div>
        {{ form_close() }}
    </div>
    <div class=\"col-md-3 text-right\">
        {% if isGuest %}
            <p>Log in to Post a new topic</p>
        {% else %}
            <a href=\"{{ topicPage|page }}?channel={{ channel.id }}\" class=\"btn btn-primary btn-block\">
                Post a new topic
            </a>
        {% endif %}
    </div>

</div>
", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channel/title.htm", "");
    }
}
