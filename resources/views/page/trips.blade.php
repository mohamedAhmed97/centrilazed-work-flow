@extends('master')
@section('content')

<!------------------------ Start Medical Tourism--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1>{{$cat->name}}</h1>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <script >
            $(function () {
                Swal.fire({
                    type: 'success',
                    title: '{{ trans('app.thanks') }}',
                    showConfirmButton: false,
                    timer: 2500
                })
            });
        </script>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('app.please enter your data')}}</h5>
                        <form class="form-edit" action="/planReq" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" placeholder="{{trans('app.name')}} *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="phone" class="form-control" placeholder="{{trans('app.phone')}} *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" placeholder="{{trans('app.email')}} *">
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="adults" class="form-control" placeholder="{{trans('app.individuals')}} *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="children" class="form-control" placeholder="{{trans('app.children')}} *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="startdate" class="form-control" placeholder="{{trans('app.startdate')}} *" id="datepicker" required />
                                    </div>

                    <div class="col-sm-12">
                        <input type="text" name="enddate" class="form-control" placeholder="{{trans('app.enddate')}} *" id="datepicker2" required />
                                        </div>

                                        <div class="col-sm-12">
                                            <input type="text" name="state" class="form-control" placeholder="{{trans('app.country')}} *" required>
                                        </div>

                                        <div class="col-sm-12">
                                            <input type="text" name="cities" class="form-control" placeholder="{{trans('app.cities')}}" >
                                        </div>


                                        <div class="col">
                                            <input type="text" name="from" class="form-control" placeholder="{{trans('app.from')}}">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="to" class="form-control" placeholder="{{trans('app.to')}}">
                                        </div>


                                    </div>
                                    <input type="submit" class="btn btn-outline-info btn-block"
                                           value=" {{trans('app.send')}}" />
                                    </form>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">{{trans('app.resdyprograms')}}</h5>
                            </div>
                        </div>
                        <div class="img-hover">
                            <ul>
                                @foreach($records as $record)
                                <li class="imageContainer">
                                    <div class="trip-info">
                                        <h4>{{$record->name}}</h4>
                                        <a href="/info/{{$record->id}}" class="badge badge-info">{{$record->location}}</a>
                                    </div>
                                    <img src="{{asset('img/'.$record->img)}}">
                                    <a href="/info/{{$record->id}}" class="overlayText">
                                        {{$record->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------ Start Medical Tourism--------------------------------->
        @stop