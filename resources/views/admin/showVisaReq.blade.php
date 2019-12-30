@extends('admin') 

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Visa Request
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
                                    <th>Nationality </th>
                                    <th>place of life </th>
                                    <th>Date / Time </th>
                                    <th>Country distination </th>

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
                                    <td>{{$record->cities }}</td>  
                                    <td>{{$record->budget_to  }}</td>  
                                    <td>{!!$record->start_date . " <br> " .$record->end_date  !!}</td>  
                                    <td>{{$record->state}}</td>

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