@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Tenant</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('tenant/update/'.$tenants->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tenantName">Tenant Name</label>
                            <input type="text" class="form-control" id="tenantName" value="{{$tenants->tenantName}}" name="tenantName" required>
                        </div>
                        <div class="form-group">
                            <label for="tenantEmail">Tenant Email</label>
                            <input type="email" class="form-control" id="tenantEmail" value="{{$tenants->tenantEmail}}" name="tenantEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="tenantPhoneNumber">Tenant Phone Number</label>
                            <input type="number" class="form-control" id="tenantPhoneNumber" value="{{$tenants->tenantPhoneNumber}}" name="tenantPhoneNumber" required>
                        </div>
                        <div class="form-group">
                            <label for="tenantNID">Tenant NID</label>
                            <input type="number" class="form-control" id="tenantNID" value="{{$tenants->tenantNID}}" name="tenantNID" required>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group">
                            <label for="buildingName">Building Name: </label>
                            <select class="custom-select" id="buildingName"  name="buildingName"  required>
                                <option value="{{$tenants->buildingId}}">{{$tenants->building->name}}</option>
                            </select>
                            <span class="text-muted">(Building Name is required)</span>
                        </div>
                        <div class="form-group">
                            <label for="floorNumber">Floor Number: </label>
                            <select class="custom-select" id="floorNumber"  name="floorNumber"  required>
                                <option value="{{$tenants->floorId}}">{{$tenants->floor->floorNumber}}</option>
                            </select>
                            <span class="text-muted">(Floor Number is required)</span>
                        </div>
                        <div class="form-group">
                            <label for="shopNumber">Shop Number: </label>
                            <select class="custom-select" id="shopNumber"  name="shopNumber"  required>
                                <option value="{{$tenants->shopId}}">{{$tenants->shop->shopNumber}}</option>
                            </select>
                            <span class="text-muted">(Shop Number is required)</span>
                        </div>
                        <div class="form-group">
                            <label for="rent">Rent: </label>
                            <select class="custom-select" id="rent"  name="rent"  required>
                                <option value="{{$tenants->rentId}}">{{$tenants->rent->rent}}</option>
                            </select>
                            <span class="text-muted">(Rent is required)</span>
                        </div>
                        <div class=" pt-4 pt-5 float-right border-top">
                            <button type="submit" class="btn btn-primary btn-default">Submit</button>
                        </div>
                    </div>
                </div>
                
                
                
            </form>
        </div>
    </div>
</div>
@endsection
