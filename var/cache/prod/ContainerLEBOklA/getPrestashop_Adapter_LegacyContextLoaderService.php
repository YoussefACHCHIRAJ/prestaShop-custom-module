<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.legacy_context_loader' shared service.

return $this->services['prestashop.adapter.legacy_context_loader'] = new \PrestaShop\PrestaShop\Adapter\LegacyContextLoader(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext());
