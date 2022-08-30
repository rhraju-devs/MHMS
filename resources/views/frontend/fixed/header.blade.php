


<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand mx-auto d-lg-none" href="index-2.html">
            Medic Care
            <strong class="d-block">Health Specialist</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#hero">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="#timeline">Timeline</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#reviews">Testimonials</a>
                </li> -->
                <li class="nav-item">
                    <a class="navbar-brand d-lg-block" href="{{route('home')}}">
                        MHMS
                        <strong class="d-block">Health Specialist</strong>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('appointment.booking')}}">Appointment</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

                @auth()

                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.screening.list')}}">Screening</a>
                </li>
@endauth

                <li class="nav-item">
                    <a class="nav-link" href="{{route('doctor.search')}}">Find a Doctor</a>
                </li>

                @guest()

                <li class="nav-item">
                    <a href="{{route('frontend.login')}}" class="nav-link">Login</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('signup')}}" class="nav-link">Patient/Sign Up</a>

                </li>

                <li class="nav-item">
                    <a href="{{route('doctor.signup')}}" class="nav-link">Doctor/Sign Up</a>
                </li>
                @endguest

                @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}"><i class="icofont-user"></i> Logout | {{auth()->user()->first_name}} {{auth()->user()->last_name}} </a>
                </li>
                @endauth


            </ul>
        </div>
    </div>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->

</nav>




