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
                    @include('plan_gestion_riesgos.show_fields')
                    <a href="{!! route('planGestionRiesgos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
