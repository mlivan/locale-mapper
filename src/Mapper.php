<?php

namespace Emakina\LocaleMapper;

use Emakina\LocaleMapper\Entity\LocaleMapping;
use Emakina\LocaleMapper\Exception\InvalidLanguageException;

/**
 * Class LocaleMapper
 *
 * @package Emakina\LocaleMapper
 */
class Mapper
{

    /**
     * Maps the given locale to a country-currency combination
     *
     * @param $locale
     *
     * @return \Emakina\LocaleMapper\Entity\LocaleMappingInterface
     * @throws InvalidLanguageException
     */
    public function map($locale)
    {
        $langcode = null;
        $country  = null;
        // In case we get a locale containing the langcode and the country, we split it.
        if (preg_match('^([a-z]{2})-([a-z]{2})', $locale)) {
            list($langcode, $country) = explode('-', $locale);
        }

        // Means we only got the country
        if (!$country) {
            $country = $locale;
        }

        $result = null;
        foreach (Countries::MAPPING as $values) {
            // We have two possible case: we only got a country, so we return the first matching occurrence
            // or we have both country and language, we return the fully matching occurrence
            if ((!$langcode && $country === $values['country']) || ($langcode && $langcode === $values['langcode'] && $country === $values['country'])) {
                $result = $values;
                break;
            }
        }

        if (!$result) {
            throw new InvalidLanguageException('Not supported locale');
        }

        $mapping = new LocaleMapping();
        $mapping->setCountry($result['country']);
        $mapping->setCurrency($result['currency']);
        $mapping->setLangcode($result['langcode']);

        return $mapping;
    }
}
