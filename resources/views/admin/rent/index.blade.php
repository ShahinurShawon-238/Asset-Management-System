@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('addRent')}}"><button class="btn btn-info">Add Rent</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Rents</div>
                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th scope="col" class="text-center" >Building Name</th>
                                <th scope="col" class="text-center" >Floor Number</th>
                                <th scope="col" class="text-center" >Shop Number</th>
                                <th scope="col" class="text-center" >Rent</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rent as $r)
                                <tr>
                                    <td class="text-center">{{$r->building->name}}</td>
                                    <td class="text-center">{{$r->floor->floorNumber}}</td>
                                    <td class="text-center">{{$r->shop->shopNumber}}</td>
                                    <td class="text-center">{{$r->rent}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('rent/edit/'.$r->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('rent/delete/'.$r->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $rent->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
