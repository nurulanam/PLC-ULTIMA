@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">All Users</h5>
                        </div>
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
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td>{{ $key += 1 }}</td>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <button type="button" class="dropdown-item edit-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#roles{{ $user->id }}">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Roles
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item remove-item-btn">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- Roles  --}}
                                        <div class="modal" id="roles{{ $user->id }}" tabindex="-1" aria-modal="true"
                                            role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Manage Informations</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Roles</h5>
                                                        @if ($user->roles)
                                                            @foreach ($user->roles as $user_role)
                                                                <form
                                                                    action="{{ route('users.roles.revoke', [$user->id, $user_role->id]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-danger m-1 btn-sm">{{ $user_role->name }}</button>
                                                                </form>
                                                            @endforeach
                                                        @endif
                                                        <h5 class="mt-3">Add Role</h5>
                                                        <form action="{{ route('users.roles', $user->id) }}" method="POST">
                                                            @csrf
                                                            <select name="role" class="form-control">
                                                                <option>------Select Role-------</option>
                                                                @foreach ($roles as $role)
                                                                    <option value="{{ $role->name }}">{{ $role->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('role')
                                                                {{ $message }}
                                                            @enderror
                                                            <button class="btn btn-primary mt-3">Add role</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Back</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
