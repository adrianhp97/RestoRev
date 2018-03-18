<!doctype html>
<html>
<head>
  @include('client.head')
</head>
<body>
  <div class="container-fluid">
      @include('client.navigator')
      <div id="content">
          @yield('content')
          @yield('script')
      </div>
  </div>
  @include('client.footer')
</body>
</html>

