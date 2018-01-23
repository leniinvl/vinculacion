@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Terreno
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoTerreno, ['route' => ['tipoTerrenos.update', $tipoTerreno->id], 'method' => 'patch']) !!}

                        @include('tipo_terrenos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection