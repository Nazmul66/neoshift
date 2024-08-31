<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;


class BlogController extends Controller
{
    public function index()
    {
        return view('backend.pages.blog.index');
    }

    public function getData()
    {
        $blogs = Blog::all();

        return DataTables::of($blogs)
            ->addIndexColumn()
            ->addColumn('image',function ($blog){
                $imgPath= asset($blog->image);
                return '<img src="'.$imgPath.'" width="80" height="50" alt="">';
            })

            ->addColumn('status', function ($blog) {
                if ($blog->status == 1) {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$blog->id.'" data-status="'.$blog->status.'">Active</i>
                    </a>';
                } else {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$blog->id.'" data-status="'.$blog->status.'">InActive
                    </a>';
                }
            })
            ->addColumn('action', function ($blog) {
                return '<div class="d-flex gap-3"> <a class="editButton btn btn-sm btn-primary" id="editButton" href="javascript:void(0)" data-id="'.$blog->id.'" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>

                <a class="btn btn-sm btn-danger" href="javascript:void(0)" data-id="'.$blog->id.'" id="deleteBtn">Delete</a>
            </div>';

            })
            ->rawColumns(['action', 'status', 'image'])
            ->make(true);
    }


    public function store(Request $request)
    {
        $blog  = new Blog();

        $blog->title              = $request->title;
        $blog->description        = $request->description;
        $blog->date_time          = Carbon::today()->format('Y-m-d');;
        $blog->view               = 0;
        $blog->status             = 1;
       

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('/backend/image/blog/'), $filename);
            $blog->image = 'public/backend/image/blog/'.$filename;
        }

        $blog->save();

        return response()->json(['message' => 'success'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return response()->json(['message' => 'success', 'data' => $blog], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->title              = $request->title;
        $blog->description        = $request->description;

        if ($request->hasFile('image')) {
            
            if ($blog->image &&   file_exists($blog->image)) {
                unlink($blog->image);
            }
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('/backend/image/blog/'), $filename);
            $blog->image = 'public/backend/image/blog/'.$filename;
        }
        $blog->update();

        return response()->json(['message' => 'success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        if ($blog->image &&   file_exists($blog->image)) {
            unlink($blog->image);
        }

        return response()->json(['message' => 'success'], 200);
    }

    public function blogStatus(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        if ($status == 1) {
            $stat = 0;
        } else {
            $stat = 1;
        }

        $page = Blog::findOrFail($id);
        $page->status = $stat;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $stat, 'id' => $id]);
    }
}
