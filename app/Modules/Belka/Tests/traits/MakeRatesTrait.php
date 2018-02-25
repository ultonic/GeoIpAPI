<?php

use Faker\Factory as Faker;
use Modules\Belka\Models\Rates;
use Modules\Belka\Repositories\RatesRepository;

trait MakeRatesTrait
{
    /**
     * Create fake instance of Rates and save it in database
     *
     * @param array $ratesFields
     * @return Rates
     */
    public function makeRates($ratesFields = [])
    {
        /** @var RatesRepository $ratesRepo */
        $ratesRepo = App::make(RatesRepository::class);
        $theme = $this->fakeRatesData($ratesFields);
        return $ratesRepo->create($theme);
    }

    /**
     * Get fake instance of Rates
     *
     * @param array $ratesFields
     * @return Rates
     */
    public function fakeRates($ratesFields = [])
    {
        return new Rates($this->fakeRatesData($ratesFields));
    }

    /**
     * Get fake data of Rates
     *
     * @param array $postFields
     * @return array
     */
    public function fakeRatesData($ratesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $ratesFields);
    }
}
