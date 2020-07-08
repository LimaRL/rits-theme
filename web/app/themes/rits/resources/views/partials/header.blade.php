<header>
  <div class="header-container">
    @if (has_custom_logo())
      <h1>
        {{ the_custom_logo() }}
      </h1>
    @else
      <h1>
        <a class="brand" href="{{ home_url('/') }}" alt="{{ get_bloginfo('name', 'display') }}" >
          {{ get_bloginfo('name', 'display') }}
        </a>
      </h1>
    @endif

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
