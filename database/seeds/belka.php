<?php

use Illuminate\Database\Seeder;

class belka extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Добавляем автомобили
        for ($i = 0; $i < 4; $i++ ) {
            DB::table('cars')->insert([
                'gov_number' => strtoupper(str_random(8)),
                'model_id' => rand(1, 3)
            ]);
        }

        // Добавляем модели автомобилей
        DB::table('models')->insert([
            'manufacturer' => 'Kia',
            'model' => 'Rio',
            'class' => 'B'
        ]);
        DB::table('models')->insert([
            'manufacturer' => 'Mercedes-Benz',
            'model' => 'CLA Urban',
            'class' => 'С'
        ]);
        DB::table('models')->insert([
            'manufacturer' => 'Ford',
            'model' => 'Fiesta',
            'class' => 'B'
        ]);

        // Добавляем группы клиентов
        DB::table('groups')->insert([
            'name' => 'Simple'
        ]);
        DB::table('groups')->insert([
            'name' => 'Corp'
        ]);


    }
}
