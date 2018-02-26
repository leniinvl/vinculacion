@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos de Agricultura
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoAgricultura, ['route' => ['tipoAgriculturas.update', $tipoAgricultura->id], 'method' => 'patch']) !!}

                        @include('tipo_agriculturas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection