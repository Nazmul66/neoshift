<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\PortfolioManage;

class WebViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view("frontend.pages.index");
    }

    public function about()
    {
        return view("frontend.pages.static_pages.about-us");
    }

    public function blog()
    {
        return view("frontend.pages.static_pages.blog");
    }

    public function faq()
    {
        return view("frontend.pages.static_pages.faq");
    }

    public function schedule_meeting()
    {
        return view("frontend.pages.static_pages.schedule-meeting");
    }

    public function portfolio()
    {
        return view("frontend.pages.static_pages.portfolio");
    }

    public function service()
    {
        return view("frontend.pages.static_pages.service");
    }

    public function info_store(Request $request)
    {
        // dd($request->all());
        $information = new Information();

        $information->name          =   $request->name;
        $information->phone         =   $request->phone;
        $information->email         =   $request->email;
        $information->ip            =   $request->ip();
        $information->country_name  =   $request->country_name;
        $information->countryCode   =   $request->countryCode;
        $information->regionName    =   $request->regionName;
        $information->zipCode       =   $request->zipCode;
        $information->timezone      =   $request->timezone;

        $information->save();

        $notifications = [
            'alert-type' => 'success',
            'message' => 'Thank you for submitting the form.',
        ];

        return redirect()->back()->with($notifications);
    }

    public function home_tabData(string $id)
    {
        // dd($id);
       $portfolioManages = PortfolioManage::where('category_id', $id)->take(9)->get();

       return response()->json(['status' => true, "data" => $portfolioManages], 200);
    }

    public function all_tabData(string $id)
    {
        // dd($id);
       $portfolioManages = PortfolioManage::where('category_id', $id)->get();

       return response()->json(['status' => true, "data" => $portfolioManages], 200);
    }

   
}
