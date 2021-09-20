@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <iframe height="450"  width="1000" src="{{public_path('files/'.$data->file)}}"></iframe>
</div>
@endsection
