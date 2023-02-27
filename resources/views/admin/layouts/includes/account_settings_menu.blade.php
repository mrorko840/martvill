  <div class="card card-info shadow-none" id="nav">
    <div class="card-header p-t-20 border-bottom mb-2">
        @if (in_array('App\Http\Controllers\AccountSettingController@index', $prms))
            <h5>{{ __('Account Settings') }}</h5>
        @endif
    </div>
    <ul class="nav flex-column nav-pills" id="mcap-tab" role="tablist">
        @if (in_array('App\Http\Controllers\AccountSettingController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'options' ? 'active' : ''}}" href="{{ route('account.setting.option') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Options') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\SsoController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'sso' ? 'active' : ''}}" href="{{ route('sso.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Single Sign On') }} (SSO)</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\EmailController@emailVerifySetting', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'email_verify_setting' ? 'active' : ''}}" href="{{ route('emailVerifySetting') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('User Verifications') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\PreferenceController@password', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'password_preference' ? 'active' : ''}}" href="{{ route('preferences.password') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Password Strength') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\RoleController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'role' ? 'active' : ''}}" href="{{ route('roles.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Roles') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\PermissionRoleController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'permission' ? 'active' : ''}}" href="{{ route('permissionRoles.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Permissions') }}</a>
            </li>
        @endif
    </ul>
  </div>
