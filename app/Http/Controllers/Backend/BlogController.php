<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;


class BlogController extends Controller
{
    public function index()
    {
        return view('backend.pages.blog.index');
    }

    public function getData(Request $request)
    {
        $blogs = Blog::all();

        // dd($blogs);

        return DataTables::of($blogs)
             ->addIndexColumn()
             ->addColumn('image', function ($blog) {
                return '<img src="'. asset($blog->image) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('status', function ($blog) {
                if ($blog->status == 1) {
                    return '<span class="badge bg-primary cursor-pointer" id="status" data-id="'.$blog->id.'" data-status="'.$blog->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-danger cursor-pointer" id="status" data-id="'.$blog->id.'" data-status="'.$blog->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($blog) {
                return '<div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $blog->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $blog->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })
            ->rawColumns(['image', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $blog = new Blog();

        $blog->title              = $request->title;
        $blog->description        = $request->description;
        $blog->date_time          = Carbon::today()->format('Y-m-d');
        $blog->view               = 0;
        $blog->status             = $request->status;

        if( $request->file('image') ){
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/blog/';
            $image->move($imagePath, $imageName);

            $blog->image   = $imagePath . $imageName;
        }

        $blog->save();

        return response()->json(['message' => 'successfully Blog Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminBlogStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Blog::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return response()->json(['success' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $blog = Blog::find($id);

        $blog->title              = $request->title;
        $blog->description        = $request->description;
        $blog->status             = $request->status;

        if( $request->file('image') ){
            $image = $request->file('image');

            if( !is_null($blog->image) && file_exists($blog->image) ){
                unlink($blog->image);
             }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/blog/';
            $image->move($imagePath, $imageName);

            $blog->image   = $imagePath . $imageName;
        }

        $blog->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);

        if ( !is_null($blog->image) ) {
            if (file_exists($blog->image)) {
                unlink($blog->image);
            }
        }

        $blog->delete();

        return response()->json(['message' => 'Blog has been deleted.'], 200);
    }
}
