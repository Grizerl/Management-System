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
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Set Up Subject</button>
        </div>
    </form>
  </div>
@endsection