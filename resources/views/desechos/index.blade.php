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
            <div class="box-body">
                    @include('desechos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

    {!! Form::label('peso', 'Total kg desechos generados:') !!}
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
            document.getElementById("total").innerHTML=suma;
        }
        else{
            document.getElementById("total").innerHTML=0
        }
        
        //totalfinal.value.innerHTML;

        //alert(totalfinal.value);

        
</script>

@endsection