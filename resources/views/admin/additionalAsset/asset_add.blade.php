@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Asset</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeAsset')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Asset Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Asset Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="details">Asset Details</label>
                    <input type="text" class="form-control" id="details" placeholder="Enter Asset Details" name="details" required>
                </div>
                <div class="form-group">
                    <label for="value">Asset Value</label>
                    <input type="text" class="form-control" id="value" placeholder="Enter Asset Value(Number)" name="value" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
