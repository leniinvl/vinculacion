@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Topología
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($topologia, ['route' => ['topologias.update', $topologia->id], 'method' => 'patch']) !!}

                        @include('topologias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection