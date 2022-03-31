<?php

namespace ContainerRxRFKVL;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder40482 = null;
    private $initializer52a9f = null;
    private static $publicPropertiesff56b = [
        
    ];
    public function getConnection()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getConnection', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getMetadataFactory', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getExpressionBuilder', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'beginTransaction', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getCache', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getCache();
    }
    public function transactional($func)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'transactional', array('func' => $func), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'wrapInTransaction', array('func' => $func), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'commit', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->commit();
    }
    public function rollback()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'rollback', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getClassMetadata', array('className' => $className), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'createQuery', array('dql' => $dql), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'createNamedQuery', array('name' => $name), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'createQueryBuilder', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'flush', array('entity' => $entity), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'clear', array('entityName' => $entityName), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->clear($entityName);
    }
    public function close()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'close', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->close();
    }
    public function persist($entity)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'persist', array('entity' => $entity), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'remove', array('entity' => $entity), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'refresh', array('entity' => $entity), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'detach', array('entity' => $entity), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'merge', array('entity' => $entity), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getRepository', array('entityName' => $entityName), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'contains', array('entity' => $entity), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getEventManager', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getConfiguration', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'isOpen', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getUnitOfWork', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getProxyFactory', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'initializeObject', array('obj' => $obj), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'getFilters', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'isFiltersStateClean', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'hasFilters', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return $this->valueHolder40482->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer52a9f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder40482) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder40482 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder40482->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, '__get', ['name' => $name], $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        if (isset(self::$publicPropertiesff56b[$name])) {
            return $this->valueHolder40482->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40482;
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
        $targetObject = $this->valueHolder40482;
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
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40482;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder40482;
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
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, '__isset', array('name' => $name), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40482;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder40482;
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
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, '__unset', array('name' => $name), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40482;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder40482;
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
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, '__clone', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        $this->valueHolder40482 = clone $this->valueHolder40482;
    }
    public function __sleep()
    {
        $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, '__sleep', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
        return array('valueHolder40482');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer52a9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer52a9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer52a9f && ($this->initializer52a9f->__invoke($valueHolder40482, $this, 'initializeProxy', array(), $this->initializer52a9f) || 1) && $this->valueHolder40482 = $valueHolder40482;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder40482;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder40482;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
