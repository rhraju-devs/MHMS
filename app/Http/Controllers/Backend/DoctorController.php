<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;

class DoctorController extends Controller
{
    public function list()
    {
        $doctors = User::where('role','doctor')->OrderBy('id','desc')->paginate(5);
        // dd($doctors);
        return view('backend.doctor.index', compact('doctors'));
    }

    public function create()
    {
        return view ('backend.doctor.create');
    }

    public function store(Request $request)
    {
      dd($request);
        // $request->validate([

        //     'doctor_name'=>'required',
        //     'doctor_specialist'=>'required',
        //     'doctor_mobileno'=>'required|string|digits:11',

        // ]);



        User::create([

            //migration table(coloumn name) => input field name

            'picture'=>$filerename,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'license'=>$request->license,
            'specialist'=>$request->specialist,
            'designation'=>$request->designation,
            'experience'=>$request->experience,
            'academic_record'=>$request->records,
            'attachfile'=>$request->recordsfile,
            'email'=>$request->email,
            'mobileno'=>$request->mobileno,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'password'=>$request->password,
        ]);

        return redirect()->route('doctor.list');
    }


   public function delete($id)
   {
        //variable name = model name::to find something we use find method
        // $doctor = Doctor::find($id);
        // $doctor ->delete();
        // return redirect()->back();

        $doctors = User::find($id)->delete();
        return redirect()->back();

        //

   } 

     public function view($id)
    {
            $doctor = User::find($id);
            return view ('backend.layouts.doctor_view',compact('doctor'));
    }

    public function edit($id)
    {
            $doctor = User::find($id);
            return view ('backend.doctor.edit',compact('doctor'));
    }

    public function update(Request $request,$id)
    {
        // dd($request);
       $doctor=User::find($id);
       $doctor->update([
       
        'designation'=>$request->doctor_designation,
        'role'=>$request->role,
        'availability_status'=>$request->availability,

        
       ]);
       
       return redirect()->route('doctor.list');
    }

    public function search()
    {
        
        $doctors = User::where('role','doctor')->get();
    
        return view('frontend.layouts.doctor.doctor_search',compact('doctors'));
    }
}
