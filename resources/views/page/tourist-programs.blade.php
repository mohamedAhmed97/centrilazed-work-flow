@extends('master')
@section('content')

<!------------------------ Start Tourist Programs--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1>{{trans('app.programs')}}</h1>
            </div>
        </div>

        <div class="row">
            @foreach($records as $record)
            <div class="col-md-3">
                <a href="/trips/{{$record->id}}">
                    <div class="card">
                        <img src="{{asset('img/'.$record->img)}}" class="card-img-top">
                        <div class="card-body">
                            <h1>{{$record->name}}</h1>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>


    </div>
</div>
<!------------------------ Start Tourist Programs--------------------------------->
@stop