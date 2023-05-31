<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('number_control') }}
            {{ Form::text('number_control', $student->number_control, ['class' => 'form-control' . ($errors->has('number_control') ? ' is-invalid' : ''), 'placeholder' => 'Number Control']) }}
            {!! $errors->first('number_control', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $student->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birthdate') }}
            {{ Form::text('birthdate', $student->birthdate, ['class' => 'form-control' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Birthdate']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender') }}
            {{ Form::text('gender', $student->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $student->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('average') }}
            {{ Form::text('average', $student->average, ['class' => 'form-control' . ($errors->has('average') ? ' is-invalid' : ''), 'placeholder' => 'Average']) }}
            {!! $errors->first('average', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $student->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $student->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('career_id') }}
            {{ Form::text('career_id', $student->career_id, ['class' => 'form-control' . ($errors->has('career_id') ? ' is-invalid' : ''), 'placeholder' => 'Career Id']) }}
            {!! $errors->first('career_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('semester_id') }}
            {{ Form::text('semester_id', $student->semester_id, ['class' => 'form-control' . ($errors->has('semester_id') ? ' is-invalid' : ''), 'placeholder' => 'Semester Id']) }}
            {!! $errors->first('semester_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>