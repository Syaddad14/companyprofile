<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Complain;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('created_at','DESC')->get();
        return view('client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
            'image_clients' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'name_clients' => 'required',
            'desc_clients' => 'required',
        ]);
        if($request->file('image_clients')){
            $file = $request->file('image_clients');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'gambar';
            $file->move($tujuan_upload,$nama_file);

            $clients = Client::create([
                'image_clients' => $nama_file,
                'name_clients' => $request->name_clients,
                'desc_clients' => $request->desc_clients,
               
            ]);
        }else{
            $clients = Client::create([
                'name_clients' => $request->name_clients,
                'desc_clients' => $request->desc_clients,
            ]);
        }
        
        $clients->save();
        return redirect('client')->with(['success'=> 'Data Berhasil Ditambah']);
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
        $client = Client::findOrFail($id);
        return view('client.edit',compact('client'));
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
        $clients = Client::findOrFail($id);
        // $this->validate($request,[
        //     'image_clients' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        //     'name_clients' => 'required',
        //     'desc_clients' => 'required',
        // ]);
        if($request->file('image_clients')){
            $file = $request->file('image_clients');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'gambar';
            $file->move($tujuan_upload,$nama_file);

            $clients->update([
                'image_clients' => $nama_file,
                'name_clients' => $request->name_clients,
                'desc_clients' => $request->desc_clients,
               
            ]);
        }else{
            $clients->update([
                'name_clients' => $request->name_clients,
                'desc_clients' => $request->desc_clients,
            ]);
        }
        
        $clients->update();
        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = Client::findOrFail($id);
        $clients->delete();
        return redirect('client');
    }

    public function tracking($id)
    {
        $client = Client::findOrFail($id);
        return view('client.tracking', compact('client'));
    }

    public function storeComplain(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Complain::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('client.complain.form')->with('success', 'Complaint submitted successfully.');
    }

    public function showComplainForm()
    {
        $complaints = Complain::all();
        return view('client.complain', compact('complaints'));
    }
}
