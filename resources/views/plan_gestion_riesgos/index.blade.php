@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Plan Gestion Riesgos</h1>
        <h1 class="pull-right">
<<<<<<< HEAD:resources/views/plan_gestion_riesgos/index.blade.php
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('planGestionRiesgos.create') !!}">Add New</a>
=======
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('planDeGestionDeRiesgos.create') !!}">Agregar Nuevo</a>
>>>>>>> upstream/master:resources/views/plan_de_gestion_de_riesgos/index.blade.php
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('plan_gestion_riesgos.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
