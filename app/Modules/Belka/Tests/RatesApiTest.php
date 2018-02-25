<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RatesApiTest extends TestCase
{
    use MakeRatesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateRates()
    {
        $rates = $this->fakeRatesData();
        $this->json('POST', '/api/v1/rates', $rates);

        $this->assertApiResponse($rates);
    }

    /**
     * @test
     */
    public function testReadRates()
    {
        $rates = $this->makeRates();
        $this->json('GET', '/api/v1/rates/'.$rates->id);

        $this->assertApiResponse($rates->toArray());
    }

    /**
     * @test
     */
    public function testUpdateRates()
    {
        $rates = $this->makeRates();
        $editedRates = $this->fakeRatesData();

        $this->json('PUT', '/api/v1/rates/'.$rates->id, $editedRates);

        $this->assertApiResponse($editedRates);
    }

    /**
     * @test
     */
    public function testDeleteRates()
    {
        $rates = $this->makeRates();
        $this->json('DELETE', '/api/v1/rates/'.$rates->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/rates/'.$rates->id);

        $this->assertResponseStatus(404);
    }
}
