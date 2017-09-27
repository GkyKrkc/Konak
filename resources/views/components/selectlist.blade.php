<div class="form-group {{$errors->has($name) ? 'has-error':null}}">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {!! Form::select($name, $value,null,['class' => 'form-control']) !!}
    @if($errors->has($name))
        <span class="help-block">
            <strong>{{$errors->first($name)}}</strong>
        </span>
    @endif
</div>