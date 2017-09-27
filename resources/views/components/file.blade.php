<div class="form-group">
    {{ Form::label($resim, $aciklama, ['class' => 'control-label']) }}
    {{ Form::file($resim, $value, array_merge(['class' => 'form-control'])) }}


</div>