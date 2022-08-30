<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;

class PatientController extends Controller
{
    public function list()
    {
        
        $patients = User::where('role','patient')->paginate(5);
        // dd($patients);
        return view('backend.patient.index', compact('patients'));
    }

    public function create()
    {
        return view('backend.patient.create');
    }

    public function store(Request $request)
    {

        User::create([

            //migration table(coloumn name) => input field name

            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'mobile_no' => $request->mobileno,
            'email' => $request->email,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'marital_status' => $request->maritalstatus,
            'password' => $request->password,

        ]);

        return redirect()->route('patient.list');
    }

    public function delete($id)
    {
        $patient = User::find($id)->delete();
        return redirect()->back();
    }
}
