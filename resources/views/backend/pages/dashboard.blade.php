@extends('backend.master')
@section('content')
<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">

                            <h4 class="fs-16 mb-1">Hello, {{ auth()->user()->name }} </h4>
                        </div>
                        <div class="mt-3 mt-lg-0">
                            <form action="javascript:void(0);">
                                <div class="row g-3 mb-0 align-items-center">
                                    <!--end col-->
                                    <div class="col-auto">
                                        <a href="{{ route('information.create') }}" class="btn btn-soft-success shadow-none"><i class="ri-add-circle-line align-middle me-1"></i> Add Information</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    @if (auth()->user()->hasRole('admin'))
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="start_item">
                                    <button type="button" class="btn btn-danger"><i class="bx bx-user "></i></button>
                                    <span class="text-uppercase fw-medium text-muted text-truncate mx-3">Total Users: </span>
                                    <u class="text-danger">{{ $users }}</u>
                                </div>
                                <div class="end_item">
                                    <a href="{{ route('users.index') }}" class="btn btn-primary"><i class="bx bx-arrow-to-right "></i> All Users</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="start_item">
                                    <button type="button" class="btn btn-danger"><i class="bx bx-file"></i></button>
                                    <span class="text-uppercase fw-medium text-muted text-truncate mx-3">Total Informations: </span>
                                    <u class="text-danger">{{ $info }}</u>
                                </div>
                                <div class="end_item ">
                                    <a href="{{ route('information.index') }}" class="btn btn-primary"> <i class="bx bx-arrow-to-right "></i> All Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                </div><!-- end col -->
                <div class="col-xl-8 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-uppercase fw-medium text-muted text-truncate">Latest Informations: </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hoverd">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Farm Price</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($informations as $information)
                                        <tr>
                                            <td>{{ $information->name }}</td>
                                            <td>{{ $information->personal_email }}</td>
                                            <td>{{ $information->mobile_number }}</td>
                                            <td>{{ $information->farm_price }}</td>
                                            <td>
                                                <a class="btn btn-primary  btn-sm" href="{{ route('information.view', $information->id) }}">View</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div> <!-- end row-->
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-uppercase fw-medium text-muted text-truncate">Total of This Month: <b class="text-danger mx-2"><u>{{ $lastMonthInfoTotal }}</u></b> </h4>
                        </div>
                        <div class="card-body">
                            <table id="fixed-header" class="table table-hoverd">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($lastMonthInfo as $lastMonth)
                                        <tr>
                                            <td>{{ $lastMonth->name }}</td>
                                            <td>{{ $lastMonth->personal_email }}</td>
                                            <td>{{ $lastMonth->mobile_number }}</td>
                                            <td>{{ $lastMonth->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a class="btn btn-primary  btn-sm" href="{{ route('information.view', $lastMonth->id) }}">View</a>
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
    </div>
</div>
@endsection

