@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan De Gestion De Riesgos  Has  Tipo Animales
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'planDeGestionDeRiesgosHasTipoAnimales.store']) !!}

                        @include('plan_de_gestion_de_riesgos__has__tipo_animales.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
