@extends('layouts.panel')
   
@section('content')
  <div class="card card-primary w-75 ml-2 mt-2">
      <div class="card-header">
        <h3 class="card-title">Add Course</h3>
      </div>
      <form action="{{ route('courses.store') }}" method="post">
        @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="Course Short Name">Course Short Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="short_name" placeholder="">
                  @error('short_name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
            </div>
            <div class="form-group">
              <label for="Course Full Name">Course Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="full_name" placeholder="">
                  @error('full_name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
            </div>
            <div class="form-group">
              <label for="Creation Date">Creation Date</label>
                <input type="date" class="form-control" name="creation_date" placeholder="">
                  @error('creation_date')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Course</button>
          </div>
      </form>
  </div>
@endsection