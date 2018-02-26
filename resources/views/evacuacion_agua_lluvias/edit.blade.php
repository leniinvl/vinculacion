@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Evacuación de Agua de Lluvia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($evacuacionAguaLluvia, ['route' => ['evacuacionAguaLluvias.update', $evacuacionAguaLluvia->id], 'method' => 'patch']) !!}

                        @include('evacuacion_agua_lluvias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection