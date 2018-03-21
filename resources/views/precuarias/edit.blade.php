@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pecuaria
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($precuaria, ['route' => ['precuarias.update', $precuaria->id], 'method' => 'patch']) !!}

                        @include('precuarias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection