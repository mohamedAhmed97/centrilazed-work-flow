@if( session('lang') == 'en')
@php
$setting = $settingEN;
@endphp
@elseif( session('lang') == 'ar')
@php
$setting = $settingAR;
@endphp
@elseif( session('lang') == 'tr')
@php
$setting = $settingTR;
@endphp
@elseif( session('lang') == 'ro')
@php
$setting = $settingRO;
@endphp
@elseif( session('lang') == 'pr')
@php
$setting = $settingPR;
@endphp
@else
@php
$setting = $settingEN;
@endphp
@endif
<!DOCTYPE html>

@if( session('lang') == 'ar' || session('lang') == 'pr' )
<html len="en" dir="rtl">
    
    @else
    <html len="en" dir="ltr">
        @endif
<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Titel Page -->
  <title>{{trans('app.brand')}}</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <link rel="shortcut icon" type="img/png" href="{{asset('img/'.$setting->logo)}}">
  @if( session('lang') == 'ar' || session('lang') == 'pr')
<link rel="stylesheet" href="{{asset('css/rtl.css')}}">  
  @endif
  <!-- Fontawesome  -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <!-- Animation Css -->
  <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
  <!-- Hover Master -->
  <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700&display=swap" rel="stylesheet">
   <!-- jquery-ui -->
  <link rel="stylesheet" href="{{asset('jquery-ui-1.12.1.custom/jquery-ui.min.css')}}">
  <!-- Css Link -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  @if( session('lang') == 'ar' || session('lang') == 'pr')
  <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/custom-rtl.css')}}">  
  @endif

</head>

<body>
    @include('template.header')

    @yield('content')

    @include('template.footer')