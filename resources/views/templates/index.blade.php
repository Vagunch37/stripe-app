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
          <div class="livestreamPanelDetailBarDetail">{{ $event->views }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
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
          <div class="livestreamPanelDetailBarDetail">{{ $event->views }}</div>
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
          <div class="livestreamPanelDetailBarDetail">{{ $event->views }}</div>
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
          <div class="livestreamPanelDetailBarDetail">{{ $event->views }}</div>
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
          <div class="livestreamPanelDetailBarDetail">{{ $event->views }}</div>
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
          <div class="livestreamPanelDetailBarDetail">{{ $event->views }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->category->name }}</div>
          <div class="livestreamPanelDetailBarDetail">{{ $event->language->name }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

@section('otherjs')
<script>

</script>
@endsection

