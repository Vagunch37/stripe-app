@extends('layouts.base')

@section('content')
<div class="menuPageNoSearch">
  <div style="font-size: 2.4vw; margin: 2vw;">Professional Sign Up</div>
  <table id="signupProTable2">
    <tr>
      <td>Email</td>
      <td><input type="text" class="textField"/></td>
    </tr>
    <tr>
      <td>Business Name</td>
      <td><input type="text" class="textField"/></td>
    </tr>
    <tr>
      <td>Website</td>
      <td><input type="text" class="textField"/></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="text" class="textField"/></td>
    </tr>
    <tr>
      <td>Company Description</td>
      <td><textarea class="textField" style="resize: vertical; min-height: 5vw;"></textarea></td>
    </tr>
    <tr>
      <td>Den Name</td>
      <td><input type="text" class="textField"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="text" class="textField"/></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="text" class="textField"/></td>
    </tr>
    <tr>
      <td></td>
      <td><div style="width: 10vw; height: 1.5vw; padding: 0.5vw; margin: 0 auto; border-radius: 0.5vw; background: var(--colorMaroon); font-size: 1.2vw; text-align: center;">Sign Up</div></td>
    </tr>
  </table>
</div>
@endsection