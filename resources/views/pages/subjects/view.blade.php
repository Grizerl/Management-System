@extends('layouts.panel')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Projects for Subjects</h3>
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
                <th style="width: 20%">
                  Subject 1
                </th>
                <th style="width: 20%">
                  Subject 2
                </th>
                <th>
                  Subject 3
                </th>
                <th style="width: 25%" class="text-center">
                    Course
                </th>
                <th style="width: 15%">
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($subject as $subjects)
                <tr>
                  <td>
                    {{ $subjects['id'] }}
                  </td>
                  <td>
                    <a>
                      {{ $subjects['subject_1'] }}
                    </a>
                  </td>
                  <td>
                    <a>
                      {{ $subjects['subject_2'] }}
                    </a>
                  </td>
                  <td class="project_progress">
                    <a>
                      {{ $subjects['subject_3'] }}
                    </a>
                  </td>
                  <td class="project-state">
                    <a>
                      {{ $subjects->course['full_name'] }}
                    </a>
                  </td>
                  <td class="project-actions text-right d-flex justify-content-center">
                      <a class="btn btn-info btn-sm mr-2" href="{{ route('subjects.edit', $subjects['id']) }}">
                        <i class="fas fa-pencil-alt"></i>
                          Edit
                      </a>
                      <form action="{{ route('subjects.destroy', $subjects['id']) }}" method="post">
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
      <div class="mt-2 ml-2">
        {{ $subject->links('pagination::bootstrap-4') }}
      </div>
    </div>
    </section>
@endsection