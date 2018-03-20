<div class="form-group">
    <label class="control-label col-sm-2" for="Nombre">Nombre:</label>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::text('nombre', $taller->nombre, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="descripcion">Descripcion:</label>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::textarea('descripcion',  $taller->descripcion , ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="riesgo">Riesgo:</label>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::textarea('riesgo', $taller->riesgo, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="imagen">Imágen:</label>
    <div class="row">
        <div class="col-sm-9">
            @if($taller->imagen!=null)
                <div class="form-group">
                    <p><img class="img-responsive" id="imag"  width="20%" height="30%" src="{!! $taller->imagen !!}"/></p></td>
                </div>
            @else
                <div class="form-group">
                    {!! Form::label('imagen', 'Imágen:') !!}
                    <p>{!! $taller->imagen !!}</p>
                </div>
            @endif
            {!! Form::file('file', ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="video">Video:</label>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::text('video', $taller->video, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">

    <label class="control-label col-sm-2" for="email">Unidad de Producción:</label>
    <div class="row">
        <div class="col-sm-9">
            <a href="{{route('unidadproduccions.create')}}">(Añadir)</a>
            {!! Form::select('UnidadProduccion_id', $unidadproduccion ,$taller->unidadproduccion->nombre, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tallers.index') !!}" class="btn btn-default">Cancelar</a>
</div>
