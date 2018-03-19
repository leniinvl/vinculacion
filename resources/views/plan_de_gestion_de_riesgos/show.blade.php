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
                <h5>
                    Tipos de Animales
                </h5>
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
                            <th>
                                Nombre
                            </th>
                            <th colspan="3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($planDeGestionDeRiesgos->tipoanimales as $planRiesgosHasTipoAnimales)
                        <tr>
                            <td>
                                {!! $planRiesgosHasTipoAnimales->nombre !!}
                            </td>
                            <td>
                                {!! Form::open(['route' => ['destroyTipoAnimales', $planDeGestionDeRiesgos->id, $planRiesgosHasTipoAnimales->id], 'method' => 'delete']) !!}
                                <div class="btn-group">
                                    {!! Form::button('
                                    <i class="glyphicon glyphicon-trash">
                                    </i>
                                    ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>
                    Orígen de Ingresos
                </h5>
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
                            <th>
                                Nombre
                            </th>
                            <th colspan="3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($planDeGestionDeRiesgos->origeningresos as $planRiesgosHasOrigenIngresos)
                        <tr>
                            <td>
                                {!! $planRiesgosHasOrigenIngresos->nombre !!}
                            </td>
                            <td>
                                {!! Form::open(['route' => ['destroyOrigenIngresos', $planDeGestionDeRiesgos->id, $planRiesgosHasOrigenIngresos->id], 'method' => 'delete']) !!}
                                <div class="btn-group">
                                    {!! Form::button('
                                    <i class="glyphicon glyphicon-trash">
                                    </i>
                                    ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>
                    Agricultura
                </h5>
                <div class="form-group col-sm-6">
                    {!! Form::open(['route' => ['storeAgriculturas', $planDeGestionDeRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('agricultura_id', $agriculturas, null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                <table class="table table-responsive" id="planRiesgosHasAgriculturas-table">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th colspan="3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($planDeGestionDeRiesgos->agriculturas as $planRiesgosHasAgriculturas)
                        <tr>
                            <td>
                                {!! $planRiesgosHasAgriculturas->nombre !!}
                            </td>
                            <td>
                                {!! Form::open(['route' => ['destroyAgriculturas', $planDeGestionDeRiesgos->id, $planRiesgosHasAgriculturas  ->id], 'method' => 'delete']) !!}
                                <div class="btn-group">
                                    {!! Form::button('
                                    <i class="glyphicon glyphicon-trash">
                                    </i>
                                    ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>
                    Amenazas
                </h5>
                <div class="form-group col-sm-6">
                    {!! Form::open(['route' => ['storeAmenazas', $planDeGestionDeRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('amenazas_id', $amenazas, null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                <table class="table table-responsive" id="planRiesgosHasAmenazas-table">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th colspan="3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($planDeGestionDeRiesgos->amenazas as $planRiesgosHasAmenazas)
                        <tr>
                            <td>
                                {!! $planRiesgosHasAmenazas->nombre !!}
                            </td>
                            <td>
                                {!! Form::open(['route' => ['destroyAmenazas', $planDeGestionDeRiesgos->id, $planRiesgosHasAmenazas->id], 'method' => 'delete']) !!}
                                <div class="btn-group">
                                    {!! Form::button('
                                    <i class="glyphicon glyphicon-trash">
                                    </i>
                                    ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>
                    Vulnerabilidades
                </h5>
                <div class="form-group col-sm-6">
                    {!! Form::open(['route' => ['storeVulnerabilidades', $planDeGestionDeRiesgos->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('vulnerabilidades_id', $vulnerabilidades, null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                <table class="table table-responsive" id="planRiesgosHasVulnerabilidades-table">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th colspan="3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($planDeGestionDeRiesgos->vulnerabilidades as $planRiesgosHasVulnerabilidades)
                        <tr>
                            <td>
                                {!! $planRiesgosHasVulnerabilidades->nombre !!}
                            </td>
                            <td>
                                {!! Form::open(['route' => ['destroyVulnerabilidades', $planDeGestionDeRiesgos->id, $planRiesgosHasVulnerabilidades->id], 'method' => 'delete']) !!}
                                <div class="btn-group">
                                    {!! Form::button('
                                    <i class="glyphicon glyphicon-trash">
                                    </i>
                                    ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-default" href="{!! route('planDeGestionDeRiesgos.index') !!}">
                    Atrás
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
