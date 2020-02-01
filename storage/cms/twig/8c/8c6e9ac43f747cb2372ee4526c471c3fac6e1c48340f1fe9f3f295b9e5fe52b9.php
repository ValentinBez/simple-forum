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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/partials/pagination-list.htm */
class __TwigTemplate_125f0a8ad2aafe7662768f04eb53ee1673e82e58e88ec02f0981b71e247cc194 extends \Twig\Template
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
        $context["paginationEnabled"] = (((twig_get_attribute($this->env, $this->source,         // line 2
($context["records"] ?? null), "currentPage", [], "any", false, false, false, 2) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["records"] ?? null), "lastPage", [], "any", false, false, false, 3) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["records"] ?? null), "lastPage", [], "any", false, false, false, 4) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 4)));
        // line 6
        echo "
";
        // line 7
        if (($context["paginationEnabled"] ?? null)) {
            // line 8
            echo "    ";
            // line 9
            echo "    ";
            $context["n"] = 2;
            // line 10
            echo "
    ";
            // line 11
            $context["currentPageZeroBased"] = (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 11) - 1);
            // line 12
            echo "
    ";
            // line 13
            $context["pageLinks"] = [];
            // line 14
            echo "    ";
            $context["pageSet"] = [];
            // line 15
            echo "
    ";
            // line 16
            $context["startOffset"] = max((($context["currentPageZeroBased"] ?? null) - ($context["n"] ?? null)), 0);
            // line 17
            echo "    ";
            if ((((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1) > (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 17) - 1))) {
                // line 18
                echo "        ";
                $context["startOffset"] = max(((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 18) - (2 * ($context["n"] ?? null))) - 1), 0);
                // line 19
                echo "    ";
            }
            // line 20
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 21)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "        ";
                $context["pageLinks"] = twig_array_merge(($context["pageLinks"] ?? null), [0 => $context["page"]]);
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
    ";
            // line 25
            $context["activeBlock"] = twig_slice($this->env, ($context["pageLinks"] ?? null), ($context["startOffset"] ?? null), ((2 * ($context["n"] ?? null)) + 1));
            // line 26
            echo "
    ";
            // line 27
            if ((($context["startOffset"] ?? null) > 0)) {
                // line 28
                echo "        ";
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => 1]);
                // line 29
                echo "
        ";
                // line 30
                if ((($context["startOffset"] ?? null) > 1)) {
                    // line 31
                    echo "            ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 32
                    echo "        ";
                }
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    ";
            // line 35
            $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), ($context["activeBlock"] ?? null));
            // line 36
            echo "
    ";
            // line 37
            $context["diffToEnd"] = (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 37) - 1) - ((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1)) + 1);
            // line 38
            echo "
    ";
            // line 39
            if ((($context["diffToEnd"] ?? null) > 0)) {
                // line 40
                echo "        ";
                if ((($context["diffToEnd"] ?? null) > 1)) {
                    // line 41
                    echo "            ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 42
                    echo "        ";
                }
                // line 43
                echo "
        ";
                // line 44
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 44)]);
                // line 45
                echo "    ";
            }
            // line 46
            echo "
    <ul class=\"pagination\">
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 48) > 1)) {
                // line 49
                echo "            <li>
                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 50) - 1)), "html", null, true);
                echo "\">
                    &larr; Previous
                </a>
            </li>
        ";
            } else {
                // line 55
                echo "            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        ";
            }
            // line 61
            echo "
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageSet"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 63
                echo "            ";
                if (($context["page"] == "...")) {
                    // line 64
                    echo "                <li class=\"interval\">
                    ";
                    // line 65
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                </li>
            ";
                } else {
                    // line 68
                    echo "                <li class=\"";
                    echo ((($context["page"] == twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 68))) ? ("active") : (""));
                    echo "\">
                    <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . $context["page"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 72
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
        ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 74) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 74))) {
                // line 75
                echo "            <li>
                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 76) + 1)), "html", null, true);
                echo "\">
                    Next &rarr;
                </a>
            </li>
        ";
            } else {
                // line 81
                echo "            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        ";
            }
            // line 87
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/partials/pagination-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 87,  233 => 81,  225 => 76,  222 => 75,  220 => 74,  217 => 73,  211 => 72,  203 => 69,  198 => 68,  192 => 65,  189 => 64,  186 => 63,  182 => 62,  179 => 61,  171 => 55,  163 => 50,  160 => 49,  158 => 48,  154 => 46,  151 => 45,  149 => 44,  146 => 43,  143 => 42,  140 => 41,  137 => 40,  135 => 39,  132 => 38,  130 => 37,  127 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  89 => 23,  86 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 7,  42 => 6,  40 => 4,  39 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set paginationEnabled =
    records.currentPage > 1 or
    records.lastPage > 1 or
    records.lastPage > records.currentPage
%}

{% if paginationEnabled %}
    {# How many pages to display around the current page #}
    {% set n = 2 %}

    {% set currentPageZeroBased = records.currentPage-1 %}

    {% set pageLinks = [] %}
    {% set pageSet = [] %}

    {% set startOffset = max(currentPageZeroBased - n, 0) %}
    {% if (startOffset + 2*n+1) > (records.lastPage-1) %}
        {% set startOffset = max(records.lastPage - 2*n - 1, 0) %}
    {% endif %}

    {% for page in 1..records.lastPage %}
        {% set pageLinks = pageLinks|merge([page]) %}
    {% endfor %}

    {% set activeBlock = pageLinks|slice(startOffset, 2*n + 1) %}

    {% if startOffset > 0 %}
        {% set pageSet = pageSet|merge([1]) %}

        {% if startOffset > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}
    {% endif %}

    {% set pageSet = pageSet|merge(activeBlock) %}

    {% set diffToEnd = (records.lastPage-1) - (startOffset + 2*n+1) + 1 %}

    {% if diffToEnd > 0 %}
        {% if diffToEnd > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}

        {% set pageSet = pageSet|merge([records.lastPage]) %}
    {% endif %}

    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage - 1) }}\">
                    &larr; Previous
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        {% endif %}

        {% for page in pageSet %}
            {% if page == '...' %}
                <li class=\"interval\">
                    {{ page }}
                </li>
            {% else %}
                <li class=\"{{ page == records.currentPage ? 'active' }}\">
                    <a href=\"{{ paginationUrl ~ page }}\">{{ page }}</a>
                </li>
            {% endif %}
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage + 1) }}\">
                    Next &rarr;
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        {% endif %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/partials/pagination-list.htm", "");
    }
}
