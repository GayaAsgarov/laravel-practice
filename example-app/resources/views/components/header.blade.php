<div>
    <h1>Hello this is header component</h1>
    <h2>Name is {{$name}}</h2>
    <h2>Student data : {{$data2}}</h2>
    <ul>
        @foreach($student as $stu)
        <li>{{$stu}}</li>
        @endforeach
    </ul>
</div>
