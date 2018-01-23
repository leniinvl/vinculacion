@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Calidad Aire
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($calidadAire, ['route' => ['calidadAires.update', $calidadAire->id], 'method' => 'patch']) !!}

                        @include('calidad_aires.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection