<?php

namespace ContainerTRHww6q;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0e90a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer990bf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c233 = [
        
    ];

    public function getConnection()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getConnection', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getMetadataFactory', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getExpressionBuilder', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'beginTransaction', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getCache', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'transactional', array('func' => $func), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'commit', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->commit();
    }

    public function rollback()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'rollback', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getClassMetadata', array('className' => $className), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'createQuery', array('dql' => $dql), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'createNamedQuery', array('name' => $name), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'createQueryBuilder', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'flush', array('entity' => $entity), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'clear', array('entityName' => $entityName), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->clear($entityName);
    }

    public function close()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'close', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->close();
    }

    public function persist($entity)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'persist', array('entity' => $entity), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'remove', array('entity' => $entity), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'refresh', array('entity' => $entity), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'detach', array('entity' => $entity), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'merge', array('entity' => $entity), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'contains', array('entity' => $entity), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getEventManager', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getConfiguration', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'isOpen', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getUnitOfWork', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getProxyFactory', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'initializeObject', array('obj' => $obj), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'getFilters', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'isFiltersStateClean', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'hasFilters', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return $this->valueHolder0e90a->hasFilters();
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

        $instance->initializer990bf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0e90a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0e90a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0e90a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, '__get', ['name' => $name], $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        if (isset(self::$publicProperties9c233[$name])) {
            return $this->valueHolder0e90a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e90a;

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

        $targetObject = $this->valueHolder0e90a;
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
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e90a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0e90a;
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
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, '__isset', array('name' => $name), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e90a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0e90a;
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
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, '__unset', array('name' => $name), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e90a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0e90a;
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
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, '__clone', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        $this->valueHolder0e90a = clone $this->valueHolder0e90a;
    }

    public function __sleep()
    {
        $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, '__sleep', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;

        return array('valueHolder0e90a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer990bf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer990bf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer990bf && ($this->initializer990bf->__invoke($valueHolder0e90a, $this, 'initializeProxy', array(), $this->initializer990bf) || 1) && $this->valueHolder0e90a = $valueHolder0e90a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0e90a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0e90a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
