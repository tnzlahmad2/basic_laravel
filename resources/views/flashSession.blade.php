<h1>Add new member</h1>
  @if(session('user'))
    <h3>data saved..{{session('user')}}</h3>
  @endif

<form action="session" method="POST" class="form-example">
      @csrf
        <input type="text" placeholder="Enter Username" name="user" >
        <input type="password" placeholder="Enter Password" name="psw" >
      <button type="submit"><strong>Add User</strong></button>
    </form>