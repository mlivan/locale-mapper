<?php

namespace Emakina\LocaleMapper\Entity;

/**
 * Class LocaleMapping
 *
 * @package Emakina\LocaleMapper\Entity
 */
class LocaleMapping implements LocaleMappingInterface
{

    /**
     * @var string $country
     */
    private $country;

    /**
     * @var string $langcode
     */
    private $langcode;

    /**
     * @var string $currency
     */
    private $currency;

    /**
     * {@inheritdoc}
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * {@inheritdoc}
     */
    public function getLangcode(): string
    {
        return $this->langcode;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * {@inheritdoc}
     */
    public function setCountry(string $country): LocaleMappingInterface
    {
        $this->country = $country;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setLangcode(string $langcode): LocaleMappingInterface
    {
        $this->langcode = $langcode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrency(string $currency): LocaleMappingInterface
    {
        $this->currency = $currency;

        return $this;
    }
}
