@extends('layouts.admin')

@section('title')
  @lang('global.C_Name') | @lang('global.Users')
@endsection

@section('content') 
  <form class="" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">@lang('global.Name')</label>
      <input type="text" name="name" value="" class="form-control" placeholder="{{__('global.Name')}}" required="required">
    </div>
    <div class="form-group">
      <label for="email">@lang('global.Email')</label>
      <input type="text" name="email" value="" class="form-control" placeholder="{{__('global.Email')}}" required="required">
    </div>
    <div class="form-group">
      <label for="username">@lang('global.Username')</label>
      <input type="text" name="username" value="" class="form-control" placeholder="{{__('global.Username')}}" required="required">
    </div>
    <div class="form-group">
      <label for="business_name">@lang('global.Business_name')</label>
      <input type="text" name="business_name" value="" class="form-control" placeholder="{{__('global.Business_name')}}" required="required">
    </div>
    <div class="form-group">
      <label for="type">@lang('global.Type')</label>
      <input type="text" name="type" value="" class="form-control" placeholder="{{__('global.Type')}}" required="required">
    </div>
    <div class="form-group">
      <label for="password">@lang('global.Password')</label>
      <input type="text" name="password" value="" class="form-control" placeholder="{{__('global.Password')}}" required="required">
    </div>

    <input class="btn btn-primary" type="submit" value="{{__('global.Add')}}">
  </form>
@endsection