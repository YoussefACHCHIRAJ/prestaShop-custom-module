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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_9c0ce98755a954a7adabd2daabcd4720 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"application/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_url"] ?? null), "html", null, true);
        echo "\"></script>

    ";
        // line 25
        if ((array_key_exists("cdc_script_not_found", $context) && (($context["cdc_script_not_found"] ?? null) === true))) {
            // line 26
            echo "      <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["cdc_error_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // line 28
            echo "      <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["cdc_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ((array_key_exists("urlAccountsCdn", $context) &&  !twig_test_empty(($context["urlAccountsCdn"] ?? null)))) {
            // line 32
            echo "      ";
            // line 33
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, ($context["urlAccountsCdn"] ?? null), "html", null, true);
            echo "\" rel=preload></script>
      <script>
        var psAccountLoaded = false;
        if (window?.psaccountsVue) {
          window?.psaccountsVue?.init();
          psAccountLoaded = true;
        }
      </script>
    ";
        }
        // line 42
        echo "
    <script>
      if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
        if (typeof renderCdcError === 'function') {
          window.\$(document).ready(function() {
            renderCdcError(\$('#cdc-container'));
          });
        }
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = ";
        // line 53
        echo json_encode(($context["shop_context"] ?? null));
        echo ";

        if (psAccountLoaded) {
          context.accounts_component_loaded = true;
        }

        renderModules(context, '#cdc-container')
      }
    </script>
";
    }

    // line 64
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_css"] ?? null), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "  <prestashop-accounts style=\"display: none;\"></prestashop-accounts>

  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        echo "\"></div>

    ";
        // line 74
        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 74)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 74,  146 => 72,  142 => 70,  138 => 69,  132 => 66,  127 => 65,  123 => 64,  109 => 53,  96 => 42,  83 => 33,  81 => 32,  79 => 31,  76 => 30,  70 => 28,  64 => 26,  62 => 25,  57 => 23,  52 => 22,  48 => 21,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "/var/www/html/prestashop/modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig");
    }
}
