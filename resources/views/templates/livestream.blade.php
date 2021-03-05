@extends('layouts.base')

@section('content')
<div class="menuPageNoSearch" style="overflow: hidden;">
  <div class="livestreamLeft">
    <div class="livestreamVideo"></div>
    <div class="livestreamBottom">
      <div class="livestreamDescription">
        <div class="livestreamProfilePicture" style="background-image: url({{ asset('holden.png') }})"></div>
        <div class="livestreamDenName">Holden Caulfield</div>
        <div class="livestreamFollowers">100 followers</div>
        <div class="livestreamDescriptionExpandableButton" onclick="expandExpandable(0)">
          Event Description
          <div id="carrot0" class="livestreamExpandableButtonCarrot"></div>
        </div>
        <div id="expandable0" class="livestreamDescriptionExpandableBox">
          Tester
        </div>
        <div class="livestreamDescriptionExpandableButton" onclick="expandExpandable(1)">
          Side Description
          <div id="carrot1" class="livestreamExpandableButtonCarrot"></div>
        </div>
        <div id="expandable1" class="livestreamDescriptionExpandableBox">
          Hi holden
        </div>
        <div class="livestreamDescriptionExpandableButton" onclick="expandExpandable(2)">
          About Den
          <div id="carrot2" class="livestreamExpandableButtonCarrot"></div>
        </div>
        <div id="expandable2" class="livestreamDescriptionExpandableBox">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
      <div class="livestreamBets"></div>
    </div>
  </div><!--
  --><div class="livestreamChat"></div>
</div>
@endsection
