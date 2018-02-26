@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area de Influencia
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('areainfluencias.show_fields')

                    <h3>Tipo Vegetal</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoVegetal', $areainfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoVegetal_id', $tipovegetal, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Vegetal', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="areaInfluenciaHasTipoVegetals-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->tipovegetals as $areaInfluenciaHasTipoVegetal)
                            <tr>
                                <td>{!! $areaInfluenciaHasTipoVegetal->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoVegetal', $areainfluencia->id, $areaInfluenciaHasTipoVegetal->id], 'method' => 'delete']) !!}
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

                    <h3>Uso Tierra</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeUsoTierra', $areainfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('UsoTierra_id', $usotierra, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Uso Tierra', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    <table class="table table-responsive" id="areainfluenciaHasUsotierras-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->usotierras as $areainfluenciaHasUsotierra)
                            <tr>
                                <td>{!! $areainfluenciaHasUsotierra->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyUsotierra', $areainfluencia->id, $areainfluenciaHasUsotierra->id], 'method' => 'delete']) !!}
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


                    <h3>Religion</h3>
                    <div class="form-group col-sm-6">

                      {!! Form::open(['route' => ['storeReligion', $areainfluencia->id], 'method' => 'post']) !!}
                      {{ csrf_field() }}
                      {!! Form::select('Religion_id', $religion, null, ['class' => 'form-control']) !!}

                    </div>
                    {!! Form::submit('Agregar Religion', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                    <table class="table table-responsive" id="areainfluenciaHasReligions-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->religions as $areainfluenciaHasReligion)
                            <tr>
                                <td>{!! $areainfluenciaHasReligion->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyReligion', $areainfluencia->id, $areainfluenciaHasReligion->id], 'method' => 'delete']) !!}
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

                    <h3>Lenguaje</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeLenguaje', $areainfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('Lenguaje_id', $lenguaje, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Lenguaje', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="areainfluenciaHasLenguajes-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->lenguajes as $areainfluenciaHasLenguaje)
                            <tr>
                                <td>{!! $areainfluenciaHasLenguaje->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyLenguaje', $areainfluencia->id, $areainfluenciaHasLenguaje->id], 'method' => 'delete']) !!}
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

                    <h3>Tradicion</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTradicion', $areainfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('Tradicion_id', $tradicion, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tradicion', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="areaInfluenciaHasTradicions-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->Tradicions as $areaInfluenciaHasTradicion)
                            <tr>
                                <td>{!! $areaInfluenciaHasTradicion->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTradicion', $areainfluencia->id, $areaInfluenciaHasTradicion->id], 'method' => 'delete']) !!}
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


                    <h3>Tipo Fuentes</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoFuentes', $areainfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoFuentes_id', $tipofuentes, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo fuentes', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}


                    <table class="table table-responsive" id="areaInfluenciaHasTipoFuentes-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->tipofuentes as $areaInfluenciaHasTipoFuentes)
                            <tr>
                                <td>{!! $areaInfluenciaHasTipoFuentes->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoFuentes', $areainfluencia->id, $areaInfluenciaHasTipoFuentes->id], 'method' => 'delete']) !!}
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

                    <h3>Peligros</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storePeligros', $areainfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('Peligros_id', $peligros, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Peligro', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="areainfluenciaHasPeligros-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->peligros as $areainfluenciaHasPeligros)
                            <tr>
                                <td>{!! $areainfluenciaHasPeligros->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyPeligros', $areainfluencia->id, $areainfluenciaHasPeligros->id], 'method' => 'delete']) !!}
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


                    <h3>Topologia</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTopologia', $areainfluencia->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('Topologia_id', $topologia, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Topologia', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    <table class="table table-responsive" id="areaInfluenciaHasTopologias-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($areainfluencia->topologia as $areaInfluenciaHasTopologia)
                            <tr>
                                <td>{!! $areaInfluenciaHasTopologia->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTopologia', $areainfluencia->id, $areaInfluenciaHasTopologia->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <a href="{!! route('areainfluencias.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
