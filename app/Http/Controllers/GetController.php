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

class GetController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        return view('admin.index');
    }

    public function view($page) {

        if($page == "addTripSlider")
        {
            $trips = Trip::all()->where("deleted", 0);
            return view("admin.$page",compact('trips'));
        }
        elseif($page == "addTrip"){
            $catsar = Program::all()->where("deleted", 0)->where('lang',2);
             $catsen = Program::all()->where("deleted", 0)->where('lang',1);
             $catstr = Program::all()->where("deleted", 0)->where('lang',3);
             $catsru = Program::all()->where("deleted", 0)->where('lang',4);
             $catspr = Program::all()->where("deleted", 0)->where('lang',5);
            return view("admin.$page",compact('catsar','catsen','catstr','catsru','catspr'));
        }
        else{
        return view("admin.$page");
        }
    }

    public function category() {

        $records = Program::all()->where("deleted", 0);
        return view("admin.showCategory", compact("records"));
    }

    public function slider() {
        $records = Image::all()->where("deleted", 0)->where("type_id", 1);
        return view("admin.showSlider", compact("records"));
    }

    public function tripSlider() {
        
        $records = Image::all()->where("deleted", 0)->where("type_id", 2);
        $trips = Trip::all()->where("deleted", 0);
        return view("admin.showSlider", compact("records","trips"));
    }

    public function trip() {

        $records = Trip::all()->where("deleted", 0);
        $cats = Program::all()->where("deleted", 0);
        return view("admin.showTrip", compact("records", "cats"));
    }

    public function contactMsg() {

        $records = ContactMsg::all()->where("deleted", 0);
        return view("admin.showContactMsg", compact("records"));
    }

    public function user() {

        $records = User::all()->where("deleted", 0);
        return view("admin.showUser", compact("records"));
    }

    public function medicalReq() {

        $records = MedicalRequest::all()->where("deleted", 0);
        return view("admin.showMedicalReq", compact("records"));
    }

    public function educationalReq() {

        $records = EducationalRequest::all()->where("deleted", 0);
        return view("admin.showEducationalReq", compact("records"));
    }

    public function tripReq() {

        $records = TripRequest::all()->where("deleted", 0);
        $trips = Trip::all()->where("deleted", 0);
        return view("admin.showTripReq", compact("records", "trips"));
    }

    public function planReq() {

        $records = PlanReq::all()->where("deleted", 0);
        return view("admin.showPlanReq", compact("records"));
    }

    public function visaReq() {

        $records = VisaRequest::all()->where("deleted", 0);
        return view("admin.showVisaReq", compact("records"));
    }

    public function siteSettings() {
        $recordEN = Setting::find(1);
        $recordAR = Setting::find(2);
        $recordTR = Setting::find(3);
        $recordRO = Setting::find(4);
        $recordPR = Setting::find(5);
        return view('admin.showSiteSettings', compact('recordEN', 'recordAR','recordTR', 'recordPR','recordRO'));
    }

}
