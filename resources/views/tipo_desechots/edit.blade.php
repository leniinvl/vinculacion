@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Desechos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoDesechot, ['route' => ['tipoDesechots.update', $tipoDesechot->id], 'method' => 'patch']) !!}

                        @include('tipo_desechots.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection