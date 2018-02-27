@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Planes de Riesgo
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('plan_riesgos.show_fields')

                    <h3>Tipo Cultivos</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoCultivos', $planRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoCultivos_id', $tipocultivos, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Cultivos', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="planRiesgosHasTipoCultivos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planRiesgos->tipocultivos as $planRiesgosHasTipoCultivos)
                            <tr>
                                <td>{!! $planRiesgosHasTipoCultivos->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoCultivos', $planRiesgos->id, $planRiesgosHasTipoCultivos->id], 'method' => 'delete']) !!}
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

                    <h3>Tipo Animales</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoAnimales', $planRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoAnimales_id', $tipoanimales, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Animales', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    <table class="table table-responsive" id="planRiesgosHasTipoAnimales-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planRiesgos->tipoanimales as $planRiesgosHasTipoAnimales)
                            <tr>
                                <td>{!! $planRiesgosHasTipoAnimales->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoAnimales', $planRiesgos->id, $planRiesgosHasTipoAnimales->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <h3>Tipo Alimentos Consumo</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoAlimentosConsumo', $planRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoAlimentosConsumo_id', $tipoalimentosconsumo, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Alimento Consumo', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="tipoAlimentosConsumos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planRiesgos->tipoAlimentosConsumos as $planRiesgosHastipoAlimentosConsumo)
                            <tr>
                                <td>{!! $planRiesgosHastipoAlimentosConsumo->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoAlimentosConsumo', $planRiesgos->id, $planRiesgosHastipoAlimentosConsumo->id], 'method' => 'delete']) !!}
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

                    <h3>Tipo Alimentos</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoAlimentos', $planRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoAlimentos_id', $tipoalimentos, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Alimento', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="planRiesgosHasTipoAlimentos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planRiesgos->tipoalimentos as $planRiesgosHasTipoAlimentos)
                            <tr>
                                <td>{!! $planRiesgosHasTipoAlimentos->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoAlimentos', $planRiesgos->id, $planRiesgosHasTipoAlimentos->id], 'method' => 'delete']) !!}
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


                    <h3>Origen Ingresos</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeOrigenIngresos', $planRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('OrigenIngresos_id', $origeningresos, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Origen Ingresos', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}


                    <table class="table table-responsive" id="planRiesgosHasOrigenIngresos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planRiesgos->origeningresos as $planRiesgosHasOrigenIngresos)
                            <tr>
                                <td>{!! $planRiesgosHasOrigenIngresos->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyOrigenIngresos', $planRiesgos->id, $planRiesgosHasOrigenIngresos->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <h3>Tipo Agricultura</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoAgricultura', $planRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoAgricultura_id', $tipoagricultura, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Agricultura', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="planRiesgosHasTipoAgriculturas-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planRiesgos->TipoAgriculturas as $planRiesgosHasTipoAgricultura)
                            <tr>
                                <td>{!! $planRiesgosHasTipoAgricultura->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoAgricultura', $planRiesgos->id, $planRiesgosHasTipoAgricultura->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <h3>Grupo Alimentos Productos</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeGrupoAlimentosProductos', $planRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('GrupoAlimentosProductos_id', $grupoalimentosproductos, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Grupo Alimentos Productos', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    <table class="table table-responsive" id="planRiesgosHasGrupoAlimentosProductos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planRiesgos->GrupoAlimentosProductos as $planRiesgosHasGrupoAlimentosProductos)
                            <tr>
                                <td>{!! $planRiesgosHasGrupoAlimentosProductos->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyGrupoAlimentosProductos', $planRiesgos->id, $planRiesgosHasGrupoAlimentosProductos->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>



                    <a href="{!! route('planRiesgos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
