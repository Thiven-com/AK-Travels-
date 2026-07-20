<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Show the form
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.service.all', compact('services')); // Change to your Blade file
    }

    // Save the form data
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
           
            'dob' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'travel_date' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        Service::create([
            'full_name' => $request->full_name,
            
            'dob' => $request->dob,
            'age' => $request->age,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'email' => $request->email,
            'travel_date' => $request->travel_date,
            'message' => $request->message,
        ]);

        return redirect()->route('services')
            ->with('success', 'Form submitted successfully!');
    }



    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
}