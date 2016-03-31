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
                        {!! Form::model($inventory, ['method' => 'PATCH','route' => ['inventory.update', $inventory->id]]) !!}
                        {!! Form::label('', 'Drug Name', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_name', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Low Limit', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_lowlimit', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug Type', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_type', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug Remarks', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_remarks', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug Precaution', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_precaution', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Date of Purchase', ['class' => 'control-label']) !!}
                        {!! Form::input('date','dateOfPurchase', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Form::label('', 'Date of Expiry', ['class' => 'control-label']) !!}
                        {!! Form::input('date','dateOfExpiry', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug Supplier', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_supplier', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Intake Time', ['class' => 'control-label']) !!}
                        {!! Form::text('intakeTime', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Frequency', ['class' => 'control-label']) !!}
                        {!! Form::text('frequency', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Dispense Quantity', ['class' => 'control-label']) !!}
                        {!! Form::text('dispenseQuantity', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug SPU', ['class' => 'control-label']) !!}
                        {!! Form::text('spu', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Units per Pack', ['class' => 'control-label']) !!}
                        {!! Form::text('unitsInPack', null, ['class' => 'form-control']) !!}
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