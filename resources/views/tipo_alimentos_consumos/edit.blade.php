@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos de Alimentos de Consumo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoAlimentosConsumo, ['route' => ['tipoAlimentosConsumos.update', $tipoAlimentosConsumo->id], 'method' => 'patch']) !!}

                        @include('tipo_alimentos_consumos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection