@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Abastecimientoagua
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($abastecimientoagua, ['route' => ['abastecimientoaguas.update', $abastecimientoagua->id], 'method' => 'patch']) !!}

                        @include('abastecimientoaguas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection