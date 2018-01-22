@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Precipitaciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($precipitaciones, ['route' => ['precipitaciones.update', $precipitaciones->id], 'method' => 'patch']) !!}

                        @include('precipitaciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection