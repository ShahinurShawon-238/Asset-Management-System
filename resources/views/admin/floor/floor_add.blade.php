@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Floor</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeFloor')}}" method="POST">
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
                    <label for="floor">Floor Number</label>
                    <input type="text" class="form-control" id="floor" placeholder="Enter Floor Number" name="floor" required>
                </div>
                <div class="form-group">
                    <label for="floorHeight">Floor Height</label>
                    <input type="number" class="form-control" id="floorHeight" placeholder="Enter Floor Height(Square)" name="floorHeight" required>
                </div>
                <div class="form-group">
                    <label for="floorWidth">Floor Width</label>
                    <input type="number" class="form-control" id="floorWidth" placeholder="Enter Floor Width(Square)" name="floorWidth" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
