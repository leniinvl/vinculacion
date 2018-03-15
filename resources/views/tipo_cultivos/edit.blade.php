@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo de Cultivos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoCultivos, ['route' => ['tipoCultivos.update', $tipoCultivos->id], 'method' => 'patch']) !!}

                        @include('tipo_cultivos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
