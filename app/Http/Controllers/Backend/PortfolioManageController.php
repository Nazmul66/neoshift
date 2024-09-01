<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioManage;
use App\Models\PortfolioCategory;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class PortfolioManageController extends Controller
{
    public function index()
    {
        $portfolioCategories =  PortfolioCategory::where('status', 1)->get();
        return view('backend.pages.portfolio-manage.index', compact('portfolioCategories'));
    }

    public function getData()
    {
        $portfolioManages = DB::table('portfolio_manages')
                        ->join('portfolio_categories', 'portfolio_categories.id', '=', 'portfolio_manages.category_id')
                        ->select('portfolio_categories.category_name', 'portfolio_manages.*')
                        ->get();
        // dd($portfolioManage);

        return DataTables::of($portfolioManages)
             ->addIndexColumn()
             ->addColumn('image', function ($portfolioManage) {
                return '<img src="'. asset( $portfolioManage->portfolio_image ) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('category_name', function ($portfolioManage) {
                return '<span class="badge bg-primary cursor-pointer">'. $portfolioManage->category_name .'</span>';
             })
             ->addColumn('url', function ($portfolioManage) {
                return '<span class="badge bg-success cursor-pointer">'. $portfolioManage->portfolio_url .'</span>';
             })
             ->addColumn('status', function ($portfolioManage) {
                if ($portfolioManage->status == 1) {
                    return '<span class="badge bg-primary cursor-pointer" id="status" data-id="'.$portfolioManage->id.'" data-status=" '.$portfolioManage->status.' ">Active</span>';
                } else {
                    return '<span class="badge bg-danger cursor-pointer" id="status" data-id="'.$portfolioManage->id.'" data-status=" '.$portfolioManage->status.' ">Deactive</span>';
                }
            })
            ->addColumn('action', function ($portfolioManage) {
                return '<div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $portfolioManage->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $portfolioManage->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })
            ->rawColumns(['image', 'url', 'category_name', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $portfolioManage = new PortfolioManage();

        $portfolioManage->category_id          = $request->category_id;
        $portfolioManage->portfolio_name       = $request->portfolio_name;
        $portfolioManage->portfolio_url        = $request->portfolio_url;
        $portfolioManage->status               = $request->status;

        if( $request->file('portfolio_image') ){
            $portfolio_image = $request->file('portfolio_image');

            $imageName          = microtime('.') . '.' . $portfolio_image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/portfolio/';
            $portfolio_image->move($imagePath, $imageName);

            $portfolioManage->portfolio_image   = $imagePath . $imageName;
        }

        $portfolioManage->save();

        return response()->json(['message' => 'Successfully Portfolio Manage Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminPortfolioManageStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = PortfolioManage::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolioManage = PortfolioManage::find($id);
        return response()->json(['success' => $portfolioManage]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $portfolioManage  = PortfolioManage::find($id);

        $portfolioManage->category_id          = $request->category_id;
        $portfolioManage->portfolio_name       = $request->portfolio_name;
        $portfolioManage->portfolio_url        = $request->portfolio_url;
        $portfolioManage->status               = $request->status;

        if( $request->file('portfolio_image') ){
            $portfolio_image = $request->file('portfolio_image');

            if( !is_null($portfolioManage->portfolio_image) && file_exists($portfolioManage->portfolio_image) ){
                unlink($portfolioManage->portfolio_image);
             }

            $imageName          = microtime('.') . '.' . $portfolio_image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/portfolio/';
            $portfolio_image->move($imagePath, $imageName);

            $portfolioManage->portfolio_image   = $imagePath . $imageName;
        }

        $portfolioManage->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolioManage = PortfolioManage::find($id);

        if ( !is_null($portfolioManage->portfolio_image) ) {
            if (file_exists($portfolioManage->portfolio_image)) {
                unlink($portfolioManage->portfolio_image);
            }
        }

        $portfolioManage->delete();

        return response()->json(['message' => 'Portfolio Manage has been deleted.'], 200);
    }
}
