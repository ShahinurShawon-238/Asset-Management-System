<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use Illuminate\Support\Carbon;




class BuildingController extends Controller
{
    public function building(){
        $building = Building::latest()->paginate(4);
        return view('admin.building.index', compact('building'));
    }
    public function addBuilding(){
        return view('admin.building.building_add');
    }
    public function storeBuilding(Request $request){
        
        Building::insert([
            'name' => $request->name,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('building')->with('success', 'Building Added Successfully');
    }
    public function editBuilding($id){
        $building = Building::find($id);
        return view('admin.building.building_edit', compact('building'));
    }
    public function updateBuilding(Request $request, $id){
        Building::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect()->route('building')->with('success', 'Building Updated Successfully');

    }
    public function deleteBuilding($id){
        Building::find($id)->delete();
        return redirect()->back()->with('success', 'Building deleted successfully');

    }
}
