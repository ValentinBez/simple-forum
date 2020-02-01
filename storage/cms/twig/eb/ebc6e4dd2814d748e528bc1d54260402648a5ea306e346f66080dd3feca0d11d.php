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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/channel/pagination.htm */
class __TwigTemplate_bc5f751ed49bd5f2258efbc995a4915479be53344a82ed856a4175bfff70933b extends \Twig\Template
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
($context["topics"] ?? null), "currentPage", [], "any", false, false, false, 2) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["topics"] ?? null), "lastPage", [], "any", false, false, false, 3) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["topics"] ?? null), "lastPage", [], "any", false, false, false, 4) > twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "currentPage", [], "any", false, false, false, 4)));
        // line 6
        echo "
<div class=\"row forum-pagination ";
        // line 7
        echo ((($context["paginationEnabled"] ?? null)) ? ("enabled") : ("disabled"));
        echo "\">
    <div class=\"col-md-8\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['records'] = ($context["topics"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::pagination-list")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "firstItem", [], "any", false, false, false, 12), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "lastItem", [], "any", false, false, false, 12), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "total", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channel/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 10,  50 => 9,  45 => 7,  42 => 6,  40 => 4,  39 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set paginationEnabled =
\ttopics.currentPage > 1 or
\ttopics.lastPage > 1 or
\ttopics.lastPage > topics.currentPage
%}

<div class=\"row forum-pagination {{ paginationEnabled ? \"enabled\" : \"disabled\" }}\">
    <div class=\"col-md-8\">
        {% partial __SELF__ ~ \"::pagination-list\" records=topics %}
    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>{{ topics.firstItem }}-{{ topics.lastItem }} of {{ topics.total }}</p>
    </div>
</div>
", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/channel/pagination.htm", "");
    }
}
