<?php

namespace ContainerSePAHxb;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder132ac = null;
    private $initializerf4a4e = null;
    private static $publicProperties57871 = [
        
    ];
    public function getConnection()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getConnection', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getMetadataFactory', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getExpressionBuilder', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'beginTransaction', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getCache', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'transactional', array('func' => $func), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'commit', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->commit();
    }
    public function rollback()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'rollback', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getClassMetadata', array('className' => $className), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'createQuery', array('dql' => $dql), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'createNamedQuery', array('name' => $name), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'createQueryBuilder', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'flush', array('entity' => $entity), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'clear', array('entityName' => $entityName), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->clear($entityName);
    }
    public function close()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'close', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->close();
    }
    public function persist($entity)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'persist', array('entity' => $entity), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'remove', array('entity' => $entity), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'refresh', array('entity' => $entity), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'detach', array('entity' => $entity), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'merge', array('entity' => $entity), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'contains', array('entity' => $entity), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getEventManager', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getConfiguration', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'isOpen', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getUnitOfWork', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getProxyFactory', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'initializeObject', array('obj' => $obj), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'getFilters', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'isFiltersStateClean', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'hasFilters', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return $this->valueHolder132ac->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf4a4e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder132ac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder132ac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder132ac->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, '__get', ['name' => $name], $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        if (isset(self::$publicProperties57871[$name])) {
            return $this->valueHolder132ac->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder132ac;
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
        $targetObject = $this->valueHolder132ac;
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
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder132ac;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder132ac;
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
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, '__isset', array('name' => $name), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder132ac;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder132ac;
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
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, '__unset', array('name' => $name), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder132ac;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder132ac;
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
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, '__clone', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        $this->valueHolder132ac = clone $this->valueHolder132ac;
    }
    public function __sleep()
    {
        $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, '__sleep', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
        return array('valueHolder132ac');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf4a4e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf4a4e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf4a4e && ($this->initializerf4a4e->__invoke($valueHolder132ac, $this, 'initializeProxy', array(), $this->initializerf4a4e) || 1) && $this->valueHolder132ac = $valueHolder132ac;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder132ac;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder132ac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
