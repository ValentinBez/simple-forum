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

/* C:\xampp\htdocs\forum/plugins/rainlab/forum/components/partials/timestamp.htm */
class __TwigTemplate_4c4f7503839b4f0bb397f82833ac43d2f0f16a76e1a81dfe7ccacca46ee9ac48 extends \Twig\Template
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
        echo "<time title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "toDayDateTimeString", [], "any", false, false, false, 1), "html", null, true);
        echo "\"
    datetime=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "c"), "html", null, true);
        echo "\">
    ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "diffForHumans", [], "any", false, false, false, 3), "html", null, true);
        echo "
</time>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/partials/timestamp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<time title=\"{{ date.toDayDateTimeString }}\"
    datetime=\"{{ date|date('c') }}\">
    {{ date.diffForHumans }}
</time>
", "C:\\xampp\\htdocs\\forum/plugins/rainlab/forum/components/partials/timestamp.htm", "");
    }
}
