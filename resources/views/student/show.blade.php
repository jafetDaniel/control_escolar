@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? "{{ __('Show') Student" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Number Control:</strong>
                            {{ $student->number_control }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $student->address }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $student->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $student->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $student->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Average:</strong>
                            {{ $student->average }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $student->status }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $student->foto }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $student->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Career Id:</strong>
                            {{ $student->career_id }}
                        </div>
                        <div class="form-group">
                            <strong>Semester Id:</strong>
                            {{ $student->semester_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
