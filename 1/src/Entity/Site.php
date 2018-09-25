<?php

namespace SunMedia\Entity;

use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Traversable;

class Site
{
    /**
     * @var
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $url;
    /**
     * @var Collection
     */
    private $integrations;
    /**
     * @var bool
     */
    private $enabled;
    /**
     * @var DateTimeImmutable
     */
    private $enabledAt;
    /**
     * @var DateTimeImmutable
     */
    private $createdAt;
    /**
     * @var DateTimeImmutable
     */
    private $updatedAt;
    /**
     * @var bool
     */
    private $deleted;
    /**
     * @var null
     */
    private $deletedAt;

    /**
     * @param string $name
     * @param string $url
     * @throws \Exception
     */
    public function __construct(
        string $name,
        string $url
    ) {
        $this->name = $name;
        $this->url = $url;

        $this->enabled = true;
        $this->enabledAt = new DateTimeImmutable();

        $this->createdAt = new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();

        $this->deleted = false;
        $this->deletedAt = null;

        $this->integrations = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return Collection
     */
    public function integrations(): Collection
    {
        return $this->integrations;
    }

    /**
     * @param Traversable $integrations
     */
    public function addIntegrations(Traversable $integrations)
    {
        foreach ($integrations as $integration) {
            $this->addIntegration($integration);
        }
    }

    /**
     * @param Integration $integration
     */
    public function addIntegration(Integration $integration)
    {
        if (false === $this->integrations()->contains($integration)) {
            $this->integrations()->add($integration);
        }
    }

    /**
     * @return bool
     */
    public function enabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return DateTimeImmutable
     */
    public function enabledAt(): DateTimeImmutable
    {
        return $this->enabledAt;
    }

    /**
     * @return DateTimeImmutable
     */
    public function createdAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @return DateTimeImmutable
     */
    public function updatedAt(): DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * @return bool
     */
    public function deleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @return null
     */
    public function deletedAt()
    {
        return $this->deletedAt;
    }
}
