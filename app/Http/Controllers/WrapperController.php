<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use iluminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function banners(){
        $json = Http::get('https://fortnite-api.com/v1/banners')->json();
        return response()->json($json);
    }
    public function cosmetics()
    {
        $json = Http::get('https://fortnite-api.com/v2/cosmetics/br')->json();
        return response()->json($json);
    }
    public function map()
    {
        $json = Http::get('https://fortnite-api.com/v1/map')->json();
        return response()->json($json);
    }
    public function playlists()
    {
        $json = Http::get('https://fortnite-api.com/v1/playlists')->json();
        return response()->json($json);
    }
    public function shop()
    {
        $json = Http::get('https://fortnite-api.com/v2/shop/br')->json();
        return response()->json($json);
    }
}
