@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('addTenant')}}"><button class="btn btn-info">Add Tenant</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Tenants</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" >Tenant Name</th>
                                <th scope="col" class="text-center" >Tenant Email</th>
                                <th scope="col" class="text-center" >Phone Number</th>
                                <th scope="col" class="text-center" >Tenant NID</th>
                                <th scope="col" class="text-center" >Building Name</th>
                                <th scope="col" class="text-center" >Floor Number</th>
                                <th scope="col" class="text-center" >Shop Number</th>
                                <th scope="col" class="text-center" >Rent</th>
                                <th scope="col" class="text-center" >Status</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tenant as $t)
                                <tr>
                                    <td class="text-center">{{$t->tenantName}}</td>
                                    <td class="text-center">{{$t->tenantEmail}}</td>
                                    <td class="text-center">{{$t->tenantPhoneNumber}}</td>
                                    <td class="text-center">{{$t->tenantNID}}</td>
                                    <td class="text-center">{{$t->building->name}}</td>
                                    <td class="text-center">{{$t->floor->floorNumber}}</td>
                                    <td class="text-center">{{$t->shop->shopNumber}}</td>
                                    <td class="text-center">{{$t->rent->rent}}</td>
                                    <td class="text-center">
                                        <input data-id="{{$t->id}}" class="toggle-class2" type="checkbox" data-onstyle="success" data-offstyle="danger"
                                        data-toggle="toggle" data-on="Paid" data-off="Unpaid" {{$t->status ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        @if($t->status == 1)
                                            <a href="{{ url('tenant/invoice/'.$t->id) }}" class="btn btn-primary">Invoice</a>
                                        @endif
                                        <a href="{{ url('tenant/edit/'.$t->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('tenant/delete/'.$t->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $tenant->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
