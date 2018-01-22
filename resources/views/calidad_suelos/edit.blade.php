@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Calidad Suelo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($calidadSuelo, ['route' => ['calidadSuelos.update', $calidadSuelo->id], 'method' => 'patch']) !!}

                        @include('calidad_suelos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection