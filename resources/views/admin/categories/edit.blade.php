@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Categories')
@endsection

@section('content')
  <form class="" action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    {{-- <div class="form-group">
      <label for="type">@lang('global.Type')</label>
      <input type="text" name="type" value="{{ $category->type }}" class="form-control" placeholder="{{__('global.Type')}}" required="required">
    </div>
    <div class="form-group">
      <label for="timing">@lang('global.Timing')</label>
      <input type="text" name="timing" value="{{ $category->timing }}" class="form-control" placeholder="{{__('global.Timing')}}" required="required">
    </div> --}}
    <div class="form-group">
      <label for="name">@lang('global.Name')</label>
      <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="{{__('global.Name')}}" required="required">
    </div>

    <input class="btn btn-primary" type="submit" value="{{__('global.Edit')}}">
  </form>
@endsection