<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>User List</h1> 
   <table border="1">
  <tr>
    <th>Id #</th>
    <th>Email</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Profile Picture</th>
  </tr>
    @foreach ($collection as $data)
        <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['email']}}</td>
            <td>{{$data['first_name']}}</td>
            <td>{{$data['last_name']}}</td>
            <td>
                <img src="{{$data['avatar']}}" alt="">
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>