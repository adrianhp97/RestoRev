<header>
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1 class="logo"><a href="{{URL::route('client-index')}}">eclair</a></h1>
        <button class="navbar-toggler menuButton" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse menuList" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="menuOpt nav-link" style="color: #FFFFFF" href="{{URL::route('client-index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="menuOpt nav-link" style="color: #FFFFFF" href="{{URL::route('client-member')}}">Members</a>
            </li>
            <li class="nav-item">
              <a class="menuOpt nav-link" style="color: #FFFFFF" href="{{URL::route('client-promo')}}">Promo</a>
            </li>
            <li class="nav-item">
              <a class="menuOpt nav-link" style="color: #FFFFFF" href="{{URL::route('client-partnership')}}">Partnership</a>
            </li>
              <li class="nav-item">
              <a class="menuOpt nav-link" style="color: #FFFFFF" href="{{URL::route('client-about')}}">About</a>
            </li>
          </ul>
        </div>
        <div class="searchDropdown">
        <img id="search" src="{{URL::asset('img/search.png')}}" />
        <div id="searchBar">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div>
      </nav>
    </div>
  </div>
</header>