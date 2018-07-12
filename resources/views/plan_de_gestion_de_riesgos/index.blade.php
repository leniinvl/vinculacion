@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1 class="pull-left">Planes de Gestión de Riesgos</h1>
  <h1 class="pull-right">
    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('planDeGestionDeRiesgos.create') !!}">Agregar Nuevo</a>
  </h1>
</section>
<div class="content">
  <div class="clearfix"></div>

  @include('flash::message')

  <div class="clearfix"></div>
  <div class="box box-primary">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">Lista</a></li>
      <li role="presentation"><a href="#graph" aria-controls="graph" role="tab" data-toggle="tab">Gráfico</a></li>
      <li role="presentation"><a href="#graph2" aria-controls="graph" role="tab" data-toggle="tab">Gráfico</a></li>
      <li role="presentation"><a href="#graph3" aria-controls="graph" role="tab" data-toggle="tab">Gráfico</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
        <div class="box-body">
          @include('plan_de_gestion_de_riesgos.table')
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="graph">
        <div>{!! $chart->container() !!}</div>
        <div id="container"></div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
        {!! $chart->script() !!}
      </div>

      <div role="tabpanel" class="tab-pane" id="graph2">
        <div>{!! $chart2->container() !!}</div>
        <div id="container"></div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
        {!! $chart2->script() !!}
      </div>

      <div role="tabpanel" class="tab-pane" id="graph3">
        <div>{!! $chart3->container() !!}</div>
        <div id="container"></div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
        {!! $chart3->script() !!}
      </div>


    </div>
  </div>
  <div class="text-center">

  </div>
</div>
@endsection
