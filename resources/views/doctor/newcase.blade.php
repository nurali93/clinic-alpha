@extends('master')
@section('sidebar')
    @include('sidebar.doctor')
@stop
@section('content')

<div class="panel panel-body">
    <div class="panel-heading">
        <h4><label>Patient Name</label</h4>
        <h5>&nbsp{{ $data->name }}</h5><br>
    </div>

    <ul class="nav nav-tabs">
            <li class="active"><a href="#case" data-toggle="tab">Patient Case</a>
            </li>
            <li class=""><a href="#details" data-toggle="tab">Patient Details</a>
            </li>
            <li class=""><a href="#history" data-toggle="tab">Patient History</a>
            </li>
            <!-- <li class=""><a href="#settings" data-toggle="tab">Empty</a>
            </li> -->
        </ul>


    <div class="tab-content">
            <div class="tab-pane fade active in" id="case">    
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action='/record/store' method="POST">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label>Patient ID</label>
                                    <p class="form-control-static">{{$data2->id}}</p>
                                    <input name= "patientID" type="hidden" value="{{$data2->id}}" >
                                    
                                    <label>Write case</label>
                                    <textarea class="form-control" name="diagnosis" placeholder="Enter case" rows="6"></textarea>
                                    
                                    <label>Treatment</label>
                                    <textarea class="form-control" name="treatment" placeholder="Enter treatment" rows="3"></textarea>

                                    <label>Medicine</label>
                                        <br>
                                        <select class="selectpicker" data-live-search="true" name='drug_name' multiple data-actions-box="true">
                                            @foreach ($inventory as $inv)
                                                <option>{{ $inv->drug_name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <br>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
        </div>
        <div class="tab-pane fade" id="details">
            <div class="row">
                <div class="col-lg-12">
                <div class="col-lg-6">
                <br>
                <label>Patient Identification No/Passport ID</label>
                <p class="form-control-static">{{ $data2->pt_ic }}</p>
                <label>Contact No</label>
                <p class="form-control-static">{{ $data2->pt_contactNo }}</p>
                <label>Address</label>
                <p class="form-control-static">{{ $data2->pt_address }}</p>
                </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="history">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                    <br>
                    <label>Patient Past Visits</label>
                    <p class="form-control-static">{{ $data2->pt_ic }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->

@stop
