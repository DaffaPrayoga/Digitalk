<div uk-sticky
     class="uk-navbar-container tm-navbar-container uk-sticky uk-active uk-sticky-below uk-sticky-fixed white z-depth-16">
    <div class="uk-container uk-container-expand">
        <nav class="uk-navbar">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo font-heavy grey-text-4" href="{{route('welcome')}}">
                    <img src="{{asset('img/digitalk_logo2.svg')}}" uk-img style="height: 40px;margin-right: 10px;"
                         alt="">
                    <span class="uk-text-middle" style="font-size: 1.7rem;">Digitalk<span class="accent-color">.</span></span>
                </a>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item uk-visible@m">
                    <form class="uk-search uk-search-navbar"
                          style="background-color: #f5f5f5;border-radius: 30px;padding-left: 10px;padding-right: 10px;">
                        <span uk-search-icon></span>
                        <input class="uk-search-input font-bold" name="search_thread" type="search"
                               placeholder="Search..." style="font-size: 0.9rem;">
                    </form>
                </div>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="#" class="uk-text-capitalize font-extrabold grey-text-3" style="font-size: 1rem;">Threads</a>
                    </li>
                    <li><a href="#" class="uk-text-capitalize font-extrabold grey-text-3"
                           style="font-size: 1rem;">Forum</a></li>
                    <li><a href="#" class="uk-text-capitalize font-extrabold grey-text-3" style="font-size: 1rem;">Popular</a>
                    </li>
                </ul>
                <div class="uk-navbar-item uk-visible@m">
                    <a href="#" style="margin-right: 15px;"
                       class="uk-button uk-button-default tm-button-default uk-icon uk-text-capitalize font-light grey-text uk-border-rounded">
                        Sign Up
                    </a>
                    <a href="#"
                       class="uk-button uk-button-default tm-button-default uk-icon uk-text-capitalize font-extrabold white-text uk-border-rounded bg-gradient-noshadow"
                       style="border: none;">
                        Sign In
                    </a>
                </div>
                <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle=""
                   class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         data-svg="navbar-toggle-icon">
                        <rect y="9" width="20" height="2"></rect>
                        <rect y="3" width="20" height="2"></rect>
                        <rect y="15" width="20" height="2"></rect>
                    </svg>
                </a>
            </div>
        </nav>
    </div>
</div>

