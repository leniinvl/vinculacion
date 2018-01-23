@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Caracteristicas Etnicas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($caracteristicasEtnicas, ['route' => ['caracteristicasEtnicas.update', $caracteristicasEtnicas->id], 'method' => 'patch']) !!}

                        @include('caracteristicas_etnicas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection