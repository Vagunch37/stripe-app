@extends('layouts.base')

@section('content')
<div class="menuPageNoSearch" style="overflow: hidden;">
  <div class="profileCard">
    <div style="width: calc( (100vh - 5.5vw) * 63 / 88 * 0.8 - (100vh - 5.5vw) * 0.8 * 0.1 - (100vh - 5.5vw) * 0.8 * 0.01 * 2); height: calc((100vh - 5.5vw) * 0.8 * 0.88); margin: calc((100vh - 5.5vw) * 0.8 * 0.1 / 2); border: calc((100vh - 5.5vw) * 0.8 * 0.01) solid var(--colorMaroon); border-radius: calc((100vh - 5.5vw) * 0.8 * 0.05)">
      <div style="background-color: var(--colorBackground); height: calc((100vh - 5.5vw) * 0.8 * 0.22); width: calc((100vh - 5.5vw) * 0.8 * 0.22); margin: calc((100vh - 5.5vw) * 0.8 * 0.02) auto; clip-path: circle(50%); background-size: cover; background-image: url({{ asset('holden.png') }});"></div>
      <div style="width: 100%; height: calc((100vh - 5.5vw) * 0.8 * 0.08); color: black; font-size: calc((100vh - 5.5vw) * 0.8 * 0.06); text-align: center;">Den Name</div>
      <div style="width: 100%; height: calc((100vh - 5.5vw) * 0.8 * 0.05); color: black; font-size: calc((100vh - 5.5vw) * 0.8 * 0.04); text-align: center;">Followers</div>
      <div style="width: 100%; height: calc((100vh - 5.5vw) * 0.8 * 0.05); color: black; font-size: calc((100vh - 5.5vw) * 0.8 * 0.04); text-align: center;">Following</div>
      <div class="profileCardButton"><span>About Den</span></div>
      <div class="profileCardButton"><span>Top Events</span></div>
      <div class="profileCardButton"><span>Antichamber</span></div>
    </div>
  </div>
  <div class="profileBackground" style="background-image: url({{ asset('holden.png') }});"></div>
  <div class="profileBottom">
    <div class="profileMainPanel">
      <div class="profileButtonPanel">
        <table style="width: 100%; height: 100%;" cellspacing="0" cellpadding="0">
          <tr>
            <th>Watchlist</th>
            <th>Stream</th>
            <th>Archive</th>
            <th>Analytics</th>
            <th>Schedule</th>
            <th>Wallet</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection