@extends('layouts.app')

@section('template_title')
    {{ $group->name ?? "{{ __('Show') Group" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Group</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('groups.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $group->name }}
                        </div>
                        <div class="form-group">
                            <strong>Key:</strong>
                            {{ $group->key }}
                        </div>
                        <div class="form-group">
                            <strong>Schedule:</strong>
                            {{ $group->schedule }}
                        </div>
                        <div class="form-group">
                            <strong>Course Id:</strong>
                            {{ $group->course_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
