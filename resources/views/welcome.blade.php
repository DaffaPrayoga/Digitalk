@section('head')
    @include('layouts.head')
@show
@section('navbar')
    @include('layouts.navbar')
@show
<div class="uk-container uk-margin-medium-top">
    <div class="uk-card uk-card-default uk-card-body uk-border-rounded bg-gradient-noshadow" style="z-index: -2">
        <div class="uk-container">
            <img src="{{asset('img/header.png')}}" uk-img style="height: 400px;z-index: -1" class="uk-position-bottom-right" alt="">
            <h3 class="white-text font-heavy uk-heading-medium uk-position-z-index">Lagi pengen<br>bahas gadget apa?</h3>
            <div class="uk-child-width-expand@s uk-text-center uk-margin-medium-top" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="background-color: rgba(0,0,0,0.1);box-shadow: none">Item</div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="background-color: rgba(0,0,0,0.1);box-shadow: none">Item</div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="background-color: rgba(0,0,0,0.1);box-shadow: none">Item</div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="background-color: rgba(0,0,0,0.1);box-shadow: none;display: none">Item</div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="background-color: rgba(0,0,0,0.1);box-shadow: none;display: none">Item</div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    @include('layouts.js')
@show
