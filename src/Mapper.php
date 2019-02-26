<?php

namespace Emakina\LocaleMapper;

use Emakina\LocaleMapper\Entity\Country;
use Emakina\LocaleMapper\Exception\InvalidLanguageException;

/**
 * Class Mapper
 *
 * @package Emakina\LocaleMapper
 */
class Mapper
{

    /**
     * Maps the given locale to the matching lang code - country - currency combination
     *
     * @param $locale
     *
     * @return \Emakina\LocaleMapper\Entity\CountryInterface
     * @throws InvalidLanguageException
     */
    public function map(string $locale)
    {
        $result = null;
        foreach (Countries::MAPPING as $values) {
            // We have two possibilities: we only got a country, so we return the first matching occurrence
            // or we have both country and language, we return the fully matching occurrence
            if ($values['locale'] === $locale || $values['country'] === $locale) {
                $result = $values;
                break;
            }
        }

        if (!$result) {
            throw new InvalidLanguageException('Unsupported locale');
        }
        
        // Instantiate the country
        $country = new Country();
        $country->setCountryCode($result['country']);
        $country->setCurrency($result['currency']);
        $country->setLocale($result['locale']);

        return $country;
    }
}
