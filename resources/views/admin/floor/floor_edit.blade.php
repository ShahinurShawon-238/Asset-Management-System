@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Floor</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('floor/update/'.$floor->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Building Name: </label>
                    <select class="custom-select" id="name"  name="name"  required>
                        <option value="{{$floor->buildingId}}">{{$floor->building->name}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="floor">Floor Number</label>
                    <input type="text" class="form-control" id="floor" value="{{$floor->floorNumber}}" name="floor" required>
                </div>
                <div class="form-group">
                    <label for="floorHeight">Floor Height</label>
                    <input type="number" class="form-control" id="floorHeight" value="{{$floor->floorHeight}}" name="floorHeight" required>
                </div>
                <div class="form-group">
                    <label for="floorWidth">Floor Width</label>
                    <input type="number" class="form-control" id="floorWidth" value="{{$floor->floorWidth}}" name="floorWidth" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
