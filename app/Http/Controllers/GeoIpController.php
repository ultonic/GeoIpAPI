<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            // Ищем информацию по указанному IP адресу
            $location = \SypexGeo::get($this->ip);

            if (!$location)
                // Если не найдена информация – выводим пустую 404
                return response('', 404);
            else
                print json_encode($location);

        } catch (Exception $e) {
            print $e->getMessage();
        }


    }
}
