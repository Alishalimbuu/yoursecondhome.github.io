<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Admin</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Hostel Management</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Hostel</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('bed.index') }}">Add Bed</a></li>
                    <li><a class="nav-link" href="{{ route('room.index') }}">Add Room</a></li>
                    <li><a class="nav-link" href="{{ route('student.index') }}">Add Student</a></li>
                    <li><a class="nav-link" href="{{ route('booking.index') }}">Booking</a></li>
                    <li><a class="nav-link" href="{{ route('message.index') }}">Message</a></li>
                    <li><a class="nav-link" href="{{ route('visitor.index') }}">Visitor</a></li>
                    <li><a class="nav-link" href="{{ route('leave.index') }}">Student Leave</a></li>
                    <li><a class="nav-link" href="{{ route('studentmessage.index') }}">Student Message</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Rules &
                        Regulations</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('rule.index') }}">Add Rules & Regulation</a></li>
                </ul>
            </li>
          
            <li class="menu-header">Website Management</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Hostel Website</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('company.index') }}">Company Setup</a></li>
                    <li><a class="nav-link" href="{{ route('welcome.index') }}">Add Welcome Message</a></li>
                    <li><a class="nav-link" href="{{ route('slide.index') }}">Add Slides</a></li>
                    <li><a class="nav-link" href="{{ route('service.index') }}">Services</a></li>
                    <li><a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a></li>
                    <li><a class="nav-link" href="{{ route('about.index') }}">About Us</a></li>
                    <li><a class="nav-link" href="{{ route('facility.index') }}">Facility</a></li>
                    <li><a class="nav-link" href="{{ route('meal.index') }}">Meals</a></li>
                    <li><a class="nav-link" href="{{ route('roomgallery.index') }}">Room Gallery</a></li>
                    <li><a class="nav-link" href="{{ route('abouthostel.index') }}">Add Hostel Message</a></li>

                </ul>
            </li>

        </ul>
    </aside>
</div>
