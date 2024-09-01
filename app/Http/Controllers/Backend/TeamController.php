<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
{
    public function index()
    {
        return view('backend.pages.team.index');
    }

    public function getData(Request $request)
    {
        $teams = Team::all();

        // dd($blogs);

        return DataTables::of($teams)
             ->addIndexColumn()
             ->addColumn('image', function ($team) {
                return '<img src="'. asset($team->image) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('social_links', function ($team) {
                return '<div>
                Twitter : <span class="badge bg-primary mb-2"> '.$team->twitter.' </span> <br/>
                Facebook : <span class="badge bg-primary mb-2"> '.$team->facebook.' </span> <br/>
                Instagram : <span class="badge bg-primary mb-2"> '.$team->instagram.' </span> <br/>
                Linkedin : <span class="badge bg-primary mb-2"> '.$team->linkedin.' </span>
                </div>';
            })
             ->addColumn('status', function ($team) {
                if ($team->status == 1) {
                    return '<span class="badge bg-primary cursor-pointer" id="status" data-id="'.$team->id.'" data-status=" '.$team->status.' ">Active</span>';
                } else {
                    return '<span class="badge bg-danger cursor-pointer" id="status" data-id="'.$team->id.'" data-status=" '.$team->status.' ">Deactive</span>';
                }
            })
            ->addColumn('action', function ($team) {
                return '<div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $team->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $team->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })
            ->rawColumns(['image', 'social_links', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $team = new Team();

        $team->name               = $request->name;
        $team->position           = $request->position;
        $team->twitter            = $request->twitter;
        $team->facebook           = $request->facebook;
        $team->instagram          = $request->instagram;
        $team->linkedin           = $request->linkedin;
        $team->description        = $request->description;
        $team->status             = $request->status;

        if( $request->file('image') ){
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/team/';
            $image->move($imagePath, $imageName);

            $team->image   = $imagePath . $imageName;
        }

        $team->save();

        return response()->json(['message' => 'Successfully Team Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminTeamStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Team::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);
        return response()->json(['success' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $team = Team::find($id);

        $team->name               = $request->name;
        $team->position           = $request->position;
        $team->twitter            = $request->twitter;
        $team->facebook           = $request->facebook;
        $team->instagram          = $request->instagram;
        $team->linkedin           = $request->linkedin;
        $team->description        = $request->description;
        $team->status             = $request->status;

        if( $request->file('image') ){
            $image = $request->file('image');

            if( !is_null($team->image) && file_exists($team->image) ){
                unlink($team->image);
             }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/team/';
            $image->move($imagePath, $imageName);

            $team->image   = $imagePath . $imageName;
        }

        $team->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);

        if ( !is_null($team->image) ) {
            if (file_exists($team->image)) {
                unlink($team->image);
            }
        }
        $team->delete();

        return response()->json(['message' => 'Team has been deleted.'], 200);
    }
}
