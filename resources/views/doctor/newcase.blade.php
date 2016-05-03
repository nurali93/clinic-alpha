@extends('master')
@section('sidebar')
    @include('sidebar.doctor')
@stop
@section('content')

<div class="panel panel-body">
    <div class="panel-heading">
        <h4><label>Patient File</label</h4>
        <h5>{{ $data->name }}</h5>
    </div>

    <ul class="nav nav-tabs">
            <li class="active"><a href="#case" data-toggle="tab">Patient Case</a>
            </li>
            <li class=""><a href="#details" data-toggle="tab">Patient Details</a>
            </li>
            <li class=""><a href="#history" data-toggle="tab">Patient History</a>
            </li>
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
                                    <input name= "patientID" type="hidden" value="{{ $data2->id }}" >
                                    
                                    <label>Write case</label>
                                    <textarea class="form-control" name="diagnosis" placeholder="Enter case" rows="6"></textarea>
                                    
                                    <label>Treatment</label>
                                    <textarea class="form-control" name="treatment" placeholder="Enter treatment" rows="3"></textarea>

                                    <br>
                                    <button type="submit" class="btn btn-success">Submit</button>

                                    </div>
                                    <div class="col-lg-6">

                                    <label>Prescription</label>
                                    <a href="#" class="add_field_button">Add Medicine</a>
                                        <!-- <select class="selectpicker" data-live-search="true" name='drug_name[]' multiple data-actions-box="true">
                                            @foreach ($inventory as $inv)
                                                <option>{{ $inv->drug_name }}</option>
                                            @endforeach
                                        </select>
                                        <br> -->
                                        <!-- <div>
                                            <select class="selectpicker form-control" data-live-search="true" name="drug_1">
                                                @foreach ($inventory as $inv)
                                                    <option>{{ $inv->drug_name }}</option>
                                                @endforeach
                                            </select>
                                            <input type="number" class="form-control" name="drug_1_qtt" placeholder="Quantity" min="1" max="5"></input>
                                        </div> -->

                                        <div class="input_fields_wrap">
                                            
                                            <div>
                                                <script type="text/javascript">
                                                        var max_fields      = 5; //maximum input boxes allowed
                                                        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                                                        var add_button      = $(".add_field_button"); //Add button ID
                                                        
                                                        var x = 0; //initlal text box count
                                                        $(add_button).click(function(e){ //on add input button click
                                                            e.preventDefault();
                                                            if(x < max_fields){ //max input box allowed
                                                                x++; //text box increment
                                                                $(wrapper).append('<div>'
                                                                    + '<select class="selectpicker form-control" data-live-search="true" name="drug_' + x + '">'
                                                                    + '@foreach ($inventory as $inv)<option>{{ $inv->drug_name }}</option>@endforeach</select>'
                                                                    + '<input type="number" class="form-control" name="drug_' + x + '_qtt" placeholder="Quantity" min="1" max="5"></input>'
                                                                    + '<a href="#" class="remove_field">Remove</a>'
                                                                    + '<input name= "xy" type="hidden" value='+x+' >'
                                                                    + '</div>'); //add input box

                                                                $(".selectpicker").selectpicker();

                                                            }
                                                        });
                                                        
                                                        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                                                            e.preventDefault(); $(this).parent('div').remove(); x--;
                                                        })
                                                </script>
                                            </div>
                                        </div>
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
                    <p class="form-control-static">
                        No previous record
                    
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->

@stop
