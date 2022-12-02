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

/* __string_template__1d11205c01c86ec9260189718be8448857093145bf3c93954255ca4e59867e04 */
class __TwigTemplate_869e55aede0246fea6d14f2daf18d3a25889ee1abe9cd15afc219dbc35e3b9a0 extends Template
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
        $this->loadTemplate("header.html", "__string_template__1d11205c01c86ec9260189718be8448857093145bf3c93954255ca4e59867e04", 1)->display($context);
        // line 2
        echo "<table style=\"width:100%;\">
 <tbody><tr>
  <td style=\"background:#fef9ef;padding:20px 30px;\">
    <img style=\"max-width:20%;max-height:50px;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["logo"] ?? null), "html", null, true);
        echo "\">
  </td>
 </tr>
 <tr>
   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">
    
   <table width=\"50%\" align=\"center\">
   <tbody><tr>
    <td>
\t
\t<p style=\"margin-bottom:10px;\">Hi ";
        // line 15
        echo twig_escape_filter($this->env, ($context["first_name"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["last_name"] ?? null), "html", null, true);
        echo ",</p>
\t
\t <p style=\"margin-bottom:10px;\">It looks like you have forgotten your password. We can help you to create a new password.</p>
\t
\t<div style=\"margin:auto;text-align:center;padding-top:10px; padding-bottom:10px;\">
\t <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["reset_password_link"] ?? null), "html", null, true);
        echo "\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;
     text-decoration:none;font-size:18px;font-weight:bold;\">
     Reset Password
     </a>
\t</div>
\t 
\t<p style=\"text-align:center;\">or click this link:</p>
\t<p style=\"text-align:center;\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["reset_password_link"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["reset_password_link"] ?? null), "html", null, true);
        echo "</a></p>
\t
\t</td>
   </tr>
   </tbody></table>
\t
   </td>
 </tr>
 
 
 
  
 <tr>
  <td style=\"background:#fef9ef;padding:20px 30px;\">
    
   <table style=\"width:100%; table-layout: fixed;\">
\t  <tbody><tr>
\t    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>
\t    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>
\t  </tr>
\t  <tr>
\t    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">
\t     <p>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "address", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
         <p>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
         <p>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "email", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
\t    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">
\t    
\t      ";
        // line 54
        $this->loadTemplate("social_link.html", "__string_template__1d11205c01c86ec9260189718be8448857093145bf3c93954255ca4e59867e04", 54)->display($context);
        // line 55
        echo "\t     
\t     <table>
\t      <tbody><tr>
\t      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>
\t      <td>●</td>
\t      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>
\t      </tr>
\t     </tbody></table>
\t    
\t    </td>
\t  </tr>
\t</tbody></table>
  
  </td>
 </tr>
 
</tbody></table>
";
        // line 72
        $this->loadTemplate("footer.html", "__string_template__1d11205c01c86ec9260189718be8448857093145bf3c93954255ca4e59867e04", 72)->display($context);
    }

    public function getTemplateName()
    {
        return "__string_template__1d11205c01c86ec9260189718be8448857093145bf3c93954255ca4e59867e04";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 72,  120 => 55,  118 => 54,  112 => 51,  108 => 50,  104 => 49,  77 => 27,  67 => 20,  57 => 15,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html' %}
<table style=\"width:100%;\">
 <tbody><tr>
  <td style=\"background:#fef9ef;padding:20px 30px;\">
    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">
  </td>
 </tr>
 <tr>
   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">
    
   <table width=\"50%\" align=\"center\">
   <tbody><tr>
    <td>
\t
\t<p style=\"margin-bottom:10px;\">Hi {{first_name}} {{last_name}},</p>
\t
\t <p style=\"margin-bottom:10px;\">It looks like you have forgotten your password. We can help you to create a new password.</p>
\t
\t<div style=\"margin:auto;text-align:center;padding-top:10px; padding-bottom:10px;\">
\t <a href=\"{{reset_password_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;
     text-decoration:none;font-size:18px;font-weight:bold;\">
     Reset Password
     </a>
\t</div>
\t 
\t<p style=\"text-align:center;\">or click this link:</p>
\t<p style=\"text-align:center;\"><a href=\"{{reset_password_link}}\">{{reset_password_link}}</a></p>
\t
\t</td>
   </tr>
   </tbody></table>
\t
   </td>
 </tr>
 
 
 
  
 <tr>
  <td style=\"background:#fef9ef;padding:20px 30px;\">
    
   <table style=\"width:100%; table-layout: fixed;\">
\t  <tbody><tr>
\t    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>
\t    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>
\t  </tr>
\t  <tr>
\t    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">
\t     <p>{{site.address}}</p>
         <p>{{site.contact}}</p>
         <p>{{site.email}}</p>
\t    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">
\t    
\t      {% include 'social_link.html' %}
\t     
\t     <table>
\t      <tbody><tr>
\t      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>
\t      <td>●</td>
\t      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>
\t      </tr>
\t     </tbody></table>
\t    
\t    </td>
\t  </tr>
\t</tbody></table>
  
  </td>
 </tr>
 
</tbody></table>
{% include 'footer.html' %}
", "__string_template__1d11205c01c86ec9260189718be8448857093145bf3c93954255ca4e59867e04", "");
    }
}
