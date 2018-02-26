@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Consolidación de Área de Influencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($consolidacionAreaInfluencia, ['route' => ['consolidacionAreaInfluencias.update', $consolidacionAreaInfluencia->id], 'method' => 'patch']) !!}

                        @include('consolidacion_area_influencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection