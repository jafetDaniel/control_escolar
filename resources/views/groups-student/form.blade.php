<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('first_grade') }}
            {{ Form::text('first_grade', $groupsStudent->first_grade, ['class' => 'form-control' . ($errors->has('first_grade') ? ' is-invalid' : ''), 'placeholder' => 'First Grade']) }}
            {!! $errors->first('first_grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_grade') }}
            {{ Form::text('second_grade', $groupsStudent->second_grade, ['class' => 'form-control' . ($errors->has('second_grade') ? ' is-invalid' : ''), 'placeholder' => 'Second Grade']) }}
            {!! $errors->first('second_grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('final_grade') }}
            {{ Form::text('final_grade', $groupsStudent->final_grade, ['class' => 'form-control' . ($errors->has('final_grade') ? ' is-invalid' : ''), 'placeholder' => 'Final Grade']) }}
            {!! $errors->first('final_grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('student') }}
            {{ Form::select('student_id', $students, $groupsStudent->student_id, ['class' => 'form-control' . ($errors->has('student_id') ? ' is-invalid' : ''), 'placeholder' => 'Student Id']) }}
            {!! $errors->first('student_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('group') }}
            {{ Form::select('group_id', $groups, $groupsStudent->group_id, ['class' => 'form-control' . ($errors->has('group_id') ? ' is-invalid' : ''), 'placeholder' => 'Group Id']) }}
            {!! $errors->first('group_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>