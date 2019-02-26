<?php

namespace Emakina\LocaleMapper\Entity;

/**
 * Class Country
 *
 * @package Emakina\LocaleMapper\Entity
 */
class Country implements CountryInterface
{

    /**
     * @var string $countryCode
     */
    private $countryCode;

    /**
     * @var string $langCode
     */
    private $langCode;

    /**
     * @var string $currency
     */
    private $currency;

    /**
     * {@inheritdoc}
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getLangCode(): string
    {
        return $this->langCode;
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
    public function setCountryCode(string $countryCode): CountryInterface
    {
        $this->countryCode   = $countryCode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setLangCode(string $langCode): CountryInterface
    {
        $this->langCode = $langCode;

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
