<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\message;
use App\Models\governors;
use App\Models\directors;
use App\Models\coporate_team;
use App\Models\lecturers;
use App\Models\clients;
use App\Models\g_affiliations;
use App\Models\l_affiliations;
use App\Models\locations;
use App\Models\contacts;
use App\Models\testimonials;
use App\Models\upcoming_programs;

class HomeController extends Controller
{
    //navbar
    public function index()
    {
        $testimonials=testimonials::all();
        $locations=locations::all();
        $g_affiliations=g_affiliations::all();
        $l_affiliations=l_affiliations::all();
        $upcoming_programs=upcoming_programs::all();
        $location_count=locations::all()->count();
        return view('home.index',compact('testimonials','locations','g_affiliations','l_affiliations','location_count','upcoming_programs'));
    }

    public function about_us()
    {
        $clients=clients::all();
        $directors=directors::all();
        $locations=locations::all();
        $g_affiliations=g_affiliations::all();
        $l_affiliations=l_affiliations::all();
        return view('home.about_us',compact('clients','directors','locations','g_affiliations','l_affiliations'));
    }

    public function courses()
    {
        return view('home.courses');
    }

    public function governors()
    {
        $governors=governors::all();
        return view('home.governors',compact('governors'));
    }

    public function directors()
    {
        $directors=directors::all();
        return view('home.directors',compact('directors'));
    }

    public function coporate()
    {
        $coporate_team=coporate_team::all();
        return view('home.coporate',compact('coporate_team'));
    }

    public function lecture_Panel()
    {
        $lecturers=lecturers::all();
        return view('home.lecture_Panel',compact('lecturers'));
    }

    public function coporate_team()
    {
        return view('home.coporate_team');
    }
    
    public function educational()
    {
        $g_affiliations=g_affiliations::all();
        $l_affiliations=l_affiliations::all();
        return view('home.educational',compact('g_affiliations','l_affiliations'));
    }

    public function clients()
    {
        $clients=clients::all();
        return view('home.clients',compact('clients'));
    }

    public function events_CBL()
    {
        return view('home.events_CBL');
    }

    public function events_EWCL()
    {
        return view('home.events_EWCL');
    }

    public function events_EWCL_2018()
    {
        return view('home.events_EWCL_2018');
    }

    public function gallery_CBL()
    {
        return view('home.gallery_CBL');
    }

    public function gallery_EWCL()
    {
        return view('home.gallery_EWCL');
    }

    public function gallery_EWCL_2018()
    {
        return view('home.gallery_EWCL_2018');
    }

    public function register()
    {
        return view('home.register');
    }

    public function contact()
    {
        $locations=locations::all();
        $contacts=contacts::all();
        return view('home.contact',compact('locations','contacts'));
    }

    //courses
    public function management()
    {
        return view('home.management');
    }

    public function ICT()
    {
        return view('home.ICT');
    }

    public function languages()
    {
        return view('home.languages');
    }

    public function social()
    {
        return view('home.social');
    }

    public function business()
    {
        return view('home.business');
    }

    public function consultancy()
    {
        return view('home.consultancy');
    }

    //programs
    //management


    public function sales()
    {
        return view('management.sales');
    }

    public function core()
    {
        return view('management.core');
    }

    public function fbusiness()
    {
        return view('management.fbusiness');
    }

    public function PD()
    {
        return view('management.PD');
    }

    public function csales()
    {
        return view('management.csales');
    }

    public function HDbusiness()
    {
        return view('management.HDbusiness');
    }

    public function taxation()
    {
        return view('management.taxation');
    }

    public function minimba()
    {
        return view('management.minimba');
    }

    public function finance()
    {
        return view('management.finance');
    }

    public function solid()
    {
        return view('management.solid');
    }

    public function trade_main()
    {
        return view('management.trade_main');
    }

    public function trade()
    {
        return view('management.trade');
    }

    public function d_trade()
    {
        return view('management.d_trade');
    }

    public function qualifi_7()
    {
        return view('management.qualifi_7');
    }

    public function practical()
    {
        return view('management.practical');
    }

    public function effective()
    {
        return view('management.effective');
    }

    //IT
    
    public function advanced()
    {
        return view('IT.advanced');
    }

    public function certificate()
    {
        return view('IT.certificate');
    }

    public function digital()
    {
        return view('IT.digital');
    }

    public function diploma()
    {
        return view('IT.diploma');
    }

    public function graphic()
    {
        return view('IT.graphic');
    }

    //languages

    public function benglish()
    {
        return view('languages.benglish');
    }

    public function ielts()
    {
        return view('languages.ielts');
    }

    public function penglish()
    {
        return view('languages.penglish');
    }

    public function pte()
    {
        return view('languages.pte');
    }

    public function public_english()
    {
        return view('languages.public_english');
    }

    public function toefl()
    {
        return view('languages.toefl');
    }

    //social

    public function care()
    {
        return view('social.care');
    }

    public function drugs()
    {
        return view('social.drugs');
    }

    public function mental()
    {
        return view('social.mental');
    }

    public function pedagogy()
    {
        return view('social.pedagogy');
    }

    public function sports()
    {
        return view('social.sports');
    }

    //add admission

    public function add_admission(Request $request)
    {
        $admission=new admission;
        $admission->Course=$request->Course;
        $admission->Name=$request->Name;
        $admission->NIC=$request->NIC;
        $admission->DOB=$request->DOB;
        $admission->Phone_number=$request->Phone_number;
        $admission->Email=$request->Email;
        $admission->Qualification=$request->Qualification;
        $admission->Location=$request->Location;
        $admission->Days=$request->Days;

        $admission->save();
        return redirect()->back();
    }

    //send message

    public function send_message(Request $request)
    {
        $message=new message;
        $message->name=$request->name;
        $message->email=$request->email;
        $message->phone_no=$request->phone_no;
        $message->subject=$request->subject;
        $message->message=$request->message;
        

        $message->save();
        return redirect()->back();
    }

}
