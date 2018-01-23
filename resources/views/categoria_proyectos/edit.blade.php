@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categoria Proyecto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoriaProyecto, ['route' => ['categoriaProyectos.update', $categoriaProyecto->id], 'method' => 'patch']) !!}

                        @include('categoria_proyectos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection