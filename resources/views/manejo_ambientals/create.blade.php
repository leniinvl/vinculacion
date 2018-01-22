@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manejo Ambiental
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'manejoAmbientals.store']) !!}

                        @include('manejo_ambientals.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
