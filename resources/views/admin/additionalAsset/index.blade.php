@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('addAsset')}}"><button class="btn btn-info">Add Asset</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Additional Asset</div>
                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th scope="col" class="text-center" >Name</th>
                                <th scope="col" class="text-center" >Details</th>
                                <th scope="col" class="text-center" >Value</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($additionalAsset as $aa)
                                <tr>
                                    <td class="text-center">{{$aa->name}}</td>
                                    <td class="text-center">{{$aa->details}}</td>
                                    <td class="text-center">{{$aa->value}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('additional/asset/edit/'.$aa->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('additional/asset/delete/'.$aa->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $additionalAsset->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
