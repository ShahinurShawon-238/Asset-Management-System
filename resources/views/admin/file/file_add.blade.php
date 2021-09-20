@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add File</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeFile')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">File Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter File Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">File Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter File Description" name="description" required>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="file" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
