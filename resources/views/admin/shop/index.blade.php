@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('addShop')}}"><button class="btn btn-info">Add Shop</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Shops</div>
                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th scope="col" class="text-center" >Building Name</th>
                                <th scope="col" class="text-center" >Floor Number</th>
                                <th scope="col" class="text-center" >Shop Number</th>
                                <th scope="col" class="text-center" >Shop Size(sq*sq)</th>
                                <th scope="col" class="text-center" >Status</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($shop as $s)
                                <tr>
                                    <td class="text-center">{{$s->building->name}}</td>
                                    <td class="text-center">{{$s->floor->floorNumber}}</td>
                                    <td class="text-center">{{$s->shopNumber}}</td>
                                    <td class="text-center">{{$s->shopHeight}}*{{$s->shopWidth}}</td>
                                    <td class="text-center">
                                        <input data-id="{{$s->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger"
                                        data-toggle="toggle" data-on="Available" data-off="Not Available" {{$s->status ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('shop/edit/'.$s->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('shop/delete/'.$s->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $shop->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

