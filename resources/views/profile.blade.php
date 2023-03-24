<h1>{{ __("profile.welcome") }}</h1>
<!-- 
@if(session('user'))
<h3>hello {{ session("user") }}</h3>
@endif

<a href="/logout">Logout</a> -->

<a href="about">{{ __("profile.list") }}</a>
<a href="about">{{ __("profile.contact") }}</a>
<a href="about">{{ __("profile.about") }}</a>

<a class="dropdown-item" href="{{URL::to('/')}}">en</a>
<a class="dropdown-item" href="{{URL::to('/ur')}}">ur</a>
