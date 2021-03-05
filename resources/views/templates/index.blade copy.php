@extends('layouts.base')

@section('content')
<div class="searchBarField">
  <div class="pageTitle">Home</div>
  @include('shared.search')
</div>

<div class="menuPageYesSearch">
  <div class="category">
    <div class="categoryTitle">Premier Events Live</div>
    <div class="categoryVideos">
      {{-- <input type="checkbox" class="rem" name="rem" data-id="{{ $contact->id }}" value="{{ $contact->rem }}"/> --}}
      


      <div class="categoryVideo">
        <img src="{{ asset('images/image01.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Borussia Dortmund vs Bayern München</b></div>
          {{-- <input type="checkbox" class="watchlist" name="watchlist" data-id="1" value="1"/> --}}
          {{-- <input type="checkbox" id="save01" name="save01" value="save01" class="livestreamPanelDetailBarSave"> --}}
          <input type="checkbox" id="save01" name="save01" data-id="1" value="" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Soccer</div>
          <div class="livestreamPanelDetailBarDetail">Deutsch</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image02.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Lakers VS Celtics</b></div>
          <input type="checkbox" id="save02" name="save02" value="save02" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Basketball</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image03.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Cleveland Browns VS Los Angeles Chargers</b></div>
          <input type="checkbox" id="save03" name="save03" value="save03" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Football</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image04.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Patriots VS Eagles</b></div>
          <input type="checkbox" id="save04" name="save04" value="save04" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Football</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Premier Events Upcoming</div>
    <div class="categoryVideos">
      <div class="categoryVideo">
        <img src="{{ asset('images/image05.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Cleveland Cavaliers VS Milwaukee Bucks</b></div>
          <input type="checkbox" id="save05" name="save05" value="save05" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Basketball</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image06.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Colts VS Texans</b></div>
          <input type="checkbox" id="save06" name="save06" value="save06" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Football</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image07.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>FCB VS Paris Saint Germain</b></div>
          <input type="checkbox" id="save07" name="save07" value="save07" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Soccer</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image08.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Pittsburgh Penguins VS Florida Panthers</b></div>
          <input type="checkbox" id="save08" name="save08" value="save08" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Ice Hockey</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Sports Live</div>
    <div class="categoryVideos">
      <div class="categoryVideo">
        <img src="{{ asset('images/image09.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Calgary Flames VS Dallas Stars</b></div>
          <input type="checkbox" id="save09" name="save09" value="save09" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Ice Hockey</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image10.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Atlanta Braves VS Los Angeles Dodgers</b></div>
          <input type="checkbox" id="save10" name="save10" value="save10" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Baseball</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image11.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>New York Yankees VS Kansas City Royals</b></div>
          <input type="checkbox" id="save11" name="save11" value="save11" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Baseball</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image12.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Nascar Indianapolis 500</b></div>
          <input type="checkbox" id="save12" name="save12" value="save12" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Racing</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Sports Upcoming</div>
    <div class="categoryVideos">
      <div class="categoryVideo">
        <img src="{{ asset('images/image13.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Sumo Nihon League</b></div>
          <input type="checkbox" id="save13" name="save13" value="save13" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Sumo Wrestling</div>
          <div class="livestreamPanelDetailBarDetail">Japanese</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image14.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Volkan VS Smith</b></div>
          <input type="checkbox" id="save14" name="save14" value="save14" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Wrestling</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image15.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Oleinik VS Werdum</b></div>
          <input type="checkbox" id="save15" name="save15" value="save15" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Wrestling</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image16.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Chicago Bulls VS Indiana Pacers</b></div>
          <input type="checkbox" id="save16" name="save16" value="save16" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Basketball</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Events Live</div>
    <div class="categoryVideos">
      <div class="categoryVideo">
        <img src="{{ asset('images/image17.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Louisville Cardinals VS University of Kentucky</b></div>
          <input type="checkbox" id="save17" name="save17" value="save17" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Basketball</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image18.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Fortnite World Championship</b></div>
          <input type="checkbox" id="save18" name="save18" value="save18" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Fortnite</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image19.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Kentucky Derby</b></div>
          <input type="checkbox" id="save19" name="save19" value="save19" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Horse Racing</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image20.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Bowling World Championship</b></div>
          <input type="checkbox" id="save20" name="save20" value="save20" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Bowling</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Events Upcoming</div>
    <div class="categoryVideos">
      <div class="categoryVideo">
        <img src="{{ asset('images/image21.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>New York Knicks VS Houston Rockets</b></div>
          <input type="checkbox" id="save21" name="save21" value="save21" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Basketball</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image22.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Rainbow 6 Siege World Championship</b></div>
          <input type="checkbox" id="save22" name="save22" value="save22" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Rainbow 6</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image23.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>League of Legends World Championship</b></div>
          <input type="checkbox" id="save23" name="save23" value="save23" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">League of...</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
      <div class="categoryVideo">
        <img src="{{ asset('images/image24.png') }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>Monopoly Tournament Phoenix</b></div>
          <input type="checkbox" id="save24" name="save24" value="save24" class="livestreamPanelDetailBarSave">
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">15000</div>
          <div class="livestreamPanelDetailBarDetail">Monopoly</div>
          <div class="livestreamPanelDetailBarDetail">English</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection