@extends('layouts.main')
@section('content')

    <h1>Home Page of Attendence Mgt System</h1>

    @if (session('Msg'))
        <div class="alert alert-success" role="alert">
            {{session('Msg') }}
        </div>
    @endif
<div class="container">
    <table class="table">
  <thead class="grey lighten-2">
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Last</th>
      <th scope="col">Father Name</th>
      <th scope="col">Roll No</th>
      <th scope="col">Class</th>
      <th scope="col">Attendence Status</th>
      <th scope="col">Actions</th>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
    <th scope="row">{{$student->id}}</th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->father_name}}</td>
      <td>{{$student->roll_no}}</td>
      <td>{{$student->class}}</td>
      <td>{{$student->attendence_status}}</td>
      <td>
        <a href="#" title="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
        || 
        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
      <td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection