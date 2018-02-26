@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asociaciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($asociacion, ['route' => ['asociacions.update', $asociacion->id], 'method' => 'patch']) !!}

                        @include('asociacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection