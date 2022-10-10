<header>
  <div class="container">
    <a href="#"><img src="{{ asset('img/dc-logo.png') }}" alt="DC" /></a>
    <nav>
      <ul>
        <li><a href="{{ route('characters') }}" class="{{ Request::route()->getName() === 'characters' ? 'active' : '' }}">Characters</a></li>
        <li><a href="{{ route('comics') }}" class="{{ Request::route()->getName() === 'comics' ? 'active' : '' }}">Comics</a></li>
        <li><a href="{{ route('movies') }}" class="{{ Request::route()->getName() === 'movies' ? 'active' : '' }}">Movies</a></li>
        <li><a href="{{ route('tv') }}" class="{{ Request::route()->getName() === 'tv' ? 'active' : '' }}">TV</a></li>
        <li><a href="{{ route('games') }}" class="{{ Request::route()->getName() === 'games' ? 'active' : '' }}">Games</a></li>
        <li><a href="{{ route('collectibles') }}" class="{{ Request::route()->getName() === 'collectibles' ? 'active' : '' }}">Collectibles</a></li>
        <li><a href="{{ route('videos') }}" class="{{ Request::route()->getName() === 'videos' ? 'active' : '' }}">Videos</a></li>
        <li><a href="{{ route('fans') }}" class="{{ Request::route()->getName() === 'fans' ? 'active' : '' }}">Fans</a></li>
        <li><a href="{{ route('news') }}" class="{{ Request::route()->getName() === 'news' ? 'active' : '' }}">News</a></li>
        <li><a href="{{ route('shop') }}" class="{{ Request::route()->getName() === 'shop' ? 'active' : '' }}">Shop</a></li>
      </ul>
    </nav>
  </div>
</header>
