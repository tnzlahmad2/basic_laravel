<h1>profile page</h1>

@if(session('user'))
<h3>hello {{ session("user") }}</h3>
@endif

<a href="/logout">Logout</a>
