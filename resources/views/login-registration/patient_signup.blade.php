<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MHMS || Patient Registration</title>
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
                        <h2 class="mb-3"><b>Create Account</b></h2>

                        <form action="{{route('signup.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="firstname" class="custom-controll-label"><b>First Name:</b> </label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name"
                                    name="firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="custom-controll-label"><b>Last Name :</b> </label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name"
                                    name="lastname">
                            </div>
                            <div class="form-group">
                                <label for="mobileno" class="custom-controll-label"><b>Mobile No:</b> </label>
                                <input type="number" class="form-control" id="mobileno" placeholder="+8801...."
                                    name="mobileno">
                            </div>
                            <div class="form-group">
                                <label for="email" class="custom-controll-label"><b>Email Address :</b> </label>
                                <input type="email" class="form-control" id="email" placeholder="abc@example.com"
                                    name="email">
                            </div>
                            <div class="form-group">
                                <label for="dob" class="custom-controll-label"><b>Date of Birth: </b></label>
                                <input type="date" class="form-control" id="dob" placeholder="Email" name="dob">
                            </div>

                            <div class="form-group">
                                <label for="inputgender"><b>Gender</b></label>
                            </div>

                            <div name="status" class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="gender" id="gender1" value="Male">Male
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="gender" id="gedner2" value="Female">Female
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="inputmaritalstatus"><b>Marital Status</b></label>
                            </div>

                            <div name="status" class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="status" id="status1" value="Single"> Single
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="status" id="status2" value="Married"> Married
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="status" id="status3" value="Other">Other
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="password" class="custom-controll-label"><b>Create Account Password :</b>
                                </label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password">
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
