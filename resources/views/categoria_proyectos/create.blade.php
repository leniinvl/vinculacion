@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categoría de Proyecto
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'categoriaProyectos.store']) !!}

                        @include('categoria_proyectos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
