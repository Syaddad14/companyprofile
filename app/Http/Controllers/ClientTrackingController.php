<?php

namespace App\Http\Controllers;

use App\Models\ClientComplaint;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Client; // Assuming you have a Client model
use App\Models\Complaint;

class ClientTrackingController extends Controller
{
    public function show($client)
    {
        $clientComplaints = ClientComplaint::where('name_clients', $client)->get();

        return view('tracking', compact('clientComplaints'));
    }

// Method untuk menampilkan form pelacakan
public function showForm()
{
    return view('client_tracking_form');
}

public function showOrder(Request $request)
{
    $name_clients = $request->input('name_clients');
    $order = Order::where('name_clients', $name_clients)->first();
        if ($order) {
            return view('tracking', ['order' => $order]);
        } else {
            return redirect()->back()->with('error', 'Order not found');
        }
    }

    public function trackComplaints($client)
    {
        // Fetch client data based on $client
        $clientData = Client::find($client);

        if (!$clientData) {
            abort(404, 'Client not found');
        }

        // Fetch complaints related to the client
        $complaints = $clientData->complaints; // Assuming you have a relationship defined

        // Return the view with client and complaints data
        return view('track-complaints', ['client' => $clientData, 'complaints' => $complaints]);
    }

    public function respondComplaint($client, $complaint)
    {
        // Fetch client and complaint data
        $clientData = Client::find($client);
        $complaintData = Complaint::find($complaint);

        if (!$clientData || !$complaintData) {
            abort(404, 'Client or Complaint not found');
        }

        // Return the view with client and complaint data
        return view('respond-complaint', ['client' => $clientData, 'complaint' => $complaintData]);
    }

    public function submitResponse(Request $request, $client, $complaint)
    {
        // Validate the request
        $request->validate([
            'response' => 'required|string|max:255',
        ]);

        // Fetch the complaint and update it with the response
        $complaintData = Complaint::find($complaint);
        $complaintData->response = $request->input('response');
        $complaintData->status = 'Responded'; // Update status if needed
        $complaintData->save();

        // Redirect back to the complaints tracking page
        return redirect()->route('client.track.complaints', ['client' => $client])->with('success', 'Response submitted successfully');
    }
}