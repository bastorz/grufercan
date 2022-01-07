<?php

namespace ContainerH7swppf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder29334 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2aac8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties446ee = [
        
    ];

    public function getConnection()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getConnection', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getMetadataFactory', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getExpressionBuilder', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'beginTransaction', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getCache', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'transactional', array('func' => $func), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'commit', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->commit();
    }

    public function rollback()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'rollback', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getClassMetadata', array('className' => $className), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'createQuery', array('dql' => $dql), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'createNamedQuery', array('name' => $name), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'createQueryBuilder', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'flush', array('entity' => $entity), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'clear', array('entityName' => $entityName), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->clear($entityName);
    }

    public function close()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'close', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->close();
    }

    public function persist($entity)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'persist', array('entity' => $entity), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'remove', array('entity' => $entity), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'refresh', array('entity' => $entity), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'detach', array('entity' => $entity), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'merge', array('entity' => $entity), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'contains', array('entity' => $entity), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getEventManager', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getConfiguration', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'isOpen', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getUnitOfWork', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getProxyFactory', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'initializeObject', array('obj' => $obj), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'getFilters', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'isFiltersStateClean', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'hasFilters', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return $this->valueHolder29334->hasFilters();
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

        $instance->initializer2aac8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder29334) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder29334 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder29334->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, '__get', ['name' => $name], $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        if (isset(self::$publicProperties446ee[$name])) {
            return $this->valueHolder29334->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29334;

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

        $targetObject = $this->valueHolder29334;
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
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29334;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder29334;
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
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, '__isset', array('name' => $name), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29334;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder29334;
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
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, '__unset', array('name' => $name), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29334;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder29334;
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
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, '__clone', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        $this->valueHolder29334 = clone $this->valueHolder29334;
    }

    public function __sleep()
    {
        $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, '__sleep', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;

        return array('valueHolder29334');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2aac8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2aac8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2aac8 && ($this->initializer2aac8->__invoke($valueHolder29334, $this, 'initializeProxy', array(), $this->initializer2aac8) || 1) && $this->valueHolder29334 = $valueHolder29334;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder29334;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder29334;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
