@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Users')
@endsection

@section('otherTop')

@endsection

@section('content')
  <div class="table-responsive">
    <table class="table">
      @if($user->type == 2 && $user->confirmed == 0)
      <form class="float-right" action="{{ route('users.confirm', $user->id) }}" method="post">
        {{ csrf_field() }}
        <button type="submit" name="button" class="btn btn-success float-right"><i class="fas fa-check"></i> @lang('global.Confirm')</button>
      </form>
      <br /><br />
      @endif
      <tr>
        <th>{{ __('global.Username') }}</th>
        <td>{{ $user->username }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Email') }}</th>
        <td>{{ $user->email }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Username') }}</th>
        <td>{{ $user->username }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Business_name') }}</th>
        <td>{{ $user->business_name }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Type') }}</th>
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
      </tr>
      <tr>
        <th>{{ __('global.Balance') }}</th>
        <td>{{ number_format($user->balance, 2) }}</td>
      </tr>
      <tr>
        <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> @lang('global.Edit')</a>
        </td>
        <td>
          <form class="float-right" action="{{ route('users.destroy', $user->id) }}" method="post" onclick="{{ __('global.Sure') }}">
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

