@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Events')
@endsection

@section('content') 
  <form class="" action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="type">@lang('global.Type')</label>
      <select name="type" class="custom-select">
        <option value="" selected disabled>@lang('global.Type')</option>
        <option value="1">Professional</option>
        <option value="2">Community</option>
      </select>
    </div>
    <div class="form-group">
      <label for="timing">@lang('global.Timing')</label>
      <select name="timing" class="custom-select">
        <option value="" selected disabled>@lang('global.Timing')</option>
        <option value="1">Live</option>
        <option value="2">Upcoming</option>
        <option value="3">Archived</option>
      </select>
    </div>
    <div class="form-group">
      <label for="group">@lang('global.Group')</label>
      <select name="group" class="custom-select">
        <option value="" selected disabled>@lang('global.Group')</option>
        <option value="1">Premier</option>
        <option value="2">Sports</option>
        <option value="3">Events</option>
      </select>
    </div>
    <div class="form-group">
      <label for="group">@lang('global.Category')</label>
      <select name="category_id" class="custom-select">
        <option value="" selected disabled>@lang('global.Category')</option>
        @foreach($categories as $key=>$category)
        <option value="{{ $key }}">{{ $category }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="group">@lang('global.Language')</label>
      <select name="language_id" class="custom-select">
        <option value="" selected disabled>@lang('global.Language')</option>
        @foreach($languages as $key=>$language)
        <option value="{{ $key }}">{{ $language }}</option>
        @endforeach
      </select>
    </div>
  
    {{-- <div class="form-group">
      <label for="category_id">@lang('global.Category_id')</label>
      <input type="text" name="category_id" value="" class="form-control" placeholder="{{__('global.Category_id')}}" required="required">
    </div> --}}
    {{-- <div class="form-group">
      <label for="language_id">@lang('global.Language_id')</label>
      <input type="text" name="language_id" value="" class="form-control" placeholder="{{__('global.Language_id')}}" required="required">
    </div> --}}
    <div class="form-group">
      <label for="name">@lang('global.Name')</label>
      <input type="text" name="name" value="" class="form-control" placeholder="{{__('global.Name')}}" required="required">
    </div>
    <div class="form-group">
      <label for="views">@lang('global.Views')</label>
      <input type="text" name="views" value="" class="form-control" placeholder="{{__('global.Views')}}" required="required">
    </div> 
    <div class="form-group">
      <label for="image_name">@lang('global.Image')</label><br>
      <div class="custom-file col-sm-6 col-lg-3">
        <input class="custom-file-input" type="file" name="image_name"> 
        <label class="custom-file-label" for="image_name">@lang('global.Image')</label>
      </div>    
    </div>

    <input class="btn btn-primary" type="submit" value="{{__('global.Add')}}">
  </form>
@endsection