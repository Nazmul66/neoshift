<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::first();
        return view('backend.pages.banner.index', compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $banner = new Banner();

        $banner->title                 = $request->title;
        $banner->main_title            = $request->main_title;
        $banner->description           = $request->description;
        $banner->youtube_video         = $request->youtube_video;
        $banner->url                   = $request->url;

        if( $request->file('image') ){
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/banner/';
            $image->move($imagePath, $imageName);

            $banner->image   = $imagePath . $imageName;
        }

        $banner->save();

        $notification = array(
            'message'    => "Banner section content uploaded successfully.",
            'alert-type' => "success"
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);

        $banner->title                 = $request->title;
        $banner->main_title            = $request->main_title;
        $banner->description           = $request->description;
        $banner->youtube_video         = $request->youtube_video;
        $banner->url                   = $request->url;

        if( $request->file('image') ){
            $image = $request->file('image');

            if( !is_null($banner->image) && file_exists($banner->image) ){
                unlink($banner->image);
           }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/banner/';
            $image->move($imagePath, $imageName);

            $banner->image   = $imagePath . $imageName;
        }

        $banner->save();

        $notification = array(
            'message'    => "Banner section content Updated successfully.",
            'alert-type' => "success"
        );

        return redirect()->back()->with($notification);
    }
}
