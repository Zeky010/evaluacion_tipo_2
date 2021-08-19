<?php

namespace ContainerGqHs4xp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder84893 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer81c2c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8994a = [
        
    ];

    public function getConnection()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getConnection', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getMetadataFactory', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getExpressionBuilder', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'beginTransaction', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getCache', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getCache();
    }

    public function transactional($func)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'transactional', array('func' => $func), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->transactional($func);
    }

    public function commit()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'commit', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->commit();
    }

    public function rollback()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'rollback', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getClassMetadata', array('className' => $className), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'createQuery', array('dql' => $dql), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'createNamedQuery', array('name' => $name), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'createQueryBuilder', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'flush', array('entity' => $entity), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'clear', array('entityName' => $entityName), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->clear($entityName);
    }

    public function close()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'close', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->close();
    }

    public function persist($entity)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'persist', array('entity' => $entity), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'remove', array('entity' => $entity), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'refresh', array('entity' => $entity), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'detach', array('entity' => $entity), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'merge', array('entity' => $entity), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'contains', array('entity' => $entity), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getEventManager', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getConfiguration', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'isOpen', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getUnitOfWork', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getProxyFactory', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'initializeObject', array('obj' => $obj), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'getFilters', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'isFiltersStateClean', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'hasFilters', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return $this->valueHolder84893->hasFilters();
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

        $instance->initializer81c2c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder84893) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder84893 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder84893->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, '__get', ['name' => $name], $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        if (isset(self::$publicProperties8994a[$name])) {
            return $this->valueHolder84893->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84893;

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

        $targetObject = $this->valueHolder84893;
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
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84893;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder84893;
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
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, '__isset', array('name' => $name), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84893;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder84893;
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
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, '__unset', array('name' => $name), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84893;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder84893;
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
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, '__clone', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        $this->valueHolder84893 = clone $this->valueHolder84893;
    }

    public function __sleep()
    {
        $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, '__sleep', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;

        return array('valueHolder84893');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer81c2c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81c2c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer81c2c && ($this->initializer81c2c->__invoke($valueHolder84893, $this, 'initializeProxy', array(), $this->initializer81c2c) || 1) && $this->valueHolder84893 = $valueHolder84893;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder84893;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder84893;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
