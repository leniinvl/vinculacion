@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Taller
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tallers.show_fields')

                    <h3>Tipo Desecho</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoDesecho', $taller->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoDesecho_id', $tipodesecho, null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Desecho', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    <table class="table table-responsive" id="tallerHasTipoDesechos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($taller->tipodesechos as $tallerHasTipoDesecho)
                            <tr>
                                <td>{!! $tallerHasTipoDesecho->nombre !!}</td>

                                <td>
                                    {!! Form::open(['route' => ['destroyTipoDesecho', $taller->id, $tallerHasTipoDesecho->id], 'method' => 'delete']) !!}
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

                    <h3>Tipo Riesgo</h3>
                    <div class="form-group col-sm-6">

                        {!! Form::open(['route' => ['storeTipoRiesgos', $taller->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::select('TipoRiesgos_id', $tiporiesgos,null, ['class' => 'form-control']) !!}

                    </div>
                        {!! Form::submit('Agregar Tipo Riesgos', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    <table class="table table-responsive" id="tallerHasTipoRiesgos-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($taller->tiporiesgos as $tallerHasTipoRiesgos)
                            <tr>
                                <td>{!! $tallerHasTipoRiesgos->nombre !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTipoRiesgos', $taller->id, $tallerHasTipoRiesgos->id], 'method' => 'delete']) !!}
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

                    <a href="{!! route('tallers.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
