@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan De Gestion De Riesgos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'planDeGestionDeRiesgos.store']) !!}

                        @include('plan_de_gestion_de_riesgos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
