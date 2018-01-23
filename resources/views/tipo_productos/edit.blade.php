@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Producto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoProducto, ['route' => ['tipoProductos.update', $tipoProducto->id], 'method' => 'patch']) !!}

                        @include('tipo_productos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection