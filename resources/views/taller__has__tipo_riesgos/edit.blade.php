@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Taller  Has  Tipo Riesgos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tallerHasTipoRiesgos, ['route' => ['tallerHasTipoRiesgos.update', $tallerHasTipoRiesgos->id], 'method' => 'patch']) !!}

                        @include('taller__has__tipo_riesgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection