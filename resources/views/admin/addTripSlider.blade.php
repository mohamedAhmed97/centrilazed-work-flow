@extends('admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Trip Slide
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/slide' method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">            
                            <div class="form-group">
                                <label>Image</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                            <div class="form-group">
                                <label>Trip</label>
                                <select class="form-control"  name="item_id">
                                    @foreach($trips as $trip)
                                    <option value="{{$trip->id}}">{{$trip->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <input name="type_id" type="hidden" value="2">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>         @stop