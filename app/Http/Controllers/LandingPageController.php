<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class LandingPageController extends Controller
{

    public function index()
    {
        $landing_page = Home::find(1);
        return view('landingpage.index',compact('landing_page'));
    }
    public function update(Request $request, $id)
    {
        $landing_page = Home::find(1);
        if($request->file('hero')){
            $file = $request->file('hero');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'gambar';
            $file->move($tujuan_upload,$nama_file);

        $landing_page->update([
            'hero' => $nama_file,
            'title' => $request->title,
        ]);
        }else{
        $landing_page->update([
                'title' => $request->title,
            ]);
        }
            
        $landing_page->update();
        return redirect('/landingpage');
    }
}