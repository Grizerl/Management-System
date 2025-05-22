@extends('layouts.panel')

@section('content')
  <div class="card card-primary w-75 ml-2">
    <div class="card-header">
      <h3 class="card-title">Insert Subject</h3>
    </div>
    <form action="{{ route('subjects.store') }}" method="post">
      @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="Course Full Name">Course Full Name</label>
              <select class="form-control select2 select2-hidden-accessible" name="course_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                @foreach ($course as $courses)
                  <option value="{{$courses['id']}}">{{$courses['full_name']}}</option>
                @endforeach
              </select>
              @error('course_id')
                <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="Subject 1">Subject 1 <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="subject_1">
                @error('subject_1')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Subject 2">Subject 2 <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="subject_2">
                @error('subject_2')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for=Subject 3">Subject 3 <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="subject_3">
                @error('subject_3')
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
          <button type="submit" class="btn btn-primary">Set Up Subject</button>
        </div>
    </form>
  </div>
@endsection