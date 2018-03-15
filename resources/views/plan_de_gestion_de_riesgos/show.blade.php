@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan De Gestion De Riesgos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('plan_de_gestion_de_riesgos.show_fields')
                    <a href="{!! route('planDeGestionDeRiesgos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
