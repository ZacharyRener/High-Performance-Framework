<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.global.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.global.dependencies')
    @include('partials.global.navigation.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
            @yield('header')
            @if(is_front_page())
                @yield('content')
            @else
            <div class="main-container">
                <section class="about-body-section slide-up">
                    <div class="container">
                        <div class='row'>
                            @yield('content')
                        </div>
                    </div>
                </section>
            </div>
            @endif
        </main>
      </div>
    </div>
    @include('partials.global.footer')
    @php wp_footer() @endphp
  </body>
</html>
