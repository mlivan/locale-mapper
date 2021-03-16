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
     * @var string $locale
     */
    private $locale;

    /**
     * @var string $currency
     */
    private $currency;

    /**
     * @var string $googleMapLanguage
     */
    private $googleMapLanguage;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $countryCode, string $currency, string $locale, string $googleMapLanguage)
    {
        $this->setCountryCode($countryCode);
        $this->setCurrency($currency);
        $this->setLocale($locale);
        $this->setGoogleMapLanguage($googleMapLanguage);
    }

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
    public function getLocale(): string
    {
        return $this->locale;
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
    public function getGoogleMapLanguage(): string
    {
        return $this->googleMapLanguage;
    }

    /**
     * {@inheritdoc}
     */
    public function setCountryCode(string $countryCode): CountryInterface
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale(string $locale): CountryInterface
    {
        $this->locale = $locale;

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

    /**
     * {@inheritdoc}
     */
    public function setGoogleMapLanguage(string $googleMapLanguage): CountryInterface
    {
        $this->googleMapLanguage = $googleMapLanguage;

        return $this;
    }
}
