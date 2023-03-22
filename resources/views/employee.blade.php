<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Employee Data</h1>
  <table border="1">
   <tr>
    <th>Id #</th>
    <th>Name</th>
    <th>Year</th>
    <th>Color</th>
    <th>Pantone Value</th>
   </tr>
   @foreach ($collection as $data)
        <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['name']}}</td>
            <td>{{$data['year']}}</td>
            <td>{{$data['color']}}</td>
            <td>{{$data['pantone_value']}}</td>        
        </tr>
    @endforeach
</table>
</body>
</html>