<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MHMS || Doctor Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>


    <!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 my-5">
                    <div class="login_form mb-50 my-5">
                        <h3 class="mb-3"><b>Doctor Signup</b></h3>

                        <form action="{{route('doctor.signup.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="picture" class="custom-controll-label"><b>Insert Picture: </b></label>
                                <input type="file" class="form-control" id="picture" placeholder="" name="picture">
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="custom-controll-label"><b>First Name :</b> </label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="custom-controll-label"><b>Last Name :</b> </label>
                                <input type="text" class="form-control" id="lsatname" placeholder="Last Name" name="lastname">
                            </div>
                            <div class="form-group">
                                <label for="license" class="custom-controll-label"><b>Doctor License No:</b> </label>
                                <input type="number" class="form-control" id="license" placeholder="" name="license">
                            </div>
                            <div class="form-group">
                                <label for="specialist" class="custom-controll-label"><b>Enter Specialist :</b> </label>
                                <input type="text" class="form-control" id="specialist" placeholder="Specialist"
                                    name="specialist">
                            </div>
                            <div class="form-group">
                                <label for="experience" class="custom-controll-label"><b>Experience :</b> </label>
                                <textarea class="form-control" id="experience" placeholder="Experience"
                                    name="experience"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="records" class="custom-controll-label"><b>Academic Records:</b> </label>
                                <textarea class="form-control" id="records" placeholder="" name="records"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="recordsfile" class="custom-controll-label">Attach files: </label>
                                <input type="file" class="form-control" id="reordsfile" placeholder=""
                                    name="reordsfile">
                            </div>
                            <div class="form-group">
                                <label for="email" class="custom-controll-label"><b>Enter Email Address: </b></label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="mobileno" class="custom-controll-label"><b>Mobile No:</b> </label>
                                <input type="number" class="form-control" id="mobileno" placeholder="+8801...."
                                    name="mobileno">
                            </div>
                            <div class="form-group">
                                <label for="address" class="custom-controll-label"><b>Present Address: </b></label>
                                <input type="text" class="form-control" id="address" placeholder="" name="address">
                            </div>
                            <div class="form-group">
                                <label for="inputgender"><b>Gender</b></label>
                            </div>

                            <div name="gender" class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="gender" id="gender1" value="male"> Male
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="gender" id="gender2" value="female"> Female
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="password" class="custom-controll-label"><b>Enter Password : </b></label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password">
                            </div> 

                            <div class="form-group">
                             <input type="text"  name="role" class="form-control" value='doctor' hidden>
                            </div>

                            <button type="reset" class="btn btn-primary btn-sm m-r-2 my-3">Reset</button>
                            <button type="submit" class="btn btn-primary btn-sm my-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area End -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
