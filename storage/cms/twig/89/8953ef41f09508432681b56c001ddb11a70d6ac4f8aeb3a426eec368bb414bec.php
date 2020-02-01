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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/topic/createform.htm */
class __TwigTemplate_4e0a297287c5902c6d1e417e1cbd87fc748692728e5f2adf604c33d0f2b22a75 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["request" => "onCreate"]]);
        echo "

    <div class=\"form-group\">
        <label for=\"topicSubject\" class=\"control-label\">Subject</label>
        <input
            id=\"topicSubject\"
            name=\"subject\"
            type=\"text\"
            class=\"form-control\"
            value=\"";
        // line 10
        echo post("subject");
        echo "\" />
    </div>

    <div class=\"form-group\">
        <label for=\"topicContent\" class=\"control-label\">Content</label>
        <textarea
            id=\"topicContent\"
            name=\"content\"
            rows=\"8\"
            type=\"text\"
            class=\"form-control\">";
        // line 20
        echo post("content");
        echo "</textarea>
        <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
    </div>

    <div class=\"form-group post-buttons\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post this topic</button>
        ";
        // line 26
        if (($context["returnUrl"] ?? null)) {
            // line 27
            echo "            <a class=\"btn btn-link btn-lg\" href=\"";
            echo twig_escape_filter($this->env, ($context["returnUrl"] ?? null), "html", null, true);
            echo "\">Cancel</a>
        ";
        }
        // line 29
        echo "    </div>

    <input type=\"hidden\" name=\"channel\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\" />

";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/createform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  83 => 31,  79 => 29,  73 => 27,  71 => 26,  62 => 20,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_open({ request: 'onCreate' }) }}

    <div class=\"form-group\">
        <label for=\"topicSubject\" class=\"control-label\">Subject</label>
        <input
            id=\"topicSubject\"
            name=\"subject\"
            type=\"text\"
            class=\"form-control\"
            value=\"{{ post('subject') }}\" />
    </div>

    <div class=\"form-group\">
        <label for=\"topicContent\" class=\"control-label\">Content</label>
        <textarea
            id=\"topicContent\"
            name=\"content\"
            rows=\"8\"
            type=\"text\"
            class=\"form-control\">{{ post('content') }}</textarea>
        <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
    </div>

    <div class=\"form-group post-buttons\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post this topic</button>
        {% if returnUrl %}
            <a class=\"btn btn-link btn-lg\" href=\"{{ returnUrl }}\">Cancel</a>
        {% endif %}
    </div>

    <input type=\"hidden\" name=\"channel\" value=\"{{ channel.id }}\" />

{{ form_close() }}", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/createform.htm", "");
    }
}
