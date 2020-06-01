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
           style="display: inline-block;top: -35px;left: 20px;position: relative;animation-delay: 0.9s">{{$gadget->name}}
            <span
                class="accent-color">.</span></p>
        <ul class="uk-breadcrumb uk-animation-toggle uk-animation-slide-bottom"
            style="position:absolute;margin-top: -15px;animation-delay: 1s;">
            <li><a class="uk-text-capitalize" href="{{url(request()->segment(1))}}">{{request()->segment(1)}}</a></li>
            <li><a class="uk-text-capitalize" href="{{url(request()->segment(1))}}">{{request()->segment(2)}}</a></li>
            <li><a class="uk-text-capitalize"
                   href="{{url(request()->segment(1) . "/" . request()->segment(2) . "/" . request()->segment(3))}}">{{request()->segment(3)}}</a>
            </li>
            <li><a class="uk-text-capitalize"
                   href="{{url(request()->segment(1) . "/" . request()->segment(2) . "/" . request()->segment(3) . "/" . request()->segment(4))}}">{{$gadget->name}}</a>
            </li>
        </ul>
        <img src="{{asset('img/no_gadget_4.svg')}}" class="uk-animation-scale-down" uk-img
             style="height: 110px;top: 15px;float: right;position:relative;animation-delay: 1.4s"
             alt="">
    </div>
    <p class="grey-text-1 font-regular">{{$gadget->name}} Threads :</p>
    <div id="modal-sections" uk-modal>
        <div class="uk-modal-dialog" style="border-radius: 20px !important;">
            <button class="uk-modal-close-default uk-icon-button" type="button" uk-close></button>
            <div class="uk-modal-body" style="border-radius: 20px !important;">
                <h2 class="uk-modal-title font-heavy grey-text-4" style="font-size: 1.9rem;">Create a thread</h2>
                <ul class="uk-child-width-expand" uk-tab>
                    <li class="thread-tab-post"><a onclick="postTabOpen()" href="#" class="font-bold grey-text-3"><span
                                class="uk-margin-small-right" uk-icon="icon: pencil"></span>Post</a></li>
                    <li class="thread-tab-image"><a onclick="imageTabOpen()" href="#"
                                                    class="font-bold grey-text-3"><span class="uk-margin-small-right"
                                                                                        uk-icon="icon: camera"></span>
                            Image</a></li>
                    <li class="thread-tab-video"><a onclick="videoTabOpen()" href="#" class="font-bold grey-text-3"><span
                                class="uk-margin-small-right" uk-icon="icon: video-camera"></span> Video</a></li>
                </ul>
                <div id="post">
                    <div class="uk-inline uk-width-1-1">
                        <input class="uk-input form-looks font-light" placeholder="Judul thread"
                               style="height: 50px;font-size: 14px;" name="text" type="text" required>
                    </div>
                    <div class="uk-inline uk-width-1-1" style="margin-top: 30px;">
                    <textarea id="editor" name="detail"
                              style="min-height: 200px;" required>Tulis artikel thread disini (Optional)</textarea>
                    </div>
                </div>
                <div id="image">
                    <div class="uk-inline uk-width-1-1">
                        <input class="uk-input form-looks font-light" placeholder="Judul thread"
                               style="height: 50px;font-size: 14px;" name="text" type="text" required>
                    </div>
                    <div class="uk-inline uk-width-1-1" style="margin-top: 10px;">
                        <label class="uk-form-label" for="form-stacked-text">Image</label>
                        <div uk-form-custom="target: true" class="uk-width-1">
                            <input type="file" name="image" required>
                            <input class="uk-input uk-border-rounded uk-form-width-medium" type="text"
                                   placeholder="Select image" disabled>
                        </div>
                    </div>
                </div>
                <div id="video">
                    <div class="uk-inline uk-width-1-1">
                        <input class="uk-input form-looks font-light" placeholder="Judul thread"
                               style="height: 50px;font-size: 14px;" name="text" type="text" required>
                    </div>
                    <div class="uk-inline uk-width-1-1" style="margin-top: 20px;">
                        <input class="uk-input form-looks font-light" placeholder="Link video (embed)"
                               style="height: 50px;font-size: 14px;" name="text" type="text" required>
                    </div>
                </div>
            </div>
            <div class="uk-modal-footer uk-text-right"
                 style="border-bottom-left-radius: 20px !important;border-bottom-right-radius: 20px !important;">
                <button class="uk-button bg-gradient white-text uk-border-rounded" type="button">Submit</button>
            </div>
        </div>
    </div>
    <div class="uk-grid uk-margin-small-top" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-card uk-card-default hoverable uk-card-small uk-card-body z-depth-15"
                 style="border-radius: 10px;">
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
                                <input class="uk-input form-looks font-light" uk-toggle="target: #modal-sections"
                                       placeholder="Create a thread..."
                                       style="height: 50px;font-size: 14px;" name="email" type="text" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="thread-card uk-card uk-card-default uk-card-small uk-card-body z-depth-15 uk-margin-top hoverable"
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
                            <p class="grey-text font-light" style="font-size: 0.9rem">Posted by <a href="#"
                                                                                                   class="accent-color-2 font-regular">Daffascript</a>
                                • 16 hours ago</p>
                            <a href="#" class="grey-text-3 font-extrabold"
                               style="font-size: 19px;top: -15px;position:relative">Apa sih ga
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
            <div
                class="thread-card uk-card uk-card-default uk-card-small uk-card-body z-depth-15 uk-margin-top hoverable"
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
                            <p class="grey-text font-light" style="font-size: 0.9rem">Posted by <a href="#"
                                                                                                   class="accent-color-2 font-regular">OpiekBelerang</a>
                                • 18 hours ago</p>
                            <a href="#" class="grey-text-3 font-extrabold"
                               style="font-size: 19px;top: -15px;position:relative">Bahahahhaa anjir kayak boba xD</a>
                            <img data-src="{{asset('img/thread_images/thread_1.jpg')}}" width="90%" class="z-depth-15"
                                 height="auto" uk-img style="margin-bottom: 30px;" alt="">
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
            <div
                class="thread-card uk-card uk-card-default uk-card-small uk-card-body z-depth-15 uk-margin-top hoverable"
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
                            <p class="grey-text font-light" style="font-size: 0.9rem">Posted by <a href="#"
                                                                                                   class="accent-color-2 font-regular">Shrewdtam</a>
                                • 20 hours ago</p>
                            <a href="#" class="grey-text-3 font-extrabold"
                               style="font-size: 19px;top: -15px;position:relative">IPhone gabisa nyalain personal
                                hotspot.</a>
                            <p class="grey-text-1 font-light" style="margin-top: -5px;">ini IPhone emang susah yak buat
                                nyalain personal hotspot nya? ane pake telkomsel gan tapi dibilang harus contact
                                provider inet nya dulu. ada yg tau cara aktifin personal hotspot nya?</p>
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
            <div class="uk-card uk-card-default uk-card-small uk-card-body z-depth-15"
                 uk-sticky="offset: 110; bottom: #top" style="border-radius: 10px;">
                <div class="uk-padding-small">
                    <div class="headerz" style="margin-top: -20px;">
                        <img src="{{asset('img/no_gadget.svg')}}" uk-img style="height: 70px;display: inline-block"
                             alt="">
                        <p class="font-heavy grey-text-4"
                           style="display:inline-block;position:relative;top: 5px;left: 10px;font-size: 20px;">{{$gadget->name}}</p>
                    </div>
                    <div style="margin-top: 20px;">
                        <ul class="uk-list uk-list-divider font-light grey-text-1" style="font-size: 0.9rem;">
                            <li>Released : <span class="font-bold grey-text-3">{{$gadget->year_released}}</span></li>
                            <li>Price : <span
                                    class="font-bold grey-text-3">Rp. {{number_format($gadget->price, 0, '.', '.')}}</span>
                            </li>
                            <li>Screen Size : <span class="font-bold grey-text-3">{{$gadget->screen_size}} Inch</span>
                            </li>
                            <li>Resolution : <span class="font-bold grey-text-3">{{$gadget->resolution}} Pixels</span>
                            </li>
                            <li>Camera : <span class="font-bold grey-text-3">{{$gadget->camera_pixel}} MP</span></li>
                            <li>RAM : <span class="font-bold grey-text-3">{{$gadget->ram}} GB</span></li>
                            <li>Chip : <span class="font-bold grey-text-3">{{$gadget->chip}}</span></li>
                            <li>Battery : <span class="font-bold grey-text-3">{{$gadget->battery}} mAh</span></li>
                            <li>OS : <span class="font-bold grey-text-3">{{$gadget->os}}</span></li>
                            <li>Storage : <span class="font-bold grey-text-3">{{$gadget->storage}} GB</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    @include('layouts.js')
@show
<script type="text/javascript">
    $('.thread-tab-post').addClass('uk-active');
    $('#post').show();
    $('#image').hide();
    $('#video').hide();

    function imageTabOpen() {
        $('.thread-tab-post').removeClass('uk-active');
        $('.thread-tab-image').addClass('uk-active');
        $('.thread-tab-video').removeClass('uk-active');
        $('#post').hide();
        $('#image').show();
        $('#video').hide();
    }

    function videoTabOpen() {
        $('.thread-tab-post').removeClass('uk-active');
        $('.thread-tab-image').removeClass('uk-active');
        $('.thread-tab-video').addClass('uk-active');
        $('#post').hide();
        $('#image').hide();
        $('#video').show();
    }

    function postTabOpen() {
        $('.thread-tab-post').addClass('uk-active');
        $('.thread-tab-image').removeClass('uk-active');
        $('.thread-tab-video').removeClass('uk-active');
        $('#post').show();
        $('#image').hide();
        $('#video').hide();
    }
</script>
</body>
</html>
