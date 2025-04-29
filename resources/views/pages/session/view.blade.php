@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th style="width: 15px">#</th>
                      <th>Start Session</th>
                      <th>End Session</th>
                      <th style="width: 100px">Years</th>
                      <th style="width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($session as $sessions)
                        <tr>
                            <td>{{ $sessions->id }}</td>
                            <td>{{ $sessions->start_date }}</td>
                            <td>
                                {{ $sessions->end_date }}
                                <td>
                                    {{ $sessions->release_year}}
                                </td>
                            </td>
                            <td>
                                <form action="{{ route('session.destroy', $sessions['id']) }}" method="post">
                                    @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash"></i>
                                                    Remove
                                            </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection