<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image_testi' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if($request->file('image_testi')){
            $file = $request->file('image_testi');
            $nama_file = time().'.'.$file->getClientOriginalName();
            $wadah = 'gambar';
            $file->move($wadah,$nama_file);

            Testimoni::create([
                'image_testi' => $nama_file,
            ]);
        }
        return redirect('/testimoni');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('testimoni.edit',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        if($request->file('image_testi')){
            $file = $request->file('image_testi');
            $nama_file = time().'.'.$file->getClientOriginalName();
            $wadah = 'gambar';
            $file->move($wadah,$nama_file);

            $testimoni->update([
                'image_testi' => $nama_file,
            ]);
        }
        $testimoni->update();
        return redirect('/testimoni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        return redirect('/testimoni');
    }
}
