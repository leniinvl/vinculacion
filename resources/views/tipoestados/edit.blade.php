@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipoestado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoestado, ['route' => ['tipoestados.update', $tipoestado->id], 'method' => 'patch']) !!}

                        @include('tipoestados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection