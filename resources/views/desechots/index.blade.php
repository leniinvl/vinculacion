@extends('layouts.app')

@section('content') 
    <section class="content-header">
        <h1 class="pull-left">Desechos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('desechots.create') !!}">Agregar Nuevo</a>
        </h1>
    </section>
    <section>
    <a href="{{ route('desechotsHTMLPDF',['descargar'=>'pdf']) }}" target="_blank" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px">Ver PDF</a>
    </section>


    {!! Form::open(['route' => 'desechots.index', 'method' => 'GET','class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
        <div class="form-group">
            {!! Form::label('peso', 'Fecha Inicio:') !!}
            {!! Form::date('date1',null, ['class' => 'form-control','placeholder'=>'Fecha Inicio']) !!}
            {!! Form::label('peso', 'Fecha Fin:') !!}
            {!! Form::date('date2', null, ['class' => 'form-control']) !!}
            {!! Form::select('name', $taller ,null, ['class' => 'form-control', 'placeholder'=>'Selecciona un Taller']) !!}
        </div> 
        <button type="submit" class="btn btn-default">Buscar</button>
    {!! Form::close() !!}


    <div class="content">
        <div class="clearfix"></div>

            @include('flash::message')

            <div class="clearfix"></div>
                <div class="box box-primary">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">Lista</a></li>
                            {{--@if (!empty($chart) and  !empty($chart->datasets))
                            <li role="presentation"><a href="#graph" aria-controls="graph" role="tab" data-toggle="tab">Gráfico</a></li>
                            @endif--}}
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="list">
                                <div class="box-body">
                                        @include('desechots.table')
                                </div>
                            </div>
                            <p>.</p>
                            <p>.</p>
                            @if (!empty($chart) and !empty($chart->datasets))
                                <div role="tabpanel" class="tab-pane" id="graph">
                                        <div>{!! $chart->container() !!}</div>
                                        <div id="container"></div>
                                        {!! $chart->script() !!}
                                </div>
                            @endif
                        </div>

                </div>
            <div class="text-center">
            </div>
            </div>
        
        </div>
    </div>
    
@endsection

