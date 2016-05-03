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
                        {!! Form::open(array('action' => 'InvController@store')) !!}
                        {!! Form::label('', 'Drug Name', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_name', null, ['class' => 'form-control']) !!}
                        @if($errors->has('drug_name'))
                                {{ $errors->first('drug_name') }}<br>
                        @endif

                        {!! Form::label('', 'Low Limit', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_lowlimit', null, ['class' => 'form-control']) !!}
                        @if($errors->has('drug_lowlimit'))
                                {{ $errors->first('drug_lowlimit') }}<br>
                        @endif
                        
                        {!! Form::label('', 'Drug Type', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_type', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug Remarks', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_remarks', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug Precaution', ['class' => 'control-label']) !!}
                        {!! Form::text('drug_precaution', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Date of Purchase', ['class' => 'control-label']) !!}
                        {!! Form::input('date','dateOfPurchase', null, ['class' => 'form-control']) !!}
                        @if($errors->has('dateOfPurchase'))
                                {{ $errors->first('dateOfPurchase') }}<br>
                        @endif
                        
                        {!! Form::label('', 'Date of Expiry', ['class' => 'control-label']) !!}
                        {!! Form::input('date','dateOfExpiry', null, ['class' => 'form-control']) !!}
                        @if($errors->has('dateOfExpiry'))
                                {{ $errors->first('dateOfExpiry') }}<br>
                        @endif
                        
                        </div>
                        <div class="col-lg-6">
                        {!! Form::label('', 'Drug Supplier', ['class' => 'control-label']) !!}
                            <select name='drug_supplier' class='form-control'>
                                @foreach ($supplier as $supp)
                                <!-- <option>{{ $supp->id }}</option> -->
                                <option>{{ $supp->supp_name }}</option>
                                @endforeach
                            </select>
                        @if($errors->has('drug_supplier'))
                                {{ $errors->first('drug_supplier') }}<br>
                        @endif
                        
                        {!! Form::label('', 'Intake Time', ['class' => 'control-label']) !!}
                        {!! Form::text('intakeTime', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Frequency', ['class' => 'control-label']) !!}
                        {!! Form::text('frequency', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Drug SPU', ['class' => 'control-label']) !!}
                        {!! Form::text('spu', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Units on Hand', ['class' => 'control-label']) !!}
                        {!! Form::text('unitsOnHand', null, ['class' => 'form-control']) !!}
                        @if($errors->has('unitsOnHand'))
                                {{ $errors->first('unitsOnHand') }}<br>
                        @endif
                        
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