<div class="z-depth-15 uk-position-fixed" style="width: 260px;height: 100vh;">
    <div class="side-menu-container" style="padding: 20px;">
        <a class="uk-align-center uk-text-center uk-logo font-heavy grey-text-4" href="{{route('welcome')}}">
            <span class="uk-text-middle" style="font-size: 1.7rem;">Digitalk<span class="accent-color">.</span></span>
            <span class="uk-text-middle brand-chip white-text font-bold bg-gradient-noshadow uk-border-rounded"
                  style="font-size: 0.8rem;padding-left: 10px;padding-right: 10px;padding-top: 6px;padding-bottom: 5px;">Admin</span>
        </a>
        <ul class="uk-nav uk-nav-default">
            <li><a href="{{route('admin')}}"
                   class="@if(Route::currentRouteName() == 'admin') bg-gradient white-text @else side-nav-link @endif transisi"
                   style="border-radius: 6px;padding: 10px 15px 10px 20px;font-size: 1rem;"><span
                        class="uk-margin-small-right" uk-icon="icon: home"></span> <span class="uk-text-middle">Dashboard</span></a>
                @if(Route::currentRouteName() != 'admin')
                    <span style="float: right;margin-top: -33px;left: -10px;position: relative"
                          uk-icon="icon: chevron-right"></span>
                @endif
            </li>
            <li class="uk-nav-header grey-text" style="letter-spacing: 1.5px;font-size: 0.8rem;margin-top: 35px;">
                MANAGE
            </li>
            <li><a href="{{route('brands.index')}}"
                   class="@if(Route::currentRouteName() == 'brands.index') bg-gradient white-text @else side-nav-link @endif transisi"
                   @if(Route::currentRouteName() == 'brands.index') style="border-radius: 6px;padding: 10px 15px 10px 20px;font-size: 1rem;margin-bottom: 10px;margin-top: 10px;" @endif>
                    <span class="uk-margin-small-right" uk-icon="icon: tag"></span>
                    <span class="uk-text-middle">Brands</span></a>
                @if(Route::currentRouteName() != 'brands.index')
                    <span style="float: right;margin-top: -33px;left: -10px;position: relative"
                          uk-icon="icon: chevron-right"></span>
                @endif
            </li>
            <li><a href="{{route('gadgets.index')}}"
                   class="@if(Route::currentRouteName() == 'gadgets.index') bg-gradient white-text @else side-nav-link @endif transisi"
                   @if(Route::currentRouteName() == 'gadgets.index') style="border-radius: 6px;padding: 10px 15px 10px 20px;font-size: 1rem;margin-bottom: 10px;margin-top: 10px;" @endif>
                    <span class="uk-margin-small-right" uk-icon="icon: phone"></span>
                    <span class="uk-text-middle">Gadget</span></a>
                @if(Route::currentRouteName() != 'gadgets.index')
                    <span style="float: right;margin-top: -33px;left: -10px;position: relative"
                          uk-icon="icon: chevron-right"></span>
                @endif
            </li>
            <li><a href="#"
                   class="@if(Route::currentRouteName() == 'threads.index') bg-gradient white-text @else side-nav-link @endif transisi"
                   @if(Route::currentRouteName() == 'threads.index') style="border-radius: 6px;padding: 10px 15px 10px 20px;font-size: 1rem;margin-bottom: 10px;margin-top: 10px;" @endif>
                    <span class="uk-margin-small-right" uk-icon="icon: hashtag"></span>
                    <span class="uk-text-middle">Threads</span></a>
                @if(Route::currentRouteName() != 'threads.index')
                    <span style="float: right;margin-top: -33px;left: -10px;position: relative"
                          uk-icon="icon: chevron-right"></span>
                @endif
            </li>
            <li><a href="#"
                   class="@if(Route::currentRouteName() == 'reports.index') bg-gradient white-text @else side-nav-link @endif transisi"
                   @if(Route::currentRouteName() == 'reports.index') style="border-radius: 6px;padding: 10px 15px 10px 20px;font-size: 1rem;margin-bottom: 10px;margin-top: 10px;" @endif>
                    <span class="uk-margin-small-right" uk-icon="icon: pull"></span>
                    <span class="uk-text-middle">Reports</span></a>
                @if(Route::currentRouteName() != 'reports.index')
                    <span style="float: right;margin-top: -33px;left: -10px;position: relative"
                          uk-icon="icon: chevron-right"></span>
                @endif
            </li>
        </ul>
    </div>
</div>
