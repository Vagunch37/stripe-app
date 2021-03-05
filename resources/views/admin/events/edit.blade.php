@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Events')
@endsection

@section('content')
  <form class="" action="{{ route('events.update', $event->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label for="type">@lang('global.Type')</label>
      <select name="type" class="custom-select">
        <option value="" selected disabled>@lang('global.Type')</option>
        <option value="1" {{ $event->type == 1 ? 'selected' : '' }}>Professional</option>
        <option value="2"{{ $event->type == 2 ? 'selected' : '' }}>Community</option>
      </select>
    </div>
    <div class="form-group">
      <label for="timing">@lang('global.Timing')</label>
      <select name="timing" class="custom-select">
        <option value="" selected disabled>@lang('global.Timing')</option>
        <option value="1" {{ $event->timing == 1 ? 'selected' : '' }}>Live</option>
        <option value="2" {{ $event->timing == 2 ? 'selected' : '' }}>Upcoming</option>
        <option value="3" {{ $event->timing == 3 ? 'selected' : '' }}>Archived</option>
      </select>
    </div>
    <div class="form-group">
      <label for="group">@lang('global.Group')</label>
      <select name="group" class="custom-select">
        <option value="" selected disabled>@lang('global.Group')</option>
        <option value="1" {{ $event->group == 1 ? 'selected' : '' }}>Premier</option>
        <option value="2" {{ $event->group == 2 ? 'selected' : '' }}>Sports</option>
        <option value="3" {{ $event->group == 3 ? 'selected' : '' }}>Events</option>
      </select>
    </div>

    {{-- <div class="form-group">
      <label for="type">@lang('global.Type')</label>
      <input type="text" name="type" value="{{ $event->type }}" class="form-control" placeholder="{{__('global.Type')}}" required="required">
    </div>
    <div class="form-group">
      <label for="timing">@lang('global.Timing')</label>
      <input type="text" name="timing" value="{{ $event->timing }}" class="form-control" placeholder="{{__('global.Timing')}}" required="required">
    </div>
    <div class="form-group">
      <label for="group">@lang('global.Group')</label>
      <input type="text" name="group" value="{{ $event->group }}" class="form-control" placeholder="{{__('global.Group')}}" required="required">
    </div> --}}
    <div class="form-group">
      <label for="group">@lang('global.Category')</label>
      <select name="category_id" class="custom-select">
        <option value="" selected disabled>@lang('global.Category')</option>
        @foreach($categories as $key=>$category)
        <option value="{{ $key }}" {{ $event->category_id == $key ? 'selected' : '' }} >{{ $category }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="group">@lang('global.Language')</label>
      <select name="language_id" class="custom-select">
        <option value="" selected disabled>@lang('global.Language')</option>
        @foreach($languages as $key=>$language)
        <option value="{{ $key }}" {{ $event->language_id == $key ? 'selected' : '' }} >{{ $language }}</option>
        @endforeach
      </select>
    </div>

    {{-- <div class="form-group">
      <label for="category_id">@lang('global.Category_id')</label>
      <input type="text" name="category_id" value="{{ $event->category_id }}" class="form-control" placeholder="{{__('global.Category_id')}}" required="required">
    </div>
    <div class="form-group">
      <label for="language_id">@lang('global.Language_id')</label>
      <input type="text" name="language_id" value="{{ $event->language_id }}" class="form-control" placeholder="{{__('global.Language_id')}}" required="required">
    </div> --}}
    <div class="form-group">
      <label for="name">@lang('global.Name')</label>
      <input type="text" name="name" value="{{ $event->name }}" class="form-control" placeholder="{{__('global.Name')}}" required="required">
    </div>
    <div class="form-group">
      <label for="views">@lang('global.Views')</label>
      <input type="text" name="views" value="{{ $event->views }}" class="form-control" placeholder="{{__('global.Views')}}" required="required">
    </div>
    <div class="form-group">
      <label for="image_name">@lang('global.Image')</label><br>
      @if($event->image_name)
      <img width="400px" src="/images/events/{{ $event->image_name }}" alt=""><br>
      @else    
      @lang('global.No_Image')
      @endif
      <div class="custom-file col-sm-6 col-lg-3">
        <input class="custom-file-input" type="file" name="image_name"> 
        <label class="custom-file-label" for="image_name">@lang('global.Image')</label>
      </div>    
    </div>

    <input class="btn btn-primary" type="submit" value="{{__('global.Edit')}}">
  </form>
@endsection