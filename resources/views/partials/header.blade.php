<header>
  <div class="container">
    <nav>
      <div class="nav-left">
        <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo">
      </div>
      <div class="nav-center">
        <ul>
          @foreach($links as $link)
            {{-- @if($link='Comics')
              <li><a href="{{route('comics')}}">{{$link}}</a></li>
            @else --}}
              <li><a href="#">{{$link}}</a></li>
            {{-- @endif --}}
          @endforeach
        </ul>
      </div>
      <div class="nav-right">
        <span>Search</span>
      </div>
    </nav>
  </div>
  <div class="jumbo"></div>
</header>