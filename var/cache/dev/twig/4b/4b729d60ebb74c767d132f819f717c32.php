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

/* @Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig */
class __TwigTemplate_adafa3695a6717aa611649da07253859 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig"));

        // line 19
        if (( !twig_test_empty((isset($context["moduleUrl"]) || array_key_exists("moduleUrl", $context) ? $context["moduleUrl"] : (function () { throw new RuntimeError('Variable "moduleUrl" does not exist.', 19, $this->source); })())) &&  !twig_test_empty((isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 19, $this->source); })())))) {
            // line 20
            echo "  <span class=\"mbo-module-read-more-grid\">
          <a class=\"mbo-module-read-more-list-btn url\" id=\"see-more-";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["moduleUrl"]) || array_key_exists("moduleUrl", $context) ? $context["moduleUrl"] : (function () { throw new RuntimeError('Variable "moduleUrl" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read More", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "
          </a>
  </span>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  48 => 21,  45 => 20,  43 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
{% if moduleUrl is not empty and moduleName is not empty %}
  <span class=\"mbo-module-read-more-grid\">
          <a class=\"mbo-module-read-more-list-btn url\" id=\"see-more-{{ moduleName }}\" href=\"{{ moduleUrl }}\" target=\"_blank\">
            {{ 'Read More'|trans({}, 'Modules.Mbo.Modulescatalog') }}
          </a>
  </span>
{% endif %}
", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig", "/var/www/html/prestashop/modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig");
    }
}
