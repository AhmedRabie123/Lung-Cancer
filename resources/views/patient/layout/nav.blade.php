<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="nav-link">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-warning">Front End</a>
        </li>
        <li class="nav-link">
            <a href="{{ route('diagnosis') }}" target="_blank" class="btn btn-warning">Diagnosis</a>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                @if (Auth::guard('patient')->user()->photo == null)
                    <img alt="image" src="{{ asset('uploads/default.png') }}" class="rounded-circle mr-1">
                @else
                    <img alt="image" src="{{ asset('uploads/' . Auth::guard('patient')->user()->photo) }}"
                        class="rounded-circle mr-1">
                @endif


                <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('patient')->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('patient_profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Edit Profile
                </a>
                <a href="{{ route('patient_logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
