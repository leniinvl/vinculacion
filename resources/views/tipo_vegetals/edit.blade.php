@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Vegetal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoVegetal, ['route' => ['tipoVegetals.update', $tipoVegetal->id], 'method' => 'patch']) !!}

                        @include('tipo_vegetals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection