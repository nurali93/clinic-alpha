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

    <div class="row">
        <div class="col-lg-12">
            <form role="form" action='/record/store' method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <div class="col-lg-6">
                        <label>Patient Name</label>
                        <p class="form-control-static">{{$data->name}}</p>
                        <label>Patient Identification Card</label>
                        <p class="form-control-static">{{$data->pt_ic}}</p>
                        <label>Patient ID</label>
                        <p class="form-control-static">{{$data2->id}}</p>
                        <input name= "patientID" type="hidden" value="{{$data2->id}}" >
                        
                        <label>Write case</label>
                        <textarea class="form-control" name="diagnosis" placeholder="Enter case" rows="6"></textarea>
                        
                        <label>Treatment</label>
                        <textarea class="form-control" name="med" placeholder="Enter treatment" rows="3"></textarea>

                        <label>Medicine (CTRL+click to select more than 1)</label>
                        <select multiple="multiple" name='drug_name' class='form-control'>
                            @foreach ($inventory as $inv)
                            <option>{{ $inv->drug_name }}</option>
                            @endforeach
                        </select>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-6 (nested) -->
    </div>
    <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->

@stop
