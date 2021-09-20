@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('addBuilding')}}"><button class="btn btn-info">Add Building</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Buildings</div>
                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th scope="col" class="text-center" >Name</th>
                                <th scope="col" class="text-center" >Address</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($building as $b)
                                <tr>
                                    <td class="text-center">{{$b->name}}</td>
                                    <td class="text-center">{{$b->address}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('building/edit/'.$b->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('building/delete/'.$b->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $building->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
