<?php

namespace ContainerMdgOfVc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder10746 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer41d87 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesea068 = [
        
    ];

    public function getConnection()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getConnection', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getMetadataFactory', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getExpressionBuilder', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'beginTransaction', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getCache', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getCache();
    }

    public function transactional($func)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'transactional', array('func' => $func), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'wrapInTransaction', array('func' => $func), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'commit', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->commit();
    }

    public function rollback()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'rollback', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getClassMetadata', array('className' => $className), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'createQuery', array('dql' => $dql), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'createNamedQuery', array('name' => $name), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'createQueryBuilder', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'flush', array('entity' => $entity), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'clear', array('entityName' => $entityName), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->clear($entityName);
    }

    public function close()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'close', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->close();
    }

    public function persist($entity)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'persist', array('entity' => $entity), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'remove', array('entity' => $entity), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'refresh', array('entity' => $entity), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'detach', array('entity' => $entity), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'merge', array('entity' => $entity), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getRepository', array('entityName' => $entityName), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'contains', array('entity' => $entity), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getEventManager', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getConfiguration', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'isOpen', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getUnitOfWork', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getProxyFactory', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'initializeObject', array('obj' => $obj), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'getFilters', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'isFiltersStateClean', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'hasFilters', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return $this->valueHolder10746->hasFilters();
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

        $instance->initializer41d87 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder10746) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder10746 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder10746->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, '__get', ['name' => $name], $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        if (isset(self::$publicPropertiesea068[$name])) {
            return $this->valueHolder10746->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10746;

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

        $targetObject = $this->valueHolder10746;
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
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10746;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder10746;
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
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, '__isset', array('name' => $name), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10746;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder10746;
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
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, '__unset', array('name' => $name), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10746;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder10746;
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
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, '__clone', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        $this->valueHolder10746 = clone $this->valueHolder10746;
    }

    public function __sleep()
    {
        $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, '__sleep', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;

        return array('valueHolder10746');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer41d87 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer41d87;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer41d87 && ($this->initializer41d87->__invoke($valueHolder10746, $this, 'initializeProxy', array(), $this->initializer41d87) || 1) && $this->valueHolder10746 = $valueHolder10746;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder10746;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder10746;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
