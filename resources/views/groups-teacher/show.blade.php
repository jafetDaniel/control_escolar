@extends('layouts.app')

@section('template_title')
    {{ $groupsTeacher->name ?? "{{ __('Show') Groups Teacher" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Groups Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('groups-teacher.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Teacher Id:</strong>
                            {{ $groupsTeacher->teacher_id }}
                        </div>
                        <div class="form-group">
                            <strong>Group Id:</strong>
                            {{ $groupsTeacher->group_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
