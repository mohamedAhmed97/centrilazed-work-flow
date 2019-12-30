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

class PageController extends Controller {

    public function index() {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        $records = Image::all()->where("deleted", 0)->where("type_id", 1);
        return view('page.index', compact("records"));
    }

    public function about() {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        $records = Setting::find($lang);
        return view('page.about', compact("records"));
    }

    public function programs() {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        $records = Trip::all()->where("deleted", 0)->where("discount", 1)->where('lang', $lang);

        return view('page.all-programs', compact("records"));
    }

    public function contact() {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        $settings = Setting::find($lang);
        return view('page.contact us', compact("records", "settings"));
    }

    public function info($id) {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        $settings = Setting::find($lang);
        $records = Image::all()->where("deleted", 0)->where("item_id", $id)->where("type_id", 2);
        $cats = Program::all()->where("deleted", 0)->where('lang', $lang);
        $record = Trip::find($id);
        return view('page.info', compact("records", "record", "settings", "cats"));
    }

    public function medical() {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        return view('page.medical-tourism', compact("records"));
    }

    public function tourism() {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        $records = Program::all()->where("deleted", 0)->where('lang', $lang);
        return view('page.tourist-programs', compact("records"));
    }

    public function trips($id) {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        $cat = Program::find($id);
        $records = Trip::all()->where("deleted", 0)->where('cat_id', $id)->take(4);
        return view('page.trips', compact("records", "cat"));
    }

    public function visa() {
        if (session('lang') == 'en') {
            $lang = 1;
        } elseif (session('lang') == 'ar') {
            $lang = 2;
        } elseif (session('lang') == 'tr') {
            $lang = 3;
        } elseif (session('lang') == 'ro') {
            $lang = 4;
        } elseif (session('lang') == 'pr') {
            $lang = 5;
        } else {
            $lang = 1;
        }
        return view('page.visa', compact("records"));
    }

    public function msg() {
        $record = new ContactMsg();
        $record->name = request('name');
        $record->email = request('email');
        $record->phone = request('phone');
        $record->msg = request('msg');
        $record->save();
        return redirect()->back()->with('success', "thanks");
    }

    public function tripReq() {
        $record = new TripRequest();
        $record->name = request('name');
        $record->mail = request('email');
        $record->mobile = request('phone');
        $record->adults = request('adults');
        $record->children = request('children');
        $record->trip_id = request('trip_id');
        $record->cities = request('cities');
        $record->payment_type = request('payment_type');
        $record->save();
        return redirect()->back()->with('success', "thanks");
    }

    public function medReq() {
        $record = new MedicalRequest();
        $record->name = request('name');
        $record->mail = request('email');
        $record->mobile = request('phone');
        $record->treatment = request('treatment');
        $record->country = request('country');
        $record->budget_from = request('from');
        $record->budget_to = request('to');
        $record->notes = request('notes');
        $record->save();
        return redirect()->back()->with('success', "thanks");
    }

    public function eduReq() {
        $record = new EducationalRequest();
        $record->name = request('name');
        $record->mail = request('email');
        $record->mobile = request('phone');
        $record->major = request('major');
        $record->country = request('country');
        $record->budget_from = request('from');
        $record->budget_to = request('to');
        $record->notes = request('notes');
        $record->save();
        return redirect()->back()->with('success', "thanks");
    }

    public function visaReq() {
        $record = new VisaRequest();
        $record->name = request('name');
        $record->mail = request('email');
        $record->mobile = request('phone');
        $record->adults = request('adults');
        $record->children = request('children');
        $record->cities = request('cities');
        $record->state = request('state');
        $record->budget_from = request('from');
        $record->budget_to = request('to');
        $record->start_date = request('startdate');
        $record->end_date = request('enddate');
        $record->save();
        return redirect()->back()->with('success', "thanks");
    }

    public function planReq() {
        $record = new PlanReq();
        $record->name = request('name');
        $record->mail = request('email');
        $record->mobile = request('phone');
        $record->adults = request('adults');
        $record->children = request('children');
        $record->cities = request('cities');
        $record->state = request('state');
        $record->budget_from = request('from');
        $record->budget_to = request('to');
        $record->start_date = request('startdate');
        $record->end_date = request('enddate');
        $record->location = request('location');
        $record->save();
        return redirect()->back()->with('success', "thanks");
    }

}
