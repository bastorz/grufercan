<?php

namespace ContainerBPvil3q;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere919c = null;
    private $initializer2cc52 = null;
    private static $publicProperties0dbfd = [
        
    ];
    public function getConnection()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getConnection', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getMetadataFactory', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getExpressionBuilder', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'beginTransaction', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getCache', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'transactional', array('func' => $func), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'commit', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->commit();
    }
    public function rollback()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'rollback', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getClassMetadata', array('className' => $className), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'createQuery', array('dql' => $dql), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'createNamedQuery', array('name' => $name), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'createQueryBuilder', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'flush', array('entity' => $entity), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'clear', array('entityName' => $entityName), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->clear($entityName);
    }
    public function close()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'close', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->close();
    }
    public function persist($entity)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'persist', array('entity' => $entity), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'remove', array('entity' => $entity), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'refresh', array('entity' => $entity), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'detach', array('entity' => $entity), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'merge', array('entity' => $entity), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'contains', array('entity' => $entity), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getEventManager', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getConfiguration', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'isOpen', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getUnitOfWork', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getProxyFactory', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'initializeObject', array('obj' => $obj), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'getFilters', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'isFiltersStateClean', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'hasFilters', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return $this->valueHoldere919c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer2cc52 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere919c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere919c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere919c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, '__get', ['name' => $name], $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        if (isset(self::$publicProperties0dbfd[$name])) {
            return $this->valueHoldere919c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere919c;
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
        $targetObject = $this->valueHoldere919c;
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
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere919c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere919c;
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
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, '__isset', array('name' => $name), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere919c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere919c;
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
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, '__unset', array('name' => $name), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere919c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere919c;
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
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, '__clone', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        $this->valueHoldere919c = clone $this->valueHoldere919c;
    }
    public function __sleep()
    {
        $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, '__sleep', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
        return array('valueHoldere919c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2cc52 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2cc52;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer2cc52 && ($this->initializer2cc52->__invoke($valueHoldere919c, $this, 'initializeProxy', array(), $this->initializer2cc52) || 1) && $this->valueHoldere919c = $valueHoldere919c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere919c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere919c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
