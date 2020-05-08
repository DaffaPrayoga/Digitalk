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
<div class="uk-container uk-margin-medium-top">
    <p class="font-heavy grey-text-4 uk-heading-small">Brands<span class="accent-color">.</span></p>
    <div class="uk-child-width-expand@s uk-text-center uk-margin-medium-top" uk-grid
         uk-height-match="target: > div > .uk-card">
        @foreach($brands as $b)
            <div class="uk-width-1-5">
                <div
                    class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small z-depth-15"
                    style="padding-bottom: 30px;border-radius: 10px;">
                    <a href="#kontol">
                        <img class="uk-align-center" src="{{asset('img/brand_logo/'.$b->image)}}"
                             style="height: 30px;margin-top: 24px;margin-bottom: 35px;" alt="">
                    </a>
                    <hr class="uk-divider-icon">
                    <a class="brand-chip uk-border-rounded grey-text-2"
                       style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">{{$b->countGadget()}}
                        Gadgets</a><br><br>
                    <a class="brand-chip uk-border-rounded white-text bg-gradient-noshadow"
                       style="font-size: 13px;padding-left: 15px;padding-right: 15px;padding-top: 8px;padding-bottom: 8px;background-color: #eee;text-decoration: none">+234
                        Threads</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@section('js')
    @include('layouts.js')
@show
