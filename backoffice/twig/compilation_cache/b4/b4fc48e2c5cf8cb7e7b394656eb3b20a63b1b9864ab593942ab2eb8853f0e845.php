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

/* __string_template__8d89bea26ccfc12a529d74ae896f4473eaa9b93c69921e93586394025d6882d9 */
class __TwigTemplate_9d21179bec0543d7ea3ab498520470d82916f62ae0ced041139428e2cd207ff5 extends Template
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
        echo "You have new customer signup";
    }

    public function getTemplateName()
    {
        return "__string_template__8d89bea26ccfc12a529d74ae896f4473eaa9b93c69921e93586394025d6882d9";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("You have new customer signup", "__string_template__8d89bea26ccfc12a529d74ae896f4473eaa9b93c69921e93586394025d6882d9", "");
    }
}
