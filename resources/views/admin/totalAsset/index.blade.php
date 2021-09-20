@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"><span class="text-uppercase font-weight-bold">Total Assets</span><span class="text-danger float-right">(Red marked assets are UNPAID asset)</span></div>
                        
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" >Tenant Name</th>
                                <th scope="col" class="text-center" >Building Name</th>
                                <th scope="col" class="text-center" >Floor Number</th>
                                <th scope="col" class="text-center" >Shop Number</th>
                                <th scope="col" class="text-center" >Rent</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($asset as $a)
                                <tr>
                                    @if($a->status == 0)
                                        <td class="text-center text-danger">{{$a->tenantName}}</td>
                                        <td class="text-center text-danger">{{$a->building->name}}</td>
                                        <td class="text-center text-danger">{{$a->floor->floorNumber}}</td>
                                        <td class="text-center text-danger">{{$a->shop->shopNumber}}</td>
                                        <td class="text-center text-danger">{{$a->rent->rent}}</td>
                                    @else
                                        <td class="text-center text-success">{{$a->tenantName}}</td>
                                        <td class="text-center text-success">{{$a->building->name}}</td>
                                        <td class="text-center text-success">{{$a->floor->floorNumber}}</td>
                                        <td class="text-center text-success">{{$a->shop->shopNumber}}</td>
                                        <td class="text-center text-success">{{$a->rent->rent}}</td>
                                    @endif
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
