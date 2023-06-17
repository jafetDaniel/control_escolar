@extends('layouts.app')

@section('template_title')
    {{ $period->name ?? "{{ __('Show') Period" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Period</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periods.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $period->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
