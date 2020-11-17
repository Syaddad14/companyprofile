<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::orderBy('created_at','DESC')->get();
        return view('service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
            'image_services' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'title_services' => 'required',
            'desc_services' => 'required',
        ]);
        if($request->file('image_services')){
            $file = $request->file('image_services');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'gambar';
            $file->move($tujuan_upload,$nama_file);

            $services = Services::create([
                'image_services' => $nama_file,
                'title_services' => $request->title_services,
                'desc_services' => $request->desc_services,
               
            ]);
        }else{
            $services = Services::create([
                'title_services' => $request->title_services,
                'desc_services' => $request->desc_services,
            ]);
        }
        
        $services->save();
        return redirect('service')->with(['success'=> 'Data Berhasil Ditambah']);
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
        $services = Services::findOrFail($id);
        return view('service.edit',compact('services'));
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
        $services = Services::findOrFail($id);
        // $this->validate($request,[
        //     'image_services' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        //     'title_services' => 'required',
        //     'desc_services' => 'required',
        // ]);
        if($request->file('image_services')){
            $file = $request->file('image_services');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'gambar';
            $file->move($tujuan_upload,$nama_file);

            $services->update([
                'image_services' => $nama_file,
                'title_services' => $request->title_services,
                'desc_services' => $request->desc_services,
               
            ]);
        }else{
            $services->update([
                'title_services' => $request->title_services,
                'desc_services' => $request->desc_services,
            ]);
        }
        
        $services->update();
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::findOrFail($id);
        $services->delete();
        return redirect('service');
    }
}
