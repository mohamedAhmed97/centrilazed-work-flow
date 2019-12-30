@extends('admin') 
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Trip Request
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Created At</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Mail</th>
                                    <th>Adults</th>
                                    <th>Children</th>
                                    <th>Trip </th>
                                    <th>Payment Type </th>                    
                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $record)
                                <tr>
                                    <td>{{$record->created_at}}</td>
                                    <td>{{$record->name}}</td>
                                    <td>{{$record->mobile}}</td>
                                    <td>{{$record->mail}}</td>
                                    <td>{{$record->adults}}</td>
                                    <td>{{$record->children}}</td>
                                    @foreach($trips as $trip)
                                    @if($trip->id ==$record->trip_id)
                                    <td>{{$trip->name}}</td>
                                    @endif
                                    @endforeach
                                    <td>{{$record->payment_type}}</td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>

@stop