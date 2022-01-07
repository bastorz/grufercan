<?php

namespace ContainerLCXWblv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfc32d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer75a4a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0a75d = [
        
    ];

    public function getConnection()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getConnection', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getMetadataFactory', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getExpressionBuilder', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'beginTransaction', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getCache', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'transactional', array('func' => $func), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'commit', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->commit();
    }

    public function rollback()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'rollback', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getClassMetadata', array('className' => $className), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'createQuery', array('dql' => $dql), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'createNamedQuery', array('name' => $name), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'createQueryBuilder', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'flush', array('entity' => $entity), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'clear', array('entityName' => $entityName), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->clear($entityName);
    }

    public function close()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'close', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->close();
    }

    public function persist($entity)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'persist', array('entity' => $entity), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'remove', array('entity' => $entity), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'refresh', array('entity' => $entity), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'detach', array('entity' => $entity), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'merge', array('entity' => $entity), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'contains', array('entity' => $entity), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getEventManager', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getConfiguration', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'isOpen', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getUnitOfWork', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getProxyFactory', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'initializeObject', array('obj' => $obj), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'getFilters', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'isFiltersStateClean', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'hasFilters', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return $this->valueHolderfc32d->hasFilters();
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

        $instance->initializer75a4a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfc32d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc32d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc32d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, '__get', ['name' => $name], $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        if (isset(self::$publicProperties0a75d[$name])) {
            return $this->valueHolderfc32d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc32d;

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

        $targetObject = $this->valueHolderfc32d;
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
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc32d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc32d;
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
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, '__isset', array('name' => $name), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc32d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfc32d;
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
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, '__unset', array('name' => $name), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc32d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfc32d;
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
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, '__clone', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        $this->valueHolderfc32d = clone $this->valueHolderfc32d;
    }

    public function __sleep()
    {
        $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, '__sleep', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;

        return array('valueHolderfc32d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer75a4a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer75a4a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer75a4a && ($this->initializer75a4a->__invoke($valueHolderfc32d, $this, 'initializeProxy', array(), $this->initializer75a4a) || 1) && $this->valueHolderfc32d = $valueHolderfc32d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc32d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc32d;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
