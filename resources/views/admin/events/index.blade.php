@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Events')
@endsection

@section('otherTop')
 <!-- Custom styles for this page -->
 <link href="{{ asset('myadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<p><a href="{{ route('events.create') }}" class="btn btn-primary">@lang('global.Add')</a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">@lang('global.Events')</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      {{ $events->links() }}
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>@lang('global.ID')</th>
            <th>@lang('global.Name')</th>   
            <th>@lang('global.Image')</th>   
            <th colspan="2">@lang('global.Actions')</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>@lang('global.ID')</th>
            <th>@lang('global.Name')</th> 
            <th>@lang('global.Image')</th> 
            <th colspan="2">@lang('global.Actions')</th>    
          </tr>
        </tfoot>
        <tbody>
          @foreach($events as $event)
          <tr>
            <td>{{ $event->id }}</td>   
            <td><a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></td>
            <td>
              <img height="200" src="/images/events/{{ $event->image_name }}" alt="">
            </td>
            <td><a href="{{ route('events.edit', $event->id) }}" title="{{ __('global.Edit') }}" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
            <td>
              <form class="" action="{{ route('events.destroy', $event->id) }}" method="post" onclick="{{ __('global.Sure') }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" name="button" class="btn btn-danger" title="{{ __('global.Delete') }}"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $events->links() }}
      
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
    // "ordering": false,
    "lengthChange": false,
    "bPaginate": false,
    // "bPaginate": false,
    // "bLengthChange": false,
    // "bFilter": true,
    // "bInfo": false,
    // "bAutoWidth": false
    "columnDefs": [
      { "orderable": false, "targets": [0, 1, 2, 3, 4] }
    ]
  });
  
});
</script>

@endsection