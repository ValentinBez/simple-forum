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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/topic/default.htm */
class __TwigTemplate_059fbb00cdf58725aab7f99c96023d996ba58745636026136e7fc88db799a399 extends \Twig\Template
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
        echo "<div class=\"rainlab-forum\">

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 4
                echo "        <div class=\"alert alert-";
                (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                echo "\">
            ";
                // line 5
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 9
        echo "
    ";
        // line 10
        if (($context["returnUrl"] ?? null)) {
            // line 11
            echo "        <p>&larr; <a href=\"";
            echo twig_escape_filter($this->env, ($context["returnUrl"] ?? null), "html", null, true);
            echo "\">Back to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["topic"] ?? null)) {
            // line 15
            echo "
        <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "subject", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@controlpanel"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@posts"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
                ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
                <h4>Reply to this discussion</h4>
                ";
            // line 33
            if ( !twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", [], "any", false, false, false, 33)) {
                // line 34
                echo "                    <p>
                        You cannot edit posts or make replies:
                        ";
                // line 36
                if ( !($context["member"] ?? null)) {
                    echo "You should be logged in before you can post.";
                }
                // line 37
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_banned", [], "any", false, false, false, 37)) {
                    echo "Your account is banned.";
                }
                // line 38
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_locked", [], "any", false, false, false, 38)) {
                    echo "This topic is locked.";
                }
                // line 39
                echo "                    </p>
                ";
            } else {
                // line 41
                echo "                    ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@postform"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 42
                echo "                ";
            }
            // line 43
            echo "
            </div>
        </div>

    ";
        } elseif (        // line 47
($context["channel"] ?? null)) {
            // line 48
            echo "
        <h4>Create a new discussion topic</h4>
        ";
            // line 50
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@createform"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 51
            echo "
    ";
        } else {
            // line 53
            echo "
        <p>Topic not found</p>

    ";
        }
        // line 57
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 57,  165 => 53,  161 => 51,  157 => 50,  153 => 48,  151 => 47,  145 => 43,  142 => 42,  137 => 41,  133 => 39,  128 => 38,  123 => 37,  119 => 36,  115 => 34,  113 => 33,  109 => 31,  105 => 30,  102 => 29,  98 => 28,  91 => 23,  87 => 22,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  62 => 11,  60 => 10,  57 => 9,  49 => 5,  44 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rainlab-forum\">

    {% flash %}
        <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
            {{ message }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    {% endflash %}

    {% if returnUrl %}
        <p>&larr; <a href=\"{{ returnUrl }}\">Back to {{ channel.title }}</a></p>
    {% endif %}

    {% if topic %}

        <h4>{{ topic.subject }}</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    {% partial \"@controlpanel\" %}
                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                {% partial \"@posts\" %}

                {% partial \"@pagination\" %}

                <h4>Reply to this discussion</h4>
                {% if not topic.canPost %}
                    <p>
                        You cannot edit posts or make replies:
                        {% if not member %}You should be logged in before you can post.{% endif %}
                        {% if member.is_banned %}Your account is banned.{% endif %}
                        {% if topic.is_locked %}This topic is locked.{% endif %}
                    </p>
                {% else %}
                    {% partial \"@postform\" %}
                {% endif %}

            </div>
        </div>

    {% elseif channel %}

        <h4>Create a new discussion topic</h4>
        {% partial \"@createform\" %}

    {% else %}

        <p>Topic not found</p>

    {% endif %}
</div>", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/default.htm", "");
    }
}
