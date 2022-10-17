@extends('admin.layouts.app')
@section('title','Roles')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('footer')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@endsection
@section('content')
<div class="card">
    <h5 class="card-header">Roles</h5>
    <div class="container-fluid">
        <div class="bg-light d-flex justify-content-between">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#NewRoleModal">New Role</button>
        </div>
        <div class="table-responsive text-nowrap mt-4">
          <table class="table table-hover" id="myTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Total Permissions</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-icon btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" data-bs-original-title="Delete Role">
                                <span class="tf-icons bx bx-trash"></span>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
  {{-- Create New Role Modal --}}
  <div class="modal fade" id="NewRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Create New Role</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form action="{{ route('role.store') }}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Role Name</label>
                  <input type="text" id="RoleName" name="name" class="form-control" placeholder="Enter Role Name" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Create New Role</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush