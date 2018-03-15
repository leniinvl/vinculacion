@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Origen de Ingresos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($origenIngresos, ['route' => ['origenIngresos.update', $origenIngresos->id], 'method' => 'patch']) !!}

                        @include('origen_ingresos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
