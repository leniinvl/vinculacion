@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipoanimales
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoanimales, ['route' => ['tipoanimales.update', $tipoanimales->id], 'method' => 'patch']) !!}

                        @include('tipoanimales.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection