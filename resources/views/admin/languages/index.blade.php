@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Languages')
@endsection

@section('otherTop')
 <!-- Custom styles for this page -->
 <link href="{{ asset('myadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<p><a href="{{ route('languages.create') }}" class="btn btn-primary">@lang('global.Add')</a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">@lang('global.Languages')</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>@lang('global.ID')</th>
            <th>@lang('global.Name')</th>   
            <th colspan="2">@lang('global.Actions')</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>@lang('global.ID')</th>
            <th>@lang('global.Name')</th> 
            <th colspan="2">@lang('global.Actions')</th>    
          </tr>
        </tfoot>
        <tbody>
          @foreach($languages as $language)
          <tr>
            <td>{{ $language->id }}</td>
            <td><a href="{{ route('languages.show', $language->id) }}">{{ $language->name }}</a></td>
            <td><a href="{{ route('languages.edit', $language->id) }}" title="{{ __('global.Edit') }}" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
            <td>
              <form class="" action="{{ route('languages.destroy', $language->id) }}" method="post" onclick="{{ __('global.Sure') }}">
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
      { "orderable": false, "targets": [0, 1, 2, 3] }
    ]
  });
  
});
</script>

@endsection