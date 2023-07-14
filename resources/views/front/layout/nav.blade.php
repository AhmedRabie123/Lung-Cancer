<div class="nav_home">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{ asset('uploads/breathing.png') }}" alt="Bootstrap" class="icon_app">
            <a class="navbar-brand" href="#">LUNG CANCER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="health.html">Health</a>
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



                </ul>
            </div>
        </div>
    </nav>
</div>
