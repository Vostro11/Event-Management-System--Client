<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use View;

class FrontendPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('BASE_URL'),
            // You can set any number of default request options.
            'timeout'  => 10.0,
        ]);

        $response = $client->post('api/client/get-client', 
                ['json' => [
                    "email" =>env('CLIENT_EMAIL'),
                    "password" => env('CLIENT_PASSWORD')
                ]]);
        if($response->getStatusCode()=='200'){
            $clients = (array)json_decode($response->getBody());
            $clients = (array)$clients['client'];
            // Sharing is caring
            session(['email' => $clients['email']]);
            session(['password' => $clients['password']]);
            View::share('client', $clients);
       }
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        return view('frontend.home.home');
    }
    public function about()
    {
        return view('frontend.about.about');
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }
    public function events()
    {
        return view('frontend.events.events');
    }
    public function registerForEvent(){
        return view('frontend.events.register-for-event');
    }
    public function login()
    {
        return view('frontend.login.login');
    }
    public function signup()
    {
        return view('frontend.signup.signup');
    }

}
