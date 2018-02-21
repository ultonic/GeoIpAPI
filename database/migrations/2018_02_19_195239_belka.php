<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Belka extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Создаем таблицу под автомобили
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gov_number');
            $table->integer('auto_model_id');
        });

        // Создаем таблицу под модели автомобили
        Schema::create('auto_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('class');
        });

        // Создаем таблицу под пользователей
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('driver_license');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        // Создаем таблицу под группы пользователей
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        // Создаем таблицу под связь пользователей с группами
        Schema::create('customer_group', function (Blueprint $table) {
            $table->integer('customer_id');
            $table->integer('group_id');
            $table->primary(['customer_id', 'group_id']);
        });

        // Создаем таблицу под заказы
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->integer('car_id');
            $table->integer('customer_id');
            $table->integer('rate_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        // Создаем таблицу под логи заказов
        Schema::create('orders_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('km')->default(0);
            $table->string('action_type');
            $table->dateTime('action_start');
            $table->dateTime('action_end');
        });

        // Создаем таблицу под дополнительные опции
        Schema::create('additional_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price_per_minute');
            $table->integer('max_price');
            $table->integer('rate_id');
        });

        // Создаем таблицу под тарифы
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('auto_model_id');
            $table->integer('group_id');
            $table->integer('total_limit');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        // Создаем таблицу под временные периоды
        Schema::create('time_periods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->time('from');
            $table->time('to');
        });

        // Создаем таблицу под стоимости бронирования
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pref_reserv_time');
            $table->integer('pref_reserv_price');
            $table->integer('price_per_minute');
            $table->integer('night_period_id');
            $table->integer('night_period_price');
            $table->integer('rate_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        // Создаем таблицу под стоимости осмотра
        Schema::create('inspections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pref_inspect_time');
            $table->integer('pref_inspect_price');
            $table->integer('price_per_minute');
            $table->integer('rate_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        // Создаем таблицу под стоимости поездки
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price_per_minute');
            $table->integer('km_limit');
            $table->integer('price_after_limit');
            $table->integer('rate_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        // Создаем таблицу под стоимости парковки
        Schema::create('parkings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price_per_minute');
            $table->integer('night_period_id');
            $table->integer('night_period_price');
            $table->integer('rate_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Удаляем таблицу под автомобили
        Schema::dropIfExists('cars');
        Schema::dropIfExists('auto_models');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('groups');
        Schema::dropIfExists('customer_group');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('orders_logs');
        Schema::dropIfExists('additional_options');
        Schema::dropIfExists('rates');
        Schema::dropIfExists('time_periods');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('inspections');
        Schema::dropIfExists('trips');
        Schema::dropIfExists('parkings');
    }
}
