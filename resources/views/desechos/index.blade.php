@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Desechos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('desechos.create') !!}">Agregar Nuevo</a>
        </h1>
    </section>


        {!! Form::open(['route' => 'desechos.index', 'method' => 'GET','class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
          <div class="form-group">
            {!! Form::label('peso', 'Fecha Inicio:') !!}
            {!! Form::date('date1',null, ['class' => 'form-control','placeholder'=>'Fecha Inicio']) !!}
            {!! Form::label('peso', 'Fecha Fin:') !!}
            {!! Form::date('date2', null, ['class' => 'form-control']) !!}
            {!! Form::select('name', $biodigestor ,null, ['class' => 'form-control', 'placeholder'=>'Selecciona un Biodigestor']) !!}
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
                @if (!empty($chart) and  !empty($chart->datasets))<li role="presentation"><a href="#graph" aria-controls="graph" role="tab" data-toggle="tab">Gráfico</a></li>@endif
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="list">
                    <div class="box-body">
                        @include('desechos.table')
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


    <label id="total">


@endsection

@section('scripts')
<script>
     var peso = new Array();
     var cont_peso=0;
     var total=0;

     var datos = document.getElementById('desechos-table').getElementsByTagName('td');

     for(var i=0;i<datos.length;i++){
        //console.log(datos[i]);
        if(((i-1)%5)==0){
            peso[cont_peso]=datos[i].innerHTML;
            cont_peso++;
        }
    }
        var suma=(new Function("return " +peso.join('+')))();

        //document.getElementsByName("test").value = 'suma';

        if(suma!=undefined)
        {
            document.getElementById("total").innerHTML="Total desechos generados: "+suma+" kg";
        }
        else{
            document.getElementById("total").innerHTML=""
        }

        //totalfinal.value.innerHTML;

        //alert(totalfinal.value);


</script>

@endsection
