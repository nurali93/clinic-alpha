@extends('master')
@section('sidebar')
    @include('sidebar.doctor')
@stop
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <i class="fa fa-user-md"></i> Dashboard <small>Doctor Hadi</small>
        </h1>
        <div class="panel panel-default">
            
        </div>
        <div class="row">
            
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Patient Queue for Consultation
                    </div>
                    <div class="panel-body">
                        <div class="list-group">

                            <a href="{{action('DocController@newcase')}}" class="list-group-item">
                                <span class="badge">20 minutes ago</span>
                                <i class="fa fa-fw fa-user"></i> Abdullah Ahmad
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">10 minutes ago</span>
                                <i class="fa fa-fw fa-user"></i> Siti Nordiyana
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">3 minutes ago</span>
                                <i class="fa fa-fw fa-user"></i> Wong Mei Lee
                            </a>
                        </div>
                        <div class="text-right">
                            <a href="#">More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-brown">
                    <div class="panel-left pull-left brown">
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div>
                    <div class="panel-right">
                    <h3>13</h3>
                     <strong> No. of Visits Today </strong>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green green">
                    <div class="panel-left pull-left green">
                        <i class="fa fa-eye fa-5x"></i>
                        
                    </div>
                    <div class="panel-right">
                        <h3>79</h3>
                       <strong> This Month Visits</strong>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@stop