@extends('master')
@section('content')
<!-- Start Slider -->
<div class="custom-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner carousel-edit">
            @foreach($records as $img)
            @if($loop->first)
            <div class="carousel-item active">
                <img src="{{asset('img/'.$img->img)}}" class="d-block w-100" alt="..." />
            </div>
            @else
            <div class="carousel-item ">
                <img src="{{asset('img/'.$img->img)}}" class="d-block w-100" alt="..." />
            </div>
            @endif
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Slider -->

<!------------------------ Start Info--------------------------------->

<div class="tourist-programs">
    <div class="container">
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
        <!-- Start Drop -->
        <!-- Example single danger button -->
        <div class="btn-group btn-block">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                {{trans('app.chooseyourtrip')}}
            </button>
            <div class="dropdown-menu btn-block">
                @foreach($cats as $cat)
                <a class="dropdown-item" href="/trips/{{$cat->id}}">{{$cat->name}}</a>
                @endforeach
            </div>
        </div>
        <!-- End Drop -->

        <div class="row">
            <div class="col-md-12 details">
                <div>
                    <h5>{{trans('app.details')}}</h5>
                    {!!$record->details!!}

                    <!-- Start Book Now -->

                    <div class="book-now">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            {{trans('app.Register on This Trip')}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="card text-center">

                                            <div class="card-body">
                                                <form class="form-edit" action="/tripReq" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="text" name="name" class="form-control" placeholder="{{trans('app.name')}} *" required/>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="text" name="phone" class="form-control" placeholder="{{trans('app.phone')}} *" required/>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="email" name="email" class="form-control" placeholder="{{trans('app.email')}} *" />
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="number" name="adults" class="form-control" placeholder="{{trans('app.individuals')}} *" required />
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="number" name="children" class="form-control" placeholder="{{trans('app.children')}} *" required/>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="text" name="startdate" class="form-control" placeholder="{{trans('app.startdate')}}" id="datepicker" readonly />
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="text" name="endname" class="form-control" placeholder="{{trans('app.enddate')}}" id="datepicker2" readonly />
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="text" name="state" class="form-control" placeholder="{{trans('app.state')}}" readonly />
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <input type="text" name="cities" class="form-control" placeholder="{{trans('app.cities')}}" readonly />
                                                        </div>

                                                        <div class="col">
                                                            <input type="text" name="from" class="form-control" placeholder="{{trans('app.from')}}" readonly />
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" name="to" class="form-control" placeholder="{{trans('app.to')}}" readonly />
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="trip_id" value="{{$record->id}}"/>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                       {{trans('app.send')}}
                                                    </button>
                                                    <!-- Start Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="radio-icon">
                                                                        <fieldset>
                                                                            <form>
                                                                                <legend>{{trans('app.payment')}}</legend>

                                                                                <label for="cash">
                                                                                    <input type="radio" value="cash" required name="payment_type" id="cash">
                                                                                    <span><i class="fa fa-money"  aria-hidden="true"></i>{{trans('app.cash')}}</span>
                                                                                </label>

                                                                                <label for="western">
                                                                                    <input type="radio" value="western" required  name="payment_type" id="western">
                                                                                    <span><i class="fa fa-credit-card" aria-hidden="true"></i>{{trans('app.westren')}}</span>
                                                                                </label>

                                                                                <label for="credit">
                                                                                    <input type="radio" value="credit" required name="payment_type" id="credit">
                                                                                    <span><i class="fa fa-credit-card-alt"  aria-hidden="true"></i>{{trans('app.credit')}}</span>
                                                                                </label>

                                                                                <div class="modal-footer">
                                                                                    <input type="submit" class="btn btn-outline-info btn-block"
                                                                                           value=" {{trans('app.send')}}" /> 
                                                                                </div>
                                                                            </form>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal -->

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Book Now -->

                </div>
            </div>


            <!-- Start Icon -->
            <div class="wrapper">
                <a href=" https://wa.me/{{ $settings->whatsapp }}"><i class="fa fa-whatsapp"></i></a>

                <a href=" {{ $settings->instagram }}"><i class="fa fa-instagram"></i></a>

                <a href=" {{ $settings->facebook }}"><i class="fa fa-facebook"></i></a>

                <a href=" {{ $settings->twitter }}"><i class="fa fa-twitter"></i></a>

                <a href=" {{ $settings->snapchat }}"><i class="fa fa-snapchat-ghost"></i></a>

                <a href="mailto:{{ $settings->mail }}"><i class="fa fa-envelope"></i></a>

                <a href=" {{ $settings->vk }}"><i class="fa fa-vk"></i></a>

                <a href=" {{ $settings->youtube }}"><i class="fa fa-youtube-play"></i></a>
            </div>
            <!-- End Icon -->
        </div>
    </div>
</div>

<!------------------------ Start Info--------------------------------->
@stop