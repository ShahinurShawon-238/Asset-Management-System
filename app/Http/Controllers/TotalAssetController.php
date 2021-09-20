<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Tenant;

class TotalAssetController extends Controller
{
    public function totalAsset()
    {
        $asset = Tenant::latest()->paginate(6);
        return view('admin.totalAsset.index', compact('asset'));
    }
}
