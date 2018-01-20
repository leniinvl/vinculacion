@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Taller  Has  Tipo Desecho
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tallerHasTipoDesechos.store']) !!}

                        @include('taller__has__tipo_desechos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
