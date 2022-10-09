@extends('admin.layouts.app')
@section('title','File Manager Demo')
@section('content')
    <div class="row">
        <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                Upload Or Select
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="filepath">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
    </div>
@endsection
@section('footer')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        var file_manager_route_prefix = "{{ env('APP_URL') }}/admin/filemanager";
        $('#lfm').filemanager('file',{prefix: file_manager_route_prefix});
     </script>
@endsection