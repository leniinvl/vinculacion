@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Tipos de Desecho</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('tipodesechos.create') !!}">Agregar Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">Lista</a></li>
                @if (!empty($chart) and  !empty($chart->datasets))<li role="presentation"><a href="#graph" aria-controls="graph" role="tab" data-toggle="tab">Graficos</a></li>@endif
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="list">
                    <div class="box-body">
                            @include('tipodesechos.table')
                    </div>
                </div>
                 @if (!empty($chart) and  !empty($chart->datasets))
                <div role="tabpanel" class="tab-pane" id="graph">
                    <div>{!! $chart->container() !!}</div>
                    <div id="container"></div>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
                    {!! $chart->script() !!}
                </div>
                @endif
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

