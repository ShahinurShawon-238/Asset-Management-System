<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floor;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;



class FloorController extends Controller
{
    public function floor(){
        $floor = Floor::latest()->paginate(4);
        return view('admin.floor.index', compact('floor'));
    }
    public function addFloor(){
        $buildings = DB::table('buildings')->get();
        return view('admin.floor.floor_add', compact('buildings'));
    }
    public function storeFloor(Request $request){
        $validate = $request->validate([
            'name' => 'required',
        ]);

        Floor::insert([
            'buildingId' => $request->name,
            'floorNumber' => $request->floor,
            'floorHeight' => $request->floorHeight,
            'floorWidth' => $request->floorWidth,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('floor')->with('success', 'Floor Added Successfully');
    }
    public function editFloor($id){
        $floor = Floor::find($id);
        $buildings = DB::table('buildings')->get();
        return view('admin.floor.floor_edit', compact('floor'));
    }
    public function updateFloor(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required',
        ]);

        Floor::find($id)->update([
            'buildingId' => $request->name,
            'floorNumber' => $request->floor,
            'floorHeight' => $request->floorHeight,
            'floorWidth' => $request->floorWidth,
        ]);
        return redirect()->route('floor')->with('success', 'Floor Updated Successfully');

    }
    public function deleteFloor($id){
        Floor::find($id)->delete();
        return redirect()->back()->with('success', 'Floor deleted successfully');

    }
}






