<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail($id){
        $tenant = Tenant::find($id);
        $details = [
            'title' => 'Mail from DCL',
            'body' => 'Tenant Name: '.$tenant->tenantName.",\n".'Tenant Phone Number: '.$tenant->tenantPhoneNumber.",\n".'Tenant NID: '.$tenant->tenantNID.",\n".'Building Name: '.$tenant->building->name.",\n".'Floor Number: '.$tenant->floor->floorNumber.",\n".'Shop Number: '.$tenant->shop->shopNumber.",\n".'Rent: '.$tenant->rent->rent.'Taka'.' '.'Bill: Paid'
        ];
        Mail::to($tenant->tenantEmail)->send(new SendMail($details));
        return redirect()->route('tenant')->with('success', 'Email Sent');

    }
}
