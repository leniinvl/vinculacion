@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Riesgos  Has  Origen Ingresos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($planRiesgosHasOrigenIngresos, ['route' => ['planRiesgosHasOrigenIngresos.update', $planRiesgosHasOrigenIngresos->id], 'method' => 'patch']) !!}

                        @include('plan_riesgos__has__origen_ingresos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection