@extends('master')
@section('sidebar')
    @include('sidebar.staff')
@stop
@section('content')

<div class="panel panel-default">

    <!-- <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Dispense</a>
        </li>
        <li class=""><a href="#profile" data-toggle="tab">Sales report</a>
        </li>
    </ul> -->

    <div class="panel-heading">
        <h1>Dispensary</h1>
    </div> 
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <form role="form">
                    <div class="col-lg-6 form-group">
                    <label>Patient Name</label>
                    <p>{{$name}}</p>
                    <label>Charges &amp; Medicine</label>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Charges</th>
                            <th>Quantity</th>
                            <th>Unit Price (RM)</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>Consultation fee</td>
                            <td></td>
                            <td>25.00</td>
                        <?php $tot = 0.0 ?>
                        @for($i = 0; $i<count($arr1)-1; $i++)
                        <tr><td>{{$i+2}}</td>
                            <td>{{$arr1[$i]}}</td>
                            <td>{{$arr2[$i]}}</td>
                            <td><?php echo number_format((float)$arr3[$i], 2, '.', ''); ?></td>
                        </tr>
                        <?php $tot+= $arr3[$i]?>
                        @endfor
                        <tr>
                            <td></td>
                            <td>TOTAL</td>
                            <td>RM </td>
                            <td><?php echo number_format((float)$tot, 2, '.', ''); ?></td>
                        </tr>
                        </tbody>
                    </table>
                    Payment method: //tlg letak select list of panels
                    <br><br>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop