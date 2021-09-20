@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('addFile')}}"><button class="btn btn-info">Add File</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Files</div>
                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th scope="col" class="text-center" >Name</th>
                                <th scope="col" class="text-center" >Description</th>
                                <th scope="col" class="text-center" >File</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($file as $f)
                                <tr>
                                    <td class="text-center">{{$f->name}}</td>
                                    <td class="text-center">{{$f->description}}</td>
                                    <td class="text-center">{{$f->file}}</td>
                                    <td class="text-center">
                                        <!-- <a href="{{ url('file/view/'.$f->id) }}" class="btn btn-primary">View</a> -->
                                        <a href="{{ url('file/download/'.$f->file) }}" class="btn btn-success">Download</a>
                                        <a href="{{ url('file/delete/'.$f->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $file->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
