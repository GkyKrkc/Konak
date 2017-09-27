<div class="form-group">
    {{ Form::label($name,$label_name, ['class' => 'control-label']) }}
    {{ Form::text($name, null, array_merge(['class' => 'form-control'])) }}
</div>