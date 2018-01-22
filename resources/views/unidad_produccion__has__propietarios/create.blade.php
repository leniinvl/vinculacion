@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Unidad Produccion  Has  Propietario
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'unidadProduccionHasPropietarios.store']) !!}

                        @include('unidad_produccion__has__propietarios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
