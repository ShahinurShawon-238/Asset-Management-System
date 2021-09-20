<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function shop()
    {
        $shop = Shop::paginate(4);
        return view('admin.shop.index', compact('shop'));
    }
    public function addShop()
    {
        $buildings = DB::table('buildings')->get();
        $floors = DB::table('floors')->get();
        return view('admin.shop.shop_add', compact('buildings','floors'));
    }
    public function storeShop(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'floor' => 'required',
        ]);

        Shop::insert([
            'buildingId' => $request->name,
            'floorId' => $request->floor,
            'shopNumber' => $request->shop,
            'shopHeight' => $request->shopHeight,
            'shopWidth' => $request->shopWidth,
            'status'=> 1,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('shop')->with('success', 'Shop Added Successfully');
    }
    public function editShop($id)
    {
        $shop = Shop::find($id);
        return view('admin.shop.shop_edit', compact('shop'));
    }
    public function updateShop(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'floor' => 'required',
        ]);

        Shop::find($id)->update([
            'buildingId' => $request->name,
            'floorId' => $request->floor,
            'shopNumber' => $request->shop,
            'shopHeight' => $request->shopHeight,
            'shopWidth' => $request->shopWidth,
        ]);
        return redirect()->route('shop')->with('success', 'Shop Updated Successfully');

    }
    public function deleteShop($id)
    {
        Shop::find($id)->delete();
        return redirect()->back()->with('success', 'Shop deleted successfully');

    }
    public function changeStatus(Request $request){
        $shops = Shop::find($request->id);
        $shops->status = $request->status;
        $shops->save();
    }
}








