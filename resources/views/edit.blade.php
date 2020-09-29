@extends('layouts.main')
@section('content')

@if($errors->any())
    @foreach($errors->all() as $errors)
        <div class="alert alert-danger" role="alert">
            {{$errors}}
        </div>
    @endforeach
@endif
<!-- Default form login -->
<form class="text-center border border-light p-5" method="POST" action="{{route('update',$student->id)}}">

{{csrf_field()}}
    <p class="h4 mb-4">Add Student Record</p>

    <input type="text" name="FirstName" value="{{$student->first_name}}" class="form-control mb-4" placeholder="First Name">
    <input type="text" name="LastName" value="{{$student->last_name}}" class="form-control mb-4" placeholder="Last Name">
    <input type="text" name="FatherName" value="{{$student->father_name}}" class="form-control mb-4" placeholder="Father Name">
    <input type="text" name="Roll" value="{{$student->roll_no}}" class="form-control mb-4" placeholder="Roll No">
    <input type="text" name="Class" value="{{$student->class}}" class="form-control mb-4" placeholder="Class">
    <input type="text" name="AttendenceStatus" value="{{$student->attendence_status}}" class="form-control mb-4" placeholder="Present, Absent, On Leave">

    <!-- Sign in button -->
    <button class="btn btn-block my-4" style="background:#2bbbad ;" type="submit">Update</button>

</form>
<!-- Default form login -->
@endsection