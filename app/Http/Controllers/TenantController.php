<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Tenant;
use App\Models\Rent;


class TenantController extends Controller
{
    public function tenant()
    {
        $tenant = Tenant::latest()->paginate(2);
        return view('admin.tenant.index', compact('tenant'));
    }
    public function addTenant()
    {   $buildings = DB::table('buildings')->get();
        $floors = DB::table('floors')->get();
        $shops = DB::table('shops')->get();
        $rents = DB::table('rents')->get();
        return view('admin.tenant.tenant_add', compact('buildings','floors','shops','rents'));
    }
    public function storeTenant(Request $request)
    {
        $validate = $request->validate([
            'buildingName' => 'required',
            'floorNumber' => 'required',
            'shopNumber' => 'required',
            'rent' => 'required',
        ]);

        Tenant::insert([
            'tenantName' => $request->tenantName,
            'tenantEmail' => $request->tenantEmail,
            'tenantPhoneNumber' => $request->tenantPhoneNumber,
            'tenantNID' => $request->tenantNID,
            'buildingId' => $request->buildingName,
            'floorId' => $request->floorNumber,
            'shopId' => $request->shopNumber,
            'rentId' => $request->rent,
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('tenant')->with('success', 'Tenant Added Successfully');
    }
    public function editTenant($id)
    {
        $tenants = Tenant::find($id);
        return view('admin.tenant.tenant_edit', compact('tenants'));
    }
    public function updateTenant(Request $request, $id)
    {
        $validate = $request->validate([
            'buildingName' => 'required',
            'floorNumber' => 'required',
            'shopNumber' => 'required',
            'rent' => 'required',
        ]);

        Tenant::find($id)->update([
            'tenantName' => $request->tenantName,
            'tenantEmail' => $request->tenantEmail,
            'tenantPhoneNumber' => $request->tenantPhoneNumber,
            'tenantNID' => $request->tenantNID,
            'buildingId' => $request->buildingName,
            'floorId' => $request->floorNumber,
            'shopId' => $request->shopNumber,
            'rentId' => $request->rent,
        ]);
        return redirect()->route('tenant')->with('success', 'Tenant Updated Successfully');
    }
    public function deleteTenant($id)
    {
        Tenant::find($id)->delete();
        return redirect()->back()->with('success', 'Tenant deleted successfully');

    }
    public function tenantInvoice($id){
        $tenants = Tenant::find($id);
        $date = Carbon::now()->toDayDateTimeString();
        return view('admin.invoice', compact('tenants', 'date'));
    }
    public function changeStatus2(Request $request){
        $tenants = Tenant::find($request->id);
        $tenants->status = $request->status;
        $tenants->save();
        


    }
}



