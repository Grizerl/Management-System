@extends('layouts.panel')

@section('content')
  <div class="card card-primary w-75 ml-2">
    <div class="card-header">
      <h3 class="card-title">Update Student Information</h3>
    </div>
    <form action="{{ route('register.update',$register['id']) }}" method="post">
      @csrf
      @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="Select Course">Select Course <span class="text-danger">*</span></label>
              <select class="form-control select2 select2-hidden-accessible" name="course_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                @foreach ($course as $courses)  
                    <option value="{{$courses['id']}}" {{ $courses['id'] == $register->course_id ? 'selected' : '' }}>
                    {{$courses['full_name']}}
                @endforeach  
              </select>
              @error('course_id')
                <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="Select Session">Select Session <span class="text-danger">*</span></label>
              <select class="form-control select2 select2-hidden-accessible" name="session_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                @foreach ($session as $sessions)  
                    <option value="{{$sessions['id']}}" {{ $sessions['id'] == $register->session_id ? 'selected' : '' }}>
                    {{$sessions['release_year']}}
                @endforeach  
              </select>
              @error('session_id')
                <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="First Name">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $register->first_name) }}">
                @error('first_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Middle Name">Middle Name</label>
              <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name', $register->middle_name) }}">
                @error('middle_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Last Name">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $register->last_name) }}">
                @error('last_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Guardian Number">Guardian Number <span class="text-danger">*</span></label>
              <input type="tel" class="form-control" name="guardian_number" value="{{ old('guardian_number', $register->guardian_number) }}">
                @error('guardian_number')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Gender">Gender <span class="text-danger">*</span></label>
              <div class="mt-2">
                <div class="form-check form-check-inline form-check-lg">
                  <input type="radio" id="male" value="male" class="form-check-input" name="gender"
                    @if(old('gender', $register->gender) == 'male') checked @endif>
                      <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                  <input type="radio" id="female" value="female" class="form-check-input" name="gender"
                    @if(old('gender', $register->gender) == 'female') checked @endif>
                      <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline form-check-lg">
                  <input type="radio" id="other" value="other" class="form-check-input" name="gender"
                    @if(old('gender', $register->gender) == 'other') checked @endif>
                      <label class="form-check-label" for="other">Other</label>
                </div>
              </div>
                @error('gender')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
          <div class="form-group">
            <label for="Occupation">Occupation</label>
              <input type="text" class="form-control" name="occupation" value="{{ old('occupation', $register->occupation) }}">
                @error('occupation')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
           @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center justify-content-between p-3 rounded shadow-sm" role="alert" style="font-size: 0.9rem;">
              <div class="d-flex align-items-center">
                  <i class="icon fa fa-check mr-2" style="font-size: 1.2rem;"></i>
                    <span>{{ session('success') }}</span>
              </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update Student Profile</button>
        </div>
    </form>
  </div>
@endsection