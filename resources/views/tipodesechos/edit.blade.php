@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo de Desecho
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipodesecho, ['route' => ['tipodesechos.update', $tipodesecho->id], 'method' => 'patch']) !!}

                        @include('tipodesechos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection