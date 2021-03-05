<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Arena</title>
	<link rel="icon" href="{{ asset('images/ace.png') }}">
	<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css"/>
  </head>
  <body onload=display_ct();>
    <script src="{{ asset('script.js') }}"></script>	

	<div class="topbar">

		<div class="logo" onclick="window.location.replace('{{URL::to('/')}}');">
      <div style="margin: auto; width: 82.5%;">
        <img src="{{ asset('images/ace.png') }}" style="width: 2vw; margin-top: 1vw; float: left;">
        <div style="margin-left: 1vw; margin-top: 0.7vw; float: left;">THE<br>ARENA<p style="font-size: 1vw; margin-top: 0vw; letter-spacing: normal; font-family: 'Proxima Nova';"><span id="datetime1"></span></p></div>
        <img src="{{ asset('images/ace.png') }}" style="width: 2vw; margin-left: 1vw; margin-top: 1vw; float: left;">
      </div>
		</div>
		<div class="topbarButtonPanel">
			<div id="dropdownbutton1" class="topbarButton" onclick="dropdown1()"><div class="topbarText">PROFESSIONAL</div></div><!--
			--><div id="dropdownbutton2" class="topbarButton" onclick="dropdown2()"><div class="topbarText">COMMUNITY</div></div><!--
			--><div class="topbarButton"><div class="topbarText">PROFILE</div><a href="{{ route('profile') }}"><span class="divButton"></span></a></div>
		</div>
		<div class="notifBox">
			<img src="{{ asset('images/notification_icon.png') }}" style="width: 3vw">
			Notifications
		</div>
		<div id="dropdowncontent1" class="dropdownContent">
			<a href="{{ route('live_events_professional') }}">Live Events</a>
			<a href="">Upcoming Events</a>
			<a href="">Event Archive</a>
		</div>
		<div id="dropdowncontent2" class="dropdownContent">
			<a href="{{ route('live_events_community') }}">Live Events</a>
			<a href="">Upcoming Events</a>
			<a href="">Event Archive</a>
		</div>
	</div>
  @yield('content')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="{{ asset('myadmin/vendor/jquery/jquery.min.js') }}"></script>
  @yield('otherjs')
  <script type="text/javascript">
	$(document).ready(function() {

    let is_auth = "{{ Auth::check() }}"
    
	 
	  // $(".livestreamPanelDetailBarSave").each(function() {
		
    //   if($(this).val() == 1) {
    //     $(this).prop('checked', true);
    //   } else {
    //     $(this).prop('checked', false);
    //   }
		// })
  
		$(".livestreamPanelDetailBarSave").change(function() {
      event.preventDefault();

      if (is_auth) {
        let watchlist; 
        if ($(this).is(':checked')) {
          $(this).prop('checked', true);
          watchlist = 1;
        } else {
          $(this).prop('checked', false);
          watchlist = 0;
        }
      
        let event_id = $(this).attr('data-id');
        // console.log(event_id);
        // console.log(seen);
        $.ajax({
          url: "{{ route('watchlist') }}",
          type: "post",
          data: {
          // '_method': 'PUT',
          'event_id': event_id,
          'watchlist': watchlist,
          // document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          '_token': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'JSON',
          success: function (data) {
            console.log(data);
          },
          error: function (error) {
            console.log(error);
          }
        });
      
      }
      else {
        // alert("Please login");
        Swal.fire('Please login to add to watchlist')

        $(this).prop('checked', false);
        $(this).attr('disabled', true);

      }
      
      
	  });
  
  });
	</script>

  </body>
</html>