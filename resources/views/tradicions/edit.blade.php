@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tradiciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tradicion, ['route' => ['tradicions.update', $tradicion->id], 'method' => 'patch']) !!}

                        @include('tradicions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection