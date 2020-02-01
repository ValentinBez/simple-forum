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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/channel/topics.htm */
class __TwigTemplate_dcf04ad75c4541099b565a070960b20750b8ff3e5ace30fa0edcaaf6a453e1be extends \Twig\Template
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
        echo "<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">Topic</th>
        <th class=\"counter-column\">Replies</th>
        <th class=\"counter-column\">Views</th>
        <th class=\"activity-column\">Last post</th>
    </tr>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 10
            echo "        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, $context["topic"], "hasNew", [], "any", false, false, false, 12)) ? ("has-new") : (""));
            echo "\"></div>
            </td>
            <td>
                <h5>
                    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["topic"], "is_sticky", [], "any", false, false, false, 16)) {
                echo "<strong>Sticky:</strong>";
            }
            // line 17
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["topic"], "is_locked", [], "any", false, false, false, 17)) {
                echo "<i class=\"icon icon-lock\"></i> <strong>Locked:</strong>";
            }
            // line 18
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "url", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "subject", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
                    <br/><small>by <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "start_member", [], "any", false, false, false, 19), "url", [], "any", false, false, false, 19), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "start_member", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
            echo "</a></small>
                </h5>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 23
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["topic"], "count_posts", [], "any", false, false, false, 23) - 1), "html", null, true);
            echo "</p>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "count_views", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", [], "any", false, false, false, 30), "user", [], "any", false, false, false, 30), "avatarThumb", [0 => 24], "method", false, false, false, 30), "html", null, true);
            echo "\" class=\"member-avatar\" />
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", [], "any", false, false, false, 31), "url", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>
                    <small>
                        posted
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "url", [], "any", false, false, false, 34), "html", null, true);
            echo "?page=last#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                            ";
            // line 35
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_at", [], "any", false, false, false, 35)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "                        </a>
                    </small>
                </p>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    ";
        // line 43
        if ( !twig_length_filter($this->env, ($context["topics"] ?? null))) {
            // line 44
            echo "        <tr>
            <td colspan=\"100\">There are no topics in this channel.</td>
        </tr>
    ";
        }
        // line 48
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channel/topics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  139 => 44,  137 => 43,  134 => 42,  123 => 36,  118 => 35,  112 => 34,  104 => 31,  100 => 30,  93 => 26,  87 => 23,  78 => 19,  71 => 18,  66 => 17,  62 => 16,  55 => 12,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">Topic</th>
        <th class=\"counter-column\">Replies</th>
        <th class=\"counter-column\">Views</th>
        <th class=\"activity-column\">Last post</th>
    </tr>

    {% for topic in topics %}
        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator {{ topic.hasNew ? 'has-new' }}\"></div>
            </td>
            <td>
                <h5>
                    {% if topic.is_sticky %}<strong>Sticky:</strong>{% endif %}
                    {% if topic.is_locked %}<i class=\"icon icon-lock\"></i> <strong>Locked:</strong>{% endif %}
                    <a href=\"{{ topic.url }}\">{{ topic.subject }}</a>
                    <br/><small>by <a href=\"{{ topic.start_member.url }}\">{{ topic.start_member.username }}</a></small>
                </h5>
            </td>
            <td class=\"counter-column\">
                <p>{{ (topic.count_posts-1) }}</p>
            </td>
            <td class=\"counter-column\">
                <p>{{ topic.count_views }}</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <img src=\"{{ topic.last_post_member.user.avatarThumb(24) }}\" class=\"member-avatar\" />
                    <a href=\"{{ topic.last_post_member.url }}\">{{ topic.last_post_member.username }}</a>
                    <small>
                        posted
                        <a href=\"{{ topic.url }}?page=last#post-{{ topic.last_post_id }}\">
                            {% partial __SELF__ ~ \"::timestamp\" date=topic.last_post_at %}
                        </a>
                    </small>
                </p>
            </td>
        </tr>
    {% endfor %}

    {% if not topics|length %}
        <tr>
            <td colspan=\"100\">There are no topics in this channel.</td>
        </tr>
    {% endif %}
</table>
", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channel/topics.htm", "");
    }
}
