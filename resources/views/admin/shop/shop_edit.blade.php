@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Shop</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('shop/update/'.$shop->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Building Name: </label>
                    <select class="custom-select" id="name"  name="name"  required>
                        <option value="{{$shop->buildingId}}">{{$shop->building->name}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="floor">Floor Number: </label>
                    <select class="custom-select" id="floor"  name="floor"  required>
                        <option value="{{$shop->floorId}}">{{$shop->floor->floorNumber}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="shop">Shop Number</label>
                    <input type="text" class="form-control" id="shop" value="{{$shop->shopNumber}}" name="shop" required>
                </div>
                <div class="form-group">
                    <label for="shopHeight">Shop Height</label>
                    <input type="number" class="form-control" id="shopHeight" value="{{$shop->shopHeight}}" name="shopHeight" required>
                </div>
                <div class="form-group">
                    <label for="shopWidth">Shop Width</label>
                    <input type="number" class="form-control" id="shopWidth" value="{{$shop->shopWidth}}" name="shopWidth" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
