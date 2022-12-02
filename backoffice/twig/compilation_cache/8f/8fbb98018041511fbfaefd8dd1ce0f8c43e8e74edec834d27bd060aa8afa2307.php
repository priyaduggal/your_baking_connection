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

/* __string_template__ad984be1fbb9295f8d58bcd21f2722ea8aec75ae480472f2aef7f3dc11f8d929 */
class __TwigTemplate_f56d4d661c9fa487883ed4a4b526c4c65dd4b5f2673f9f908dc4a65c7ea78861 extends Template
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
        echo "Your membership has expired";
    }

    public function getTemplateName()
    {
        return "__string_template__ad984be1fbb9295f8d58bcd21f2722ea8aec75ae480472f2aef7f3dc11f8d929";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Your membership has expired", "__string_template__ad984be1fbb9295f8d58bcd21f2722ea8aec75ae480472f2aef7f3dc11f8d929", "");
    }
}
