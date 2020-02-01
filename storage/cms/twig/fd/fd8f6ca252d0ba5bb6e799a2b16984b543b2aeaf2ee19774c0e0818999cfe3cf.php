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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/channels/default.htm */
class __TwigTemplate_796e413c46db7f4e77d3ca3a99ee645a0aa7d05055235e9913152ceaaaf7fa1b extends \Twig\Template
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

    <table class=\"forum-table\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 5
            echo "
            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "relations", [], "any", false, false, false, 15), "children", [], "any", false, false, false, 15)) {
                // line 16
                echo "
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["channel"], "children", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 18
                    echo "
                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator ";
                    // line 21
                    echo ((twig_get_attribute($this->env, $this->source, $context["channel"], "hasNew", [], "any", false, false, false, 21)) ? ("has-new") : (""));
                    echo "\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "url", [], "any", false, false, false, 25), "html", null, true);
                    echo "\">
                                    ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, false, 26), "html", null, true);
                    echo "
                                </a>
                            </h5>
                            <p>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "description", [], "any", false, false, false, 29), "html", null, true);
                    echo "</p>

                            ";
                    // line 31
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "children", [], "any", false, false, false, 31))) {
                        // line 32
                        echo "                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["channel"], "children", [], "any", false, false, false, 35));
                        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                            // line 36
                            echo "                                            <li>
                                                <a href=\"";
                            // line 37
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "url", [], "any", false, false, false, 37), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "description", [], "any", false, false, false, 37), "html", null, true);
                            echo "\">
                                                    ";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, false, 38), "html", null, true);
                            echo "
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                                    </ul>
                                </div>
                            ";
                    }
                    // line 45
                    echo "                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "count_topics", [], "any", false, false, false, 47), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "count_posts", [], "any", false, false, false, 50), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"activity-column\">
                            ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, false, 53)) {
                        // line 54
                        echo "                                <p>
                                    <a href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, false, 55), "url", [], "any", false, false, false, 55), "html", null, true);
                        echo "?page=last#post-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, false, 55), "last_post_id", [], "any", false, false, false, 55), "html", null, true);
                        echo "\">
                                        ";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, false, 56), "subject", [], "any", false, false, false, 56), "html", null, true);
                        echo "
                                    </a>
                                    <small>
                                        ";
                        // line 59
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, false, 59), "last_post_at", [], "any", false, false, false, 59)                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 60
                        echo "                                    </small>
                                </p>
                            ";
                    }
                    // line 63
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
            ";
            } else {
                // line 68
                echo "                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            ";
            }
            // line 72
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channels/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 74,  193 => 72,  187 => 68,  183 => 66,  175 => 63,  170 => 60,  165 => 59,  159 => 56,  153 => 55,  150 => 54,  148 => 53,  142 => 50,  136 => 47,  132 => 45,  127 => 42,  117 => 38,  111 => 37,  108 => 36,  104 => 35,  99 => 32,  97 => 31,  92 => 29,  86 => 26,  82 => 25,  75 => 21,  70 => 18,  66 => 17,  63 => 16,  61 => 15,  51 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rainlab-forum\">

    <table class=\"forum-table\">
        {% for channel in channels %}

            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    {{ channel.title }}
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            {% if channel.relations.children %}

                {% for channel in channel.children %}

                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator {{ channel.hasNew ? 'has-new' }}\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"{{ channel.url }}\">
                                    {{ channel.title }}
                                </a>
                            </h5>
                            <p>{{ channel.description }}</p>

                            {% if channel.children|length %}
                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        {% for channel in channel.children %}
                                            <li>
                                                <a href=\"{{ channel.url }}\" title=\"{{ channel.description }}\">
                                                    {{ channel.title }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% endif %}
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_topics }}</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_posts }}</p>
                        </td>
                        <td class=\"activity-column\">
                            {% if channel.first_topic %}
                                <p>
                                    <a href=\"{{ channel.first_topic.url }}?page=last#post-{{ channel.first_topic.last_post_id }}\">
                                        {{ channel.first_topic.subject }}
                                    </a>
                                    <small>
                                        {% partial __SELF__ ~ \"::timestamp\" date=channel.first_topic.last_post_at %}
                                    </small>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}

            {% else %}
                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            {% endif %}

        {% endfor %}
    </table>
</div>
", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channels/default.htm", "");
    }
}
