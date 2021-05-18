<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function index(User $user)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('localhost/mj-exam/public/api/beverages');
        $response = $request->getBody();
        $beverages = collect(json_decode($response, true));

        $request = $client->get("localhost/mj-exam/public/api/user/{$user->id}/consumed");
        $response = $request->getBody();
        $consumedBeverages = collect(json_decode($response, true));

        return view('cafe', ['user' => $user, 'beverages' => $beverages, 'consumedBeverages' => $consumedBeverages]);
    }
}
