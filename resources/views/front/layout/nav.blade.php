<div class="nav_home">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            {{-- @if (Auth::guard('patient')->user()->status == 1) --}}
            <img src="{{ asset('uploads/breathing.png') }}" alt="Bootstrap" class="icon_app">
            <a class="navbar-brand" href="{{ route('home') }}">LUNG CANCER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            {{-- @endif --}}





            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    @if (Auth::guard('patient')->check() && Auth::guard('patient')->user()->status == 1)

                        <nav>
                            <ul class="nav-afterloginpatient">
                                <li><a href="{{ route('diagnosis') }}" class="navlink-after ">Diagnosis</a></li>
                                <li><a href="{{ route('patient_medical') }}" class="navlink-after ">Medication</a></li>
                                <li><a href="{{ route('patient_support') }}" class="navlink-after ">Support</a></li>

                                @if (Auth::guard('patient')->check())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('patient_home') }}">Dashboard</a>
                                    </li>
                                @endif


                            </ul>
                        </nav>
                    @elseif (Auth::guard('doctor')->check() && Auth::guard('doctor')->user()->status == 1)
                        <nav>
                            <ul class="nav-afterlogindoctor">
                                <li class="nav-link">
                                    <a href="{{ route('doctor_application') }}" target="_blank"
                                        class="btn btn-warning">Application Doctor</a>
                                </li>
                                <li><a href="{{ route('doctor_resource') }}" class="navlink-after "
                                        onclick="toggleDiv('cardscontainer')">Resources</a></li>
                                <li><a href="E:\test\cancer patient data sets.xlsx" class="navlink-after "
                                        id="open-xlsx">Data</a></li>

                                @if (Auth::guard('doctor')->check())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('doctor_home') }}">Dashboard</a>
                                    </li>
                                @endif

                            </ul>
                        </nav>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('health') }}">Health</a>
                        </li>

                        @if (!Auth::guard('patient')->check())
                            {{-- @if ($global_page_data->signup_doctor_status == 1)
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('doctor_signup') }}">SignUp AS Dr</a>
                            </li>
                        @endif --}}

                            {{-- @if ($global_page_data->signin_doctor_status == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('doctor_login') }}">LogIn As Dr</a>
                            </li>
                        @endif --}}

                            @if ($global_page_data->signup_patient_status == 1)
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('patient_signup') }}">SignUp As Pnt</a>
                                </li>
                            @endif

                            @if ($global_page_data->signin_patient_status == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('patient_login') }}">LogIn As Pnt</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('patient_home') }}">Dashboard</a>
                            </li>
                        @endif

                        @if (!Auth::guard('doctor')->check())
                            @if ($global_page_data->signup_doctor_status == 1)
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('doctor_signup') }}">SignUp AS Dr</a>
                                </li>
                            @endif

                            @if ($global_page_data->signin_doctor_status == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor_login') }}">LogIn As Dr</a>
                                </li>
                            @endif

                            {{-- @if ($global_page_data->signup_patient_status == 1)
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('patient_signup') }}">SignUp As Pnt</a>
                        </li>
                    @endif --}}

                            {{-- @if ($global_page_data->signin_patient_status == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('patient_login') }}">LogIn As Pnt</a>
                        </li>
                    @endif --}}
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('doctor_home') }}">Dashboard</a>
                            </li>
                        @endif

                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
