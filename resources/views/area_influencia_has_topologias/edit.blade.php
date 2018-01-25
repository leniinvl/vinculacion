@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Area Influencia Has Topologia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($areaInfluenciaHasTopologia, ['route' => ['areaInfluenciaHasTopologias.update', $areaInfluenciaHasTopologia->id], 'method' => 'patch']) !!}

                        @include('area_influencia_has_topologias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection