<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Service;
use App\Models\ServiceEnquiry;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class PageControllers extends Controller
{
    //
    public function home()
    {
        return view('website.home');
    }
    public function services()
    {
        return view('website.services');
    }
    public function places()
    {
        return view('website.places');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }

    public function submitServiceEnquiry(Request $request)
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

        ServiceEnquiry::create([
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




    public function submitContactEnquiry(Request $request)
    {
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('contact')
            ->with('success', 'Form submitted successfully!');
    }
}