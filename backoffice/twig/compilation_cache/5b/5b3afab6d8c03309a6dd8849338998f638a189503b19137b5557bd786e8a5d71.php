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

/* __string_template__bb42f8cd525dba08abc84f46244ced5e6aa3e3ead62480a47015f161c7049ac7 */
class __TwigTemplate_a3685632a023053252c819108ed379ce7f8a0b2748ea68426f2bc6819b78f8fd extends Template
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
        echo "Forgot password";
    }

    public function getTemplateName()
    {
        return "__string_template__bb42f8cd525dba08abc84f46244ced5e6aa3e3ead62480a47015f161c7049ac7";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Forgot password", "__string_template__bb42f8cd525dba08abc84f46244ced5e6aa3e3ead62480a47015f161c7049ac7", "");
    }
}
