<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMsg;
use App\EducationalRequest;
use App\Image;
use App\MedicalRequest;
use App\Program;
use App\Setting;
use App\Trip;
use App\TripRequest;
use App\User;
use App\VisaRequest;
use App\PlanReq;

class AddController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function addUser(Request $request) {
        $record = new User();
        $record->name = request('name');
        $record->email = request('mail');
        $record->password = \Hash::make(request('password'));
        $record->phone = request('phone');
        $record->address = request('address');
        $record->gender = request('gender');
        $record->deleted = request('deleted');
        if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->photo = $img_name;
            $request->img->move(public_path('img/profile'), $img_name);
        }
        $record->save();
        return redirect()->back();
    }

    public function addTrip(Request $request) {
        $record = new Trip();
        $record->name = request('name');
        $record->cat_id = request('cat_id');
        $record->location = request('location');
        $record->details = request('text');
        $record->lang = request('lang');
        $record->deleted = request('deleted');
        $record->discount = request('discount');
         if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->img = $img_name;
            $request->img->move(public_path('img'), $img_name);
        }
        $record->save();
        return redirect()->back();
    }

    public function addCategory(Request $request) {
        $record = new Program();
        $record->name = request('name');
        $record->lang = request('lang');
        if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->img = $img_name;
            $request->img->move(public_path('img'), $img_name);
        }
        $record->save();
        return redirect()->back();
    }

    public function addSlide(Request $request) {
        $record = new Image();
        $record->item_id = request('item_id');
        $record->type_id = request('type_id');
        $record->deleted = request('deleted');
        if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->img = $img_name;
            $request->img->move(public_path('img'), $img_name);
        }
        $record->save();
        return redirect()->back();
    }

}
