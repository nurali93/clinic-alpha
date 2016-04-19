@extends('master')
@section('sidebar')
    @include('sidebar.staff')
@stop
@section('content')

<div class="panel panel-body">
    <div class="row">
        <div class="col-lg-12">
                <div class="form-group">
                    <div class="col-lg-6">
                        {!! Form::model($panel, ['method' => 'PATCH','route' => ['panel.update', $panel->id]]) !!}
                        {!! Form::label('', 'Panel Name', ['class' => 'control-label']) !!}
                        {!! Form::text('p_company', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Contact Person', ['class' => 'control-label']) !!}
                        {!! Form::text('p_contactname', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Contact No', ['class' => 'control-label']) !!}
                        {!! Form::text('p_telno', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Extension', ['class' => 'control-label']) !!}
                        {!! Form::text('p_ext', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Fax', ['class' => 'control-label']) !!}
                        {!! Form::text('p_fax', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Form::label('', 'Email address', ['class' => 'control-label']) !!}
                        {!! Form::text('p_email', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Company Address', ['class' => 'control-label']) !!}
                        {!! Form::text('p_address', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Postcode', ['class' => 'control-label']) !!}
                        {!! Form::text('p_postcode', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'City', ['class' => 'control-label']) !!}
                        {!! Form::text('p_city', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'State', ['class' => 'control-label']) !!}
                        {!! Form::text('p_state', null, ['class' => 'form-control']) !!}
                    </div>
                </div>    
                  
        </div>
    </div>
    <div class="row">
        <br>
        <div class="col-md-12">
                        &nbsp&nbsp&nbsp
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!} 
        </div>
</div>
<!-- /.panel-body -->

@stop