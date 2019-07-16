<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function cadastroEvento($evento){
        $client = new Client();
        $res = $client->request('POST', env('API_URL').'inserir',   
        [
            'auth' => [env('API_USER'), env('API_PASSWORD')],
            'form_params' => ['evento' => $evento]
            ]
        );
        return json_decode($res->getBody());
    }
}