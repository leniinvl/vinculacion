@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Control Plaga
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoControlPlagas.store']) !!}

                        @include('tipo_control_plagas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
