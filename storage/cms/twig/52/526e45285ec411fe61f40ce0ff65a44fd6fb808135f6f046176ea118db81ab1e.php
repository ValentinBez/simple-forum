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

/* C:\xampp\htdocs\forum/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm */
class __TwigTemplate_57fe73e6d357338979b38065d126188b1660a17d5a25a711e883509983d2d7be extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"m-b-3\">
    <footer class=\"page-footer font-small blue fixed-bottom\">
    
      <div class=\"footer-copyright text-center py-3\">
          2020 Copyright: Bine
      </div>
    
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\forum/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"m-b-3\">
    <footer class=\"page-footer font-small blue fixed-bottom\">
    
      <div class=\"footer-copyright text-center py-3\">
          2020 Copyright: Bine
      </div>
    
    </footer>
</section>", "C:\\xampp\\htdocs\\forum/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm", "");
    }
}
