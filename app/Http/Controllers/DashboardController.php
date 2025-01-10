<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{

    public function index()
    {
        try {
            $client = new Client([
                'base_uri' => 'http://127.0.0.1:8000/api/'
            ]);

            $response = $client->request('GET', 'event');
            $data = json_decode($response->getBody(), true);
            return view('dashboard', $data);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to fetch data: ' . $e->getMessage(),
            ], 500);
        }
    }
}
