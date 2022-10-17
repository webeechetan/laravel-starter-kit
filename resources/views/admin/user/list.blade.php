@extends('admin.layouts.app')
@section('title','Users')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('footer')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@endsection
@section('content')
<div class="card">
    <h5 class="card-header">Permission</h5>
    <div class="container-fluid">
        <div class="bg-light d-flex justify-content-between">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#NewPermissionModal">New Permission</button>
        </div>
        <div class="table-responsive text-nowrap mt-4">
          <table class="table table-hover" id="myTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Total Permissions</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ $user->getRoleNames() }}</td>
                        <td>{{ $user->getPermissionNames() }}</td>
                        <td>
                            <button type="button" class="btn btn-icon btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="" data-bs-original-title="Delete permission">
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
  {{-- Create New Permission Modal --}}
  <div class="modal fade" id="NewPermissionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Create New Permission</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form action="{{ route('permission.store') }}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Permission Name</label>
                  <input type="text" id="PermissionName" name="name" class="form-control" placeholder="Enter Permission Name" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Create New Permission</button>
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