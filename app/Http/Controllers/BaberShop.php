<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Features;
use App\Models\Settings;
use App\Models\Home;
use App\Models\Testimoni;
class BaberShop extends Controller
{
    public function index()
    {
        $services = Services::get();
        $features = Features::get();
        $settings = Settings::get();
        $home = Home::get();
        $testi = Testimoni::get();
        return view('BaberShopL4.index',compact('services','features','settings','home','testi'));
    }
}
