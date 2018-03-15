@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Gestion Riesgos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
<<<<<<< HEAD:resources/views/plan_gestion_riesgos/show.blade.php
                    @include('plan_gestion_riesgos.show_fields')
                    <a href="{!! route('planGestionRiesgos.index') !!}" class="btn btn-default">Back</a>
=======
                    @include('plan_de_gestion_de_riesgos.show_fields')
                    <a href="{!! route('planDeGestionDeRiesgos.index') !!}" class="btn btn-default">Atrás</a>
>>>>>>> upstream/master:resources/views/plan_de_gestion_de_riesgos/show.blade.php
                </div>
            </div>
        </div>
    </div>
@endsection
