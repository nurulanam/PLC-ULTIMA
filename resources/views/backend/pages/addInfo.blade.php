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
                                        <button type="button" class="btn btn-soft-success shadow-none"><i class="ri- align-middle me-1"></i> All Informations</button>
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

            <div class="card">
                <div class="card-body">
                    <div class="row">
                <div class="col">
                    <form action="{{ route('information.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="refferal_name" class="form-label">Refferal Name</label>
                                    <input type="text" name="refferal_name" class="form-control" placeholder="Refferal Name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                    <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="personal_email" class="form-label">Personal Email</label>
                                    <input type="email" name="personal_email" class="form-control" placeholder="Personal Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="platin_world_email" class="form-label">Platin World Email</label>
                                    <input type="email" name="platin_world_email" class="form-control" placeholder="Platin World Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="platin_world_passowrd" class="form-label">Platin World Passowrd</label>
                                    <input type="text" name="platin_world_passowrd" class="form-control" placeholder="Platin World Passowrd">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="refferal_link" class="form-label">Refferal Link</label>
                                    <input type="text" name="refferal_link" class="form-control" placeholder="Refferal Link">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="account" class="form-label">Account</label>
                                    <input type="text" name="account" class="form-control" placeholder="Account">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="card" class="form-label">Card</label>
                                    <input type="text" name="card" class="form-control" placeholder="Card">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary">Add Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

