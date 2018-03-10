@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipoproduccion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoproduccion, ['route' => ['tipoproduccions.update', $tipoproduccion->id], 'method' => 'patch']) !!}

                        @include('tipoproduccions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection