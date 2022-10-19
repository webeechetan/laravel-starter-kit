@extends('admin.layouts.app')
@section('title','Roles')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('footer')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
@section('content')
    <h5 class="card-header">Assign Permission</h5>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Assign Permission To {{$role->name}}</h5>
                  <small class="text-muted float-end">Permissions</small>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('assign.permission.to.role') }}">
                    @csrf
                    <input type="text" name="RoleId" value="{{ $role->id }}">
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-fullname">Permissions</label>
                      <select class="PermissionsList form-control" name="permissions[]" multiple="multiple">
                        @php
                            $selected = '';    
                        @endphp
                        @foreach($permissions as $permission)
                            @foreach($role->permissions as $RolePermissions)
                                @if($permission->id == $RolePermissions->id)
                                    @php
                                        $selected = 'selected';
                                    @endphp
                                    @break
                                @else
                                    @php
                                        $selected = '';
                                    @endphp
                                @endif
                            @endforeach
                            <option value="{{ $permission->id }}" {{$selected}}>{{ $permission->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Assign</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
      $('.PermissionsList').select2();
    });
</script>
@endpush