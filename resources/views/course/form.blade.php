<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $course->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('key') }}
            {{ Form::text('key', $course->key, ['class' => 'form-control' . ($errors->has('key') ? ' is-invalid' : ''), 'placeholder' => 'Key']) }}
            {!! $errors->first('key', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('credits') }}
            {{ Form::text('credits', $course->credits, ['class' => 'form-control' . ($errors->has('credits') ? ' is-invalid' : ''), 'placeholder' => 'Credits']) }}
            {!! $errors->first('credits', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('semester_id') }}
            {{ Form::text('semester_id', $course->semester_id, ['class' => 'form-control' . ($errors->has('semester_id') ? ' is-invalid' : ''), 'placeholder' => 'Semester Id']) }}
            {!! $errors->first('semester_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('career_id') }}
            {{ Form::text('career_id', $course->career_id, ['class' => 'form-control' . ($errors->has('career_id') ? ' is-invalid' : ''), 'placeholder' => 'Career Id']) }}
            {!! $errors->first('career_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>