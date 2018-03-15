@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan de Gestión de Riesgos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('plan_de_gestion_de_riesgos.show_fields')
                    <a href="{!! route('planDeGestionDeRiesgos.index') !!}" class="btn btn-default">Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection
