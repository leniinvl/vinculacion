@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area Influencia
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('area_influencias.show_fields')
                    <div>
                    <h3>Tipo Vegetal</h3><a href="{{route('tipoVegetals.index')}}">(Añadir Nueva)</a>
                    </div>

                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoVegetal', $areaInfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoVegetal_id', $tipovegetal, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="areaInfluenciaHasTipoVegetals-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areaInfluencia->tipovegetals as $areaInfluenciaHasTipoVegetal)
                            <tr>
                                <td>{!! $areaInfluenciaHasTipoVegetal->nombre_comun !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoVegetal', $areaInfluencia->id, $areaInfluenciaHasTipoVegetal->id], 'method' => 'delete']) !!}
                                    {{ csrf_field() }}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div>
                    <h3>Religion</h3><a href="{{route('religions.index')}}">(Añadir Nueva)</a>
                    </div>
                    <div class="form-group col-sm-6">

                      {!! Form::open(['route' => ['storeReligion', $areaInfluencia->id], 'method' => 'post']) !!}
                      {{ csrf_field() }}
                      {!! Form::select('Religion_id', $religion, null, ['class' => 'form-control']) !!}

                    </div>
                    {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                    <table class="table table-responsive" id="areainfluenciaHasReligions-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areaInfluencia->religions as $areainfluenciaHasReligion)
                            <tr>
                                <td>{!! $areainfluenciaHasReligion->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyReligion', $areaInfluencia->id, $areainfluenciaHasReligion->id], 'method' => 'delete']) !!}
                                    {{ csrf_field() }}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div>
                    <h3>Lenguaje</h3><a href="{{route('lenguajes.index')}}">(Añadir Nueva)</a>
                    </div>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeLenguaje', $areaInfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('Lenguaje_id', $lenguaje, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="areainfluenciaHasLenguajes-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areaInfluencia->lenguajes as $areainfluenciaHasLenguaje)
                            <tr>
                                <td>{!! $areainfluenciaHasLenguaje->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyLenguaje', $areaInfluencia->id, $areainfluenciaHasLenguaje->id], 'method' => 'delete']) !!}
                                    {{ csrf_field() }}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <a href="{!! route('areaInfluencias.index') !!}" class="btn btn-default">Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection
