<div>
    <h2>  detail </h2>
        <ul>
            @foreach ($students as $index => $student)
            <li>   {{ $student->id }}  | {{ $student->name }} | {{ $student->email }} 
            </li>
            @endforeach 
        </ul>
</div>
