<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //

    public function loginstore(Request $request)
    {
        // $user=User::where('role','=','doctor')->where('email',$request->email)->first();

        // if($user){

            Auth::attempt([

                'email'=>$request->email,
                'password'=>$request->password,
            ]);

            // return redirect()->route('home');
        // }
        // else{

            return redirect()->route('home');
        // }

        
        
        // Auth::attempt([
        //     'email'=>$request->email,
        //     'password'=>$request->password,
        // ]);

        //     return redirect()->route('home');

    }

    public function loginform()
    {
        // dd('iiii');
        return view('login-registration.login');
    }

    public function signup()
    {

        return view('login-registration.patient_signup');
    }

    public function signupStore(Request $request)
    {
        // dd('iiii');
        // dd($request->all());
        User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'mobileno' => $request->mobileno,
            'email' => $request->email,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'marital_status' => $request->status,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('frontend.login');
    }

    public function logout()
    {
         Auth::logout();
        return redirect()->route('home');
    }

    public function docSignUp()
    {
        // dd('hiii');
        return view('login-registration.doctor_signup');
    }

    public function docSignUpStore(Request $request)
    {
        // dd($request->picture);

        $filerename=NULL;
        if($request->hasFile('picture'))
        {
            // dd($request->picture);
            $file = $request->file('picture');
            $filerename = "doctor_".rand(0,1000000).date('Ymdhis').".".$file->getClientOriginalExtension();
            $file->storeAs('doctor',$filerename);
        }
        // dd($filerename);
       User::create([
          
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password'=>bcrypt($request->password),
            'picture'=>$filerename,
            'license'=>$request->license,
            'specialist'=>$request->specialist,
            'designation'=>$request->designation,
            'experience'=>$request->experience,
            'academic_record'=>$request->records,
            'attachfile'=>$request->recordsfile,
            'mobileno'=>$request->mobileno,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'role'=>$request->role,
            
        ]);
        // dd($registration);

        return redirect()->route('frontend.login');
    }

}
