@extends('layouts.panel')
   
@section('content')
  <div class="card card-primary w-75 ml-2">
    <div class="card-header">
      <h3 class="card-title">Modify Course</h3>
    </div>
    <form action="{{ route('courses.update', $courses['id']) }}" method="post">
      @csrf
      @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="Course Short Name">Course Short Name <span class="text-danger">*</span></label>
              <input type="text" name="short_name" class="form-control" value="{{ old('short_name', $courses->short_name) }}">
                @error('short_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Course Full Name">Course Full Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="full_name" value="{{ old('full_name', $courses->full_name) }}">
                @error('full_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Creation Date">Creation Date <span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="creation_date" value="{{ old('creation_date', \Carbon\Carbon::parse($courses->created_at)->format('Y-m-d')) }}">
                @error('creation_date')
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
          <button type="submit" class="btn btn-primary">Update Course</button>
        </div>
    </form>
  </div>
@endsection