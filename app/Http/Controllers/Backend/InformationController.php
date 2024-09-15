<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function index()
    {
        return view('backend.pages.contact-information.index');
    }

    public function getData()
    {
        $informations = Information::all();
        // dd($informations);

        return DataTables::of($informations)
             ->addIndexColumn()
             ->addColumn('track_location', function ($information) {
                return '<div>
                        Ip Address: <span class="badge bg-primary cursor-pointer">'. $information->ip .'</span> <br />
                        Country Name: <span class="badge bg-primary cursor-pointer">'. $information->country_name .'</span> <br />
                        Country Code: <span class="badge bg-primary cursor-pointer">'. $information->countryCode .'</span> <br />
                        Region Name: <span class="badge bg-primary cursor-pointer">'. $information->regionName .'</span> <br />
                        zipCode: <span class="badge bg-primary cursor-pointer">'. $information->zipCode .'</span> <br />
                        timezone: <span class="badge bg-primary cursor-pointer">'. $information->timezone .'</span> <br />
                </div>';
             })
             ->addColumn('status', function ($information) {
                if ($information->status == 1) {
                    return '<span class="badge bg-primary cursor-pointer" id="status" data-id="'.$information->id.'" data-status=" '.$information->status.' ">Active</span>';
                } else {
                    return '<span class="badge bg-danger cursor-pointer" id="status" data-id="'.$information->id.'" data-status=" '.$information->status.' ">Deactive</span>';
                }
            })
            ->addColumn('action', function ($information) {
                return '<div class="">
                    <button type="button" id="deleteBtn" data-id="' . $information->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })
            ->rawColumns(['track_location', 'status', 'action'])
            ->make(true);
    }

    /**
     * Display the specified resource.
     */
    public function adminContactInfoStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Information::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $information = Information::find($id);

        $information->delete();

        return response()->json(['message' => 'Information has been deleted.'], 200);
    }
}
