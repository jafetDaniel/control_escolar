@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? "{{ __('Show') Course" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Course</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('courses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $course->name }}
                        </div>
                        <div class="form-group">
                            <strong>Key:</strong>
                            {{ $course->key }}
                        </div>
                        <div class="form-group">
                            <strong>Credits:</strong>
                            {{ $course->credits }}
                        </div>
                        <div class="form-group">
                            <strong>Semester Id:</strong>
                            {{ $course->semester_id }}
                        </div>
                        <div class="form-group">
                            <strong>Career Id:</strong>
                            {{ $course->career_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
