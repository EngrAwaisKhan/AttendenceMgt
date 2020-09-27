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
<form class="text-center border border-light p-5" method="POST" action="{{route('store')}}">

{{csrf_field()}}
    <p class="h4 mb-4">Add Student Record</p>

    <input type="text" id="FirstName" name="FirstName" class="form-control mb-4" placeholder="First Name">
    <input type="text" id="LastName" name="LastName" class="form-control mb-4" placeholder="Last Name">
    <input type="text" id="FatherName" name="FatherName" class="form-control mb-4" placeholder="Father Name">
    <input type="text" id="Roll" name="Roll" class="form-control mb-4" placeholder="Roll No">
    <input type="text" id="Class" name="Class" class="form-control mb-4" placeholder="Class">
    <select id="AttendenceStatus" name="AttendenceStatus" class="custom-select">
        <option value="">Attendence Status</option>
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
        <option value="On Leave">On Leave</option>
    </select>

    <!-- Sign in button -->
    <button class="btn btn-block my-4" style="background:#2bbbad ;" type="submit">Save</button>

</form>
<!-- Default form login -->
@endsection