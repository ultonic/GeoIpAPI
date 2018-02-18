<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Mockery\Exception;

class GeoIpController extends Controller
{
    private $ip;

    function __construct(Request $request)
    {
        $this->ip = $request->get('ip');
    }

    public function getData(Request $request)
    {
        try {
            // Ищем информацию по указанному IP адресу в кеше, если нет, получаем из базы SypexGeo и кладем в кеш
            $location = Cache::remember('location', 30, function () {
                return \SypexGeo::get($this->ip);
            });

            if (!$location)
                return response('', 404); // Если не найдена информация – выводим пустую 404
            else
                print json_encode($location);

        } catch (Exception $e) {
            print $e->getMessage();
        }


    }
}
