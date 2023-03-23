<h1>Add new member</h1>

<form action="loginSession" method="POST" class="form-example">
    @csrf
    <input type="text" placeholder="Enter Username" name="user" />
    <input type="password" placeholder="Enter Password" name="psw" />
    <button type="submit"><strong>Add User</strong></button>
</form>
