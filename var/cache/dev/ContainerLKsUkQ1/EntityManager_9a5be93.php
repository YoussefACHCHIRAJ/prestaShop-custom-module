<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2386b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer434f8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties75dd9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getConnection', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getMetadataFactory', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getExpressionBuilder', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'beginTransaction', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getCache', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'transactional', array('func' => $func), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'commit', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->commit();
    }

    public function rollback()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'rollback', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getClassMetadata', array('className' => $className), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'createQuery', array('dql' => $dql), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'createNamedQuery', array('name' => $name), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'createQueryBuilder', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'flush', array('entity' => $entity), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'clear', array('entityName' => $entityName), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->clear($entityName);
    }

    public function close()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'close', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->close();
    }

    public function persist($entity)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'persist', array('entity' => $entity), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'remove', array('entity' => $entity), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'refresh', array('entity' => $entity), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'detach', array('entity' => $entity), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'merge', array('entity' => $entity), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'contains', array('entity' => $entity), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getEventManager', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getConfiguration', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'isOpen', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getUnitOfWork', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getProxyFactory', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'initializeObject', array('obj' => $obj), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'getFilters', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'isFiltersStateClean', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, 'hasFilters', array(), $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        return $this->valueHolder2386b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer434f8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2386b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2386b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2386b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer434f8 && ($this->initializer434f8->__invoke($valueHolder2386b, $this, '__get', ['name' => $name], $this->initializer434f8) || 1) && $this->valueHolder2386b = $valueHolder2386b;

        if (isset(self::$publicProperties75dd9[$name])) {
            return $this->valueHolder2386b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
