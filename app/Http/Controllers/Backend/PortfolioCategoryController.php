<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use Yajra\DataTables\DataTables;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        return view('backend.pages.portfolio-category.index');
    }

    public function getData()
    {
        $portfolioCategories = PortfolioCategory::all();
        // dd($testimonials);

        return DataTables::of($portfolioCategories)
             ->addIndexColumn()
             ->addColumn('icon', function ($portfolioCategory) {
                return '<span class="badge bg-success">'. $portfolioCategory->category_icon .'</span>';
             })
             ->addColumn('status', function ($portfolioCategory) {
                if ($portfolioCategory->status == 1) {
                    return '<span class="badge bg-primary cursor-pointer" id="status" data-id="'.$portfolioCategory->id.'" data-status=" '.$portfolioCategory->status.' ">Active</span>';
                } else {
                    return '<span class="badge bg-danger cursor-pointer" id="status" data-id="'.$portfolioCategory->id.'" data-status=" '.$portfolioCategory->status.' ">Deactive</span>';
                }
            })
            ->addColumn('action', function ($portfolioCategory) {
                return '<div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $portfolioCategory->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $portfolioCategory->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })
            ->rawColumns(['icon', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $portfolioCategory = new PortfolioCategory();

        $portfolioCategory->category_name       = $request->category_name;
        $portfolioCategory->category_icon       = $request->category_icon;
        $portfolioCategory->status              = $request->status;

        $portfolioCategory->save();

        return response()->json(['message' => 'Successfully Portfolio Category Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminPortfolioCategoryStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = PortfolioCategory::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolioCategory = PortfolioCategory::find($id);
        return response()->json(['success' => $portfolioCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $portfolioCategory  = PortfolioCategory::find($id);

        $portfolioCategory->category_name       = $request->category_name;
        $portfolioCategory->category_icon       = $request->category_icon;
        $portfolioCategory->status              = $request->status;

        $portfolioCategory->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolioCategory = PortfolioCategory::find($id);

        if ( !is_null($portfolioCategory->category_icon) ) {
            if (file_exists($portfolioCategory->category_icon)) {
                unlink($portfolioCategory->category_icon);
            }
        }

        $portfolioCategory->delete();

        return response()->json(['message' => 'Portfolio Category has been deleted.'], 200);
    }
}
