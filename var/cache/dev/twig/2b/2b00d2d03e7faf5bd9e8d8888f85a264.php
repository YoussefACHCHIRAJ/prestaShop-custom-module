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

/* @Modules/ps_mbo/views/templates/hook/twig/module_manager_empty_category.html.twig */
class __TwigTemplate_aea5ccee6673823658e71c1fe5c49894 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_empty_category.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_empty_category.html.twig"));

        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discover the best-selling modules of this category in the %link% page.", ["%link%" => (((("<a href=\"" . (isset($context["categoryLink"]) || array_key_exists("categoryLink", $context) ? $context["categoryLink"] : (function () { throw new RuntimeError('Variable "categoryLink" does not exist.', 19, $this->source); })())) . "\">") . (isset($context["categoryName"]) || array_key_exists("categoryName", $context) ? $context["categoryName"] : (function () { throw new RuntimeError('Variable "categoryName" does not exist.', 19, $this->source); })())) . "</a>")], "Modules.Mbo.Modulescatalog");
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/hook/twig/module_manager_empty_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 19,);
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
{{ 'Discover the best-selling modules of this category in the %link% page.' | trans({'%link%': '<a href=\"'~ categoryLink ~ '\">'~categoryName~'</a>'}, 'Modules.Mbo.Modulescatalog') | raw }}", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_empty_category.html.twig", "/var/www/html/prestashop/modules/ps_mbo/views/templates/hook/twig/module_manager_empty_category.html.twig");
    }
}
