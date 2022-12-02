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

/* __string_template__1af806fda640de625a9503555442bbeee50b03c3f63274e1d433f118ab3c8742 */
class __TwigTemplate_15cc5d9a5894c7e06e9e16f1c304c2d3816588304b2b6a78f6c1e4b79403c2b8 extends Template
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
        echo "Password change instructions";
    }

    public function getTemplateName()
    {
        return "__string_template__1af806fda640de625a9503555442bbeee50b03c3f63274e1d433f118ab3c8742";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Password change instructions", "__string_template__1af806fda640de625a9503555442bbeee50b03c3f63274e1d433f118ab3c8742", "");
    }
}
