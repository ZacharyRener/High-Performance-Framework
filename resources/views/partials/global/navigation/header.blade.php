<header class="banner">
    <section id="header">
        <section id="utility-menu" class="">
            <div class="container d-flex flex-row">
                <nav id="socials" class="">
                    <ul class="d-flex flex-row">
                    {!! $social_media_list_items !!}
                    </ul>
                </nav>
                <section id="right-side" class="d-flex flex-row w-100 justify-content-end">
                    <nav id="utility">
                        {{ wp_nav_menu( array(
                            'menu'              => 2,
                            'menu_class'        => "d-flex flex-row",
                            'container_class'   => "",
                            'depth'             => 3,
                        )) }}
                    </nav>
                    <form action="/">
                        <input id="s" name="s" placeholder="Search..." />
                    </form>
                </section>
            </div>
        </section>
        <section id="primary-nav" class="">
            <div class="container d-flex flex-row">
                @if($has_logo)
                    @if($uses_svg)
                        <a href="/" class='site-logo-svg'>
                            {!! $logo_svg !!}  
                        </a>
                    @else
                        <a href="/">
                            <img src="{{ $site_logo }}" class="site-logo" alt="" />
                        </a>
                    @endif
                @endif
                <nav id="primary">
                    @if($uses_tray_menu)
                        @include('partials.global.navigation.tray-menu')
                    @else
                        {{ wp_nav_menu( array(
                            'menu'              => 2,
                            'menu_class'        => "d-flex flex-row w-100 justify-content-end align-items-center",
                            'container_class'   => "",
                            'depth'             => 3,
                        )) }}
                    @endif
                </nav>
            </div>
            <section id="mobile-nav">
                <button on:click={handleHamburgerClick} class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box"> 
                        <span class="hamburger-inner" />
                    </span>
                </button>
            </section>
            <section id="mobile-menu" class="hidden">
                {{ wp_nav_menu( array(
                    'menu'              => 3,
                    'menu_class'        => "",
                    'container_class'   => "",
                    'depth'             => 3,
                )) }}
            </section>
        </section>
    </section>
</header>
