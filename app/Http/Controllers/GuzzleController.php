<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GuzzleController extends Controller
{
    public function sendGet()
  {

    try {

        $client = new Client([

            'base_uri' => 'http://api.openweathermap.org/data/2.5/',
        ]);

        $response = $client->request('GET', 'weather', [
            'query' => [
                'zip' => '32811',
                'country code' => 'us',
                'APPID' => '4f291da39170c92970adfe359b2c0ced'

            ],

        ]);

        if($response->getStatusCode() == 200) {
            return $response->getBody()->getContents();

        }
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
  }
}
