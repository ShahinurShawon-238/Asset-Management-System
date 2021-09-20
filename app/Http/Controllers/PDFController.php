<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Tenant;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $tenants = Tenant::find($id);
        $date = Carbon::now()->toDayDateTimeString();
        $pdf = PDF::loadView('admin.invoice_pdf',compact('tenants', 'date'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('invoice.pdf');
    }
}
