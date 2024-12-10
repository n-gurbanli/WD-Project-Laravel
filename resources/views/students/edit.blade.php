@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Edit student profile</h1>
    </div>
</div>
<div class="row">
  <div class="col">
    <form action="{{ route('students.update', $student -> id) }}" method="POST">
     @method('PUT')
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" id="fname" name="fname" value="{{ $student -> fname }}">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="{{ $student -> lname }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $student -> email }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>      
    </form>
  </div>
</div>
@endsection