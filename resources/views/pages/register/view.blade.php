@extends('layouts.panel')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">See All Enrolled Students</h3>
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
                  Id
                </th>
                <th style="width: 10%">
                  First Name
                </th>
                <th style="width: 15%">
                  Middle Initial
                </th>
                <th style="width: 15%">
                  Surname
                </th>
                <th>
                  Emergency Contact Number
                </th>
                <th style="width: 25%" class="text-center">
                  Program
                </th>
                <th style="width: 15%">
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($register as $registers)
                <tr>
                  <td>
                    {{ $registers['id'] }}
                  </td>
                  <td>
                    <a>
                      {{ $registers['first_name'] }}
                    </a>
                  </td>
                  <td>
                    <a>
                      {{ $registers['middle_name'] }}
                    </a>
                  </td>
                  <td>
                    <a>
                      {{ $registers['last_name'] }}
                    </a>
                  </td>
                  <td class="project_progress">
                    <a>
                      {{ $registers['guardian_number'] }}
                    </a>
                  </td>
                  <td class="project-state">
                    <a>
                      {{ $registers->course['full_name'] }}
                    </a>
                  </td>
                  <td class="project-actions text-right d-flex justify-content-center">
                      <a class="btn btn-info btn-sm mr-2" href="{{ route('register.edit', $registers['id']) }}">
                        <i class="fas fa-pencil-alt"></i>
                          Edit
                      </a>
                      <form action="{{ route('register.destroy', $registers['id']) }}" method="post">
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