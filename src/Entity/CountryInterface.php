<?php

namespace Emakina\LocaleMapper\Entity;

/**
 * Interface CountryInterface
 *
 * @package Emakina\LocaleMapper\Entity
 */
interface CountryInterface
{
    /**
     * Return the country code
     *
     * @return string
     */
    public function getCountryCode(): string;

    /**
     * Return the lang code
     *
     * @return string
     */
    public function getLocale(): string;

    /**
     * Return the currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Return the google map language code
     *
     * @return string
     */
    public function getGoogleMapLanguage(): string;

    /**
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self;

    /**
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale): self;

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self;

    /**
     * @param string $googleMapLanguage
     *
     * @return self
     */
    public function setGoogleMapLanguage(string $googleMapLanguage): self;
}
