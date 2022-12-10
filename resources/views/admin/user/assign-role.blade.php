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
    <h5 class="card-header">Assign Role</h5>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Assign Role To {{$user->name}}</h5>
                  <small class="text-muted float-end">Roles</small>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('user.assign.role') }}">
                    @csrf
                    <input type="hidden" name="UserId" value="{{ $user->id }}">
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-fullname">Roles</label>
                      <select class="RolesList form-control" name="roles[]" multiple="multiple">
                        @php
                            $selected = '';    
                        @endphp
                        @foreach($roles as $role)
                            @foreach ($user->roles as $userRole)
                                @if($userRole->name == $role->name)
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
                            <option value="{{ $role->id }}" {{$selected}}>{{ $role->name }}</option>
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
      $('.RolesList').select2();
    });
</script>
@endpush