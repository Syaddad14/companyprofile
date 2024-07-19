<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientComplaint;
use Illuminate\Support\Facades\Auth;

class ClientComplaintController extends Controller
{
    public function showForm()
    {
        return view('client_complaint_form');
    }

    public function showTracking($userId)
    {
        $clientComplaints = ClientComplaint::where('user_id', $userId)->get(['name_clients', 'complaint', 'created_at']);
        return view('tracking', ['clientComplaints' => $clientComplaints]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_clients' => 'required|string|max:255',
            'client_no' => 'required|string|max:15',
            'complaint' => 'required|string',
        ]);

        $complaint = new ClientComplaint();
        $complaint->user_id = Auth::id(); // Set the user_id to the currently authenticated user
        $complaint->name_clients = $request->input('name_clients');
        $complaint->client_no = $request->input('client_no');
        $complaint->complaint = $request->input('complaint');
        $complaint->save();

        return redirect()->back()->with('success', 'Complaint submitted successfully!');
    }

    public function destroy($id)
    {
        $complaint = ClientComplaint::findOrFail($id);
        $complaint->delete();

        return redirect()->back()->with('success', 'Complaint deleted successfully!');
    }
}