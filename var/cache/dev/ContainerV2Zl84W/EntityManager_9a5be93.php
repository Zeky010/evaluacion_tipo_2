<?php

namespace ContainerV2Zl84W;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf7e13 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdccdf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8f799 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getConnection', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getMetadataFactory', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getExpressionBuilder', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'beginTransaction', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getCache', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'transactional', array('func' => $func), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->transactional($func);
    }

    public function commit()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'commit', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->commit();
    }

    public function rollback()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'rollback', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getClassMetadata', array('className' => $className), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'createQuery', array('dql' => $dql), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'createNamedQuery', array('name' => $name), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'createQueryBuilder', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'flush', array('entity' => $entity), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'clear', array('entityName' => $entityName), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->clear($entityName);
    }

    public function close()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'close', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->close();
    }

    public function persist($entity)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'persist', array('entity' => $entity), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'remove', array('entity' => $entity), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'refresh', array('entity' => $entity), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'detach', array('entity' => $entity), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'merge', array('entity' => $entity), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'contains', array('entity' => $entity), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getEventManager', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getConfiguration', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'isOpen', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getUnitOfWork', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getProxyFactory', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'initializeObject', array('obj' => $obj), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'getFilters', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'isFiltersStateClean', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'hasFilters', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return $this->valueHolderf7e13->hasFilters();
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

        $instance->initializerdccdf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf7e13) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf7e13 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf7e13->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, '__get', ['name' => $name], $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        if (isset(self::$publicProperties8f799[$name])) {
            return $this->valueHolderf7e13->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7e13;

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

        $targetObject = $this->valueHolderf7e13;
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
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7e13;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7e13;
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
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, '__isset', array('name' => $name), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7e13;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf7e13;
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
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, '__unset', array('name' => $name), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7e13;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf7e13;
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
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, '__clone', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        $this->valueHolderf7e13 = clone $this->valueHolderf7e13;
    }

    public function __sleep()
    {
        $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, '__sleep', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;

        return array('valueHolderf7e13');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdccdf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdccdf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdccdf && ($this->initializerdccdf->__invoke($valueHolderf7e13, $this, 'initializeProxy', array(), $this->initializerdccdf) || 1) && $this->valueHolderf7e13 = $valueHolderf7e13;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7e13;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7e13;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
