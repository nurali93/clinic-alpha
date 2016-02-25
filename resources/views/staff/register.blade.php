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
                            <form role="form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control">
                                    <label>IC Number</label>
                                    <input class="form-control">
                                    <label>Home Address</label>
                                    <input class="form-control">
                                    <label>Contact number (H/P)</label>
                                    <input class="form-control">
                                    <label>Gender</label>
                                    <input class="form-control">
                                    <div class="form-group">
                                        <label>Panel</label>
                                        <select class="form-control">
                                            <option>Etiqa</option>
                                            <option>MAA</option>
                                            <option>Takaful</option>
                                            <option>Prudential</option>
                                            <option selected="">No panel</option>
                                        </select>
                                        <button class="btn btn-default">Verify</button>
                                    </div>
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