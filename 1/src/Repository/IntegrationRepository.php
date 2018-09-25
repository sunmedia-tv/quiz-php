<?php

namespace SunMedia\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\ORMException;
use SunMedia\Entity\Integration;

class IntegrationRepository extends EntityRepository
{
    /**
     * @param Integration $integration
     * @return Integration
     * @throws ORMException
     */
    public function save(Integration $integration)
    {
        $this->_em->beginTransaction();

        try {
            $this->_em->persist($integration);
            $this->_em->flush();
            $this->_em->commit();
        } catch (ORMException $exception) {
            $this->_em->rollback();
            throw $exception;
        }

        return $integration;
    }
}
