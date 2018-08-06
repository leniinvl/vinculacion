@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipousuario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipousuario, ['route' => ['tipousuarios.update', $tipousuario->id], 'method' => 'patch']) !!}

                        @include('tipousuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection