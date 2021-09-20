@extends('admin.admin_master')
@section('admin')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                 <form action="{{route('storeTask')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                                <input type="text" class="form-control" id="task" placeholder="Enter Your Today's Task" name="task" required>
                            
                        </div>
                        <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                        </div>
                    </div>
                 </form>
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="text-center card-header font-weight-bold"> TO Do List</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center" >Task Name</th>
                            <th scope="col" class="text-center" >SL. No</th>
                            <th scope="col" class="text-center" >Status</th>
                            <th scope="col" class="text-center" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($todo as $td)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td class="text-center">{{$td->name}}</td>
                                <td class="text-center">
                                    <input data-id="{{$td->id}}" class="toggle-class3" type="checkbox" data-onstyle="success" data-offstyle="primary"
                                    data-toggle="toggle" data-on="Completed" data-off="Pending" {{$td->status ? 'checked' : ''}}>
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('todo/delete/'.$td->id) }}"
                                        onclick="return confirm('Are you sure to delete?')"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection