 @extends('master')
 @section('content')
    <!------------------------ Start About Us--------------------------------->
    <div class="tourist-programs">
      <div class="container">
        <div class="tourism-section">
          <div class="titel-style text-center">
            <h1>{{trans('app.about')}}</h1>
          </div>

          <div class="about">
            <div class="row">
              <div class="col-md-6 text-center">
                <img src="{{asset('img/visa.png')}}">
              </div>
              <div class="col-md-6"></div>
            </div>
          </div>

          <div class="info-about">
            <div>
              <h1>{{trans('app.aboutcom')}}</h1>
              <p>
              {!!$records->intro!!}
              </p>
            </div>

            <div>
              <h1>{{trans('app.aboutteam')}}</h1>
              <p>
               {!!$records->team!!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!------------------------ Start About Us--------------------------------->

   @stop