@extends('layouts.panel')

@section('content')
    <div class="card card-primary w-75 ml-2">
    <div class="card-header">
      <h3 class="card-title">Insert Session</h3>
    </div>
    <form action="{{ route('session.store') }}" method="post">
      @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="Start Session">Start Session <span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="start_date">
                @error('start_date')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="End Session">End Session <span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="end_date">
                @error('end_date')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
            <label for="Years">Years <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="release_year" placeholder="2024-2025">
                @error('release_year')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Set Up Session</button>
        </div>
    </form>
    </div>
@endsection