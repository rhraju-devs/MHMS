<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Disorder;
use App\Models\QuestionDisorder;
use App\Models\ScreeningQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ScreeningQuestionController extends Controller
{
    public function list()
    {
        $newQuestion = ScreeningQuestion::all();
        return view('backend.question-disorder.index', compact('newQuestion'));
    }

    public function create()
    {
        $disorders = Disorder::all();
        return view('backend.question.create', compact('disorders'));
    }

    public function store(Request $request)
    {
        
        $newQuestion = ScreeningQuestion::create([
            'question' => $request->question,
            'status' => $request->status,
        ]);


        if($request->disorder){
            foreach($request->disorder as $disorder){
                QuestionDisorder::create([
                    'question_id' => $newQuestion->id,
                    'disorder_id' => $disorder, 
                    'status' => $request->status,
                ]);
            }
        }


        return redirect()->route('question.disorder.list');
    }


    // public function delete($id)
    // {
        
    //      $newQuestion = QuestionDisorder::find($id)->delete();
    //      return redirect()->back();

 
    // } 
 
    // public function edit($id)
    // {
    //         $newQuestion = QuestionDisorder::find($id);
    //         return view ('backend.question-disorder.edit',compact('newQuestion'));
    // }

    // public function update(Request $request,$id)
    // {
    //     // dd($request);
    //    $doctor=User::find($id);
    //    $doctor->update([
       
    //     'designation'=>$request->doctor_designation,
    //     'permission_status'=>$request->permission,
    //     'availability_status'=>$request->availability,

        
    //    ]);
       
    //    return redirect()->route('doctor.list');
    // }
}
