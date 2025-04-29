@extends('layouts.panel')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">See All Students</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      </div>
      <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 5%">
                    No.
                </th>
                <th style="width: 10%">
                    First Name
                </th>
                <th style="width: 10%">
                    Middle Name
                </th>
                <th style="width: 20%" class="text-center">
                    Last Name
                </th>
                <th class="text-center">
                    Contact Number (Guardian)
                </th>
                <th style="width: 15%" class="text-center">
                    Gender
                </th>
                <th style="width: 15%">
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($view_students as $students)
                <tr>
                  <td>
                    {{ $students['id'] }}
                  </td>
                  <td>
                    <a>
                      {{ $students['first_name'] }}
                    </a>
                  </td>
                  <td>
                    <a>
                      {{ $students['middle_name'] }}
                    </a>
                  </td>
                  <td class="text-center">
                    <a>
                      {{ $students['last_name'] }}
                    </a>
                  </td>
                  <td class="project_progress text-center">
                    <a>
                      {{ $students['guardian_number'] }}
                    </a>
                  </td>
                  <td class="project-state">
                    <a>
                      {{ $students['gender'] }}
                    </a>
                  </td>
                  <td class="project-actions text-right d-flex justify-content-center">
                      <a class="btn btn-info btn-sm mr-2" href="{{ route('register.edit',$students['id']) }}">
                        <i class="fas fa-pencil-alt"></i>
                          Edit
                      </a>
                      <form action="{{ route('register.destroy',$students['id']) }}" method="post">
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
  </section>
@endsection