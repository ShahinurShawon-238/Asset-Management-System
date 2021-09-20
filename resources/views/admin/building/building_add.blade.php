@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Building</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeBuilding')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Building Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Building Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="address">Building Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Building Address" name="address" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
