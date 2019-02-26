<?php

namespace Emakina\LocaleMapper\Entity;

/**
 * Class LocaleMapping
 *
 * @package Emakina\LocaleMapper\Entity
 */
class Country implements CountryInterface
{

    /**
     * @var string $name
     */
    private $name;

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
    public function getName(): string
    {
        return $this->name;
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
    public function setName(string $name): CountryInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setLangcode(string $langcode): CountryInterface
    {
        $this->langcode = $langcode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrency(string $currency): CountryInterface
    {
        $this->currency = $currency;

        return $this;
    }
}
