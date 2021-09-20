<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdditionalAsset;
use Illuminate\Support\Carbon;



class AdditionalAssetController extends Controller
{
    public function additionalAsset(){
        $additionalAsset = AdditionalAsset::latest()->paginate(4);
        return view('admin.additionalAsset.index', compact('additionalAsset'));
    }
    public function addAsset(){
        return view('admin.additionalAsset.asset_add');
    }
    public function storeAsset(Request $request){
        
        AdditionalAsset::insert([
            'name' => $request->name,
            'details' => $request->details,
            'value' => $request->value,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('additionalAsset')->with('success', 'Asset Added Successfully');
    }
    public function editAsset($id){
        $additionalAsset = AdditionalAsset::find($id);
        return view('admin.additionalAsset.asset_edit', compact('additionalAsset'));
    }
    public function updateAsset(Request $request, $id){
        AdditionalAsset::find($id)->update([
            'name' => $request->name,
            'details' => $request->details,
            'value' => $request->value,
        ]);
        return redirect()->route('additionalAsset')->with('success', 'Asset Updated Successfully');

    }
    public function deleteAsset($id){
        AdditionalAsset::find($id)->delete();
        return redirect()->back()->with('success', 'Asset deleted successfully');

    }
}
