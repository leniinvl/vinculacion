<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Mnsm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mnsm', 'Mnsm:') !!}
    {!! Form::number('mnsm', null, ['class' => 'form-control','min' => '0']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('climas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
