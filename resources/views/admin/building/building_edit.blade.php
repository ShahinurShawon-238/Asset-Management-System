@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Building</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('building/update/'.$building->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Update Building Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $building->name }}" name="name" required>
                </div>
                <div class="form-group">
                    <label for="address">Update Building Address</label>
                    <input type="text" class="form-control" id="address" value="{{ $building->address }}" name="address" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
