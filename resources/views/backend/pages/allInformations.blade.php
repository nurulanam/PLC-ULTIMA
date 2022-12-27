@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col">

            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Hello, {{ auth()->user()->name }}</h4>
                            </div>
                            <div class="mt-3 mt-lg-0">
                                <form action="javascript:void(0);">
                                    <div class="row g-3 mb-0 align-items-center">
                                        <!--end col-->
                                        <div class="col-auto">
                                            <a href="{{ route('information.create') }}"
                                                class="btn btn-soft-success shadow-none"><i
                                                    class="ri- align-middle me-1"></i> Add Informations</a>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="fixed-header"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th>
                                            <th>SR No.</th>
                                            <th>Refferal Name</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Personal Email</th>
                                            <th>Password</th>
                                            <th>Farm Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($informations as $key => $information)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>{{ $key+=1 }}</td>
                                                <td>{{ $information->refferal_name }}</td>
                                                <td>{{ $information->name }}</td>
                                                <td>{{ $information->mobile_number }}</td>
                                                <td>{{ $information->personal_email }}</td>
                                                <td>{{ $information->personal_password }}</td>
                                                <td>{{ $information->farm_price }}</td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown"
                                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <a href="{{ route('information.view', $information->id) }}" class="dropdown-item">
                                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                    View
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('information.edit', $information->id) }}" class="dropdown-item edit-item-btn">
                                                                    <i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('information.destroy',$information->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <Button class="dropdown-item remove-item-btn"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</Button>
                                                                </form>


                                                            </li>
                                                        </ul>
                                                    </div>
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
