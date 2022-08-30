<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#admin" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Admin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="admin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Add</a>
                                    
                                    <a class="nav-link" href="">List</a>
                                </nav>
                            </div>
                        
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#doctor" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Doctor
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="doctor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('doctor.create')}}">Add Doctor</a>
                                </nav>
                            </div> -->
 

                            <a class="nav-link" href="{{route('doctor.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Doctor
                            </a>

                            <a class="nav-link" href="{{route('patient.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Patient
                            </a>

                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#patient" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Patient
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="patient" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('patient.create')}}">Add Patient</a>
                                </nav>
                            </div> -->
                             
                            
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#schedule" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Schedule
                                
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="schedule" aria-labelledby="heading" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('schedule.create')}}">Add Schedule</a>
                                </nav>
                            </div> -->


                            <a class="nav-link" href="{{route('schedule.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Schedule
                            </a>


                            <a class="nav-link" href="{{route('appointment.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Appointment
                            </a>

<!-- 
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#appointment" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Appointment
                                
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="appointment" aria-labelledby="heading" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('appointment.create')}}">Add Appointment</a>
                                </nav>
                            </div> -->

                            <!-- Question Start -->
                            <a class="nav-link" href="{{route('question.disorder.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Question
                            </a>
                            <!-- Question End -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#screening" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Screening
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="screening" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                               
                                    <a class="nav-link" href="{{route('screening.create')}}">Add Screening</a>
                                    <a class="nav-link" href="{{route('doctor.create')}}">Screening Category</a>
                                    <a class="nav-link" href="{{route('doctor.create')}}">Patient Screening</a>
                                    <a class="nav-link" href="{{route('doctor.create')}}">Screening Result</a>
                                    <a class="nav-link" href="{{route('doctor.list')}}">Screening Report</a>
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#disorder" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Disorder
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="disorder" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('disorder.create')}}">Add Disorder</a>
                                    <a class="nav-link" href="{{route('doctor.list')}}">Disorder-Symptom</a>
                                    <a class="nav-link" href="{{route('doctor.create')}}">Disorder-Instruction</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="{{route('symptom.create')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Symptom
                            </a>

                            <!-- <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#symptom" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Symptom
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> -->
                            
                           

                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                       Admin
                    </div>
                </nav>
            </div>