<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disorder;
use App\Models\Symptom;

class DisorderController extends Controller
{
    public function list()
    {
        $disorders = Disorder::paginate(5);
        // dd($disorders);
        return view('backend.disorder.index', compact('disorders'));
    }

    public function create()
    {
        return view('backend.disorder.create');
    }

    public function store(Request $request)
    {

        Disorder::create([

            //migration table(coloumn name) => input field name

            'disorder_name' => $request->name,
            'disorder_status' => $request->status,
            'disorder_details' => $request->details,

        ]);

        return redirect()->route('disorder.list');
    }

    public function delete($id)
    {
        $disorders = Disorder::find($id)->delete();
        return redirect()->back();
    }

    public function symptom($id)
    {
        $disorder = Disorder::find($id)->get();
        return view('backend.symptom.create', compact('disorder'));
    }

    public function storeSymptom(Request $request, $id)
    {
        $disorder = Disorder::find($id);
        $disorder->update([
            //Migration column name => input field name
            'symptom_name' => $request->symptom_n,
        ]);

        return redirect()->route('disorder.list');
    }

    public function symptomCreate($id){

        $disorder = Disorder::find($id);
        $symptoms = Symptom::all();
        return view('backend.disorder.addSymptom', compact('disorder', 'symptoms'));
    }
    
}
