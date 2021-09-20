@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('addFloor')}}"><button class="btn btn-info">Add Floor</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Floor</div>
                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th scope="col" class="text-center" >Building Name</th>
                                <th scope="col" class="text-center" >Floor Number</th>
                                <th scope="col" class="text-center" >Floor Size(sq*sq)</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($floor as $f)
                                <tr>
                                    <td class="text-center">{{$f->building->name}}</td>
                                    <td class="text-center">{{$f->floorNumber}}</td>
                                    <td class="text-center">{{$f->floorHeight}}*{{$f->floorWidth}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('floor/edit/'.$f->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('floor/delete/'.$f->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $floor->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
