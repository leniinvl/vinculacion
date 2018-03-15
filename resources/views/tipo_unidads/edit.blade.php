@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo de Unidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoUnidad, ['route' => ['tipoUnidads.update', $tipoUnidad->id], 'method' => 'patch']) !!}

                        @include('tipo_unidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
