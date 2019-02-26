<?php

namespace Emakina\LocaleMapper\Entity;

/**
 * Interface LocaleMappingInterface
 *
 * @package Emakina\LocaleMapper\Entity
 */
interface LocaleMappingInterface
{

    /**
     * Return the country
     *
     * @return string
     */
    public function getCountry(): string;

    /**
     * Return the langcode
     *
     * @return string
     */
    public function getLangcode(): string;

    /**
     * Return the currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @param string $country
     *
     * @return \Emakina\LocaleMapper\Entity\LocaleMappingInterface
     */
    public function setCountry(string $country): self;

    /**
     * @param string $langcode
     *
     * @return \Emakina\LocaleMapper\Entity\LocaleMappingInterface
     */
    public function setLangcode(string $langcode): self;

    /**
     * @param string $currency
     *
     * @return \Emakina\LocaleMapper\Entity\LocaleMappingInterface
     */
    public function setCurrency(string $currency): self;
}
