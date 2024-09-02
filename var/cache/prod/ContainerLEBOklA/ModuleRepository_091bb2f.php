<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2386b = null;
    private $initializer434f8 = null;
    private static $publicProperties75dd9 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getList', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getInstalledModules', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getMustBeConfiguredModules', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getUpgradableModules', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'setActionUrls', array('collection' => $collection), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return $this->valueHolder2386b->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer434f8 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder2386b) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder2386b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder2386b->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, '__get', ['name' => $name], $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        if (isset(self::$publicProperties75dd9[$name])) {
            return $this->valueHolder2386b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2386b;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2386b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2386b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2386b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, '__isset', array('name' => $name), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2386b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2386b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, '__unset', array('name' => $name), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2386b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2386b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, '__clone', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        $this->valueHolder2386b = clone $this->valueHolder2386b;
    }
    public function __sleep()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, '__sleep', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
        return array('valueHolder2386b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer434f8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer434f8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'initializeProxy', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2386b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2386b;
    }
}
