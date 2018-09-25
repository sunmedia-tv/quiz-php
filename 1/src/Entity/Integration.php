<?php

namespace SunMedia\Entity;

use DateTimeImmutable;

class Integration
{
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
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $currency;
    /**
     * @var float
     */
    private $price;
    /**
     * @var Site
     */
    private $site;
    /**
     * @var string
     */
    private $status;

    /**
     * @param string $name
     * @param string $currency
     * @param float $price
     * @param Site $site
     * @throws \Exception
     */
    public function __construct(
        string $name,
        string $currency,
        float $price,
        Site $site
    ) {
        $this->name = $name;
        $this->currency = $currency;
        $this->price = $price;
        $this->site = $site;
        $this->status = 'INIT';

        $this->enabled = true;
        $this->enabledAt = new DateTimeImmutable();

        $this->createdAt = new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();

        $this->deleted = false;
        $this->deletedAt = null;
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

    /**
     * @return int
     */
    public function id(): int
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
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * @return float
     */
    public function price(): float
    {
        return $this->price;
    }

    /**
     * @return Site
     */
    public function site(): Site
    {
        return $this->site;
    }
}
