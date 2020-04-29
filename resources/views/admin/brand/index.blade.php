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
        <div class="uk-width-1" style="margin-top: 30px;">
            <div class="uk-card uk-card-default uk-card-body z-depth-15"
                 style="border-radius: 6px;padding:20px 20px;">
                <h5 class="grey-text-4 font-heavy" style="font-size: 1.8rem;display: inline">Manage Brands</h5>
                <a class="uk-button bg-gradient white-text uk-border-rounded uk-align-right"
                   style="margin-bottom: 50px;" href="{{route('brands.create')}}">+ Add</a>
                <table class="uk-table uk-table-divider" id="datatable">
                    <thead>
                    <tr>
                        <th style="font-weight: 500;">ID</th>
                        <th style="font-weight: 500;">Nama Brand</th>
                        <th style="font-weight: 500;">Logo</th>
                        <th style="font-weight: 500;">Created At</th>
                        <th style="font-weight: 500;">Action</th>
                    </tr>
                    </thead>
                    @foreach($data as $v)
                        <tr>
                            <td>{{$v->id}}</td>
                            <td>{{$v->name}}</td>
                            <td>
                                <img src="{{asset('img/brand_logo/'.$v->image)}}" style="height: 30px;" alt="">
                            </td>
                            <td class="font-light grey-text text-darken-1">{{\Carbon\Carbon::parse($v->created_at)->diffForHumans()}}</td>
                            <td>
                                <a href="{{route('brands.edit', $v->id)}}" class="uk-icon-button" uk-icon="pencil"></a>
                                <form id="delete{{$v->id}}" method="post"
                                      onsubmit="event.preventDefault();comfirm_popup(this, 'Are you sure want to delete this?');"
                                      action="{{route('brands.delete', $v->id)}}"
                                      style="display: inline">
                                    @csrf
                                    <input type="hidden" value="{{$v->id}}"
                                           name="id">
                                    <button type="submit"
                                            class="uk-icon-button"
                                            uk-icon="trash"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
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
