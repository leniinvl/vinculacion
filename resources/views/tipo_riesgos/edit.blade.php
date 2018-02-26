@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos de Riesgo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoRiesgos, ['route' => ['tipoRiesgos.update', $tipoRiesgos->id], 'method' => 'patch']) !!}

                        @include('tipo_riesgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection