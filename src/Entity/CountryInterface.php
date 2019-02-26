<?php

namespace Emakina\LocaleMapper\Entity;

/**
 * Interface CountyInterface
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
    public function getLangCode(): string;

    /**
     * Return the currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @param string $name
     *
     * @return self
     */
    public function setCountryCode(string $name): self;

    /**
     * @param string $langCode
     *
     * @return self
     */
    public function setLangCode(string $langCode): self;

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self;
}
