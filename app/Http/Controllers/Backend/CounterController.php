<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counter = Counter::first();
        return view('backend.pages.counter.index', compact('counter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $counter = new Counter();

        $counter->project_title           = $request->project_title;
        $counter->project_count           = $request->project_count;
        $counter->employee_title          = $request->employee_title;
        $counter->employee_count          = $request->employee_count;
        $counter->award_title             = $request->award_title;
        $counter->award_count             = $request->award_count;
        $counter->option_title            = $request->option_title;
        $counter->option_count            = $request->option_count;
        $counter->main_title              = $request->main_title;
        $counter->youtube_video           = $request->youtube_video;

        if( $request->file('image') ){
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/counter/';
            $image->move($imagePath, $imageName);

            $counter->image   = $imagePath . $imageName;
        }

        $counter->save();

        $notification = array(
            'message'    => "Counter section content uploaded successfully.",
            'alert-type' => "success"
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $counter = Counter::find($id);

        $counter->project_title           = $request->project_title;
        $counter->project_count           = $request->project_count;
        $counter->employee_title          = $request->employee_title;
        $counter->employee_count          = $request->employee_count;
        $counter->award_title             = $request->award_title;
        $counter->award_count             = $request->award_count;
        $counter->option_title            = $request->option_title;
        $counter->option_count            = $request->option_count;
        $counter->main_title              = $request->main_title;
        $counter->youtube_video           = $request->youtube_video;

        if( $request->file('image') ){
            $image = $request->file('image');

            if( !is_null($counter->image) && file_exists($counter->image) ){
                unlink($counter->image);
           }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/counter/';
            $image->move($imagePath, $imageName);

            $counter->image   = $imagePath . $imageName;
        }

        $counter->save();

        $notification = array(
            'message'    => "Counter section content Updated successfully.",
            'alert-type' => "success"
        );

        return redirect()->back()->with($notification);
    }
}
