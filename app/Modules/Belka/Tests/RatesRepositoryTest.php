<?php

use Modules\Belka\Models\Rates;
use Modules\Belka\Repositories\RatesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RatesRepositoryTest extends TestCase
{
    use MakeRatesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var RatesRepository
     */
    protected $ratesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->ratesRepo = App::make(RatesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateRates()
    {
        $rates = $this->fakeRatesData();
        $createdRates = $this->ratesRepo->create($rates);
        $createdRates = $createdRates->toArray();
        $this->assertArrayHasKey('id', $createdRates);
        $this->assertNotNull($createdRates['id'], 'Created Rates must have id specified');
        $this->assertNotNull(Rates::find($createdRates['id']), 'Rates with given id must be in DB');
        $this->assertModelData($rates, $createdRates);
    }

    /**
     * @test read
     */
    public function testReadRates()
    {
        $rates = $this->makeRates();
        $dbRates = $this->ratesRepo->find($rates->id);
        $dbRates = $dbRates->toArray();
        $this->assertModelData($rates->toArray(), $dbRates);
    }

    /**
     * @test update
     */
    public function testUpdateRates()
    {
        $rates = $this->makeRates();
        $fakeRates = $this->fakeRatesData();
        $updatedRates = $this->ratesRepo->update($fakeRates, $rates->id);
        $this->assertModelData($fakeRates, $updatedRates->toArray());
        $dbRates = $this->ratesRepo->find($rates->id);
        $this->assertModelData($fakeRates, $dbRates->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteRates()
    {
        $rates = $this->makeRates();
        $resp = $this->ratesRepo->delete($rates->id);
        $this->assertTrue($resp);
        $this->assertNull(Rates::find($rates->id), 'Rates should not exist in DB');
    }
}
