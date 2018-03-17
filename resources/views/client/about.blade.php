<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/about.css')}}">

    <title>Restaurant Review</title>
  </head>
  <body>
    <div class="container-fluid">
      <header>
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <h1 class="logo"><a href="#">eclair</a></h1>
              <button class="navbar-toggler menuButton" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse menuList" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="menuOpt nav-link" style="color: #FFFFFF" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="menuOpt nav-link" style="color: #FFFFFF" href="#">Members</a>
                  </li>
                  <li class="nav-item">
                    <a class="menuOpt nav-link" style="color: #FFFFFF" href="#">Promo</a>
                  </li>
                  <li class="nav-item">
                    <a class="menuOpt nav-link" style="color: #FFFFFF" href="#">Partnership</a>
                  </li>
                   <li class="nav-item">
                    <a class="menuOpt nav-link" style="color: #FFFFFF" href="#">About</a>
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

      <div class="row content">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h1 style="color: #626E60;">About</h1>
          <p style="color: #626E60;">
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
          </p>
        </div>
        <div class="col-md-3"></div>
      </div>  <!-- /end of content -->
    </div>

    <footer>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright &copy; 2018 All Rights Reserved.</p>
        </div>
      </div>
    </footer><!-- /footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var search = document.getElementById('search');
      var searchBar = document.getElementById('searchBar');

      search.onclick = function() {
          if (searchBar.style.display == 'block')
            searchBar.style.display = 'none';
          else
            searchBar.style.display = 'block';
      }
    </script>
  </body>
</html>