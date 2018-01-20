@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trabajadores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($trabajadores, ['route' => ['trabajadores.update', $trabajadores->id], 'method' => 'patch']) !!}

                        @include('trabajadores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection