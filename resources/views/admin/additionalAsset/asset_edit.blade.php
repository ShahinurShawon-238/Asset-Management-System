@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Asset</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('additional/asset/update/'.$additionalAsset->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Asset Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $additionalAsset->name }}" name="name" required>
                </div>
                <div class="form-group">
                    <label for="details">Asset Details</label>
                    <input type="text" class="form-control" id="details" value="{{ $additionalAsset->details }}" name="details" required>
                </div>
                <div class="form-group">
                    <label for="value">Asset Value</label>
                    <input type="text" class="form-control" id="value" value="{{ $additionalAsset->value }}" name="value" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
