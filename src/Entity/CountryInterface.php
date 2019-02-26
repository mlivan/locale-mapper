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
     * Return the name
     *
     * @return string
     */
    public function getName(): string;

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
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self;

    /**
     * @param string $langcode
     *
     * @return self
     */
    public function setLangcode(string $langcode): self;

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self;
}
