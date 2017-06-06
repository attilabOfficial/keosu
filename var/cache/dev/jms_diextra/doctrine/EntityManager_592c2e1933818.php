<?php

namespace EntityManager592c2e1933818_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class EntityManager extends \Doctrine\ORM\EntityManager
{
    private $delegate;
    private $container;

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        return $this->delegate->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        return $this->delegate->rollback();
    }

    /**
     * Removes an entity instance.
     *
     * A removed entity will be removed from the database at or before transaction commit
     * or as a result of the flush operation.
     *
     * @param object $entity The entity instance to remove.
     *
     * @return void
     *
     * @throws ORMInvalidArgumentException
     */
    public function remove($entity)
    {
        return $this->delegate->remove($entity);
    }

    /**
     * Refreshes the persistent state of an entity from the database,
     * overriding any local changes that have not yet been persisted.
     *
     * @param object $entity The entity to refresh.
     *
     * @return void
     *
     * @throws ORMInvalidArgumentException
     */
    public function refresh($entity)
    {
        return $this->delegate->refresh($entity);
    }

    /**
     * Tells the EntityManager to make an instance managed and persistent.
     *
     * The entity will be entered into the database at or before transaction
     * commit or as a result of the flush operation.
     *
     * NOTE: The persist operation always considers entities that are not yet known to
     * this EntityManager as NEW. Do not pass detached entities to the persist operation.
     *
     * @param object $entity The instance to make managed and persistent.
     *
     * @return void
     *
     * @throws ORMInvalidArgumentException
     */
    public function persist($entity)
    {
        return $this->delegate->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        return $this->delegate->newHydrator($hydrationMode);
    }

    /**
     * Merges the state of a detached entity into the persistence context
     * of this EntityManager and returns the managed copy of the entity.
     * The entity passed to merge will not become associated/managed with this EntityManager.
     *
     * @param object $entity The detached entity to merge into the persistence context.
     *
     * @return object The managed copy of the entity.
     *
     * @throws ORMInvalidArgumentException
     */
    public function merge($entity)
    {
        return $this->delegate->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = NULL)
    {
        return $this->delegate->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        return $this->delegate->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        return $this->delegate->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        return $this->delegate->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        return $this->delegate->hasFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        return $this->delegate->getUnitOfWork();
    }

    /**
     * Gets the repository for an entity class.
     *
     * @param string $entityName The name of the entity.
     *
     * @return \Doctrine\ORM\EntityRepository The repository class.
     */
    public function getRepository($className)
    {
        $repository = $this->delegate->getRepository($className);

        if ($repository instanceof \Symfony\Component\DependencyInjection\ContainerAwareInterface) {
            $repository->setContainer($this->container);

            return $repository;
        }

        if (null !== $metadata = $this->container->get("jms_di_extra.metadata.metadata_factory")->getMetadataForClass(get_class($repository))) {
            foreach ($metadata->classMetadata as $classMetadata) {
                foreach ($classMetadata->methodCalls as $call) {
                    list($method, $arguments) = $call;
                    call_user_func_array(array($repository, $method), $this->prepareArguments($arguments));
                }
            }
        }

        return $repository;
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        return $this->delegate->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        return $this->delegate->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        return $this->delegate->getPartialReference($entityName, $identifier);
    }

    /**
     * Gets the metadata factory used to gather the metadata of classes.
     *
     * @return \Doctrine\ORM\Mapping\ClassMetadataFactory
     */
    public function getMetadataFactory()
    {
        return $this->delegate->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        return $this->delegate->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        return $this->delegate->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        return $this->delegate->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        return $this->delegate->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        return $this->delegate->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        return $this->delegate->getConfiguration();
    }

    /**
     * Returns the ORM metadata descriptor for a class.
     *
     * The class name must be the fully-qualified class name without a leading backslash
     * (as it is returned by get_class($obj)) or an aliased class name.
     *
     * Examples:
     * MyProject\Domain\User
     * sales:PriceRequest
     *
     * Internal note: Performance-sensitive method.
     *
     * @param string $className
     *
     * @return \Doctrine\ORM\Mapping\ClassMetadata
     */
    public function getClassMetadata($className)
    {
        return $this->delegate->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        return $this->delegate->getCache();
    }

    /**
     * Flushes all changes to objects that have been queued up to now to the database.
     * This effectively synchronizes the in-memory state of managed objects with the
     * database.
     *
     * If an entity is explicitly passed to this method only this entity and
     * the cascade-persist semantics + scheduled inserts/removals are synchronized.
     *
     * @param null|object|array $entity
     *
     * @return void
     *
     * @throws \Doctrine\ORM\OptimisticLockException If a version check on an entity that
     *         makes use of optimistic locking fails.
     */
    public function flush($entity = NULL)
    {
        return $this->delegate->flush($entity);
    }

    /**
     * Finds an Entity by its identifier.
     *
     * @param string       $entityName  The class name of the entity to find.
     * @param mixed        $id          The identity of the entity to find.
     * @param integer|null $lockMode    One of the \Doctrine\DBAL\LockMode::* constants
     *                                  or NULL if no specific lock mode should be used
     *                                  during the search.
     * @param integer|null $lockVersion The version of the entity to find when using
     *                                  optimistic locking.
     *
     * @return object|null The entity instance or NULL if the entity can not be found.
     *
     * @throws OptimisticLockException
     * @throws ORMInvalidArgumentException
     * @throws TransactionRequiredException
     * @throws ORMException
     */
    public function find($entityName, $id, $lockMode = NULL, $lockVersion = NULL)
    {
        return $this->delegate->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * Detaches an entity from the EntityManager, causing a managed entity to
     * become detached.  Unflushed changes made to the entity if any
     * (including removal of the entity), will not be synchronized to the database.
     * Entities which previously referenced the detached entity will continue to
     * reference it.
     *
     * @param object $entity The entity to detach.
     *
     * @return void
     *
     * @throws ORMInvalidArgumentException
     */
    public function detach($entity)
    {
        return $this->delegate->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        return $this->delegate->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        return $this->delegate->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        return $this->delegate->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        return $this->delegate->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        return $this->delegate->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     *
     * @todo Implementation need. This is necessary since $e2 = clone $e1; throws an E_FATAL when access anything on $e:
     * Fatal error: Maximum function nesting level of '100' reached, aborting!
     */
    public function copy($entity, $deep = false)
    {
        return $this->delegate->copy($entity, $deep);
    }

    /**
     * Determines whether an entity instance is managed in this EntityManager.
     *
     * @param object $entity
     *
     * @return boolean TRUE if this EntityManager currently manages the given entity, FALSE otherwise.
     */
    public function contains($entity)
    {
        return $this->delegate->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        return $this->delegate->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        return $this->delegate->close();
    }

    /**
     * Clears the EntityManager. All entities that are currently managed
     * by this EntityManager become detached.
     *
     * @param string|null $entityName if given, only entities of this type will get detached
     *
     * @return void
     */
    public function clear($entityName = NULL)
    {
        return $this->delegate->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        return $this->delegate->beginTransaction();
    }

    public function __construct($objectManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->delegate = $objectManager;
        $this->container = $container;
    }

    private function prepareArguments(array $arguments)
    {
        $processed = array();
        foreach ($arguments as $arg) {
            if ($arg instanceof \Symfony\Component\DependencyInjection\Reference) {
                $processed[] = $this->container->get((string) $arg, $arg->getInvalidBehavior());
            } else if ($arg instanceof \Symfony\Component\DependencyInjection\Parameter) {
                $processed[] = $this->container->getParameter((string) $arg);
            } else {
                $processed[] = $arg;
            }
        }

        return $processed;
    }
}