<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Screening;

class ScreeningController extends Controller
{
    public function create()
    {
      return view('backend.screening.create');  
    }

    public function list()
    {

        $screenings = Screening::paginate(5);
        return view(('backend.screening.index'),compact('screenings'));
    }

    public function store (Request $request)
    {


      // $request->validate([

      // ]);

        Screening::create([

           // migration table(coloumn)name=>$request->input field name

           'patient_id' => $request->pat_id,
           'doctor_id' => $request->doc_id,
           'screening_date' => $request->date,
           'screening_remark' => $request->remark,
           
        ]);
           return redirect()->route('screening.list');

        }


        public function delete($id)
        {

          $screenings = Screening::find($id)->delete();
          return redirect()->back();

        }


        //    public function view($id)
        //    {

        //     $screenings = Screening::find($id);
        //     return view ('backend.screening.view',compact('screenings')); 
        //    }
}
