@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Rent</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeRent')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Building Name: </label>
                    <select class="custom-select" id="name"  name="name"  required>
                        <option selected disabled>Select Building</option>
                        @foreach ($buildings as $building)
                            <option value="{{$building->id}}">{{$building->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-muted">(Building Name is required)</span>
                </div>
                <div class="form-group">
                    <label for="floor">Floor Number: </label>
                    <select class="custom-select" id="floor"  name="floor"  required>
                        <option selected disabled>Select Floor</option>
                        @foreach ($floors as $floor)
                            <option value="{{$floor->id}}">{{$floor->floorNumber}}</option>
                        @endforeach
                    </select>
                    <span class="text-muted">(Floor Number is required)</span>
                </div>
                <div class="form-group">
                    <label for="shop">Shop Number: </label>
                    <select class="custom-select" id="shop"  name="shop"  required>
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
                    <label for="rent">Rent</label>
                    <input type="text" class="form-control" id="rent" placeholder="Enter Shop Rent" name="rent" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
