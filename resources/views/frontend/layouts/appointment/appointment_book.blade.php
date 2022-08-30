<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Book Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>



    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 my-5">
                    <div class="login_form mb-50 my-5">
                        <h2 class="mb-3"><b>Make an Appointment</b></h2>

                        <form action="{{route('appointment.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="first_name" class="custom-controll-label">First Name : </label>
                                <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name"
                                    value="{{auth()->user()->first_name}}" readonly>
                                    
                                <input type="text" class="form-control" id="" name="id" value="{{auth()->user()->id}}"
                                    hidden>
                            </div>

                            <div class="form-group">
                                <label for="last_name" class="custom-controll-label">Last Name : </label>
                                <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name"
                                    value="{{auth()->user()->last_name}}" readonly>

                            <div class="form-group">
                                <label for="email" class="custom-controll-label">Email : </label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                    value="{{auth()->user()->email}}" readonly>
                            </div>


                            <div class="form-group">
                                <label for="phone" class="custom-controll-label">Phone No :</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone No" name="phone">
                            </div>


                            <div class="form-group">
                                <label for="date" class="custom-controll-label">Date </label>
                                <input type="date" class="form-control" id="date" placeholder="select " name="date">
                            </div>


                            <div class="form-group">
                                <label for="time" class="custom-controll-label">Time</label>
                                <input type="time" class="form-control" id="time" placeholder="select " name="time">
                            </div>


                            <div class="form-group">
                                <label for="doctorName" class="custom-controll-label">Doctor Name</label>
                                <input type="text" class="form-control" id="doctorName" placeholder="Enter Doctor Name "
                                    name="doctorName">
                            </div>


                            <div class="form-group">
                                <label for="details" class="custom-controll-label">Problem Details:</label>
                                <textarea class="form-control" id="details" placeholder=" " name="details"></textarea>
                            </div>
                            <!-- 
                            <div class="form-group">
                             <input type="text"  name="name" class="form-control" value='doctor' hidden>
                            </div> -->

                            <button type="submit" class="btn btn-primary btn-sm my-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
