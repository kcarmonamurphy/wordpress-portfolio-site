<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))


    @include('partials.mobile-menu')



    <div class="wrap container" role="document">
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
      <main class="main">
        @yield('content')
      </main>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
