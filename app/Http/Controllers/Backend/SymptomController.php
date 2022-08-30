<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Disorder;
use Illuminate\Http\Request;
use App\Models\Symptom;

class SymptomController extends Controller
{
    public function list()
    {
        $symptoms = Symptom::paginate(5);
        // dd($symptoms);
        return view('backend.symptom.index', compact('symptoms'));
    }

    public function create()
    {
        $disorder = Disorder::all();
        return view('backend.symptom.create', compact('disorder'));
    }

    public function store(Request $request)
    {

        Symptom::create([

            //migration table(coloumn name) => input field name

            'symptom_name' => $request->symptom_n,

        ]);

        return redirect()->route('disorder.list');
    }


    public function delete($id)
    {
         //variable name = model name::to find something we use find method
 
         $symptoms = Symptom::find($id)->delete();
         return redirect()->back();
 
         //
 
    }
    

    public function view($id)

    {

        $symptoms = Symptom::find($id);

        return view('backend.symptom.view', compact('symptom'));
    }
}
