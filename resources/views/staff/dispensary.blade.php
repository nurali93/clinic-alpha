@extends('master')
@section('content')

<div class="panel panel-default">

    <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Dispense</a>
            </li>
            <li class=""><a href="#profile" data-toggle="tab">Sales report</a>
            </li>
            <li class=""><a href="#messages" data-toggle="tab"></a>
            </li>
            <!-- <li class=""><a href="#settings" data-toggle="tab">Empty</a>
            </li> -->
    </ul>

    <div class="panel-heading">
        Dispensary
    </div> 
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <form role="form">
                    <div class="form-group">
                        <label>Patient Name</label>
                        <select class="form-control">
                            <option>Abdullah Ahmad</option>
                            <option>Siti Nordiyana</option>
                            <option>Wong Mei Lee</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Treatment</label>
                        <p class="form-control-static">Standard Checkup</p>
                        <label>Prescribe Medicine</label>
                        <p class="form-control-static">Paracetamol</p>
                        <label>Total</label>
                        <p class="form-control-static">RM 10.00</p>
                    </div>


                    <div class="form-group">
                        <label>Payment</label>
                        <select class="form-control">
                            <option>Cash</option>
                            <option>Credit</option>
                            <option>Panel</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop