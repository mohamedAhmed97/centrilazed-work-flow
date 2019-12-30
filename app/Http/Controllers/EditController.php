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

class EditController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function editUser(Request $request) {
        $id = request('id');
        $record = User::find($id);
        $record->name = request('name');
        $record->email = request('mail');
        if (!is_null(request('password'))) {
            $record->password = \Hash::make(request('password'));
        }
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
        return redirect('/siteAdmin/show/user');
    }

    public function editSetting(Request $request) {
        $id = request('id');
        $record = Setting::find($id);
        $record->phone = request('phone');
        $record->mail = request('email');
        $record->intro = request('intro');
        $record->team = request('team');
        $record->address = request('address');
        $record->fax = request('fax');
        $record->vk = request('vk');
        $record->snapchat = request('snapchat');
        $record->location = request('location');
        $record->facebook = request('facebook');
        $record->instegram = request('instegram');
        $record->twitter = request('twitter');
        $record->youtube = request('youtube');
        $record->whatsapp = request('whatsapp');
        $record->lang = request('lang');
        if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->logo = $img_name;
            $request->img->move(public_path('img'), $img_name);
        }
        $record->save();
        return redirect('/siteAdmin/siteSettings');
    }

    public function editCategory(Request $request) {
        $id = request('id');
        $record = Program::find($id);
        $record->name = request('name');
        if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->img = $img_name;
            $request->img->move(public_path('img'), $img_name);
        }
        $record->save();
        return redirect()->back();
    }

    public function editSlide(Request $request) {
        $id = request('id');
        $record = Image::find($id);
        if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->img = $img_name;
            $request->img->move(public_path('img'), $img_name);
        }
        $record->save();
        return redirect()->back();
    }

    public function editTrip(Request $request) {
        $id = request('id');
        $record = Trip::find($id);
        $record->name = request('name');
        $record->cat_id = request('cat_id');
        $record->location = request('location');
        $record->details = request('text');
        $record->discount = request('discount');
        if (!is_null(request('img'))) {
            $img_name = time() . $request->img->getClientOriginalName();
            $record->img = $img_name;
            $request->img->move(public_path('img'), $img_name);
        }
        $record->save();
        return redirect()->back();
    }

    /* -----------
      All Delete Methods
      -------- */

    public function deleteCategory($id) {
        $record = Program::find($id);
        $record->deleted = 1;
        $record->save();
        return redirect()->back();
    }

    public function deleteTrip($id) {
        $record = Trip::find($id);
        $record->deleted = 1;
        $record->save();
        return redirect()->back();
    }

    public function deleteImage($id) {
        $record = Image::find($id);
        $record->deleted = 1;
        $record->save();
        return redirect()->back();
    }

    public function deleteUser($id) {
        $record = User::find($id);
        $record->deleted = 1;
        $record->save();
        return redirect()->back();
    }

}
