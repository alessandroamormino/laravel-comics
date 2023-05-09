<header>
  <div class="container">
    <nav>
      <div class="nav-left">
        <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo">
      </div>
      <div class="nav-center">
        <ul>
          @foreach($links as $link)
              {{-- <li><a href="#">{{$link}}</a></li> --}}
              <li><a href="{{ $link == 'comics' ? '/'.$link : '#' }}">{{ $link }}</a></li>
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