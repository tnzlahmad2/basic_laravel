@extends('layout.app')

@section('title')   
 services page
@endsection

@section('content')   
    <h2>{{$title}}</h2>
    @if(count($services) > 0)
    <ul>
     @foreach ($services as $service)
            <li>{{$service}}</li>
     @endforeach
     </ul>
    @endif
 
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2></h1>
    <p>This is the services page.</p>
    <a href="/">home page</a></body>
</html> --}}