@extends('admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Categories
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
                                    <th>Name</th>                                    
                                    <th>Image</th>                                    
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $record)          
                                <tr>
                                    <td>{{$record->name }}</td>
                                    <td><img style="height: 100px;border-radius: 50%" src="{{asset('img/'.$record->img)}}" data-toggle="modal" data-target="#modal-default{{$record->id}}" /></td>
                                    <td><a data-toggle="modal" data-target="#modal-default{{$record->id}}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="/delete/category/{{$record->id}} "><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>

                            <div class="modal fade" id="modal-default{{$record->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Choose New Image</h4>
                                        </div>


                                        <div class="modal-body">
                                            <form role="form" action='/edit/category' method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label >Name</label>
                                                        <input name="name" type="text" class="form-control" value="{{$record->name }}" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input  class="form-control" name="img" type="file" >
                                                    </div>
                                                </div>
                                                <input type="hidden" value="{{$record->id}}" name="id">
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <input type="submit" value="Save" class="btn btn-primary" name="upload" />
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

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