@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manejo Ambiental
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($manejoAmbiental, ['route' => ['manejoAmbientals.update', $manejoAmbiental->id], 'method' => 'patch']) !!}

                        @include('manejo_ambientals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection