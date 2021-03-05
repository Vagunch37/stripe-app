@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Events')
@endsection

@section('otherTop')

@endsection

@section('content')
  <div class="table-responsive">
    <table class="table">
      <tr>
        <th>{{ __('global.Type') }}</th>
        <td>
          @if($event->type == 1)
          Professional
          @elseif($event->type == 2)
          Community
          @endif
        </td>
      </tr>
      <tr>
        <th>{{ __('global.Timing') }}</th>
        <td>
          @if($event->timing == 1)
          Live
          @elseif($event->timing == 2)
          Upcoming
          @elseif($event->timing == 3)
          Archived
          @endif
        </td>
      </tr>
      <tr>
        <th>{{ __('global.Group') }}</th>
        <td>
          @if($event->group == 1)
          Premier
          @elseif($event->group == 2)
          Sports
          @elseif($event->group == 3)
          Events
          @endif
        </td>
      </tr>
      <tr>
        <th>{{ __('global.Category') }}</th>
        <td>{{ $event->category->name }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Language') }}</th>
        <td>{{ $event->language->name }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Name') }}</th>
        <td>{{ $event->name }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Views') }}</th>
        <td>{{ $event->views }}</td>
      </tr>
      <tr>
        <th>{{ __('global.Image') }}</th>
        <td>
          <img height="400" src="/images/events/{{ $event->image_name }}" alt="">
        </td>
      </tr>
      <tr>
        <td>
            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> @lang('global.Edit')</a>
        </td>
        <td>
          <form class="float-right" action="{{ route('events.destroy', $event->id) }}" method="post" onclick="{{ __('global.Sure') }}">
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