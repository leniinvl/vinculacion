@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usosVegetacionHasAreaInfluenciaHasTipovegetal, ['route' => ['usosVegetacionHasAreaInfluenciaHasTipovegetals.update', $usosVegetacionHasAreaInfluenciaHasTipovegetal->id], 'method' => 'patch']) !!}

                        @include('usos_vegetacion__has__area_influencia__has__tipovegetals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection