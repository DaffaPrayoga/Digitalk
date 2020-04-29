@section('head')
    @include('layouts.head')
@show
<body class="font-regular">
@section('loader')
    @include('layouts.loader')
@show
@section('admin_nav')
    @include('layouts.admin_nav')
@show
<div class="admin-body" style="margin-left: 260px;">
    <div class="uk-container" style="padding-top: 20px;">
        <div
            class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small z-depth-15"
            style="border-radius: 6px;">
            <p class="grey-text font-regular uk-text-middle"
               style="font-size: 15px;margin-bottom: 5px;margin-top: 5px;">{{\Carbon\Carbon::parse(\Carbon\Carbon::today())->format('l, d F Y')}}</p>
            <div class="account uk-position-right" style="top: 10px;right: 20px;cursor: pointer">
                <img src="{{asset('img/user.svg')}}"
                     style="height: 40px;width: 40px;border-radius: 40px;margin-right: 10px;" uk-img alt="">
                <span class="brand-chip font-regular uk-text-middle grey-text-2"
                      style="font-size: 14px;">{{\Illuminate\Support\Facades\Auth::user()->name}} <span
                        uk-icon="icon: chevron-down" type="button" style="margin-left: 10px;"></span></span>
            </div>
            <div uk-dropdown="animation: uk-animation-slide-top-small;pos: bottom-justify;mode: click;"
                 style="border-radius: 6px;" class="z-depth-15">
                <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-nav-header">SETTING</li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li>
                        <a href="{{route('logout')}}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                           class="uk-button uk-text-capitalize font-extrabold white-text uk-button-small uk-border-rounded bg-gradient"
                           style="border: none;margin-top: 20px;">
                            Sign Out
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}"
                          onsubmit="event.preventDefault();comfirm_popup(this, 'Apakah kamu yakin ingin Sign Out?');"
                          method="POST" style="display: none;">
                        {{ csrf_field() }}</form>
                </ul>
            </div>
        </div>
        <div class="uk-width-1-2" style="margin-top: 30px;">
            <div class="uk-card uk-card-default uk-card-body z-depth-15"
                 style="border-radius: 6px;padding:30px 20px;">
                <h5 class="grey-text-4 font-heavy" style="font-size: 1.8rem;">+ Add Brand</h5>
                <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1">
{{--                            <label class="uk-form-label" for="form-stacked-text">Brand Name</label>--}}
                            <input class="uk-input uk-border-rounded font-light" placeholder="Enter Brand name" name="name" type="text" required>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-margin" uk-margin>
                            <label class="uk-form-label" for="form-stacked-text">Brand Logo</label>
                            <div uk-form-custom="target: true" class="uk-width-1">
                                <input type="file" name="image" required>
                                <input class="uk-input uk-border-rounded uk-form-width-medium" type="text" placeholder="Select file" disabled>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                            class="uk-button uk-button-default tm-button-default uk-icon uk-text-capitalize font-extrabold white-text uk-border-rounded bg-gradient"
                            style="border: none;margin-bottom: 10px;">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@section('js')
    @include('layouts.js')
@show
<script>
    $('#datatable').dataTable();
</script>
</body>
</html>
