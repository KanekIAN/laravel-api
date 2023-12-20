<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SensorController1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();
        $url = "http://192.168.18.5:8000/api/sensor";
        // $url = "http://172.25.113.183:8000/api/sensor";
        // $url = "http://192.168.1.149:8000/api/sensor";
        // $url = "http://192.168.11.116:8000/api/sensor";
        // $url = "http://192.168.2.226:8000/api/sensor";
        // $url = "http://192.168.11.67:8000/api/sensor";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        return view('index', ['data'=>$data]);
    }

}
