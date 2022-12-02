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

/* __string_template__3dc592ec12a24e64d2a9b15e0dbe119afbf3c00a0de9f61ca8a2a2cadba81877 */
class __TwigTemplate_c0d53742169cdcce6d64274c9dd7f8029110e3d722d5a67c2e0ccc0c3e08f549 extends Template
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
        echo "Order is on the way!";
    }

    public function getTemplateName()
    {
        return "__string_template__3dc592ec12a24e64d2a9b15e0dbe119afbf3c00a0de9f61ca8a2a2cadba81877";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Order is on the way!", "__string_template__3dc592ec12a24e64d2a9b15e0dbe119afbf3c00a0de9f61ca8a2a2cadba81877", "");
    }
}
