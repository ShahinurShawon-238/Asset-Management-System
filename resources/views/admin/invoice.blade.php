@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Invoice</h2>
        </div>
        <div class="card-body">
            Date: <span class="text-primary">{{$date}}</span><br>
            Tenant Name: {{$tenants->tenantName}}<br>
            Tenant Email: {{$tenants->tenantEmail}}<br>
            Tenant Phone Number: {{$tenants->tenantPhoneNumber}}<br>
            Tenant NID: {{$tenants->tenantNID}}<br>
            Building Name: {{$tenants->building->name}}<br>
            Floor Number: {{$tenants->floor->floorNumber}}<br>
            Shop Number: {{$tenants->shop->shopNumber}}<br>
            Rent: {{$tenants->rent->rent}}Taka<br>
            <h1 class="text-success">Paid</h1><br>

            Bill Generator: <span class="text-primary">DCL</span>
            <div class="float-right">
                <a href="{{ url('send-email/'.$tenants->id) }}" class="btn btn-primary">Send Mail</a>
                <a href="{{ url('generate-pdf/'.$tenants->id) }}" class="btn btn-primary">Download</a>
            </div>
            
        </div>
    </div>
</div>
@endsection
