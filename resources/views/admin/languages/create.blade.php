@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Languages')
@endsection

@section('content') 
  <form class="" action="{{ route('languages.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">@lang('global.Name')</label>
      <input type="text" name="name" value="" class="form-control" placeholder="{{__('global.Name')}}" required="required">
    </div>

    <input class="btn btn-primary" type="submit" value="{{__('global.Add')}}">
  </form>
@endsection