  <div class="card card-info shadow-none" id="nav">
    <div class="card-header p-t-20 border-bottom mb-2">
        @if (in_array('App\Http\Controllers\PreferenceController@index', $prms))
            <h5>{{ __('General Settings') }}</h5>
        @endif
    </div>
    <ul class="card-body nav nav-pills nav-stacked" id="mcap-tab" role="tablist">
        @if (in_array('App\Http\Controllers\CompanySettingController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'system_setup' ? 'active' : ''}}" href="{{ route('companyDetails.setting') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('System Setup') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\PreferenceController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'preference' ? 'active' : ''}}" href="{{ route('preferences.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Preference') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\MaintenanceModeController@enable', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'maintenance' ? 'active' : ''}}" href="{{ route('maintenance.enable') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Maintenance Mode') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\LanguageController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'language' ? 'active' : ''}}" href="{{ route('language.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Languages') }}</a>
            </li>
        @endif
    </ul>
  </div>
