<div>
  <h2> user list </h2>
    <ul>
        @foreach ($students as $index => $student)
        <li>   {{ $student->id }}  | {{ $student->name }} | {{ $student->email }} | <a href="{{ route('student.detail', $student->id) }}">details</a>
           {{-- <a href="{{ route('student.detail', '{{$student->id }}''>view detail</a></li> --}}
           

      </li>
        @endforeach 
        {{-- {{ $index + 1 }}  --}}
    </ul>
</div>
