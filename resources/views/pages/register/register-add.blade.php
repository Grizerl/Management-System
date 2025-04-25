@extends('layouts.panel')

@section('content')
  <div class="card card-primary w-75 ml-2">
    <div class="card-header">
      <h3 class="card-title">Sign Up Student</h3>
    </div>
    <form action="{{ route('register.store') }}" method="post">
      @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="Select Course">Select Course <span class="text-danger">*</span></label>
              <select class="form-control select2 select2-hidden-accessible" name="course_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                @foreach ($course as $courses)  
                  <option value="{{ $courses['id'] }}">{{$courses['short_name']}}</option>
                @endforeach  
              </select>
              @error('course_id')
                <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="First Name">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="first_name" placeholder="">
                @error('first_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Middle Name">Middle Name</label>
              <input type="text" class="form-control" name="middle_name" placeholder="">
                @error('middle_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Last Name">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="last_name" placeholder="">
                @error('last_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Guardian Number">Guardian Number <span class="text-danger">*</span></label>
              <input type="tel" class="form-control" name="guardian_number" placeholder="">
                @error('guardian_number')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Gender">Gender <span class="text-danger">*</span></label>
              <div class="mt-2">
                <div class="form-check form-check-inline form-check-lg">
                  <input type="radio" id="male" value="male" class="form-check-input" name="gender">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                  <input type="radio" id="female" value="female" class="form-check-input" name="gender">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                  <input type="radio" id="other" value="other" class="form-check-input" name="gender">
                    <label class="form-check-label" for="other">Other</label>
                </div>
              </div>
                @error('gender')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Occupation">Occupation</label>
              <input type="text" class="form-control" name="occupation" placeholder="">
                @error('occupation')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Enroll New Student</button>
        </div>
    </form>
  </div>
@endsection