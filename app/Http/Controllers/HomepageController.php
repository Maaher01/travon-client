<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Studentregistration;
use App\Models\Booking;
use App\Models\Message;
use Illuminate\Http\Request;
use DB;

class HomepageController extends Controller
{
    public function index()
    {
        $allslider = DB::table("sliders")->where("_status",1)->get();
        $allcounter = DB::table("counters")->where("_status",1)->get();
        $aboutsection = DB::table("sections")->where("_status",1)->where("_menuid",10)->where("_sort",1)->first();
        $aboutcomponent = DB::table("components")->where("_status",1)->where("_menuid",10)->where("_sectionid",16)->get();
        $managementsection = DB::table("sections")->where("_status",1)->where("_menuid",10)->where("_sort",2)->first();
        $managementcomponent = DB::table("components")->where("_status",1)->where("_menuid",10)->where("_sectionid",39)->get();

        $whychoose = DB::table("sections")->where("_status",1)->where("_menuid",10)->where("_sort",3)->first();
        $whychoosecomponent = DB::table("components")->where("_status",1)->where("_menuid",10)->where("_sectionid",40)->get();    

        $alldepartment = DB::table("sections")->select("sections.*")->join('menus', 'menus.id', '=', 'sections._menuid')->where("_parentmenuid",13)->get();
        $alldiscounts = DB::table("sections")->select("sections.*")->join('menus', 'menus.id', '=', 'sections._menuid')->where("_parentmenuid",10)->get();
        $watchstory = DB::table("sections")->where("_status",1)->where("_menuid",10)->where("_sort",4)->first();

        $allreviews = DB::table("reviews")->where("_status",1)->get();

        $allblogs = DB::table("sections")->where("_menuid", 56)->get();  

        $coursesection = DB::table("sections")->where("_status",1)->where("_menuid",10)->where("_sort",5)->first();
        $allcourses = DB::table("components")->where("_status",1)->where("_menuid",38)->get();
        
        return view('index', compact('allslider','allcounter','aboutsection','managementsection','managementcomponent',
        'aboutcomponent','managementsection','whychoosecomponent','whychoose','alldepartment', 'alldiscounts', 'watchstory','allreviews',
        'allblogs','coursesection','allcourses'));
    }

    public function aboutus()
    {
        $aboutsection = DB::table("sections")->where("_status",1)->where("_menuid",10)->where("_sort",1)->first();
        $aboutsectionone = DB::table("sections")->where("_status",1)->where("_menuid",11)->where("_sort",1)->first();
        $aboutsectiononeall = DB::table("components")->where("_status",1)->where("_menuid",11)->where("_sectionid",46)->get();
        $aboutsectiontwo = DB::table("sections")->where("_status",1)->where("_menuid",11)->where("_sort",2)->first();

        $aboutcomponent = DB::table("components")->where("_status",1)->where("_menuid",10)->where("_sectionid",16)->get();
       
        $aboutsectiontwoall = DB::table("components")->where("_status",1)->where("_menuid",11)->where("_sectionid",47)->get();
        $allcounter = DB::table("counters")->where("_status",1)->get();

        $teachersection = DB::table("sections")->where("_status",1)->where("_menuid",39)->where("_sort",1)->first();
        $teachersectionall = DB::table("components")->where("_status",1)->where("_menuid",32)->where("_sectionid",48)->get();

        $watchstory = DB::table("sections")->where("_status",1)->where("_menuid",10)->where("_sort",4)->first();

        $allreviews = DB::table("reviews")->where("_status",1)->get();

        $teachersectionall = DB::table("components")->where("_status",1)->where("_menuid",15)->where("_sectionid",48)->orderBy('_sort', 'asc')->get();

        return view('components.aboutus', compact('aboutsectionone','aboutsectiononeall','aboutsectiontwo',
        'aboutsectiontwoall','allcounter','teachersection','teachersectionall', 'aboutcomponent', 'aboutsection', 'watchstory', 'allreviews', 'teachersectionall'));
    }

    public function departments()
    {
        $alldepartment = DB::table("sections")->select("sections.*")
        ->join('menus', 'menus.id', '=', 'sections._menuid')
        ->where("sections._status",1)
        ->where("menus._parentmenuid",13)->orderBy("menus._sort","ASC")->get();

        return view('components.departments', compact('alldepartment'));
    }

    public function departmentdetails($id)
    {
        $departmentdetails = DB::table("sections")->where("_status",1)->where("id",$id)->first();

        return view('components.departmentdetails', compact('departmentdetails'));
    }

    public function courses()
    {
        $allcourses = DB::table("components")->where("_status",1)->where("_menuid",38)->get();
        $recentblogs = DB::table("sections")->where("_menuid", 56)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('components.course', compact('allcourses', 'recentblogs'));
    }

    public function coursedetails($id)
    {
        $tourdetails = DB::table("components")->where("_status",1)->where("id",$id)->first();
        $latestdeals = DB::table("components")->where("_status",1)->where("_menuid",38)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('components.coursedetails', compact('tourdetails', 'latestdeals'));
    }

    public function classroutine()
    {
        $classroutine = DB::table("sections")->where("_status",1)->where("_menuid",35)->first();

        return view('components.classroutine', compact('classroutine'));
    }

    public function gallery()
    {
        $allgalleryimage = DB::table("images")->where("_menuid",18)->orderBy('created_at', 'desc')->get();
        $videosection = DB::table("sections")->where("_status",1)->where("_menuid",18)->where("_sort",1)->first();
        $allvideo = DB::table("components")->where("_status",1)->where("_menuid",18)->where("_sectionid",45)->orderBy('created_at', 'desc')->get();

        return view('components.gallery', compact('allgalleryimage','videosection','allvideo'));
    }

    public function adminstaff()
    {
        $teachersectionall = DB::table("components")->where("_status",1)->where("_menuid",15)->where("_sectionid",48)->orderBy('_sort', 'asc')->get();

        return view('components.adminstaff', compact('teachersectionall'));
    }

    public function adminstaffdetails($id)
    {
        $teacherdetails = DB::table("components")->where("id",$id)->first();
      
        return view('components.adminstaffdetails', compact('teacherdetails'));
    }

    public function facultymembers()
    {
        $membersectionall = DB::table("components")->where("_status",1)->where("_menuid",40)->where("_sectionid",53)->get();

        return view('components.facultymembers', compact('membersectionall'));
    }
    
    public function facultymembersdetails($id)
    {
       $memberdetails = DB::table("components")->where("id",$id)->first();

        return view('components.facultymemberdetails', compact('memberdetails'));
    }

    public function blogs()
    {
        $allblogs = DB::table("sections")->where("_menuid", 56)->get();
        $recentblogs = DB::table("sections")->where("_menuid", 56)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('components.blogs', compact('allblogs', 'recentblogs'));
    }

    public function blogdetails($id)
    {
        $blogdetails = DB::table("sections")->where("id",$id)->first();
        $recentblogs = DB::table("sections")->where("_menuid", 56)->orderBy('created_at', 'desc')->limit(3)->get();

        return view('components.blogdetails', compact('blogdetails', 'recentblogs'));
    }
        
    public function bookticket(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => ['required'],
            'phone' => ['required', 'string', 'max:14'],
            'tickettype' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => 'Please fill out all the necessary fields.']);
        }
        
        $profile = Booking::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'tickettype' => $request->tickettype,
            'adult' => $request->adult,
            'child' => $request->child,
            'date' => $request->date,
            'message' => $request->message,
        ]);

        return redirect()->back()->with(['success' => 'Ticket booked successfully. We will contact you soon.']);
    }

    public function contact(){
        $companyprofile = "";
        return view('components.contact', compact('companyprofile'));
    }

    public function messagesubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'mobile' => ['required', 'string', 'max:14'],
            'message' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => 'Please fill out all the necessary fields.']);
        }
        
        $profile = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'topic' => $request->topic,
            'message' => $request->message,
        ]);

        return redirect()->back()->with(['success' => 'Query message submitted successfully. We will contact you soon.']);
    }
}
