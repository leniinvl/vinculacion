@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan Riesgos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($planRiesgos, ['route' => ['planRiesgos.update', $planRiesgos->id], 'method' => 'patch']) !!}

                        @include('plan_riesgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection