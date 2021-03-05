{{-- <div class="searchText">Search</div>
<input type="text" class="searchField"/>
<img src="{{ asset('images/search_bar_icon.png') }}" class="searchButton"/> --}}

<form method="get" id="search" action="{{ url('/') }}"></form>
<input type="text" class="searchField" form="search" name="search" value="" />
<input type="image" src="{{ asset('images/search_bar_icon.png') }}" class="searchButton" form="search"/>
