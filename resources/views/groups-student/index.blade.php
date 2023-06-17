@extends('layouts.app')

@section('template_title')
    Groups Student
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Groups Student') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('groups-student.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>First Grade</th>
										<th>Second Grade</th>
										<th>Final Grade</th>
										<th>Student Id</th>
										<th>Group Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($groupsStudents as $groupsStudent)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $groupsStudent->first_grade }}</td>
											<td>{{ $groupsStudent->second_grade }}</td>
											<td>{{ $groupsStudent->final_grade }}</td>
											<td>{{ $groupsStudent->student_id }}</td>
											<td>{{ $groupsStudent->group_id }}</td>

                                            <td>
                                                <form action="{{ route('groups-student.destroy',$groupsStudent->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('groups-student.show',$groupsStudent->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('groups-student.edit',$groupsStudent->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $groupsStudents->links() !!}
            </div>
        </div>
    </div>
@endsection
