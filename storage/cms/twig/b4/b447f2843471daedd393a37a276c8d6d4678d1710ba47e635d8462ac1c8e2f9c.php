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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/topic/postform.htm */
class __TwigTemplate_96f381cbd3163ef1c2cc0cd9d702c623bf3641246c4578764b09405529b6537d extends \Twig\Template
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
        echo "<div class=\"reply-form\" id=\"postForm\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["request" => "onPost"]]);
        echo "

        <input type=\"hidden\" name=\"topic\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\" />

        <div class=\"member-area\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user", [], "any", false, false, false, 8), "avatarThumb", [0 => 50], "method", false, false, false, 8), "html", null, true);
        echo "\" class=\"member-avatar\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
        </div>

        <div class=\"post-area\">
            <textarea
                id=\"topicContent\"
                name=\"content\"
                rows=\"6\"
                class=\"form-control\">";
        // line 16
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "content"]);
        echo "</textarea>
            <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
            <div class=\"post-buttons\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post a Reply</button>
            </div>
        </div>

    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/postform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  65 => 16,  52 => 8,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"reply-form\" id=\"postForm\">

    {{ form_open({ request: 'onPost' }) }}

        <input type=\"hidden\" name=\"topic\" value=\"{{ topic.id }}\" />

        <div class=\"member-area\">
            <img src=\"{{ member.user.avatarThumb(50) }}\" class=\"member-avatar\" alt=\"{{ member.username }}\" />
        </div>

        <div class=\"post-area\">
            <textarea
                id=\"topicContent\"
                name=\"content\"
                rows=\"6\"
                class=\"form-control\">{{ form_value('content') }}</textarea>
            <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
            <div class=\"post-buttons\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post a Reply</button>
            </div>
        </div>

    {{ form_close() }}

</div>", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/postform.htm", "");
    }
}
