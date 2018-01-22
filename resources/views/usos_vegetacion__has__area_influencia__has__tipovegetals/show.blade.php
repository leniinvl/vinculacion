@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('usos_vegetacion__has__area_influencia__has__tipovegetals.show_fields')
                    <a href="{!! route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
