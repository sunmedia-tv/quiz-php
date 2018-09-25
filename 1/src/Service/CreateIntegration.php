<?php

namespace SunMedia\Service;

use Doctrine\ORM\EntityNotFoundException;
use SunMedia\Entity\Integration;
use SunMedia\Entity\Site;
use SunMedia\Repository\IntegrationRepository;
use SunMedia\Repository\SiteRepository;

class CreateIntegration
{
    /**
     * @var IntegrationRepository
     */
    private $integrationRepository;
    /**
     * @var SiteRepository
     */
    private $siteRepository;

    public function __construct(
        IntegrationRepository $integrationRepository,
        SiteRepository $siteRepository
    ) {
        $this->integrationRepository = $integrationRepository;
        $this->siteRepository = $siteRepository;
    }

    /**
     * @param string $name
     * @param string $currency
     * @param string $price
     * @param string $siteId
     * @throws EntityNotFoundException
     * @throws \Exception
     */
    public function execute(
        string $name,
        string $currency,
        string $price,
        string $siteId
    ) {
        /** @var Site $site */
        $site = $this->siteRepository->find($siteId);

        if (true === is_null($site)) {
            throw new EntityNotFoundException('Site not found');
        }

        $integration = new Integration(
            $name,
            $currency,
            $price,
            $site
        );

        $this->integrationRepository->save($integration);
    }
}
