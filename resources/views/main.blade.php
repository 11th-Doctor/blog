<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials._head')
  </head>
  
  <body>
    <div id="app">
      @include('partials._nav')

      <div class="container">
        @include('partials._message')

        {{-- {{Auth::check() ? "登入" : "登出"}} --}}

        @yield('content')

        @include('partials._footer')

      </div> <!-- End of container -->

      @include('partials._javascript')

      @yield('scripts')
    </div>
  </body>
</html>