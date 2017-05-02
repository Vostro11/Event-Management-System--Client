<?php

namespace App\Http\Controllers\ClientAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class LoginController extends Controller
{
    public function clientLogin(Request $request){
        //return $request['email'];
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('BASE_URL'),
            // You can set any number of default request options.
            'timeout'  => 10.0,
        ]);

        $response = $client->post('api/client/get-client', 
                ['json' => [
                    "email" =>$request['email'],
                    "password" => $request['password']
                ]]);
        if($response->getStatusCode()=='200'){
            $clients = (array)json_decode($response->getBody());
            //return $clients;
            $clients = (array)$clients['client'];

            session(['email' => $clients['email']]);
            session(['password' => $clients['password']]);
            return redirect('admin/dashboard');
        }
        return back();
    }
}