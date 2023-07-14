<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>

            <li class="{{ Request::is('admin/page/heading') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_heading') }}"><i class="fas fa-angle-right"></i>
                    Heading Page</a></li>

            <li
                class="nav-item dropdown {{ Request::is('admin/page/doctor/signup') ||
                Request::is('admin/page/doctor/signin') ||
                Request::is('admin/page/patient/signup') ||
                Request::is('admin/page/patient/signin')
                    ? 'active'
                    : '' }} ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span> Pages
                    </span></a>
                <ul class="dropdown-menu">



                    <li class="{{ Request::is('admin/page/doctor/signup') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_doctor_signup') }}"><i class="fas fa-angle-right"></i>
                            Doctor signup</a></li>

                    <li class="{{ Request::is('admin/page/doctor/signin') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_doctor_signin') }}"><i class="fas fa-angle-right"></i>
                            Doctor signin</a></li>

                    <li class="{{ Request::is('admin/page/patient/signup') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_patient_signup') }}"><i class="fas fa-angle-right"></i>
                            Patient signup</a></li>

                    <li class="{{ Request::is('admin/page/patient/signin') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_patient_signin') }}"><i class="fas fa-angle-right"></i>
                            Patient signin</a></li>




                </ul>
            </li>

            <li class="{{ Request::is('admin/page/doctor/forget-password') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_doctor_forget_password') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Dr. Forget page Heading</span></a></li>

            <li class="{{ Request::is('admin/page/doctor/reset-password') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_doctor_reset_password') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Dr. Reset page Heading</span></a></li>

            <li class="{{ Request::is('admin/page/patient/forget-password') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_patient_forget_password') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Pnt. Forget page Heading</span></a></li>

            <li class="{{ Request::is('admin/page/patient/reset-password') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_patient_reset_password') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Pnt. Reset page Heading</span></a></li>

            {{-- <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
                    <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
                    <span>Table</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li> --}}

        </ul>
    </aside>
</div>
