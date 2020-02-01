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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/topic/post.htm */
class __TwigTemplate_0637986d810c253e2df96f0951d2509ef5345f6322e101e0a52519f4a195551d extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, false, 1), "url", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"avatar\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, false, 2), "user", [], "any", false, false, false, 2), "avatarThumb", [0 => 50], "method", false, false, false, 2), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, false, 2), "username", [], "any", false, false, false, 2), "html", null, true);
        echo "\" />
</a>
<div class=\"content\">
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, false, 5), "url", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"author\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, false, 5), "username", [], "any", false, false, false, 5), "html", null, true);
        echo "</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
                ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 9)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            </a>
        </div>
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, false, 12), "is_banned", [], "any", false, false, false, 12)) {
            // line 13
            echo "            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["topic"] ?? null), "channel", [], "any", false, false, false, 16), "is_guarded", [], "any", false, false, false, 16) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, false, 16), "is_approved", [], "any", false, false, false, 16))) {
            // line 17
            echo "            <div class=\"status text-warning\">
                <i class=\"icon-lock\"></i> Unapproved
            </div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["post"] ?? null), "member", [], "any", false, false, false, 20), "is_moderator", [], "any", false, false, false, 20)) {
            // line 21
            echo "            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        ";
        }
        // line 25
        echo "    </div>

    ";
        // line 27
        if ((($context["mode"] ?? null) == "edit")) {
            // line 28
            echo "
        ";
            // line 29
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
            echo "
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" />

            ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "first_post", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 34))) {
                // line 35
                echo "                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "subject", [], "any", false, false, false, 35), "html", null, true);
                echo "\" />
            ";
            }
            // line 37
            echo "
            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 43), "html", null, true);
            echo "</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\"
                    data-request-update=\"'";
            // line 50
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
            echo "'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
            echo ", mode: 'delete'\"
                    data-request-update=\"'";
            // line 59
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
            echo ", mode: 'view'\"
                    data-request-update=\"'";
            // line 68
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        ";
            // line 73
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

    ";
        } elseif ((        // line 75
($context["mode"] ?? null) == "delete")) {
            // line 76
            echo "        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    ";
        } else {
            // line 80
            echo "        <div class=\"text\">
            ";
            // line 81
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 81);
            echo "

            ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 83) != twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "updated_at", [], "any", false, false, false, 83))) {
                // line 84
                echo "                <p><small class=\"text text-muted\">
                    Last updated ";
                // line 85
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "updated_at", [], "any", false, false, false, 85)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 86
                echo "                </small></p>
            ";
            }
            // line 88
            echo "        </div>
        <div class=\"actions\">
            ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", [], "any", false, false, false, 90)) {
                // line 91
                echo "                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 93), "html", null, true);
                echo "\"
                    data-quote-button>
                    Quote
                </a>
            ";
            }
            // line 98
            echo "            ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", [], "any", false, false, false, 98) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canEdit", [], "any", false, false, false, 98)) && (($context["mode"] ?? null) != "edit")) && (($context["mode"] ?? null) != "delete"))) {
                // line 99
                echo "                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 102), "html", null, true);
                echo "\"
                    data-request-update=\"'";
                // line 103
                echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::post"), "html", null, true);
                echo "': '#post-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 103), "html", null, true);
                echo "'\">
                    Edit
                </a>
            ";
            }
            // line 107
            echo "        </div>
    ";
        }
        // line 109
        echo "
</div>
<div class=\"post-divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 109,  269 => 107,  260 => 103,  256 => 102,  251 => 99,  248 => 98,  240 => 93,  236 => 91,  234 => 90,  230 => 88,  226 => 86,  221 => 85,  218 => 84,  216 => 83,  211 => 81,  208 => 80,  202 => 76,  200 => 75,  195 => 73,  185 => 68,  181 => 67,  177 => 66,  165 => 59,  161 => 58,  157 => 57,  145 => 50,  141 => 49,  137 => 48,  129 => 43,  121 => 37,  115 => 35,  113 => 34,  108 => 32,  102 => 29,  99 => 28,  97 => 27,  93 => 25,  87 => 21,  85 => 20,  80 => 17,  78 => 16,  73 => 13,  71 => 12,  67 => 10,  62 => 9,  58 => 8,  50 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ post.member.url }}\" class=\"avatar\">
    <img src=\"{{ post.member.user.avatarThumb(50) }}\" alt=\"{{ post.member.username }}\" />
</a>
<div class=\"content\">
    <a href=\"{{ post.member.url }}\" class=\"author\">{{ post.member.username }}</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-{{ post.id }}\">
                {% partial __SELF__ ~ \"::timestamp\" date=post.created_at %}
            </a>
        </div>
        {% if post.member.is_banned %}
            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        {% elseif topic.channel.is_guarded and not post.member.is_approved %}
            <div class=\"status text-warning\">
                <i class=\"icon-lock\"></i> Unapproved
            </div>
        {% elseif post.member.is_moderator %}
            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        {% endif %}
    </div>

    {% if mode == 'edit' %}

        {{ form_open() }}
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"{{ post.id }}\" />

            {% if topic.first_post.id == post.id %}
                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"{{ topic.subject }}\" />
            {% endif %}

            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >{{ post.content }}</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'delete'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'view'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        {{ form_close() }}

    {% elseif mode == 'delete' %}
        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    {% else %}
        <div class=\"text\">
            {{ post.content_html|raw }}

            {% if post.created_at != post.updated_at %}
                <p><small class=\"text text-muted\">
                    Last updated {% partial __SELF__ ~ \"::timestamp\" date=post.updated_at %}
                </small></p>
            {% endif %}
        </div>
        <div class=\"actions\">
            {% if topic.canPost %}
                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-quote-button>
                    Quote
                </a>
            {% endif %}
            {% if topic.canPost and post.canEdit and mode != 'edit' and mode != 'delete' %}
                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ ~ '::post' }}': '#post-{{ post.id }}'\">
                    Edit
                </a>
            {% endif %}
        </div>
    {% endif %}

</div>
<div class=\"post-divider\"></div>
", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/topic/post.htm", "");
    }
}
