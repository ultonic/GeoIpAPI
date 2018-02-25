<?php

namespace Modules\Belka\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'car_model' => implode(' ', [$this->automodel->manufacturer, $this->automodel->model]),
            'prices' => [
                'booking' => [
                    'pref_reserv_time' => $this->booking->pref_reserv_time,
                    'pref_reserv_price' => $this->booking->pref_reserv_price,
                    'night_time' => implode(' – ', [$this->booking->time_period->from, $this->booking->time_period->to]),
                    'night_time_price' => $this->booking->night_period_price,
                    'day_time' => implode(' – ', [$this->booking->time_period->to, $this->booking->time_period->from]),
                    'price_per_minute' => $this->booking->price_per_minute,
                ],
                'inspection' => [
                    'pref_inspect_time' => $this->inspection->pref_inspect_time,
                    'pref_inspect_price' => $this->inspection->pref_inspect_price,
                    'price_per_minute' => $this->inspection->price_per_minute,
                ],
                'trip' => [
                    'price_per_minute' => $this->trip->price_per_minute,
                    'km_limit' => $this->trip->km_limit,
                    'price_after_limit' => $this->trip->price_after_limit
                ],
                'parking' => [
                    'night_time' => implode(' – ', [$this->parking->time_period->from, $this->parking->time_period->to]),
                    'night_time_price' => $this->parking->night_period_price,
                    'day_time' => implode(' – ', [$this->parking->time_period->to, $this->parking->time_period->from]),
                    'price_per_minute' => $this->parking->price_per_minute,
                ],
                'day_limit' => $this->total_limit,
            ]

        ];
    }
}
