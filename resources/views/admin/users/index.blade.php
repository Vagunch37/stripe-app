@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Users')
@endsection

@section('otherTop')
 <!-- Custom styles for this page -->
 <link href="{{ asset('myadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<p><a href="{{ route('users.create') }}" class="btn btn-primary">@lang('global.Add')</a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">@lang('global.Users')</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>@lang('global.ID')</th>
            <th>@lang('global.Username')</th>   
            <th>@lang('global.Email')</th>   
            <th>@lang('global.Type')</th>   
            <th colspan="2">@lang('global.Actions')</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>@lang('global.ID')</th>
            <th>@lang('global.Username')</th> 
            <th>@lang('global.Email')</th>   
            <th>@lang('global.Type')</th>   
            <th colspan="2">@lang('global.Actions')</th>    
          </tr>
        </tfoot>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td><a href="{{ route('users.show', $user->id) }}">{{ $user->username }}</a></td>
            <td>{{ $user->email }}</td>
            <td>
            @if($user->type == 1)
            <button type="button" class="btn btn-secondary">Community</button>
            @elseif($user->type == 2 && $user->confirmed == 0)
            <button type="button" class="btn btn-warning">Professional</button>
            @elseif($user->type == 2 && $user->confirmed == 1)
            <button type="button" class="btn btn-dark">Professional</button>
            @elseif($user->type == 3)
            <button type="button" class="btn btn-success">Admin</button>
            @endif
            </td>   
            <td><a href="{{ route('users.edit', $user->id) }}" title="{{ __('global.Edit') }}" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
            <td>
              <form class="" action="{{ route('users.destroy', $user->id) }}" method="post" onclick="{{ __('global.Sure') }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" name="button" class="btn btn-danger" title="{{ __('global.Delete') }}"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('otherBottom')
<!-- Page level plugins -->
<script src="{{ asset('myadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('myadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<!-- <script src="{{ asset('myadmin/js/demo/datatables-demo.js') }}"></script> -->
<script>
  $(document).ready(function() {
  $('#dataTable').DataTable({
    "lengthChange": false,
    "bPaginate": false,
    "columnDefs": [
      { "orderable": false, "targets": [0, 1, 2, 3, 4, 5] }
    ]
  });
  
});
</script>

@endsection