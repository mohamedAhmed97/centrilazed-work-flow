

<!------------------------ Start Footer --------------------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="/">
                    <img src="{{asset('img/'.$setting->logo)}}">
                </a>
            </div>

            <div class="col-md-3">
                <div class="footer-info">
                    {!!str_limit($setting->intro,200)!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-info">
                    <ul>
                        <li><i class="fa fa-phone"></i> <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a> </li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:{{$setting->mail}}">{{$setting->mail}}</a> </li>
                        <li><i class="fa fa-map-marker"></i> <a href="{{$setting->location}}">{{$setting->address}}</a> </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-info footer-info-icon">
                    <ul>
                        <li><a href=" https://wa.me/{{ $setting->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href=" {{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href=" {{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href=" {{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href=" {{ $setting->snapchat }}"><i class="fa fa-snapchat-ghost"></i></a></li>
                        <li><a href="mailto:{{ $setting->mail }}"><i class="fa fa-envelope"></i></a></li>
                        <li><a href=" {{ $setting->vk }}"><i class="fa fa-vk"></i></a></li>
                        <li><a href=" {{ $setting->youtube }}"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!------------------------ End Footer --------------------------------->
</div>
<!-------------------------- End Overlay -------------------------->


    <!-- Popper.js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- WOW JS -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
    new WOW().init();
    </script>
    <!-- jquery-ui -->
    <script src="{{asset('jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <!-- Js Src -->

    <script src="{{asset('js/main.js')}}"></script>
  

</body>

</html>