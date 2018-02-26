@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo de Alimentos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoAlimentos, ['route' => ['tipoAlimentos.update', $tipoAlimentos->id], 'method' => 'patch']) !!}

                        @include('tipo_alimentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection