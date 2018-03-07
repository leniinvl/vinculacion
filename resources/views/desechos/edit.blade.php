@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desecho
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($desecho, ['route' => ['desechos.update', $desecho->id], 'method' => 'patch']) !!}

                        @include('desechos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection