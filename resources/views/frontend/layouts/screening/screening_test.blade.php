@extends('frontend.master')

@section('frontend_content')

<!-- <div class="row">
<div class="col-md-3"> </div>
<div class="col-md-6">
<h1>Screening Test</h1>
</div>
<div class="col-md-3"></div>
</div> -->


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 my-5">
            <div class="login_form mb-50 my-5">
                <h2 class="mb-3"><b>Screening Test</b></h2>


                <form action="{{route('frontend.screening.store')}}" method="POST">
                    @csrf


                    <input class="" type="text" name="id" id=" " value="{{auth()->user()->id}}" hidden/>


                    @foreach($newQuestion as $key=>$question)
                    <div class="form-group my-2">
                        <label for="{{$question->id}}" class="custom-controll-label">{{$key+1}}. {{$question->question}} </label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="question[{{$question->id}}]" id="{{$question->id}}" value="1" />
                            <label class="form-check-label" for="{{$question->id}}">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="question[{{$question->id}}]" id="{{$question->id}}" value="0" />
                            <label class="form-check-label" for="{{$question->id}}">No</label>
                        </div>
                    </div>

                    @endforeach






                    <!-- <div class="form-group my-2">
                        <label for="" name="gender" class="custom-controll-label">2. What is your gender
                            identity?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" />
                            <label class="form-check-label" for="male">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" />
                            <label class="form-check-label" for="female">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" />
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div> --> 

                    <!-- 
                <div class="form-group my-2">
                    <label for="status" name="status" class="custom-controll-label">2. What is your
                        partnership status?</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status1"
                            value="option1" />
                        <label class="form-check-label" for="status1">Single</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status2"
                            value="option2" />
                        <label class="form-check-label" for="status2">Divorced</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status3"
                            value="option3" />
                        <label class="form-check-label" for="status3">Married</label>
                    </div>
                </div> -->


                    <!-- <div class="form-group my-2">
                        <label for="" name="low" class="custom-controll-label">3. Have you
                            feeling low in energy every time?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="low" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="low" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>


                    <div class="form-group my-2">
                        <label for="" name="appetite" class="custom-controll-label">4. Have you had poor
                            appetite?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="appetite" id="yes" value="yes" />
                            <label class="form-check-label" for="appetite1">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="appetite" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>

                    </div>


                    <div class="form-group my-2">
                        <label for="" name="asleep" class="custom-controll-label">5. Have you had difficulty falling
                            asleep?
                        </label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="asleep" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="asleep" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>


                    <div class="form-group my-2">
                        <label for="" name="decision" class="custom-controll-label">6.
                            Have you had difficulty in concentrating or making decision?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="decision" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="decision" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>



                    <div class="form-group my-2">
                        <label for="" name="interest" class="custom-controll-label">6.
                            Have you been feeling no interest in things?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="interest" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="interest" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>



                    <div class="form-group my-2">
                        <label for="" name="night" class="custom-controll-label">9. Do you have trouble in
                            sleeping?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="night" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="night" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>



                    <div class="form-group my-2">
                        <label for="" name="rested" class="custom-controll-label">10. Do you wake up feeling
                            well-rested?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rested" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rested" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>



                    <div class="form-group my-2">
                        <label for="" name="distractable" class="custom-controll-label">12. Are you
                            distractable?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="distractable" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="distractable" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>



                    <div class="form-group my-2">
                        <label for="" name="family" class="custom-controll-label">12. Do you feel content with your
                            relationships and family?</label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="family" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="family" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>



                    <div class="form-group my-2">
                        <label for="" name="tough" class="custom-controll-label">12.Are you going through a tough
                            emotional
                            siuation?</label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tough" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tough" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>


                    <div class="form-group my-2">
                        <label for="" name="health" class="custom-controll-label">11. Have you had any problems with
                            your
                            work or daily life due to your phyical health?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="health" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="health" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div>

                    <div class="form-group my-2">
                        <label for="" name="health" class="custom-controll-label">11. Have you ever been diagnosed with
                            a
                            mental disorder before?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="diagnosed" id="yes" value="yes" />
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="diagnosed" id="no" value="no" />
                            <label class="form-check-label" for="no">No</label>
                        </div>
                    </div> -->

                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
    </div>

    @endsection
