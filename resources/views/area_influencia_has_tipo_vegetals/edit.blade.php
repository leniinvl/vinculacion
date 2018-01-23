@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area Influencia Has Tipo Vegetal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($areaInfluenciaHasTipoVegetal, ['route' => ['areaInfluenciaHasTipoVegetals.update', $areaInfluenciaHasTipoVegetal->id], 'method' => 'patch']) !!}

                        @include('area_influencia_has_tipo_vegetals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection