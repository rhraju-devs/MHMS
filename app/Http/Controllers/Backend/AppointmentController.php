<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    public function create()
    {
        $doctors = Doctor::all();
        return view('backend.appointment.create', compact('doctors'));
    }
    
    public function list()

    {
        $appointments = Appointment::with('patient')->paginate(5);
        return view('backend.appointment.index',compact('appointments') );
    }

    public function store(Request $request)
    {
    //   dd($request->all());
        Appointment::create([

            //migration table(coloumn name) => input field name
            // 'picture'=>$request->doctor_picture,
            // 'appointment_id'=>$request->id,
            'patient_first_name'=>$request->first_name,
            'patient_last_name'=>$request->last_name,
            'patient_id'=>$request->id,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'appointment_date'=>$request->date,
            'time'=>$request->time,
            'doctor_name'=>$request->doctorName,
            'problem_details'=>$request->details,
            // 'status'=>$request->status,
        ]);

        return redirect()->route('home');
    }

    public function booking()
    {
// dd('abc');
        return view('frontend.layouts.appointment.appointment_book');
    }
}
