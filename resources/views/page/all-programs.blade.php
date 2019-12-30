@extends('master')
@section('content')
<!------------------------ Start Medical Tourism--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1>{{trans('app.offers')}}</h1>
            </div>
        </div>

        <div class="tourist">
            <div class="container">
                @foreach($records as $record)
                <div class="row wow bounceInDown">
                    <div class="col-md-12">
                        <div class="custom-img-1">
                            <h4 class="titel-pro">{{$record->name}}</h4>
                            <a href="/info/{{$record->id}}">
                                <img src="{{asset('img/'.$record->img)}}" class=" img-thumbnail">
                                <h1>{{$record->name}}</h1>
                            </a>
                            <a href="/info/{{$record->id}}" class="link-info">{{trans('app.more')}}<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</div>
<!------------------------ Start Medical Tourism--------------------------------->
@stop