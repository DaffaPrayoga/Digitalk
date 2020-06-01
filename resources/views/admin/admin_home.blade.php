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
                <div class="card-photo" style="margin-right: 10px;background-image: url({{asset('img/user.svg')}})" uk-img alt="Profile Picture"></div>
                <span class="brand-chip font-regular uk-text-middle grey-text-2"
                      style="font-size: 14px;position:relative;top: -15px;">{{\Illuminate\Support\Facades\Auth::user()->name}} <span
                        uk-icon="icon: chevron-down" type="button" style="margin-left: 10px;"></span></span>
            </div>
            <div uk-dropdown="animation: uk-animation-slide-top-small;pos: bottom-justify;mode: click;"
                 style="border-radius: 6px;" class="z-depth-15">
                <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-nav-header">SETTING</li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                           class="uk-button uk-text-capitalize font-extrabold white-text uk-button-small uk-border-rounded bg-gradient"
                           style="border: none;margin-top: 20px;">
                            Sign Out
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" onsubmit="event.preventDefault();comfirm_popup(this, 'Apakah kamu yakin ingin Sign Out?');" method="POST" style="display: none;">
                        {{ csrf_field() }}</form>
                </ul>
            </div>
        </div>
        <div class="uk-child-width-1-4 uk-text-center uk-grid-match" uk-grid
             uk-height-match="target: > div > .uk-card" style="margin-top: 30px;">
            <div class="uk-width-1-2">
                <div
                    class="uk-card uk-card-default uk-card-body uk-border-rounded bg-gradient-noshadow"
                    style="border-radius: 6px;padding-top: 20px;">
                    <img src="{{asset('img/decore-left.svg')}}" class="uk-position-top-left" style="height: 100px;"
                         alt="">
                    <img src="{{asset('img/decore-right.svg')}}" class="uk-position-top-right" style="height: 75px;"
                         alt="">
                    <img src="{{asset('img/reward.svg')}}" class="background-darken-1"
                         style="padding: 20px;height: 70px;border-radius: 70px;" alt="">
                    <p class="white-text font-heavy uk-text-center" style="font-size: 27px;margin-bottom: 0px;">
                        Hello, {{\Illuminate\Support\Facades\Auth::user()->name}}!</p>
                    <p class="white-text font-light uk-text-center" style="margin-top: 10px;">Kamu telah memfilter
                        <span
                            class="font-extrabold">20 thread</span> dan menyelesaikan <span
                            class="font-extrabold">33 report</span> hari ini. Keep up the good work!</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body z-depth-15"
                     style="border-radius: 6px;padding:20px 20px;">
                    <img src="{{asset('img/hashtag.svg')}}" class="uk-align-left"
                         style="padding: 15px;height: 50px;border-radius: 50px;background-color: rgba(236,79,69,0.15);margin-bottom: 10px;display: block"
                         alt="">
                    <p class="font-extrabold grey-text-4 uk-align-left" style="font-size: 30px;margin-bottom: 0px;display: block;text-align: left;width: 100%;">
                        3233+</p>
                    <p class="grey-text font-light uk-align-left" style="margin-top: 0px;">Thread dibuat user</p>
                    <div id="thread-chart" class="uk-position-bottom-center" style="width: 100%;height: 100px;"></div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body z-depth-15"
                     style="border-radius: 6px;padding:20px 20px;">
                    <img src="{{asset('img/brand.svg')}}" class="uk-align-left"
                         style="padding: 15px;height: 50px;border-radius: 50px;background-color: rgba(236,79,69,0.15);margin-bottom: 10px;display: block"
                         alt="">
                    <p class="font-extrabold grey-text-4 uk-align-left" style="font-size: 30px;margin-bottom: 0px;display: block;text-align: left;width: 100%;">
                        15+</p>
                    <p class="grey-text font-light uk-align-left" style="margin-top: 0px;">Brand terdaftar</p>
                    <div id="brand-chart" class="uk-position-bottom-center" style="width: 100%;height: 100px;"></div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body z-depth-15"
                     style="border-radius: 6px;padding:20px 20px;">
                    <img src="{{asset('img/gadget.svg')}}" class="uk-align-left"
                         style="padding: 15px;height: 50px;border-radius: 50px;background-color: rgba(236,79,69,0.15);margin-bottom: 10px;display: block"
                         alt="">
                    <p class="font-extrabold grey-text-4 uk-align-left" style="font-size: 30px;margin-bottom: 0px;display: block;text-align: left;width: 100%;">
                        120+</p>
                    <p class="grey-text font-light uk-align-left" style="margin-top: 0px;">Gadget terdaftar</p>
                    <div id="gadget-chart" class="uk-position-bottom-center" style="width: 100%;height: 100px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    @include('layouts.js')
@show
<script type="text/javascript">
    var options = {
        chart: {
            height: 100, type: "area", toolbar: {
                show: !1
            }
            , sparkline: {
                enabled: !0
            }
            , grid: {
                show: !1, padding: {
                    left: 0, right: 0
                }
            }
        }
        , colors: ["#ec454f"], dataLabels: {
            enabled: !1
        }
        , stroke: {
            curve: "smooth", width: 2.5
        }
        , fill: {
            type: "gradient", gradient: {
                shadeIntensity: .9, opacityFrom: .7, opacityTo: .5, stops: [0, 80, 100]
            }
        }
        , series: [{
            name: "Jumlah Total", data: [10, 15, 20, 25, 49]
        }
        ], xaxis: {
            labels: {
                show: !1
            }
            , axisBorder: {
                show: !1
            }
        }
        , yaxis: [{
            y: 0, offsetX: 0, offsetY: 0, padding: {
                left: 0, right: 0
            }
        }
        ], tooltip: {
            x: {
                show: !1
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#thread-chart"), options);
    var chart_brand = new ApexCharts(document.querySelector("#brand-chart"), options);
    var chart_gadget = new ApexCharts(document.querySelector("#gadget-chart"), options);

    chart.render();
    chart_brand.render();
    chart_gadget.render();
</script>
</body>
</html>
