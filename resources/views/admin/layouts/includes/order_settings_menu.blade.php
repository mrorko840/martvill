<div class="card card-info shadow-none" id="nav">
    <div class="card-header p-t-20 border-bottom mb-2">
        @if (in_array('App\Http\Controllers\OrderSettingController@index', $prms))
            <h5>{{ __('Order Settings') }}</h5>
        @endif
    </div>
    <ul class="card-body nav nav-pills nav-stacked" id="mcap-tab" role="tablist">
        @if (in_array('App\Http\Controllers\OrderSettingController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'option' ? 'active' : ''}}" href="{{ route('order.setting.option') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Options') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\OrderStatusController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'status' ? 'active' : ''}}" href="{{ route('orderStatues.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Status') }}</a>
            </li>
        @endif
    </ul>
</div>
