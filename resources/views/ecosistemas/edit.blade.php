@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ecosistema
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ecosistema, ['route' => ['ecosistemas.update', $ecosistema->id], 'method' => 'patch']) !!}

                        @include('ecosistemas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection