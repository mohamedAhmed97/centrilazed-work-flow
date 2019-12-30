@extends('master')
@section('content')

<!------------------------ Start Contact Us--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1>{{trans('app.contact')}}</h1>
            </div>

            <div class="contact">
                <div class="container">
                    <div class="row">
                        <br><br>
                        <div class="col-md-6">
                            <div class="contact-left">
                                <br>
                                <p>
                                    {!!  $settings->intro !!}
                                </p>
                                <div class="contact-info">

                                    <div class="phone-fax-email">
                                        <p>
                                            <strong>

                                                <i class="fa fa-map-marker custom-fa"></i>
                                                <span> {{ $settings->address }}</span><br>
                                            </strong>
                                            <strong>

                                                <i class="fa fa-phone-square custom-fa"></i>
                                                <span> {{ $settings->phone }}</span><br>
                                            </strong>

                                            <strong>

                                                <i class="fa fa-fax custom-fa"></i>
                                                <span> {{ $settings->fax }}</span><br>
                                            </strong>

                                            <strong>
                                                <i class="fa fa-envelope custom-fa"></i>
                                                <span> {{ $settings->mail }}</span><br>
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                        <script >
                            $(function () {
                                Swal.fire({
                                    type: 'success',
                                    title: '{{ $message }}',
                                    showConfirmButton: false,
                                    timer: 2500
                                })
                            });
                        </script>
                        @endif
                        <div class="col-md-6">
                            <div class="contact-right">
                                <br>
                                <form action="/msg" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" name="name" placeholder="{{trans('app.name')}} *" class="form-control" required>
                                    <input type="text" name="email" placeholder="{{trans('app.email')}} * " class="form-control" >
                                    <input type="text" name="phone" placeholder="{{trans('app.phone')}} *" class="form-control" required>
                                    <textarea name="msg" rows="5" placeholder="{{trans('app.msg')}}.. " class="form-control" ></textarea>

                                    <div class="send-btn">
                                        <button class="btn btn-lg btn-general btn-white btn-block"  role="button">
                                            {{trans('app.send')}}
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="row" >
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
                    </div>
                    <br>

                </div>
            </div>

        </div>
    </div>
</div>
<!------------------------ End Contact Us--------------------------------->

@stop