<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Disorder;
use App\Models\QuestionDisorder;
use Illuminate\Http\Request;
use App\Models\ScreeningTest;
use App\Models\ScreeningQuestion;
use App\Models\ScreeningTestDetails;
use Illuminate\Support\Carbon;
use App\Models\User;

class ScreeningTestController extends Controller
{
    public function category()
    {
      return view('frontend.layouts.screening.screening_test');  
    }


    public function test()
    {
      // dd();
      $newQuestion = ScreeningQuestion::all();
      return view('frontend.layouts.screening.screening_test',compact('newQuestion'));

    }

    public function screeningStore(Request $request)
    {

        $newQuestion = ScreeningTest::create([
          'user_id' => $request->id,
          'date' => date('Y-m-d'),
      ]);


      if($request->question){
          foreach($request->question as $key=>$question){
              ScreeningTestDetails::create([
                  'screening_test_id' => $newQuestion->id,
                  'screening_question_id' => $key,
                  'answer' =>$question, 
              ]);
          }
      }

     
      


      return redirect()->route('home');

    }


     public function result($id)
    {
       // dd();
        $answers=ScreeningTestDetails::where('screening_test_id', $id)
                ->where('answer',1)->get()->pluck('screening_question_id')->toArray();

           

                $disorderIds=QuestionDisorder::whereIn('question_id',$answers)->get()->pluck('disorder_id')->toArray();

                $array=array_count_values($disorderIds);

                arsort($array);
                $finalDisorder=array_slice(array_keys($array),0,1);


                $result=Disorder::find($finalDisorder[0]);
      $doctors = User::where('role','doctor')->get();
    
      return view('frontend.layouts.screening.screening_result',compact('doctors', 'result'));

     }

     public function list()
     {

        $screenings = ScreeningTest::paginate(5);
        
        return view('frontend.layouts.screening.screening_index', compact('screenings'));
    
     }
}
