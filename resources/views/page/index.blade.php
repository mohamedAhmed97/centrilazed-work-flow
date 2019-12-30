 @extends('master')
 @section('content')

    <!------------------------ Start Sider ----------------------------------->
  <div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
                    @foreach($records as $record)
                      @if($loop->first)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$record->id}}" class="active"></li>
                      @else
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$record->id}}"></li>
         @endif
        @endforeach
      </ol>
      <div class="carousel-inner">
          @foreach($records as $record)
          @if($loop->first)
        <div class="carousel-item active">
          <img src="{{asset('img/'.$record->img)}}" class="d-block w-100">
        </div>
         @else
          <div class="carousel-item ">
               <img src="{{asset('img/'.$record->img)}}" class="d-block w-100">
            </div>
          @endif
      @endforeach
      </div>
    </div>
  </div>
  <!------------------------ End Sider ------------------------------------>

  <!-------------------------- Start Wave -------------------------->
  <section class="wave"></section>
  <!-------------------------- End Wave -------------------------->

    <!------------------------ Start Tourist --------------------------------->
    <div class="tourist">
      <div class="container">
        <div class="row wow bounceInDown">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="custom-img-1">
              <a href="/tourism">
                <img src="{{asset('img/tr1.png')}}" class=" img-thumbnail">
                <h1>{{trans('app.Tourist Programs & Camping')}}</h1>
              </a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>

        <div class="row wow bounceInLeft delay-1s">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="custom-img-2">
              <a href="/medical">
                <img src="{{asset('img/tr2.png')}}"  class=" img-thumbnail">
                <h1 class="custom-h1">{{trans('app.Educational & Medical Tourist')}}</h1>
              </a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>

        <div class="row wow bounceInRight delay-1s">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="custom-img-1">
              <a href="/visa">
                <img src="{{asset('img/tr3.png')}}"  class=" img-thumbnail">
                <h1>{{trans('app.visa')}}</h1>
              </a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
    <!------------------------ Start Tourist --------------------------------->
@stop