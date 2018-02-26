@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos de Asociación
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoAsociacion, ['route' => ['tipoAsociacions.update', $tipoAsociacion->id], 'method' => 'patch']) !!}

                        @include('tipo_asociacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection