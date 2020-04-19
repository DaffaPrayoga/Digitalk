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
    <p class="font-heavy grey-text-4 uk-heading-small">Brands</p>
    <div class="uk-child-width-expand@s uk-text-center uk-margin-medium-top" uk-grid
         uk-height-match="target: > div > .uk-card">
        <div>
            <div
                class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small z-depth-15">
                <p class="grey-text-4 font-extrabold uk-align-left"
                   style="font-size: 1.2rem;margin-bottom: 0px;">
                    IPhone 11 Pro
                </p>
                <p class="brand-chip uk-align-left font-bold" style="font-size: 11px;color: #e6e6e6;letter-spacing: 1px;margin-bottom: 20px;">APPLE</p>
                <span class="right brand-chip uk-align-left accent-color-background-3 grey-text-3 uk-border-rounded" style="font-size: 13px;color: #e6e6e6;padding-left: 10px;padding-right: 10px;padding-top: 4px;padding-bottom: 3px;">+234 Threads</span>
            </div>
        </div>
        <div>
            <div
                class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small z-depth-15">
                <p class="grey-text-4 font-extrabold uk-align-left"
                   style="font-size: 1.2rem;margin-bottom: 0px;">
                    Samsung S20
                </p>
                <p class="brand-chip uk-align-left font-bold" style="font-size: 11px;color: #e6e6e6;letter-spacing: 1px;margin-bottom: 20px;">SAMSUNG</p>
                <span class="brand-chip uk-align-left accent-color-background-3 grey-text-3 uk-border-rounded" style="font-size: 13px;color: #e6e6e6;padding-left: 10px;padding-right: 10px;padding-top: 4px;padding-bottom: 3px;">+177 Threads</span>
            </div>
        </div>
        <div>
            <div
                class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small background-darken-1">
                <p class="white-text font-extrabold uk-align-left"
                   style="font-size: 1.2rem;margin-bottom: 0px;">
                    Oneplus 8
                </p>
                <p class="brand-chip uk-align-left font-bold" style="font-size: 11px;color: #e6e6e6;letter-spacing: 1px;margin-bottom: 20px;">ONEPLUS+</p>
                <span class="brand-chip uk-align-left accent-color-background-3 grey-text-3 uk-border-rounded" style="font-size: 13px;color: #e6e6e6;padding-left: 10px;padding-right: 10px;padding-top: 4px;padding-bottom: 3px;">+233 Threads</span>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small"
                 style="background-color: rgba(0,0,0,0.1);box-shadow: none;display: none">Item
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small"
                 style="background-color: rgba(0,0,0,0.1);box-shadow: none;display: none">Item
            </div>
        </div>
    </div>
</div>
@section('js')
    @include('layouts.js')
@show
