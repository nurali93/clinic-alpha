@extends('doctor.dmaster')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            List of Patient
        </div> 
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Name</th>
                            <th>Contact No</th>
                            <th>Panel</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>211</td>
                            <td>John Lee</td>
                            <td>012-3456789</td>
                            <td> - </td>
                            <td><a href="#">Show</a>
                        </tr>
                        <tr>
                            <td>212</td>
                            <td>Kimsila</td>
                             <td>012-3456789</td>
                            <td>-</td>
                            <td><a href="#">Show</a>
                        </tr>
                        <tr>
                            <td>213</td>
                            <td>Rossye</td>
                             <td>012-3456789</td>
                            <td>MAA</td>
                            <td><a href="#">Show</a>
                        </tr>
                        <tr>
                            <td>214</td>
                            <td>Richard</td>
                            <td>012-3456789</td>
                            <td>-</td>
                            <td><a href="#">Show</a>
                        </tr>
                        <tr>
                            <td>215</td>
                            <td>Abdullah Ahmad</td>
                            <td>014-5678912</td>
                            <td>Etiqa</td>
                            <td><a href="#">Show</a>
                        </tr>
                        <tr>
                            <td>216</td>
                            <td>Wrapel</td>
                            <td>012-3456789</td>
                            <td>Alianze</td>
                            <td><a href="#">Show</a>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop