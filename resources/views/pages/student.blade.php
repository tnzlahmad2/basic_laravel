
    {{-- @include('inner') --}}
    <h1>{{$title}}</h1>
    @if (count($students) > 0)
      <ul>
        @foreach ($students as $student)
            <li>{{$student}}</li>
        @endforeach
      </ul>    
    @endif
    @csrf

    <script>
        var student_data =@json($students);
        console.log("student",student_data)
    </script>