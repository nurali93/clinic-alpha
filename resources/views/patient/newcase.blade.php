@extends('master')
@section('sidebar')
    @include('sidebar.doctor')
@stop
@section('content')

<div class="panel panel-body">
    <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Patient Case</a>
            </li>
            <li class=""><a href="#profile" data-toggle="tab">Patient Details</a>
            </li>
            <li class=""><a href="#messages" data-toggle="tab">Patient History</a>
            </li>
            <!-- <li class=""><a href="#settings" data-toggle="tab">Empty</a>
            </li> -->
        </ul>

    <!-- <div class="row">
        <div class="col-lg-12">
            <form role="form">
                <div class="form-group">
                    <div class="col-lg-6">
                        <label>Patient Name</label>
                        <p class="form-control-static">Abdullah Ahmad</p>
                        <label>Patient ID</label>
                        <p class="form-control-static">215</p>
                        <label>Write case</label>
                        <textarea class="form-control" name="name" placeholder="Enter case" rows="6"></textarea>
                        <label>Treatment</label>
                        <textarea class="form-control" name="name" placeholder="Enter treatment" rows="3"></textarea>
                        <div class="form-group">
                        <label>Medicine (CTRL+click to select more than 1)</label>
                        <select multiple="" class="form-control">
                            <option>Paracetamol</option>
                            <option>Paracetamol</option>
                            <option>Paracetamol</option>
                            <option>Paracetamol</option>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-12">
                <div class="form-group">
                    <div class="col-lg-6">
                        {!! Form::open(array('action' => 'CaseController@store')) !!}
                        {!! Form::label('', 'Patient Name', ['class' => 'control-label']) !!}
                        {!! Form::text('pt_name', null, ['class' => 'form-control']) !!}
                        {!! Form::label('', 'Diagnosis', ['class' => 'control-label']) !!}
                        {!! Form::textarea('diagnosis', null, ['class' => 'form-control']) !!}
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
    <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->

@stop