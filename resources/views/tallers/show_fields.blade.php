<!-- Id Field -->


<div class="row">
    <div class="col-md-20">
    <div class="col-sm-3">
       <b> <p>Id:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->id !!}</p>
    </div>
    <div class="col-sm-3">
        <b><p>Nombre:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->nombre !!}</p>
    </div>
    <div class="col-sm-3">
       <b> <p>Descripcion:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->descripcion !!}</p>
    </div>
    <div class="col-sm-3">
       <b> <p>Riesgo:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->riesgo !!}</p>
    </div>
    <div class="col-sm-3">
      <b>  <p>Imágen:</p></b>
    </div>
    <div class="col-sm-9">
        @if($taller->imagen!=null)
            <div class="form-group">
                <p><img class="img-responsive"  width="20%" height="30%" src="{!! $taller->imagen !!}"/></p></td>
            </div>
        @else
            <div class="form-group">
                {!! Form::label('imagen', 'Imágen:') !!}
                <p>{!! $taller->imagen !!}</p>
            </div>
        @endif

    </div>

    <div class="col-sm-3">
        <b><p>Video:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->video !!}</p>
    </div>

    <div class="col-sm-3">
        <b><p>Unidad de Producción:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->unidadproduccion->nombre !!}</p>
    </div>
    <div class="col-sm-3">
       <b> <p>Fecha Creación:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->created_at !!}</p>
    </div>
    <div class="col-sm-3">
        <b><p>Actualizado:</p></b>
    </div>
    <div class="col-sm-9">
        <p>{!! $taller->updated_at !!}</p>
    </div>
</div>

</div>








