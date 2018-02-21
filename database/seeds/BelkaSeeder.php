<?php

use Illuminate\Database\Seeder;

class BelkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AutoModel::class, 3)->create()->each(function($u) {
            $u->cars()->save(factory(App\Car::class)->make());
            $u->cars()->save(factory(App\Car::class)->make());
        });;

        factory(App\Group::class, 2)->create();

        factory(App\Customer::class, 10)->create()->each(function($u) {
            $u->groups()->save(App\Group::find(rand(1,2)));
        });

        factory(App\Rate::class, 6)->create()->each(function($u) {
            $u->booking()->save(factory(App\Booking::class)->make());
            $u->inspection()->save(factory(App\Inspection::class)->make());
            $u->parking()->save(factory(App\Parking::class)->make());
            $u->trip()->save(factory(App\Trip::class)->make());
        });

        factory(App\Order::class, 10)->create();

        DB::table('time_periods')->insert([
            'description' => '23:00 – 07:00',
            'from' => '23:00:00',
            'to' => '07:00:00',
        ]);



    }
}
