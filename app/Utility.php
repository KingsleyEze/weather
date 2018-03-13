<?php

namespace App;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Utility
{
    private  const  API_URL = 'http://api.wunderground.com/api/42f9eff9049534c7/conditions/q/';

    public static function getWeatherState($state){

        $country = 'Nigeria';

        try {

            $client = new Client();

            $result = $client->request('GET', Utility::API_URL .$country.'/'.$state.'.json',
                [],['connect_timeout' => 0, 'stream' => true]);
            $body = $result->getBody();

            return json_decode($body);

        } catch (RequestException $e) {

                dd($e->getRequest());
        }
    }
}
