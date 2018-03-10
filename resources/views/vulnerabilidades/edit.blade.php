@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vulnerabilidades
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vulnerabilidades, ['route' => ['vulnerabilidades.update', $vulnerabilidades->id], 'method' => 'patch']) !!}

                        @include('vulnerabilidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection