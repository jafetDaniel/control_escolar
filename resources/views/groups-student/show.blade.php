@extends('layouts.app')

@section('template_title')
    {{ $groupsStudent->name ?? "{{ __('Show') Groups Student" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Groups Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('groups-student.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>First Grade:</strong>
                            {{ $groupsStudent->first_grade }}
                        </div>
                        <div class="form-group">
                            <strong>Second Grade:</strong>
                            {{ $groupsStudent->second_grade }}
                        </div>
                        <div class="form-group">
                            <strong>Final Grade:</strong>
                            {{ $groupsStudent->final_grade }}
                        </div>
                        <div class="form-group">
                            <strong>Student Id:</strong>
                            {{ $groupsStudent->student_id }}
                        </div>
                        <div class="form-group">
                            <strong>Group Id:</strong>
                            {{ $groupsStudent->group_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
