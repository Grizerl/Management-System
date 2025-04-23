@extends('layouts.panel')

@section('content')
<section class="content pt-1">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

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
                      <th style="width: 1%">
                        Id
                      </th>
                      <th style="width: 20%">
                            Short Name
                      </th>
                      <th style="width: 30%">
                            Full Name
                      </th>
                      <th>
                            Created Date
                      </th>
                      <th style="width: 8%" class="text-center">
                            Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                    @foreach ($courses as $course)
                        <tr>
                      <td>
                        {{ $course['id'] }}
                      </td>
                      <td>
                          <a>
                            {{ $course['short_name'] }}
                          </a>
                      </td>
                      <td>
                         <a>
                            {{ $course['full_name'] }}
                         </a>
                      </td>
                      <td class="project_progress">
                          <a>
                             {{ $course['created_at'] }}
                          </a>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right d-flex justify-content-center">
                          <a class="btn btn-info btn-sm mr-2" href="{{ route('courses.edit', $course['id']) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                            <form action="{{ route('courses.destroy', $course['id']) }}" method="post">
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
@endsection