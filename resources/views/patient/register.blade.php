@extends('master')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Registration</h1>
    </div>
    
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">New</a>
            </li>
            <li class=""><a href="#profile" data-toggle="tab">Existing</a>
            </li>
            <!-- <li class=""><a href="#messages" data-toggle="tab">Empty</a>
            </li>
            <li class=""><a href="#settings" data-toggle="tab">Empty</a>
            </li> -->
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active in" id="home">
                <h4>New Patient</h4>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                        
                            {!! Form::open(array('action' => 'PatientController@store')) !!}
                        <div class="form-group">
                            {!! Form::label('', 'Registration No', ['class' => 'control-label']) !!}
                            {!! Form::text('pt_regno', null, ['class' => 'form-control']) !!}
                            {!! Form::label('', 'IC Number', ['class' => 'control-label']) !!}
                            {!! Form::text('pt_ic', null, ['class' => 'form-control']) !!}
                            {!! Form::label('', 'Name', ['class' => 'control-label']) !!}
                            {!! Form::text('pt_name', null, ['class' => 'form-control']) !!}
                            {!! Form::label('', 'Contact No', ['class' => 'control-label']) !!}
                            {!! Form::text('pt_contactNo', null, ['class' => 'form-control']) !!}
                            {!! Form::label('pt_dob', 'Date of Birth', ['class' => 'control-label']) !!}
                            {!! Form::input('date','pt_dob', null, ['class' => 'form-control']) !!}
                            {!! Form::label('', 'Gender', ['class' => 'control-label']) !!}<br>
                            {!! Form::radio('pt_gender', 'Male', ['class' => 'form-control']) !!} Male
                            {!! Form::radio('pt_gender', 'Female', ['class' => 'form-control']) !!} Female
                        </div>
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        
                            {{-- <form action="{{ action('PatientController@store')}}" method="post" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label>Registration No</label>
                                    <input class="form-control" name="pt_regno" value="{{ isset($patient)? $patient->pt_regno : old('pt_regno') }}" placeholder="Enter patient reg no">
                                    <label>IC Number</label>
                                    <input class="form-control" name="pt_ic" value="{{ isset($patient)? $patient->pt_ic : old('pt_ic') }}" placeholder="Enter patient IC">
                                    <label>Name</label>
                                    <input class="form-control" name="pt_name" value="{{ isset($patient)? $patient->pt_name : old('pt_name') }}" placeholder="Enter patient name">
                                    <label>Contact number (H/P)</label>
                                    <input class="form-control" name="pt_contactNo" value="{{ isset($patient)? $patient->pt_contactNo : old('pt_contactNo') }}" placeholder="Enter patient contact no">
                                    <label>DOB</label>
                                    <input type="date" class="form-control" name="pt_dob" value="{{ isset($patient)? $patient->pt_dob : old('pt_dob') }}" placeholder="Enter patient dob">
                                    <label>Gender</label>
                                    <input type="radio" name="pt_gender" value="Male">Male
                                    <input type="radio" name="pt_gender" value="Female">Female
                                    <br>
                                    <label>Panel</label>
                                    <select class="form-control">
                                        <option>Etiqa</option>
                                        <option>MAA</option>
                                        <option>Takaful</option>
                                        <option>Prudential</option>
                                        <option selected="">No panel</option>
                                    </select>
                                    
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form> --}}
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>

            <div class="tab-pane fade" id="profile">
                <h4>Existing Patient</h4>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form">
                                <div class="form-group">
                                    <label>IC Number</label>
                                    <input class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

        <div class="tab-pane fade" id="messages">
                <h4>empty tab</h4>
                <p>empty</p>
        </div>

        <div class="tab-pane fade" id="settings">
                <h4>Empty tab</h4>
                <p>empty</p>
        </div>
    </div>
</div>
               

@stop