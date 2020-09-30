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
        <a class="btn btn-raised btn-info btn-sm" title="edit" href="{{route('edit', $student->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
        || 
        <form method="POST" id="delete-form-{{$student->id}}" action="{{route('delete', $student->id)}}" style="display:none;">
          {{csrf_field()}}
          {{method_field('delete')}}
        </form>
        <button onclick="if(confirm('Are you sure to delete it?')){
          event.preventDefault();
          document.getElementById('delete-form-{{$student->id}}').submit();
        }else{
          event.preventDefault();
        }" class="btn btn-raised btn-danger btn-sm">
        <i class="fa fa-trash-o" aria-hidden="true"></i>
        </button>
      <td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection