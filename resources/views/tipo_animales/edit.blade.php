@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Animales
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoAnimales, ['route' => ['tipoAnimales.update', $tipoAnimales->id], 'method' => 'patch']) !!}

                        @include('tipo_animales.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection