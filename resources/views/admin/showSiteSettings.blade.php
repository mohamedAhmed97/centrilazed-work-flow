@extends('admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Settings
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-4">
                english
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{$recordEN->phone}}">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="{{$recordEN->fax}}">
                            </div>
                            <div class="form-group">
                                <label >Mail</label>
                                <input name="email" type="mail" class="form-control" value="{{$recordEN->mail}}">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" >{!!$recordEN->intro!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label >About Team</label>
                                <textarea name="team"  class="form-control textarea" >{!!$recordEN->team!!}</textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="{{$recordEN->address}}">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="{{$recordEN->location}}">
                            </div>
                            <div class="form-group">
                                <label >logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="{{$recordEN->facebook}}">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="{{$recordEN->instegram}}">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="{{$recordEN->twitter}}">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="{{$recordEN->youtube}}">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="{{$recordEN->vk}}">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="{{$recordEN->snapchat}}">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="{{$recordEN->whatsapp}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="1">
                        <input name="lang" type="hidden" value="1">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
              <div class="col-md-4">
                  turkish
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{$recordTR->phone}}">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="{{$recordTR->fax}}">
                            </div>
                            <div class="form-group">
                                <label >Mail</label>
                                <input name="email" type="mail" class="form-control" value="{{$recordTR->mail}}">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" >{!!$recordTR->intro!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label >About Team</label>
                                <textarea name="team"  class="form-control textarea" >{!!$recordTR->team!!}</textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="{{$recordTR->address}}">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="{{$recordTR->location}}">
                            </div>
                            <div class="form-group">
                                <label >logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="{{$recordTR->facebook}}">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="{{$recordTR->instegram}}">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="{{$recordTR->twitter}}">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="{{$recordTR->youtube}}">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="{{$recordTR->vk}}">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="{{$recordTR->snapchat}}">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="{{$recordTR->whatsapp}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="3">
                        <input name="lang" type="hidden" value="3">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
              <div class="col-md-4">
                  russian
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{$recordRO->phone}}">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="{{$recordRO->fax}}">
                            </div>
                            <div class="form-group">
                                <label >Mail</label>
                                <input name="email" type="mail" class="form-control" value="{{$recordRO->mail}}">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" >{!!$recordRO->intro!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label >About Team</label>
                                <textarea name="team"  class="form-control textarea" >{!!$recordRO->team!!}</textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="{{$recordRO->address}}">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="{{$recordRO->location}}">
                            </div>
                            <div class="form-group">
                                <label >logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="{{$recordRO->facebook}}">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="{{$recordRO->instegram}}">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="{{$recordRO->twitter}}">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="{{$recordRO->youtube}}">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="{{$recordRO->vk}}">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="{{$recordRO->snapchat}}">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="{{$recordRO->whatsapp}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="4">
                        <input name="lang" type="hidden" value="4">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 ">
                فارسى
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                          <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{$recordPR->phone}}">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="{{$recordPR->fax}}">
                            </div>
                            <div class="form-group">
                                <label > Email</label>
                                <input name="email" type="mail" class="form-control" value="{{$recordPR->mail}}">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" >{!!$recordPR->intro!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label > TEam</label>
                                <textarea name="team"  class="form-control textarea" >{!!$recordPR->team!!}</textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="{{$recordPR->address}}">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="{{$recordPR->location}}">
                            </div>
                            <div class="form-group">
                                <label >Logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="{{$recordPR->facebook}}">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="{{$recordPR->instegram}}">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="{{$recordPR->twitter}}">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="{{$recordPR->youtube}}">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="{{$recordPR->vk}}">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="{{$recordPR->snapchat}}">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="{{$recordPR->whatsapp}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="5">
                        <input name="lang" type="hidden" value="5">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="أضف" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
             <div class="col-md-6 ar">
                 عربى
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                          <div class="box-body">
                            <div class="form-group">
                                <label >الهاتف</label>
                                <input class="form-control" type="text" name="phone" value="{{$recordAR->phone}}">
                            </div>
                            <div class="form-group">
                                <label >الفاكس</label>
                                <input class="form-control" type="text" name="fax" value="{{$recordAR->fax}}">
                            </div>
                            <div class="form-group">
                                <label >البريد الإليكترونى</label>
                                <input name="email" type="mail" class="form-control" value="{{$recordAR->mail}}">
                            </div>
                            <div class="form-group">
                                <label >نبذة</label>
                                <textarea name="intro"  class="form-control textarea" >{!!$recordAR->intro!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label >فريق العمل</label>
                                <textarea name="team"  class="form-control textarea" >{!!$recordAR->team!!}</textarea>
                            </div>
                          <div class="form-group">
                                <label >العنوان</label>
                                <input name="address" type="text" class="form-control" value="{{$recordAR->address}}">
                            </div>
                            <div class="form-group">
                                <label >الموقع</label>
                                <input name="location" type="text" class="form-control" value="{{$recordAR->location}}">
                            </div>
                            <div class="form-group">
                                <label >اللوجو</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="{{$recordAR->facebook}}">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="{{$recordAR->instegram}}">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="{{$recordAR->twitter}}">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="{{$recordAR->youtube}}">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="{{$recordAR->vk}}">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="{{$recordAR->snapchat}}">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="{{$recordAR->whatsapp}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="2">
                        <input name="lang" type="hidden" value="2">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="أضف" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>         @stop