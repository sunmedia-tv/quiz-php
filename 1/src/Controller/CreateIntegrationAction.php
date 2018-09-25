<?php

namespace SunMedia\Controller;

use SunMedia\Service\CreateIntegration;
use Symfony\Component\HttpFoundation\Request;

class CreateIntegrationAction
{
    /**
     * @var CreateIntegration
     */
    private $createIntegration;

    public function __construct(CreateIntegration $createIntegration)
    {
        $this->createIntegration = $createIntegration;
    }

    /**
     * @param Request $request
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function __invoke(Request $request)
    {
        $this->createIntegration->execute(
            'name',
            'EUR',
            10,
            1
        );
    }
}
