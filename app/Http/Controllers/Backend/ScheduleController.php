<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function create()
    {
      return view('backend.schedule.create');  
    }

    public function list()
    {

        $schedules = Schedule::paginate(5);
        return view(('backend.schedule.index'),compact('schedules'));
    }

    public function store (Request $request)
    {


      // $request->validate([

      //   'doctor_name'=>'required',
      //   'available_days'=>'required',
      // ]);

        Schedule::create([

           // migration table(coloumn)name=>$request->input field name

           'doctor_name' => $request->name,
           'doctor_specialist' => $request->specialist,
           'available_days' => $request->available_d,
           'start_time' => $request->start_t,
           'end_time' => $request->end_t,
           'per_patient_time' => $request->per_patient_t,
           'serial_visibility' => $request->serial_v,
           'status' => $request->status,
           
        ]);
           return redirect()->route('schedule.list');

        }


        public function delete($id)
        {

          $schedules = Schedule::find($id)->delete();
          return redirect()->back();

        }


           public function view($id)
           {

            $schedules = Schedule::find($id);
            return view ('backend.schedule.view',compact('schedules')); 
           }
}
