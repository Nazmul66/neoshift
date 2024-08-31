<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfo;
use Illuminate\Support\Str;

class BasicInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basicInfo = BasicInfo::first();
        return view('backend.pages.basic_setting.index', compact('basicInfo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $basicInfo = new BasicInfo();

        $basicInfo->whatsapp             = $request->whatsapp;
        $basicInfo->first_name           = $request->first_name;
        $basicInfo->last_name            = $request->last_name;
        $basicInfo->phone                = $request->phone;
        $basicInfo->phone_optional       = $request->phone_optional;
        $basicInfo->email                = $request->email;
        $basicInfo->email_optional       = $request->email_optional;
        $basicInfo->address              = Str::trim($request->address);
        $basicInfo->address_optional     = Str::trim($request->address_optional);
        $basicInfo->facebook_pixel       = Str::trim($request->facebook_pixel);
        $basicInfo->google_analytics     = Str::trim($request->google_analytics);

        $basicInfo->facebook             = $request->facebook;
        $basicInfo->twitter              = $request->twitter;
        $basicInfo->youtube              = $request->youtube;
        $basicInfo->linkedin             = $request->linkedin;
        $basicInfo->instagram            = $request->instagram;
        $basicInfo->pinterest            = $request->pinterest;
        $basicInfo->google_map           = $request->google_map;
        $basicInfo->footer_text          = $request->footer_text;

        if( $request->file('logo') ){
            $logo = $request->file('logo');

            $imageName          = microtime('.') . '.' . $logo->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/basicInfo/';
            $logo->move($imagePath, $imageName);

            $basicInfo->logo   = $imagePath . $imageName;
        }

        if( $request->file('footer_logo') ){
            $footer_logo = $request->file('footer_logo');

            $imageName          = microtime('.') . '.' . $footer_logo->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/basicInfo/';
            $footer_logo->move($imagePath, $imageName);

            $basicInfo->footer_logo   = $imagePath . $imageName;
        }

        if( $request->file('favicon') ){
            $favicon = $request->file('favicon');  

            $imageName          = microtime('.') . '.' . $favicon->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/basicInfo/';
            $favicon->move($imagePath, $imageName);

            $basicInfo->favicon   = $imagePath . $imageName;
        }

        $basicInfo->save();

        $notification = array(
            'message'    => "Basic Information has been Inserted successfully.",
            'alert-type' => "success"
        );

        return redirect()->route('admin.basic-info.index')->with($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $basicInfo = BasicInfo::first();

        $basicInfo->whatsapp             = $request->whatsapp;
        $basicInfo->first_name           = $request->first_name;
        $basicInfo->last_name            = $request->last_name;
        $basicInfo->phone                = $request->phone;
        $basicInfo->phone_optional       = $request->phone_optional;
        $basicInfo->email                = $request->email;
        $basicInfo->email_optional       = $request->email_optional;
        $basicInfo->address              = Str::trim($request->address);
        $basicInfo->address_optional     = Str::trim($request->address_optional);
        $basicInfo->facebook_pixel       = Str::trim($request->facebook_pixel);
        $basicInfo->google_analytics     = Str::trim($request->google_analytics);

        $basicInfo->facebook             = $request->facebook;
        $basicInfo->twitter              = $request->twitter;
        $basicInfo->youtube              = $request->youtube;
        $basicInfo->linkedin             = $request->linkedin;
        $basicInfo->instagram            = $request->instagram;
        $basicInfo->pinterest            = $request->pinterest;
        $basicInfo->google_map           = $request->google_map;
        $basicInfo->footer_text          = $request->footer_text;


        if( $request->file('logo') ){
            $logo = $request->file('logo');

            if( !is_null($basicInfo->logo) && file_exists($basicInfo->logo) ){
                 unlink($basicInfo->logo);
            }

            $imageName          = microtime('.') . '.' . $logo->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/basicInfo/';
            $logo->move($imagePath, $imageName);

            $basicInfo->logo   = $imagePath . $imageName;
        }

        if( $request->file('footer_logo') ){
            $footer_logo = $request->file('footer_logo');

            if( !is_null($basicInfo->footer_logo) && file_exists($basicInfo->footer_logo) ){
                unlink($basicInfo->footer_logo);
            }

            $imageName          = microtime('.') . '.' . $footer_logo->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/basicInfo/';
            $footer_logo->move($imagePath, $imageName);

            $basicInfo->footer_logo   = $imagePath . $imageName;
        }

        if( $request->file('favicon') ){
            $favicon = $request->file('favicon');  

            if( !is_null($basicInfo->favicon) && file_exists($basicInfo->favicon) ){
                unlink($basicInfo->favicon);
           }

            $imageName          = microtime('.') . '.' . $favicon->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/basicInfo/';
            $favicon->move($imagePath, $imageName);

            $basicInfo->favicon   = $imagePath . $imageName;
        }

        $basicInfo->save();

        $notification = array(
            'message'    => "Basic Information has been updated successfully.",
            'alert-type' => "success"
        );

        return redirect()->back()->with($notification);
    }


}
