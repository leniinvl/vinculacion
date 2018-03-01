@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Evacuación de Aguas Servidas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($evacuacionAguasServidas, ['route' => ['evacuacionAguasServidas.update', $evacuacionAguasServidas->id], 'method' => 'patch']) !!}

                        @include('evacuacion_aguas_servidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
