@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Riesgos  Has  Tipo Agricultura
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($planRiesgosHasTipoAgricultura, ['route' => ['planRiesgosHasTipoAgriculturas.update', $planRiesgosHasTipoAgricultura->id], 'method' => 'patch']) !!}

                        @include('plan_riesgos__has__tipo_agriculturas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection