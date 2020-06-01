@section('head')
    @include('layouts.head')
@show
<body class="font-regular">
@section('loader')
    @include('layouts.loader')
@show
@section('navbar')
    @include('layouts.navbar')
@show
<div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
    <div class="uk-padding" style="background: #f5f5f5;border-radius: 20px;">
        <div class="z-depth-12 uk-animation-toggle white uk-animation-scale-up delay-animation" tabindex="0"
             style="padding: 10px 40px;border-radius: 30px;display: inline-block;">
            <img class="uk-align-center" src="{{asset('img/brand_logo/'.$brands->image)}}"
                 style="height: 30px;margin-top: 24px;margin-bottom: 35px;" alt="">
        </div>
        <p class="font-heavy grey-text-4 uk-heading-small uk-animation-slide-left uk-animation-toggle"
           style="display: inline-block;top: -35px;left: 20px;position: relative;animation-delay: 0.9s">{{$brands->name}}
            <span
                class="accent-color">.</span></p>
        <ul class="uk-breadcrumb uk-animation-toggle uk-animation-slide-bottom"
            style="position:absolute;margin-top: -15px;animation-delay: 1s;">
            <li><a class="uk-text-capitalize" href="{{url(request()->segment(1))}}">{{request()->segment(1)}}</a></li>
            <li><a class="uk-text-capitalize" href="{{url(request()->segment(1))}}">{{request()->segment(2)}}</a></li>
            <li><a class="uk-text-capitalize"
                   href="{{url(request()->segment(1) . "/" . request()->segment(2) . "/" . request()->segment(3))}}">{{request()->segment(3)}}</a>
            </li>
        </ul>
        <img src="{{asset('img/no_brand.svg')}}" class="uk-animation-scale-down" uk-img
             style="height: 200px;top: -30px;float: right;position:relative;animation-delay: 1.4s"
             alt="">
    </div>
    <p class="grey-text-1 font-regular">{{$brands->name}} Threads :</p>
    <div class="uk-grid uk-margin-small-top" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-card uk-card-default hoverable uk-card-small uk-card-body z-depth-15" style="border-radius: 10px;">
                <div class="uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <div class="card-photo"
                             style="background-image: url({{asset('img/user.svg')}});"
                             uk-img alt="Profile Picture"></div>
                    </div>
                    <div class="uk-width-1-2 uk-width-expand">
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                <input class="uk-input form-looks font-light" placeholder="Create a thread..."
                                       style="height: 50px;font-size: 14px;" name="email" type="text" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thread-card uk-card uk-card-default uk-card-small uk-card-body z-depth-15 uk-margin-top hoverable"
                 style="border-radius: 10px;">
                <div class="uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-width-1-1">
                            <a href="#" class="uk-icon-button" uk-icon="arrow-up"></a>
                        </div>
                        <div class="uk-width-1-1">
                            <p class="grey-text-3 font-bold uk-text-center"
                               style="margin-top: 15px;margin-bottom: 10px;">254</p>
                        </div>
                        <div class="uk-width-1-1">
                            <a href="#" class="uk-icon-button" uk-icon="arrow-down"></a>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-expand">
                        <div class="uk-margin">
                            <p class="grey-text font-light" style="font-size: 0.9rem">Posted by <a href="#" class="accent-color-2 font-regular">Daffascript</a> • 16 hours ago</p>
                            <a href="#" class="grey-text-3 font-extrabold" style="font-size: 19px;top: -15px;position:relative">Apa sih ga
                                enaknya pake Iphone dan keenakannya?</a>
{{--                            <a href="#"--}}
{{--                               class="uk-button uk-button-default tm-button-default uk-icon uk-text-capitalize font-extrabold white-text uk-border-rounded bg-gradient"--}}
{{--                               style="border: none;margin-right: 10px;margin-bottom: 15px;">--}}
{{--                                Discuss--}}
{{--                            </a>--}}
                            <div class="tags" style="margin-bottom: 10px;">
                                <span class="brand-chip uk-border-rounded white-text bg-gradient-noshadow"
                                   style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">{{$brands->name}}</span>
                                <span class="brand-chip uk-border-rounded white-text bg-gradient-noshadow"
                                      style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">IPhone 11 Pro</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thread-card uk-card uk-card-default uk-card-small uk-card-body z-depth-15 uk-margin-top hoverable"
                 style="border-radius: 10px;">
                <div class="uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-width-1-1">
                            <a href="#" class="uk-icon-button" uk-icon="arrow-up"></a>
                        </div>
                        <div class="uk-width-1-1">
                            <p class="grey-text-3 font-bold uk-text-center"
                               style="margin-top: 15px;margin-bottom: 10px;">102</p>
                        </div>
                        <div class="uk-width-1-1">
                            <a href="#" class="uk-icon-button" uk-icon="arrow-down"></a>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-expand">
                        <div class="uk-margin">
                            <p class="grey-text font-light" style="font-size: 0.9rem">Posted by <a href="#" class="accent-color-2 font-regular">OpiekBelerang</a> • 18 hours ago</p>
                            <a href="#" class="grey-text-3 font-extrabold" style="font-size: 19px;top: -15px;position:relative">Bahahahhaa anjir kayak boba xD</a>
                            <img data-src="{{asset('img/thread_images/thread_1.jpg')}}" width="90%" class="z-depth-15" height="auto" uk-img style="margin-bottom: 30px;"  alt="">
                            <div class="tags" style="margin-bottom: 10px;">
                                <span class="brand-chip uk-border-rounded white-text bg-gradient-noshadow"
                                      style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">{{$brands->name}}</span>
                                <span class="brand-chip uk-border-rounded white-text bg-gradient-noshadow"
                                      style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">IPhone 11 Pro</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thread-card uk-card uk-card-default uk-card-small uk-card-body z-depth-15 uk-margin-top hoverable"
                 style="border-radius: 10px;">
                <div class="uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-width-1-1">
                            <a href="#" class="uk-icon-button" uk-icon="arrow-up"></a>
                        </div>
                        <div class="uk-width-1-1">
                            <p class="grey-text-3 font-bold uk-text-center"
                               style="margin-top: 15px;margin-bottom: 10px;">130</p>
                        </div>
                        <div class="uk-width-1-1">
                            <a href="#" class="uk-icon-button" uk-icon="arrow-down"></a>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-expand">
                        <div class="uk-margin">
                            <p class="grey-text font-light" style="font-size: 0.9rem">Posted by <a href="#" class="accent-color-2 font-regular">Shrewdtam</a> • 20 hours ago</p>
                            <a href="#" class="grey-text-3 font-extrabold" style="font-size: 19px;top: -15px;position:relative">IPhone gabisa nyalain personal hotspot.</a>
                            <p class="grey-text-1 font-light" style="margin-top: -5px;">ini IPhone emang susah yak buat nyalain personal hotspot nya? ane pake telkomsel gan tapi dibilang harus contact provider inet nya dulu. ada yg tau cara aktifin personal hotspot nya?</p>
                            <div class="tags" style="margin-bottom: 10px;">
                                <span class="brand-chip uk-border-rounded white-text bg-gradient-noshadow"
                                      style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">{{$brands->name}}</span>
                                <span class="brand-chip uk-border-rounded white-text bg-gradient-noshadow"
                                      style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">IPhone 11 Pro</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-card uk-card-default uk-card-small uk-card-body z-depth-15" uk-sticky="offset: 110; bottom: #top" style="border-radius: 10px;">
                <div class="uk-padding-small">
                    <p class="grey-text-3 font-heavy" style="font-size: 20px;">{{$brands->name}} Devices :</p>
                    <div style="margin-top: 20px;">
                        @forelse($data as $v)
                            <a href="{{url('forum/brand/' . $v->brand->name . "/" . $v->slug)}}"
                               class="uk-button uk-button-small uk-button-default tm-button-default uk-icon uk-text-capitalize white-text uk-border-rounded bg-gradient-noshadow"
                               style="border: none;margin-right: 10px;margin-bottom: 15px;font-size: 0.8rem;">
                                {{$v->name}}
                            </a>
                        @empty
                            <div class="uk-text-center">
                                <img src="{{asset('img/no_gadget_3.svg')}}" uk-img style="height: 150px;margin-top: 30px;" alt="">
                                <p class="grey-text-3 font-extrabold" style="font-size: 18px;">No Device Registered</p>
                                <p class="grey-text-1 font-regular" style="font-size: 16px;margin-top: -20px;">no device for this
                                    brand.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    @include('layouts.js')
@show
</body>
</html>
