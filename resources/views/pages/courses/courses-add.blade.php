@extends('layouts.panel')
   
@section('content')
  <div class="card card-primary w-75 ml-2">
      <div class="card-header">
        <h3 class="card-title">Enroll Course</h3>
      </div>
      <form action="{{ route('courses.store') }}" method="post">
        @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="Course Short Name">Course Short Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="short_name">
                  @error('short_name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
            </div>
            <div class="form-group">
              <label for="Course Full Name">Course Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="full_name">
                  @error('full_name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
            </div>
            <div class="form-group">
              <label for="Creation Date">Creation Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="creation_date">
                  @error('creation_date')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Build Course</button>
          </div>
      </form>
  </div>
@endsection