<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RentController extends Controller
{
    public function rent()
    {
        $rent = Rent::latest()->paginate(4);
        return view('admin.rent.index', compact('rent'));
    }
    public function addRent()
    {
        $buildings = DB::table('buildings')->get();
        $floors = DB::table('floors')->get();
        $shops = DB::table('shops')->get();
        return view('admin.rent.rent_add', compact('buildings','floors','shops'));
    }
    public function storeRent(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'floor' => 'required',
            'shop' => 'required',
        ]);

        Rent::insert([
            'buildingId' => $request->name,
            'floorId' => $request->floor,
            'shopId' => $request->shop,
            'rent' => $request->rent,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('rent')->with('success', 'Rent Added Successfully');
    }
    public function editRent($id)
    {
        $rent = Rent::find($id);
        return view('admin.rent.rent_edit', compact('rent'));
    }
    public function updateRent(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'floor' => 'required',
            'shop' => 'required',
        ]);

        Rent::find($id)->update([
            'buildingId' => $request->name,
            'floorId' => $request->floor,
            'shopId' => $request->shop,
            'rent' => $request->rent,
        ]);
        return redirect()->route('rent')->with('success', 'Rent Updated Successfully');

    }
    public function deleteRent($id)
    {
        Rent::find($id)->delete();
        return redirect()->back()->with('success', 'Rent deleted successfully');

    }

}


