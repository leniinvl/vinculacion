@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Biodigestor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($biodigestor, ['route' => ['biodigestors.update', $biodigestor->id], 'method' => 'patch']) !!}

                        @include('biodigestors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection