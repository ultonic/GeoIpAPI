<?php

use Faker\Generator as Faker;

$factory->define(App\AutoModel::class, function (Faker $faker) {

    $model = $faker->unique()->randomElement([['KIA', 'Rio', 'B'], ['Mercedes-Benz', 'CLA Urban', 'C'], ['Ford', 'Fiesta', 'B']]);

    return [
        'manufacturer' => $model[0],
        'model' => $model[1],
        'class' => $model[2]
    ];
});

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'gov_number' => $faker->regexify('[A-Z]\d{3}[A-Z]{2}177'),
        'auto_model_id' => App\AutoModel::find(rand(1,3))
    ];
});

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'driver_license' => $faker->numberBetween(1000000000, 9999999999)
    ];
});

$factory->define(App\Group::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['Simple', 'Corp'])
    ];
});

$factory->define(App\Rate::class, function (Faker $faker) {

    $combinations = $faker->unique()->randomElement([[1,1], [1,2], [2,1], [2,2], [3,1], [3,2]]);

    return [
        'name' => 'Rate',
        'auto_model_id' => $combinations[0],
        'group_id' => $combinations[1],
        'total_limit' => $faker->randomElement([2100, 2700, 2500]),
    ];
});

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['active', 'closed']),
        'car_id' => App\Car::find(rand(1,6)),
        'customer_id' => App\Customer::find(rand(1,10)),
        'rate_id' => App\Rate::find(rand(1,6))
    ];
});

$factory->define(App\Booking::class, function (Faker $faker) {
    $id = $faker->randomElement([1,2,3,4,5,6]);
    $rate = App\Rate::find($id);

    return [
        'pref_reserv_time' => 20,
        'pref_reserv_price' => 0,
        'price_per_minute' => ($rate->automodel->class == 'B') ? 2 : 3,
        'night_period_id' => 1,
        'night_period_price' => 0,
        'rate_id' => $rate
    ];
});

$factory->define(App\Parking::class, function (Faker $faker) {
    $id = $faker->randomElement([1,2,3,4,5,6]);
    $rate = App\Rate::find($id);

    return [
        'price_per_minute' => ($rate->automodel->class == 'B') ? 2 : 3,
        'night_period_id' => 1,
        'night_period_price' => 0,
        'rate_id' => $rate
    ];
});

$factory->define(App\Inspection::class, function (Faker $faker) {
    $id = $faker->randomElement([1,2,3,4,5,6]);
    $rate = App\Rate::find($id);

    return [
        'pref_inspect_time' => 7,
        'pref_inspect_price' => 0,
        'price_per_minute' => 2,
        'rate_id' => $rate
    ];
});

$factory->define(App\Trip::class, function (Faker $faker) {
    $id = $faker->randomElement([1,2,3,4,5,6]);
    $rate = App\Rate::find($id);

    return [
        'price_per_minute' => ($rate->automodel->class == 'B') ? 8 : 10,
        'km_limit' => 70,
        'price_after_limit' => ($rate->automodel->class == 'B') ? 10 : 12,
        'rate_id' => $rate
    ];
});