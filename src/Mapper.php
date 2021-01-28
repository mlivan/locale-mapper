<?php

namespace Emakina\LocaleMapper;

use Emakina\LocaleMapper\Entity\Country;
use Emakina\LocaleMapper\Entity\CountryInterface;
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
     * @param string $locale
     *
     * @return CountryInterface
     * @throws InvalidLanguageException
     */
    public function map(string $locale)
    {
        $result = null;
        foreach (Countries::MAPPING as $values) {
            // We have two possibilities: the given local is the country, so we return the first matching (default) occurrence
            // or it's the locale, in this case we try to find a country with a matching locale.
            if ($values['locale'] === $locale || $values['country'] === $locale) {
                $result = $values;
                break;
            }
        }

        if (!$result) {
            throw new InvalidLanguageException('Unsupported locale');
        }
        
        // Instantiate the country
        return new Country($result['country'], $result['currency'], $result['locale']);
    }

    /**
     * Return all locals (country code - country - currency) base on country code
     *
     * @param string $country
     *
     * @return CountryInterface[]
     * @throws InvalidLanguageException
     */
    public function mapCountryLocals(string $country)
    {
        $result = [];
        foreach (Countries::MAPPING as $values) {
            if ($values['country'] === $country) {
                $result[] = new Country($values['country'], $values['currency'], $values['locale']);
            }
        }

        if (!$result) {
            throw new InvalidLanguageException('Unsupported country code');
        }

        return $result;
    }
}
