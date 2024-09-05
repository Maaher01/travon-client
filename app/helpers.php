<?php 

use Illuminate\Support\Facades\DB;


if (! function_exists('companyprofile')) {
    function companyprofile()
    {
        $companyprofile = DB::table("companyprofiles")->first();
        return $companyprofile;
    }
}

if (! function_exists('sociallinkinfo')) {
    function sociallinkinfo()
    {
        $sociallinkinfo = DB::table("sociallinks")->get();
        return $sociallinkinfo;
    }
}

if (! function_exists('mainmenu')) {
    function mainmenu()
    {
        $mainmenu = DB::table("menus")->where("_parentmenuid",0)->where("_status",1)->orderBy("_sort","ASC")->get();
        
        return $mainmenu;
    }
}


if (! function_exists('submenu')) {
    function submenu($parentmenu)
    {
        $submenu = DB::table("menus")->where("_parentmenuid",$parentmenu)->where("_status",1)->orderBy("_sort","ASC")->get();
        return $submenu;
    }
}



if (! function_exists('galleryrandimage')) {
    function galleryrandimage()
    {
        $mainmenu = DB::table("images")->where("_menuid",18)->inRandomOrder()->limit(10)->get();
        return $mainmenu;
    }
}


if (! function_exists('breadcrumbimage')) {
    function breadcrumbimage()
    {
        $breadcrumb = DB::table("sections")->where("_status",1)->where("_title","Breadcrumb")->where("_menuid",10)->first();
        
        return $breadcrumb;
    }
}


if (! function_exists('getlatestnotices')) {
    function getlatestnotices()
        {
            $latestnotices = DB::table("sections")->where("id", 56)->get();
            
            return $latestnotices;
        }

}

if (! function_exists('getdepartmentimages')) {
    function getdepartmentimages($id)
        {
            $departmentimages = DB::table("images")->where("_menuid", $id)->get();
            
            return $departmentimages;
        }

}

if (! function_exists('getcontactcomponents')) {
    function getcontactcomponents()
        {
            $getcontactcomponents = DB::table("components")->where("_status", 1)->where("_sectionid", 58)->get();
            
            return $getcontactcomponents;
        }

}
?>