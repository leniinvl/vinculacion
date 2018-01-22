@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Propietario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($propietario, ['route' => ['propietarios.update', $propietario->id], 'method' => 'patch']) !!}

                        @include('propietarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection