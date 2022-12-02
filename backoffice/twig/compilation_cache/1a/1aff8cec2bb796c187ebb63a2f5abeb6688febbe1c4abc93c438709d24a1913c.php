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

/* __string_template__231c1968aa9681c38c367a08521f3d40abe18e1f7ce78c5c9e814924c42a4e64 */
class __TwigTemplate_2999d7f740d4f64536b0a1d418ca7f0a028b9d43022655829eec1f6b2e243935 extends Template
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
        echo "Your order #";
        echo twig_escape_filter($this->env, ($context["order_id"] ?? null), "html", null, true);
        echo " has been rejected";
    }

    public function getTemplateName()
    {
        return "__string_template__231c1968aa9681c38c367a08521f3d40abe18e1f7ce78c5c9e814924c42a4e64";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Your order #{{order_id}} has been rejected", "__string_template__231c1968aa9681c38c367a08521f3d40abe18e1f7ce78c5c9e814924c42a4e64", "");
    }
}
