<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('patient_home') }}">patient Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('patient_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('patient/home') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('patient_home') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>

            <li
                class="nav-item dropdown active ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span> Pages
                    </span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('patient/page/heading') ? 'active' : '' }}"><a class="nav-link"
                            href=""><i class="fas fa-angle-right"></i>
                            Patient Page</a></li>





                </ul>
            </li>

            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i>
                    <span>Setting</span></a></li> 

            {{-- <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
                    <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
                    <span>Table</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li>  --}}

        </ul>
    </aside>
</div>
