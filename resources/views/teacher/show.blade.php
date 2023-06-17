@extends('layouts.app')

@section('template_title')
    {{ $teacher->name ?? "{{ __('Show') Teacher" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teachers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Number Control:</strong>
                            {{ $teacher->number_control }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $teacher->address }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $teacher->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $teacher->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $teacher->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $teacher->status }}
                        </div>
                        <div class="form-group">
                            <strong>Photo:</strong>
                            {{ $teacher->photo }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $teacher->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
