@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Recirculación de Aire
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($recirculacionAire, ['route' => ['recirculacionAires.update', $recirculacionAire->id], 'method' => 'patch']) !!}

                        @include('recirculacion_aires.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection