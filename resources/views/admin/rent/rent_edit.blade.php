@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Rent</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('rent/update/'.$rent->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Building Name: </label>
                    <select class="custom-select" id="name"  name="name"  required>
                        <option value="{{$rent->buildingId}}">{{$rent->building->name}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="floor">Floor Number: </label>
                    <select class="custom-select" id="floor"  name="floor"  required>
                        <option value="{{$rent->floorId}}">{{$rent->floor->floorNumber}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="shop">Shop Number: </label>
                    <select class="custom-select" id="shop"  name="shop"  required>
                        <option value="{{$rent->shopId}}">{{$rent->shop->shopNumber}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rent">Rent</label>
                    <input type="text" class="form-control" id="rent" value="{{$rent->rent}}" name="rent" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
