<ul class="dashboard-menu">
    <li class="active">
       <a href="{{route('home.candidate.dashboard')}}">
       <i class="fa fa-tachometer"></i>
       Dashboard
       </a>
    </li>
    <li><a href="{{route('home.candidate.profile')}}"><i class="fa fa-users"></i>My Profile</a></li>
    {{-- <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li> --}}
    <li><a href="{{route('home.candidate.applications')}}"><i class="fa fa-briefcase"></i>My Booking</a></li>
    {{-- <li><a href="{{route('home.candidate.earnings')}}"><i class="fa fa-rocket"></i>earnings</a></li> --}}
    <li><a href="{{route('home.candidate.change_password')}}"><i class="fa fa-lock"></i>change password</a></li>
    <li><a href="#"><i class="fa fa-power-off"></i>LogOut</a></li>
 </ul>