@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area Influencia Has Tipo Fuentes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($areaInfluenciaHasTipoFuentes, ['route' => ['areaInfluenciaHasTipoFuentes.update', $areaInfluenciaHasTipoFuentes->id], 'method' => 'patch']) !!}

                        @include('area_influencia_has_tipo_fuentes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection