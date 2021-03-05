@extends('layouts.base')

{{-- <div class="form-group row">
  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

  <div class="col-md-6">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>
</div>

<div class="form-group row">
  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

  <div class="col-md-6">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>
</div> --}}
@include('shared.messages')

@section('content')
<div class="menuPageNoSearch" style="overflow: hidden;">
  <form method="POST" id="loginForm" action="{{ url('login') }}">
    @csrf
  </form>
  <form method="POST" action="{{ route('register') }}" id="signupComForm">
    @csrf
    <input type="hidden" id="type" name="type" value="1">
  </form>
  <form method="POST" action="{{ route('register') }}" id="signupProForm">
    @csrf
    <input type="hidden" id="type" name="type" value="2">
  </form>
  <div id="loginDivision" class="loginSignupDivision" style="clip-path: polygon(0 0, calc(100% - 5vw) 0, 100% 100%, 0 100%);">
    <div id="loginBox" class="loginSignupBox" style="margin-left: calc(25vw - min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8));">
      <div id="loginBack" class="loginSignupBackButton"><div class="loginSignupBackArrow"></div></div>
      <div id="loginHeader" class="loginSignupHeader">Welcome back!</div>
      <table id="loginTable" class="loginSignupTable" style="margin-top: calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15);">
        <tr>
          <td>Username / Den Name</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="loginForm" id="loginUsername" name="loginUsername"/></td> --}}
          <td><input type="text" class="textField loginSignupTableTextField" form="loginForm" id="username" name="username" value=""/></td>
        </tr>
        <tr>
          <td>Password</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="loginForm" id="loginPassword" name="loginPassword"/></td> --}}
          <td><input type="password" class="textField loginSignupTableTextField" form="loginForm" id="password" name="password" value="" /></td>
        </tr>
      </table>
      <button class="loginSignupButton" id="loginButton" onclick="expandLogin()">Login</button>
    </div>
  </div><!--
  --><div id="signupDivision" class="loginSignupDivision" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 5vw 100%); right: 0;">
    <div id="signupBox" class="loginSignupBox" style="margin-left: calc(25vw - min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8) + 2.5vw);">
      <div id="signupBack" class="loginSignupBackButton"><div class="loginSignupBackArrow"></div></div>
      <div id="signupHeader" class="loginSignupHeader">Need an account?</div>
      <button id="signupComSelect" class="signupSelectButton" onclick="expandSignupCom()" style="margin-right: min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8);">Community<br>Sign Up</button>
      <button id="signupProSelect" class="signupSelectButton" onclick="expandSignupPro()" style="margin-left: min(20vw, 0.9 * (100vh - 5.5vw) * 3 / 8);">Professional<br>Sign Up</button>
      <table id="signupComTable" class="loginSignupTable" style="margin-top: calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 15);">
        <tr>
          <td>Email</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComEmail" name="signupComEmail"/></td> --}}
          <td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="email" name="email" value=""  /></td>
        </tr>
        <tr>
          <td>Username</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComUsername" name="signupComUsername"/></td> --}}
          <td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="username" name="username" value="" /></td>
        </tr>
        <tr>
          <td>Password</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComPassword" name="signupComPassword"/></td> --}}
          <td><input type="password" class="textField loginSignupTableTextField" form="signupComForm" id="password" name="password" value="" /></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupComForm" id="signupComConfirmPassword" name="signupComConfirmPassword"/></td> --}}
          <td><input type="password" class="textField loginSignupTableTextField" form="signupComForm" id="password-confirm" name="password_confirmation" value="" /></td>
        </tr>
      </table>
      <table id="signupProTable" class="loginSignupTable" style="margin-top: calc(min(1vw, 0.09 * (100vh - 5.5vw) * 3 / 16) * 12);">
        <tr>
          <td>Email</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProEmail" name="signupProEmail"/></td> --}}
          <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="email" name="email" value="" /></td>
        </tr>
        <tr>
          <td>Business Name</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProBusinessName" name="signupProBusinessName"/></td> --}}
          <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="business_name" name="business_name" value="" /></td>
        </tr>
        <tr>
          <td>Den Name</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProDenName" name="signupProDenName"/></td> --}}
          <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="username" name="username" value="" /></td>
        </tr>
        <tr>
          <td>Password</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProPassword" name="signupProPassword"/></td> --}}
          <td><input type="password" class="textField loginSignupTableTextField" form="signupProForm" id="password" name="password" value="" /></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          {{-- <td><input type="text" class="textField loginSignupTableTextField" form="signupProForm" id="signupProConfirmPassword" name="signupProConfirmPassword"/></td> --}}
          <td><input type="password" class="textField loginSignupTableTextField" form="signupProForm" id="password-confirm" name="password_confirmation" value="" /></td>
        </tr>
      </table>
      <button id="signupButton" class="loginSignupButton" onclick="expandSignup()">Sign Up</button>
    </div>
  </div>
</div>
@endsection

