@extends('layouts.base')

@section('content')
<div class="searchBarField">
  <div class="pageTitle">
  @if(request('timing') == 1)
  Community Live Events
  @elseif(request('timing') == 2)
  Community Upcoming Events
  @elseif(request('timing') == 3)
  Community Events Archive
  @endif
  </div>
  @include('shared.search')
</div>

@if(request('timing') == 1)
<div class="menuPageYesSearch"> 
  <div class="category">
    <div class="categoryTitle">
      Premier Events Live
    </div>
    <div class="categoryVideos">
    @foreach($premiere_live as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Sports Live</div>
    <div class="categoryVideos">
    @foreach($sports_live as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Events Live</div>
    <div class="categoryVideos">
    @foreach($events_live as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</div>
@elseif(request('timing') == 2)
<div class="menuPageYesSearch"> 
  <div class="category">
    <div class="categoryTitle">Premier Events Upcoming</div>
    <div class="categoryVideos">
    @foreach($premiere_upcoming as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Sports Upcoming</div>
    <div class="categoryVideos">
    @foreach($sports_upcoming as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Events Upcoming</div>
    <div class="categoryVideos">
    @foreach($events_upcoming as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</div>
@elseif(request('timing') == 3)
<div class="menuPageYesSearch"> 
  <div class="category">
    <div class="categoryTitle">
      Premier Events Archive
    </div>
    <div class="categoryVideos">
    @foreach($premiere_archive as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Sports Archive</div>
    <div class="categoryVideos">
    @foreach($sports_archive as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
  <div class="category">
    <div class="categoryTitle">Events Archive</div>
    <div class="categoryVideos">
    @foreach($events_archive as $event)
      <div class="categoryVideo">
        <img src="/images/events/{{ $event->image_name }}" class="livestreamPanelImage">
        <div class="livestreamPanelDetailBar">
          <div class="livestreamPanelDetailBarTitle"><b>{{ $event->name }}</b></div>
          @if(Auth::check())
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave" {{ Auth::user()->events->contains($event) ? 'checked' : ''  }}>
          @else
          <input type="checkbox" id="save{{ $event->id }}" name="save{{ $event->id }}" data-id="{{ $event->id }}" value="save05" class="livestreamPanelDetailBarSave">
          @endif
          <label for="save1" class="livestreamPanelDetailBarWatchlist">Watchlist</label>
          <img src="{{ asset('images/eye.png') }}" class="livestreamPanelDetailBarEye">
          <div class="livestreamPanelDetailBarDetail">{{ number_format($event->views, 0, ',', ' ') }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</div>
@endif
@endsection
