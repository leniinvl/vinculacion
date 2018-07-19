@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipousuarios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipousuarios, ['route' => ['tipousuarios.update', $tipousuarios->id], 'method' => 'patch']) !!}

                        @include('tipousuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection