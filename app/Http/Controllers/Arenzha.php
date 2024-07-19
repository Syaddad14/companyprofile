<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sendMessage;
use App\Models\Services;
use App\Models\Client;
use App\Models\Features;
use App\Models\Settings;
use App\Models\Home;
use App\Models\Testimoni;
use App\Models\ProdukLayanan;

class Arenzha extends Controller
{
    public function index()
    {
        $send_message = sendMessage::all();
        $clients = Client::get();
        $services = Services::get();
        $features = Features::get();
        $settings = Settings::get();
        $home = Home::get();
        $testi = Testimoni::get();
        $produkLayanan = ProdukLayanan::get();
        return view('Arenzha.index',compact('services','features','settings','home','testi','send_message','clients', 'produkLayanan'));
    }
    public function store(Request $request)
    {
        $send_message = sendMessage::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'pesan' => $request->pesan,
        ]);
        $send_message->save();
        return redirect('/');
    }
}
