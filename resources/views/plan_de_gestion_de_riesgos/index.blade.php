@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1 class="pull-left">Planes de Gestión de Riesgos</h1>
  <h1 class="pull-right">
    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('planDeGestionDeRiesgos.create') !!}">Agregar Nuevo</a>
  </h1>
</section>
<section>
    <a href="{{ route('planGestionRiesgosHTMLPDF',['descargar'=>'pdf']) }}" target="_blank" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px">Ver PDF</a>
    </section>
<div class="content">
  <div class="clearfix"></div>

  @include('flash::message')

  <div class="clearfix"></div>
  <div class="box box-primary">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">Lista</a></li>
      @if (!empty($chart) and  !empty($chart->datasets))
      <li role="presentation"><a href="#graph" aria-controls="graph" role="tab" data-toggle="tab">Gráfico</a></li>
      @endif
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
        <div class="box-body">
          @include('plan_de_gestion_de_riesgos.table')
        </div>
      </div>
      @if (!empty($chart) and  !empty($chart->datasets))
      <div role="tabpanel" class="tab-pane" id="graph">

        {!! Form::open(['route' => 'planDeGestionDeRiesgos.index', 'method' => 'GET','class' => 'navbar-form navbar-left pull-right', 'role' => 'search', 'id' => 'plangestionForm']) !!}
                        <div class="form-group">
                          {!! Form::select('selectPlanGestion', ['Tipos de abonos','Tipos de control de plaga','Tipos de cultivo'] ,null, ['class' => 'form-control', 'placeholder'=>'Seleccione un parámetro', 'id' => 'mySelect']) !!}
                        </div>

        {!! Form::close() !!}



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

@section('scripts')
<script>

    $('#mySelect').change(function(e) {

        $( "#plangestionForm" ).submit();
        e.preventDefault();
   });

</script>
@endsection
