@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Languages')
@endsection

@section('otherTop')

@endsection

@section('content')
  <div class="table-responsive">
    <table class="table">
      <tr>
        <th>{{ __('global.Name') }}</th>
        <td>{{ $language->name }}</td>
      </tr>
      <tr>
        <td>
            <a href="{{ route('languages.edit', $language->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> @lang('global.Edit')</a>
        </td>
        <td>
          <form class="float-right" action="{{ route('languages.destroy', $language->id) }}" method="post" onclick="{{ __('global.Sure') }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" name="button" class="btn btn-danger" title="{{ __('global.Delete') }}"><i class="fas fa-trash"></i> @lang('global.Delete')</button>
          </form>
        </td>
      </tr>
    </table>
  <div>
@endsection

@section('otherBottom')

@endsection