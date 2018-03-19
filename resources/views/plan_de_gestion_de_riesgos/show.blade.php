@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan de Gestión de Riesgos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('plan_de_gestion_de_riesgos.show_fields')

                    <h3>Tipo Animales</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoAnimales', $planDeGestionDeRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoAnimales_id', $tipoanimales, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    <table class="table table-responsive" id="planRiesgosHasTipoAnimales-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planDeGestionDeRiesgos->tipoanimales as $planRiesgosHasTipoAnimales)
                            <tr>
                                <td>{!! $planRiesgosHasTipoAnimales->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoAnimales', $planDeGestionDeRiesgos->id, $planRiesgosHasTipoAnimales->id], 'method' => 'delete']) !!}
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

                        {!! Form::open(['route' => ['storeOrigenIngresos', $planDeGestionDeRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('OrigenIngresos_id', $origeningresos, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}


                    <table class="table table-responsive" id="planRiesgosHasOrigenIngresos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planDeGestionDeRiesgos->origeningresos as $planRiesgosHasOrigenIngresos)
                            <tr>
                                <td>{!! $planRiesgosHasOrigenIngresos->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyOrigenIngresos', $planDeGestionDeRiesgos->id, $planRiesgosHasOrigenIngresos->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>

                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <a href="{!! route('planDeGestionDeRiesgos.index') !!}" class="btn btn-default">Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection
