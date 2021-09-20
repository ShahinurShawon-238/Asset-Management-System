@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Tenant</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeTenant')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tenantName">Tenant Name</label>
                            <input type="text" class="form-control" id="tenantName" placeholder="Enter Tenant Name" name="tenantName" required>
                        </div>
                        <div class="form-group">
                            <label for="tenantEmail">Tenant Email</label>
                            <input type="email" class="form-control" id="tenantEmail" placeholder="Enter Tenant Email" name="tenantEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="tenantPhoneNumber">Tenant Phone Number</label>
                            <input type="number" class="form-control" id="tenantPhoneNumber" placeholder="Enter Tenant Phone Number" name="tenantPhoneNumber" required>
                        </div>
                        <div class="form-group">
                            <label for="tenantNID">Tenant NID</label>
                            <input type="text" class="form-control" id="tenantNID" placeholder="Enter Tenant NID" name="tenantNID" required>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group">
                            <label for="buildingName">Building Name: </label>
                            <select class="custom-select" id="buildingName"  name="buildingName"  required>
                                <option selected disabled>Select Building</option>
                                @foreach ($buildings as $building)
                            <option value="{{$building->id}}">{{$building->name}}</option>
                        @endforeach
                            </select>
                            <span class="text-muted">(Building Name is required)</span>
                        </div>
                        <div class="form-group">
                            <label for="floorNumber">Floor Number: </label>
                            <select class="custom-select" id="floorNumber"  name="floorNumber"  required>
                                <option selected disabled>Select Floor</option>
                                @foreach ($floors as $floor)
                            <option value="{{$floor->id}}">{{$floor->floorNumber}}</option>
                        @endforeach
                            </select>
                            <span class="text-muted">(Floor Number is required)</span>
                        </div>
                        <div class="form-group">
                            <label for="shopNumber">Shop Number: </label>
                            <select class="custom-select" id="shopNumber"  name="shopNumber"  required>
                                <option selected disabled>Select Shop</option>
                                @foreach ($shops as $shop)
                                    @if($shop->status == 1)
                                        <option value="{{$shop->id}}">{{$shop->shopNumber}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <span class="text-muted">(Shop Number is required)</span>
                        </div>
                        <div class="form-group">
                            <label for="rent">Rent: </label>
                            <select class="custom-select" id="rent"  name="rent"  required>
                                <option selected disabled>Select Shop</option>
                                @foreach ($rents as $rent)
                                    <option value="{{$rent->id}}">{{$rent->rent}}</option>
                                @endforeach
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
