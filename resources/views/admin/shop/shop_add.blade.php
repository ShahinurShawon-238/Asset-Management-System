@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Shop / Flat</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeShop')}}" method="POST">
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
                    <label for="shop">Shop / Flat Number</label>
                    <input type="text" class="form-control" id="shop" placeholder="Enter Shop / Flat Number" name="shop" required>
                </div>
                <div class="form-group">
                    <label for="shopHeight">Shop / Flat Height</label>
                    <input type="number" class="form-control" id="shopHeight" placeholder="Enter Shop / Flat Height(Square)" name="shopHeight" required>
                </div>
                <div class="form-group">
                    <label for="shopWidth">Shop / Flat Width</label>
                    <input type="number" class="form-control" id="shopWidth" placeholder="Enter Shop / Flat Width(Square)" name="shopWidth" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
