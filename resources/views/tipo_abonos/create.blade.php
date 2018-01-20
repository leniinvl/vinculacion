@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Abono
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoAbonos.store']) !!}

                        @include('tipo_abonos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
