<div class="form-group">
    {{ Form::label($name,$label_name, ['for' => 'comment']) }}
    {{ Form::textarea($name, null, array_merge(['class' => 'form-control'])) }}
</div>