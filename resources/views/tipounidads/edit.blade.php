@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipounidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipounidad, ['route' => ['tipounidads.update', $tipounidad->id], 'method' => 'patch']) !!}

                        @include('tipounidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection