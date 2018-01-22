@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Riesgos  Has  Tipo Animales
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($planRiesgosHasTipoAnimales, ['route' => ['planRiesgosHasTipoAnimales.update', $planRiesgosHasTipoAnimales->id], 'method' => 'patch']) !!}

                        @include('plan_riesgos__has__tipo_animales.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection