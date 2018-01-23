@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Desecho
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoDesecho, ['route' => ['tipoDesechos.update', $tipoDesecho->id], 'method' => 'patch']) !!}

                        @include('tipo_desechos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection